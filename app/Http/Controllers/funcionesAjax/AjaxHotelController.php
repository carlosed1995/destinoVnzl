<?php
$user=$_POST['user'];
$idEntidad=$_POST['idEntidad'];

        [  'id_user' => $request['user'],
        'id_Hotel'  => $request['idEntidad'], 
				 
				 
$host = '127.0.0.1';
$dbname = 'destinosdb';
$dbuser = 'loyalfee_sys';
$dbcontra = 'S1st3m4L0y4lf33l';
$conexion = mysqli_connect($host, $dbuser, $dbcontra);

if (mysqli_connect_errno()) {
	echo "Fallo al conectar";
	exit();
}

mysqli_select_db($conexion, $dbname) or die ('no se encuentra la base de datos');


	


$sql = "INSERT INTO t_reserva_hotel (id_user,id_Hotel) values ('$user','$idEntidad')";
$execute = mysqli_query($conexion, $sql);

		 
				 
				 
?>