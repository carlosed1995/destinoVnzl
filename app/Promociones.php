<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promociones extends Model
{
    protected $table = 't_planes_vip';
    protected $primarykey = 'idPlanesvip';

    protected $fillable= [
    	'idPlanesvip','nombre', 'direccion', 'costo', 'detalle','descripcion','updated_at','created_at'
    ];
}
