<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
   protected $table = 'n_tiposervicio';
    protected $primarykey = 'id';

    protected $fillable= [
    	'nombre', 'img'
    	]; 
 
  
}
