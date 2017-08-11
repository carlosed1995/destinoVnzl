<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
     protected $table = 'n_banner';
     protected $primarykey = 'id';

    protected $fillable = [ 
       'titulo1', 'titulo2', 'img' 
    ];

    public function scopeSearch($query, $name)
  {
    return $query->where('nombre', 'LIKE', "%$name%");
  }
}
