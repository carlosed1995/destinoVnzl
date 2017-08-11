<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contacto as Contacto;
use Session;
use Validator;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function index()
    {

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
            "correo"=>"required",
            "comentario"=>"required",
           
            );

       $validator = Validator::make($request->all(), $rules);
        if($validator->fails())
        {
          return redirect()->back()->withErrors($validator);
        }
      
       $contacto = new Contacto;
       $contacto ->id_usuario = $request->id_usuario;
       $contacto->nombre = $request->nombre;
       $contacto->correo = $request->correo;
	   $contacto->comentario = $request->comentario;
	   $contacto->status = 0;
       $contacto->save();       

       Session::flash('flash_message', 'Su solicitud ha sido enviada exitosamente');

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
