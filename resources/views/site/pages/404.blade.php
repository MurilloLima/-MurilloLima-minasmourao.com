@extends('panel.admin.layouts.app')
@section('title', 'Erro 404')

@section('content')
<div class="error-404 fullheight bg-gray6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="error-message text-center">
                    <h1>404</h1>
                    <h2>Desculpe, algo deu errado!</h2>
                    <a href="index.html" class="btn btn-fill">voltar para home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection