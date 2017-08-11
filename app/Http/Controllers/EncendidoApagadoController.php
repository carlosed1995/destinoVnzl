<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parques;
use App\Http\Requests;

class EncendidoApagadoController extends Controller
{
  public function show($id)
  {
    $activ = Parques::find($id);
    $activ->act = '1';
    $activ->save(); 
    return redirect()->back();  
  }
  
  public function edit($id)
  {
    $activ = Parques::find($id);
    $activ->act = '0';
    $activ->save(); 
    return redirect()->back();  
  }
}
