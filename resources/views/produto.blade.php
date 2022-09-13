@extends('template.default')
@section('content')

    <section>
        <h1> Produto </h1>

        @foreach($produto as $p)
            <p>{{$p->idProduto}}</p>
            <p>{{$p->produto}}</p>
        @endforeach
    </section>

@endsection