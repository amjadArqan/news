@extends('admin.layout1.master')
@section('title','Dashboard')
@section('content')
    <!--breadcrumbs-->

    <div class="portlet box green">
        <div class="portlet-title">
            <h4 style="font-family: Arial, Verdana, sans-serif"> اضافة مدير</h4>
        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form  class="form-horizontal" action="{{route('storeAdmin') }}"  enctype="multipart/form-data" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-body">

                    <div class="form-group">
                        <label class="col-md-3 control-label">اسم المدير
                            <span class="required"> * </span>
                        </label>
                        <div class="col-md-4">

                            <input type="text" name="name" class="form-control input-circle-right" placeholder="يرجى ادخال الإسم" required>
                        </div>
                        <span class="error col-md-12">{{$errors->first('name')}}</span>

                    </div>
                </div>
                <div class="form-body">

                    <div class="form-group">
                        <label class="col-md-3 control-label">اسم المستخدم
                            <span class="required"> * </span>
                        </label>
                        <div class="col-md-4">

                            <input type="text" name="username" class="form-control input-circle-right" placeholder="يرجى ادخال الإسم" required>
                        </div>
                        <span class="error col-md-12">{{$errors->first('username')}}</span>

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">البريد الإلكتروني
                        <span class="required"> * </span>

                    </label>
                    <div class="col-md-4">

                        <input type="email" name="email" class="form-control input-circle-right"  placeholder="البريد الإلكتروني" required>
                    </div>
                    <span class="error col-md-12">{{$errors->first('email')}}</span>

                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">كلمة المرور
                        <span class="required"> * </span>

                    </label>
                    <div class="col-md-4">

                        <input type="password" name="password" class="form-control input-circle-right"  placeholder="كلمة المرور" required>
                    </div>

                </div>
                <span class="error col-md-12">{{$errors->first('password')}}</span>
                <div class="form-group">
                    <label class="control-label col-md-3">الأدوار
                        <span class="required"> * </span>
                    </label>
                    <div class="col-md-4">
                        <select class="form-control select2me select2-hidden-accessible" name="member" tabindex="-1" aria-hidden="true">
                            <option value="1">مشرف</option>
                            <option value="0">مسؤول</option>
                        </select>
                    </div>
                </div>

                <div class="form-group ">
                    <label class="control-label col-md-3">رفع صورة المنتج</label>
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
                            <span class="error col-md-12">{{$errors->first('image')}}</span>

                        </div>
                    </div>
                </div>
                <hr>

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
