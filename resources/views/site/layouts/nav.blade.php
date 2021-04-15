<!-- Header Area Start Here -->
<header>
    <div id="header-one" class="header header-layout1 header-fixed">
        <div class="header-top-area-dark header-top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-7">
                        <ul class="top-bar-contact-layout1">
                            <li>
                                <i class="bi bi-phone" aria-hidden="true"></i>
                                <a href="Tel:++6789-875-2235">
                                    +55 (63) 99208-9508</a>
                            </li>
                            <li>
                                <i class="bi bi-envelop" aria-hidden="true"></i>
                                <a href="{{ route('site.index') }}">
                                    contato@minasmourao.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-4 col-sm-5">
                        <ul class="top-bar-social-layout2">
                            <li>
                                <a href="{{ route('site.index') }}" title="facebook">
                                    <i class="icofont icofont-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('site.index') }}" title="twitter">
                                    <i class="icofont icofont-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('site.index') }}" title="google"><i
                                        class="icofont icofont-social-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('site.index') }}" title="linkedin"><i
                                        class="icofont icofont-social-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-menu-area bg-light" id="sticker">
            <div class="container">
                <div class="row d-md-flex align-items-md-center">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo-area">
                            <a href="{{ route('site.index') }}">
                                <img src="{{ asset('assets/site/logo.png') }}" alt="logo" class="img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <nav id="dropdown">
                            <ul class="text-uppercase text-right">

                                <li><a href="{{ route('site.index') }}">Home</a></li>
                                <li>
                                    <a href="">Sobre</a>
                                    <ul>
                                        <li><a href="{{ route('site.empresa') }}">A Empresa</a></li>
                                        <li><a href="{{ route('site.madeira') }}">A Madeira</a></li>
                                        <li><a href="{{ route('site.tratamento') }}">O Tratamento</a></li>
                                        {{-- <li><a href="{{ route('site.index') }}">Aplicacões</a></li> --}}
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('site.orcamentos') }}">Orçamentos</a>
                                </li>
                                <li>
                                    <a href="{{ route('site.produtos') }}">Produtos</a>
                                </li>
                                <li>
                                    <a href="{{ route('site.noticias') }}">Notícias</a>
                                </li>
                                <li>
                                    <a href="{{ route('site.contatos') }}">Contatos</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-1 col-md-1">
                        <div class="header-search">
                            <form>
                                <input type="text" class="search-input search-form" placeholder="Pesquisar...."
                                    required="">
                                <a href="{{ route('site.index') }}" id="search-button" class="search-button"><i
                                        class="icofont icofont-search"></i></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End Here -->