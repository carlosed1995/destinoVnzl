<?php
/*error_reporting(E_ALL);
ini_set('error_reporting',E_ALL);

ini_set('display_errors',1);

ini_set('display_startup_errors', 1);*/



if(isset($_GET['id']) && ($_GET['id']<>'') ){
$host = '127.0.0.1';
$dbname = 'destinosdb';
$dbuser = 'loyalfee_sys';
$dbcontra = 'S1st3m4L0y4lf33l';
$conn = new mysqli($host, $dbuser, $dbcontra, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$query="Update envioEmail set leido=if(leido is null,1,(leido+1)), comentario=concat('leido en ',NOW()) where id_envioEmail='".$_GET['id']."' and ON_OFF=1 ";
//echo $query;
//exit();
$conn->query($query);
$conn->close();
}
header ("Location: ".$_GET['imagen']."");
?>