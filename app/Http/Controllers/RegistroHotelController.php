<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Estado as Estado;
use App\Ciudad as Ciudad;
use App\Categoria as Categoria;
use App\Hotel as Hotel;
use Validator;

use Session;

class RegistroHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciudad = Ciudad::pluck('nombre','id_Ciudad');
        $estado = Estado::pluck('nombre', 'id_estado');
        $categoria = Categoria::pluck('tipo', 'idCategoria');
            return view('registrarhotel')->with('ciudad',$ciudad)->with('estado',$estado)->with('categoria', $categoria);


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
       $rules = array(

            "nombre"=>"required",
            "direccion" =>"required",
            "telefono"=>"required|numeric",
            "telefono2"=>"required|numeric",
            "descripcion"=>"required",
            "url"=>"required",
            "correo"=>"required",
            "terminosCond"=>"required",
            "horario"=>"required",
            "descuento"=>"required",
            "rif"=>"required",       

            );

       $validator = Validator::make($request->all(), $rules);
        if($validator->fails())
        {
          return redirect()->back()->withErrors($validator);
        }

       $hotel = new Hotel;
       $hotel->nombre = $request->nombre;
       $hotel->direccion =$request->direccion;
       $hotel->telefono =$request->telefono;
       $hotel->telefono2 =$request->telefono2;
       $hotel->descripcion =$request->descripcion;
       $hotel->url =$request->url;
       $hotel->correo =$request->correo;
       $hotel->terminosCond =$request->terminosCond;
       $hotel->horario =$request->horario;
       $hotel->descuento =$request->descuento;
       $hotel->rif =$request->rif;
       $hotel->imagenes_hotel =$request->imagenes_hotel;
       $hotel->id_ciudad =$request->ciudad;
       $hotel->id_estado =$request->estado;
       $hotel->id_categoria =$request->categoria;


       $hotel->save();

       Session::flash('flash_message', 'El doctor ha sido registrado exitosamente!');

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
        //
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
