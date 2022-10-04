<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    protected $table = "tbcliente";
    protected $fillable = ['idCliente', 'usuario', "senha", "dataNasc", "genero", "estadoCivil", "endereco", "numero", "complemento". "cep", "bairro", "cidade", "estado", "cpf", "rg", "telefone", "celular", "email"];

    public $timestamps = false;
}
