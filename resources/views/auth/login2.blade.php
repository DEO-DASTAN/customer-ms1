<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('csslogin/style.css') }}">
	<link href="{{ asset('https://fonts.googleapis.com/css?family=Poppins:600&display=swap') }}" rel="stylesheet">
	<script src="{{ asset('https://kit.fontawesome.com/a81368914c.js') }}"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="{{ asset('imglogin/wave.png') }}">
	<div class="container">
		<div class="img">
			<img src="{{ asset('imglogin/bg.svg') }}">
		</div>

		<div class="login-content">
            <span style="color: red">
                @error('email')
                    {{ $message }}
                @enderror
            </span> <br>
            <span style="color: red">
                @error('password')
                <label for="">{{ $message }}</label>

                @enderror
            </span>
			<form method="POST" action="{{ route('login') }}">
                @csrf
				<img src="{{ asset('imglogin/avatar.svg') }}">
				<h2 class="title">Welcome</h2>

           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="email" name="email"  class="input">
           		   </div>

           		</div>
           		<div class="input-div pass">
           		   <div class="i">
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input">
            	   </div>

            	</div>
            	<a href="#">Forgot Password?</a>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('jslogin/main.js') }}"></script>
</body>
</html>
