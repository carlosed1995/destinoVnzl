<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zonas extends Model
{
   
     protected $table = 'zonas';
    protected $primarykey = 'id';

    protected $fillable= [
    	'Nombre' , 'idCiudad'
    	];
  
  
    public static function zona($id){
    	return zonas::where('idCiudad','=',$id)
    	->get();
    }
  
  
}
