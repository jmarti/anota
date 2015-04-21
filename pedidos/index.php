<?php
//INDEX PEDIDOS
	include_once "../utils.php";

	$background = "mobileHome";
	$siteTitle   = "Pedidos | Fruites Romeu Sants";
	include "../head.php";

	echo "<!-- HEADER -->";


	$pedidos 		 = "active";
	$instruccion 	 = "";
	$hideInstruccion = "hide"; 
	$changeContent 	 = "changeMobile"; 
	
	include "../header.php";


	echo "<!-- CONTENT -->";


	$nuevo	= "pedido";
	$link   = "/aplicacion/pedidos/nuevo-pedido/";
	include "../plantillas/tarjetas/pedidos-nuevo.php";

	
	$id 	= "plantillas";
	$pedido	= "plantillas";
	include "../plantillas/tarjetas/pedidos.php";


	$id 	= "pendientes";
	$pedido	= "pendientes";
	include "../plantillas/tarjetas/pedidos.php";


	$id 	= "confirmados";
	$pedido	= "confirmados";
	include "../plantillas/tarjetas/pedidos.php";


	$id 	= "borradores";
	$pedido	= "borradores";
	include "../plantillas/tarjetas/pedidos.php";

	

	echo "<!-- FOOTER -->";

	$footer 		= "no";
	include "../footer.php";
?>
