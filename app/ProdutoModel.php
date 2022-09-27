<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoModel extends Model
{
    protected $table = "tbproduto";
    protected $fillable = ['idProduto', 'produto', 'valor', 'idCategoria'];

    public $timestamps = false;
}
