@extends('template.default')
@section('content')

    <section class="container">
        <h1> Produto </h1>
        <h3> Adiconar um produto </h3>

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

                </tr>
            </tbody>
        </table>
        @endforeach
    </section>

    

    <section class="container">
        <form action="{{url('/produto/inserir')}}"></form>
    </section>

@endsection