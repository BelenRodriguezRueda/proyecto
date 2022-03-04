<?php
  include("cn.php");
  $sql="SELECT * FROM usuarios";
  //$resulsql = mysqli_query($connection, $sql);
  if(isset($_POST['Enviar'])){
        //traspasamos a variables locales, para evitar complicaciones con las comillas:
        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $fecna = $_POST['fecna'];
  $insertar = "INSERT INTO  usuarios (usuario, email, password, fecna)
        VALUES ('$usuario', '$email', '$pass', '$fecna')";
$resulInsertar = mysqli_query($connection, $insertar);
} else {
  echo "No se ha podido insertar";
}
?>
<html>
  <head>
    <link rel="stylesheet" href="css/estilo.css">
    <meta charset="UTF-8">
  </head>
  <body>
   <form class="login-form" action="" method="POST">
      <p class="login-text">
      <span class="fa-stack fa-lg">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fa fa-lock fa-stack-1x"></i>
      </span>
      </p>
      <input type="text" class="login-username"  required="true" placeholder="Usuario" name="usuario" />
      <input type="text" class="login-username" required="true" placeholder="Email" name="email" />
      <input type="password" class="login-password" required="true" placeholder="Contraseña" name="pass"/>
      <input type="date" class="login-username"  placeholder="Fecha de Nacimiento" name="fecna"/>
      <input type="submit" name="Enviar" value="Enviar" class="login-submit" />
    </form>
      <a href="login.php" class="login-forgot-pass">¿Deseas volver al login? Pincha aquí</a>

    <div class="underlay-photo"></div>
    <div class="underlay-black"></div> 
  </body>
</html>

