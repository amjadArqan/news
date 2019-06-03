<!doctype html>
<html lang="en">
<head>
    @include('base_layout.meta.meta')
    <title>News</title>
</head>
<body>
@include('base_layout.navigation.navigation')

<div class="container background--color">
   @include('base_layout.logo.logo')

    <br>
    <div class="row">

        <img class="col-9" src="{{asset('controller/img/ADS.png')}}" style="height: 200px;position: relative;bottom:80px ">
    </div>

    <hr>

    <div class="row justify-content-center">
        <img src="{{asset('controller/img/1.png')}}" class="col-5 img--size"style="height: 250px">
        <div class="col-6 txt--size">
            <strong class="col-4 title">Title title</strong>
            <div style="line-height: 55px" class="col-8 txt-con">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore magna aliqua. Ut enim ad minim veniam.</div>

        </div>
    </div>
    <hr class="col-8">
    <div class="row justify-content-center">
        <img src="{{asset('controller/img/5.jpg')}}" class="col-3" style=";height: 220px">
        <img src="{{asset('controller/img/5.jpg')}}" class="col-3" style=";height: 220px">
        <img src="{{asset('controller/img/5.jpg')}}" class="col-3" style=";height: 220px">
        <img src="{{asset('controller/img/5.jpg')}}" class="col-3" style=";height: 220px">

    </div>

    <div class="row justify-content-center">
        <a href="#" style="line-height: 40px" class="col-3 text-uppercase text-center text-dark">Title</a>
        <a href="#" style="line-height: 40px" class="col-3 text-uppercase text-center text-dark">Title</a>
        <a href="#" style="line-height: 40px" class="col-3 text-uppercase text-center text-dark">Title</a>
        <a href="#" style="line-height: 40px" class="col-3 text-uppercase text-center text-dark">Title</a>

    </div>
    <br><br>

    <div class="row justify-content-center">
        <img src="{{asset('controller/img/1.png')}}" class="col-4 img--size">
        <div class="col-6 txt--size">
            <strong class="col-4 title">Title title</strong>
            <div style="line-height: 55px" class="col-8 txt-con">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore magna aliqua. Ut enim ad minim veniam.</div>

        </div>
    </div>
    <hr class="col-8">
    <div id="loop"></div>

    <!--
    <script>

        //Do not be afraid
        //Process Loop (:
        var html = "    <div class=\"row justify-content-center\">\n" +
            "        <img src=\"{{asset('controller/img/1.png')}}\" class=\"col-4 img--size\">\n" +
            "        <div class=\"col-6 txt--size\">\n" +
            "            <strong class=\"col-4 title\">Title title</strong>\n" +
            "            <div style=\"line-height: 55px\" class=\"col-8 txt-con\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore magna aliqua. Ut enim ad minim veniam.</div>\n" +
            "\n" +
            "        </div>\n" +
            "    </div>\n" +
            "    <hr class=\"col-8\">";



        var text = "";
        var i;
        for (i = 0; i < 150; i++) {
            text += html;
        }
        document.getElementById("loop").innerHTML = text;

    </script>

-->

</div>
<!-- Footer -->
@include('base_layout.footer.footer')
</body>
</html>