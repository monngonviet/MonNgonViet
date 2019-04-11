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

    <meta name="keywords" content="Món ngon việt" />
    <meta name="description" content="Món ngon việt" />
    <meta name="author" content="Món ngon việt" />

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
    <link href="http://fonts.googleapis.com/css?family=Raleway:300,500,900%7COpen+Sans:400,700,400italic" rel="stylesheet" type="text/css" />

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Template CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- Modernizr -->
    <script src="assets/js/modernizr-2.8.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src='https://www.google.com/recaptcha/api.js?hl=vi'></script>
    <style>
        .carousel-inner>.item>img,
        .carousel-inner>.item>a>img {
            width: 100%;
        }
    </style>
</head>

<body>
    <!-- BEGIN WRAPPER -->
    <!-- END HEADER -->
    @include('layout.header')
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
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=2219634835025739&autoLogAppEvents=1"></script>
    @yield('script')
</body>

</html>
