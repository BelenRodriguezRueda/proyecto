<?php
    include("cn.php");
    $usuarios = "SELECT * FROM usuarios";

    //Validamos que hayan llegado estas variables, y que no esten vacias:
    if(isset($_POST['submit'])){
        //traspasamos a variables locales, para evitar complicaciones con las comillas:
        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $fecna = $_POST['fecna'];
      }

    
    
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title> My listado </title>
        <meta  name="viewport" 
            content-width=device-width, 
            user-scalable=no, 
            initial-scale=1.0, 
            maximun-scale=1.0, 
            minimun-scale=1.0">
        <link rel="stylesheet" href="CSS/estilos2.css">
        <!--<link rel="stylesheet" href="estilos.css">-->
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
  <li><a href="insertar.php">Insertar</a></li>
  <li><a href="buscar.php">Buscar</a></li>
  <li><a href="borrar.php">Borrar</a></li>
  <li><a href="usuarios.php" class="active">Ver usuarios</a></li>
  <li><a href="cambiar.php" >Cambiar contraseña</a></li>
  <li><a href="login.php">Cerrar sesión</a></li>
</ul>
    <div class="container-table">
        <div class="table__title"> Datos de usuario </div>
        <div class="table__header">Usuario</div>
        <div class="table__header">Email</div>
        <div class="table__header">Fecha de Nacimiento</div>
        <div class="table__header">Tipo de Usuario</div>
        
        <?php 

        $resultado = mysqli_query($connection, $usuarios);
            while($row=mysqli_fetch_assoc($resultado)) {
                    //$posicion=0;
            /*extraido es un bool, para poder leerlo
            necesito un mysqli_fetch_array del resultado.
            Documentación en: https://www.php.net/manual/es/mysqli-result.data-seek.php*/
           // $extraido=mysqli_data_seek($resultado,$posicion);
            //$row=mysqli_fetch_array($resultado);    
        ?>
        <div class="table__item"><?php echo $row["usuario"];?> </div>
        <div class="table__item"><?php echo $row["email"];?></div>
        <div class="table__item"><?php echo $row["fecna"];?></div>
        <div class="table__item"><?php echo $row["tipo"];?></div>
        <?php //$posicion=2;
         

            //$extraido=mysqli_data_seek($resultado,$posicion);
            //$row=mysqli_fetch_array($resultado);
        ?>
        <!--<div class="table__item"><?php //echo $row["nombre"];?> </div>
        <div class="table__item"><?php //echo $row["apellidos"];?></div>
        <div class="table__item"><?php //echo $row["direccion"];?></div>
        <div class="table__item"><?php //echo $row["telefono"];?></div> -->
        <?php } // Cierre del while anterior
             // mysqli_free_result($resultado);  
        ?>

    </div>
</body>
<?php
mysqli_close( $connection );
?>
</html>