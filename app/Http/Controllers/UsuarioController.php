<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Zonas;
use App\estadoc;
use App\pais;
use App\Ciudades;
use App\Categoria as Categoria;
use App\Tipodoc as Tipodoc;
use App\Genero as Genero;

use Session;
class UsuarioController extends Controller
{
  


		 public function byProject1($id)
    {
		return	Ciudades::where('idEstado', $id)->get();
    }
	


  
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciudad = Ciudades::all();
        $estado = estadoc::all();
        $tipodoc = Tipodoc::pluck('tipoDocumento', 'id_tipodoc');
        $genero = Genero::pluck('tipo', 'idGenero');
        $categoria = Categoria::pluck('tipo', 'idCategoria');
        return view('auth.register')->with('ciudad',$ciudad)->with('estado',$estado)->with('tipodoc', $tipodoc)->with('genero', $genero);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
         User::create(
        [  'name' => $request['txtnombres'],
         'email'  => $request['email'], 
          'password'  =>bcrypt($request['password']), 
          'apellido'  => $request['txtapellidos'], 
          'cedula'  => $request['txtcedula'], 
          'Fecha_Nacimiento'  => $request['txtfechanac'], 
          'telefono_local'  => $request['txttellocal'], 
          'telefono_movil'  => $request['txttelmov'], 
          'direccion'  => $request['txtdireccion'], 
          'idEstado'  => $request['txtestado'], 
          'idCiudad'  => $request['txtciudad'], 
          'id_estatusClient'  => 2, 
          'id_GeneroClient'  => $request['genero'], 
          'id_TipoDoc'  => $request['tipodoc'], 
          'rolUsuario'  => 3, 
          ]
            );
         Session::flash('flash_message', 'Has sido registrado Exitosamente!');
    // bcrypt(sirve para encriptar)
			   return   redirect('/login')->with('message', 'Registro Exitoso');
   
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
