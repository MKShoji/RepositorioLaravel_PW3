<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaModel extends Model
{
    protected $table = "tbcategoria";
    protected $fillable = ['idCategoria', 'categoria'];

    protected $primaryKey = 'idCategoria';

    public $timestamps = false;
}
