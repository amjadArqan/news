<?php

namespace App\Http\Controllers;

use App\gameType;
use App\news;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Image;

class AdminController extends Controller
{
    public  function adminAdd(){
        return view('admin.admin.add');
    }


    public  function gameType(){
        return view('admin.category.create');
    }

    public  function addNews(){
        $category = gameType::all();
        return view('admin.news.add',compact('category'));
    }

  public  function news(){
        $news = news::orderBy('created_at','desc')->paginate('10');

        return view('admin.news.news',compact('news'));
    }




    public function storeAdmin(Request $request){
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],

            'password' => ['required', 'string', 'min:8',],
            'image' => ['required','mimes:jpeg,png,jpg,gif,svg','max:2048'],

        ]);
        try {
            $admin= new User();
            $password = $request->password;
            $password =  Hash::make($password);
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            Storage::put('public/imgAdmin/'. $filename, fopen($file, 'r+'));
            $admin->fill($request->all());
            $admin->password = $password;
            $admin->image = "/imgAdmin/" . $filename;
            $admin->save();

            return redirect()->back()->with('success', 'تم اضافة المستخدم بنجاح ');
        } catch (ModelNotFoundException $exception) {
            return redirect()->back()->with('error', 'حدث خطأ ما ');
        }

    }

    public function storeCategory (Request $request){

        $game = new gameType();
        $game->fill($request->all());
        $game->save();
        return redirect()->back()->with('success', 'تم اضافة النوع بنجاح ');

    }


    public function storeNews (Request $request){
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        Storage::put('public/imageNews/'. $filename, fopen($file, 'r+'));
        $news = new news();
        $news->fill($request->all());
        $news->user_id = Auth::user()->id;
        $news->image = "/imageNews/".$filename;
        $news->save();
        return redirect()->back()->with('success', 'تم اضافة الخبر بنجاح ');

    }

    public function nDestroy($id)
    {

        try {
            $new = news::findorfail($id);
            $new->delete();
            return redirect()->back()->with('success', 'تم حذف الخبر بنجاح ');


        } catch (ModelNotFoundException $exception) {
            return redirect()->back()->with('error', 'حدث خطأ ما ');
        }
    }

    public function newsEdit($id){
        $new = news::findorfail($id);
        $gameType = gameType::all();
        return view('admin.news.edit',compact('new','gameType'));

    }


    public function updateNews (Request $request){

        try {
            $id = $request->id;
            $new = news::findOrFail($id);

        } catch (ModelNotFoundException $exception) {
            return redirect()->back()->with('error', 'هذا المنتج غير موجود');
        }
        $image = null;
        if ($request->hasFile('image')) {
            Storage::delete("public/".$new->image);
            if(File::exists(public_path($new->image))) {

                File::delete(public_path($new->image));
            }
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            Storage::put('public/imageNews/'. $filename, fopen($file, 'r+'));
            $image = "storage/imageNews/" . $filename;

        }

        $new->fill($request->all());
        if($image != null){
            $new->image = $image;
        }
        $new->update();
        return redirect()->back()->with('success', 'المنتج' . $new->title. ' تم تحديث بيناتاته');
    }

}
