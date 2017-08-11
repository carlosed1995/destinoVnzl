<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriasRegiones extends Model
{
          protected $table = 't_categorias_regiones';
    protected $primarykey = 'id';

    protected $fillable= [
    	'id_categoria', 'id_estado', 'id_ciudad', 
    	];
  
}
