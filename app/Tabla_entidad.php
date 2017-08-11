<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabla_entidad extends Model
{
    protected $table = 'n_tipos_tabla_entidad';
    protected $primarykey = 'id';

    protected $fillable= [
    	'nombre'
    	];
  
  
    //
}
