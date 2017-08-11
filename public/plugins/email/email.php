<?php

//require_once('PHPMailer/class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
/*error_reporting(E_ALL);
ini_set("display_errors", 1);*/
set_time_limit(0);
require_once('lib/nusoap.php');
include ("html2text.inc");

function htmlentities2unicodeentities ($input) { 
  $htmlEntities = array_values (get_html_translation_table (HTML_ENTITIES, ENT_QUOTES)); 
  $entitiesDecoded = array_keys   (get_html_translation_table (HTML_ENTITIES, ENT_QUOTES)); 
  $num = count ($entitiesDecoded); 
 
  return str_replace ($htmlEntities, $entitiesDecoded, $input); 
} 


function f_enviarEmail($smtp,$de,$nombre_de,$pass_de,$para,$cc,$cco,$asunto,$cuerpo,$adjuntos){
$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
//echo $cuerpo;
$mail->IsSMTP(); // telling the class to use SMTP

try {
//$smtp       = "smtpout.secureserver.net"; // SMTP server
$mail->Host = 'ssl://'.$smtp;
//echo $mail->Host;
$mail->Port = 465;
	$mail->Mailer = "smtp";

 // $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->Username   = $de; // SMTP account username
  $dominio=explode("@", $de);
  $mail->Helo		= $dominio[1];
  $mail->Password   = $pass_de;        // SMTP account password
  //$mail->AddReplyTo('atencionalcliente@tuseguro.com', 'Tuseguro.com');
	
  foreach ($para[0] as $id=>$email){
  //echo $id." ".$email."<br>";
	  if(trim($email)!=""){
	  $mail->AddAddress($email, '');
	  }
  }
  
  foreach ($cc[0] as $id=>$email){
  //echo $id." ".$email."<br>";
	  if(trim($email)!=""){
	  $mail->AddCC($email, '');
	  }
  }
  
  foreach ($cco[0] as $id=>$email){
  //echo $id." ".$email."<br>";
	  if(trim($email)!=""){
	  $mail->AddBCC($email, '');
	  }
  }
  //$mail->AddBCC('bernardo.montell2002@gmail.com', 'Bernardo 1 Hora');
  
	
			  foreach ($adjuntos[0] as $id=>$email){
			  if(strlen($email)>0){
			  $ar="";
			  $ar2="";
			  $emailx="=?UTF-8?B?".base64_encode($email)."?=";
			$ar="../../adjuntos/".$email;
            $ar2=substr($email, 14, strlen($email));
			//echo $ar."<br><br>".$ar2."<br>".strlen($email);
  			 $mail->AddAttachment($ar,"=?UTF-8?B?".base64_encode($ar2)."?=" );
			  }
			}
 
//  exit();
  
  
  $mail->SetFrom($de, $nombre_de);
//  $mail->ConfirmReadingTo($de);
  //$mail->AddReplyTo('name@yourdomain.com', 'First Last');
  
  $mail->Subject = $asunto;
  $htmlToText = new Html2Text ($cuerpo, 80);
    $alternativo = $htmlToText->convert();
	$alternativo= htmlentities2unicodeentities(str_replace('&nbsp;','',$alternativo));
  $mail->AltBody = $alternativo.'Si no ve la Informacion por favor permita la visualizacion de las imagenes bloqueadas por el proveedor de correo'; // optional - MsgHTML will create an alternate automatically
  
  $mail->MsgHTML($cuerpo);
  //$mail->MsgHTML('hola mundo');
  //$mail->AddAttachment('logo.jpg');      // attachment
  
 // $mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
  if($mail->Send()){
  	return 1;
  }
  
  
 // echo "Message Sent OK<p></p>\n";
} catch (phpmailerException $e) {
  return "phpmailer ".$e->errorMessage()." "; //Pretty error messages from PHPMailer
} catch (Exception $e) {
  return "otro ".$e->getMessage()." "; //Boring error messages from anything else!
}
   
  
   
   //return 1;
} 
   
   
function f_enviarEmail_gateway($smtp,$de,$nombre_de,$pass_de,$para,$cc,$cco,$asunto,$cuerpo,$adjuntos){
	  
$client = new nusoap_client('http://www.radarsystems.net/wsemail/index.php?wsdl', true);
// Checkear errores
$err = $client->getError();
if ($err) {
// mostrar error
return '<h2>Error constructor</h2><pre>' . $err . '</pre>';
}

echo "<pre>"; print_r($para); echo "</pre>";

foreach($para as $email=>$emailxx){
	
	foreach($emailxx as $ex){
		
		//echo "EMAIL: ".$ex;
		if(($ex<>'') and (!is_null($ex))){

			$paramsEmail = array(
			'securekey' => 'BeAZXRc3QJAR9Mz8pP2ZUfFfFFkVcTRqYnHi8BNrPE2',
			'fromid' => $result[0]['RemitenteId'],
			'toname' => $ex,
			'tomail' => $ex,
			'emailsubject' => $asunto,
			'emailpriority' => '3',
			'charset' => 'utf-8',
			'encoding' => 'quoted-printable',
			'emailbody' => $cuerpo
			);
			
			$resultEmail = $client->call('RSSendMail', $paramsEmail);
			
		}//end if
		
		//echo "<pre>"; print_r($resultEmail); echo "</pre>";	
		
	}//end foreach emailxx
	
}//end foreach para

foreach($cc as $email=>$emailxx){
	foreach($emailxx as $ex){
		
		//echo "CC: ".$ex;
		
		if(($ex<>'') and (!is_null($ex))){
			
			$paramsEmail = array(
			'securekey' => 'BeAZXRc3QJAR9Mz8pP2ZUfFfFFkVcTRqYnHi8BNrPE2',
			'fromid' => $result[0]['RemitenteId'],
			'toname' => $ex,
			'tomail' => $ex,
			'emailsubject' => $asunto,
			'emailpriority' => '3',
			'charset' => 'utf-8',
			'encoding' => 'quoted-printable',
			'emailbody' => $cuerpo
			);
			
			$resultEmail = $client->call('RSSendMail', $paramsEmail);	
			
		}//end if
		
		
	}//end foreach emailxx
}//end foreach cc
 
foreach($cco as $email=>$emailxx){
	foreach($emailxx as $ex){
		
		//echo "CCO: ".$ex;
		
		if(($ex<>'') and (!is_null($ex))){
			
			$paramsEmail = array(
			'securekey' => 'BeAZXRc3QJAR9Mz8pP2ZUfFfFFkVcTRqYnHi8BNrPE2',
			'fromid' => $result[0]['RemitenteId'],
			'toname' => $ex,
			'tomail' => $ex,
			'emailsubject' => $asunto,
			'emailpriority' => '3',
			'charset' => 'utf-8',
			'encoding' => 'quoted-printable',
			'emailbody' => $cuerpo
			);
			
			$resultEmail = $client->call('RSSendMail', $paramsEmail);	
			
		}//end if
	}//end foreach emailxx
}//end foreach cco
 
	return $resultEmail[0]["emailstatus"];
	  
}//end function gateway
   
   
   
   //echo "hola";
?>