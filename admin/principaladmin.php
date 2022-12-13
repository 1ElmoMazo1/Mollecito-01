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
            <li><a href="principaladmin.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="usuario.php"><i class="fas fa-user"></i>Usuarios</a></li>
            <li><a href="productos.php"><i class="fas fa-address-card"></i>Productos</a></li>
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
                <form action="POST">
                    <label> Numero de mesa:
                    <input type="text"><br><br>

                    </label>
                    <label> Numero de comensales(Aprox):
                    <input type="text"><br><br>
                    </label> <label> Numero de mesa:
                    <input type="text"><br><br>
                    </label><br>
                    <button type="submit" name="scaner" class="boton" >ESCANEAR <br> QR</button>
                      
                </form>
            
            </div>
          
      </div>
    </div>
</div>

</body>
</html>