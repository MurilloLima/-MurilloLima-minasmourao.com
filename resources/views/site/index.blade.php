@extends('site.layouts.app')
@section('title', 'Home')
@section('content')
<!-- Slider Area Start Here -->
<div class="slider-area layout1 slider-overlay-dark">
    <div class="bend niceties preview-1">
        <div id="ensign-nivoslider-3" class="slides">
            <img src="{{ asset('assets/site/img/slider/slider1-1.jpg') }}" alt="slider" title="#slider-direction-1" />
            <img src="{{ asset('assets/site/img/slider/slider1-2.jpg') }}" alt="slider" title="#slider-direction-2" />
            <img src="{{ asset('assets/site/img/slider/slider1-3.jpg') }}" alt="slider" title="#slider-direction-3" />
        </div>
        <div id="slider-direction-1" class="t-cn slider-direction">
            <div class="slider-content s-tb slide-1">
                <div class="container">
                    <div class="title-container text-center">
                        <div class="small-title">we are expert</div>
                        <div class="big-title">CARPENTERS</div>
                        <ul class="slider-btn">
                            <li class="slide-left">
                                <a href="{{ route('site.index') }}#" class="slider-btn1">request a free quote</a>
                            </li>
                            <li class="slide-right">
                                <a href="{{ route('site.index') }}#" class="slider-btn2">view our services</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="slider-direction-2" class="t-cn slider-direction">
            <div class="slider-content s-tb slide-2">
                <div class="container">
                    <div class="title-container text-center">
                        <div class="small-title">we are expert</div>
                        <div class="big-title">CARPENTERS</div>
                        <ul class="slider-btn">
                            <li class="slide-left"><a href="{{ route('site.index') }}#" class="slider-btn1">Faça um orçamento</a>
                            </li>
                            <li class="slide-right"><a href="{{ route('site.index') }}#" class="slider-btn2">Produtos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="slider-direction-3" class="t-cn slider-direction">
            <div class="slider-content s-tb slide-1">
                <div class="container">
                    <div class="title-container text-center">
                        <div class="small-title">we are expert</div>
                        <div class="big-title">CARPENTERS</div>
                        <ul class="slider-btn">
                            <li class="slide-left"><a href="{{ route('site.index') }}#" class="slider-btn1">request a
                                    free quote</a>
                            </li>
                            <li class="slide-right"><a href="{{ route('site.index') }}#" class="slider-btn2">view our
                                    services</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Slider Area End Here -->
<!-- 3 Features Area Start Here -->
<div class="shadow-bottom section-space-less30">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="features3-wrp-layout1">
                    <div class="icon-box">
                        <i class="bi bi-files"></i>
                    </div>
                    <div class="content-box">
                        <h2><a href="index.html#">CERTIFICATION</a></h2>
                        <p>Neque porro quisquam qui doid lorem
                            ipsum quia dolor sit amet consec tetur
                            adipisci velit consec tet.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="features3-wrp-layout1">
                    <div class="icon-box">
                        <i class="bi bi-group"></i>
                    </div>
                    <div class="content-box">
                        <h2><a href="index.html#">24/7 Opened</a></h2>
                        <p>Neque porro quisquam qui doid lorem
                            ipsum quia dolor sit amet consec tetur
                            adipisci velit consec tet.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="features3-wrp-layout1">
                    <div class="icon-box">
                        <i class="bi bi-money-bag"></i>
                    </div>
                    <div class="content-box">
                        <h2><a href="index.html#">Fair Prices</a></h2>
                        <p>Neque porro quisquam qui doid lorem
                            ipsum quia dolor sit amet consec tetur
                            adipisci velit consec tet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 3 Features Area End Here -->
<!-- About Progress Area Start Here -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="Progress-about-image shadow-equal3">
                <img src="{{ asset('assets/site/img/about/about1.jpg') }}" alt="img">
            </div>
        </div>
    </div>
</div>
<div class="progress-content-area section-space-bottom2" style="background-image: url(img/bg-reapet/about_reapet.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="welcome-title">
                    <h2 class="welcom-txt">welcome to</h2>
                    <h2>Fabricate <span>carpenter</span></h2>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consec tetur, adipisci velit,
                        sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                        voluptatem. Neque porro quis is quam est, qui do lorem ipsum quia dolor sit amet, consectetur,
                        adipisci velit sed quia non. Quam eius modi tempora incidunt ut labore et dolore the magnam
                        aliquam quaerat vo luptatem. Neque porro quisquam est magnam aliquam.</p>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="radius-counter">
                    <li>
                        <div class="progress-layout1 shadow-equal wow fadeInUp">
                            <h2 class="about-counter title-bar-counter" data-num="670"></h2>
                            <p>Projects Done</p>
                        </div>
                    </li>
                    <li>
                        <div class="progress-layout1 shadow-equal wow fadeInUp">
                            <h2 class="about-counter title-bar-counter" data-num="90"></h2>
                            <p>Engineers</p>
                        </div>
                    </li>
                    <li>
                        <div class="progress-layout1 shadow-equal wow fadeInUp">
                            <h2 class="about-counter title-bar-counter" data-num="30"></h2>
                            <p>Years Experience</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- About Progress Area End Here -->
