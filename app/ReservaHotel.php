<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservaHotel extends Model
{
   protected $table = 't_reserva_hotel';
   protected $primarykey = 'id';

    protected $fillable = [
        'nombre', 'apellidos','id_user', 'documento', 'telefono','fecha','fecha_fin','telefono_fijo','correo','direccion','localizadorClient','Nombre_Hotel','id_Hotel','Cant_personas','Cant_Hab','Comentarios','updated_at','created_at',
    ];
}
