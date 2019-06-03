@extends('admin.layout1.master')
@section('title','Dashboard')
@section('content')
    <!--breadcrumbs-->

    <div class="portlet box green">
        <div class="portlet-title">
            <h4 style="font-family: Arial, Verdana, sans-serif"> اضافة تصنيف</h4>
        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form  class="form-horizontal" action="{{route('storeCategory')}}"  enctype="multipart/form-data" method="post">
                @csrf

                <div class="form-body">

                    <div class="form-group">
                        <label class="col-md-3 control-label">اسم الصنف
                            <span class="required"> * </span>
                        </label>
                        <div class="col-md-4">

                            <input type="text" name="name" class="form-control input-circle-right" placeholder="يرجى ادخال الإسم" >
                        </div>
                        <span class="error col-md-12">{{$errors->first('name')}}</span>

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
