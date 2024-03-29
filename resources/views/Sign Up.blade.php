<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign In Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ URL::to('Sign Up/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::to('Sign Up/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::to('Sign Up/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::to('Sign Up/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::to('Sign Up/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ URL::to('Sign Up/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::to('Sign Up/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::to('Sign Up/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ URL::to('Sign Up/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::to('Sign Up/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::to('Sign Up/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url('Sign Up/images/bg-01.jpg');">
					<span class="login100-form-title-1">
						Sign Up
					</span>
				</div>

				<form class="login100-form validate-form"  action="Student" method="Post">
				    @csrf
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="Enter Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

				

					<div class="flex-sb-m w-full p-b-30">
						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="">
							<input type="submit" value="Submit"  class="login100-form-btn">
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<!-- <script src="{{ url('/') }}./Sign Up/vendor/jquery/jquery-3.2.1.min.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="{{ url('/') }}./Sign Up/vendor/animsition/js/animsition.min.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="{{ url('/') }}./Sign Up/vendor/bootstrap/js/popper.js"></script>
	<script src="{{ url('/') }}./Sign Up/vendor/bootstrap/js/bootstrap.min.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="{{ url('/') }}./Sign Up/vendor/select2/select2.min.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="{{ url('/') }}./Sign Up/vendor/daterangepicker/moment.min.js"></script>
	<script src="{{ url('/') }}./Sign Up/vendor/daterangepicker/daterangepicker.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="{{ url('/') }}./Sign Up/vendor/countdowntime/countdowntime.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="{{ url('/') }}./Sign Up/js/main.js"></script> -->

</body>
</html>