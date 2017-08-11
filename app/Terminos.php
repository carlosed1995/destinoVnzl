<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Terminos extends Model
{
     protected $table = 'n_terminospagina';
     protected $primarykey = 'id';

    protected $fillable = [ 
       'terminoscond' 
    ];

    public function scopeSearch($query, $name)
  {
    return $query->where('nombre', 'LIKE', "%$name%");
  }
}