<!-- Featured Services Area Start Here -->
<div class="section-space-less30" style="background-image: url(img/bg-reapet/featuredbg.jpg);">
    <div class="container">
        <div class="section-title-dark">
            <h2>featured <span>services</span></h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="service-layout1">
                    <div class="image-box">
                        <img src="img/service/BasementPlumbing.jpg" alt="image">
                    </div>
                    <div class="content-box text-center">
                        <h3><a href="index.html#">Indoor Furniture</a></h3>
                        <p>Neque porro quisquam est, qui dolor em ipsum quia dolor sit amet, consec tetur, adipisci
                            velit, sed quia non.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="service-layout1">
                    <div class="image-box">
                        <img src="img/service/BathroomPlumbing.jpg" alt="image">
                    </div>
                    <div class="content-box text-center">
                        <h3><a href="index.html#">Home Wood Work</a></h3>
                        <p>Neque porro quisquam est, qui dolor em ipsum quia dolor sit amet, consec tetur, adipisci
                            velit, sed quia non.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="service-layout1">
                    <div class="image-box">
                        <img src="img/service/KitchenPlumbing.jpg" alt="image">
                    </div>
                    <div class="content-box text-center">
                        <h3><a href="index.html#">Outdoor Furniture</a></h3>
                        <p>Neque porro quisquam est, qui dolor em ipsum quia dolor sit amet, consec tetur, adipisci
                            velit, sed quia non.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="service-layout1">
                    <div class="image-box">
                        <img src="img/service/gaslineman.jpg" alt="image">
                    </div>
                    <div class="content-box text-center">
                        <h3><a href="index.html#">HARDWOOD FLOORING</a></h3>
                        <p>Neque porro quisquam est, qui dolor em ipsum quia dolor sit amet, consec tetur, adipisci
                            velit, sed quia non.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="service-layout1">
                    <div class="image-box">
                        <img src="img/service/drainservice.jpg" alt="image">
                    </div>
                    <div class="content-box text-center">
                        <h3><a href="index.html#">Doors & Windows</a></h3>
                        <p>Neque porro quisquam est, qui dolor em ipsum quia dolor sit amet, consec tetur, adipisci
                            velit, sed quia non.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="service-layout1">
                    <div class="image-box">
                        <img src="img/service/waterlineman.jpg" alt="image">
                    </div>
                    <div class="content-box text-center">
                        <h3><a href="index.html#">office decoration</a></h3>
                        <p>Neque porro quisquam est, qui dolor em ipsum quia dolor sit amet, consec tetur, adipisci
                            velit, sed quia non.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featured Services Area End Here -->
