<!DOCTYPE html>

<html lang="en">

<!-- Mirrored from tivatheme.com/html/unisa/page-blog-fullwidth.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Feb 2019 13:34:46 GMT -->

<head>
	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Travel Việt Nam</title>
	{{-- <base href="http://localhost:80/TravelVN/public/"> --}}
	<meta name="keywords" content="Responsive HTML Template">
	<meta name="description" content="Unisa Responsive HTML Template">
	<meta name="author" content="tivatheme">
	<base href="{{asset('')}}">
	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600,700" rel="stylesheet">
	<script type="text/javascript" src="jquery.shorten.1.0.js"></script>
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

	<!-- Template Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body class="home-1">
	<div id="all">
		<header id="top-header" class="scroll-list-post">

			<div class="header-main">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
							<div class="logo">
								<a href="trang-chu.html" title="Tiva byHands">
									<img class="img-responsive" src="img/slide/dlheader2.png" alt="">
								</a>
							</div>
							<!--end logo-->
						</div>
						<div class="col-lg-8 col-md-7 col-sm-4 col-xs-3">
							<div class="topheader-navholder">
								<div class="topheader-navholder-ct">
									<span id="btn-menu"><i class="fa fa-bars"></i></span>
									<nav id="main-nav">
										<ul class="nav navbar-nav megamenu">

											<li class="dropdown">
												<a href='trang-chu.html'>Trang chủ </b></a>
											</li>

											<li class="dropdown">
												<a>Địa điểm du lịch<b class="caret"></b></a>
												<div id="dropdown-menu2" class="dropdown-menu">
													<ul>
														@foreach($theloai as $tl)
														<li class="parent dropdown-submenu">
															<a>{{$tl->Ten}}</a>
															<div class="dropdown-menu level2">
																<ul>
																	@foreach($tl->loaitin as $lt)
																		<li><a href="loaitin/{{$lt->id}}/{{$lt->TenKhongDau}}.html">{{$lt->Ten}}</a></li>
																		@endforeach
																</ul>
															</div>
														</li>
														@endforeach
													</ul>
												</div>
											</li>

											<li class="dropdown">
												<a href='#'>Địa điểm ăn uống <b class="caret"></b></a>
												<div id="dropdown-menu3" class="dropdown-menu">
													<ul>
														<li class="parent dropdown-submenu">
															<a href='page-booknow.html'>Đà lạt</a>
															<div class="dropdown-menu level2">
																<ul>
																	<li><a href="dia-diem-an-uong/mon-ngon-da-lat/1.html">Món ăn đặc sản</a></li>
																	<li><a href="page-book-no-result.html">Món ăn nhà hàng</a></li>
																</ul>
															</div>
														</li>
													</ul>
												</div>
											</li>
											<li class="dropdown">
												<a href=''>Kinh nghiệm du lịch </b></a>
											</li>
											{{-- <li class="dropdown">
												<a href='#'>Khách sạn<b class="caret"></b></a>
												<div id="dropdown-menu2" class="dropdown-menu">
													<ul>
														<li>
															<a href=''>Đà lạt</a>
														</li>
														<li>
															<a href=''>Vũng tàu</a>
														</li>
													</ul>
												</div>
											</li> --}}
											<li class="dropdown">
												<a href='lien-he.html'>Liên hệ</b></a>
											</li>
										</ul>
									</nav><!-- end main-nav -->
								</div><!-- end topheader-navholder-ct -->
							</div><!-- end topheader-navholder -->
						</div>

						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5">

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
							@endif<!-- end #search_block_top -->



						</div>
					</div><!-- end row -->
				</div><!-- end container -->
			</div>
		</header><!-- end header -->

		<div id="breadcrumb" style="background-image: url(upload/hinhloaitin/{{$loaitin->Hinh}})!important;" class="clearfix">
			<div class="container">
				<div class="breadcrumb clearfix">
					<h2 class="bread-title" style="color: #040404;">{{$loaitin->Ten}}</h2>
					<ul class="ul-breadcrumb">
						<li><a href="index.html" title="Home">Trang chủ</a></li>
						<li><span>{{$loaitin->Ten}}</span></li>
					</ul>
				</div>
			</div>
		</div>
