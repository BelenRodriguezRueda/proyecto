<html>
  <head>
  
    <meta charset="UTF-8">
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
  <li><a href="menuAdmin.php" class="active">Inicio</a></li>
  <li><a href="insertar.php">Insertar</a></li>
  <li><a href="buscar.php">Buscar</a></li>
  <li><a href="borrar.php">Borrar</a></li>
  <li><a href="usuarios.php">Ver usuarios</a></li>
  <li><a href="cambiar.php" >Cambiar contraseña</a></li>
  <li><a href="login.php">Cerrar sesión</a></li>
</ul>
   <p>Bienvenido admin, ¿que desea hacer hoy?</p> 

  </body>
</html>

