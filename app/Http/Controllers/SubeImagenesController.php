<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Restaurant;
use Session;
use Redirect;
use App\Imagen;
use App\Servicio;

class SubeImagenesController extends Controller
{
    
  
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
        "Tabla_entidad"=>'t_restaurante');                                                                             //aqui se captura el id del hotel

$registrar =  \App\Imagen::create(
       $data
				);	
	
	
move_uploaded_file( $nombreTemp, $carpeta_dest.$nombreimg);
	
	
	

}
					 
			
      
          return   redirect('/restaurantAdmin')->with('message', 'Actualización exitosa');

				 }else{
					 
					 return   redirect('/restaurantAdmin')->with('message-error', 'Ocurrio un error al cargar la imagen, intenta de nuevo');
				 }
		
		}
  
  
}





 
  









