<?php

namespace App\Http\Controllers;

use App\news;
use Illuminate\Http\Request;

class newController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('test');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $new = new news();
        $new->fill($request->all());
        $new->save();
        $uploadedFile = $request->file('image');
        $fileName = $uploadedFile->getClientOriginalName();

        $uploadedFile->move('public/img/', $fileName);

        return redirect()->back()->with('success ','تم اضافة الخبر بنجاح');





    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function show(news $news)
    {


        $news = news::all();
        return view('showpage',compact('news'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $new = news::findorfail($id);
        return view('editpage',compact('new','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $new = news::findorfail($request->id);
        $new->fill($request->all());
        $new->update();

        return redirect()->back()->with('success','Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(news $news)
    {
        //
    }

    public function delete($id)
    {
        $new = news::findorfail($id);
        $new->delete();
        return redirect()->back()->with('success','deleted successfully');
    }
}
