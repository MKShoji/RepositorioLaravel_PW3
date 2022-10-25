<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoModel extends Model
{
    protected $table = "tbpedido";
    protected $fillable = ['idPedido', 'idCliente', 'usuario', 'endereco', 'numero', 'complemento', 'cep', 'cidade', 'estado', 'telefone', 'idProduto', 'produto', 'valor'];
    
    public $timestamps = false;
}
