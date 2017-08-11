<?php
/*error_reporting(E_ALL);
ini_set('error_reporting',E_ALL);

ini_set('display_errors',1);

ini_set('display_startup_errors', 1);*/


require_once('PHPMailer/class.phpmailer.php');

include_once("email.php");

include_once("../../../app/Jobs/BuscaPorEnviar.php");



function Sustituto_Cadena($rb){ 

        ## Sustituyo caracteres en la cadena final

        $rb = str_replace("á", "&aacute;", $rb);

        $rb = str_replace("é", "&eacute;", $rb);

        $rb = str_replace("®", "&reg;", $rb);

        $rb = str_replace("í", "&iacute;", $rb);

        $rb = str_replace("�", "&iacute;", $rb);

        $rb = str_replace("ó", "&oacute;", $rb);

        $rb = str_replace("ú", "&uacute;", $rb);

        $rb = str_replace("n~", "&ntilde;", $rb);

        $rb = str_replace("º", "&ordm;", $rb);

        $rb = str_replace("ª", "&ordf;", $rb);

        $rb = str_replace("Ã¡", "&aacute;", $rb);

        $rb = str_replace("ñ", "&ntilde;", $rb);

        $rb = str_replace("Ñ", "&Ntilde;", $rb);

        $rb = str_replace("Ã±", "&ntilde;", $rb);

        $rb = str_replace("n~", "&ntilde;", $rb);

        $rb = str_replace("Ú", "&Uacute;", $rb);

        return $rb;

    }  

$respuestaxxx=busca();



//echo f_enviarEmail('a','b','c','d',$para,'f','g');



$fecha=date("Y-m-d");

$hora=date("H:i:s");

$fechax=date("Y-m-d");

$horax=date("H:i:s");
$ayer=date('Y-m-d', strtotime('yesterday'));


$host = '127.0.0.1';
$dbname = 'destinosdb';
$dbuser = 'loyalfee_sys';
$dbcontra = 'S1st3m4L0y4lf33l';
$conn = new mysqli($host, $dbuser, $dbcontra, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



//$sql="UPDATE  envioEmail set cb_smtp='mail.tuseguro.com', envios=0 where estatus in ('68','71')  and ON_OFF=1 and cb_smtp='ssl.ventasdevenezuela.com' and id_envioEmail>=84570";

//echo $sql."<br>";





//	$consulta=$obj->consulta($sql);





$sql="UPDATE  envioEmail set estatus='69', comentario='Enviando ".$fecha." ".$hora."',cuerpo=REPLACE(cuerpo,'[id_envioEmail]',id_envioEmail) where ((estatus in ('68','71') and envios < 5) or (estatus in ('69') and envios < 5 and comentario like 'Enviando ".$ayer."%'))  and ON_OFF=1 limit 50";

$conn->query($sql);


	//$consulta=$obj->consulta($sql);
$sql_aud="INSERT INTO aud_envioEmail (id_envioEmail,
id_prospecto,
id_content_email,
de,
cb_smtp,
cb_passsmtp,
para,
cc,
cco,
asunto,
cuerpo,
id_usuario_reg,
comentario,
leido,
envios,
fecha_envio,
hora_envio,
estatus,
ON_OFF,
adjuntos
)  SELECT id_envioEmail,
id_prospecto,
id_content_email,
de,
cb_smtp,
cb_passsmtp,
para,
cc,
cco,
asunto,
cuerpo,
id_usuario_reg,
comentario,
leido,
envios,
fecha_envio,
hora_envio,
estatus,
ON_OFF,
adjuntos
 from envioEmail where estatus=69 and ON_OFF=1 and comentario='Enviando ".$fecha." ".$hora."'";
//echo $sql_aud."<br>";

	//$conn->query($sql_aud);


	//echo "<br> afectados=".$obj->getAffect($consulta);

$sql_envio="select *  from envioEmail  where estatus=69 and comentario='Enviando ".$fecha." ".$hora."' and ON_OFF=1";

//echo $sql_envio."<br>";






$sqlxx="";

