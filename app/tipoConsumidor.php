<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoConsumidor extends Model
{
    
     protected $table = 'n_tipo_consumidor';
    protected $primarykey = 'id';
  
   protected $fillable= [
    	'	Tipo',
    ];
  
  
}
