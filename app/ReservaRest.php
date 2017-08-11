<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservaRest extends Model
{
   protected $table = 't_reserva_rest';
   protected $primarykey = 'id';

    protected $fillable = [
        'id_user','nombre', 'apellidos', 'documento', 'telefono_cel','telefono_fijo','correo','id_Rest','nombre_rest','fecha','Cant_personas','direccion','Comentarios','localizadorClient','updated_at','created_at',
    ];
}