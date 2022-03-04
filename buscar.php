<!DOCTYPE html>
<html>
<head>
	<title>Buscar</title>
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
  <li><a href="buscar.php" class="active">Buscar</a></li>
  <li><a href="borrar.php">Borrar</a></li>
  <li><a href="usuarios.php">Ver usuarios</a></li>
  <li><a href="cambiar.php" >Cambiar contraseña</a></li>
  <li><a href="login.php">Cerrar sesión</a></li>
</ul>
<div>
				<h2>Formulario de Registro</h2>
				<form action="" method="POST" >
				 <label for="busqueda">Busqueda</label>
					<input type="text" name="busqueda" class="form-input" />
			  	  <input class="form-btn" name="buscar" type="submit" value="Buscar" /></br>
			   	</form>
	</div>

<?php
include ("cn.php");
if(isset($_POST['buscar'])){
    $busqueda=$_POST['busqueda'];
    $busqueda2= "SELECT * FROM DAW WHERE NombreAlumno like '%$busqueda' UNION SELECT * FROM ASIR WHERE NombreAlumno like '%$busqueda'";
	$resulbusqueda = mysqli_query($connection, $busqueda2);
	while($row=mysqli_fetch_assoc($resulbusqueda)) {
		echo "Nombre Alumno: " .$row["NombreAlumno"]. "</br>";
		echo "Apellidos Alumno: " .$row["ApellidosAlumno"]. "</br>";
		echo "Titulo del Proyecto: " .$row["TituloProyecto"]. "</br>";
		echo "Profesor Titular: " .$row["ProfesorTitular"]. "</br>";
		echo "Fecha de Comienzo: " .$row["FechaComienza"]. "</br>";
		echo "Fecha de Fin: " .$row["FechaFin"]. "</br>";
		echo "Nota: " .$row["Nota"]. "</br> </br>";
}
}


?>
</body>
</html>
