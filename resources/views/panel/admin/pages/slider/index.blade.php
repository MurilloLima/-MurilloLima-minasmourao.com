@extends('panel.admin.layouts.app', ['activePage' => 'admin.slider.index'])
@section('title')
Sliders
@endsection
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
                        <li class="breadcrumb-item active">Sliders</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div>
    {{-- end content-header --}}

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @include('panel.includes.alerts')
                    <div class="row">
                        <div class="col-md-12 text-left" style="margin-bottom: 10px;">
                            <button type="button" data-toggle="modal" data-target="#add" class="btn btn-default">
                                Cadastrar
                            </button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Sliders</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Título</th>
                                            <th>Data criação</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($data as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->title}}</td>
                                            <td>{{date('d/m/Y', strtotime($item->created_at))}}</td>
                                            <td>
                                                <button type="button" data-toggle="modal"
                                                    data-target="#edit{{$item->id}}" class="btn btn-xs btn-default"
                                                    title="Editar">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <a href="{{ route('admin.slider.delete', ['id'=>$item->id]) }}"
                                                    class="btn btn-xs btn-default" title="Deletar">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>

                                                {{-- modal edit --}}
                                                <div class="modal fade" id="edit{{$item->id}}" tabindex="-2"
                                                    role="dialog" aria-labelledby="edit{{$item->id}}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header text-center">
                                                                <h5 class="modal-title" id="editQuarto">
                                                                    Inserir slider
                                                                </h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                {!!
                                                                Form::open(['route'=>['admin.slider.update','id'=>$item->id],
                                                                'files' => true])
                                                                !!}
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="exampleInputFile">Escolhar
                                                                                    uma imagem 1900x515</label>
                                                                                <div class="input-group">
                                                                                    <div class="custom-file">
                                                                                        <input type="file" name="img"
                                                                                            class="custom-file-input"
                                                                                            id="exampleInputFile">
                                                                                        <label class="custom-file-label"
                                                                                            for="exampleInputFile"></label>
                                                                                    </div>
                                                                                    <div class="input-group-append">
                                                                                        <span class="input-group-text"
                                                                                            id="">Upload</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <label>{{ __('Título') }}</label>
                                                                            <div class="form-group">
                                                                                <input class="form-control" name="title"
                                                                                    type="text"
                                                                                    value="{{$item->title ?? old('title')}}" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Cancelar</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Editar</button>
                                                                </div>
                                                                {!! Form::close() !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Nenhum encontrado!!!</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex flex-row justify-content-end">
                                {{ $data->links() }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

{{-- modal add --}}
<div class="modal fade" id="add" tabindex="-2" role="dialog" aria-labelledby="add" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="editQuarto">
                    Cadastrar
                </h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.slider.store') }}" class="navbar-form" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputFile">Escolhar uma imagem 1280x480</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="img" value="{{old('img')}}"
                                                class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile"></label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>{{ __('Título') }}</label>
                                <div class="form-group">
                                    <input class="form-control" name="title" type="text" value="{{old('title')}}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection