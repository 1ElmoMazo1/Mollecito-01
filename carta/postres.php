<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script src="https://kit.fontawesome.com/c00f598fdc.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
       
        <title>"El Mollecito"</title>
        <link rel="stylesheet" href="../css/styleprincipal.css">
        <link rel="stylesheet" href="../css/cardstyle.css">
    </head>
    <body>
       
        <header style="z-index: 2;">
        <div class="container__menu">
            <div class="menu">
                <input type="checkbox" id="check__menu">
                <label  id="#label__check" for="check__menu">
                    <i class="fa-solid fa-bars icon__menu"></i>
                </label>              
                <nav>
                    <ul>
                        <li><a href="../principal.php" id="selected"></a></li>
                        <br>
                        <br>
                        <li><a href="#">Servicio</a>
                            <ul>

                                <li><a href="platodeentrada.php">Entradas</a></li>
                                <li><a href="especialidaddelacasa.php">Especialidades de la casa</a></li>
                                <li><a href="platoalacarta.php">Platos a la carta</a></li>
                                <li><a href="caldos.php">Caldos</a></li>
                                <li><a href="bebidas.php">Bebidas</a></li>
                                <li><a href="postres.php">Postres</a></li>

                            </ul>
                        </li>
                        <li><a href="../pedido/pedido.php">PEDIDO</a></li>
                        <li><a href="#">Favoritos</a></li>
                        <li><a href="#">Sugerencias</a></li>
                        <li><a href="#">Contactos</a></li>

						<li><a href="#"><br></a></li><li><a href="#"><br></a></li><li><a href="#"><br></a></li><li><a href="#"><br></a></li><li><a href="#"><br></a></li><li><a href="#"><br></a></li><li><a href="#"><br></a></li><li><a href="#"><br></a></li><li><a href="#"><br></a></li><li><a href="#"><br></a></li><li><a href="#"><br></a></li><li><a href="#"><br></a></li>
                        <li><a href="#"><br></a></li><li><a href="#"><br></a></li><li><a href="#"><br></a></li><li><a href="#"><br></a></li><li><a href="#"><br></a></li><li><a href="#"><br></a></li><li><a href="#"><br></a></li><li><a href="#"><br></a></li><li><a href="#"><br></a></li><li><a href="#"><br></a></li><li><a href="#"><br></a></li><li>
                        <li><a href="#"><br></a></li><li><a href="#"><br></a></li><li><a href="#"><br></a></li><li><a href="#"><br></a></li><li><a href="#"><br></a></li><li><a href="#"><br></a></li><li><a href="#"><br></a></li><li><a href="#"><br></a></li><li><a href="#"><br></a></li><li>
                        <li><a href="../index.php">Salir</a></li>
                    </ul>

                </nav>
            </div>
        </div>
        </header>
	

<frame>
<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "testing");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Art??culo ya agregado")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Articulo eliminado")</script>';
				echo '<script>window.location="postres.php"</script>';
			}
		}
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../css/styleprincipal.css">
	</head>
	
	<body>
		<br />
		<div class="container">
		<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			
			<h1 style="text-align: center">Postres</h1>
			<br />
			
			<?php
				$query = "SELECT * FROM postres ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="platodeentrada.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:3px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; box-shadow:
       inset 0 -3em 3em rgba(0,0,0,0.1),
             0 0  0 2px rgb(255,255,255),
             0.3em 0.3em 1em rgba(0,0,0,0.3);" align="center">
						<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger">Precio S/<?php echo $row["price"]; ?></h4>
						
						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="A??adir al carrito" />

					</div>
					<br>
				</form>
				<br>
			</div>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
			
	</div>
	<br />
	</body>
</html>
</frame>
</html>
