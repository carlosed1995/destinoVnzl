<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bannersec extends Model
{
     protected $table = 'n_banersecon';
     protected $primarykey = 'id';

    protected $fillable = [ 
       'img1', 'titulo1', 'texto1', 'img2', 'titulo2', 'texto2','img3','titulo3','texto3','img4','titulo4','texto4'
    ];

    public function scopeSearch($query, $name)
  {
    return $query->where('nombre', 'LIKE', "%$name%");
  }
}
