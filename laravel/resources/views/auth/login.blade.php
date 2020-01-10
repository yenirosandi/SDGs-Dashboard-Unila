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
    <script src="{{asset('js/jquery-2.1.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"> </script>

    <!-- CSS -->
    <!-- <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all"/> -->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/mosh/style.css')}}" rel="stylesheet">



  </head>
  <main role="main"  padding: 40px;>

    <div class="login-page">
        <div class="login-main">
        	    <div class="login-head">
    				<h1>LOGIN</h1>
    			</div>
    			<div class="login-block">
                    <form method="POST" action="{{ route('login') }}">
                            @csrf

                        <div class="form-group row">
                            <!-- <label for="login" class="col-sm-4 col-form-label text-md-right">
                                {{ __('Username or Email') }}
                            </label> -->
                        
                                <input id="login" type="text" placeholder="Username / Email"
                                    class="form-control{{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}"
                                    name="login" value="{{ old('username') ?: old('email') }}" required autofocus>
                        
                                @if ($errors->has('username') || $errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        </div>
                        <div class="form-group row">   
                        <!-- <input type="password" name="password" class="lock" placeholder="Password" required> -->
                        

                            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" autofocus>
                           
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        
                        
                        <!-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                         -->
                        
                        <input type="submit" name="Login" value="Login">
                                    <!-- <h3>Lupa password? @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Klik Disini!') }}
                                    </a> -->
                                <!-- @endif</h3> -->
                    </form>
    		    </div>
        </div>
    </div>
</main>
</html>

@endsection

