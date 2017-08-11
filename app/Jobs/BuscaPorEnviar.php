<?php
// echo "ok";
function busca(){
 
$host = '127.0.0.1';
$dbname = 'destinosdb';
$dbuser = 'loyalfee_sys';
$dbcontra = 'S1st3m4L0y4lf33l';
$conn = new mysqli($host, $dbuser, $dbcontra, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$de="no-reply@tudestinovenezuela.com";
$cb_smtp="smtp.1and1.com";
$cb_passsmtp="Loyalfeel2014";
$emailEmpresa="reservas@tudestinovenezuela.com";

   /*************************HOTELES******************************/ 
  
$idContentCliente="1";
$idContentEmpresa="2";
  unset($vectorEmail);
  unset($insertIntoEnvioEmail);
$sql = "SELECT
content_emails.id_content,
content_emails.Asunto,
content_emails.content,
plantillas_emails.plantilla,
plantillas_emails.id_plantilla
FROM
content_emails
INNER JOIN plantillas_emails ON content_emails.id_plantilla = plantillas_emails.id_plantilla
WHERE
content_emails.ON_OFF = 1 AND
plantillas_emails.ON_OFF = 1 and content_emails.id_content in (".$idContentCliente.",".$idContentEmpresa.")";
$resultPlantilla = $conn->query($sql);

if ($resultPlantilla->num_rows > 0) {

    while($rowP = $resultPlantilla->fetch_assoc()) {
      extract($rowP);
      $vectorEmail[$id_content]->id_plantilla=$id_plantilla;
      $vectorEmail[$id_content]->Asunto=$Asunto;
      $vectorEmail[$id_content]->Plantilla=$plantilla;
      $vectorEmail[$id_content]->Contenido=$content;
      
    }

}




$datetime=date('Y-m-d H:i:s');
$date=substr($datetime, 0, 10);
$time=substr($datetime, -8);
$update1="Update `t_reserva_hotel` set procesamiento=1,fechaHoraProcesamiento='".$datetime."' where localizadorClient<>'' and procesamiento=0;";
$update2="Update `t_reserva_hotel` set procesamiento=2 where localizadorClient<>'' and procesamiento=1 and  fechaHoraProcesamiento='".$datetime."';";


if ($conn->query($update1) === TRUE) {
  $sql = "SELECT * FROM t_reserva_hotel where procesamiento=1 and fechaHoraProcesamiento='".$datetime."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
  
    while($row = $result->fetch_assoc()) {
     
      $tempCuerpoCliente=str_replace("[CONTENT]",$vectorEmail[$idContentCliente]->Contenido,$vectorEmail[$idContentCliente]->Plantilla);
      $tempCuerpoEmpresa=str_replace("[CONTENT]",$vectorEmail[$idContentEmpresa]->Contenido,$vectorEmail[$idContentEmpresa]->Plantilla);
      $tempAsustoCliente=$vectorEmail[$idContentCliente]->Asunto;
      $tempAsustoEmpresa=$vectorEmail[$idContentEmpresa]->Asunto;
      foreach($row as $nom=>$valor){
        
        $tempCuerpoCliente=str_replace("[".$nom."]", $valor, $tempCuerpoCliente);
        $tempCuerpoEmpresa=str_replace("[".$nom."]", $valor, $tempCuerpoEmpresa);
        $tempAsustoCliente=str_replace("[".$nom."]", $valor, $tempAsustoCliente);
        $tempAsustoEmpresa=str_replace("[".$nom."]", $valor, $tempAsustoEmpresa);
          
      }
      $insertIntoEnvioEmail[]="insert into envioEmail (id_user,id_content,id_plantilla,tabla,id_tabla,de,cb_smtp,cb_passsmtp,para,asunto,cuerpo,id_user_reg,fecha_envio,hora_envio) Values ('".$row['id_user']."','".$idContentCliente."','".$vectorEmail[$idContentCliente]->id_plantilla."','t_reserva_hotel','".$row['id']."','".$de."','".$cb_smtp."','".$cb_passsmtp."','".$row['correo']."','".$tempAsustoCliente."','".$tempCuerpoCliente."',17,'".$date."','".$time."')";
      $insertIntoEnvioEmail[]="insert into envioEmail (id_user,id_content,id_plantilla,tabla,id_tabla,de,cb_smtp,cb_passsmtp,para,asunto,cuerpo,id_user_reg,fecha_envio,hora_envio) Values ('".$row['id_user']."','".$idContentEmpresa."','".$vectorEmail[$idContentEmpresa]->id_plantilla."','t_reserva_hotel','".$row['id']."','".$de."','".$cb_smtp."','".$cb_passsmtp."','".$emailEmpresa."','".$tempAsustoEmpresa."','".$tempCuerpoEmpresa."',17,'".$date."','".$time."')";
      
    }

}
  
  
  
}

foreach($insertIntoEnvioEmail as $insert){
  
  $conn->query($insert);
  
}

$conn->query($update2);


//$conn->close();
  
 /*************************RESTAURANTES******************************/ 
  $idContentCliente="3";
$idContentEmpresa="4";
  unset($vectorEmail);
  unset($insertIntoEnvioEmail);
$sql = "SELECT
content_emails.id_content,
content_emails.Asunto,
content_emails.content,
plantillas_emails.plantilla,
plantillas_emails.id_plantilla
FROM
content_emails
INNER JOIN plantillas_emails ON content_emails.id_plantilla = plantillas_emails.id_plantilla
WHERE
content_emails.ON_OFF = 1 AND
plantillas_emails.ON_OFF = 1 and content_emails.id_content in (".$idContentCliente.",".$idContentEmpresa.")";
$resultPlantilla = $conn->query($sql);

if ($resultPlantilla->num_rows > 0) {

    while($rowP = $resultPlantilla->fetch_assoc()) {
      extract($rowP);
      $vectorEmail[$id_content]->id_plantilla=$id_plantilla;
      $vectorEmail[$id_content]->Asunto=$Asunto;
      $vectorEmail[$id_content]->Plantilla=$plantilla;
      $vectorEmail[$id_content]->Contenido=$content;
      
    }

}




$datetime=date('Y-m-d H:i:s');
$date=substr($datetime, 0, 10);
$time=substr($datetime, -8);
$update1="Update `t_reserva_rest` set procesamiento=1,fechaHoraProcesamiento='".$datetime."' where localizadorClient<>'' and procesamiento=0;";
$update2="Update `t_reserva_rest` set procesamiento=2 where localizadorClient<>'' and procesamiento=1 and  fechaHoraProcesamiento='".$datetime."';";


if ($conn->query($update1) === TRUE) {
  $sql = "SELECT * FROM t_reserva_rest where procesamiento=1 and fechaHoraProcesamiento='".$datetime."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
  
    while($row = $result->fetch_assoc()) {
     
      $tempCuerpoCliente=str_replace("[CONTENT]",$vectorEmail[$idContentCliente]->Contenido,$vectorEmail[$idContentCliente]->Plantilla);
      $tempCuerpoEmpresa=str_replace("[CONTENT]",$vectorEmail[$idContentEmpresa]->Contenido,$vectorEmail[$idContentEmpresa]->Plantilla);
      $tempAsustoCliente=$vectorEmail[$idContentCliente]->Asunto;
      $tempAsustoEmpresa=$vectorEmail[$idContentEmpresa]->Asunto;
      foreach($row as $nom=>$valor){
        
        $tempCuerpoCliente=str_replace("[".$nom."]", $valor, $tempCuerpoCliente);
        $tempCuerpoEmpresa=str_replace("[".$nom."]", $valor, $tempCuerpoEmpresa);
        $tempAsustoCliente=str_replace("[".$nom."]", $valor, $tempAsustoCliente);
        $tempAsustoEmpresa=str_replace("[".$nom."]", $valor, $tempAsustoEmpresa);
          
      }
      $insertIntoEnvioEmail[]="insert into envioEmail (id_user,id_content,id_plantilla,tabla,id_tabla,de,cb_smtp,cb_passsmtp,para,asunto,cuerpo,id_user_reg,fecha_envio,hora_envio) Values ('".$row['id_user']."','".$idContentCliente."','".$vectorEmail[$idContentCliente]->id_plantilla."','t_reserva_rest','".$row['id']."','".$de."','".$cb_smtp."','".$cb_passsmtp."','".$row['correo']."','".$tempAsustoCliente."','".$tempCuerpoCliente."',17,'".$date."','".$time."')";
      $insertIntoEnvioEmail[]="insert into envioEmail (id_user,id_content,id_plantilla,tabla,id_tabla,de,cb_smtp,cb_passsmtp,para,asunto,cuerpo,id_user_reg,fecha_envio,hora_envio) Values ('".$row['id_user']."','".$idContentEmpresa."','".$vectorEmail[$idContentEmpresa]->id_plantilla."','t_reserva_rest','".$row['id']."','".$de."','".$cb_smtp."','".$cb_passsmtp."','".$emailEmpresa."','".$tempAsustoEmpresa."','".$tempCuerpoEmpresa."',17,'".$date."','".$time."')";
      
    }

}
  
  
  
}

foreach($insertIntoEnvioEmail as $insert){
  
  $conn->query($insert);
  
}

$conn->query($update2);


   /*************************TU DESTINO*****************************/
  
   /*************************PLANES UNICOS**************************/
  
   /*************************DIVERSION******************************/
   
   /*************************CONTACTO*******************************/

$conn->close();
  
//echo "Listo ".$datetime;
}
?>