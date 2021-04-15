@extends('site.layouts.app')
@section('title', 'Home')
@section('content')

<!-- Slider Area Start Here -->
<div id="wowslider-container1">
    <div class="ws_images">
        <ul>
            @foreach ($slider as $item)
            <li>
                <img src="{{ route('imagem.render', 'slider/g/' . $item->img) }}" alt="{{$item->title}}"
                    title="{{$item->title}}" id="wows1_1" />
            </li>
            @endforeach
        </ul>
    </div>
    <div class="ws_bullets">
        <div>
            <a href="#" title="02 - cópia"><span>1</span></a>
            <a href="#" title="02"><span>2</span></a>
        </div>
    </div>
    <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery slider</a> by
        WOWSlider.com v9.0m</div>
    <div class="ws_shadow"></div>
</div>
<script type="text/javascript" src="{{ asset('assets/site/engine1/wowslider.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/site/engine1/script.js') }}"></script>
<!-- Slider Area End Here -->

<!-- 3 Features Area Start Here -->
<div class="shadow-bottom section-space-less30">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="features3-wrp-layout1">
                    <div class="icon-box">
                        <i class="bi bi-home"></i>
                    </div>
                    <div class="content-box">
                        <h2><a href="{{ route('site.empresa') }}">INSTITUCIONAL</a></h2>
                        <p>A Minas Mourão é uma empresa oriunda do estado de Minas Gerais onde há décadas atende uma
                            demanda crescente por Eucalipto Tratado.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="features3-wrp-layout1">
                    <div class="icon-box">
                        <i class="bi bi-money-bag"></i>
                    </div>
                    <div class="content-box">
                        <h2><a href="{{ route('site.orcamentos') }}">Orçamento online</a></h2>
                        <p>Utilize nosso site para solicitar uma cotação de Eucalipto Cloeziana Tratado! É simples e
                            rápido. O mais breve possível entraremos em contato com os preços e condições de entrega
                            para sua região.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="features3-wrp-layout1">
                    <div class="icon-box">
                        <i class="bi bi-book"></i>
                    </div>
                    <div class="content-box">
                        <h2><a href="{{ route('site.produtos') }}">Nossos produtos</a></h2>
                        <p>
                            Para garantir o que prometemos, trabalhamos somente com o Eucalipto Cloeziana, difundido no
                            Vale do Jequitinhonha, reconhecido pela sua alta densidade, resistência mecânica e
                            durabilidade natural, o que o aproxima da qualidade de espécies nativas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 3 Features Area End Here -->
<!-- Featured Services Area Start Here -->
<div class="section-space-less30" style="background-image: url({{asset('assets/site/img/bg-reapet/featuredbg.jpg')}});">
    <div class="container">
        <div class="section-title-dark">
            <h2>Nossos <span>Produtos</span></h2>
        </div>
        <div class="row">
            @foreach ($produtos as $item)
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="service-layout1">
                    <div class="image-box">
                        <img src="{{ route('imagem.render', 'produtos/m/' . $item->img) }}" alt="{{$item->title}}">
                    </div>
                    <div class="content-box text-center">
                        <h3>
                            <a
                                href="{{ route('site.noticia.produtoDetalhes', ['slug'=>$item->slug]) }}">{{$item->title}}</a>
                        </h3>
                        <p>{{$item->desc}}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Featured Services Area End Here -->
