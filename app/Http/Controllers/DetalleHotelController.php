<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Hotel as Hotel;
use App\Zonas;
use App\estadoc;
use App\pais;
use App\Ciudades;
use App\Categoria as Categoria;
use Validator;
use App\PruebaHotel;
use App\Servicio as Servicio;
use App\Imagen as Imagen;
use App\Tag as Tag;
use Session;
use View;
use DB;
use App\ReservaHotel;
use App\TipoServicios;
use App\Ajuste;
use App\Textos;


  class DetalleHotelController extends Controller
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
        
		 	
			$pruebahotel = PruebaHotel::search($request->nombre)->orderBy('id', 'ASC')->paginate(10);		
				$imagen = Imagen::all();
        return view('hoteles.adminindex', compact('imagen'))->with('pruebahotel', $pruebahotel);

    }
	
 public function activarDesk($activar, $id){
     
     
   } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			  $servicio = Servicio::all();
			  $pais = pais::all();
			  $estado = estadoc::all();
        $ciudad = Ciudades::all();
			  $zona = Zonas::all();
        $categoria = Categoria::pluck('tipo', 'idCategoria');
				$tags = Tag::pluck('name','id');
            return view('hoteles.create',compact('servicio' ,'pais', 'estado', 'ciudad', 'zona'))->with('categoria', $categoria)->with('tags', $tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
			
	
			
			
      $registrar =  \App\PruebaHotel::create(
        [ 'nombre' => $request['nombre'],
          'direccion'  => $request['direccion'], 
          'telefono'  =>$request['telefono'], 
          'telefono2'  => $request['telefono2'], 
          'descripcion'  => $request['descripcion'], 
          'url'  => $request['url'],  
          'rif'  => $request['rif'], 
          'correo'  => $request['correo'], 
          'terminosCond'  => $request['terminosCond'], 
          'horario'  => $request['horario'], 
          'descuento'  =>   $request['descuento'],
          'img' => $_FILES['img']['name'],
		  'idpais' => $request['txtpais'],
		  'id_estado' => $request['txtestado'],
				     'id_ciudad' => $request['txtciudad'],
				     'id_zona' => $request['txtzona'],
				     'act' => 1,
		  'estrellas' => $request['estrellas'],
		  
		  'facebook' => $request['facebook'],
		  'instagram' => $request['instagram'],
		  'twitter' => $request['twitter'],
		  
		  'google' => $request['google'],
		  'youtube' => $request['youtube'],
		  
		  'categoria_hotel' => $request['categoria'], 
		  

		  
		  
		  //  'etiquetas'  =>   $request['etiquetas'],
				 ]
				);
				
			
				
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
				

   $idhotel = $registrar->id;
             
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
         'tablaEntidad'=> 'pruebahotel',
         'idtablaEntidad'=> $idhotel, 
            		]);

				
		
				
				
						
			$carpeta_dest =   $_SERVER["DOCUMENT_ROOT"] . "/public/imagenes/"; 
         	$nombreimg = date('YmdHis').'_'.$_FILES['img']['name'];
			$nombreTemp = $_FILES['img']['tmp_name'];
				move_uploaded_file($nombreTemp, $carpeta_dest.$nombreimg);
	
			 
				
	
	$idH = $registrar->id;

			
			///NUEEEEEEEEEVOOOOOOOOOOOOOOO

 $cuenta = count($_POST['id-servicio']);
