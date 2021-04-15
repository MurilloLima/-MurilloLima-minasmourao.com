@extends('site.layouts.app')
@section('title', $data->title)
@section('content')

<div class="body-bggray4">
    <!-- Banner Area Start Here -->
    <div class="bg-common-style banner-overlay section-space-banner"
        style="background-image: url({{asset('assets/site/img/banner/layer-1412.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content-layout2 text-center">
                        <h1>Notícia</h1>
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
                <div class="col-md-8 col-sm-8">
                    <div class="blog-news-layout2">
                        <div class="image-box">
                            <img src="{{ route('imagem.render', 'noticias/g/' . $data->img) }}" alt="{{$data->title}}">
                        </div>
                        <div class="blog-content">
                            <div class="title-box">
                                <h2>{{$data->title}}</h2>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('assets/site/img/blog/radiusimg2.jpg') }}"
                                                alt="{{$data->title}}">
                                        </a>
                                    </li>
                                    <li>Por: <span><a href="#">{{$data->user->name}}</a></span></li>
                                    <li><i
                                            class="icofont icofont-clock-time"></i>{{$data->created_at->formatLocalized('%d de %B de %Y')}}
                                    </li>
                                </ul>
                                <p>{{$data->desc}}</p>
                                {!!$data->content!!}
                            </div>


                            {{-- <div class="share-area shadow-equal">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <ul class="social-icon">
                                            <li>
                                                <h3>Share</h3>
                                            </li>
                                            <li><a href="blog-details.html#" title="facebook"><i class="fa fa-facebook"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="blog-details.html#" title="twitter"><i class="fa fa-twitter"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="blog-details.html#" title="google"><i class="fa fa-google"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="blog-details.html#" title="google"><i class="fa fa-linkedin"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <ul class="project-name">
                                            <li><a href="blog-details.html#">#Architecture</a></li>
                                            <li><a href="blog-details.html#">#Interior</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="sidebar-box-layout3">
                        <div class="title-box">
                            <h3>Pesquisar</h3>
                        </div>
                        <div class="search-form text-center">
                            <form role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Pesquisar...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit"><i
                                                class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="sidebar-box-layout3">
                        <div class="title-box">
                            <h3>Últimos posts</h3>
                        </div>
                        <div class="latest-research">
                            @foreach ($noticiasRight as $item)
                            <div class="media">
                                <div class="media-left media-top">
                                    <a href="{{ route('site.noticia.noticiaDetalhes', ['slug'=>$item->slug]) }}">
                                        <img src="{{ route('imagem.render', 'noticias/p/' . $item->img) }}"
                                            class="img-responsive" alt="{{$item->title}}"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a
                                            href="{{ route('site.noticia.noticiaDetalhes', ['slug'=>$data->slug]) }}">{{$data->title}}</a>
                                    </h4>
                                    <p>{{$item->created_at->diffForHumans()}}</p>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>

                    <div class="sidebar-box-layout3">
                        <div class="title-box">
                            <h3>newslatter</h3>
                        </div>
                        <div class="newslatter-form">
                            <form>
                                <ul>
                                    <li><input class="top-input" name="Email" placeholder="Seu E-mail"></li>
                                    <li><input class="btn btn-fill" type="submit" value="Escrever-se"></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End Here -->
</div>
@endsection