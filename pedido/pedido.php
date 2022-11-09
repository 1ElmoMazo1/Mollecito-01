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
			echo '<script>alert("Artículo ya agregado")</script>';
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
				echo '<script>window.location="pedido.php"</script>';
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
		<link rel="stylesheet" href="css/csspedido.css">
	</head>
	
	<body>
	<body>
       
	   <header>
	   <div class="container__menu">
		   <div class="menu">
			   <input type="checkbox" id="check__menu">
			   <label  id="#label__check" for="check__menu">
				   <i class="fa-solid fa-bars icon__menu"></i>
			   </label>              
			   <nav>
				   <ul>
					   <li><a href="principal.php" id="selected"></a></li>
					   <br>
					   <br>
					   <li><a href="#">Servicio</a>
						   <ul>

							   <li><a href="../carta/platodeentrada.php">Entradas</a></li>
							   <li><a href="carta/especialidaddelacasa.php">Especialidades de la casa</a></li>
							   <li><a href="carta/platoalacarta.php">Platos a la carta</a></li>
							   <li><a href="carta/caldos.php">Caldos</a></li>
							   <li><a href="carta/bebidas.php">Bebidas</a></li>
							   <li><a href="carta/postres.html">Postres</a></li>

						   </ul>
					   </li>
					   <li><a href="#">PEDIDO</a></li>
					   <li><a href="#">Favoritos</a></li>
					   <li><a href="#">Sugerencias</a></li>
					   <li><a href="#">Contactos</a></li>
				   </ul>

			   </nav>
		   </div>
	   </div>
	   </header>

	   <!-- Carrito de compra -->
	  
		<br />
		<div class="container">
			<br />
			<br />
			<br />
			
			<br /><br />
			<?php
				$query = "SELECT * FROM tbl_product ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
			<h3>Detalles de la orden</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Nombre del producto</th>
						<th width="10%">Cantidad</th>
						<th width="20%">Precio</th>
						<th width="15%">Total</th>
						<th width="5%">Accion</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>S/ <?php echo $values["item_price"]; ?></td>
						<td>S/ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="pedido.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Eliminar</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">S/ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			
		</div>
	</div>
	<br />
	</body>
</html>

<?php
//If you have use Older PHP Version, Please Uncomment this function for removing error 

/*function array_column($array, $column_name)
{
	$output = array();
	foreach($array as $keys => $values)
	{
		$output[] = $values[$column_name];
	}
	return $output;
}*/
?>