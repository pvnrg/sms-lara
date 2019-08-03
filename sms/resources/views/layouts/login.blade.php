<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7" lang="en-us"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie10 lt-ie9 lt-ie8" lang="en-us"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie10 lt-ie9" lang="en-us"> <![endif]-->
<!--[if IE 9]> <html class="no-js lt-ie10 lt-ie9" lang="en-us"> <![endif]-->
<!--[if lt IE 10]> <html class="no-js lt-ie10" lang="en-us"> <![endif]-->
<!--[if !IE]> > <![endif]-->
<html lang="en" class="no-js">
<!-- <![endif] -->
<head>
<meta name="description" content="" />
<meta name="author" content="" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<title>Login | SMS</title>

<meta content='initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width' name='viewport' />

<meta content='yes' name='apple-mobile-web-app-capable'>
<meta content='translucent-black' name='apple-mobile-web-app-status-bar-style'>


@include('partials.front-end.css')
<!-- 
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>		
<!-- ./ counter JS -->

<!--[if IE]>
<script src="js/html5.js"></script>
<![endif]-->

</head>
<body class="white-body">

<div id="wrapper" class="login-wrapper" >
    @yield('content')
	
</div><!-- end of wrapper -->

@include('partials.front-end.js')

</body>
</html>
