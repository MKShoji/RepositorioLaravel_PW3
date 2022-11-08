@extends('template.default')
@section('content')

    <section class="container">
        <h1> Categoria </h1>
        <h3> Editar Categoria </h3>

        <form action="{{url('/categoria-alterar/'.$categoria->idCategoria)}}" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <input class="form-control" type="text" name="txCategoria" placeholder="Nome Categoria" value="{{$categoria->categoria}}">
            </div>

            <div class="form-group">
                <input class="btn btn-primary btn-lg" type="submit" value="Salvar">
            </div>

        </form>

    </section>

@endsection