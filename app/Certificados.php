<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificados extends Model 
{
       protected $table = 't_certificado';
   protected $primarykey = 'id';

    protected $fillable = [
        'nombre','direccion', 'telefono', 'correo', 
      'titulo1','titulo2','titulo3','titulo4','txttitulo1','txttitulo2',
      'txttitulo3','txttitulo4','pais','estado','ciudad', 'zona', 'img', 'act', 'telefono2'
    ];
  
       public function scopeSearch($query, $nombre)
  {
    return $query->where('nombre', 'LIKE', "%$nombre%");
  }
}