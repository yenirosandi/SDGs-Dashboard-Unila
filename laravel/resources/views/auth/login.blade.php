@extends('frontend.master')

@section('title_breadcrumb','Login')	

@section('content')

<!DOCTYPE HTML>
<html>
  <head>
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- js -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.js"> </script>

    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!--static chart-->
  </head>
  <body>
    <div class="login-page">
        <div class="login-main">
        	 <div class="login-head">
    				<h1>LOGIN</h1>
    			</div>
    			<div class="login-block">
                    <form method="POST" action="{{ route('login') }}">
                            @csrf

                        <div class="form-group row">    
                            <!-- <input type="text" name="username" placeholder="nip/username" required> -->
                            <input id="email" type="email" placeholder="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>

                        <div class="form-group row">   
                        <!-- <input type="password" name="password" class="lock" placeholder="Password" required> -->
                        

                            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        
                        
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
    					<input type="submit" name="Login" value="Login">
              <h3>Lupa password? @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Klik Disini!') }}
                                    </a>
                                @endif</h3>
                    </form>
    		    </div>
        </div>
      </div>
      </div>
</body>
</html>

@endsection
