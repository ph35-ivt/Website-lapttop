<!doctype html>
<html class="fixed">
<head>

	<!-- Basic -->
	<meta charset="UTF-8">

	<meta name="keywords" content="HTML5 Admin Template" />
	<meta name="description" content="Porto Admin - Responsive HTML5 Template">
	<meta name="author" content="okler.net">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Web Fonts  -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="{{asset('backend/vendor/bootstrap/css/bootstrap.css')}}" />
	<link rel="stylesheet" href="{{asset('backend/vendor/font-awesome/css/font-awesome.css')}}" />
	<link rel="stylesheet" href="{{asset('backend/vendor/magnific-popup/magnific-popup.css')}}" />
	<link rel="stylesheet" href="{{asset('backend/vendor/bootstrap-datepicker/css/datepicker3.css')}}" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="{{asset('backend/stylesheets/theme.css')}}" />

	<!-- Skin CSS -->
	<link rel="stylesheet" href="{{asset('backend/stylesheets/skins/default.css')}}" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="{{asset('backend/stylesheets/theme-custom.css')}}">

	<!-- Head Libs -->
	<script src="{{asset('backend/vendor/modernizr/modernizr.js')}}"></script>

</head>
<body>
	<!-- start: page -->
	<section class="body-sign">
		<div class="center-sign">

			<div class="panel panel-sign">
				<div class="panel-title-sign mt-xl text-right">
					<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Recover Password</h2>
				</div>
				<div class="panel-body">
					<div class="alert alert-info">
						<p class="m-none text-semibold h6">Nhập e-mail khôi phục!</p>
					</div>

					<form>
						<div class="form-group mb-none">
							<div class="input-group">
								<input name="username" type="email" placeholder="E-mail" class="form-control input-lg" />
								<span class="input-group-btn">
									<button class="btn btn-primary btn-lg" type="submit">Reset!</button>
								</span>
							</div>
						</div>

						<p class="text-center mt-lg"><a href="{{route('dangnhapad')}}">Đăng nhập!</a></p>
					</form>
				</div>
			</div>

			<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2014. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
		</div>
	</section>
	<!-- end: page -->

	<!-- Vendor -->
	<script src="{{asset('backend/vendor/jquery/jquery.js')}}"></script>
	<script src="{{asset('backend/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
	<script src="{{asset('backend/vendor/bootstrap/js/bootstrap.js')}}"></script>
	<script src="{{asset('backend/vendor/nanoscroller/nanoscroller.js')}}"></script>
	<script src="{{asset('backend/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('backend/vendor/magnific-popup/magnific-popup.js')}}"></script>
	<script src="{{asset('backend/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="{{asset('backend/javascripts/theme.js')}}"></script>

	<!-- Theme Custom -->
	<script src="{{asset('backend/javascripts/theme.custom.js')}}"></script>

	<!-- Theme Initialization Files -->
	<script src="{{asset('backend/javascripts/theme.init.js')}}"></script>

</body>
</html>