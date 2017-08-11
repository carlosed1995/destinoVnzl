<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\pais;
use App\Zonas;
use App\estadoc;
use App\Ciudades;
use App\Certificados; 
use App\Imagen;
use DB;

class CertificadosAdminController extends Controller
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
      $certificados = Certificados::search($request->nombre)->orderBy('id', 'ASC')->paginate(7);      
      return view('certificados.index')->with('certificados', $certificados);
      
      
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
		
     
         return view('certificados.creates', compact('pais', 'estados', 'ciudad', 'zonas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      \App\Certificados::create(
        [  'nombre' => $request['txtnombre'],
        'direccion'  => $request['txtdireccion'], 
        'telefono'  =>$request['txttelefono'],
				 'telefono2' =>$request['txttelefono2'],
        'correo'  => $request['txtcorreo'], 

        'titulo1'  => $request['titulo1'], 
        'titulo2'  => $request['titulo2'], 
        'titulo3'  => $request['titulo3'], 
        'titulo4'  => $request['titulo4'], 
        'txttitulo1'  => $request['txttitulo1'], 
        'txttitulo2'  => $request['txttitulo2'],
				 'txttitulo3' => $request['txttitulo3'],
         'txttitulo4' => $request['txttitulo4'],  
		     'pais' => $request['txtpais'],
				 'estado' => $request['txtestado'],
				 'ciudad' => $request['txtciudad'],
				 'zona' => $request['txtzona'],
				 'img' =>  $_FILES['img']['name'],
         'act' => 1,
        ]
            );
			
		  $sizeimg = $_FILES['img']['size'];
			$tipo = $_FILES['img']['type'];
			
			$carpeta_dest =   $_SERVER["DOCUMENT_ROOT"] . "/public/imagenes/"; 

			
			
				$nombreimg = $_FILES['img']['name'];
			$nombreTemp = $_FILES['img']['tmp_name'];
				move_uploaded_file($nombreTemp, $carpeta_dest.$nombreimg);
 

    return   redirect('/certificados')->with('message', 'Registro Exitoso');
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
		
	     	$imagen = Imagen::pluck('nombre', 'id'); 
        $imagen = DB::table('t_imagenes')
            ->join('t_certificado','t_certificado.id', '=', 't_imagenes.id_Entidad')
            ->where('t_imagenes.id_Entidad', '=', "$id")
           //LIMITAR LAS IMAGENES  /////////
            ->select('t_imagenes.*','t_imagenes.nombre as n')
           ->get(); 
			
			

       $pais = pais::all();
       $estados =	estadoc::all();
       $ciudad = Ciudades::all();
			$zonas = Zonas::all();
			 $certificados = Certificados::find($id);
     
         return view('certificados.navimg', compact('pais', 'estados', 'ciudad', 'zonas', 'imagen', 'certificados'));
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
      		 if ($request->hasFile('img') != null){
			 
	 $file = $request->file('img');
        $imagename =  $file->getClientOriginalName();
        $carpeta_dest =   $_SERVER["DOCUMENT_ROOT"] . "/public/imagenes/"; 
        $nombreimg = $_FILES['img']['name'];
			  $nombreTemp = $_FILES['img']['tmp_name'];
			 	move_uploaded_file($nombreTemp, $carpeta_dest.$nombreimg);
        $update = Certificados::find($id);
        $update->img = $_FILES['img']['name'];
						 
						 
				$update->nombre = $request->txtnombre;
        $update->direccion  = $request->txtdireccion;
        $update->telefono  = $request->txttelefono; 
        $update->correo  = $request->txtcorreo; 
        
        $update->titulo1 = $request->titulo1; 
        $update->titulo2  = $request->titulo2; 
        $update->titulo3  = $request->titulo3; 
        $update->titulo4  = $request->titulo4; 
        $update->txttitulo1  = $request->txttitulo1; 
        $update->txttitulo2  = $request->txttitulo2;
				 $update->txttitulo3 = $request->txttitulo3;
         $update->txttitulo4 = $request->txttitulo4;  
		     $update->pais = $request->txtpais;
				$update->estado = $request->txtestado;
				 $update->ciudad = $request->txtciudad;
				 $update->zona = $request->txtzona;
						 
						  $update->save();
			 
			 
			  return redirect('/certificados')->with('message', 'Actualización Exitosa');
				 
			 
						 
						 
					 }else{
						   $update = Certificados::find($id);
     
				$update->nombre = $request->txtnombre;
        $update->direccion  = $request->txtdireccion; 
        $update->telefono  = $request->txttelefono; 
        $update->correo  = $request->txtcorreo; 
      
        $update->titulo1 = $request->titulo1; 
        $update->titulo2  = $request->titulo2; 
        $update->titulo3  = $request->titulo3; 
        $update->titulo4  = $request->titulo4; 
        $update->txttitulo1  = $request->txttitulo1; 
        $update->txttitulo2  = $request->txttitulo2;
				 $update->txttitulo3 = $request->txttitulo3;
         $update->txttitulo4 = $request->txttitulo4;  
		     $update->pais = $request->txtpais;
				$update->estado = $request->txtestado;
				 $update->ciudad = $request->txtciudad;
				 $update->zona = $request->txtzona;
						 
						  $update->save();
			 
						  return redirect('/certificados')->with('message', 'Actualización Exitosa');
						 
						 
					 }
			
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $elimn = Imagen::Find($id);
          $elimn->delete();
          return redirect()->back();
    }
}
