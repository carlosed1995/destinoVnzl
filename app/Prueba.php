<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
   protected $table = 'n_categoria_planesu';
 protected $primarykey = 'id';

    protected $fillable = [
       'nombre'
    ];
}

