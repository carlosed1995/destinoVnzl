<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pais;
use App\Zonas;
use App\estadoc;
use App\Ciudades;
use App\Parques;
use App\Categoria_diversion;
use App\Imagen;
use DB;
use App\Textos;

class parquesAdminController extends Controller
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
      $parques = Parques::search($request->nombre)->orderBy('id', 'ASC')->paginate(7);      
      return view('parques.index')->with('parques', $parques);
      
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
			$categoria = Categoria_diversion::all();
     
         return view('parques.create', compact('pais', 'estados', 'ciudad', 'zonas', 'categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $parque = Parques::create(
        [  'nombre' => $request['txtnombre'],
        'direccion'  => $request['txtdireccion'], 
        'telefono'  =>$request['txttelefono'],
				 'telefono2' =>$request['txttelefono2'],
        'correo'  => $request['txtcorreo'], 
        'tipo_diversion'  => $request['txttipodiv'], 
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
				 
               'facebook' => $request['facebook'],
               'instagram' => $request['instagram'],
               'twitter' => $request['twitter'],
               'google' => $request['google'],
               'youtube' => $request['youtube'],

         'act' => 1,
        ]
            );
            
			
		  $sizeimg = $_FILES['img']['size'];
			$tipo = $_FILES['img']['type'];
			
			$carpeta_dest =   $_SERVER["DOCUMENT_ROOT"] . "/public/imagenes/"; 

			
			
				$nombreimg = $_FILES['img']['name'];
			$nombreTemp = $_FILES['img']['tmp_name'];
				move_uploaded_file($nombreTemp, $carpeta_dest.$nombreimg);
				
				
				
				
				
            if($request['micheckbox'] == null){
           $check1 = $request['micheckbox']  = 0;
          }else{
          	$check1 = $request['micheckbox'];
          }
          
          if( $request['micheckbox2'] == null){
          	 $check2 = $request['micheckbox2'] = 0;
           }else{
           	$check2 = $request['micheckbox2'];
           }
           
          if($request['micheckbox3'] == null){
          	 $check3 = $request['micheckbox3'] = 0;
          }else{
           $check3 = $request['micheckbox3'];
          }
  
   $idparque = $parque->id;
             
            Textos::create(
            	[ 
         'titulo1' => $request['titulo1'],
         'texto1'  =>$request['txttitulo1'], 
         //'act1'  => $request['micheckbox'],
         'titulo2'  =>$request['titulo2'], 
         'texto2'  => $request['txttitulo2'],
         'act2'  => $check1,
         'titulo3'  => $request['titulo3'], 
         'texto3'  => $request['txttitulo3'],
         'act3'  => $check2,
         'titulo4'  => $request['titulo4'], 
         'texto4'  => $request['txttitulo4'], 
         'act4'  => $check3,
         'tablaEntidad'=> 't_diversion',
         'idtablaEntidad'=> $idparque, 
            		]);

 

    return   redirect('/parques')->with('message', 'Registro Exitoso');
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
    	
    	
	 $texto = DB::table('n_textos')
            ->join('t_diversion','t_diversion.id', '=', 'n_textos.idtablaEntidad')
              ->where('n_textos.tablaEntidad', '=', "t_diversion")
            ->where('n_textos.idtablaEntidad', '=', "$id")
         
            ->select('n_textos.*')
           ->get(); 
		
	     	$imagen = Imagen::pluck('nombre', 'id'); 
        $imagen = DB::table('t_imagenes')
            ->join('t_diversion','t_diversion.id', '=', 't_imagenes.id_Entidad')
            ->where('t_imagenes.id_Entidad', '=', "$id")
            ->where('t_imagenes.Tabla_entidad', '=', "t_diversion")
           //LIMITAR LAS IMAGENES  /////////
            ->select('t_imagenes.*','t_imagenes.nombre as n')
           ->get(); 
			
			
			
		
$categoria = Categoria_diversion::all();
       $pais = pais::all();
       $estados =	estadoc::all();
       $ciudad = Ciudades::all();
			$zonas = Zonas::all();
			 $parques = Parques::find($id);
     
         return view('parques.navimgparques', compact('pais','texto', 'estados', 'ciudad', 'zonas', 'parques', 'imagen', 'categoria'));
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
        $update = Parques::find($id);
        $update->img = $_FILES['img']['name'];
						 
						 
				$update->nombre = $request->txtnombre;
        $update->direccion  = $request->txtdireccion;
        $update->telefono  = $request->txttelefono; 
        $update->correo  = $request->txtcorreo; 
        $update->tipo_diversion  = $request->txttipodiv; 
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
				 $update->facebook = $request->facebook;
                 $update->instagram = $request->instagram;
                 $update->twitter = $request->twitter;
                 $update->google = $request->google;
                 $update->youtube =  $request->youtube;
        		  $update->save();
			 
			 
			  return redirect('/parques')->with('message', 'Actualización Exitosa');
				 
			 
						 
						 
					 }else{
						   $update = Parques::find($id);
     
				$update->nombre = $request->txtnombre;
        $update->direccion  = $request->txtdireccion; 
        $update->telefono  = $request->txttelefono; 
        $update->correo  = $request->txtcorreo; 
        $update->tipo_diversion  = $request->txttipodiv; 
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
				 $update->facebook = $request->facebook;
                 $update->instagram = $request->instagram;
                 $update->twitter = $request->twitter;
                 $update->google = $request->google;
                 $update->youtube =  $request->youtube; 
            	  $update->save();
			 
						  return redirect('/parques')->with('message', 'Actualización Exitosa');
						 
						 
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
