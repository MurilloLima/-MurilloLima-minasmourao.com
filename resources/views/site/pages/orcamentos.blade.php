@extends('site.layouts.app')
@section('title', 'Orçamento')
<style>
    .box-inputs {
        background-color: #c1c1c1;
        border: 1px solid #eeeeee;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 10px;
        display: flex;
        justify-content: space-between;
    }

    .box-inputs input {
        width: 100px;
    }

    .box-items {
        background-color: #342E2E;

        border: 1px solid #eeeeee;
        border-radius: 5px;
        padding: 10px;
    }
</style>
@section('content')
<div class="bg-common-style banner-overlay section-space-banner"
    style="background-image: url({{asset('assets/site/img/banner/layer-1403.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content-layout2 text-center">
                    <h1>Orçamentos</h1>
                    <p>solicitar a cotação online</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-space-all">
    <div class="container">
        <div class="section-title-primary text-center">
            <h2>Como solicitar a cotação online?</h2>
            <p>Na tabela abaixo, escolha o diâmetro da madeira, depois o tamanho e digite a quantidade.
                Na próxima tela, digite seus dados. </p>
        </div>
        @include('panel.includes.alerts')
        <div class="row">
            <div class="col-md-6">
                <div class="box-inputs">
                    {!! Form::open(['route'=>'site.orcamento.store']) !!}
                    <input type="hidden" name="bitola" value="Bitola 4 a 6 cm">
                    <label for="">Bitola 04 a 06 cm</label>
                    <select name="size">
                        <option value="">Escolha</option>
                        <option value="3,0m">3,0m</option>
                        <option value="3,5m">3,5m</option>
                        <option value="4,0m">4,0m</option>
                        <option value="3,0m">3,0m</option>
                        <option value="3,5m">3,5m</option>
                        <option value="4,0m">4,0m</option>
                        <option value="5,0m">5,0m</option>
                        <option value="6,0m">6,0m</option>
                        <option value="7,0m">7,0m</option>
                        <option value="8,0m">8,0m</option>
                        <option value="9,0m">9,0m</option>
                        <option value="10,0m">10,0m</option>
                        <option value="11,0m">11,0m</option>
                        <option value="12,0m">12,0m</option>
                    </select>
                    <label for="">Quantidade</label>
                    <input type="text" name="qtd" placeholder="0">
                    <button type="submit" class="btn btn-danger">Adicionar</button>
                    {!! Form::close() !!}
                </div>
                <div class="box-inputs">
                    {!! Form::open(['route'=>'site.orcamento.store']) !!}
                    <input type="hidden" name="bitola" value="Bitola 6 a 8 cm">
                    <label for="">Bitola 06 a 08 cm</label>
                    <select name="size">
                        <option value="">Escolha</option>
                        <option value="3,0m">3,0m</option>
                        <option value="3,5m">3,5m</option>
                        <option value="4,0m">4,0m</option>
                        <option value="3,0m">3,0m</option>
                        <option value="3,5m">3,5m</option>
                        <option value="4,0m">4,0m</option>
                        <option value="5,0m">5,0m</option>
                        <option value="6,0m">6,0m</option>
                        <option value="7,0m">7,0m</option>
                        <option value="8,0m">8,0m</option>
                        <option value="9,0m">9,0m</option>
                        <option value="10,0m">10,0m</option>
                        <option value="11,0m">11,0m</option>
                        <option value="12,0m">12,0m</option>
                    </select>
                    <label for="">Quantidade</label>
                    <input type="text" name="qtd" placeholder="0">
                    <button class="btn btn-danger">Adicionar</button>
                    {!! Form::close() !!}
                </div>
                <div class="box-inputs">
                    {!! Form::open(['route'=>'site.orcamento.store']) !!}
                    <input type="hidden" name="bitola" value="Bitola  8 a 10 cm">
                    <label for="">Bitola 08 a 10 cm</label>
                    <select name="size">
                        <option value="">Escolha</option>
                        <option value="3,0m">3,0m</option>
                        <option value="3,5m">3,5m</option>
                        <option value="4,0m">4,0m</option>
                        <option value="3,0m">3,0m</option>
                        <option value="3,5m">3,5m</option>
                        <option value="4,0m">4,0m</option>
                        <option value="5,0m">5,0m</option>
                        <option value="6,0m">6,0m</option>
                        <option value="7,0m">7,0m</option>
                        <option value="8,0m">8,0m</option>
                        <option value="9,0m">9,0m</option>
                        <option value="10,0m">10,0m</option>
                        <option value="11,0m">11,0m</option>
                        <option value="12,0m">12,0m</option>
                    </select>
                    <label for="">Quantidade</label>
                    <input type="text" name="qtd" placeholder="0">
                    <button class="btn btn-danger">Adicionar</button>
                    {!! Form::close() !!}
                </div>
                <div class="box-inputs">
                    {!! Form::open(['route'=>'site.orcamento.store']) !!}
                    <input type="hidden" name="bitola" value="Bitola 10 a 12 cm">
                    <label for="">Bitola 10 a 12 cm</label>
                    <select name="size">
                        <option value="">Escolha</option>
                        <option value="3,0m">3,0m</option>
                        <option value="3,5m">3,5m</option>
                        <option value="4,0m">4,0m</option>
                        <option value="3,0m">3,0m</option>
                        <option value="3,5m">3,5m</option>
                        <option value="4,0m">4,0m</option>
                        <option value="5,0m">5,0m</option>
                        <option value="6,0m">6,0m</option>
                        <option value="7,0m">7,0m</option>
                        <option value="8,0m">8,0m</option>
                        <option value="9,0m">9,0m</option>
                        <option value="10,0m">10,0m</option>
                        <option value="11,0m">11,0m</option>
                        <option value="12,0m">12,0m</option>
                    </select>
                    <label for="">Quantidade</label>
                    <input type="text" name="qtd" placeholder="0">
                    <button class="btn btn-danger">Adicionar</button>
                    {!! Form::close() !!}
                </div>
                <div class="box-inputs">
                    {!! Form::open(['route'=>'site.orcamento.store']) !!}
                    <input type="hidden" name="bitola" value="Bitola 12 a 14 cm">
                    <label for="">Bitola 12 a 14 cm</label>
                    <select name="size">
                        <option value="">Escolha</option>
                        <option value="3,0m">3,0m</option>
                        <option value="3,5m">3,5m</option>
                        <option value="4,0m">4,0m</option>
                        <option value="3,0m">3,0m</option>
                        <option value="3,5m">3,5m</option>
                        <option value="4,0m">4,0m</option>
                        <option value="5,0m">5,0m</option>
                        <option value="6,0m">6,0m</option>
                        <option value="7,0m">7,0m</option>
                        <option value="8,0m">8,0m</option>
                        <option value="9,0m">9,0m</option>
                        <option value="10,0m">10,0m</option>
                        <option value="11,0m">11,0m</option>
                        <option value="12,0m">12,0m</option>
                    </select>
                    <label for="">Quantidade</label>
                    <input type="text" name="qtd" placeholder="0">
                    <button class="btn btn-danger">Adicionar</button>
                    {!! Form::close() !!}
                </div>
                <div class="box-inputs">
                    {!! Form::open(['route'=>'site.orcamento.store']) !!}
                    <input type="hidden" name="bitola" value="Bitola 14 a 16 cm">
                    <label for="">Bitola 14 a 16 cm</label>
                    <select name="size">
                        <option value="">Escolha</option>
                        <option value="3,0m">3,0m</option>
                        <option value="3,5m">3,5m</option>
                        <option value="4,0m">4,0m</option>
                        <option value="3,0m">3,0m</option>
                        <option value="3,5m">3,5m</option>
                        <option value="4,0m">4,0m</option>
                        <option value="5,0m">5,0m</option>
                        <option value="6,0m">6,0m</option>
                        <option value="7,0m">7,0m</option>
                        <option value="8,0m">8,0m</option>
                        <option value="9,0m">9,0m</option>
                        <option value="10,0m">10,0m</option>
                        <option value="11,0m">11,0m</option>
                        <option value="12,0m">12,0m</option>
                    </select>
                    <label for="">Quantidade</label>
                    <input type="text" name="qtd" placeholder="0">
                    <button class="btn btn-danger">Adicionar</button>
                    {!! Form::close() !!}
                </div>
                <div class="box-inputs">
                    {!! Form::open(['route'=>'site.orcamento.store']) !!}
                    <input type="hidden" name="bitola" value="Bitola 16 a 18 cm">
                    <label for="">Bitola 16 a 18 cm</label>
                    <select name="size">
                        <option value="">Escolha</option>
                        <option value="3,0m">3,0m</option>
                        <option value="3,5m">3,5m</option>
                        <option value="4,0m">4,0m</option>
                        <option value="3,0m">3,0m</option>
                        <option value="3,5m">3,5m</option>
                        <option value="4,0m">4,0m</option>
                        <option value="5,0m">5,0m</option>
                        <option value="6,0m">6,0m</option>
                        <option value="7,0m">7,0m</option>
                        <option value="8,0m">8,0m</option>
                        <option value="9,0m">9,0m</option>
                        <option value="10,0m">10,0m</option>
                        <option value="11,0m">11,0m</option>
                        <option value="12,0m">12,0m</option>
                    </select>
                    <label for="">Quantidade</label>
                    <input type="text" name="qtd" placeholder="0">
                    <button class="btn btn-danger">Adicionar</button>
                    {!! Form::close() !!}
                </div>
                <div class="box-inputs">
                    {!! Form::open(['route'=>'site.orcamento.store']) !!}
                    <input type="hidden" name="bitola" value="Bitola 18 a 20 cm">
                    <label for="">Bitola 18 a 20 cm</label>
                    <select name="size">
                        <option value="">Escolha</option>
                        <option value="3,0m">3,0m</option>
                        <option value="3,5m">3,5m</option>
                        <option value="4,0m">4,0m</option>
                        <option value="3,0m">3,0m</option>
                        <option value="3,5m">3,5m</option>
                        <option value="4,0m">4,0m</option>
                        <option value="5,0m">5,0m</option>
                        <option value="6,0m">6,0m</option>
                        <option value="7,0m">7,0m</option>
                        <option value="8,0m">8,0m</option>
                        <option value="9,0m">9,0m</option>
                        <option value="10,0m">10,0m</option>
                        <option value="11,0m">11,0m</option>
                        <option value="12,0m">12,0m</option>
                    </select>
                    <label for="">Quantidade</label>
                    <input type="text" name="qtd" placeholder="0">
                    <button class="btn btn-danger">Adicionar</button>
                    {!! Form::close() !!}
                </div>
                <div class="box-inputs">
                    {!! Form::open(['route'=>'site.orcamento.store']) !!}
                    <input type="hidden" name="bitola" value="Bitola 20 a 22 cm">
                    <label for="">Bitola 20 a 22 cm</label>
                    <select name="size">
                        <option value="">Escolha</option>
                        <option value="3,0m">3,0m</option>
                        <option value="3,5m">3,5m</option>
                        <option value="4,0m">4,0m</option>
                        <option value="3,0m">3,0m</option>
                        <option value="3,5m">3,5m</option>
                        <option value="4,0m">4,0m</option>
                        <option value="5,0m">5,0m</option>
                        <option value="6,0m">6,0m</option>
                        <option value="7,0m">7,0m</option>
                        <option value="8,0m">8,0m</option>
                        <option value="9,0m">9,0m</option>
                        <option value="10,0m">10,0m</option>
                        <option value="11,0m">11,0m</option>
                        <option value="12,0m">12,0m</option>
                    </select>
                    <label for="">Quantidade</label>
                    <input type="text" name="qtd" placeholder="0">
                    <button class="btn btn-danger">Adicionar</button>
                    {!! Form::close() !!}
                </div>
                <div class="box-inputs">
                    {!! Form::open(['route'=>'site.orcamento.store']) !!}
                    <input type="hidden" name="bitola" value="Bitola 22 a 24 cm">
                    <label for="">Bitola 22 a 24 cm</label>
                    <select name="size">
                        <option value="">Escolha</option>
                        <option value="3,0m">3,0m</option>
                        <option value="3,5m">3,5m</option>
                        <option value="4,0m">4,0m</option>
                        <option value="3,0m">3,0m</option>
                        <option value="3,5m">3,5m</option>
                        <option value="4,0m">4,0m</option>
                        <option value="5,0m">5,0m</option>
                        <option value="6,0m">6,0m</option>
                        <option value="7,0m">7,0m</option>
                        <option value="8,0m">8,0m</option>
                        <option value="9,0m">9,0m</option>
                        <option value="10,0m">10,0m</option>
                        <option value="11,0m">11,0m</option>
                        <option value="12,0m">12,0m</option>
                    </select>
                    <label for="">Quantidade</label>
                    <input type="text" name="qtd" placeholder="0">
                    <button class="btn btn-danger">Adicionar</button>
                    {!! Form::close() !!}
                </div>
                <div class="box-inputs">
                    {!! Form::open(['route'=>'site.orcamento.store']) !!}
                    <input type="hidden" name="bitola" value="Bitola 24 a 27 cm">
                    <label for="">Bitola 24 a 27 cm</label>
                    <select name="size">
                        <option value="">Escolha</option>
                        <option value="3,0m">3,0m</option>
                        <option value="3,5m">3,5m</option>
                        <option value="4,0m">4,0m</option>
                        <option value="3,0m">3,0m</option>
                        <option value="3,5m">3,5m</option>
                        <option value="4,0m">4,0m</option>
                        <option value="5,0m">5,0m</option>
                        <option value="6,0m">6,0m</option>
                        <option value="7,0m">7,0m</option>
                        <option value="8,0m">8,0m</option>
                        <option value="9,0m">9,0m</option>
                        <option value="10,0m">10,0m</option>
                        <option value="11,0m">11,0m</option>
                        <option value="12,0m">12,0m</option>
                    </select>
                    <label for="">Quantidade</label>
                    <input type="text" name="qtd" placeholder="0">
                    <button class="btn btn-danger">Adicionar</button>
                    {!! Form::close() !!}
                </div>
                <div class="box-inputs">
                    {!! Form::open(['route'=>'site.orcamento.store']) !!}
                    <input type="hidden" name="bitola" value="Bitola 27 a 30 cm">
                    <label for="">Bitola 27 a 30 cm</label>
                    <select name="size">
                        <option value="">Escolha</option>
                        <option value="3,0m">3,0m</option>
                        <option value="3,5m">3,5m</option>
                        <option value="4,0m">4,0m</option>
                        <option value="3,0m">3,0m</option>
                        <option value="3,5m">3,5m</option>
                        <option value="4,0m">4,0m</option>
                        <option value="5,0m">5,0m</option>
                        <option value="6,0m">6,0m</option>
                        <option value="7,0m">7,0m</option>
                        <option value="8,0m">8,0m</option>
                        <option value="9,0m">9,0m</option>
                        <option value="10,0m">10,0m</option>
                        <option value="11,0m">11,0m</option>
                        <option value="12,0m">12,0m</option>
                    </select>
                    <label for="">Quantidade</label>
                    <input type="text" name="qtd" placeholder="0">
                    <button class="btn btn-danger">Adicionar</button>
                    {!! Form::close() !!}
                </div>

                <div class="box-inputs">
                    {!! Form::open(['route'=>'site.orcamento.store']) !!}
                    <input type="hidden" name="bitola" value="Bitola 30 a 35 cm">
                    <label for="">Bitola 30 a 35 cm</label>
                    <select name="size">
                        <option value="">Escolha</option>
                        <option value="3,0m">3,0m</option>
                        <option value="3,5m">3,5m</option>
                        <option value="4,0m">4,0m</option>
                        <option value="3,0m">3,0m</option>
                        <option value="3,5m">3,5m</option>
                        <option value="4,0m">4,0m</option>
                        <option value="5,0m">5,0m</option>
                        <option value="6,0m">6,0m</option>
                        <option value="7,0m">7,0m</option>
                        <option value="8,0m">8,0m</option>
                        <option value="9,0m">9,0m</option>
                        <option value="10,0m">10,0m</option>
                        <option value="11,0m">11,0m</option>
                        <option value="12,0m">12,0m</option>
                    </select>
                    <label for="">Quantidade</label>
                    <input type="text" name="qtd" placeholder="0">
                    <button class="btn btn-danger">Adicionar</button>
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="box-items">
                    <h3>Lista de desejo</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Bitola</th>
                                <th scope="col">Cm</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->bitola}}</td>
                                <td>{{$item->size}}</td>
                                <td>{{$item->qtd}}</td>
                                <td>
                                    <a href="{{ route('site.orcamento.delete', ['id'=>$item->id]) }}"><i
                                            class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center">Nenhum item adicionado...</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div style="text-align: right;">
                        <button data-toggle="modal" data-target="#cliente" class="btn btn-success btn-lg">Finalizar
                            orçamento</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- modal add --}}
<div class="modal fade" id="cliente" tabindex="-2" role="dialog" aria-labelledby="cliente" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="editQuarto">
                    Preencha com seus dados
                </h5>
            </div>
            <div class="modal-body">
                {!! Form::open(['route'=>'site.orcamento.finalizar']) !!}
                @csrf
                @method('post')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label>{{ __('Nome Completo') }}</label>
                            <div class="form-group">
                                <input class="form-control" name="name" type="text" value="{{old('title')}}" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>{{ __('E-mail') }}</label>
                            <div class="form-group">
                                <input class="form-control" name="email" type="text" value="{{old('title')}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('Telefone') }}</label>
                            <div class="form-group">
                                <input class="form-control" name="phone" type="text" value="{{old('title')}}" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>{{ __('Endereço') }}</label>
                            <div class="form-group">
                                <input class="form-control" name="address" type="text" value="{{old('title')}}" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>{{ __('Observações') }}</label>
                            <div class="form-group">
                                <textarea name="obs" class="form-control" rows="5">{{old('obs')}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Finalizar</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection