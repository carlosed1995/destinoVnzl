<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estadoc extends Model
{
       protected $table = 'estados';
    protected $primarykey = 'id';
  
   protected $fillable= [
    	'idPais', 'Nombre',
    ];
}
