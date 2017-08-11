<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria_entidades extends Model
{
          protected $table = 'n_categoria_entidades';
    protected $primarykey = 'id';

    protected $fillable= [
    	'nombre', 'img', 'act', 'id_tipo'
    	];
  
  
}
