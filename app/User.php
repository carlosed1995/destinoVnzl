<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

 protected $table = 'users';
 protected $primarykey = 'id';

    protected $fillable = [
        'name', 'email', 'password', 'created_at', 'updated_at', 'apellido', 'cedula',
        'Fecha_Nacimiento', 'telefono_local', 'telefono_movil', 'direccion', 'idEstado',
        'idCiudad', 'id_estatusClient', 'id_GeneroClient', 'id_TipoDoc' , 'rolUsuario',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $dates = ['deleted_at'];
  
  
      public function scopeSearch($query, $name)
  {
    return $query->where('name', 'LIKE', "%$name%");
  }
  


}
