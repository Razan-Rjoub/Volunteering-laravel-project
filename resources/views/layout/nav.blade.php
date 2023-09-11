<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;ampdisplay=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('../assets/vendor/css/rtl/core.css" class="template-customizer-core-css')}}" />
    <link rel="stylesheet" href="{{asset('../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css')}}" />
    <link rel="stylesheet" href="{{asset('../assets/css/demo.css')}}" />

	<link rel="stylesheet" href="{{asset('style/fonts/icomoon/style.css')}}">
	<link rel="stylesheet" href="{{asset('style/fonts/flaticon/font/flaticon.css')}}">

	<link rel="stylesheet" href="{{asset('style/css/tiny-slider.css')}}">
	<link rel="stylesheet" href="{{asset('style/css/aos.css')}}">
	<link rel="stylesheet" href="{{asset('style/css/flatpickr.min.css')}}">
	<link rel="stylesheet" href="{{asset('style/css/glightbox.min.css')}}">
	<link rel="stylesheet" href="{{asset('style/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('style/css/thankyou.css')}}">
	<title>@yield('title')</title>
	<style>
		.dropdown-menu{
			margin-left: 250px !important;
		}
	</style>
</head>
<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<div class="row g-0 align-items-center">
						<div class="col-2">
							<a href="Home.index" class="logo m-0 float-start text-white">Volunteer</a>
						</div>
						<div class="col-6 text-center">
							<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
								<li class="active"><a href="{{route('home')}}">Home</a></li>
								<li class="has-children">
									<a href="causes.html">Causes</a>
									<ul class="dropdown">
										<li><a href="#">Menu One</a></li>
										<li><a href="#">Menu Two</a></li>
										<li class="has-children">
											<a href="#">Dropdown</a>
											<ul class="dropdown">
												<li><a href="#">Sub Menu One</a></li>
												<li><a href="#">Sub Menu Two</a></li>
												<li><a href="#">Sub Menu Three</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="{{route('Give Donation')}}">Donation</a></li>
								<li><a href="{{route('Give Services')}}">Services</a></li>
								<li><a href="{{route('aboutus')}}">About</a></li>
								<li><a href="news.html">News</a></li>
								<li><a href="{{route('contact')}}">Contact</a></li>
							</ul>
						</div>
						<div class="col-4 text-end">
							@if (Route::has('login'))
							@auth
							<li class="nav-item navbar-dropdown dropdown-user dropdown"  >
								<a class="nav-link dropdown-toggle" href="" data-bs-toggle="dropdown">
									<div class="" style="">
										<img style="width: 45px;" src="{{$user->image}}" alt
											class=" h-auto rounded-circle " />
									</div>
								</a>
								<ul  class="dropdown-menu">
									<li>
										<a class="dropdown-item" href="{{route('profile')}}">
											<i class="mdi mdi-account-outline me-2"></i>
											<span class="align-middle">My Profile</span>
										</a>
									</li>
		
									<li>
										<div class="dropdown-divider"></div>
									</li>
									<li>
										<a class="dropdown-item" href="logout">
											<i class="mdi mdi-exit-to-app me-2"></i>
											<span class="align-middle">Log Out</span>
										</a>
									</li>
								</ul>
							</li>
							@else
							<a href="{{ route('login') }}" class="btn  btn-warning"style="color: white">
								<span>Login</span>
							</a>
							<a href="{{route('register')}}" class="btn btn-primary"  >
								<span>Register</span>
							</a>
							@endauth
							@endif
						</div>
					</div>

				</div>
			</div>
		</div>
	</nav>