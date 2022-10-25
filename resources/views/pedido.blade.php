@extends('template.default')
@section('content')

    <section class="container">
        <h1> Pedido </h1>

        @foreach($pedido as $p)
        <table class="table">
            <thead>
            <th> idPedido </th>
                <th> idCliente </th>
                <th> usuario </th>
                <th> endereco </th>
                <th> numero </th>
                <th> complemento </th>
                <th> cep </th>
                <th> cidade </th>
                <th> estado </th>
                <th> telefone </th>
                <th> idProduto </th>
                <th> produto </th>
                <th> valor </th>
            </thead>
            <tbody>
                <tr>
                    <td> {{$p->idPedido}} </td>
                    <td> {{$p->idCliente}} </td>
                    <td> {{$p->usuario}} </td>
                    <td> {{$p->endereco}} </td>
                    <td> {{$p->numero}} </td>
                    <td> {{$p->complemento}} </td>
                    <td> {{$p->cep}} </td>
                    <td> {{$p->cidade}} </td>
                    <td> {{$p->estado}} </td>
                    <td> {{$p->telefone}} </td>
                    <td> {{$p->idProduto}} </td>
                    <td> {{$p->produto}} </td>
                    <td> {{$p->valor}} </td>
                    <td> <a href="/pedido/{{$p->idPedido}}"> Excluir </a></td>
                </tr>
            </tbody>
        </table>
        @endforeach
    </section>

@endsection