for ($i=0; $i < $cuenta ; $i++) { 
	$service = $_POST['id-servicio'][$i];
	$data =      array("tipo" => $service,
        "idEntidad"=> $idH,
        "TablaEntidad"=>'pruebahotel',
        "lastUpdateTime"=>time(),
        "creationTime"=>time());

$registrar =  \App\TipoServicios::create(
       $data
				);
//$sql = "INSERT INTO t_tipos_serv (tipo, idEntidad, TablaEntidad) values ('$service', '$idH', 'pruebahotel')";
//$execute = mysqli_query($conexion, $sql);
}
			 
			//NUEEEEEEEVOOOOOOOOOOOOOOOO
      


      
       return redirect('/detallehotel')->with('message', 'Hotel registrado exitosamente');
      
      
     /* $rules = array(

            "nombre"=>"required",
            "direccion" =>"required",
            "telefono"=>"required|numeric",
            "telefono2"=>"required|numeric",
            "descripcion"=>"required",
            "url"=>"required",
            "correo"=>"required",
            "terminosCond"=>"required",
            "horario"=>"required",
            "descuento"=>"required",
            "rif"=>"required", 
              

            );

       $validator = Validator::make($request->all(), $rules);
        if($validator->fails())
        {
          return redirect()->back()->withErrors($validator);
        }

       $hotel = new Hotel;
       $hotel->nombre = $request->nombre;
       $hotel->direccion =$request->direccion;
       $hotel->telefono =$request->telefono;
       $hotel->telefono2 =$request->telefono2;
       $hotel->descripcion =$request->descripcion;
       $hotel->url =$request->url;
       $hotel->correo =$request->correo;
       $hotel->terminosCond =$request->terminosCond;
       $hotel->horario =$request->horario;
       $hotel->descuento =$request->descuento;
       $hotel->rif =$request->rif;
       $hotel->imagenes_hotel =$request->imagenes_hotel;
       $hotel->id_ciudad =$request->ciudad;
       $hotel->id_estado =$request->estado;
       $hotel->id_categoria =$request->categoria;


       $hotel->save();

       Session::flash('flash_message', 'El doctor ha sido registrado exitosamente!');

        return redirect()->back();*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
			$reservaHotel = ReservaHotel::all();
			$pruebahotel = PruebaHotel::where('id','=',$id)->get()->first();
        //$hotel = Hotel::all();
        // show the view and pass the nerd to it
        $ciudad = Ciudades::pluck('Nombre','id');
        $estado = estadoc::pluck('Nombre', 'id');
        $categoria = Categoria::pluck('tipo', 'idCategoria');
				$tiposerv = TipoServicios::pluck('tipo', 'id');
				$imagen = Imagen::pluck('nombre','id');
			
			 	$imagen = DB::table('t_imagenes')
            ->join('pruebahotel','pruebahotel.id', '=', 't_imagenes.id_Entidad')
           //LIMITAR LAS IMAGENES  /////////
            ->where('t_imagenes.id_Entidad', '=', $id)
            ->select('t_imagenes.*','t_imagenes.nombre as n')
           ->get();
			
				$tiposerv = DB::table('t_tipos_serv')
            ->join('pruebahotel','pruebahotel.id', '=', 't_tipos_serv.idEntidad')
						->join('n_tiposervicio','n_tiposervicio.id', '=', 't_tipos_serv.tipo')
           //LIMITAR LAS IMAGENES  /////////
            ->where('t_tipos_serv.idEntidad', '=', $id)
            ->select('n_tiposervicio.*')
           ->get();
			 
				
			
        return view('hoteles.show')->with('pruebahotel', $pruebahotel)->with('ciudad',$ciudad)->with('estado',$estado)->with('categoria', $categoria)->with('imagen', $imagen)->with('reservaHotel', $reservaHotel)->with('tiposerv', $tiposerv);
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
            ->join('pruebahotel','pruebahotel.id', '=', 'n_textos.idtablaEntidad')
              ->where('n_textos.tablaEntidad', '=', "pruebahotel")
            ->where('n_textos.idtablaEntidad', '=', "$id")
         
            ->select('n_textos.*')
           ->get(); 
				
	
			
			
			$imagen = DB::table('t_imagenes')
            ->join('pruebahotel','pruebahotel.id', '=', 't_imagenes.id_Entidad')
           //LIMITAR LAS IMAGENES  /////////
            ->where('t_imagenes.id_Entidad', '=', $id)
             ->where('t_imagenes.Tabla_entidad', '=', "pruebahotel")
            ->select('t_imagenes.*','t_imagenes.nombre as n')
           ->get();			
			$tiposerv = DB::table('n_tiposervicio')
						->join('t_tipos_serv','t_tipos_serv.tipo', '=', 'n_tiposervicio.id' )
            ->select('t_tipos_serv.*', 'n_tiposervicio.nombre as serv' , 'n_tiposervicio.img as imag')
            ->get();			
        /*$hotel = Hotel::where('idHoteles','=',$id)->get()->first();
        //$hotel = Hotel::all();
        // show the view and pass the nerd to it
        return view('hoteles.adminedit')->with('hotel', $hotel);*/      
       //$idHoteles = Hotel::all(); 
      
			$servicio = Servicio::all();
			  $pais = pais::all();
			  $estado = estadoc::all();
        $ciudad = Ciudades::all();
			  $zona = Zonas::all();
        $categoria = Categoria::all();
        $pruebahoteles = PruebaHotel::find($id);
      // $rest = Restaurant::where('idrestaurant', '=', $id)->get()->first();
        return view('hoteles.adminedit',compact('id','texto', 'servicio' ,'pais' , 'estado', 'ciudad', 'zona', 'tiposerv', 'tiposerid' , 'imagen'))->with('pruebahoteles',$pruebahoteles)->with('categoria', $categoria);

      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $requestsdf
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
	
	  $pruebahoteles = PruebaHotel::find($id);
      $pruebahoteles->nombre = $request->nombre;
      $pruebahoteles->direccion =  $request->direccion;
      $pruebahoteles->telefono =  $request->telefono;
	  $pruebahoteles->telefono2 = $request->telefono2;
      $pruebahoteles->descripcion =  $request->descripcion;
      $pruebahoteles->url =  $request->url;
      $pruebahoteles->correo = $request->correo;
    // $pruebahoteles->terminosCond =  $request->terminosCond;
      $pruebahoteles->horario =  $request->horario;
      $pruebahoteles->descuento =  $request->descuento;
      $pruebahoteles->rif =  $request->rif;
      $pruebahoteles->estrellas = $request->estrellas;
			$pruebahoteles->idpais = $request->txtpais;
			$pruebahoteles->id_estado = $request->idestado;
			$pruebahoteles->id_ciudad = $request->txtciudad;
			$pruebahoteles->id_zona = $request->txtzona;
			$pruebahoteles->facebook = $request->facebook;
            $pruebahoteles->instagram = $request->instagram;
            $pruebahoteles->twitter = $request->twitter;
            $pruebahoteles->categoria_hotel = $request->categoria;

			$pruebahoteles->google = $request->google;
            $pruebahoteles->youtube =  $request->youtube; 
			
			$pruebahoteles->img = $nombreimg;   
      $pruebahoteles->save();	
				$servicios	=  DB::table('t_tipos_serv')
			->where('idEntidad' ,'=', $id)
			->where('TablaEntidad' ,'=', 'pruebahotel')
			->delete();			
			//imagenesssssssssssssssssssssssssssss			
			// imagenessssssssssssssssssssssssssss			
			$cuenta = count($_POST['id-servicio']);
