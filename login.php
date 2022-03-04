<!DOCTYPE>
<html>
  <head>
    <link rel="stylesheet" href="css/estilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy">
  </head>
  <body>
   <form class="login-form" method="post" action="" >
      <p class="login-text">
      <span class="fa-stack fa-lg">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fa fa-lock fa-stack-1x"></i>
      </span>
      </p>
      <input type="text" class="login-username" required="true" placeholder="Email" name="email" />
      <input type="password" class="login-password" required="true" placeholder="Contraseña" name="pass"/>
      <input type="submit" name="Enviar" value="Enviar" class="login-submit" />
    </form>
    <a href="registro.php" class="login-forgot-pass">¿No estás registrado?Regístrate</a> 
    <div class="underlay-photo"></div>
    <div class="underlay-black"></div> 
  </body>
</html>
<?php 
  session_start();
  include "cn.php";

  if (isset($_POST['email']) && isset($_POST['pass'])) {

    $email = ($_POST['email']);
    $pass = ($_POST['pass']);

    if (empty($email)) {
        header("Location: index.php?error=Se requiere un nombre de usuario"); //Genera error al no tener un nombre de usuario
        exit();
    }else if(empty($pass)){
        header("Location: index.php?error=La contraseña es obligatoria");  //Genera error al no tener la contraseña
        exit();
    }else{
        $sql = "SELECT * FROM usuarios WHERE email='$email' AND password='$pass'";
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] == $email && $row['password'] == $pass) {
                $_SESSION['usuario'] = $row['usuario'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['pass'] = $row['password'];
                $_SESSION['tipo'] = $row['tipo'];
            if($_SESSION['tipo']=="administrador"){
        header("Location: menuAdmin.php"); 
      } else{
        header("Location: menu.php"); 
      }
            }else{
                header("Location: login.php?error=Nombre de usuario o contraseña incorrecta1");
                exit();
            }
        }else{
            header("Location: login.php?error=Nombre de usuario o contraseña incorrecta2");
            exit();
        }
    }
  }else{
   // header("Location: index.php");
}
?>