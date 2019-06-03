
<!doctype html>
<html lang="en">
<head>
  @include('base_layout.meta.meta')

    <title>News</title>
</head>
<body>

<!--Nav-->
@include('base_layout.navigation.navigation')


<div class="container background--color">

    @include('base_layout.logo.logo')

    <p class="text-uppercase font-weight-bold  h3" style="border-left: 6px solid #8E44AD;">&nbsp;Content</p>
    <hr>
    <div class="row justify-content-center">
        <img src="{{asset('controller/img/7.jpg')}}" class="col-8" style="height: 400px">

    </div>
    <hr>
    <div class="row">
        <a href="#" class="col-1 text-center text-white" style="background-color: #8E44AD;height: 25px;border-radius: 10px">Tags</a>

    </div>
    <br>
    <hr>

    <div class="row justify-content-center">
        <div class="col-10" style="line-height: 50px">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore magna aliqua. Ut enim ad minim veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore magna aliqua. Ut enim ad minim veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore magna aliqua. Ut enim ad minim veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore magna aliqua. Ut enim ad minim veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore magna aliqua. Ut enim ad minim veniam.

        </div>
    </div>
    <div class="row">
        <div class="col-2 text-center text-white" style="height: 30px;background-color: #8E44AD;border-radius: 10px">Related News</div>
        <hr class="col-9">

    </div>

    <br>

    <div class="row justify-content-center">
        <img src="{{asset('controller/img/5.jpg')}}" class="col-3" style=";height: 220px">
        <img src="{{asset('controller/img/5.jpg')}}" class="col-3" style=";height: 220px">
        <img src="{{asset('controller/img/5.jpg')}}" class="col-3" style=";height: 220px">
        <img src="{{asset('controller/img/5.jpg')}}" class="col-3" style=";height: 220px">

    </div>

    <div class="row justify-content-center">
        <a href="#" style="line-height: 40px" class="col-3 text-uppercase text-dark">Title</a>
        <a href="#" style="line-height: 40px" class="col-3 text-uppercase text-dark">Title</a>
        <a href="#" style="line-height: 40px" class="col-3 text-uppercase text-dark">Title</a>
        <a href="#" style="line-height: 40px" class="col-3 text-uppercase text-dark">Title</a>

    </div>

    <div class="row justify-content-center">
        <a href="#" class="col-3 text-uppercase text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore magna aliqua. </a>
        <a href="#" class="col-3 text-uppercase text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore magna aliqua. </a>
        <a href="#" class="col-3 text-uppercase text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore magna aliqua. </a>
        <a href="#" class="col-3 text-uppercase text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore magna aliqua. </a>

    </div>

    <br>


</div>

@include('base_layout.footer.footer')

</body>
</html>