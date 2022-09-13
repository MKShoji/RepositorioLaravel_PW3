@extends('template.default')
@section('content')

    <section>
        <h1> Cliente </h1>

        @foreach($cliente as $c)
            <p>{{$c->idCliente}}</p>
            <p>{{$c->usuario}}</p>
        @endforeach
    </section>

@endsection