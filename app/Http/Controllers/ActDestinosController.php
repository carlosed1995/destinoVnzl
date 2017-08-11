<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Estado as Estado;
use App\Ciudades;
use App\pais;
use App\Zonas;
use App\estadoc;
use App\Textos;
use App\Tudestino;
use DB;


class ActDestinosController extends Controller
{


  public function show($id)
    {
        $act =  Tudestino::find($id);
         $act->act = 1;
          $act->save();
           return redirect()->back();
    }
  public function edit($id)
    {
        	 $act  = Tudestino::find($id);
          $act->act = 0;
           $act->save();
           return redirect()->back();
    }


	
}