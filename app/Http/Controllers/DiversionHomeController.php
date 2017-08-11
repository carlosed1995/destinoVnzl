<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Categoria as Categoria;
use App\Parques;
use App\Zonas;
use App\pais;
use App\Ciudades;
use App\estadoc;
use  App\TipoServicios;
use App\Imagen;
use Session;
use View;
use DB;
use Auth;
use App\Diversion;
use App\Hoteles as Hoteles;



class DiversionHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       $parques = Parques::paginate(8); 
		
        return view('parques.index_home', compact('parques'));
      
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
 public function store(Request $request)
    {
     
///////////////////////////////////////////////////////
 $reserva=\App\DiversionR::create(
        [ 
           'id_user'  => Auth::user()->id,
           'id_diversion'  =>$request['id_hotel'],
          ]
            );     
            
      echo  $reserva->id;
 
    }
  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
				
				$parque = Parques::where('id','=',$id)->get()->first();        
        $ciudad = Ciudades::pluck('Nombre','id');
        $estado = estadoc::pluck('Nombre', 'id');
     
				$imagen = Imagen::pluck('nombre','id');
				
				$imagen = DB::table('t_imagenes')
            ->join('pruebahotel','pruebahotel.id', '=', 't_imagenes.id_Entidad')
           //LIMITAR LAS IMAGENES  /////////
            ->where('t_imagenes.id_Entidad', '=', $id)
            ->select('t_imagenes.*','t_imagenes.nombre as n')
           	->get();
			
				

        return view('parques.show')->with('parque', $parque)->with('ciudad',$ciudad)->with('estado',$estado)->with('imagen', $imagen);
  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
