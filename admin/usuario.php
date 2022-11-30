<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
	<link rel="stylesheet" href="css/styleprincipal.css">
    <link rel="stylesheet" href="css/usuariocss.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>Maymanta S.R.L</h2>
        <ul>
            <li><a href="principaladmin.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="#"><i class="fas fa-user"></i>Usuarios</a></li>
            <li><a href="productos.php"><i class="fas fa-address-card"></i>Productos</a></li>
            <li><a href="#"><i class="fas fa-project-diagram"></i>Asistencia</a></li>
            <li><a href="#"><i class="fas fa-blog"></i>Blogs</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>Contact</a></li>
            <li><a href="index.php"><i class="fas fa-map-pin"></i>Salir</a></li>
        </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="main_content">
        <div class="header">USUARIO Y REGISTRO DE MOZOS</div>
        <?php
        include("conexion_bd.php");
        $usuario = "SELECT * FROM admin";
        ?>  
        <div class="info">
            <div class="container-table">
                <div class="header_table">NOMBRES</div>

                <div class="header_table">APELLIDOS</div>
                   
                <div class="header_table">DNI</div>
                   
                <div class="header_table">TELEFONO</div>
                  
                <div class="header_table">ROL</div>
                    
                <?php $resultado  = mysqli_query($conexion,$usuario);
                while ($row = mysqli_fetch_assoc($resultado))
                {?>
                    <div class="item_table"><?php echo $row["nombre"]; ?></div>
                    <div class="item_table"><?php echo $row["apellido"]; ?></div>
                    <div class="item_table"><?php echo $row["dni"]; ?></div>
                    <div class="item_table"><?php echo $row["telefono"] ?></div>
                    <div class="item_table"><?php echo $row["rol"] ?></div>
                    <?php } ?>     
            </div>
       
            <div  style="float: left;" >
            <form method="POST"  class="datos" action="control_mozos.php">
                
                <div class="header_table"  >Registrar Usuarios</div>
                
                <label for="">Datos personales:</label><br>
                <input class="input" name="nombre" type="text" placeholder="Nombres" >
                <input class="input" name="apellido" type="text" placeholder="Apellidos" ><br><br>
                <input class="input" name="edad" type="text" placeholder="Edad" >
                <input class="input" name="dni" type="text" placeholder="DNI" ><br><br>
                <input class="input" name="telefono" type="text" placeholder="Telefono" >
                <input class="input" name="rol" type="text" placeholder="ROL" >
                <br>
                <label for="">  Datos de emergencia:</label><br>
                <input class="input" name="Nemergencia" type="text" placeholder="Full Name" >
                <input class="input" name="parentesco" type="text" placeholder="Parentesco" >
                <input class="input" name="emergencia" type="text" placeholder="Telefono" ><br>
                <br>
                <input type="submit" name="registroM" class="btn" value="Ingresar">
                </div>
                
            </form>
           </div>
            
          
      </div>
    </div>
</div>

</body>
</html>