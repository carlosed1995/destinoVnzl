<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Zonas;
use App\estadoc;
use App\pais;
use App\Ciudades;
use App\Especialidad as Especialidad;
use App\Imagen as Imagen;
use App\Restaurant;
use Session;
use Redirect;
use DB;

class RestaurantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $rest = Restaurant::paginate(9); 
      $estado = estadoc::pluck('Nombre','id');
      $ciudad = Ciudades::pluck('Nombre', 'id');
 
      $rest = Restaurant::paginate(9); 
      return view('restaurantes.index', compact('rest'));

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
         
         $sql="select a.*,b.Nombre as Estado, c.Nombre as Ciudad, d.Nombre as Zona,e.Nombre as Pais from t_restaurante as a
left join estados as b on a.id_estado1=b.id and a.pais=b.idPais
left join ciudades as c on c.id=a.id_ciudad1 and c.idEstado=b.id
LEFT JOIN zonas as d on d.id=a.zonas 
LEFT JOIN paises as e on e.id=a.pais
where a.id ='".$id."'";
         $rest = DB::selectOne($sql);    
         $imagen = DB::table('t_imagenes')
            ->join('t_restaurante','t_restaurante.id', '=', 't_imagenes.id_Entidad')
            ->where('t_imagenes.Tabla_entidad', '=', "t_restaurante")
           //LIMITAR LAS IMAGENES  /////////
            ->where('t_imagenes.id_Entidad', '=', $id)
            ->select('t_imagenes.*','t_imagenes.nombre as n')
           ->get(); 
       
       return view('restaurantes.show')->with('rest', $rest)->with('imagen', $imagen);
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
