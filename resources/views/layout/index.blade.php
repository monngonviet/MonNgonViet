<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<!-- Page Title -->
	<title>Món ngon việt</title>
	<meta name="keywords" content="real estate, responsive, retina ready, modern html5 template, bootstrap, css3" />
	<meta name="description" content="Cozy - Responsive Real Estate HTML5 Template" />
	<meta name="author" content="Wisely Themes - www.wiselythemes.com" />
	<!-- Mobile Meta Tag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <base href="{{asset('')}}">
	<!-- <link rel="shortcut icon" type="image/x-icon" href="assets/assets/images/fav_touch_icons/favicon.ico" /> -->
	<!-- Fav and touch icons -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/fav_touch_icons/favicon.ico" />
	<link rel="apple-touch-icon" href="assets/images/fav_touch_icons/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="assets/images/fav_touch_icons/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="assets/images/fav_touch_icons/apple-touch-icon-114x114.png" />
	<!-- IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> 
	<![endif]-->

	<!-- Google Web Font -->
	<link href="http://fonts.googleapis.com/css?family=Raleway:300,500,900%7COpen+Sans:400,700,400italic"
		rel="stylesheet" type="text/css" />

	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<!-- Template CSS -->
	<link href="assets/css/style.css" rel="stylesheet" />

	<!-- Modernizr -->
	<script src="assets/js/modernizr-2.8.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="jquery.shorten.1.0.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
</head>
<body>
	<!-- BEGIN WRAPPER -->
		<!-- END HEADER -->
@include('layout.header')
@include('layout.slide')
@yield('content')
@include('layout.footer')
        
		<!-- END FOOTER -->

	</div>
	<!-- END WRAPPER -->


	<!-- Libs -->
	<script src="assets/js/common.js"></script>
	<script src="assets/js/jquery.prettyPhoto.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/chosen.jquery.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
	<script src="assets/js/infobox.min.js"></script>

	<!-- Template Scripts -->
	<script src="assets/js/variables.js"></script>
	<script src="assets/js/scripts.js"></script>

	<!-- Agencies list -->
	<script src="assets/js/agencies.js"></script>

	<!-- <script type="text/javascript">
		(function($){
			"use strict";
			
			$(document).ready(function(){
				//Create agencies map with markers and populate dropdown agencies list.
				Cozy.agencyMap(agencies, "map_agency");
			});
		})(jQuery);
	</script> -->
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous"
		src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2"></script>
@yield('script')
<script
type="text/javascript"> function refrClock() {

		var d = new Date();

		var s = d.getSeconds();

		var m = d.getMinutes();

		var h = d.getHours();

		var day = d.getDay();

		var date = d.getDate();

		var month = d.getMonth();

		var year = d.getFullYear();

		var days = new Array("Chủ nhật", "Thứ hai", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7");

		var months = new Array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"); var am_pm;

		if (s < 10) { s = "0" + s }

		if (m < 10) { m = "0" + m }

		if (h > 12) { h -= 12; AM_PM = "PM" }

		else { AM_PM = "AM" }

		if (h < 10) { h = "0" + h }

		document.getElementById("clock").innerHTML = days[day] + " Ngày " + date + "/" + months[month] + "/" + year + " | " + " " + h + ":" + m + ":" + s + " " + AM_PM; setTimeout("refrClock()", 1000);
	} refrClock(); </script>
</body>

</html>