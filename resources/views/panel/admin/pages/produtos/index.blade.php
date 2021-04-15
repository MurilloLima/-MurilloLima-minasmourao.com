@extends('panel.admin.layouts.app', ['activePage' => 'admin.produtos.index'])
@section('title', 'Produtos')
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
                        <li class="breadcrumb-item active">Produtos</li>
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
                            <a href="{{ route('admin.produto.create') }}" class="btn btn-default">
                                Cadastrar
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Produtos</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tutílo</th>
                                            <th>Autor</th>
                                            <th class="text-center">Views</th>
                                            <th>Data criação</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($data as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{str_limit($item->title, 70)}}</td>
                                            <td>{{$item->user->name}}</td>
                                            <td class="text-center">{{$item->produtoViews->views ?? 0}}</td>
                                            <td>{{date('d/m/Y', strtotime($item->created_at))}}</td>
                                            <td>
                                                <a href="{{ route('admin.produto.edit', ['id'=>$item->id]) }}"
                                                    class="btn btn-xs btn-default" title="Editar">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="{{ route('admin.produto.delete', ['id'=>$item->id]) }}"
                                                    class="btn btn-xs btn-default" title="Deletar">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Nenhuma encontrada!!!</td>
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
@endsection