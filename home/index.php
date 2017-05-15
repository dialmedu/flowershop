<?php 

$patchTheme = '/tiendademo/';
$urlServices = "http://floristeriamotivos.com/";
$urlTienda = "/tiendademo/tienda/";

?>
<!DOCTYPE html>
<html lang="es_Es">
<head>
	<title>Floristeria Motivos</title>
	<link rel="stylesheet" type="text/css" href="<?=$patchTheme?>home/normalize.css">

	<link rel="stylesheet" type="text/css" href="<?=$patchTheme?>home/import/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="<?=$patchTheme?>home/home.css?v=0.0.1">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="main">
<div class="background" style="background-image: url('<?=$patchTheme?>home/images/home_bg_floristeria_motivos.jpg');">
	<div class="background__glass"></div>
</div>
<div class="main__container">
	<div class="welcome">
	<div class="welcome__logo media">
		<img class="media__image" src="<?=$patchTheme?>home/images/floristeria_motivos_logo_png.png"> 
	</div>
	<p class="welcome__greeting">
		Tienda de flores en Colombia. El detalle que llega al corazón
	</p>
</div>
<div class="options">
	<div class="option option__service">
		<div class="option__media media">
			<object class="option__service__back media__image" data="<?=$patchTheme?>home/images/services_items.svg" type="image/svg+xml"
          		width="350px">
		    <!-- Implement fallback code here, or display a message: -->
		    	<img class="option__service__front media__image "
				 	src="<?=$patchTheme?>home/images/services_items.png">
  			</object>
			<object class="option__service__front media__image" data="<?=$patchTheme?>home/images/services_adviser.svg" type="image/svg+xml"
          		width="300px">
			    <!-- Implement fallback code here, or display a message: -->
			    <img class="option__service__front media__image "
					 src="<?=$patchTheme?>home/images/services_adviser.png">
  			</object>
		</div>
		<a class="option__button option__service__button"
		 href="<?=$urlServices?>">Nuestros Servicios</a> 
	</div>
	<div class="option option__shop">
		<div class="option__media media">
			<object class="option__shop__back media__image" data="<?=$patchTheme?>home/images/shop_laptop.svg" type="image/svg+xml"
          		width="350px">
		    <!-- Implement fallback code here, or display a message: -->
		    	<img class="option__shop__front media__image "
				 	src="<?=$patchTheme?>home/images/shop_laptop.png">
  			</object>
			<object class="option__shop__front media__image" data="<?=$patchTheme?>home/images/shop_get_flower.svg" type="image/svg+xml"
          		width="300px">
			    <!-- Implement fallback code here, or display a message: -->
			    <img class="option__shop__front media__image "
					 src="<?=$patchTheme?>home/images/shop_get_flower.png">
  			</object>
		</div>
		<a class="option__button option__shop__button"
			href="<?=$urlTienda?>">Tienda Virtual</a>
	</div>
</div>

</div>
</body>
</html>