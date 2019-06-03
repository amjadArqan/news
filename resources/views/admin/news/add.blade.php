@extends('admin.layout1.master')
@section('title','إضافة منتج جديد ')
@section('content')



    <div class="portlet box green">
        <div class="portlet-title">
          <h4 style="font-family: Arial, Verdana, sans-serif"> اضافة منتج جديد</h4>
        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form  class="form-horizontal" action="{{route('storeNews')}}"  enctype="multipart/form-data" method="post">
                @csrf

                <div class="form-body">

                    <div class="form-group">
                        <label class="col-md-3 control-label">عنوان الخبر
                            <span class="required"> * </span>
                        </label>
                        <div class="col-md-4">

                            <input type="text" name="title" class="form-control input-circle-right" placeholder="يرجى ادخال عنوان الخبر" required>
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">وصف قصير
                            <span class="required"> * </span>

                        </label>
                        <div class="col-md-4">

                                <input type="text" name="summary" class="form-control input-circle-right" maxlength="20" placeholder="وصف قصير" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">محتوى الخبر
                            <span class="required"> * </span>

                        </label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <textarea  class="form-control input-circle-left" name="content"  required>
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
                            @foreach($category as $categories)
                                <option value="{{$categories->id}}">{{$categories->name}} </option>
                                @endforeach
                        </select>
                    </div>
                </div> <div class="form-group">
                    <label class="control-label col-md-3">نوع المنصة
                        <span class="required"> * </span>
                    </label>
                    <div class="col-md-4">
                        <select class="form-control select2me select2-hidden-accessible" name="platform" tabindex="-1" aria-hidden="true">

                                <option >X BOX</option>
                                <option >PC</option>
                                <option >PS4</option>
                                <option >mobile</option>
                        </select>
                    </div>
                </div>

                <div class="form-group ">
                    <label class="control-label col-md-3">رفع صورة للخبر</label>
                    <div class="col-md-9">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> </div>
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
                <hr>
                {{--<div class="form-group ">--}}
                    {{--<label class="control-label col-md-3">إضافة صور أخرى</label>--}}
                    {{--<div class="col-md-9">--}}

                            {{--<div>--}}
                                                            {{--<span class="btn red btn-outline btn-file">--}}
                                                                {{--<span class="fileinput-new"> تحديد صورة </span>--}}
                                                                {{--<span class="fileinput-exists"> تغيير </span>--}}
                                                                {{--<input type="file" name="imageGallery[]" id="image_product" accept="image/*" multiple> </span>--}}
                                {{--<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> حذف </a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="clearfix margin-top-10">--}}
                        {{--</div>--}}
                    {{--</div>--}}

                                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn btn-circle green">اضافة</button>
                            <button type="button" class="btn btn-circle grey-salsa btn-outline">الغاء</button>
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