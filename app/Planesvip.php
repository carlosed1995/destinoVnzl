<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planesvip extends Model
{
    protected $table = 't_planes_vip';
    protected $primarykey = 'id';

    protected $fillable= [
    	'id','nombre', 'direccion', 'costo', 'detalle','descripcion','fechas','updated_at','created_at'
    ];
}
