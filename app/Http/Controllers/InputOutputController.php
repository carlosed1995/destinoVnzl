<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Restaurant;

class InputOutputController extends Controller
{
   
  public function show($id)
  {
    $activ = Restaurant::find($id);
    $activ->act = '1';
    $activ->save(); 
    return redirect()->back();  
  }
  
  public function edit($id)
  {
    $activ = Restaurant::find($id);
    $activ->act = '0';
    $activ->save(); 
    return redirect()->back();  
  }
  
}
