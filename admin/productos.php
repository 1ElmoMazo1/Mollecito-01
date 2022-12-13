<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
	<link rel="stylesheet" href="css/styleprincipal.css">
    <link rel="stylesheet" href="css/producto.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>Maymanta S.R.L</h2>
        <ul>
            <li><a href="principaladmin.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="usuario.php"><i class="fas fa-user"></i>Usuarios</a></li>
            <li><a href="#"><i class="fas fa-address-card"></i>Productos</a></li>
            <li><a href="productos/entradas.php">Platos de entrada</a></li>
            <li><a href="productos/especialidades.php">Especialidad de la casa</a></li>
            <li><a href="productos/paltocarta.php">Platos a la carta</a></li>
            <li><a href="productos/caldos.php">Caldos</a></li>
            <li><a href="productos/bebidas.php">Bebidas</a></li>
            <li><a href="productos/postres.php">Postres</a></li>
            <li><a href="#"><i class="fas fa-project-diagram"></i>Asistencia</a></li>
            <li><a href="#"><i class="fas fa-blog"></i>Blogs</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>Contact</a></li>
            <li><a href="index.php"><i class="fas fa-map-pin"></i>Salir</a></li>
        </ul> 

    </div>
    <div class="main_content">
        <div class="header">PRINCIPAL</div>  
        <div class="info">
        
        <div>
          <?php
        include("conexion_bd.php");
        $usuario = "SELECT * FROM casa";
        ?>
            <h1>Especialidad de la casa</h1>
            <div class="container-table">
                <div class="header_table">NOMBRE</div>

                <div class="header_table">Descripcion</div>
                   
                <div class="header_table">Precio</div>
                
                   
                
                    
                <?php $resultado  = mysqli_query($conexion,$usuario);
                while ($row = mysqli_fetch_assoc($resultado))
                {?>
                    <div class="item_table"><?php echo $row["name"]; ?></div>
                    <div class="item_table"><?php echo $row["descripcion"]; ?></div>
                    <div class="item_table"><?php echo $row["price"]; ?></div>
                    
                    <?php } ?>     
            </div>
       
          
          <div>
            <div>
          <?php
        include("conexion_bd.php");
        $usuario = "SELECT * FROM tbl_product";
        ?>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        

            <h1>Especialidad de la casa</h1>
            <div class="container-table">
                <div class="header_table">NOMBRE</div>

                <div class="header_table">Descripcion</div>
                   
                <div class="header_table">Precio</div>
                
                   
                
                    
                <?php $resultado  = mysqli_query($conexion,$usuario);
                while ($row = mysqli_fetch_assoc($resultado))
                {?>
                    <div class="item_table"><?php echo $row["name"]; ?></div>
                    <div class="item_table"><?php echo $row["descripcion"]; ?></div>
                    <div class="item_table"><?php echo $row["price"]; ?></div>
                    
                    <?php } ?>     
            </div>
       
          
                </div>
          
      </div>
    </div>
</div>

</body>
</html>