<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = 't_imagenes';
    protected $primarykey = 'id';

    protected $fillable= [
    	'id','nombre', 'id_Entidad', 'Tabla_entidad',
    ];
  

  
  
}


