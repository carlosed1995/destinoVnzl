<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tudestino;
use App\Estado as Estado;
use App\Ciudades;
use App\pais;
use App\Zonas;
use App\estadoc;


class DestinosAdminController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('Admind');
    }
  
    public function index()
    {
      
       $destinos = Tudestino::paginate(10);
      return view('tudestino.tuDestinosIndex', compact('destinos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function create()
    {
       $pais = pais::all();
       $estados =	estadoc::all();
       $ciudad = Ciudades::all();
	   $zonas = Zonas::all();
	
     
         return view('tudestino.create', compact('pais', 'estados', 'ciudad', 'zonas', 'categoria'));
         
         
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Tudestino::create(
        [  'nombre' => $request['txtnombre'],
         'direccion'  =>$request['txtdireccion'], 
          'telefono'  =>$request['txttelefono'], 
          'telefono2'  => $request['txttelefono2'], 
          'correo'  => $request['txtcorreo'], 
          'pais'  => $request['txtpais'], 
          'estado'  => $request['txtestado'],        
          'ciudad'  => $request['txtciudad'],
          'zona'  => $request['txtzona'], 
          'img' => $request['img'],
          'act'=> 1,
          'fecha_inicial'=>$request['fechaini'],
          'fecha_fin'=>$request['fechafin'],
          'paquetes_dipon'=> $request['paquetes']

          ]
            );
    // bcrypt(sirve para encriptar)
    return   redirect('/destinos')->with('message', 'Destino creado Exitosamente');
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
         $escape = Escapes::find($id);
     
       return view('usuario.editEscape')->with('escape',$escape);
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
        $escape = Escapes::Find($id);
         $escape->nombre = $request->txtnombre;
      $escape->direccion =  $request->txtdireccion;
        $escape->fecha_ini =  $request->txtfechaini;
        $escape->fecha_fin =  $request->txtfechafin;
        $escape->descripcion =  $request->txtdescripcion;
        $escape->condiciones =  $request->txtterminos;
      
      $escape->save();
      
      return redirect('/escapesadmin')->with('message', 'Actualización Exitosa');
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

