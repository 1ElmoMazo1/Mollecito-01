<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
	<link rel="stylesheet" href="css/styleprincipal.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>Maymanta S.R.L</h2>
        <ul>
            <li><a href="home.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="#"><i class="fas fa-user"></i>Usuarios</a></li>
            <li><a href="#"><i class="fas fa-address-card"></i>About</a></li>
            <li><a href="#"><i class="fas fa-project-diagram"></i>portfolio</a></li>
            <li><a href="#"><i class="fas fa-blog"></i>Blogs</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>Contact</a></li>
            <li><a href="#"><i class="fas fa-map-pin"></i>Map</a></li>
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
            <div class="header">NOMBRE COMPLETO<div>
            <br>
            <div>DNI</div>
            <br>
            <div>TELEFONO</div>
            <br>
            <div>ROL</div>
            <br>
            <?php $resultado  = mysqli_query($conexion,$usuario);
            while ($row = mysqli_fetch_assoc($resultado))
            {?>
            <div><?php echo $row["nombre"]; ?></div>
            <div><?php echo $row["dni"]; ?></div>
            <div><?php echo $row["telefono"] ?></div>
            <div><?php echo $row["rol"] ?></div>
            <?php } ?>
          
          
      </div>
    </div>
</div>

</body>
</html>