<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modo extends Model
{
     protected $table = 'n_modouso';
     protected $primarykey = 'id';

    protected $fillable = [ 
       'modo' 
    ];

    public function scopeSearch($query, $name)
  {
    return $query->where('nombre', 'LIKE', "%$name%");
  }
}
