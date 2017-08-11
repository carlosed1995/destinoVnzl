<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreguntasFrecuentes extends Model
{
         protected $table = 'n_preguntas';
     protected $primarykey = 'id';

    protected $fillable = [ 
       'preguntas' 
    ];

    public function scopeSearch($query, $name)
  {
    return $query->where('nombre', 'LIKE', "%$name%");
  }
}
