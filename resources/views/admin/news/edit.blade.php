@extends('admin.layout1.master')
@section('title','إضافة منتج جديد ')
@section('content')



    <div class="portlet box green">

        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form  class="form-horizontal" action="{{route('updateNews')}}"  enctype="multipart/form-data" method="post">
                @csrf
<input type="hidden" value="{{$new->id}}" name="id">
                <div class="form-body">

                    <div class="form-group">
                        <label class="col-md-3 control-label">عنوان الخبر
                            <span class="required"> * </span>
                        </label>
                        <div class="col-md-4">

                            <input type="text" name="title" value="{{$new->title}}" class="form-control input-circle-right" placeholder="يرجى ادخال عنوان الخبر" required>
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">وصف قصير
                            <span class="required"> * </span>

                        </label>
                        <div class="col-md-4">

                                <input type="text"  value="{{$new->summary}}" name="summary" class="form-control input-circle-right" maxlength="20" placeholder="وصف قصير" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">محتوى الخبر
                            <span class="required"> * </span>

                        </label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <textarea  class="form-control input-circle-left" name="content"  required>
                                    {{$new->content}}
                                </textarea>
                                <span class="input-group-addon input-circle-right">
                                                                        <i class="fa fa-info"></i>
                                                                    </span>
                        </div>
                        </div>
                    </div>

                <div class="form-group">
                    <label class="control-label col-md-3">نوع اللعبة
                        <span class="required"> * </span>
                    </label>
                    <div class="col-md-4">
                        <select class="form-control select2me select2-hidden-accessible" name="gametype" tabindex="-1" aria-hidden="true">
                            <option value="{{$new->gameType->id}}"> {{$new->gameType->name}}</option>

                        @foreach($gameType as $categories)
                                @if($categories->id != $new->gameType->id)
                                <option value="{{$categories->id}}">{{$categories->name}} </option>
                                @endif
                                @endforeach
                        </select>
                    </div>
                </div> <div class="form-group">
                    <label class="control-label col-md-3">نوع المنصة
                        <span class="required"> * </span>
                    </label>
                    <div class="col-md-4">
                        <select class="form-control select2me select2-hidden-accessible" name="platform" tabindex="-1" aria-hidden="true">
                            <option >{{$new->platform}}</option>

                            <option >X BOX</option>
                                <option >PC</option>
                                <option >PS4</option>
                                <option >mobile</option>
                        </select>
                    </div>

                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">الحالة
                        <span class="new"> مهم </span>
                    </label>
                    <div class="col-md-4">
                        <select class="form-control select2me select2-hidden-accessible" name="status" tabindex="-1" aria-hidden="true">
                            @if($new->status == 0)
                                <option value="{{$new->status}}">مرئي</option>
                                <option value="0">مخفي</option>

                            @elseif($new->status == 1)
                                <option value="{{$new->status}}">مخفي</option>
                                <option value="1">مرئي</option>
                            @endif
                        </select>
                    </div>
                </div>

                <div class="form-group ">
                    <label class="control-label col-md-3">رفع صورة المنتج</label>
                    <div class="col-md-9">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                <img src="{{asset($new->image)}}" class="img-thumbnail" width="400" height="400" alt="poduct image" />
                                <span class="error col-md-12">{{$errors->first('image')}}</span>

                            </div>
                            <div>

                                <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new"> تحديد صورة </span>
                                                                <span class="fileinput-exists"> تغيير </span>
                                                                <input type="file" name="image" id="image_product" accept="image/*"> </span>
                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> حذف </a>
                            </div>
                        </div>
                        <div class="clearfix margin-top-10">
                        </div>
                    </div>
                </div>


                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn btn-circle green">تعديل</button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>

@endsection

@section('script')
    <script>

        $("#image_product").change(function() {

            var val = $(this).val();

            switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase()){
                case 'gif': case 'jpg': case 'png':


                    break;
                default:
                    $(this).val('');
                    // error message here
                    alert("يرجى اضافة صورة");
                    break;
            }
        });
        $("#newImg").click(function(){
            $("#in2").show();
            $('#newImg').hide();
        });
    </script>
@endsection