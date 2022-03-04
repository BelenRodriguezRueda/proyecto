<?php
    include("cn.php");
    $daw = "SELECT * FROM daw";
    $asir = "SELECT * FROM asir";

    //Validamos que hayan llegado estas variables, y que no esten vacias:
    if(isset($_POST['submit'])){
        //traspasamos a variables locales, para evitar complicaciones con las comillas:
        $nombre = $_POST['NombreAlumno'];
        $apellidos = $_POST['ApellidosAlumno'];
        $titulo = $_POST['TituloProyecto'];
        $profesor = $_POST['ProfesorTitular'];
        $fechac = $_POST['FechaComienza'];
        $fechaf = $_POST['FechaFin'];
        $nota = $_POST['Nota'];
        $modulo = $_POST['modulo'];
        
      if ($modulo == "ASIR"){
       
        $inserccion = "INSERT INTO  asir (NombreAlumno, ApellidosAlumno, TituloProyecto, ProfesorTitular, FechaComienza, FechaFin, Nota)
        VALUES ('$nombre', '$apellidos', '$titulo', '$profesor', '$fechac', '$fechaf', '$nota')"; 
        

  } else {
        
        $inserccion = "INSERT INTO  daw (NombreAlumno, ApellidosAlumno, TituloProyecto, ProfesorTitular, FechaComienza, FechaFin, Nota)
        VALUES ('$nombre', '$apellidos', '$titulo', '$profesor', '$fechac', '$fechaf', '$nota')";

}
$resulInsertar = mysqli_query($connection, $inserccion);
        //Preparamos la orden SQL
        
        
        //Borrado de la variable submit
        //unset($_POST['submit']);
        //nos situamos en la página 'index.php', en el header.
       // header('Location: IndexEjercicio.php');
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
        <div class="table__title"> Datos de DAW </div>
        <div class="table__header">Nombre</div>
        <div class="table__header">Apellidos</div>
        <div class="table__header">Titulo</div>
        <div class="table__header">Profesor</div>
        <div class="table__header">Fecha Comienzo</div>
        <div class="table__header">Fecha Fin</div>
        <div class="table__header">Nota</div>
        
        <?php 

        $resultado = mysqli_query($connection, $daw);
            while($row=mysqli_fetch_assoc($resultado)) {
                    //$posicion=0;
            /*extraido es un bool, para poder leerlo
            necesito un mysqli_fetch_array del resultado.
            Documentación en: https://www.php.net/manual/es/mysqli-result.data-seek.php*/
           // $extraido=mysqli_data_seek($resultado,$posicion);
            //$row=mysqli_fetch_array($resultado);    
        ?>
        <br><div class="table__item"><?php echo $row["NombreAlumno"];?></div>
        <div class="table__item"><?php echo $row["ApellidosAlumno"];?></div>
        <div class="table__item"><?php echo $row["TituloProyecto"];?></div>
        <div class="table__item"><?php echo $row["ProfesorTitular"];?></div>
        <div class="table__item"><?php echo $row["FechaComienza"];?></div>
        <div class="table__item"><?php echo $row["FechaFin"];?></div>
        <div class="table__item"><?php echo $row["Nota"];?></div>
          <?php } // Cierre del while anterior
              mysqli_free_result($resultado);  
        ?>
        </div>

           <div class="container-table">
        <div class="table__title"> Datos de ASIR </div>
        <div class="table__header">Nombre</div>
        <div class="table__header">Apellidos</div>
        <div class="table__header">Titulo</div>
        <div class="table__header">Profesor</div>
        <div class="table__header">Fecha Comienzo</div>
        <div class="table__header">Fecha Fin</div>
        <div class="table__header">Nota</div>
        
         <?php 

        $resultado = mysqli_query($connection, $asir);
            while($row=mysqli_fetch_assoc($resultado)) {
                    //$posicion=0;
            /*extraido es un bool, para poder leerlo
            necesito un mysqli_fetch_array del resultado.
            Documentación en: https://www.php.net/manual/es/mysqli-result.data-seek.php*/
           // $extraido=mysqli_data_seek($resultado,$posicion);
            //$row=mysqli_fetch_array($resultado);    
        ?>


        <br> <div class="table__item"><?php echo $row["NombreAlumno"];?></div>
        <div class="table__item"><?php echo $row["ApellidosAlumno"];?></div>
        <div class="table__item"><?php echo $row["TituloProyecto"];?></div>
        <div class="table__item"><?php echo $row["ProfesorTitular"];?></div>
        <div class="table__item"><?php echo $row["FechaComienza"];?></div>
        <div class="table__item"><?php echo $row["FechaFin"];?></div>
        <div class="table__item"><?php echo $row["Nota"];?></div>
        <?php //$posicion=2;
         

            //$extraido=mysqli_data_seek($resultado,$posicion);
            //$row=mysqli_fetch_array($resultado);
        ?>
     
        <?php } // Cierre del while anterior
              mysqli_free_result($resultado);  
        ?>

    </div>
</body>
<?php
mysqli_close( $connection );
echo "Fuera" ;
?>
</html>