<!-- Portfolio Area Start Here -->
<div class="section-space-all">
    <div class="container-fluid mb-75 isotope-container">
        <div class="section-title-dark">
            <h2>exemplos de uso <span>eucalipton</span></h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="isotope-classes-tab project-list2 shadow-equal">
                    <a href="#" data-filter="*" class="current">Todos</a>
                    <a href="#" data-filter=".commercial2">casa</a>
                    <a href="#" data-filter=".interior2">construção</a>
                    <a href="#" data-filter=".residential2">galpão</a>
                    <a href="#" data-filter=".hospital2">cercas</a>
                </div>
            </div>
        </div>
        <div class="row no-gutters featured-container gallery-wrapper2">
            {{-- casa  --}}
            <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12 commercial2">
                <div class="portfolio-layout5">
                    <div class="image-box">
                        <img src="{{ asset('assets/site/img/exemplos/casa1.jpg') }}" alt="img">
                    </div>
                    <div class="content-box">
                        <ul>
                            <li><a href="{{ asset('assets/site/img/exemplos/casa1.jpg') }}" class="zoom"><i
                                        class="bi bi-search"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12 commercial2">
                <div class="portfolio-layout5">
                    <div class="image-box">
                        <img src="{{ asset('assets/site/img/exemplos/casa2.jpg') }}" alt="img">
                    </div>
                    <div class="content-box">
                        <ul>
                            <li><a href="{{ asset('assets/site/img/exemplos/casa2.jpg') }}" class="zoom"><i
                                        class="bi bi-search"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12 commercial2">
                <div class="portfolio-layout5">
                    <div class="image-box">
                        <img src="{{ asset('assets/site/img/exemplos/casa3.jpg') }}" alt="img">
                    </div>
                    <div class="content-box">
                        <ul>
                            <li><a href="{{ asset('assets/site/img/exemplos/casa3.jpg') }}" class="zoom"><i
                                        class="bi bi-search"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12 commercial2">
                <div class="portfolio-layout5">
                    <div class="image-box">
                        <img src="{{ asset('assets/site/img/exemplos/casa4.jpg') }}" alt="img">
                    </div>
                    <div class="content-box">
                        <ul>
                            <li><a href="{{ asset('assets/site/img/exemplos/casa4.jpg') }}" class="zoom"><i
                                        class="bi bi-search"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12 commercial2">
                <div class="portfolio-layout5">
                    <div class="image-box">
                        <img src="{{ asset('assets/site/img/exemplos/casa5.jpg') }}" alt="img">
                    </div>
                    <div class="content-box">
                        <ul>
                            <li><a href="{{ asset('assets/site/img/exemplos/casa5.jpg') }}" class="zoom"><i
                                        class="bi bi-search"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12 commercial2">
                <div class="portfolio-layout5">
                    <div class="image-box">
                        <img src="{{ asset('assets/site/img/exemplos/casa6.jpg') }}" alt="img">
                    </div>
                    <div class="content-box">
                        <ul>
                            <li><a href="{{ asset('assets/site/img/exemplos/casa6.jpg') }}" class="zoom"><i
                                        class="bi bi-search"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12 commercial2">
                <div class="portfolio-layout5">
                    <div class="image-box">
                        <img src="{{ asset('assets/site/img/exemplos/casa7.jpg') }}" alt="img">
                    </div>
                    <div class="content-box">
                        <ul>
                            <li><a href="{{ asset('assets/site/img/exemplos/casa7.jpg') }}" class="zoom"><i
                                        class="bi bi-search"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- construcao --}}
            {{-- <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12 interior2">
                <div class="portfolio-layout5">
                    <div class="image-box">
                        <img src="{{ asset('assets/site/img/exemplos/construcao1.jpg') }}" alt="img">
                    </div>
                    <div class="content-box">
                        <ul>
                            <li><a href="{{ asset('assets/site/img/exemplos/construcao1.jpg') }}" class="zoom"><i
                                        class="bi bi-search"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12 interior2">
                <div class="portfolio-layout5">
                    <div class="image-box">
                        <img src="{{ asset('assets/site/img/exemplos/construcao2.jpg') }}" alt="img">
                    </div>
                    <div class="content-box">
                        <ul>
                            <li><a href="{{ asset('assets/site/img/exemplos/construcao2.jpg') }}" class="zoom"><i
                                        class="bi bi-search"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12 interior2">
                <div class="portfolio-layout5">
                    <div class="image-box">
                        <img src="{{ asset('assets/site/img/exemplos/construcao3.jpg') }}" alt="img">
                    </div>
                    <div class="content-box">
                        <ul>
                            <li><a href="{{ asset('assets/site/img/exemplos/construcao3.jpg') }}" class="zoom"><i
                                        class="bi bi-search"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12 interior2">
                <div class="portfolio-layout5">
                    <div class="image-box">
                        <img src="{{ asset('assets/site/img/exemplos/construcao4.jpg') }}" alt="img">
                    </div>
                    <div class="content-box">
                        <ul>
                            <li><a href="{{ asset('assets/site/img/exemplos/construcao4.jpg') }}" class="zoom"><i
                                        class="bi bi-search"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div> --}}

            {{-- galpao  --}}
            {{-- <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12 residential2">
                <div class="portfolio-layout5">
                    <div class="image-box">
                        <img src="{{ asset('assets/site/img/exemplos/galpao1.jpg') }}" alt="img">
                    </div>
                    <div class="content-box">
                        <ul>
                            <li><a href="{{ asset('assets/site/img/exemplos/galpao1.jpg') }}" class="zoom"><i
                                        class="bi bi-search"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div> --}}
            <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12 residential2">
                <div class="portfolio-layout5">
                    <div class="image-box">
                        <img src="{{ asset('assets/site/img/exemplos/galpao2.jpg') }}" alt="img">
                    </div>
                    <div class="content-box">
                        <ul>
                            <li><a href="{{ asset('assets/site/img/exemplos/galpao2.jpg') }}" class="zoom"><i
                                        class="bi bi-search"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12 residential2">
                <div class="portfolio-layout5">
                    <div class="image-box">
                        <img src="{{ asset('assets/site/img/exemplos/galpao3.jpg') }}" alt="img">
                    </div>
                    <div class="content-box">
                        <ul>
                            <li><a href="{{ asset('assets/site/img/exemplos/galpao3.jpg') }}" class="zoom"><i
                                        class="bi bi-search"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12 residential2">
                <div class="portfolio-layout5">
                    <div class="image-box">
                        <img src="{{ asset('assets/site/img/exemplos/galpao4.jpg') }}" alt="img">
                    </div>
                    <div class="content-box">
                        <ul>
                            <li><a href="{{ asset('assets/site/img/exemplos/galpao4.jpg') }}" class="zoom"><i
                                        class="bi bi-search"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12 residential2">
                <div class="portfolio-layout5">
                    <div class="image-box">
                        <img src="{{ asset('assets/site/img/exemplos/galpao5.jpg') }}" alt="img">
                    </div>
                    <div class="content-box">
                        <ul>
                            <li><a href="{{ asset('assets/site/img/exemplos/galpao5.jpg') }}" class="zoom"><i
                                        class="bi bi-search"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12 residential2">
                <div class="portfolio-layout5">
                    <div class="image-box">
                        <img src="{{ asset('assets/site/img/exemplos/galpao6.jpg') }}" alt="img">
                    </div>
                    <div class="content-box">
                        <ul>
                            <li><a href="{{ asset('assets/site/img/exemplos/galpao6.jpg') }}" class="zoom"><i
                                        class="bi bi-search"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div>

            {{-- cercas --}}
            <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12 hospital2">
                <div class="portfolio-layout5">
                    <div class="image-box">
                        <img src="{{ asset('assets/site/img/exemplos/cerca1.jpg') }}" alt="img">
                    </div>
                    <div class="content-box">
                        <ul>
                            <li><a href="{{ asset('assets/site/img/exemplos/cerca1.jpg') }}" class="zoom"><i
                                        class="bi bi-search"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12 hospital2">
                <div class="portfolio-layout5">
                    <div class="image-box">
                        <img src="{{ asset('assets/site/img/exemplos/cerca2.jpg') }}" alt="img">
                    </div>
                    <div class="content-box">
                        <ul>
                            <li><a href="{{ asset('assets/site/img/exemplos/cerca2.jpg') }}" class="zoom"><i
                                        class="bi bi-search"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12 hospital2">
                <div class="portfolio-layout5">
                    <div class="image-box">
                        <img src="{{ asset('assets/site/img/exemplos/cerca3.jpg') }}" alt="img">
                    </div>
                    <div class="content-box">
                        <ul>
                            <li><a href="{{ asset('assets/site/img/exemplos/cerca3.jpg') }}" class="zoom"><i
                                        class="bi bi-search"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12 hospital2">
                <div class="portfolio-layout5">
                    <div class="image-box">
                        <img src="{{ asset('assets/site/img/exemplos/cerca4.jpg') }}" alt="img">
                    </div>
                    <div class="content-box">
                        <ul>
                            <li><a href="{{ asset('assets/site/img/exemplos/cerca4.jpg') }}" class="zoom"><i
                                        class="bi bi-search"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-mb-12 hospital2">
                <div class="portfolio-layout5">
                    <div class="image-box">
                        <img src="{{ asset('assets/site/img/exemplos/cerca5.jpg') }}" alt="img">
                    </div>
                    <div class="content-box">
                        <ul>
                            <li><a href="{{ asset('assets/site/img/exemplos/cerca5.jpg') }}" class="zoom"><i
                                        class="bi bi-search"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Area End Here -->

