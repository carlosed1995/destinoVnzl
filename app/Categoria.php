<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'n_categoria';
    protected $primarykey = 'idCategoria';

    protected $fillable= [
    	'tipo', 'img_file'
    	];
}
