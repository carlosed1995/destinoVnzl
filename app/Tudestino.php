<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tudestino extends Model
{
    protected $table = 'n_tudestinos';
    protected $primarykey = 'id';
    
    protected $fillable= [
    	'nombre' , 'direccion', 'telefono','telefono2','correo','pais',
    	'estado','ciudad','zona','img', 'act', 'fecha_inicial', 'fecha_fin', 'paquetes_dipon',
    	'facebook' , 'instagram' , 'twitter' , 'google' , 'youtube'
    	];
  
}
 