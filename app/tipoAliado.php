<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoAliado extends Model
{
    protected $table = 'n_tipo_aliado';
    protected $primarykey = 'id';
  
   protected $fillable= [
    	'tipoaliado',
    ];
  
}
