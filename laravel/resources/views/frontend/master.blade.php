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

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">


    <!-- Core Stylesheet -->
    <link href="{{asset('frontend/style.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/mosh/style.css')}}" rel="stylesheet">

    <!-- Responsive CSS -->
    <!-- <link href="{{asset('frontend/mosh/css/responsive.css')}}" rel="stylesheet"> -->
  </head>

<body>

   
      @include('frontend.navbar')
      <br><br><br><br><br><br>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> {{ date('d M Y')}}
            </li>
        </ol>
        <main role="main" class="main">

            <div class="container">

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

    <script>
        window.onscroll = function() {myFunction()};

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
        }
    </script>



</body>
</html>
