<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario Registro</title>
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
  <li><a href="insertar.php" class="active">Insertar</a></li>
  <li><a href="buscar.php">Buscar</a></li>
  <li><a href="borrar.php">Borrar</a></li>
  <li><a href="usuarios.php">Ver usuarios</a></li>
  <li><a href="cambiar.php" >Cambiar contraseña</a></li>
  <li><a href="login.php">Cerrar sesión</a></li>
</ul>
		<div>
		<h2>Formulario de Registro</h2>
		<form action="muestra.php" method="POST" >

			   
				<label for="NombreAlumno">Nombre </label>
				<input type="text" name="NombreAlumno"/>   </br>
				
				<label for="ApellidosAlumno">Apellidos </label>
				<input type="text" name="ApellidosAlumno" class="form-input"/>  </br>       
				
				<label for="TituloProyecto">Titulo del proyecto </label>
				<input type="text" name="TituloProyecto" class="form-input" /></br>

				<label for="ProfesorTitular">Profesor Titular</label>
				<input type="text" name="ProfesorTitular" class="form-input" /></br>

				<label for="FechaComienza">Fecha de Comienzo</label>
				<input type="text" name="FechaComienza" class="form-input" /></br>

				<label for="FechaFin">Fecha de Fin</label>
				<input type="text" name="FechaFin" class="form-input" /></br>

				<label for="Nota">Nota</label>
				<input type="text" name="Nota" class="form-input" /></br>

				<label for="modulo">Modulo</label>
					<select name="modulo">
						<option name="asir">ASIR</option>
						<option name="daw">DAW</option>
					</select>
			    <input class="form-btn" name="submit" type="submit" value="Enviar" /></br>
			</form>
		</div>

</body>
</html>