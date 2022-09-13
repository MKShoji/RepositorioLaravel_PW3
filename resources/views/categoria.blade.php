@extends('template.default')
@section('content')

    <section>
        <h1> Categoria </h1>

        <form action="{{url('/categoria/inserir')}}" method="post">
            {{csrf_field()}}

            <div>
                <input type="text" name="txCategoria" placeholder="Categoria" value="categoria">
            </div>

            <div>
                <input type="submit" value="Salvar">
            </div>

        </form>

    </section>

@endsection