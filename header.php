<!DOCTYPE html>
<html lang="es"/>
<head>
	<meta charset="UTF-8"/>
	<title><?php bloginfo("name"); ?></title>
	<meta name="description" content="<?php bloginfo("description"); ?>" />
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scala=1" />
	<!-- Iconos en el nevegador -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo("template_url"); ?>/ceedi.ico" />
	<link rel="apple-touch-icon" type="apple-touch-icon" href="<?php bloginfo("template_url"); ?>/apple-touch-ceedi.png" />
	<!-- Seccion del autor -->
	<link rel="author" type="text/plain" href="humans.txt" />
	<!-- Seccion de llamado de archivos de estilos de cascada -->
	<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/normalize.css" />
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>" />
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<figure>
			<a href="<?php bloginfo("home"); ?>"><img src="<?php bloginfo("template_url"); ?>/img/logotipo.jpg" alt="LOGOTIPO"></a>
		</figure>
		<nav>
			<?php
				$atributos_menu = array(
					"theme_location" => "menu_principal",
					"container" => "nav",
					"container_id" => "menu-principal",
					"container_class" => "menu"
				);
				wp_nav_menu($atributos_menu);
				get_sidebar();
			?>
		</nav>
		<article>
			<a href="http://www.facebook.com/ceediselac"><div class="icon-facebook"></div></a>
			<div class="icon-twitter-old"></div>
		</article>
	</header>
	<section>

