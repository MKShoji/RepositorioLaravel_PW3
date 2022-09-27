@extends('template.default')
@section('content')

    <section class="container">
        <h1> Produto </h1>

        <form action="{{url('/produto/inserir')}}" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <input class="form-control" type="text" name="txProduto" placeholder="Produto" >
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="txValor" placeholder="Valor" >
            </div>

            <div class="form-group">
                <input class="btn btn-primary btn-lg" type="submit" value="Salvar">
            </div>

        </form>

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