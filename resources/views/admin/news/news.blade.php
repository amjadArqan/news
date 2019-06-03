@extends('admin.layout1.master')
@section('title','كل المنتجات')
@section('content')

    <div class="row">

        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-settings font-red"></i>
                        <span class="caption-subject font-red sbold uppercase">عرض المنتجات</span>
                    </div>

                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">
                                    <a href="{{route('addNews')}}">
                                    <button id="sample_editable_1_new" class="btn green"> اضافة خبر
                                        <i class="fa fa-plus"></i>

                                    </button>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="table-responsive">

                    <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                        <thead>
                        <tr>

                            <th> # </th>

                            <th> عنوان الخبر </th>
                            <th> النوع </th>
                            <th> المنصة </th>
<th>الحالة</th>
                            <th> الناشر </th>
                            <th> خيارات </th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($news as $new)

                            <tr>
                            <td>
                                {{$new->id}}
                            </td>
                            <td> {{$new->title}} </td>
                            <td> {{$new->gameType->name}} </td>
                            <td class="center"> {{$new->platform}} </td>

                                <td>
                                @if($new->status == 0)
                                    <span class="label label-sm label-success"> مرئي </span>
                                    @else
                                    <span class="label label-sm label-warning"> مخفي </span>
                                    @endif
                            </td>
                                <td>{{$new->user->name}}</td>

                                <td>

                                    <a href="{{route('newsEdit',['id' =>$new->id ])}}" class="btn btn-primary">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{route('nDestroy',['id' =>$new->id])}}"  class="btn btn-danger" id="delete-product" >

                                {{--<a   class="btn btn-danger delete-product"  data-token="{{ csrf_token() }} data-id="{{$products->id}}" >--}}
                                    <i class="fa fa-trash"></i>
                                </a>

                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                    </div>
                    {{ $news->links() }}

                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>

@endsection
@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    {{--<script>--}}

    {{--$("#delete-product").click(function(){--}}
        {{--var id = $(this).data("id");--}}

        {{--$.ajax(--}}
            {{--{--}}
                {{--type: "DELETE",--}}

                {{--url: '/trader/pDestroy/'+id,--}}
                {{--method:'GET',--}}
                {{--// type: 'DELETE',--}}

                {{--data: {--}}
                    {{--body:'',--}}
                    {{--data: {_method: 'delete', _token :token},--}}
                {{--},success: function (data) {--}}
                    {{--console.log(data);--}}
                    {{--$("#url" + url_id).remove();--}}
                {{--},--}}
                {{--error: function (data) {--}}
                    {{--console.log('Error:', data);--}}
                {{--}--}}
            {{--});--}}

    {{--});--}}
{{--</script>--}}

@endsection
