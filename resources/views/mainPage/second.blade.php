
<!doctype html>
<html lang="en">
<head>
    @include('base_layout.meta.meta')
    <title>News</title>
</head>
<body>
<script src="{{asset('controller/js/loopT.js')}}"></script>

@include('base_layout.navigation.navigation')

<div class="container background--color">
    <div class="gn"><strong>G<span class="n">N</span></strong></div>
    <p class="text-uppercase font-weight-bold text-center h3" style="color: #8E44AD">SEARCH REASULTS</p>

    <hr>




    <div class="row justify-content-center">
        <img src="{{asset('controller/img/1.png')}}" class="col-4 img--size">
        <div class="col-6 txt--size">
            <strong class="col-4 title">Title title</strong>
            <div class="col-8 txt-con">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore magna aliqua. Ut enim ad minim veniam.</div>

        </div>
    </div>
    <hr class="col-8">

    <div id="loopt"></div>



</div>
<!-- Footer -->
@include('base_layout.footer.footer')



<script src="{{asset('controller/js/loopT.js')}}"></script>
</body>
</html>