<?php
	include_once "../utils.php";

	$siteTitle   = "Tiendas";
	include "../head.php";


	echo "<!-- HEADER -->";

	$titulo		 = "Mis tiendas";
	$tiendas     = "active";
	$instruccion = "Selecciona o administra tus tiendas";	
	include "../header.php";


	echo "<!-- CONTENT -->";

	$nombreTienda	= "Fruites Romeu Sants";
	$idTienda		= "tienda1";
	$linkTienda		= "javascript:void(0)";
	$mensajeAvisos	= "3 avisos nuevos";
	$hayAvisos = "si";
	include "../plantillas/tarjetas/tienda.php";


	$nombreTienda	= "Fruites Romeu Clot";
	$idTienda		= "tienda2";
	$linkTienda		= "javascript:void(0)";
	$mensajeAvisos	= "";
	$hayAvisos = "";
	include "../plantillas/tarjetas/tienda.php";


	$nombreTienda	= "Fruites Romeu Gràcia";
	$idTienda		= "tienda3";
	$linkTienda		= "javascript:void(0)";
	$mensajeAvisos	= "";
	$hayAvisos = "";
	include "../plantillas/tarjetas/tienda.php";


	$anadir	= "tienda";
	include "../plantillas/tarjetas/tienda-anadir.php";


	echo "<!-- FOOTER -->";

	$footer 		= "no";
	include "../footer.php";
?>