<!-- Testimonial Area Start Here -->
<div class="section-space-default Testimonial-overlay"
    style="background-image: url({{asset('assets/site/img/client/clientbg3.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">

            </div>
            <div class="col-lg-8">
                <div class="section-title-light text-center">
                    <h2>Depoimentos <span>clientes</span></h2>
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
                            <p>Agradeço pelo seu esforço, pela sua dedicação, pelas horas extras e pelo trabalho que
                                sempre desempenhou com tanta energia. Em pequenos passos e com muitas mãos que se faz
                                uma empresa. Agradeço a todos os funcionários que dedicam seu amor, sua inteligência e
                                sua energia nesse espaço de trabalho.</p>
                        </div>
                        <div class="image-box">
                            <img src="{{ asset('assets/site/img/client/layer-196.jpg') }}" alt="img">
                        </div>
                        <div class="title-box">
                            <h3>Luiz Augusto</h3>
                            <p>Arquiteta</p>
                        </div>
                    </div>
                    <div class="feedback-review-layout4">
                        <div class="description">
                            <p>“Ótimo atendimento.” “Agradecemos pelo bom atendimento.” “Já conhecia o trabalho da
                                empresa, então já tinha confiança de um serviço de boa qualidade.” “Estamos muito
                                satisfeitos com os serviços prestados.</p>
                        </div>
                        <div class="image-box">
                            <img src="{{ asset('assets/site/img/client/layer-203.jpg') }}" alt="img">
                        </div>
                        <div class="title-box">
                            <h3>Roberto morgan</h3>
                            <p>Engenheiro</p>
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
                <h2>Como solicitar um orçamento? <span>(63)99208-9508</span></h2>
            </div>
            <div class="col-md-2 col-sm-12">
                <a class="btn btn-get shadow-equal" href="#">Ou solicite aqui!</a>
            </div>
        </div>
    </div>
