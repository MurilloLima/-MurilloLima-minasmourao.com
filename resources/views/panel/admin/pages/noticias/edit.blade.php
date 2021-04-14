@extends('panel.admin.layouts.app', ['activePage' => 'admin.noticias.index'])
@section('title', 'Notícias')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Editar Notícia</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div>
    {{-- end content-header --}}

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10">
                    @include('panel.includes.alerts')
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Editar notícia</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                {!! Form::open(['route'=>['admin.noticia.update', 'id'=>$data->id], 'files' => true])
                                !!}
                                @include('panel.admin.pages.noticias._form.form')
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Editar</button>
                                </div>
                                {!! Form::close() !!}
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection