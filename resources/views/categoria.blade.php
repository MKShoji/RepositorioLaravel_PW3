@extends('template.default')
@section('content')

    <section class="container">
        <h1> Categoria </h1>

        <form action="{{url('/categoria/inserir')}}" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <input class="form-control" type="text" name="txCategoria" placeholder="Categoria" >
            </div>

            <div class="form-group">
                <input class="btn btn-primary btn-lg" type="submit" value="Salvar">
            </div>

        </form>

        @foreach ($categoria as $c)
        <table class='table'>
            <thead>
                <th> idCategoria </th>
                <th> Categoria </th>
                <th> Excluir </th>
            </thead>
            <tbody>
                <tr>
                    <td> {{$c->idCategoria}} </td>
                    <td> {{$c->categoria}} </td>
                    <td> <a href="/categoria/{{$c->idCategoria}}"> Excluir </a></td>
                </tr>
            </tbody>
        </table>
        @endforeach



    </section>

@endsection