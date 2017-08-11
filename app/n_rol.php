<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class n_rol extends Model
{
    protected $table = 'n_rol';
    protected $primarykey = 'id';
  
  protected $fillable= [
    	'id','tipo', 
    ];
  
  
  
}
