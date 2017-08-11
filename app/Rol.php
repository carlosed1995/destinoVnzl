<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'n_rol';
    protected $primarykey = 'idRol';

    protected $fillable= [
    	'tipo',
    ];
}
