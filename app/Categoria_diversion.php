<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria_diversion extends Model
{
      protected $table = 'n_categoria_diversion';
    protected $primarykey = 'id';

    protected $fillable= [
    	'nombre'
    	];
}
