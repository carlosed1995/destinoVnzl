<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = 'n_genero';
    protected $primarykey = 'idGenero';

    protected $fillable= [
    	'tipo',
    ];
}