for ($i=0; $i < $cuenta ; $i++) { 
	$service = $_POST['id-servicio'][$i];
	$data =      array("tipo" => $service,
        "idEntidad"=> $id,
        "TablaEntidad"=>'pruebahotel',
        "lastUpdateTime"=>time(),
        "creationTime"=>time());

$registrar =  \App\TipoServicios::create(
       $data
				);

}
	
}else{
	
	
	     $pruebahoteles = PruebaHotel::find($id);
      $pruebahoteles->nombre = $request->nombre;
      $pruebahoteles->direccion =  $request->direccion;
       $pruebahoteles->telefono =  $request->telefono;
			 $pruebahoteles->telefono2 = $request->telefono2;
      $pruebahoteles->descripcion =  $request->descripcion;
      $pruebahoteles->url =  $request->url;
      $pruebahoteles->correo = $request->correo;
    // $pruebahoteles->terminosCond =  $request->terminosCond;
      $pruebahoteles->horario =  $request->horario;
      $pruebahoteles->descuento =  $request->descuento;
      $pruebahoteles->rif =  $request->rif;
			$pruebahoteles->idpais = $request->txtpais;
			$pruebahoteles->id_estado = $request->idestado;
			$pruebahoteles->id_ciudad = $request->txtciudad;
			$pruebahoteles->id_zona = $request->txtzona;
				$pruebahoteles->facebook = $request->facebook;
            $pruebahoteles->instagram = $request->instagram;
            $pruebahoteles->twitter = $request->twitter;
            $pruebahoteles->categoria_hotel = $request->categoria;
            
            	$pruebahoteles->google = $request->google;
            $pruebahoteles->youtube =  $request->youtube; 
		//	$pruebahoteles->img = $request->img;      
      $pruebahoteles->save();	
				$servicios	=  DB::table('t_tipos_serv')
			->where('idEntidad' ,'=', $id)
			->where('TablaEntidad' ,'=', 'pruebahotel')
			->delete();			
			//imagenesssssssssssssssssssssssssssss			
			// imagenessssssssssssssssssssssssssss			
			$cuenta = count($_POST['id-servicio']);
for ($i=0; $i < $cuenta ; $i++) { 
	$service = $_POST['id-servicio'][$i];
	$data =      array("tipo" => $service,
        "idEntidad"=> $id,
        "TablaEntidad"=>'pruebahotel',
        "lastUpdateTime"=>time(),
        "creationTime"=>time());

$registrar =  \App\TipoServicios::create(
       $data
				);

}
	
	
	
}
	
 
			
			
      
      return redirect('/detallehotel')->with('message', 'Actualización Exitosa');
       
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
	
	   public function serviciosedit($id)
		 {
			 
			 return "Estas fino en el método";
		 }
	
	
}
