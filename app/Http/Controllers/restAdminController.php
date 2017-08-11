<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Zonas;
use App\estadoc;
use App\pais;
use App\Ciudades;
use App\Especialidad as Especialidad;
use App\Restaurant;
use Session;
use Redirect;
use App\Imagen;
use App\Servicio;
use Auth;
use App\perfilTh;
use App\tipoAliado;
use App\tipoConsumidor;
use App\Textos;
use DB;

class restAdminController extends Controller
{
  public function __construct(){

       $this->middleware('auth');
        $this->middleware('Admind');
    }
	
	 public function byProject($id)
    {
		return	Zonas::where('idCiudad', $id)->get();
    }

		 public function byProject1($id)
    {
		return	Ciudades::where('idEstado', $id)->get();
    }
	
	   public function byProject2($id)
		 {
			 return estadoc::where('idPais', $id)->get();
		 }

  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
			   
		$rests = Restaurant::search($request->name)->orderBy('id' , 'ASC')->paginate(10);  
       //  $rests = Restaurant::All();
      return view('usuario.restIndex2'/*, compact('rests')*/)->with('rests', $rests);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			//->with('ciudad',$ciudad)
			
		$pais = pais::all();
			$est = Zonas::all();
		  $estadosk =	estadoc::all();
			$perfilth = perfilTh::pluck('perfil','id');
			$tipoA = tipoAliado::pluck('tipoaliado', 'id');;
      $tipoC =tipoConsumidor::pluck('tipo', 'id');;
			
