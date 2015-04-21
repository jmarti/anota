<?php
//Nuevo pedido - resumen - eliminar
	include_once "../../../../../../utils.php";

	$siteTitle   = "Nuevo pedido | Fruites Romeu Sants";
	include "../../../../../../head.php";


	echo "<!-- HEADER -->";


	$atras		   = "atras";
	$linkAtras	   = "../";
	$titulo		   = "Fruites Romeu Sants";
	$pedidos 	   = "active";
	$nuevoPedido   = "active";
	$instruccion   = "Nuevo pedido a SERVIFRUTAS BCN";
	$navegacion    = "visible";
	$navegacionText= '<a href="../../../../">Seleccionar proveedor</a>
					<a href="../../">Seleccionar categoría</a> Tu pedido';
	include "../../../../../../header.php";



	echo "<!-- CONTENT -->";

	$nombre 		= "Aguacate";
	$precio			= "0.36€";
	$minimo			= "40";
	$cantidad		= "52";
	$foto			= "/aplicacion/assets/img-productos/aguacate.png";
	$stock			= "";
	$calculado		= "18.72€";
	$estado			= "entrado";
	$urlCancelar	= "anadido.php";
	$urlAceptar		= "eliminado.php";
	include "../../../../../../plantillas/tarjetas/producto-eliminar.php";
	unset($estado);
	unset($calculado);
	unset($urlCancelar);
	unset($urlAceptar);


	$nombre 		= "Chirimoya";
	$precio			= "0.55€";
	$minimo			= "40";
	$cantidad		= "62";
	$unidad			= "kg";
	$foto			= "/aplicacion/assets/img-productos/chirimoya.png";
	$stock			= "";
	$calculado		= "34.10€";
	$estado			= "entrado";
	include "../../../../../../plantillas/tarjetas/producto-anadido.php";
	

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
	include "../../../../../../plantillas/tarjetas/producto-anadido.php";
	

	$nombre 		= "Naranja (bolsa 5kg)";
	$precio			= "1.20€";
	$minimo			= "10";
	$cantidad		= "21";
	$unidad			= "ud";
	$foto			= "/aplicacion/assets/img-productos/naranja.png";
	$stock			= "";
	$calculado		= "25.20€";
	$estado			= "entrado";
	include "../../../../../../plantillas/tarjetas/producto-anadido.php";

	$nombre 		= "Pera";
	$precio			= "0.28€";
	$minimo			= "40";
	$cantidad		= "52";
	$unidad			= "kg";
	$foto			= "/aplicacion/assets/img-productos/pera.png";
	$stock			= "";
	$calculado		= "14.56€";
	$estado			= "entrado";
	include "../../../../../../plantillas/tarjetas/producto-anadido.php";

	$anadir			= "producto";
	include "../../../../../../plantillas/tarjetas/producto-anadir.php";


	echo "<!-- FOOTER -->";

	$footer 		= "si";
	$numProductos	= "5 Productos";
	$total			= "102.58";
	$footerLink		= "";
	$enabled		= "enabled";
	$buttonText		= "FINALIZAR";
	include "../../../../../../footer.php";
?>