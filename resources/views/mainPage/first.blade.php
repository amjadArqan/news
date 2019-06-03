<!doctype html>
<html lang="en">
<head>
@include('base_layout.meta.meta')
    <title>News</title>
</head>
<body>
<!--Nav-->
<nav class="container--nav">
    <ul class="vertical-center--ul">
        <li class="float-left li--nav"><a href="#"><strong>G<span>N</span></strong></a></li>
        <li class="float-left li--nav" ><a href="#">News</a> </li>
        <li class="float-left li--nav"><a href="#">Contact</a> </li>
        <li class="float-left li--nav"><a href="#">About</a> </li>
        <li class="float-left li--nav"><input style="width: 300px;border-radius: 10px" placeholder=" Search"></li>

    </ul>
</nav>


<div class="container background--color">
    <div class="gn"><strong>G<span class="n">N</span></strong></div>
    <p class="text-uppercase font-weight-bold text-center h3">Content</p>

    <hr>

    <div class="row justify-content-center">
        <img src="{{asset('controller/img/1.png')}}" class="col-4 img--size">
        <div class="col-6 txt--size">
            <strong class="col-4 title">Title title</strong>
            <div class="col-8 txt-con">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore magna aliqua. Ut enim ad minim veniam.</div>

            <div class="row row--height">
                <a href="#" class="col-2 tag--contr tag--margin-left1 text-dark">Tag 1</a>
                <a href="#" class="col-2 tag--contr tag--margin-left2 text-dark">Tag 2</a>
                <a href="#" class="col-2 tag--contr tag--margin-left3 text-dark">Tag 3</a>

            </div>
        </div>
    </div>
    <hr class="col-8">
    <div id="loop"></div>




</div>
<!-- Footer -->
@include('base_layout.footer.footer')

<script src="{{asset('controller/js/jsLoop.js')}}"></script>
</body>
</html>