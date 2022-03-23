<!DOCTYPE html>
<html lang="en">
<head>
	<title>eBloom</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset("login/images/icons/favicon.ico")}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset("login/vendor/bootstrap/css/bootstrap.min.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset("login/fonts/font-awesome-4.7.0/css/font-awesome.min.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset("login/fonts/iconic/css/material-design-iconic-font.min.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset("login/vendor/animate/animate.css")}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset("login/vendor/css-hamburgers/hamburgers.min.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset("login/vendor/animsition/css/animsition.min.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset("vendor/select2/select2.min.css")}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset("login/vendor/daterangepicker/daterangepicker.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset("login/css/util.css")}}">
	<link rel="stylesheet" type="text/css" href="{{asset("login/css/main.css")}}">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('{{asset("login/images/bg-01.jpg")}}');">
				
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<div class="row" style="justify-content: center;">
				{{-- <div class="col-md-3"></div> --}}
				{{-- <div class="col-md-3"> --}}
					<a href="{{url(app()->getLocale().'/welcome')}}">
						<img src="{{asset('frontEnd-assets/images/logo-svg.svg')}}" alt="eBloom logo" width="250px" height="150px">
						
						{{-- <img src="{{asset('frontEnd-assets/images/logo5.png')}}" alt="eBloom logo" width="100px" height="100px"> --}}
					</a>
				{{-- </div> --}}
			</div>
			<br>
			<form class="login100-form validate-form" action="{{url(app()->getLocale().'/florist-forget-password')}}" method="POST"> {{ csrf_field() }}
				<span class="login100-form-title p-b-37">
					
					@if (app()->getLocale() == 'gr' )
                        Ξεχάσατε το κωδικό σας
					@else
					
					    Forget password
					@endif
				</span>
				@if(Session::has('flash_message_error'))
				<div class="alert alert-sm alert-danger alert-block" role="alert">
				   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				   </button>
				   <strong>{!! session('flash_message_error') !!}</strong>
				</div>
				@endif
				@if(Session::has('flash_message_status'))
					<div class="alert alert-sm alert-success alert-block" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<strong>{!! session('flash_message_status') !!}</strong>
					</div>
				@endif
				@if(Session::has('flash_message_success'))
				<div class="alert alert-sm alert-success alert-block" role="alert">
				   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				   </button>
				   <strong>{!! session('flash_message_success') !!}</strong>
				</div>
				@endif
				<div class="wrap-input100 validate-input m-b-20" 
				@if (app()->getLocale() == 'gr' )
					
					data-validate="Εισάγετε το email σας"

				@else
				
					data-validate="Enter  email"
				@endif
				>
					<input class="input100" type="email" name="email" 

					@if (app()->getLocale() == 'gr' )
					
						placeholder="Εισάγετε το email σας"

					@else
					
						placeholder="Enter email"
					@endif
					>
					<span class="focus-input100"></span>
				</div>


				<div class="container-login100-form-btn">
					{{-- <button class="login100-form-btn">
						Sign In
					</button> --}}
					<input type="submit" class="login100-form-btn" 
					@if (app()->getLocale() == 'gr' )
						
					value="Ξεχάσατε το κωδικό σας"

					@else
					
					value="Forget password"
					@endif

					>
				</div>
				<br>

			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{asset("login/vendor/jquery/jquery-3.2.1.min.js")}}"></script>
<!--===============================================================================================-->
	<script src="{{asset("login/vendor/animsition/js/animsition.min.js")}}"></script>
<!--===============================================================================================-->
	<script src="{{asset("login/vendor/bootstrap/js/popper.js")}}"></script>
	<script src="{{asset("login/vendor/bootstrap/js/bootstrap.min.js")}}"></script>
<!--===============================================================================================-->
	<script src="{{asset("login/vendor/select2/select2.min.js")}}"></script>
<!--===============================================================================================-->
	<script src="{{asset("login/vendor/daterangepicker/moment.min.js")}}"></script>
	<script src="{{asset("login/vendor/daterangepicker/daterangepicker.js")}}"></script>
<!--===============================================================================================-->
	<script src="{{asset("login/vendor/countdowntime/countdowntime.js")}}"></script>
<!--===============================================================================================-->
	<script src="{{asset("login/js/main.js")}}"></script>

</body>
</html>