@extends('template.default')
@section('content')

    <section>
        <h1> Cliente </h1>

        @foreach($cliente as $c)    
            <table class="table">
                <thead>
                    <th> idCliente </th>
                    <th> usuario </th>
                    <th> senha </th>
                    <th> dataNasc </th>
                    <th> genero </th>
                    <th> estadoCivil </th>
                    <th> endereco </th>
                    <th> numero </th>
                    <th> complemento </th>
                    <th> cep </th>
                    <th> bairro </th>
                    <th> cidade </th>
                    <th> estado </th>
                    <th> cpf </th>
                    <th> rg </th>
                    <th> telefone </th>
                    <th> celular </th>
                    <th> email </th>
                </thead>
                <tbody>
                    <tr>
                        <td> {{$c->idCliente}} </td>
                        <td> {{$c->usuario}} </td>
                        <td> {{$c->senha}} </td>
                        <td> {{$c->dataNasc}} </td>
                        <td> {{$c->genero}} </td>
                        <td> {{$c->estadoCivil}} </td>
                        <td> {{$c->endereco}} </td>
                        <td> {{$c->numero}} </td>
                        <td> {{$c->complemento}} </td>
                        <td> {{$c->cep}} </td>
                        <td> {{$c->bairro}} </td>
                        <td> {{$c->cidade}} </td>
                        <td> {{$c->estado}} </td>
                        <td> {{$c->cpf}} </td>
                        <td> {{$c->rg}} </td>
                        <td> {{$c->telefone}} </td>
                        <td> {{$c->celular}} </td>
                        <td> {{$c->email}} </td>
                    </tr>
                </tbody>
            </table>
        @endforeach
    </section>

@endsection