<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'ciudades';
    protected $primarykey = 'id';

    protected $fillable= [
    	'nombre',
    ];
}
