<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\PlanesUnicos as PlanesUnicos;
use Validator;

use Session;
use DB;

class PlanesVipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planes = PlanesUnicos::paginate(6);
        
        return view('planhome.index')->with('planes', $planes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('PlanesUnicos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(

            "nombre"=>"required",
            "direccion" =>"required",
            "costo"=>"required|numeric",
            "detalle"=>"required",
            "descripcion"=>"required",
            "fecha_ini"=>"required",
            "fecha_fin"=>"required",
            //"terminosCond"=>"required",
            
            );

       $validator = Validator::make($request->all(), $rules);
        if($validator->fails())
        {
          return redirect()->back()->withErrors($validator);
        }

       $planesvip = new Planesvip;
       $planesvip->nombre = $request->nombre;
       $planesvip->direccion =$request->direccion;
       $planesvip->costo =$request->costo;
       $planesvip->detalle =$request->detalle;
       $planesvip->descripcion =$request->descripcion;
       $planesvip->fechas =$request->fechas;
        

       $planesvip->save();

       Session::flash('flash_message', 'El Plan VIP ha sido registrado exitosamente!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	
    	
    	         $sql="select a.*,b.Nombre as Estado, c.Nombre as Ciudad, d.Nombre as Zona,e.Nombre as Pais from t_planesunicos as a
left join estados as b on a.estado=b.id and a.pais=b.idPais
left join ciudades as c on c.id=a.ciudad and c.idEstado=b.id
LEFT JOIN zonas as d on d.id=a.zona 
LEFT JOIN paises as e on e.id=a.pais
where a.id ='".$id."'";
         $planes = DB::selectOne($sql); 
    	

        $imagen = DB::table('t_imagenes')
            ->join('t_planesunicos','t_planesunicos.id', '=', 't_imagenes.id_Entidad')
           //LIMITAR LAS IMAGENES  /////////
            ->where('t_imagenes.id_Entidad', '=', $id)
            ->select('t_imagenes.*','t_imagenes.nombre as n')
           	->get();
        return view('planhome.show')->with('planes', $planes)->with('imagen', $imagen);
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