<!-- Portfolio Area Start Here -->
<div class="section-space-all">
    <div class="container-fluid mb-75 isotope-container">
        <div class="section-title-dark">
            <h2>recent <span>projects</span></h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="isotope-classes-tab project-list2 shadow-equal">
                    <a href="index.html#" data-filter="*" class="current">All Project</a>
                    <a href="index.html#" data-filter=".commercial2">commercial</a>
                    <a href="index.html#" data-filter=".interior2">interior</a>
                    <a href="index.html#" data-filter=".residential2">residential</a>
                    <a href="index.html#" data-filter=".hospital2">hospital</a>
                </div>
            </div>
        </div>
        <div class="row no-gutters featured-container gallery-wrapper2">
            <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12 commercial2">
                <div class="portfolio-layout5">
                    <div class="image-box">
                        <img src="img/service/indoor1.jpg" alt="img">
                    </div>
                    <div class="content-box">
                        <ul>
                            <li><a href="img/service/indoor1.jpg" class="zoom"><i class="bi bi-search"></i></a></li>
                            <li><a href="project-details2.html"><i class="bi bi-link"></i></a></li>
                        </ul>
                        <h2><a href="index.html#">indoor furniture work</a></h2>
                        <span><a href="index.html#">carpenter</a></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12 interior2">
                <div class="portfolio-layout5">
                    <div class="image-box">
                        <img src="img/service/indoor2.jpg" alt="img">
                    </div>
                    <div class="content-box">
                        <ul>
                            <li><a href="img/service/indoor2.jpg" class="zoom"><i class="bi bi-search"></i></a></li>
                            <li><a href="project-details2.html"><i class="bi bi-link"></i></a></li>
                        </ul>
                        <h2><a href="index.html#">indoor furniture work</a></h2>
                        <span><a href="index.html#">carpenter</a></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12 residential2">
                <div class="portfolio-layout5">
                    <div class="image-box">
                        <img src="img/service/indoor3.jpg" alt="img">
                    </div>
                    <div class="content-box">
                        <ul>
                            <li><a href="img/service/indoor3.jpg" class="zoom"><i class="bi bi-search"></i></a></li>
                            <li><a href="project-details2.html"><i class="bi bi-link"></i></a></li>
                        </ul>
                        <h2><a href="index.html#">indoor furniture work</a></h2>
                        <span><a href="index.html#">carpenter</a></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12 hospital2">
                <div class="portfolio-layout5">
                    <div class="image-box">
                        <img src="img/service/indoor4.jpg" alt="img">
                    </div>
                    <div class="content-box">
                        <ul>
                            <li><a href="img/service/indoor4.jpg" class="zoom"><i class="bi bi-search"></i></a></li>
                            <li><a href="project-details2.html"><i class="bi bi-link"></i></a></li>
                        </ul>
                        <h2><a href="index.html#">indoor furniture work</a></h2>
                        <span><a href="index.html#">carpenter</a></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12 residential2">
                <div class="portfolio-layout5">
                    <div class="image-box">
                        <img src="img/service/indoor5.jpg" alt="img">
                    </div>
                    <div class="content-box">
                        <ul>
                            <li><a href="img/service/indoor5.jpg" class="zoom"><i class="bi bi-search"></i></a></li>
                            <li><a href="project-details2.html"><i class="bi bi-link"></i></a></li>
                        </ul>
                        <h2><a href="index.html#">indoor furniture work</a></h2>
                        <span><a href="index.html#">carpenter</a></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12 residential2">
                <div class="portfolio-layout5">
                    <div class="image-box">
                        <img src="img/service/indoor6.jpg" alt="img">
                    </div>
                    <div class="content-box">
                        <ul>
                            <li><a href="img/service/indoor6.jpg" class="zoom"><i class="bi bi-search"></i></a></li>
                            <li><a href="project-details2.html"><i class="bi bi-link"></i></a></li>
                        </ul>
                        <h2><a href="index.html#">indoor furniture work</a></h2>
                        <span><a href="index.html#">carpenter</a></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12 commercial2">
                <div class="portfolio-layout5">
                    <div class="image-box">
                        <img src="img/service/indoor7.jpg" alt="img">
                    </div>
                    <div class="content-box">
                        <ul>
                            <li><a href="img/service/indoor7.jpg" class="zoom"><i class="bi bi-search"></i></a></li>
                            <li><a href="project-details2.html"><i class="bi bi-link"></i></a></li>
                        </ul>
                        <h2><a href="index.html#">indoor furniture work</a></h2>
                        <span><a href="index.html#">carpenter</a></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12 interior2">
                <div class="portfolio-layout5">
                    <div class="image-box">
                        <img src="img/service/indoor8.jpg" alt="img">
                    </div>
                    <div class="content-box">
                        <ul>
                            <li><a href="img/service/indoor8.jpg" class="zoom"><i class="bi bi-search"></i></a></li>
                            <li><a href="project-details2.html"><i class="bi bi-link"></i></a></li>
                        </ul>
                        <h2><a href="index.html#">indoor furniture work</a></h2>
                        <span><a href="index.html#">carpenter</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="project-btn text-center">
        <a href="index.html#" class="btn btn-fill">view all work</a>
    </div>
</div>
<!-- Portfolio Area End Here -->
<!-- Testimonial Area Start Here -->
<div class="section-space-default Testimonial-overlay" style="background-image: url(img/client/clientbg3.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">

            </div>
            <div class="col-lg-8">
                <div class="section-title-light text-center">
                    <h2>clients <span>reviews</span></h2>
                </div>
                <div class="plumber-carousel nav-control-middle3" data-loop="true" data-items="5" data-margin="30"
                    data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="500" data-dots="false"
                    data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
                    data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="true"
                    data-r-x-medium-dots="false" data-r-small="1" data-r-small-nav="true" data-r-small-dots="false"
                    data-r-medium="1" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="1"
                    data-r-large-nav="true" data-r-large-dots="false">
                    <div class="feedback-review-layout4">
                        <div class="description">
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consec tetur, adipisci
                                velit, sed quia non numquam eius modi the tempora Neque porro quisquam est, qui dolorem
                                ipsum quia. Context of Business.</p>
                        </div>
                        <div class="image-box">
                            <img src="{{ asset('assets/site/img/client/layer-196.jpg') }}" alt="img">
                        </div>
                        <div class="title-box">
                            <h3>stiven morgan</h3>
                            <p>CEO, Brand Architecture</p>
                        </div>
                    </div>
                    <div class="feedback-review-layout4">
                        <div class="description">
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consec tetur, adipisci
                                velit, sed quia non numquam eius modi the tempora Neque porro quisquam est, qui dolorem
                                ipsum quia. Context of Business.</p>
                        </div>
                        <div class="image-box">
                            <img src="img/client/layer-196.jpg" alt="img">
                        </div>
                        <div class="title-box">
                            <h3>stiven morgan</h3>
                            <p>CEO, Brand Architecture</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">

            </div>
        </div>
    </div>