</div>
<!-- Newslatter Area End Here -->
<!-- Blog Area End Here -->
<div class="section-space-less30 bg-gray4">
    <div class="container">
        <div class="section-title-dark text-center">
            <h2>últimas <span>notícias</span></h2>
        </div>
        <div class="row">
            @forelse ($noticias as $item)
            <div class="col-md-4">
                <div class="blog-wrp-layout4">
                    <div class="image-box">
                        <img src="{{ route('imagem.render', 'noticias/m/' . $item->img) }}" alt="{{$item->title}}">
                    </div>
                    <div class="content-box text-center">
                        <ul>
                            <li class="primary-text">{{$item->created_at->formatLocalized('%d de %B de %Y')}}</li>
                        </ul>
                        <h3 class="small-text">
                            <a
                                href="{{ route('site.noticia.noticiaDetalhes', ['slug'=>$item->slug]) }}">{{$item->title}}</a>
                        </h3>
                        <p>{{$item->desc}}</p>
                        <a class="more-button2"
                            href="{{ route('site.noticia.noticiaDetalhes', ['slug'=>$item->slug]) }}">Continuar
                            lendo</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-md-12 text-center">
                <span><strong>Nenhuma notícia no momento...</strong></span>
            </div>
            @endforelse
        </div>
    </div>
</div>
<!-- Blog Area End Here -->
@endsection