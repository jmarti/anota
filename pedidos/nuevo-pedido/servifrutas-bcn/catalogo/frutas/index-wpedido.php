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
	$urlEditar		= "editar.php";
	$urlEliminar	= "eliminar.php";
	include "../../../../../plantillas/tarjetas/producto-anadido.php";
	unset($estado);
	unset($calculado);
	unset($url);
	unset($urlEditar);
	unset($urlEliminar);


	$nombre 		= "Chirimoya";
	$precio			= "0.55€";
	$minimo			= "40";
	$cantidad		= "62";
	$unidad			= "kg";
	$foto			= "/aplicacion/assets/img-productos/chirimoya.png";
	$stock			= "";
	$calculado		= "34.10€";
	$estado			= "entrado";
	include "../../../../../plantillas/tarjetas/producto-anadido.php";
	unset($estado);
	unset($calculado);



	$nombre 		= "Melocotón";
	$precio			= "0.25€";
	$minimo			= "40";
	$cantidad		= "40";
	$unidad			= "kg";
	$unidad			= "kg";
	$foto			= "/aplicacion/assets/img-productos/melocoton.png";
	$stock			= "";
	$calculado		= "10.00€";
	$estado			= "entrado";
	include "../../../../../plantillas/tarjetas/producto-anadido.php";
	include "../../../../../plantillas/tarjetas/producto-anadido.php";
	unset($estado);
	unset($calculado);



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
	$cantidad		= "21";
	$unidad			= "ud";
	$foto			= "/aplicacion/assets/img-productos/naranja.png";
	$stock			= "";
	$calculado		= "25.20€";
	$estado			= "entrado";
	include "../../../../../plantillas/tarjetas/producto-anadido.php";
	unset($estado);
	unset($calculado);


	

	$nombre 		= "Pera";
	$precio			= "0.28€";
	$minimo			= "40";
	$cantidad		= "52";
	$unidad			= "kg";
	$foto			= "/aplicacion/assets/img-productos/pera.png";
	$stock			= "";
	$calculado		= "14.56€";
	$estado			= "entrado";
	include "../../../../../plantillas/tarjetas/producto-anadido.php";
	unset($estado);
	unset($calculado);


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
	$numProductos	= "5 Productos";
	$total			= "102.58";
	$footerLink		= "/aplicacion/pedidos/nuevo-pedido/servifrutas-bcn/catalogo/frutas/resumen";
	$enabled		= "enabled";
	include "../../../../../footer.php";
?>