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
        <link rel="stylesheet" href="CSS/estilos.css">
        <!--<link rel="stylesheet" href="estilos.css">-->
</head>
<body>
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
echo "Fuera" ;
?>
</html>