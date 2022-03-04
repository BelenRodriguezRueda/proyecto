<!DOCTYPE html>
<html>
<head>
	<title>Borrar</title>
	<style>
	  body {
  font-family: 'Open Sans';
  font-weight: 100;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

.active {
  background-color: blue;
}
</style>
</head>
<body>
	<ul>
  <li><a href="menuAdmin.php">Inicio</a></li>
  <li><a href="insertar.php" >Insertar</a></li>
  <li><a href="buscar.php" >Buscar</a></li>
  <li><a href="borrar.php" class="active">Borrar</a></li>
  <li><a href="usuarios.php">Ver usuarios</a></li>
  <li><a href="cambiar.php" >Cambiar contraseña</a></li>
  <li><a href="login.php">Cerrar sesión</a></li>
</ul>
<div>
<h2>Formulario para borrar</h2>
		<form action="" method="POST" >
			 <label for="borrado">Borrar</label>
				<input type="text" name="borrado" class="form-input" />
			    <input class="form-btn" name="borrar" type="submit" value="Borrar" /></br>
			    </form>
</div>

<?php
include ("cn.php");
if(isset($_POST['borrar'])){
    $borrado=$_POST['borrado'];
    $borradoAsir= "DELETE FROM asir WHERE NombreAlumno like '%$borrado';";
    $borradoDaw= "DELETE FROM daw WHERE NombreAlumno like '%$borrado';";
  
	//$resulborrado = mysqli_query($connection, $borrado2);
	$bAsir=mysqli_query($connection, $borradoAsir);
	$bDaw=mysqli_query($connection, $borradoDaw);
	if( $bAsir||$bDaw  ){
	// while($row=mysqli_fetch_assoc($resulborrado)) {
		echo "Se ha borrado con éxito";
	} else {
		echo "No se ha podido borrar";
	}
	//	echo "Nombre Alumno: " .$row["NombreAlumno"]. "</br>";
	//	echo "Apellidos Alumno: " .$row["ApellidosAlumno"]. "</br>";
	//	echo "Titulo del Proyecto: " .$row["TituloProyecto"]. "</br>";
	//	echo "Profesor Titular: " .$row["ProfesorTitular"]. "</br>";
	//	echo "Fecha de Comienzo: " .$row["FechaComienza"]. "</br>";
	//	echo "Fecha de Fin: " .$row["FechaFin"]. "</br>";
	//	echo "Nota: " .$row["Nota"]. "</br>";
}
//} else {
	//echo "No se ha podido borrar";
//}


?>
</body>
</html>