</div>
<!-- Testimonial Area Area End Here -->
<!-- Newslatter Area Start Here -->
<div class="newslatter-layout1 shadow-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-12">
                <h2>Call Us To Get a Free Quote <span>+555 790 735</span></h2>
            </div>
            <div class="col-md-2 col-sm-12">
                <a class="btn btn-get shadow-equal" href="index.html#">send us an email</a>
            </div>
        </div>
    </div>
</div>
<!-- Newslatter Area End Here -->
<!-- Blog Area End Here -->
<div class="section-space-less30 bg-gray4">
    <div class="container">
        <div class="section-title-dark text-center">
            <h2>latest <span>news</span></h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="blog-wrp-layout4">
                    <div class="image-box">
                        <img src="{{ asset('assets/site/img/blog/styleb4.jpg') }}" alt="engeniers">
                    </div>
                    <div class="content-box text-center">
                        <ul>
                            <li class="primary-text">17 April 2017</li>
                        </ul>
                        <h3 class="small-text">
                            <a href="index.html#">MODERN TRENDS FOR BEDROOM</a>
                        </h3>
                        <p>Neque porro quisquam est, qui dolor em ipsum quia dolor sit amet, consec tetur adipisci
                            velit, sed quia non consec tetur </p>
                        <a class="more-button2" href="index.html#">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-wrp-layout4">
                    <div class="image-box">
                        <img src="{{ asset('assets/site/img/blog/styleb5.jpg') }}" alt="engeniers">
                    </div>
                    <div class="content-box text-center">
                        <ul>
                            <li class="primary-text">17 April 2017</li>
                        </ul>
                        <h3 class="small-text"><a href="index.html#">MODERN TRENDS FOR BEDROOM</a></h3>
                        <p>Neque porro quisquam est, qui dolor em ipsum quia dolor sit amet, consec tetur adipisci
                            velit, sed quia non consec tetur </p>
                        <a class="more-button2" href="index.html#">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-wrp-layout4">
                    <div class="image-box">
                        <img src="{{ asset('assets/site/img/blog/styleb6.jpg') }}" alt="engeniers">
                    </div>
                    <div class="content-box text-center">
                        <ul>
                            <li class="primary-text">17 April 2017</li>
                        </ul>
                        <h3 class="small-text"><a href="index.html#">MODERN TRENDS FOR BEDROOM</a></h3>
                        <p>Neque porro quisquam est, qui dolor em ipsum quia dolor sit amet, consec tetur adipisci
                            velit, sed quia non consec tetur </p>
                        <a class="more-button2" href="index.html#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Area End Here -->
<!-- Brand Logo Area End Here -->
<div class="brand-area-space">
    <div class="container">
        <div class="row">
            <div class="plumber-carousel" data-loop="true" data-items="5" data-margin="70" data-autoplay="false"
                data-autoplay-timeout="10000" data-smart-speed="500" data-dots="false" data-nav="false"
                data-nav-speed="false" data-r-x-small="2" data-r-x-small-nav="false" data-r-x-small-dots="false"
                data-r-x-medium="3" data-r-x-medium-nav="false" data-r-x-medium-dots="false" data-r-small="5"
                data-r-small-nav="false" data-r-small-dots="false" data-r-medium="5" data-r-medium-nav="false"
                data-r-medium-dots="false" data-r-large="5" data-r-large-nav="false" data-r-large-dots="false">
                <div class="brand-logo">
                    <a href="index.html#">
                        <img src="{{ asset('assets/site/img/brand/logoprimary1.png') }}" alt="img">
                    </a>
                </div>
                <div class="brand-logo">
                    <a href="index.html#">
                        <img src="{{ asset('assets/site/img/brand/logoprimary2.png') }}" alt="img">
                    </a>
                </div>
                <div class="brand-logo">
                    <a href="index.html#">
                        <img src="{{ asset('assets/site/img/brand/logoprimary1.png') }}" alt="img">
                    </a>
                </div>
                <div class="brand-logo">
                    <a href="index.html#">
                        <img src="{{ asset('assets/site/img/brand/logoprimary2.png') }}" alt="img">
                    </a>
                </div>
                <div class="brand-logo">
                    <a href="index.html#">
                        <img src="{{ asset('assets/site/img/brand/logoprimary1.png') }}" alt="img"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Brand Logo Area End Here -->
@endsection