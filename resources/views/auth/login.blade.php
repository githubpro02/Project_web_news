<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title>KCNEWS - Login</title>

    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- ==== Favicons ==== -->
	<link rel="icon" type="image/png" href="{{ asset('kcnew/frontend/img/KCN.png') }}"  sizes="160x160">

	<!-- =====  CSS - Teamplate KCNEWS =========== -->


    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700">

    <!-- ==== Font Awesome ==== -->
    <link rel="stylesheet" href="{{ asset('kcnew/frontend/css/font-awesome.min.css') }}">

    <!-- ==== Bootstrap Framework ==== -->
    <link rel="stylesheet" href="{{ asset('kcnew/frontend/css/bootstrap.min.css') }}">

    <!-- ==== Bar Rating Plugin ==== -->
    <link rel="stylesheet" href="{{ asset('kcnew/frontend/css/fontawesome-stars-o.min.css') }}">

    <!-- ==== Main Stylesheet ==== -->
    <link rel="stylesheet" href="{{ asset('kcnew/frontend/style.css') }}">

    <!-- ==== Responsive Stylesheet ==== -->
    <link rel="stylesheet" href="{{ asset('kcnew/frontend/css/responsive-style.css') }}">

    <!-- ==== Theme Color Stylesheet ==== -->
    <link rel="stylesheet" href="{{ asset('kcnew/frontend/css/colors/theme-color-9.css') }}" id="changeColorScheme">

    <!-- ==== Custom Stylesheet ==== -->
    <link rel="stylesheet" href="{{ asset('kcnew/frontend/css/custom.css') }}">

</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preloader bg--color-1--b" data-preloader="1">
            <div class="preloader--inner"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Login Section Start -->
        <div class="login--section pd--100-0 bg--overlay" data-bg-img="{{ asset('kcnew/frontend/img/KCN.png')}}">
            <div class="container">
                <!-- Login Form Start -->
                <div class="login--form">
                    <div class="title">
                        <h1 class="h1">Đăng Nhập</h1>
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label>
                                <span>Email</span>
                                <input id="email" type="email"
                                    class="form-control" name="email" :value="old('email')"
                                    required autocomplete="email" autofocus>

                            </label>
                        </div>

                        <div class="form-group">
                            <label>
                                <span>Mật Khẩu</span>
                                <input id="password" type="password"
                                    class="form-control"  name="password"
                                    required autocomplete="current-password">
                            </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <span>Nhớ mật khẩu</span>
                            </label>
                        </div>

                        <button type="submit" class="btn btn-lg btn-block btn-primary">
                            {{ __('Đăng Nhập') }}
                        </button>

                        <p class="help-block clearfix">
                            <a href="{{ route('forgot-password') }}" class="btn-link pull-left">Quên mật khẩu?</a>
                            <a href="{{ route('register') }}" class="btn-link pull-right">Đăng ký tài khoản </a>
                        </p>

                    </form>
                </div>
                <!-- Login Form End -->
            </div>
        </div>
        <!-- Login Section End -->
    </div>
    <!-- Wrapper End -->

	<!-- jQuery -->
	<script src="{{ asset('blog_template/js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('blog_template/js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('blog_template/js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('blog_template/js/jquery.waypoints.min.js') }}"></script>
	<!-- Stellar Parallax -->
	<script src="{{ asset('blog_template/js/jquery.stellar.min.js') }}"></script>
	<!-- Flexslider -->
	<script src="{{ asset('blog_template/js/jquery.flexslider-min.js') }}"></script>
	<!-- Owl carousel -->
	<script src="{{ asset('blog_template/js/owl.carousel.min.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('blog_template/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('blog_template/js/magnific-popup-options.js') }}"></script>
	<!-- Counters -->
	<script src="{{ asset('blog_template/js/jquery.countTo.js') }}"></script>
	<!-- Main -->
	<script src="{{ asset('blog_template/js/main.js') }}"></script>

	<script src="{{ asset('js/function.js') }}"></script>


	<!-- ==== JS TEAMPLATED KCNEWS jQuery Library ==== -->
	<!-- <script src="{{ asset('kcnew/frontend/js/jquery-3.2.1.min.js') }}"></script> -->

	<!-- ==== Bootstrap Framework ==== -->
	<!-- <script src="{{ asset('kcnew/frontend/js/bootstrap.min.js') }}"></script> -->

	<!-- ==== StickyJS Plugin ==== -->
	<script src="{{ asset('kcnew/frontend/js/jquery.sticky.min.js') }}"></script>

	<!-- ==== HoverIntent Plugin ==== -->
	<script src="{{ asset('kcnew/frontend/js/jquery.hoverIntent.min.js') }}"></script>

	<!-- ==== Marquee Plugin ==== -->
	<script src="{{ asset('kcnew/frontend/js/jquery.marquee.min.js') }}"></script>

	<!-- ==== Validation Plugin ==== -->
	<script src="{{ asset('kcnew/frontend/js/jquery.validate.min.js') }}"></script>

	<!-- ==== Isotope Plugin ==== -->
	<script src="{{ asset('kcnew/frontend/js/isotope.min.js') }}"></script>

	<!-- ==== Resize Sensor Plugin ==== -->
	<script src="{{ asset('kcnew/frontend/js/resizesensor.min.js') }}"></script>

	<!-- ==== Sticky Sidebar Plugin ==== -->
	<script src="{{ asset('kcnew/frontend/js/theia-sticky-sidebar.min.js') }}"></script>

	<!-- ==== Zoom Plugin ==== -->
	<script src="{{ asset('kcnew/frontend/js/jquery.zoom.min.js') }}"></script>

	<!-- ==== Bar Rating Plugin ==== -->
	<script src="{{ asset('kcnew/frontend/js/jquery.barrating.min.js') }}"></script>

	<!-- ==== Countdown Plugin ==== -->
	<script src="{{ asset('kcnew/frontend/js/jquery.countdown.min.js') }}"></script>

	<!-- ==== RetinaJS Plugin ==== -->
	<script src="{{ asset('kcnew/frontend/js/retina.min.js') }}"></script>

	<!-- ==== Main JavaScript ==== -->
	<script src="{{ asset('kcnew/frontend/js/main.js') }}"></script>

</body>

</html>