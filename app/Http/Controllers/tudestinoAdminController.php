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
use App\Textos;
use DB;


class tudestinoAdminController extends Controller
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
    	
    	
    	$nombreimg = date('YmdHis').'_'.$_FILES['img']['name'];
      $destinos =  Tudestino::create(
        [  'nombre' => $request['txtnombre'],
         'direccion'  =>$request['txtdireccion'], 
          'telefono'  =>$request['txttelefono'], 
          'telefono2'  => $request['txttelefono2'], 
          'correo'  => $request['txtcorreo'], 
          'pais'  => $request['txtpais'], 
          'estado'  => $request['txtestado'],        
          'ciudad'  => $request['txtciudad'],
          'zona'  => $request['txtzona'], 
          'img' =>  date('YmdHis').'_'.$_FILES['img']['name'],
          'act'=> 1,
          'fecha_inicial'=>$request['fechaini'],
          'fecha_fin'=>$request['fechafin'],
          'paquetes_dipon'=> $request['paquetes'],
          'facebook' => $request['facebook'],
          'instagram' => $request['instagram'],
          'twitter' => $request['twitter'],
          'google' => $request['google'],
          'youtube' => $request['youtube'],


          ]
            );
            
            
            $sizeimg = $_FILES['img']['size'];
			$tipo = $_FILES['img']['type'];
			
			$carpeta_dest =   $_SERVER["DOCUMENT_ROOT"] . "/public/imagenes/"; 

			
			
				$nombreimg = date('YmdHis').'_'.$_FILES['img']['name'];
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
  
   $iddestinos = $destinos->id;
             
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
         'tablaEntidad'=> 'n_tudestinos',
         'idtablaEntidad'=> $iddestinos, 
            		]);
            
    // bcrypt(sirve para encriptar)
    return   redirect('/tudestinos')->with('message', 'Destino creado Exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         	$destinos = Tudestino::find($id); 
        $imagen = DB::table('t_imagenes')
            ->join('n_tudestinos','n_tudestinos.id', '=', 't_imagenes.id_Entidad')
             ->where('t_imagenes.Tabla_entidad', '=', "n_tudestinos")  
             
            ->where('t_imagenes.id_Entidad', '=', "$id")
           //LIMITAR LAS IMAGENES  /////////
            ->select('t_imagenes.*','t_imagenes.nombre as n')
           ->get(); 
	
	
	          
        $texto = DB::table('n_textos')
            ->join('n_tudestinos','n_tudestinos.id', '=', 'n_textos.idtablaEntidad')
            ->where('n_textos.idtablaEntidad', '=', "$id")
            ->where('n_textos.tablaEntidad', '=', "n_tudestinos")
            ->select('n_textos.*')
           ->get(); 
	
	
	
	   $pais = pais::all();
       $estados =	estadoc::all();
       $ciudad = Ciudades::all();
			$zonas = Zonas::all();
		
         return view('tudestino.navimgdestino', compact('pais', 'estados', 'ciudad', 'zonas', 'destinos', 'imagen', 'texto'));
   
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
        $nombreimg = date('YmdHis').'_'.$_FILES['img']['name'];
			  $nombreTemp = $_FILES['img']['tmp_name'];
			 	move_uploaded_file($nombreTemp, $carpeta_dest.$nombreimg);
          $destinos = Tudestino::find($id);
          $destinos->img = $nombreimg;
          $destinos->nombre = $request->txtnombre;
          $destinos->direccion =$request->txtdireccion;
          $destinos->telefono  =$request->txttelefono;
          $destinos->telefono2  = $request->txttelefono2;
          $destinos->correo = $request->txtcorreo;
          $destinos->pais  = $request->txtpais; 
          $destinos->estado  = $request->txtestado;       
          $destinos->ciudad  = $request->txtciudad;
          $destinos->zona  = $request->txtzona;
          $destinos->fecha_inicial =$request->fechaini;
          $destinos->fecha_fin =$request->fechafin;
          $destinos->paquetes_dipon = $request->paquetes;
          $destinos->facebook = $request->facebook;
          $destinos->instagram = $request->instagram;
          $destinos->twitter = $request->twitter;
         $destinos->google = $request->google;
         $destinos->youtube =  $request->youtube;  
         $destinos->save();
        
        }else{
    	
    	
    	 
    $destinos =  Tudestino::find($id);
        $destinos->nombre = $request->txtnombre;
         $destinos->direccion =$request->txtdireccion;
          $destinos->telefono  =$request->txttelefono;
          $destinos->telefono2  = $request->txttelefono2;
          $destinos->correo = $request->txtcorreo;
          $destinos->pais  = $request->txtpais; 
          $destinos->estado  = $request->txtestado;       
          $destinos->ciudad  = $request->txtciudad;
          $destinos->zona  = $request->txtzona;
          $destinos->fecha_inicial =$request->fechaini;
          $destinos->fecha_fin =$request->fechafin;
          $destinos->paquetes_dipon = $request->paquetes;
          $destinos->facebook = $request->facebook;
          $destinos->instagram = $request->instagram;
          $destinos->twitter = $request->twitter;
         $destinos->google = $request->google;
         $destinos->youtube =  $request->youtube;
          
          $destinos->save();

        }
    // bcrypt(sirve para encriptar)
    return   redirect('/tudestinos')->with('message', 'Destino actualizado Exitosamente');	
    	
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}

