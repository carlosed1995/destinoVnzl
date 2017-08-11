<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\PreguntasFrecuentes as PreguntasFrecuentes;

use Validator;

class PreguntasAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $preguntasfrecuentes = PreguntasFrecuentes::all();
      return view('preguntas.adminindex')->with('preguntasfrecuentes', $preguntasfrecuentes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('preguntas.admincreate');
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
           
            );

       $validator = Validator::make($request->all(), $rules);
        if($validator->fails())
        {
          return redirect()->back()->withErrors($validator);
        }
      
       $preguntasfrecuentes = new PreguntasFrecuentes;
       $preguntasfrecuentes->preguntas = $request->nombre;
       $preguntasfrecuentes->save();       

        return redirect()->back()->with('message', 'Los terminos y condiciones se han creado exitosamente');
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
        $preguntasfrecuentes = PreguntasFrecuentes::find($id);
        return view('preguntas.adminedit')->with('preguntasfrecuentes', $preguntasfrecuentes);
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
        $preguntasfrecuentes = PreguntasFrecuentes::find($id);
        $preguntasfrecuentes->preguntas = $request->nombre;
        $preguntasfrecuentes->save();
        return redirect()->back()->with('message', 'Actualización Exitosa');
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
