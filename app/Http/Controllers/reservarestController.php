<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\ReservaRest;
use Session;

class reservarestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
      //esta es reserva restauranteeee no confundirrrrrrrr
      
       function rand_code($chars, $long){
    $code = "";
    for ($x=0; $x <= $long; $x++)
    {
    $rand = rand(1, strlen($chars));
    $code .= substr($chars, $rand, 1);
    }
    return $code;
    }
    $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    $longitud = 5;
    $codigo = rand_code($caracteres, $longitud); 
    $sql = "REST-$codigo";     
      
       $reserva = ReservaRest::find($request->idReservaHtl);
      $reserva->nombre = Auth::user()->name;
      $reserva->apellidos =  Auth::user()->apellido;
        $reserva->documento =  Auth::user()->cedula;
        $reserva->telefono_fijo = Auth::user()->telefono_movil;
        $reserva->telefono_cel =  $request->telefono_cel;
        $reserva->correo =  $request->correo;
       // $reserva->id_user =  Auth::user()->id;
       $reserva->correo =  Auth::user()->email;
			  $reserva->nombre_rest = $request->nombrerest;
        $reserva->fecha =  $request->fecha;
        $reserva->Cant_personas =  $request->cant_personas;
        $reserva->direccion =  $request->direccion;
			  $reserva->Comentarios = $request->comentarios;
        $reserva->localizadorClient = $sql;            
        $reserva->save();
      
       Session::flash('flash_message', 'Su solicitud ha sido enviada exitosamente!');

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
