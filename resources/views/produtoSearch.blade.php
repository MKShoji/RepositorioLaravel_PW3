@extends('template.default')
@section('content')

    <section class="container">
        <h1> Produto </h1>
        <h3> Pesquisar produto </h3>

        <form action="{{url('/produtoSearch')}}" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <input class="form-control" type="text" name="txProduto" placeholder="Nome produto" value="Produto">
            </div>

            <div class="form-group">
                <input class="btn btn-primary btn-lg" type="submit" value="Pesquisar">
            </div>

        </form>

    </section>

    <section class="container">
            @foreach($produto as $p)
            <table class="table">
                <thead>
                    <th> idProduto </th>
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
                        <td> <a href="/produto/{{$p->idProduto}}"> Excluir </a></td>
                        <td> <a href="/produto-editar/{{$p->idProduto}}/editar"> Editar</a></td>
                    </tr>
                </tbody>
            </table>
        @endforeach
    </section>



    <section class="container">
        <h2> Resultado Filtro </h2>

        @foreach($produtoC as $p)
            <table class="table">
                <thead>
                    <th> idProduto </th>
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