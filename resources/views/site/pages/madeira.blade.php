@extends('site.layouts.app')
@section('title', 'A Madeira')
@section('content')
<div class="bg-common-style banner-overlay section-space-banner2"
    style="background-image: url({{asset('assets/site/img/banner/bannerbt.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content-layout4 text-center">
                    <p>Sobre</p>
                    <h2>A Madeira</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-space-less30">
    <div class="container">
        <div class="section-title-primary text-center">
            <h2>Conheça nossa Madeira</h2>
            <p>Para garantir o que prometemos, trabalhamos somente com o Eucalipto Cloeziana, difundido no Vale do
                Jequitinhonha, reconhecido pela sua alta densidade, resistência mecânica e durabilidade natural, o que o
                aproxima da qualidade de espécies nativas. </p>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="process-image-box">
                    <img src="{{ asset('assets/site/img/exemplos/galpao5.jpg') }}" alt="img">
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="process-content-layout1">
                    <h3> Será que eucalipto é mesmo tudo igual?</h3>
                    <p>
                        Atualmente existem mais de 800 espécies de eucalipto, nativas e derivadas de cruzamentos, os
                        chamados clones.
                    </p>
                    <p>
                        Cada uma dessas espécies possuem, portanto características diferentes, tal como densidade,
                        resistencia mecânica, linearidade, tendência à rachaduras... Dessa forma também são destinadas a
                        diferentes fins, sendo os mais conhecidos...
                    </p>
                    <p>
                        <strong>Espécies:</strong> Urophyla, Grandis, Camadulensis e Clones nomeados com siglas tais
                        como ( 144, 224, 1270, 1528, VM01) <br>
                        <strong>Características:</strong> Baixa densidade, Grande Desenvolvimento, Sinuosidades, Fendas
                        e Rachaduras
                        Frequentes, Altamente Disponível <br>
                        <strong>Principais Fins:</strong> Carvão, Papel e Celulose, Lenha
                    </p>

                    <strong>Espécies:</strong> Cloeziana, Citriodora, Saligna <br>
                    <strong>Características:</strong> Alta Densidade e Resistência Mecânica, Uniformidade, Fendas e
                    Rachaduras de Pequeno
                    Grau, Baixo Desenvolvimento, Escasso <br>
                    <strong>Principais Fins:</strong> Contrução Civil e Rural

                    <p>
                        Dentre as espécies destinadas a construção o CLOEZIANA é a madeira perfeita para esse tipo de
                        aplicação. Apesar de apresentar uma densidade um pouco inferior ao do Citriodora, o que pouco
                        afeta
                        a resistência mecânica das peças, o cloeziana apresenta uma uniformidade entre as pontas e uma
                        linearidade das peças que facilitam a aplicação e garantem uma beleza sem igual ao ambiente.
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