<?php
	$user = "root";
	$pass = "";
	$host = "localhost";
	$datab = "ProyectosFinFP";
	$connection = @mysqli_connect($host,$user,$pass,$datab); //El @ es para omitir el error 

//if(!$connection) {
	//echo "No se ha podido conectar con el servidor" .mysql_error(); Versión antigüa
	//echo "No se ha podido conectar con el servidor" .mysqli_error($connection); Error después de la conexión
//	echo "No se ha podido conectar con el servidor <br>" .mysqli_connect_error() ."<br>"; //Error para la conexión
//} else {
//	echo "Hemos conectado al servidor <br>";
//}
	//$db = @mysqli_select_db($connection, $datab);
//if(!$db){
//	echo "No se ha podido encontrar la base de datos <br>" .@mysqli_error($connection);
//} else {
//	echo "BBDD seleccionada";
//}
?>