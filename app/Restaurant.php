<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Restaurant extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
 protected $table = 't_restaurante';
 protected $primarykey = 'id';

    protected $fillable = [
       'nombre', 'direccion', 'url', 'horario', 'descripcion', 'sugerencias', 'descuentos',
        'rif', 'id_estado1', 'id_ciudad1', 'id_especialidad1', 'img', 'telefono','created_at','perfilTH',
      'tipo_Aliad','tipo_Con','zonas','certificadoC' , 'pais', 'correo_elect', 'promociones', 'act' , 'facebook', 
      'instagram', 'twitter', 'google', 'youtube'
    ];

    public function scopeSearch($query, $name)
  {
    return $query->where('nombre', 'LIKE', "%$name%");
  }
  
  
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


}
