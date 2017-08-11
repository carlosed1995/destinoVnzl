<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudades extends Model
{
 
      protected $table = 'ciudades';
    protected $primarykey = 'id';

    protected $fillable= [
    	'Nombre'
    	];
  
  
  
  

}
