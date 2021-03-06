<!DOCTYPE html>
<html lang="en">

<head>
	<title>Đăng kí Món Ngon Việt</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{asset('')}}">
    
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="LoginUserMonNgonViet/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="LoginUserMonNgonViet/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="LoginUserMonNgonViet/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="LoginUserMonNgonViet/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="LoginUserMonNgonViet/css/util.css">
	<link rel="stylesheet" type="text/css" href="LoginUserMonNgonViet/css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">

			<div class="wrap-login100 p-t-50 p-b-90">
				<div class="title-custom-mnv">
					<span class="login100-form-title-mnv">
						Món Ngon Việt
					</span>
					<span class="login100-form-title p-b-51">
						Tinh Hoa Ẩm Thực Việt
					</span>
				</div>
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
				<form class="login100-form validate-form flex-sb flex-w"  action="dang-ki-user" method="POST">

                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Vui lòng nhập Tên">
						<input class="input100" type="text" name="fullname" placeholder="Nhập tên của bạn">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Vui lòng nhập số điện thoại">
						<input class="input100" type="text" name="sdt" placeholder="Số điện thoại">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Vui lòng nhập Email">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Vui lòng nhập mật khẩu">
						<input class="input100" type="password" name="password" placeholder="Mật khẩu">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Vui lòng nhập mật khẩu">
						<input class="input100" type="password" name="password_confirmation" placeholder="Nhập lại mật khẩu">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button type="submit" class="login100-form-btn">
							Đăng ký
						</button>
					</div>
					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div class="contact100-form-checkbox">
							<a href="" class="txt1">

								Quên mặt khẩu

							</a>
						</div>

						<div>
							<a href="sign-in.html" class="txt1">
								Đăng nhập
							</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="LoginUserMonNgonViet/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<!--===============================================================================================-->
	<script src="LoginUserMonNgonViet/js/main.js"></script>

</body>

</html>