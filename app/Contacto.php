<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
     protected $table = 'n_contacto';
     protected $primarykey = 'id';

    protected $fillable = [ 
       'nombre', 'correo', 'comentario', 'status' 
    ];

    public function scopeSearch($query, $name)
  {
    return $query->where('nombre', 'LIKE', "%$name%");
  }
}
