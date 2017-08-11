<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    protected $table = 'n_especialidad';
    protected $primarykey = 'idEspecialidad';

    protected $fillable= [
    	'nombre',
    ];
}






/*
namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    

 protected $table = 'n_especialidad';
 protected $primarykey = 'idEspecialidad';

    protected $fillable = [
        'nombre', 
    ];

}
