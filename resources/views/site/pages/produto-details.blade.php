@extends('site.layouts.app')
@section('title', 'Produto')
@section('content')

<div class="body-bggray4">
    <!-- Banner Area Start Here -->
    <div class="bg-common-style banner-overlay section-space-banner"
        style="background-image: url({{asset('assets/site/img/banner/layer-1410.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content-layout2 text-center">
                        <h1>Produto</h1>
                        <p>{{$data->title}}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End Here -->
    <!-- Blog Area Start Here -->
    <div class="section-space-all">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7">
                    <div class="blog-news-layout2">
                        <div class="image-box">
                            <img src="{{ route('imagem.render', 'produtos/g/' . $data->img) }}" alt="{{$data->title}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-5">
                    <h2>{{$data->title}}</h2>
                    <i class="icofont icofont-clock-time"></i>
                    {{-- {{$data->created_at->formatLocalized('%d de %B de %Y')}} --}}
                    <p>{{$data->desc}}</p>
                    {!!$data->content!!}
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End Here -->
</div>
@endsection