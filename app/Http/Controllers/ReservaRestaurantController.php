<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ReservaRest as ReservaRest;

use Auth;

class ReservaRestaurantController extends Controller
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
    $sql = "RTNT-$codigo";
///////////////////////////////////////////////////////
      
         $reserva = \App\ReservaRest::create(
        [
          'id_user'  => Auth::user()->id,
          // 'nombre' => Auth::user()->name,
           //'apellidos'  => Auth::user()->apellido, 
           //'documento'  =>Auth::user()->cedula,           
           //'telefono_fijo'  => Auth::user()->telefono_movil,
           //'telefono_cel'  =>$request['telefono_cel'],
           //'correo'   =>$request['correo'],
           'id_Rest'  =>$request['id_hotel'],
           //'nombre_rest'  =>$request['nombrerest'],
           //'fecha'  =>$request['fecha'],
           //'Cant_personas' =>$request['cant_personas'],
           //'direccion'  =>$request['direccion'],           
           //'Comentarios' =>$request['comentarios'],
           //'localizadorClient' =>$sql
          ]
            );
      
 echo  $reserva->id;
      
    //  return redirect()->back()->with('message', 'Su reserva ha sido enviada exitosamente');
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
