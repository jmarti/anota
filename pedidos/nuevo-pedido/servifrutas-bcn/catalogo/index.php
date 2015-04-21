<?php
//Nuevo pedido - catalogo
	include_once "../../../../utils.php";

	$siteTitle   = "Nuevo pedido | Fruites Romeu Sants";
	include "../../../../head.php";


	echo "<!-- HEADER -->";


	$atras			 = "atras";
	$linkAtras		 = "../../";
	$titulo		   = "Fruites Romeu Sants";
	$pedidos 	   = "active";
	$nuevoPedido   = "active";
	$instruccion   = "Nuevo pedido a SERVIFRUTAS BCN";
	$navegacion    = "visible";
	$navegacionText= '<a href="../../">Seleccionar proveedor</a>
					Seleccionar categoría';
	
	include "../../../../header.php";


	echo "<!-- CONTENT -->";

	$hideOptions = "hide";	

	$id 		= "frutas";
	$categoria	= "Frutas";
	$link		= "frutas/";
	include "../../../../plantillas/tarjetas/categorias.php";


	$id 		= "frutos-secos";
	$categoria	= "Frutos secos";
	include "../../../../plantillas/tarjetas/categorias.php";


	$id 		= "verduras-hortalizas";
	$categoria	= "Verduras y hortalizas";
	include "../../../../plantillas/tarjetas/categorias.php";
	

	$id 		= "setas";
	$categoria	= "Setas";
	include "../../../../plantillas/tarjetas/categorias.php";


	$id 		= "frutas-deshidratadas";
	$categoria	= "Frutas deshidratadas";
	include "../../../../plantillas/tarjetas/categorias.php";



	echo "<!-- FOOTER -->";

	$footer 		= "no";
	include "../../../../footer.php";
?>