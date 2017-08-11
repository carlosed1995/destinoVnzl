<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Textos extends Model
{
    protected $table = 'n_textos';
    protected $primarykey = 'id';
    
    protected $fillable = [
    	'titulo1', 'texto1', 'titulo2', 'texto2','titulo3','texto3',
    	'titulo4','texto4','act1', 'act2', 'act3','act4', 'tablaEntidad', 'idtablaEntidad'
    	];
}
 