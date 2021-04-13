<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Minas Mourão</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{ asset('assets/site/css/normalize.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/site/css/main.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/site/css/bootstrap.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/site/css/animate.min.css') }}">
    <!-- Icofont CSS-->
    <link rel="stylesheet" href="{{ asset('assets/site/css/icofont.css') }}">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="{{ asset('assets/site/css/font-awesome.min.css') }}">
    <!-- bicon CSS-->
    <link rel="stylesheet" href="{{ asset('assets/site/css/bicon.min.css') }}">
    <!-- Flaticon CSS-->
    <link rel="stylesheet" href="assets/site/css/font/flaticon.css">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="assets/site/vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/site/vendor/OwlCarousel/owl.theme.default.min.css">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="assets/site/css/meanmenu.min.css">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="{{ asset('assets/site/vendor/slider/css/nivo-slider.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/site/vendor/slider/css/preview.css') }}" type="text/css"
        media="screen" />
    <!-- Magic popup CSS -->
    <link rel="stylesheet" href="{{ asset('assets/site/css/magnific-popup.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/site/css/style.css') }}">
    <!-- Modernizr Js -->
    <script src="{{ asset('assets/site/js/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper">
        @include('site.layouts.nav')
        <!-- Top Bar Space Start-->
        <div id="header-area-space"></div>
        @yield('content')
        <!-- Top Bar Space End-->
        @include('site.layouts.footer')
    </div>
    <!-- jquery-->
    <script src="{{ asset('assets/site/js/jquery-2.2.4.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ asset('assets/site/js/plugins.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('assets/site/js/bootstrap.min.js') }}"></script>
    <!-- WOW JS -->
    <script src="{{ asset('assets/site/js/wow.min.js') }}"></script>
    <!-- Nivo slider js -->
    <script src="{{ asset('assets/site/vendor/slider/js/jquery.nivo.slider.js') }}"></script>
    <script src="{{ asset('assets/site/vendor/slider/home.js') }}"></script>
    <!-- Owl Cauosel JS -->
    <script src="{{ asset('assets/site/vendor/OwlCarousel/owl.carousel.min.js') }}"></script>
    <!-- Meanmenu Js -->
    <script src="{{ asset('assets/site/js/jquery.meanmenu.min.js') }}"></script>
    <!-- Srollup js -->
    <script src="{{ asset('assets/site/js/jquery.scrollUp.min.js') }}"></script>
    <!-- jquery.counterup js -->
    <script src="{{ asset('assets/site/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/site/js/waypoints.min.js') }}"></script>
    <!-- Countdown js -->
    <script src="{{ asset('assets/site/js/jquery.countdown.min.js') }}"></script>
    <!-- Isotope js -->
    <script src="{{ asset('assets/site/js/isotope.pkgd.min.js') }}"></script>
    <!-- Magic Popup js -->
    <script src="{{ asset('assets/site/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('assets/site/js/main.js') }}"></script>
</body>

</html>