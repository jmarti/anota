<?php
//Nuevo pedido - frutas - producto entrado
	include_once "../../../../../utils.php";

	$siteTitle   = "Nuevo pedido | Fruites Romeu Sants";
	include "../../../../../head.php";


	echo "<!-- HEADER -->";

	$atras		   = "atras";
	$linkAtras	   = "../";
	$titulo		   = "Fruites Romeu Sants";
	$pedidos 	   = "active";
	$nuevoPedido   = "active";
	$instruccion   = "Nuevo pedido a SERVIFRUTAS BCN";
	$navegacion    = "visible";
	$navegacionText= '<a href="../../../">Seleccionar proveedor</a>
					<a href="../">Seleccionar categoría</a> Frutas - añadir productos';
	
	include "../../../../../header.php";


	echo "<!-- CONTENT -->";

	$nombre 		= "Aguacate";
	$precio			= "0.36€";
	$minimo			= "40";
	$cantidad		= "52";
	$foto			= "/aplicacion/assets/img-productos/aguacate.png";
	$stock			= "";
	$calculado		= "18.72€";
	$estado			= "entrado";
	$url			= "/aplicacion/pedidos/nuevo-pedido/servifrutas-bcn/catalogo/frutas/anadido.php";
	include "../../../../../plantillas/tarjetas/producto.php";
	unset($estado);
	unset($calculado);
	unset($url);

	$nombre 		= "Chirimoya";
	$precio			= "0.55€";
	$minimo			= "40";
	$cantidad		= "";
	$unidad			= "kg";
	$foto			= "/aplicacion/assets/img-productos/chirimoya.png";
	$stock			= "";
	//$calculado		= "";
	include "../../../../../plantillas/tarjetas/producto.php";
	

	$nombre 		= "Melocotón";
	$precio			= "0.25€";
	$minimo			= "40";
	$cantidad		= "";
	$unidad			= "kg";
	$unidad			= "kg";
	$foto			= "/aplicacion/assets/img-productos/melocoton.png";
	$stock			= "";
	//$calculado		= "";
	include "../../../../../plantillas/tarjetas/producto.php";
	

	$nombre 		= "Mandarina";
	$precio			= "0.20€";
	$minimo			= "40";
	$cantidad		= "";
	$unidad			= "kg";
	$foto			= "/aplicacion/assets/img-productos/mandarina.png";
	$stock			= "";
	//$calculado		= "";
	include "../../../../../plantillas/tarjetas/producto.php";

	$nombre 		= "Manzana";
	$precio			= "0.20€";
	$minimo			= "40";
	$cantidad		= "";
	$unidad			= "kg";
	$foto			= "/aplicacion/assets/img-productos/manzana.png";
	$stock			= "";
	//$calculado		= "";
	include "../../../../../plantillas/tarjetas/producto.php";
	

	$nombre 		= "Naranja (bolsa 5kg)";
	$precio			= "1.20€";
	$minimo			= "10";
	$cantidad		= "";
	$unidad			= "ud";
	$foto			= "/aplicacion/assets/img-productos/naranja.png";
	$stock			= "";
	//$calculado		= "";
	include "../../../../../plantillas/tarjetas/producto.php";


	$nombre 		= "Pera";
	$precio			= "0.28€";
	$minimo			= "40";
	$cantidad		= "";
	$unidad			= "kg";
	$foto			= "/aplicacion/assets/img-productos/pera.png";
	$stock			= "";
	//$calculado		= "";
	include "../../../../../plantillas/tarjetas/producto.php";


	$nombre 		= "Granada";
	$precio			= "";
	$minimo			= "40";
	$cantidad		= "";
	$unidad			= "kg";
	$foto			= "/aplicacion/assets/img-productos/granada.png";
	$stock			= "sinStock";
	//$calculado		= "";
	include "../../../../../plantillas/tarjetas/producto.php";
	echo "<!-- FOOTER -->";

	$footer 		= "si";
	$footerLink		= "";
	$footerLink		= "";
	include "../../../../../footer.php";
?>