		  $servicio = Servicio::All();
         // $ciudad = Zonas::pluck('Nombre','id');
        $estado = Ciudades::all();
        $especialidad = Especialidad::pluck('nombre', 'idEspecialidad');
return view('usuario.Restcreate', compact('servicio', 'pais', 'est', 'estado', 'estadosk'))->with('perfilth',$perfilth)->with('tipoC',$tipoC)->with('tipoA',$tipoA)->with('estado',$estado)->with('especialidad', $especialidad); 
      
    }
	
 /*<label>Tipo de gastronomia</label>
<div class="form-group">
{{Form::select('especialidad', $especialidad,['idEspecialidad' => 'idEspecialidad'], array('placeholder' => 'Ingrese la especialidad del Restaurant', 'class' => 'form-control', 'id'=>'especialidad'  ))}}
   
	</div>*/
	
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

  $rest = Restaurant::create(
        [  'nombre' => $request['txtnombre'],
        'direccion'  => $request['txtdireccion'], 
        'url'  =>$request['txturl'], 
        'horario'  => $request['txthorario'], 
        'descripcion'  => $request['txtdescripcion'], 
        'sugerencias'  => $request['txtsugerencia'], 
        'descuentos'  => $request['txtdescuento'], 
        'rif'  => $request['txtrif'], 
        'id_estado1'  => $request['txtestado'], 
        'id_ciudad1'  => $request['txtciudad'], 
        'id_especialidad1'  => $request['especialidad'],
				 'telefono' => $request['txttelefono'],
         'promociones' => $request['txtpromociones'],  
		     'img' => date('YmdHis').'_'.$_FILES['img']['name'],
				 'act' => 1,
				 'perfilTH' => $request['txtperfilth'],
				 'tipo_Aliad' => $request['tipoA'],
				 'tipo_Con' => $request['tipoC'],
				 'zonas' => $request['txtzona'],
				 'certificadoC' => $request['txtcertificado'],
				 'pais'=> $request['txtpais'],
				 'correo_elect'=> $request['txtcorreo'],
				 
                     'facebook' => $request['facebook'],
	                 'instagram' => $request['instagram'],
		             'twitter' => $request['twitter'],
		             'google' => $request['google'],
		             'youtube' => $request['youtube'],

          ]
            );
            
            
             $restid = $rest->id;
            
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
         'tablaEntidad'=> 't_restaurante',
         'idtablaEntidad'=> $restid, 
            		]);







            
            
			
		  $sizeimg = $_FILES['img']['size'];
			$tipo = $_FILES['img']['type'];
			
			$carpeta_dest =   $_SERVER["DOCUMENT_ROOT"] . "/public/imagenes/"; 

			
			
				$nombreimg = date('YmdHis').'_'.$_FILES['img']['name'];
			$nombreTemp = $_FILES['img']['tmp_name'];
				move_uploaded_file($nombreTemp, $carpeta_dest.$nombreimg);
 

    return   redirect('/restaurantAdmin')->with('message', 'Registro Exitoso');

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
            ->join('t_restaurante','t_restaurante.id', '=', 'n_textos.idtablaEntidad')
              ->where('n_textos.tablaEntidad', '=', "t_restaurante")
            ->where('n_textos.idtablaEntidad', '=', "$id")
         
            ->select('n_textos.*')
           ->get(); 
			  $especialidad = Especialidad::all();
        $ciudad = Ciudades::all();
			  $zona = Zonas::all();
			  $pais = pais::all();
				$estadosk = estadoc::all();
			  $tipoC = tipoConsumidor::all();
			  $tipoA = tipoAliado::all();
        $rest = Restaurant::find($id);
			  $resk = perfilTh::all();
				$imagen = Imagen::pluck('nombre', 'id'); 
        $imagen = DB::table('t_imagenes')
            ->join('t_restaurante','t_restaurante.id', '=', 't_imagenes.id_Entidad')
            ->where('t_imagenes.id_Entidad', '=', $id)
             ->where('t_imagenes.Tabla_entidad', '=', "t_restaurante")
           //LIMITAR LAS IMAGENES  /////////
            ->select('t_imagenes.*','t_imagenes.nombre as n')
           ->get(); 
			
      // $rest = Restaurant::where('idrestaurant', '=', $id)->get()->first();
        return view('usuario.editRest',compact('resk', 'texto', 'tipoA', 'tipoC', 'pais', 'estadosk', 'ciudad', 'zona', 'especialidad','imagen'))->with('rest', $rest);
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
  // $rest = Restaurant::where('idrestaurant', '=', $id)->get()->first();
			
		 if ($request->hasFile('img') != null){
			 
	 $file = $request->file('img');
        $imagename =  $file->getClientOriginalName();
        $carpeta_dest =   $_SERVER["DOCUMENT_ROOT"] . "/public/imagenes/"; 
        $nombreimg = date('YmdHis').'_'.$_FILES['img']['name'];
			  $nombreTemp = $_FILES['img']['tmp_name'];
			 	move_uploaded_file($nombreTemp, $carpeta_dest.$nombreimg);
        $rest = Restaurant::find($id);
        $rest->img = $nombreimg;
			
		      $rest->nombre = $request->txtnombre;
          $rest->direccion =  $request->txtdireccion;
        //$rest->url =  $request->txturl;
          $rest->horario =  $request->txthorario;
          $rest->descripcion =  $request->txtdescripcion;
     //   $rest->sugerencias =  $request->txtsugerencia;
          $rest->descuentos =  $request->txtdescuento;
     //   $rest->rif =  $request->txtrif;
			    $rest->telefono = $request->txttelefono;
			    $rest->id_estado1 = $request->txtestado;
					$rest->id_ciudad1 = $request->txtciudad;
					$rest->id_especialidad1 = $request->txtespecialidad;
					$rest->promociones = $request->txtpromociones;
				//	$rest->img =  $_FILES['img']['name'];
					$rest->perfilTH = $request->txtperfilth;
					$rest->tipo_Aliad = $request->txttipoA;
					$rest->tipo_Con = $request->txttipoC;
					$rest->zonas = $request->txtzona;
					$rest->certificadoC = $request->txtcertificado;
					$rest->pais = $request->txtpais;
					$rest->correo_elect = $request->txtcorreo;
					$rest->facebook = $request->facebook;
                    $rest->instagram = $request->instagram;
                    $rest->twitter = $request->twitter;
                    $rest->google = $request->google;
                    $rest->youtube =  $request->youtube;
       
			 
			 
        $rest->save();
			 
			 
			  return redirect()->back()->with('message', 'Actualización Exitosa');
				 
			 
		 }else{
			 
			  $rest = Restaurant::find($id);
      $rest->nombre = $request->txtnombre;
      $rest->direccion =  $request->txtdireccion;
        //$rest->url =  $request->txturl;
        $rest->horario =  $request->txthorario;
        $rest->descripcion =  $request->txtdescripcion;
     //   $rest->sugerencias =  $request->txtsugerencia;
        $rest->descuentos =  $request->txtdescuento;
     //   $rest->rif =  $request->txtrif;
			  $rest->telefono = $request->txttelefono;
			    $rest->id_estado1 = $request->txtestado;
					$rest->id_ciudad1 = $request->txtciudad;
					$rest->id_especialidad1 = $request->txtespecialidad;
					$rest->promociones = $request->txtpromociones;
				//	$rest->img =  $_FILES['img']['name'];
					$rest->perfilTH = $request->txtperfilth;
					$rest->tipo_Aliad = $request->txttipoA;
					$rest->tipo_Con = $request->txttipoC;
					$rest->zonas = $request->txtzona;
					$rest->certificadoC = $request->txtcertificado;
					$rest->pais = $request->txtpais;
					$rest->correo_elect = $request->txtcorreo;
					$rest->facebook = $request->facebook;
                    $rest->instagram = $request->instagram;
                    $rest->twitter = $request->twitter;
                    $rest->google = $request->google;
                    $rest->youtube =  $request->youtube;
      $rest->save();
      
      return redirect()->back()->with('message', 'Actualización Exitosa');

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
			      
    }
}
