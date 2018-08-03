<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Carrito de compras</title>
	<link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
	<header>
		<div class="log"><img src="http://groupbussines.com/images/logo.png" width="160" alt=""></div>
		<ul class="menu">
			<li class="item active">menu</li>
			<li class="item">productos</li>
			<li class="item">oferta</li>
			<li class="item">carrito</li></ul>
	</header>
	
<section id="home">
	
</section>
<section id="product">
	<div class="brand">
		<span class="bran_item active">zapatillas</span>
		<span class="bran_item">polos</span>
		<span class="bran_item">equipos</span>
		<span class="bran_item">camizas</span>
		<span class="bran_item">accesorios</span>
	</div>
	<div class="list-product">
		<div class="conte-prod">
			<?php 
				require "asset/app/Producto.php";
				$Producto = new Producto();
				$datos_Producto = $Producto->Listar();

				foreach ($datos_Producto as $key => $value) {
					?>
						<div class="box-prod">
							<div class="img-prod">
								<a href="payment.php?id=<?=$value->id?>">
									<img src="asset/img/<?=$value->imagen?>" alt="">
								</a>
							</div>
							<div class="detalle-prod">
								<span class="name-prod"><?=$value->nombre?></span>
								<span class="precio"><?=$value->precio?></span>
							</div>
							<div class="box-buy">
								<a href="payment.php?id=<?=$value->id?>">buy now</a>
							</div>
						</div>

					<?php 
				}
			?>

		</div>

		
	</div>
</section>


<script src="asset/js/jquery.min.js" type="text/javascript"></script>
<script src="asset/js/main.js" type="text/javascript"></script>
</body>
</html>