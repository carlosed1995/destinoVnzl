<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDoc extends Model
{
    protected $table = 'n_tipodoc';
    protected $primarykey = 'id_tipodoc';

    protected $fillable= [
    	'tipoDocumento',
    ];
}
