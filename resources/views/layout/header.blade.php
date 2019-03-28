<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="en">

<!-- Mirrored from tivatheme.com/html/unisa/page-home-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Feb 2019 13:30:00 GMT -->

<head>
	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Trang chủ Travel Việt Nam</title>
	{{-- <base href="http://localhost:80/TravelVN/public/"> --}}
	<meta name="keywords" content="Responsive HTML Template">
	<meta name="description" content="Unisa Responsive HTML Template">
	<meta name="author" content="tivatheme">
	 <base href="{{asset('')}}">
	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600,700" rel="stylesheet">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="vendor/font-icomoon/css/font-icomoon.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css">

	<link rel="stylesheet" href="vendor/nivo-slider/css/nivo-slider.css">
	<link rel="stylesheet" href="vendor/nivo-slider/css/animate.css">
	<link rel="stylesheet" href="vendor/nivo-slider/css/style.css">

	<link rel="stylesheet" href="vendor/slider-range/css/jslider.css">

	<!-- Template CSS -->
	<link rel="stylesheet" href="css/theme-global.css">
	<link rel="stylesheet" href="css/theme-animate.css">
	<link rel="stylesheet" href="css/theme-product.css">
	<link rel="stylesheet" href="css/theme-product-list.css">
	<link rel="stylesheet" href="css/theme-blog.css">
	<link rel="stylesheet" href="css/theme-responsive.css">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<!-- Template Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">
</head>

<body class="index home-3">
	<div id="all">
		<header id="top-header" class="top-header-fixed">
			<div class="header-main">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
						<div class="logo">
							<a href="trang-chu.html" title="Tiva byHands">
								<img class="img-responsive" src="img/DL3.png" alt="">
							</a>
						</div>
						<!--end logo-->
					</div>
					@include('page.trangchu')
					<div class="col-lg-2 col-md-3 col-sm-4 col-xs-9">
					@if(Auth::User() != null)
						<div class="btn-booknow pull-right">
							<a href="dangxuatuser" title="Login	">Đăng xuất</a>
						</div><!-- end btn-booknow -->

						<div class="header_user_info dropdown-over pull-right">
							<div data-toggle="dropdown" class="dropdown-title">
								<a href="#" title="My account"><span class="icon-user"></span> {{Auth::user()->name}}</a>
							</div>
							<div class="dropdown-content">
								<ul class="links">
									<li>
										<a href="#" title="Account">Tài khoản( {{Auth::user()->name}})</a>
									</li>
									<li>
										<a href="dangxuatuser" title="Register">Đăng xuất</a>
									</li>
								</ul>
							</div>
						</div><!-- end header_user_info -->
					@else
					<div class="btn-booknow pull-right">
						<a href="dangnhap" title="Login	">Đăng nhập</a>
					</div><!-- end btn-booknow -->

					<div class="header_user_info dropdown-over pull-right">
						<div data-toggle="dropdown" class="dropdown-title">
							<a href="#" title="My account"><span class="icon-user"></span></a>
						</div>
						<div class="dropdown-content">
							<ul class="links">
								<li>
									<a href="#" title="Account">Tài khoản</a>
								</li>
							</ul>
						</div>
					</div>
				@endif
					</div>
				</div><!-- end row -->
			</div>
		</header><!-- end header -->
		<div class="tiva-slideshow-wrapper">

			<div id="tiva-slideshow" class="nivoSlider">
					@foreach($slide as $sl)
				<a href="#" title="Slideshow image"><img class="img-responsive" src="upload/slide/{{$sl->Hinh}}" title="#caption1" alt="Slideshow image"></a>
					@endforeach
			</div>
				
			<div id="caption1" class="nivo-html-caption">
				<div class="tiva-caption">
					<div class="left-right hidden-xs text_large hidden-sm hidden-xs"><img class="img-responsive" src="img/slide/DL.png" title="" alt="Slideshow image"></div>
				</div>
			</div>

			{{-- <div id="caption2" class="nivo-html-caption">
				<div class="tiva-caption">
					<div class="right-left hidden-xs text_large hidden-sm hidden-xs"><img class="img-responsive" src="img/slide/DL.png" title="" alt="Slideshow image"></div>
				</div>
			</div> --}}
		</div>
