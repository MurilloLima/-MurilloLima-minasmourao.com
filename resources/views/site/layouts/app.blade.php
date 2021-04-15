<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Minas Mourão</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/icon.png">
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
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/engine1/style.css') }}" />
    <script type="text/javascript" src="{{ asset('assets/site/engine1/jquery.js') }}"></script>
    {{-- <script src="{{ asset('assets/site/js/jquery-2.2.4.min.js') }}"></script> --}}
    <!-- End WOWSlider.com HEAD section -->
    <style>
        div#loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('{{url('assets/site/img/78px.gif')}}') 50% 50% no-repeat white;
        }
    </style>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="loader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper">
        @include('site.layouts.nav')
        <!-- Top Bar Space Start-->
        <div id="header-area-space"></div>
        @yield('content')
        <!-- Top Bar Space End-->
        @include('site.layouts.footer')
        
        <a href="https://api.whatsapp.com/send?phone=5563992089508&text=Entre em contato conosco pelo whatsapp%20"
            target="_blank" style="position:fixed;bottom:20px;right:30px;">
            <svg enable-background="new 0 0 512 512" width="50" height="50" version="1.1" viewBox="0 0 512 512"
                xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M256.064,0h-0.128l0,0C114.784,0,0,114.816,0,256c0,56,18.048,107.904,48.736,150.048l-31.904,95.104  l98.4-31.456C155.712,496.512,204,512,256.064,512C397.216,512,512,397.152,512,256S397.216,0,256.064,0z"
                    fill="#4CAF50" />
                <path
                    d="m405.02 361.5c-6.176 17.44-30.688 31.904-50.24 36.128-13.376 2.848-30.848 5.12-89.664-19.264-75.232-31.168-123.68-107.62-127.46-112.58-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624 26.176-62.304c6.176-6.304 16.384-9.184 26.176-9.184 3.168 0 6.016 0.16 8.576 0.288 7.52 0.32 11.296 0.768 16.256 12.64 6.176 14.88 21.216 51.616 23.008 55.392 1.824 3.776 3.648 8.896 1.088 13.856-2.4 5.12-4.512 7.392-8.288 11.744s-7.36 7.68-11.136 12.352c-3.456 4.064-7.36 8.416-3.008 15.936 4.352 7.36 19.392 31.904 41.536 51.616 28.576 25.44 51.744 33.568 60.032 37.024 6.176 2.56 13.536 1.952 18.048-2.848 5.728-6.176 12.8-16.416 20-26.496 5.12-7.232 11.584-8.128 18.368-5.568 6.912 2.4 43.488 20.48 51.008 24.224 7.52 3.776 12.48 5.568 14.304 8.736 1.792 3.168 1.792 18.048-4.384 35.52z"
                    fill="#FAFAFA" /></svg>
        </a>
    </div>
    <!-- jquery-->
    <!-- Plugins js -->
    <script src="{{ asset('assets/site/js/plugins.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('assets/site/js/bootstrap.min.js') }}"></script>
    <!-- WOW JS -->
    <script src="{{ asset('assets/site/js/wow.min.js') }}"></script>
    <!-- Nivo slider js -->
    {{-- <script src="{{ asset('assets/site/vendor/slider/js/jquery.nivo.slider.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/site/vendor/slider/home.js') }}"></script> --}}
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


    {{-- loading --}}
    <script>
        // Este evendo é acionado após o carregamento da página
    jQuery(window).load(function() {
        //Após a leitura da pagina o evento fadeOut do loader é acionado, esta com delay para ser perceptivo em ambiente fora do servidor.
        jQuery("#loader").fadeOut("slow");
    });
    </script>
</body>

</html>