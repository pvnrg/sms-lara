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

<title>SMS</title>

<meta content='initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width' name='viewport' />

<meta content='yes' name='apple-mobile-web-app-capable'>
<meta content='translucent-black' name='apple-mobile-web-app-status-bar-style'>

@include('partials.front-end.css')

<body>

<div id="wrapper" class="wrapper">
	
    @include('partials.front-end.header')

	<div class="middle-container clearfix">
		
		<div class="container">
			<div class="row">
				
                @include('partials.front-end.sidebar')

				<div class="col-lg-12 col-md-12 col-sm-12 clearfix">
					
					@if (Session::has('flash_message'))
						<div class="container">
							<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								{{ Session::get('flash_message') }}
							</div>
						</div>
					@endif

                    @yield('content')	
				</div>

			</div>
		</div>	

	</div><!-- end of middle-container -->

    @include('partials.front-end.footer')

</div><!-- end of wrapper -->
    @include('partials.front-end.js')
</body>
</html>
