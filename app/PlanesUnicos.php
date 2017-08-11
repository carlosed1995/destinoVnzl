<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanesUnicos extends Model
{
    
     protected $table = 't_planesunicos';
    protected $primarykey = 'id';
  
   protected $fillable= [ 
   	
  'nombre','direccion','telefono' ,'telefono2' , 'correo',
 'pais','estado', 'ciudad','zona','img' ,'act','costos' , 'facebook', 
'instagram' ,'twitter' ,'google' , 'youtube', 'cat_plan', 'destacado','numero_destacado', 'n_paquetes_disp'
    
    ]; 
  
  
}


 
                             