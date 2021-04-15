@extends('site.layouts.app')
@section('title', 'Conheça a Empresa')
@section('content')
<div class="bg-common-style banner-overlay section-space-banner2"
    style="background-image: url({{asset('assets/site/img/banner/banner6.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content-layout4 text-center">
                    <p>Conheça</p>
                    <h2>Minas Mourão</h2>
                    <p>Eucalipto tratado</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-space-less30">
    <div class="container">
        <div class="section-title-primary text-center">
            <h2>História da Empresa</h2>
            <p>A Minas Mourão é uma empresa oriunda do estado de Minas Gerais onde há décadas atende uma demanda crescente por Eucalipto Tratado. </p>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="process-image-box">
                    <img src="{{ asset('assets/site/img/about/about4.jpg') }}" alt="img">
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="process-content-layout1">
                    <h3>Minas Mourão</h3>
                    <p>
                        A Minas Mourão é uma empresa oriunda do estado de Minas Gerais onde há décadas atende uma
                        demanda crescente por Eucalipto Tratado. <br>
                        Com o crescimento do mercado de eucalipto tratado na região norte do Tocantins e sul do Maranhão
                        resolvemos nos instalar na cidade de Aguiarnópolis/TO devido à localização geográfica com a
                        grande passagem do progresso na divisa dos dois estados.
                        O nosso produto agrega durabilidade além de não agredir de forma alguma ao meio ambiente, pois,
                        com o direcionamento da construção civil para a madeira através do Eucalipto Tratado estaremos
                        contribuindo com a preservação das nossas florestas evitando o desmatamento. <br>
                        Estamos devidamente estruturados para atender e levar com rapidez e eficiência o nosso produto
                        na quantidade e localidade que você precisar!
                        Faça um orçamento sem compromisso ou nos acompanhe a través de nossas redes sociais.
                        Deus no comando!
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-common-style banner-overlay section-space-default"
    style="background-image: url({{asset('assets/site/img/banner/bannerbt.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content-layout1 text-center">
                    <h2>Fale com nossos <br>especialistase</h2>
                    <ul>
                        <li><a href="about.html#"><i class="bi bi-phone"></i></a></li>
                        <li><span>Ligue agora: +55(63)99208-9508</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection