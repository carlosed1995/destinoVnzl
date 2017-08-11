<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ajuste extends Model
{
    protected $table = 'ajustes';
    protected $primarykey = 'id';

    protected $fillable= [
    	'key', 'value'
    	];
}
