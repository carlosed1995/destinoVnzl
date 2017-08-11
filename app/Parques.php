<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parques extends Model
{
       protected $table = 't_diversion';
   protected $primarykey = 'id';

    protected $fillable = [
        'nombre','direccion', 'telefono', 'correo', 'tipo_diversion',
      'titulo1','titulo2','titulo3','titulo4','txttitulo1','txttitulo2',
      'txttitulo3','txttitulo4','pais','estado','ciudad', 'zona', 'img', 'act', 'telefono2',
      'facebook' , 'instagram', 'twitter' ,'google' , 'youtube'
    ];
  
       public function scopeSearch($query, $nombre)
  {
    return $query->where('nombre', 'LIKE', "%$nombre%");
  }
}
