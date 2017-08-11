<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perfilTh extends Model
{
     protected $table = 'n_perfil_tarjetahabiente';
    protected $primarykey = 'id';
  
   protected $fillable= [
    	'perfil',
    ];
}