//$obj3 = new Mysql();
$consulta_envio = $conn->query($sql_envio);


    // output data of each row
  
    while($row = $consulta_envio->fetch_assoc()) {


		$nombre_de="Tu Destino Venezuela";

		unset($para);

		unset($cc);

		unset($cco);

		unset($adj);

		$para[]=explode(';',$row['para']);

		

		if(strlen(trim($row['cc']))>0){

			$cc[]=explode(';',$row['cc']);

		}

		

		if(strlen(trim($row['cco']))>0){

			$cco[]=explode(';',$row['cco']);

		}

		if(strlen(trim($row['adjuntos']))>0){

			$adj[]=explode(';',$row['adjuntos']);

		}

		

		$cuerpo=Sustituto_Cadena(html_entity_decode(stripslashes($row['cuerpo'])));

		//str_replace('\$id_envioEmail',$row['id_envioEmail'],$cuerpo);



		//if($row['cb_smtp'] == 'gateway'){

			

		//$respuesta = f_enviarEmail_gateway($row['cb_smtp'],$row['de'],$nombre_de,$row['cb_passsmtp'],$para,$cc,$cco,$row['asunto'],$cuerpo,$adj);

			

		//}else{

			$tmp_asunto="=?UTF-8?B?".base64_encode($row['asunto'])."?=";

			$respuesta = f_enviarEmail($row['cb_smtp'],$row['de'],$nombre_de,$row['cb_passsmtp'],$para,$cc,$cco,$tmp_asunto,$cuerpo,$adj);

		

		//}

		

		//echo $row['cb_smtp'],$row['de'],$obj_user->getNombre(),$row['cb_passsmtp'],$para,$cc,$cco,$row['asunto'],$row['cuerpo'];

		echo "<br>respuesta=".$respuesta."<br>";

		if($respuesta==1){

			$comentario="Correo Enviado id:".$row['id_envioEmail']." ".$fecha." ".$hora;

			

			$sqlxx="UPDATE envioEmail set estatus=70, fecha_envio='$fecha', hora_envio='$hora', envios=envios + 1, comentario='".str_replace( array("\n", "\r", "\r\n", "\n\r", chr(30), chr(155), PHP_EOL), '', Sustituto_Cadena(html_entity_decode(stripslashes($comentario))))."' where id_envioEmail='".$row['id_envioEmail']."';";

			$conn->query($sqlxx);
		//$consulta_envio_ok=$obj3->consulta($sqlxx);

		$sql_aud="INSERT INTO aud_envioEmail (id_envioEmail,
id_prospecto,
id_content_email,
de,
cb_smtp,
cb_passsmtp,
para,
cc,
cco,
asunto,
cuerpo,
id_usuario_reg,
comentario,
leido,
envios,
fecha_envio,
hora_envio,
estatus,
ON_OFF,
adjuntos
)  SELECT id_envioEmail,
id_prospecto,
id_content_email,
de,
cb_smtp,
cb_passsmtp,
para,
cc,
cco,
asunto,
cuerpo,
id_usuario_reg,
comentario,
leido,
envios,
fecha_envio,
hora_envio,
estatus,
ON_OFF,
adjuntos
 from envioEmail where id_envioEmail='".$row['id_envioEmail']."'";
//echo $sql_aud."<br>";

	//$consulta=$obj->consulta($sql_aud);
$conn->query($sql_aud);
			

			//echo $comentario;

		}else{

			

			$comentario="Error envio correo id:".$row['id_envioEmail']." ".$fechax." ".$horax." con error = ".addslashes($respuesta);

			

			$sqlxx=" UPDATE envioEmail set estatus=71, envios=envios + 1, comentario='".str_replace( array("\n", "\r", "\r\n", "\n\r", chr(30), chr(155), PHP_EOL), '', Sustituto_Cadena(html_entity_decode(stripslashes($comentario))))."' where id_envioEmail='".$row['id_envioEmail']."';";

			echo $sqlxx."<br>";
			
$conn->query($sqlxx);
		//$consulta_envio_ok=$obj3->consulta($sqlxx);

		$sql_aud="INSERT INTO aud_envioEmail (id_envioEmail,
id_prospecto,
id_content_email,
de,
cb_smtp,
cb_passsmtp,
para,
cc,
cco,
asunto,
cuerpo,
id_usuario_reg,
comentario,
leido,
envios,
fecha_envio,
hora_envio,
estatus,
ON_OFF,
adjuntos
)  SELECT id_envioEmail,
id_prospecto,
id_content_email,
de,
cb_smtp,
cb_passsmtp,
para,
cc,
cco,
asunto,
cuerpo,
id_usuario_reg,
comentario,
leido,
envios,
fecha_envio,
hora_envio,
estatus,
ON_OFF,
adjuntos
 from envioEmail where id_envioEmail='".$row['id_envioEmail']."'";
//echo $sql_aud."<br>";

	//$consulta=$obj->consulta($sql_aud);
$conn->query($sql_aud);
			

			//echo "<br>".$sqlx;

			

			

		//echo $comentario;

		}

		

			

	}

//$obj3->Close('X');

//$obj->Close('X');





$conn->close();
echo "<br><br>Listo ".$datetime;



?>
