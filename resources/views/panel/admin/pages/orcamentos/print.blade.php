@section('style')
<link rel="stylesheet" href="assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/admin/dist/css/AdminLTE.min.css">
<style>
    .table {
        font-size: 10px;
    }
</style>
@show

<table class="table">
    <tr>
        <td>
            <p>
                <strong>MINAS MOURÃO</strong> <br>
                BR 226 (Belém Brasília), Km 02 Aguiarnopolis-TO<br>
                Telefone: +55 (63)99208-9508 | 99920-3471 <br>
            </p>

        </td>
        <td class="text-right">
            <img src="assets/site/logo.png" alt="" width="90">
        </td>
    </tr>
</table>

<h2>
    Cliente
</h2>
<table class="table">
    <tbody>
        <tr style="background-color: #342E2E; color:white;">
            <td>Nome</td>
            <td>Telefone</td>
            <td>E-mail</td>
            <td>Endereço</td>
            <td>Data</td>
        </tr>
        <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->address}}</td>
            <td>{{date('d/m/Y H:i:s', strtotime($data->created_at))}}</td>
        </tr>
        <tr>
            <td colspan="5">Observação: {{$data->obs}}</td>
        </tr>
    </tbody>
</table>

<h2>Orçamento</h2>
<table class="table">
    <tbody>
        <tr style="background-color: #342E2E; color:white;">
            <td>ID</td>
            <td>Bitola</td>
            <td>Cm</td>
            <td>Quantidade</td>
        </tr>
        @forelse($data->orcamentos as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->bitola}}</td>
            <td>{{$item->size}}</td>
            <td>{{$item->qtd}}</td>
        </tr>
        @empty
        <tr>
            <td colspan="4" style="text-align: center;">Nenhum item adicionado para este orçamento!
            </td>
        </tr>
        @endforelse

    </tbody>
</table>