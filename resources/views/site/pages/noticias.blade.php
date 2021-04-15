@extends('site.layouts.app')
@section('title', 'Notícias')
@section('content')
<div class="bg-common-style banner-overlay section-space-banner"
    style="background-image: url({{asset('assets/site/img/banner/layer-1411.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content-layout2 text-center">
                    <h1>Notícias</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="body-bggray4">
    <!-- Blog Area End Here -->
    <div class="section-space-all">
        <div class="container">
            <div class="row">
                @forelse ($noticias as $item)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="blog-wrp-layout1">
                        <div class="image-box">
                            <img src="{{ route('imagem.render', 'noticias/m/' . $item->img) }}" alt="{{$item->title}}">
                        </div>
                        <div class="content-box text-left">
                            <h2><a href="{{ route('site.noticia.noticiaDetalhes', ['slug'=>$item->slug]) }}">{{$item->title}}</a></h2>
                            <ul>
                                <li><i class="icofont icofont-clock-time"></i> {{$item->created_at->formatLocalized('%d de %B de %Y')}}</li>

                            </ul>
                            <p>{{$item->desc}}</p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-md-12 text-center">
                    <span><strong>Nenhuma notícia cadastrada...</strong></span>
                </div>
                @endforelse
            </div>
            <!--Pagination Area Start Here -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination-center">
                        {!!$noticias->links()!!}
                    </div>
                </div>
            </div>
            <!--Pagination Area End Here -->
        </div>
    </div>
    <!-- Blog Area End Here -->
</div>
@endsection