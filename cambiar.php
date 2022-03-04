<!DOCTYPE html>
<html>
<head>
	<title>Cambiar</title>
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
  <li><a href="borrar.php">Borrar</a></li>
  <li><a href="usuarios.php">Ver usuarios</a></li>
  <li><a href="cambiar.php" class="active">Cambiar contraseña</a></li>
  <li><a href="login.php">Cerrar sesión</a></li>
</ul>
<div>
				<form action="" method="POST" >
				 <label for="busqueda">Email:</label>
					<input type="text" name="email" class="form-input" /></br>
          <label for="busqueda">Nueva contraseña:</label>
          <input type="text" name="password" class="form-input" />
			  	  <input class="form-btn" name="cambiar" type="submit" value="cambiar" /></br>
			   	</form>
	</div>
  <?php

include ("cn.php");
if(isset($_POST['cambiar'])){
    $email=$_POST['email'];
     $password=$_POST['password'];
    $cambiar= "UPDATE usuarios SET password = '$password' WHERE email = '$email'";
  $resulcambiar = mysqli_query($connection, $cambiar);
  echo "Se ha cambiado con éxito";
} 
  ?>
</body>
</html>