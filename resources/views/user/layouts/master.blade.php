<!DOCTYPE html>
<html lang="th" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{ asset('user/img/fav.png') }}">
	<!-- Author Meta -->
	<meta name="author" content="@yield('author','champ_chiang_mai_home_for_boys')">
	<!-- Meta Description -->
	<meta name="description" content="@yield('description', 'เว็บแนะนำโปรโมชั่นสินค้ามากมาย')">
	<!-- Meta Keyword -->
	<meta name="keywords" content="@yield('keywords', 'รองเท้า, เสื้อผ้า, เครื่องสำอางค์')">
	<!-- meta character set -->
	<meta charset="UTF-8">
    <!-- Site Title -->
    
    <!-- Csrf token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('title','เว็บแนะนำโปรโมชั่นสินค้ามากมาย')</title>

	<!--
	Google Font
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500i" rel="stylesheet">

	<!--
	CSS
	============================================= -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
	<link rel="stylesheet" href="{{ asset('user/css/linearicons.css') }}">
	<link rel="stylesheet" href="{{ asset('user/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('user/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('user/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('user/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('user/css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('user/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('user/css/main.css') }}">
</head>

<body>

	<!-- Start Header Area -->
	<header id="header">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index.html"><img src="{{ asset('user/img/logo.png') }}" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="courses.html">Courses</a></li>
						<li class="menu-has-children"><a href="">Pages</a>
							<ul>
								<li><a href="elements.html">Elements</a></li>
							</ul>
						</li>
						<li class="menu-has-children"><a href="">Blog</a>
							<ul>
								<li><a href="blog-home.html">Blog Home</a></li>
								<li><a href="blog-single.html">Blog Details</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header>
	<!-- End Header Area -->

    @yield('content');
	
	<!-- End Testimonials Area -->


	<!-- Start Footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Top Products</h4>
					<ul>
						<li><a href="#">Managed Website</a></li>
						<li><a href="#">Manage Reputation</a></li>
						<li><a href="#">Power Tools</a></li>
						<li><a href="#">Marketing Service</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Quick Links</h4>
					<ul>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Brand Assets</a></li>
						<li><a href="#">Investor Relations</a></li>
						<li><a href="#">Terms of Service</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Features</h4>
					<ul>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Brand Assets</a></li>
						<li><a href="#">Investor Relations</a></li>
						<li><a href="#">Terms of Service</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Resources</h4>
					<ul>
						<li><a href="#">Guides</a></li>
						<li><a href="#">Research</a></li>
						<li><a href="#">Experts</a></li>
						<li><a href="#">Agencies</a></li>
					</ul>
				</div>
				<div class="col-lg-4 col-md-6 single-footer-widget">
					<h4>Newsletter</h4>
					<p>You can trust us. we only send promo offers,</p>
					<div class="form-wrap" id="mc_embed_signup">
						<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
						 method="get" class="form-inline">
							<input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
							 required="" type="email">
							<button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
							<div style="position: absolute; left: -5000px;">
								<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
							</div>

							<div class="info"></div>
						</form>
					</div>
				</div>
			</div>
			<div class="footer-bottom row align-items-center">
				<p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				<div class="col-lg-4 col-md-12 footer-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer Area -->

	<!-- ####################### Start Scroll to Top Area ####################### -->
	<div id="back-top">
		<a title="Go to Top" href="#"></a>
	</div>
	<!-- ####################### End Scroll to Top Area ####################### -->

	<script src="{{ asset('user/js/vendor/jquery-2.2.4.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="{{ asset('user/js/vendor/bootstrap.min.js') }}"></script>
	<script src="{{ asset('user/js/easing.min.js') }}"></script>
	<script src="{{ asset('user/js/hoverIntent.js') }}"></script>
	<script src="{{ asset('user/js/superfish.min.js') }}"></script>
	<script src="{{ asset('user/js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ asset('user/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('user/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('user/js/owl-carousel-thumb.min.js') }}"></script>
	<script src="{{ asset('user/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('user/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ asset('user/js/parallax.min.js') }}"></script>
	<script src="{{ asset('user/js/waypoints.min.js') }}"></script>
	<script src="{{ asset('user/js/wow.min.js') }}"></script>
	<script src="{{ asset('user/js/jquery.counterup.min.js')}}"></script>
	<script src="{{ asset('user/js/mail-script.js') }}"></script>
	<script src="{{ asset('user/js/main.js') }}"></script>

</body>

</html>