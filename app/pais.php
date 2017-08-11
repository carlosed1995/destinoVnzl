<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pais extends Model
{
          protected $table = 'paises';
    protected $primarykey = 'id';
  
   protected $fillable= [
    'Nombre',
    ];
}
