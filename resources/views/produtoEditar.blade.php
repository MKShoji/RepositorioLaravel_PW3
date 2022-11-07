@extends('template.default')
@section('content')

    <section class="container">
        <h1> Produto </h1>
        <h3> Adicionar um produto </h3>

        <form action="{{url('/produto/inserir')}}" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <input class="form-control" type="text" name="txProduto" placeholder="Produto" value="{{$produto->produto}}">
            </div>

            <div class="form-group">
                <input class="btn btn-primary btn-lg" type="submit" value="Salvar">
            </div>

        </form>

    </section>

@endsection