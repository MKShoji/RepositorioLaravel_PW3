@extends('template.default')
@section('content')

    <section>
        <h1> Pedido </h1>

        @foreach($pedido as $p)
            <p>{{$p->idPedido}}</p>
            <p>{{$p->valor}}</p>
        @endforeach
    </section>

@endsection