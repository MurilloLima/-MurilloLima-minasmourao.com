@extends('site.layouts.app')
@section('title', 'Produtos')
@section('content')
<div class="bg-common-style banner-overlay section-space-banner"
    style="background-image: url({{asset('assets/site/img/banner/layer-1401.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content-layout2 text-center">
                    <h1>Conheça nossos produtos</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-space-default">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div id="category-view" class="category-grid-layout1">
                    <div class="row">
                        @forelse ($produtos as $item)
                        <div class="col-md-4 col-sm-6 col-xs-6 col-mb-12 shop-list-view">
                            <div class="shop-item-layout1">
                                <div class="image-box">
                                    <a href="#">
                                        <img src="{{ route('imagem.render', 'produtos/m/' . $item->img) }}" alt="img">
                                    </a>
                                </div>
                                <div class="content-box">
                                    <h3><a href="{{ route('site.noticia.produtoDetalhes', ['slug'=>$item->slug]) }}">{{$item->title}}</a></h3>
                                    <p>{{$item->desc}}</p>
                                    <ul>
                                        <li>
                                            <a href="#"><i class="icofont icofont-love"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icofont icofont-random"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-md-12 text-center">
                            <span><strong>Nenhum produto cadastrado...</strong></span>
                        </div>
                        @endforelse

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pagination-center">
                            {!!$produtos->links()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection