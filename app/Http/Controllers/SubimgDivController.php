<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Parques;

class SubimgDivController extends Controller
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
  public function create(Request $request)
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
        
if ($request->hasFile('img') != null){
  
    $imagens = $_POST['id_hotel'];
$tipo = $_FILES['img']['type'];
$sizeimg = $_FILES['img']['size'];

 $cuenta = count($_FILES['img']['name']);


for ($i=0; $i < $cuenta ; $i++) { 

$nombreimg = date('YmdHis').'_'.$_FILES['img']['name'][$i];
//ruta de la carpeta del servidor
$nombreTemp = $_FILES['img']['tmp_name'][$i];
//mover la img del directorio temporal al directorio elegido
$carpeta_dest =   $_SERVER["DOCUMENT_ROOT"] . "/public/imagenes/"; 
            $data =      array("nombre" => $nombreimg,
        "id_Entidad"=> $imagens,
        "Tabla_entidad"=>'t_diversion');                                                                             //aqui se captura el id del hotel

$registrar =  \App\Imagen::create(
       $data
				);	
	
	
move_uploaded_file( $nombreTemp, $carpeta_dest.$nombreimg);
	
	
	

}
					 
			
      
          return   redirect('/parques')->with('message', 'Imagenes cargadas correctamente');

				 }else{
					 
					 return   redirect('/parques')->with('message-error', 'Ocurrio un error al cargar la imagen, intenta de nuevo');
				 }
		
 
    }
    
    
     

    
    

  
}
