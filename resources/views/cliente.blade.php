@extends('template.default')
@section('content')

    <section>
        <div class='container'>
            <h1> Cliente </h1>
        </div>

            <form action="{{url('/cliente/inserir')}}" method="post">
                {{csrf_field()}}
                <div class="form-cliente">
                    <center>
                        <input type="text" name="txUsuario" placeholder="Usuário" >
                        <input type="password" name="txSenha" placeholder="Senha" ><br>
                        <input type="text" name="txDataNasc" placeholder="Data de Nascimento" >
                        <input type="text" name="txGenero" placeholder="Gênero" ><br>
                        <input type="text" name="txEstadoCivil" placeholder="Estado Civil" >
                        <input type="text" name="txEndereco" placeholder="Endereço" ><br>
                        <input type="text" name="txNumero" placeholder="Número" >
                        <input type="text" name="txComplemento" placeholder="Complemento"><br>
                        <input type="text" name="txCep" placeholder="CEP" >
                        <input type="text" name="txBairro" placeholder="Bairro" ><br>
                        <input type="text" name="txCidade" placeholder="Cidade" >
                        <input type="text" name="txEstado" placeholder="Estado" ><br>
                        <input type="text" name="txCpf" placeholder="CPF" >
                        <input type="text" name="txRg" placeholder="RG" ><br>
                        <input type="text" name="txTelefone" placeholder="Telefone" >
                        <input type="text" name="txCelular" placeholder="Celular" ><br>
                        <input type="text" name="txEmail" placeholder="Email" >
        
                    <div class="form-group">
                        <input class="btn btn-primary btn-lg" type="submit" value="Salvar">
                    </div>
                    </center>
                </div>  

            </form>
        </div>


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
                        <td> <a href="/cliente/{{$c->idCliente}}"> Excluir </a></td>
                    </tr>
                </tbody>
            </table>
        @endforeach
    </section>

@endsection