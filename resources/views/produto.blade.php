@extends('template.default')
@section('content')

    <section class="container">
        <h1> Produto </h1>

        @foreach($produto as $p)
        <table class="table">
            <thead>
                <th> idPedido </th>
                <th> produto </th>
                <th> valor </th>
                <th> idCategoria </th>
            </thead>
            <tbody>
                <tr>
                    <td> {{$p->idProduto}} </td>
                    <td> {{$p->produto}} </td>
                    <td> {{$p->valor}} </td>
                    <td> {{$p->idCategoria}} </td>
                </tr>
            </tbody>
        </table>
        @endforeach
    </section>

@endsection