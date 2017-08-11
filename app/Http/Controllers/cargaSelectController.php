<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Zonas;
use App\Ciudades;
use App\Especialidad as Especialidad;
use App\Restaurant;
use Session;
use Redirect;
use App\Imagen;
use App\Servicio;
use Auth;

class cargaSelectController extends Controller
{
    
    public function getZonas(Request $request, $id)
    {
         if($request->ajax()){
            $zona = Zonas::zona($id);
            return response()->json($zona);
        }
    }
  
}
