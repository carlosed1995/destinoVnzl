<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\n_rol;
use DB;
use App\Estado as Estado;
use App\Categoria as Categoria;
use App\Tipodoc as Tipodoc;
use App\Genero as Genero;
use App\estadoc;
use Session;

class adminUsuariosController extends Controller
{
  
    public function __construct(){

       $this->middleware('auth');
        $this->middleware('Admind');
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = User::search($request->name)->orderBy('id' , 'DESC')->paginate(5);
        $usuarios = DB::table('users')
            ->join('n_rol', 'n_rol.id', '=', 'users.rolUsuario')
            ->select('users.*', 'n_rol.tipo as roles')
            ->get();
        return view('AdminUsuarios.AdminUsuarios')->with('usuarios', $usuarios)->with('user',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        $estado = estadoc::all();
        $tipodoc = Tipodoc::pluck('tipoDocumento', 'id_tipodoc');
        $genero = Genero::pluck('tipo', 'idGenero');
        $categoria = Categoria::pluck('tipo', 'idCategoria');
        return view('AdminUsuarios.Adminusuariocreate')->with('estado',$estado)->with('tipodoc', $tipodoc)->with('genero', $genero);
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
        [ 'name' => $request['txtnombres'],
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
         Session::flash('flash_message', 'El Usuario ha sido registrado exitosamente!');
    // bcrypt(sirve para encriptar)
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
        $usuarios = User::find($id);
        $rol = n_rol::all();
      // $rest = Restaurant::where('idrestaurant', '=', $id)->get()->first();
        return view('AdminUsuarios.Adminusuarioedit',compact('id','rol'))->with('usuarios', $usuarios);
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
        
        $usuarios = User::find($id);
        $usuarios->name = $request->name;
        $usuarios->apellido = $request->apellido;
        $usuarios->email = $request->email;
        $usuarios->rolUsuario = $request->rolUsuario;
        $usuarios->save();
        
        return redirect()->back()->with('message', 'Se Actualizo correctamente');
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