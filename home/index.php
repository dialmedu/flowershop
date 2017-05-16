<?php 

$patchTheme = '/tiendademo/';
$urlServices = "http://floristeriamotivos.com/";
$urlTienda = "/tiendademo/tienda/";

?>
<!DOCTYPE html>
<html lang="es_Es">
<head>
	<title>Floristeria Motivos</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<style type="text/css">
		.background,.background__glass{position:absolute;height:100%;width:100%;left:0;top:0}@font-face{font-family:HelloStarbucks;font-weight:400;src:url(/tiendademo/tienda/wp-content/themes/flowershop-child/fonts/HelloStarbucks.ttf)}body{margin:0;padding:0}body *{box-sizing:border-box;font-family:HelloStarbucks;letter-spacing:1px}a{text-decoration:none}.background{z-index:-1;background-size:cover;background-position:center;background-repeat:no-repeat;background-attachment:fixed}.background__glass{background:rgba(255,255,255,.8)}.option,.welcome{box-sizing:border-box;height:45vh}.welcome{padding:2%;margin:0;width:100%}.welcome__logo.media{max-width:447px;margin:0 auto;width:70%}.welcome__greeting{max-width:690px;margin:0 auto;width:70%;padding-top:40px;font-size:24px;text-align:center;color:#272727}.options{max-height:45vh;text-align:center;padding:2%}.option{display:inline-block;width:50%;float:left;position:relative}.option__media.media{width:55%;margin:0 auto;position:relative;padding-bottom:2rem}.option__service__front.media__image{width:35%}.option__service__back.media__image{position:absolute;left:0;top:0}.option__media:hover .option__service__back,.option__media:hover .option__shop__back{transition:.5s;transform:scale(1.05)}.option__media:hover .option__service__front,.option__media:hover .option__shop__front{transition:1s;transform:scale(1.15)}.option__media:hover .option__shop__front{transform-origin:right;transform:scale(1.2)}.option.option__shop{position:relative}.option__shop__front.media__image{position:absolute;left:-5%;width:64%;top:12%}.option__button{font-size:18px;letter-spacing:2px;width:310px;border:1px solid #fff;border-radius:15px;cursor:pointer;position:absolute;left:calc(50% - 155px);bottom:2rem;text-align:center;line-height:64px}.option__button:hover{box-shadow:0 1px 5px -2px #444;border:0;text-decoration:none;color:#272727}.media{overflow:visible}.media__image{width:100%}.option__shop__button{background:#ec008c;color:#fff}.option__service__button{background:#812990;color:#fff}@media screen and (max-width:900px){body.main{min-height:100vh;position:relative}.background{top:-14rem}.welcome{min-height:33vh;padding-bottom:0!important;height:auto}.welcome__logo.media{width:80%;margin:0 auto;max-width:320px}p.welcome__greeting{padding-top:30px;font-size:1.8rem}.options{height:65vh;padding:0;display:block}.option{width:100%;padding:2vh;min-height:33vh;height:auto}.option.option__service{background:#812990}.option.option__shop{background:#ec008c}.option__media.media{width:25vh;margin:0 auto;max-width:400px;padding-top:1rem;padding-left:1rem}.option__service__back.media__image{width:100%;max-width:none}.option__service__front.media__image{width:50%;max-width:none}.option__shop__front.media__image{width:70%!important;max-width:none}.option__button{min-height:8vh!important;height:8vh;line-height:8vh;width:80%;left:calc(50% - 40%)}}@media screen and (max-width:320px){.welcome__greeting{padding-top:30px!important;font-size:100%!important;width:80%}.option__button{font-size:70%!important}.option__media.media{padding-bottom:13vh!important}}
	</style>



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
	<link rel="stylesheet" type="text/css" href="<?=$patchTheme?>home/home.css?v=0.0.1" async>
</body>
</html>