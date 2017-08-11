<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tudestino;
use App\Estado as Estado;
use App\Ciudades;
use App\pais;
use App\Zonas;
use App\estadoc;
use App\Textos;
use DB;


class Tudestinoact4Controller extends Controller
{


  public function show($id)
    {
        $act =  Textos::find($id);
         $act->act4 = 1;
          $act->save();
           return redirect()->back();
    }
  public function edit($id)
    {
        	 $act  = Textos::find($id);
          $act->act4 = 0;
           $act->save();
           return redirect()->back();
    }


	
}