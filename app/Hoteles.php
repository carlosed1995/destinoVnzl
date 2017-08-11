<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hoteles extends Model
{
    protected $table = 'pruebahotel';
    protected $primarykey = 'id';

    protected $fillable = [
       'nombre', 'direccion', 'telefono', 'descripcion','url', 
      'correo','terminosCond','horario','descuento','rif','idpais',
      'id_estado', 'id_ciudad' ,'id_zona', 'telefono2', 'img', 'etiquetas',
      'navicu', 'Experiencias', 'act',
    ];
  
     public function scopeSearch($query, $nombre)
  {
    return $query->where('nombre', 'LIKE', "%$nombre%");
  }
}
