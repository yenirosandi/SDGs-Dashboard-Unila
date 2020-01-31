<!doctype html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="author" content="">

    <link rel="icon" href="{{asset('frontend/gambar/sdgs.png')}}">

    <title>@yield('title','Master Page')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">


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
        <main role="main" style="background-color:#D3D3D3; padding: 40px;">

        <div class="container" style=" border-radius: 30px; padding: 50px 50px 50px 50px; background: #FFFFFF;   box-shadow: 5px 10px 18px #888888;">

   <!-- <div class="container"> -->
      @yield('content')

      @include('frontend.footer')
      

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
