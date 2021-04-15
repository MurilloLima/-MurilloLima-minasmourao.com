@extends('site.layouts.app')
@section('title', 'Contatos')
@section('content')
<div class="bg-common-style banner-overlay section-space-banner"
    style="background-image: url({{asset('assets/site/img/banner/layer-1412.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content-layout2 text-center">
                    <h1>contate-nos</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-space-all">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="section-title-primary">
                    <h2>Envie-nos uma mensagem</h2>
                </div>
                <div class="contact-form-layout4 text-center">
                    <form id="contact-form" novalidate="true">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control top-input" name="name" placeholder="Nome"
                                        data-error="Name field is required" required="">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control top-input" name="email" placeholder="E-mail"
                                        data-error="Email field is required" required="">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control top-input" name="company"
                                        placeholder="Empresa" data-error="Company field is required" required="">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control top-input" name="phone"
                                        placeholder="Telefone" data-error="Phone field is required" required="">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control message-box" name="message" data-error="Sua mensagem"
                                        required=""></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <button class="btn-primary-fill-ghost disabled" type="submit">Enviar</button>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-response"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info-layout3 shadow-equal">
                    <div class="title-box">
                        <h2>Contatos</h2>
                    </div>
                    <ul class="contact-address">
                        <li><i class="bi bi-location-pointer"></i>
                            <p>BR 226 (Belém Brasília), Km 02 Aguiarnopolis-TO</p>
                        </li>
                        <li><i class="bi bi-phone"></i>
                            <p>(63)99208-9508 99920-3471</p>
                        </li>
                        <li><i class="bi bi-envelop"></i>
                            <p>contato@minasmourao.com.br</p>
                        </li>
                    </ul>
                    <ul class="contact-social">
                        <li>
                            <a href="contact.html#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="contact.html#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="contact.html#" title="fa-google-plus"><i class="fa fa-google-plus"
                                    aria-hidden="true"></i>
                            </a>
                        </li>

                        <li>
                            <a href="contact.html#" title="linkedin-square"><i class="fa fa-linkedin-square"
                                    aria-hidden="true"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection