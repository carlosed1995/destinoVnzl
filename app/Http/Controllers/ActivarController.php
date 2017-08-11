<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\PruebaHotel;
use App\DiversionR;
use Auth;

class ActivarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
         function rand_code($chars, $long){
    $code = "";
    for ($x=0; $x <= $long; $x++)
    {
    $rand = rand(1, strlen($chars));
    $code .= substr($chars, $rand, 1);
    }
    return $code;
    }
    $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    $longitud = 5;
    $codigo = rand_code($caracteres, $longitud); 
    $sql = "HTL-$codigo";     
      
       $reserva = DiversionR::find($request->idReservaHtl);
   $reserva->nombre = Auth::user()->name;
      $reserva->apellidos =  Auth::user()->apellido;
        $reserva->documento =  Auth::user()->cedula;
        $reserva->telefono_cel = Auth::user()->telefono_movil;
        $reserva->telefono_fijo =  $request->telefono2;
      $reserva->fecha_inicial =  $request->fechaini;
      $reserva->fecha_final =  $request->fechafin;
       
     $reserva->correo_client =  Auth::user()->email;
		  $reserva->direccion = $request->direccion;
        $reserva->nombre_div =  $request->nombre_div;
      
			 $reserva->comentarios = $request->comentarios;
      $reserva->localizadorClient = $sql;            
        $reserva->save();
      
        return redirect()->back()->with('message', 'Su reserva ha sido enviada exitosamente');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
    $ajuste = PruebaHotel::find($id);
    $ajuste->act = 1;
    $ajuste->save(); 
     return redirect()->back();
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $ajuste = PruebaHotel::find($id);
    $ajuste->act = '0';
    $ajuste->save(); 
     return redirect()->back();
   
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


$tipo = $_FILES['imgt']['type'];
$sizeimg = $_FILES['imgt']['size'];
$cuenta = count($_FILES['img']['name']);
for ($i=0; $i < $cuenta ; $i++) { 

$nombreimg = $_FILES['imgt']['name'][$i];
//ruta de la carpeta del servidor
$nombreTemp = $_FILES['imgt']['tmp_name'][$i];
//mover la img del directorio temporal al directorio elegido
$carpeta_dest =   $_SERVER["DOCUMENT_ROOT"] . "/public/imagenes/"; 
	
	
	
	$dataimg =  array("tipo" => $service,
        "nombre"=> $nombreimg,
        "id_Entidad"=> $id,
        "Tabla_entidad"=>'pruebahotel',);
	
	$registra =  \App\Imagen::create(
       $dataimg
				);
   
move_uploaded_file( $nombreTemp, $carpeta_dest.$nombreimg);

}
      
          return   redirect('/detallehotel')->with('message', 'Imagenes Cargadas Exitosamente');

			
			
      
      
      
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
