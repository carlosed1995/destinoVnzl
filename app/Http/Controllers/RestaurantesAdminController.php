<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Estado as Estado;
use App\Ciudad as Ciudad;
use App\Especialidad as Especialidad;
use App\Restaurant;
use Session;
use Redirect;
use App\Imagen;

class RestaurantesAdminController extends Controller
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
       /* $rests = Restaurant::All();
      return view('usuario.Restindex', compact('rests'));*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 

 /* \App\Restaurant::create(
        [  'nombre' => $request['txtnombre'],
         'direccion'  => $request['txtdireccion'], 
          'url'  =>$request['txturl'], 
          'horario'  => $request['txthorario'], 
          'descripcion'  => $request['txtdescripcion'], 
          'sugerencias'  => $request['txtsugerencia'], 
          'descuentos'  => $request['txtdescuento'], 
          'rif'  => $request['txtrif'], 
          'id_estado1'  => $request['estado'], 
          'id_ciudad1'  => $request['ciudad'], 
          'id_especialidad1'  => $request['especialidad'], 
       
          ]
            );
    // bcrypt(sirve para encriptar)
    return   redirect('/RegistrarRestaurant')->with('message', 'Registro Exitoso');

*/

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
			$rest = Restaurant::find($id);
        return view('usuario.Agregaimg', compact('idrestaurant'))->with('rest',$rest);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         //$rests = Restaurant::find();
       // $rest = Restaurant::find($id);
     // return view('usuario.Agregaimg', compact('idrestaurant'))->with('rest',$rest);
      
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
  $rest = Restaurant::find($id);     

$tipo = $_FILES['img']['type'];
$sizeimg = $_FILES['img']['size'];

$host = '127.0.0.1';
$dbname = 'destinosdb';
$dbuser = 'loyalfee_sys';
$dbcontra = 'S1st3m4L0y4lf33l';
 $cuenta = count($_FILES['img']['name']);
$conexion = mysqli_connect($host, $dbuser, $dbcontra);

if (mysqli_connect_errno()) {
	echo "Fallo al conectar";
	exit();
}

mysqli_select_db($conexion, $dbname) or die ('no se encuentra la base de datos');

	
for ($i=0; $i < $cuenta ; $i++) { 

$nombreimg = $_FILES['img']['name'][$i];
//ruta de la carpeta del servidor
$nombreTemp = $_FILES['img']['tmp_name'][$i];
//mover la img del directorio temporal al directorio elegido
$carpeta_dest =   $_SERVER["DOCUMENT_ROOT"] . "/public/imagenes/"; 

$sql = "INSERT INTO t_imagenes (nombre, img_rest) values ('$nombreimg', '$rest->id')";
$execute = mysqli_query($conexion, $sql);

move_uploaded_file( $nombreTemp, $carpeta_dest.$nombreimg);

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
      $imagen = Imagen::Find($id);
    	$imagen->delete();
    	return redirect()->back();
    }
  
  public function actualizar(Request $request, $id){
  
  }
}

