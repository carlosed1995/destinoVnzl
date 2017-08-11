<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Estado as Estado;
use App\Ciudad as Ciudad;
use App\Categoria as Categoria;
use Validator;
use App\Ajuste;
use App\Zonas;
use App\pais;
use App\Ciudades;
use App\estadoc;
use App\Tudestino as Tudestino;
use App\Imagen as Imagen;
use Session;
use View;
use DB;

class TuDestinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $escapes = Tudestino::paginate(8); 
		
        return view('tudestino.index', compact('escapes'));
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
        //
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$reservaHotel = ReservaHotel::all();
				$escapes = Tudestino::where('id','=',$id)->get()->first();        
        $ciudad = Ciudades::pluck('Nombre','id');
        $estado = estadoc::pluck('Nombre', 'id');
        $categoria = Categoria::pluck('tipo', 'idCategoria');

				
				$imagen = DB::table('t_imagenes')
            ->join('pruebahotel','pruebahotel.id', '=', 't_imagenes.id_Entidad')
           //LIMITAR LAS IMAGENES  /////////
            ->where('t_imagenes.id_Entidad', '=', $id)
            ->select('t_imagenes.*','t_imagenes.nombre as n')
           	->get();


        return view('tudestino.show')->with('ciudad',$ciudad)->with('estado',$estado)->with('categoria', $categoria)->with('imagen', $imagen)->with('escapes', $escapes);
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
