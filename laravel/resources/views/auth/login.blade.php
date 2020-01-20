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

<style>


.login-form-container {
    max-width: 550px;
     width: 100%;
    margin: 0 auto;
    background: #FFFFFF;
    background-size: cover;
    min-height: 400px;
    box-shadow: 0px 0px 2px 1px rgba(0,0,0,0.15);

}
.login-form-header {
    text-align: center;
    background: url(/img/login.jpg)no-repeat;
    background-size: cover;
    min-height: 150px;
}
.login-form-header  h1 {
    font-size:3em;
    color:#2b2b2b;
    padding: 1em 0em 0em 0em;
    text-align: center;
    font-family: 'Carrois Gothic', sans-serif;
}
.login-form .input-container {
	border-bottom: 1px solid #CCCCCC;
    margin-top: 15px;
    font-size: 20px;
    color: #9e9e9e;
    padding-bottom: 5px;
}
.login-form .input {
	border: 0;
    width: 200px;
}
.login-form .input:focus {
    outline: none;
}
#show-password {
	float: right;
    vertical-align: bottom;
    text-align: center;
    margin-top: 7px;
	cursor: pointer;
}
.login-form .forgot-password {
	float: right;
}
.login-form .rememberme-container {
	margin-top: 15px;
	padding: 0;
}
.login-form .rememberme-container input {
	margin-left: 0;
}
.login-form .rememberme span {
	vertical-align: top;
}
.login-form .button {
	margin-top: 15px;
    width: 100%;
    background: #2e7ec7;
    border: 0;
    color: #FFFFFF;
    padding: 10px;
    font-size: 15px;
	cursor: pointer;
	transition: background .3s;
}
.login-form .button:hover {
	background: #1f6eb7;
}
.login-form .button:focus {
	outline: none;
}
.login-form .register {
	margin-top: 5px;
    background: #CCCCCC;
    border: 0;
    color: #676464;
    padding: 8px;
    font-size: 15px;
    display: block;
    text-align: center;
}
.login-form .register:hover	{
	background: #b7b7b7;
}
@media screen and (max-height: 600px) {
	.login-form-container {
		margin-top: 0;
		top: 10px;
	}
}
@media screen and (max-width: 400px) {
	.login-form-container {
		left: 5px;
		margin-left: 5px;
		min-width: 283px;
		right: 10px;
		margin-bottom: 10px;
		width: auto;
	}
	.login-form .input {
		width: 140px;
	}
	.socmed-login .socmed-btn i {
		margin-right: 5px;
		width: 19px;
	}
}
</style>

  </head>
  <main role="main"  padding: 40px;>

  <div class="login-page">
  <div class="login-form-container" id="login-form">
	<div class="login-form-content">
		<div class="login-form-header">
            <h1>LOGIN</h1>
        </div>
        <div class="login-block">
        <form method="POST" action="{{ route('login') }}" class="login-form">
        @csrf

        <form method="POST" action="{{ route('login') }}">
                            @csrf

                        <div class="form-group row">
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
  </div>

</main> 

</html>

<!-- 
<div class="input-container">
				<i class="fa fa-lock"></i>
				<input type="password"  id="login-password" class="input" name="password" placeholder="Password"/>
				<i id="show-password" class="fa fa-eye"></i>
</div> -->

<script>
$('#show-password').click(function() {
	if ($(this).hasClass('fa-eye')) {
		$('#login-password').attr('type', 'text');
		$(this).removeClass('fa-eye');
		$(this).addClass('fa-eye-slash');
	} else {
		$('#login-password').attr('type', 'password');
		$(this).removeClass('fa-eye-slash');
		$(this).addClass('fa-eye');
	}
})</script>

@endsection

