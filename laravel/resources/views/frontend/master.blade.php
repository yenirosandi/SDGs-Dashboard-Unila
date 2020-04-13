<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">

    <link rel="icon" href="{{asset('frontend/gambar/sdgs.png')}}">

    <title>@yield('title','Master Page')</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="{{asset('dist/css/bootstrap.min.css')}}" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous"> -->
    <!-- <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet"> -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">


    <!-- Core Stylesheet -->
    <link href="{{asset('frontend/mosh/style.css')}}" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="{{asset('frontend/mosh/css/responsive.css')}}" rel="stylesheet">
  </head>

<body>

   
      @include('frontend.navbar')
      <br><br><br><br><br><br>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> {{ date('d M Y')}}
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

    <script src="{{asset('js/bootstrap.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('frontend/mosh/js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('frontend/mosh/js/active.js')}}"></script>

        <!-- Bootstrap core JavaScript-->
        <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>
    <!-- Page level plugins -->
    <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/datatables-demo.js')}}"></script>




    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script> -->
</body>
</html>
