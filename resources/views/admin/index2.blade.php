@extends('admin.layout1.master')
@section('title','الصفحة الرئيسية ')
@section('content')


    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="fa fa-shopping-cart font-dark"></i>
                        <span class="caption-subject bold uppercase">أخر الاخبار </span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">
                                    <a href="">
                                    <button id="sample_editable_1_new" class="btn sbold green"> اضافة منتج جديد
                                        <i class="fa fa-plus"></i>

                                    </button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                    <table class="table table-responsive table-striped table-bordered table-hover table-checkable order-column
 table-striped table-bordered table-sm" cellspacing="0"
                           width="100%" id="sample_1">
                        <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>                                     اسم المنتج
                            </th>
                            <th>                                     عدد المشاهدات
                            </th>
                            <th> سعر العرض   </th>
                            <th> بداية العرض </th>
                            <th> نهاية العرض </th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--@php--}}
                            {{--$count = 1--}}
                        {{--@endphp--}}
                        {{--@foreach($product as $products)--}}

                            {{--<tr class="odd gradeX">--}}
                            {{--<td>--}}
                               {{--<i class="fa fa-shopping-cart"></i>--}}
                            {{--</td>--}}
                            {{--<td> {{$products->p_name}} </td>--}}
                            {{--<td>--}}
                               {{--{{$products->viewCounter}}--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--{{$products->price}}--}}
                            {{--</td>--}}
                            {{--<td class="center"> {{$products->p_start}} </td>--}}
                            {{--<td>--}}

                               {{--{{$products->p_end}}--}}
                            {{--</td>--}}
                        {{--</tr>--}}

                        {{--</tbody>--}}

                        {{--@endforeach--}}
                    </table>
                    </div>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>

@endsection