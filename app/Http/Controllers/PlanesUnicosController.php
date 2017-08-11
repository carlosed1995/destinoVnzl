<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Imagen as Imagen;
use Validator;
use Session;
use App\Ciudades;
use App\pais;
use App\Zonas;
use App\estadoc;
use App\Textos;
use App\PlanesUnicos;
use App\Prueba;
use DB;


class PlanesUnicosController extends Controller
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
        $planes = PlanesUnicos::paginate(7);
				$imagen = Imagen::all();
        return view('PlanesUnicos.index', compact('planes','imagen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$catplan = Prueba::all();
    	$pais = pais::all();
       $estados =	estadoc::all();
       $ciudad = Ciudades::all();
	   $zonas = Zonas::all();
        return view('PlanesUnicos.create')->with('pais', $pais)->with('catplan', $catplan)->with('estados', $estados)->with('ciudad', $ciudad)->with('zonas', $zonas);
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
      $destinos =  PlanesUnicos::create(
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
         'costos' => $request['costo'],
          'facebook' => $request['facebook'],
          'instagram' => $request['instagram'],
          'twitter' => $request['twitter'],
          'google' => $request['google'],
          'youtube' => $request['youtube'],
          'cat_plan' => $request['catplan'],
           'destacado'  => $request['destacado'],
           'numero_destacado' => $request['ndestacado'],
           'n_paquetes_disp' => $request['paquetes'],

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
         'tablaEntidad'=> 't_planesunicos',
         'idtablaEntidad'=> $iddestinos, 
            		]);
            
    // bcrypt(sirve para encriptar)
    return   redirect('/PlanesUnicos')->with('message', 'Plan creado exitosamente');
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
        $planes = PlanesUnicos::find($id);
        $imagen = DB::table('t_imagenes')
            ->join('t_planesunicos','t_planesunicos.id', '=', 't_imagenes.id_Entidad')
            ->where('t_imagenes.id_Entidad', '=', "$id")
              ->where('t_imagenes.Tabla_entidad', '=', "t_planesunicos")   
           //LIMITAR LAS IMAGENES  /////////
            ->select('t_imagenes.*','t_imagenes.nombre as n')
           ->get(); 
	
	  $texto = DB::table('n_textos')
            ->join('t_planesunicos','t_planesunicos.id', '=', 'n_textos.idtablaEntidad')
              ->where('n_textos.tablaEntidad', '=', "t_planesunicos")
            ->where('n_textos.idtablaEntidad', '=', "$id")
         
            ->select('n_textos.*')
           ->get(); 
	   $pais = pais::all();
	   	$catplan = Prueba::all();
       $estados =	estadoc::all();
       $ciudad = Ciudades::all();
	   $zonas = Zonas::all();
     return view('PlanesUnicos.navimgplanes', compact('pais', 'estados', 'catplan','ciudad', 'zonas', 'destinos', 'imagen', 'texto', 'planes'));
        
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
          $plan = PlanesUnicos::find($id);
          $plan->img = $nombreimg;
          $plan->nombre = $request->txtnombre;
          $plan->direccion =$request->txtdireccion;
          $plan->telefono  =$request->txttelefono;
          $plan->telefono2  = $request->txttelefono2;
          $plan->correo = $request->txtcorreo;
          $plan->pais  = $request->txtpais; 
          $plan->estado  = $request->txtestado;       
          $plan->ciudad  = $request->txtciudad;
           $plan->costos = $request->costo;
          $plan->zona  = $request->txtzona;
          $plan->facebook = $request->facebook;
          $plan->instagram = $request->instagram;
          $plan->twitter = $request->twitter;
         $plan->google = $request->google;
         $plan->youtube =  $request->youtube;  
         $plan->cat_plan = $request->catplan;
         $plan->destacado  = $request->destacado;
         $plan->numero_destacado = $request->ndestacado;
         $plan->n_paquetes_disp  = $request->paquetes;
         $plan->save();
         
          return   redirect()->back()->with('message', 'plan actualizado Exitosamente');	
        
        }else{
    	
    	
    	 
    $plan =  PlanesUnicos::find($id);
        $plan->nombre = $request->txtnombre;
         $plan->direccion =$request->txtdireccion;
          $plan->telefono  =$request->txttelefono;
          $plan->telefono2  = $request->txttelefono2;
          $plan->correo = $request->txtcorreo;
          $plan->pais  = $request->txtpais; 
          $plan->estado  = $request->txtestado;       
          $plan->ciudad  = $request->txtciudad;
          $plan->zona  = $request->txtzona;
       $plan->costos = $request->costo;
        $plan->destacado  = $request->destacado;
        $plan->numero_destacado = $request->ndestacado;
        $plan->n_paquetes_disp  = $request->paquetes;
          $plan->facebook = $request->facebook;
          $plan->instagram = $request->instagram;
          $plan->twitter = $request->twitter;
         $plan->google = $request->google;
         $plan->cat_plan = $request->catplan;
         $plan->youtube =  $request->youtube;
          
          $plan->save();
           return   redirect()->back()->with('message', 'plan actualizado Exitosamente');

        }
    // bcrypt(sirve para encriptar)
   	
    	
       
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
