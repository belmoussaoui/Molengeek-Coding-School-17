<!DOCTYPE html>
<html lang="en">
<head>
	<title>Labs - Design Studio</title>
	<meta charset="UTF-8">
	<meta name="description" content="Labs - Design Studio">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="{{ asset("img/favicon.ico") }}" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset("css/app.css") }}"/>
	<link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}"/>
	<link rel="stylesheet" href="{{ asset("css/font-awesome.min.css") }}"/>
	<link rel="stylesheet" href="{{ asset("css/flaticon.css") }}"/>
	<link rel="stylesheet" href="{{ asset("css/magnific-popup.css") }}"/>
	<link rel="stylesheet" href="{{ asset("css/owl.carousel.css") }}"/>
	<link rel="stylesheet" href="{{ asset("css/style.css") }}"/>
	
    <link rel="stylesheet" href="{{ asset("css/index.css") }}"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader">
			<img class="inline-block" src="img/logo.png" alt="">
			<h2>Loading.....</h2>
		</div>
	</div>

    <header class="header-section sidebar text-center">
        <div class="logo d-block">
            <a href="/">
                <img src={{ asset("img/logo.png") }} alt="">
            </a><!-- Logo -->
        </div>
        <!-- Navigation -->
        <div class="responsive"><i class="fa fa-bars"></i></div>
        <nav>
            <ul class="menu-list">
                <li class="{{ "hero-items" == explode(".", Route::currentRouteName())[0] ? 'active': '' }}"><a href="{{ route("hero-items.index") }}">Slider Images</a></li>
                <li class="{{ "testimonial-items" == explode(".",Route::currentRouteName())[0] ? 'active': '' }}"><a href="{{ route("testimonial-items.index") }}">Testimonial</a></li>
                <li class="{{ "service-items" == explode(".",Route::currentRouteName())[0] ? 'active': '' }}"><a href="{{ route("service-items.index") }}">Services</a></li>
                <li class="{{ "users" == explode(".",Route::currentRouteName())[0] ? 'active': '' }}"><a href="{{ route("users.index") }}">Users</a></li>
                <li class="{{ "feature-items" == explode(".",Route::currentRouteName())[0] ? 'active': '' }}"><a href="{{ route("feature-items.index") }}">Features</a></li>
                <li class="{{ "posts" == explode(".",Route::currentRouteName())[0] ? 'active': '' }}"><a href="{{ route("posts.index") }}">Posts</a></li>
            </ul>
        </nav>
    </header>

    <!-- Page content -->
    <div class="content">  
        <div class="overlay"></div>
        <div class="text-center relative">   
            @yield('content')
        </div> 
    </div>
    {{-- <!-- Footer section -->
    <footer class="footer-section">
        <h2>2017 All rights reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></h2>
    </footer>
    <!-- Footer section end --> --}}


	
    <!--====== Javascripts & Jquery ======-->
	<script src="{{ asset("js/jquery-2.1.4.min.js") }}"></script>
	<script src="{{ asset("js/bootstrap.min.js") }}"></script>
	<script src="{{ asset("js/magnific-popup.min.js") }}"></script>
	<script src="{{ asset("js/owl.carousel.min.js") }}"></script>
	<script src="{{ asset("js/circle-progress.min.js") }}"></script>
	<script src="{{ asset("js/main.js") }}"></script>
</body>
</html>