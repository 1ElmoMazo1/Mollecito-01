

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="indexstyle.css">
    
    <title>Iniciar sesion</title>
</head>
<body>
      <div class="login-container">
          <div class="login-info-container">
            <h1>Administracion</h1>

                <br>
                <br>
            
            <form method="POST" class="inputs-container" action="controlador_registrar_usuario.php">
                
                <input class="input" name="usuario" type="text" placeholder="DNI" >
                <!--<input class="input" name="apellido" type="text" placeholder="Apellidos" >-->
                <input class="input" name="password" type="password" placeholder="Contraseña" >
                
                <input type="submit" name="registro" class="btn" value="Ingresar">
                
                <p>Ingresar como CLIENTE <span class="span"><a href="../index.php">Ingresar</a></span></p>
            </form>
          </div>
            <img class="image-container" src="../img/mollelogo.jpeg" alt="">
      </div>


</body>
</html>