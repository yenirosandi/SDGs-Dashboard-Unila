<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="author" content="">

    <link rel="icon" href="{{asset('frontend/gambar/sdgs.png')}}">

    <title>@yield('title','Master Page')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template
    <link href="{{asset('dist/css/album.css')}}" rel="stylesheet"> -->

    <!-- Core Stylesheet -->
    <link href="{{asset('frontend/mosh/style.css')}}" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="{{asset('frontend/mosh/css/responsive.css')}}" rel="stylesheet">
  </head>

<body>

   
      @include('frontend.navbar')
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> {{ date('d M Y')}} / @yield('title_breadcrumb')
            </li>
        </ol>
   <!-- <div class="container"> -->
      @yield('content')

      @include('frontend.footer')
      


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="{{asset('dist/js/vendor/jquery-slim.min.js')}}"><\/script>')</script>
    <script src="{{asset('dist/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dist/js/vendor/holder.min.js')}}"></script> -->


    <!-- MOSH TEMPLT -->
        <!-- jQuery-2.2.4 js -->
    <script src="{{asset('frontend/mosh/js/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('frontend/mosh/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('frontend/mosh/js/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('frontend/mosh/js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('frontend/mosh/js/active.js')}}"></script>
</body>
</html>
