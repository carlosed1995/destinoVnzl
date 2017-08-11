<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 't_hoteles';
    protected $primarykey = 'id';

    protected $fillable= [
    	'id','nombre', 'direccion', 'telefono', 'direccion','url', 'correo','terminosCond','horario','descuento','rif','telefono2', 'updated_at', 'created_at'
    ];
  

  
  
}
