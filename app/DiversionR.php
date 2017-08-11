<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiversionR extends Model
{
         protected $table = 't_reserva_diversion';
   protected $primarykey = 'id';

    protected $fillable = [
        'id_user', 'id_diversion','nombre', 'apellidos', 'documento',
        'telefono_cel','telefono_fijo','direccion','localizadorClient','fecha_inicial',
        'fecha_final','nombre_div','telefono_div','descripcion', 'comentarios', 'correo_client'
    ];
}
 