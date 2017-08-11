<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use App\ReservaHotel;

use Session;

class ReservaHotelController extends Controller
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
      ////funcion de localizador numero aleatorios con prefijo HTL////
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
    $sql = "HTL-$codigo";
      
///////////////////////////////////////////////////////
 $reserva=\App\ReservaHotel::create(
        [  //'nombre' => Auth::user()->name,
           //'apellidos'  => Auth::user()->apellido, 
           //'documento'  =>Auth::user()->cedula,           
           //'telefono_fijo'  => Auth::user()->telefono_movil,
           //'telefono'  =>$request['telefono2'], 
           //'fecha'  =>$request['fecha'], 
           'id_user'  => Auth::user()->id,
           //'correo'  => Auth::user()->email,
           //'direccion'  =>$request['direccion'],
           'id_Hotel'  =>$request['id_hotel'],
           // 'Nombre_Hotel'  =>$request['nombre_hotel'],
            //'Cant_personas' =>$request['cant_personas'],
            //'Cant_Hab' =>$request['cant_hab'],
            //'Comentarios' =>$request['comentarios'],
            //'localizadorClient' =>$sql
          ]
            );      
      echo  $reserva->id;
  
      
    
    }
  
  
  public function store2(Request $request)
    {
      ////funcion de localizador numero aleatorios con prefijo HTL////
       
      
///////////////////////////////////////////////////////
 /*function rand_code($chars, $long){
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
    $sql = "HTL-$codigo";
      
      
       $reserva = ReservaHotel::find($request->idReservaHtl);
      $reserva->nombre = Auth::user()->name;
      $reserva->apellidos =  Auth::user()->apellido;
        $reserva->documento =  Auth::user()->cedula;
        $reserva->telefono_fijo = Auth::user()->telefono_movil;
        $reserva->telefono =  $request->telefono2;
        $reserva->fecha =  $request->fecha;
        $reserva->fecha_fin =  $request->fecha_fin;
        $reserva->id_user =  Auth::user()->id;
        $reserva->correo =  Auth::user()->email;
			  $reserva->direccion = $request->direccion;
      
       $reserva->id_Hotel =  $request->id_Hotel;
        $reserva->Nombre_Hotel =  $request->nombre_hotel;
        $reserva->Cant_personas =  $request->cant_personas;
        $reserva->Cant_Hab =  $request->cant_hab;
			  $reserva->Comentarios = $request->Comentarios;
       $reserva->localizadorClient = $sql; 
      
      $reserva->save();
            
      return redirect()->back()->with('message', 'Su reserva ha sido enviada exitosamente');
  */
      print_r($request->fecha_fin); die;
    
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
     

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actentidad(Request $request)
    {
      
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
    $sql = "HTL-$codigo";
      
      
       $reserva = ReservaHotel::find($request->idReservaHtl);
      $reserva->nombre = Auth::user()->name;
      $reserva->apellidos =  Auth::user()->apellido;
        $reserva->documento =  Auth::user()->cedula;
        $reserva->telefono_fijo = Auth::user()->telefono_movil;
        $reserva->telefono =  $request->telefono2;
        $reserva->fecha =  $request->fecha;
        $reserva->id_user =  Auth::user()->id;
        $reserva->correo =  Auth::user()->email;
			  $reserva->direccion = $request->direccion;
      
       $reserva->id_Hotel =  $request->id_Hotel;
        $reserva->Nombre_Hotel =  $request->nombre_hotel;
        $reserva->Cant_personas =  $request->cant_personas;
        $reserva->Cant_Hab =  $request->cant_hab;
			  $reserva->Comentarios = $request->Comentarios;
       $reserva->localizadorClient = $sql;
      
      
      $reserva->save();
      
      Session::flash('flash_message', 'Su solicitud de reserva ha sido enviada!');
      return redirect()->back();
      
     
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
