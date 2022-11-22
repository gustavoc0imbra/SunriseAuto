@extends('site.layout.layout')
@section('content')
    <table class="table table-dark table-hover">
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Descrição</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->Name }}</td>
                <td width="40">R${{ $product->Price }},00</td>
                <td>{{ $product->Descricao }}</td>
                <td><button class="btn btn-danger">Excluir</button></td>
                <td><button class="btn btn-warning">Alterar</button></td>

            </tr>
        @endforeach

    </table>
@endsection
