@extends('site.layout.layout')
@section('content')
    <center>
        <br>
        <table class="table table-dark table-hover w-50">
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Descrption</th>
                <th>Image</th>
                <th> </th>
                <th> </th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->Name }}</td>
                    <td width="40">R${{ $product->Price }},00</td>
                    <td>{{ $product->Descricao }}</td>
                    <td><img src="{{ $product->Image }}" alt=""></td>
                    <td><button class="btn btn-danger">Remove</button></td>
                    <td><button class="btn btn-warning">Change</button></td>
                </tr>
            @endforeach

        </table>
    </center>
@endsection
