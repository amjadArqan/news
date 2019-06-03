<!DOCTYPE html>

<html lang="ar" dir="rtl">
<!--<![endif]-->

<!-- BEGIN HEAD -->
<head>

    @include('admin.layout1.header_meta')
<title>Dashborad for trader</title>
    @yield('style')
    <style>
        .no-js #loader { display: none;  }
        .js #loader { display: block; position: absolute; left: 100px; top: 0; }
        .se-pre-con {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url(../Preloader_3.gif) center no-repeat #fff;
        }
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function() {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>

</head>
<!-- END HEAD -->
<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
<div class="se-pre-con"></div>

    <!-- BEGIN HEADER -->
@include('admin.layout1.header')
<!-- END HEADER -->

    <!-- BEGIN HEADER & CONTENTdd DIVIDER -->
    <!-- END HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>

    <!-- BEGIN CONTAINER -->
    <!-- BEGIN CONTENT -->
            <!-- BEGIN CONTENT BODY -->
    <div class="page-container">

    @include('admin.layout1.nav')
    <!-- BEGIN QUICK SIDEBAR -->
        <a href="javascript:;" class="page-quick-sidebar-toggler">
            <i class="icon-login"></i>
        </a>


    <div class="page-content-wrapper">
        <div class="page-content">
                                    @if(session('error'))
                                        <div class="alert alert-danger">
                                            {{session('error')}}
                                        </div>
                                    @elseif(session('success'))
                                        <div class="alert alert-success">
                                            {{session('success')}}
                                        </div>
                                @endif
                    @yield('content')


        <!-- BEGIN QUICK SIDEBAR -->

    <!-- END QUICK SIDEBAR -->

    </div>
                            </div>
    </div>
    <!-- BEGIN FOOTER -->
@include('admin.layout1.footer')
<!-- END FOOTER -->

    <!-- partial -->
<!-- main-panel ends -->
<!-- page-body-wrapper ends -->

@include('admin.layout1.footer_meta')
@yield('script')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

</body>
</html>