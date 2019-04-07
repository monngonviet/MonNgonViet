<!DOCTYPE html>
<html lang="vi">
<head>
	<title>Đăng nhập admin Món Ngon Việt</title>
  <base href="{{asset('')}}">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="admin_asset/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="admin_asset/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="admin_asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="admin_asset/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="admin_asset/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="admin_asset/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="admin_asset/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="admin_asset/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="admin_asset/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="admin_asset/css/util.css">
	<link rel="stylesheet" type="text/css" href="admin_asset/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('admin_asset/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				@if(count($errors)>0)
					<div class="alert alert-danger">
						@foreach($errors->all() as $err)
								{{$err}}<br>
						@endforeach
				@endif

				@if(session('thongbao'))
					<div class="alert alert-sucess">
						{{session('thongbao')}}
				@endif
				<form class="login100-form validate-form" action="admin/dangnhap" method="POST">
					  <input type="hidden" name="_token" value="{{csrf_token()}}"/>
					<span class="login100-form-title p-b-49">
						Login Travel Viet Nam
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" type="email" name="email" placeholder="Nhập Email vào đây">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Nhập password vào đây">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
						        Quên mật khẩu
						</a>
					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Đăng nhập
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Hoặc đăng nhập bằng
						</span>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Hoặc đăng ký
						</span>
						<a href="#" class="txt2">
							Đăng ký
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
	<script src="admin_asset/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="admin_asset/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="admin_asset/vendor/bootstrap/js/popper.js"></script>
	<script src="admin_asset/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="admin_asset/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="admin_asset/vendor/daterangepicker/moment.min.js"></script>
	<script src="admin_asset/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="admin_asset/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="admin_asset/js/main.js"></script>

</body>
</html>
