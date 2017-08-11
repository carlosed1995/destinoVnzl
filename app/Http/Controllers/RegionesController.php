<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pais;
use App\Zonas;
use App\estadoc;
use App\Ciudades;
use App\Imagen;
use App\Tabla_entidad;
use App\Servicio;
use App\CategoriasRegiones;
use App\Categoria_entidades;
use DB;

class RegionesController extends Controller
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
       
   	$regiones = Categoria_entidades::orderBy('id' , 'ASC')->paginate(7);  
    return view('regiones.regiones_index')->with('regiones', $regiones);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        $tablaent = Tabla_entidad::all();
        $estado = estadoc::all();
      
  $ciudad = Ciudades::all();

        return view('regiones.create',  compact('estado', 'tablaent','ciudad'));
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $crear = Categoria_entidades::create(
        [
           'nombre' => $request['txtnombre'],
        'img'  => $_FILES['img']['name'], 
        'act'  =>1, 
          'id_tipo' => $request['chekk']
        ]);
     
      
      $idr = $crear->id;
      
      
       $cuenta = count($_POST['to']);
for ($i=0; $i < $cuenta ; $i++) { 
	$service = $_POST['to'][$i];
	$data =  array(
        "id_categoria"=> $idr,
        "id_ciudad"=>$service);
     

$registrar =  CategoriasRegiones::create(
       $data
				);
//$sql = "INSERT INTO t_tipos_serv (tipo, idEntidad, TablaEntidad) values ('$service', '$idH', 'pruebahotel')";
//$execute = mysqli_query($conexion, $sql);
}
			 
       $sizeimg = $_FILES['img']['size'];
			$tipo = $_FILES['img']['type'];
			
			$carpeta_dest =   $_SERVER["DOCUMENT_ROOT"] . "/public/imagenes/"; 

			
				$nombreimg = $_FILES['img']['name'];
			$nombreTemp = $_FILES['img']['tmp_name'];
				move_uploaded_file($nombreTemp, $carpeta_dest.$nombreimg);
        
      
      return redirect('/regiones')->with('message', 'registro exitoso');
    
      
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
