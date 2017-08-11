<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoServicios extends Model
{
    protected $table = 't_tipos_serv';
    protected $primarykey = 'id';
  
    protected $fillable= [
    	'tipo', 'idEntidad', 'TablaEntidad'
    	]; 
  
  
}
