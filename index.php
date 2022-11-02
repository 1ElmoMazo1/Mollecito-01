<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/indexstyle.css">
    
    <title>Iniciar sesion</title>
</head>
<body>
      <div class="login-container">
          <div class="login-info-container">
            <h1 class="title">Iniciar sesion con</h1>
            <div class="social-login">
                <div class="social-login-element">
                    <img src="img/google.svg" alt="google-image">
                    <span>Google</span>
                </div>
                <div class="social-login-element">
                    <img src="img/facebook.svg" alt="facebook-image">
                    <span>Facebook</span>
                </div>
            </div>
            <p>o</p>
            <form class="inputs-container">
                <?php
                include("modelo/conexion_bd.php");
                include("controlador/controlador_registrar_usuario.php");
                ?>
                <input class="input" name="nombre" type="text" placeholder="Nombres" >
                <input class="input" name="apellido" type="text" placeholder="Apellidos" >
                <input class="input" name="clave" type="password" placeholder="Contraseña" >
                
                <input type="submit" name="registro" class="btn" value="Ingresar     ">
                
                <p>Ingresar como ADMIN <span class="span">Ingresar</span></p>
            </form>
          </div>
            <img class="image-container" src="img/mollelogo.jpeg" alt="">
      </div>


</body>
</html>