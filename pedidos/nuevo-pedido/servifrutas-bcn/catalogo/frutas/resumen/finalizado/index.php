<?php
//Nuevo pedido - finalizado
	include_once "../../../../../../../utils.php";

	$siteTitle   = "Nuevo pedido | Fruites Romeu Sants";
	include "../../../../../../../head.php";


	echo "<!-- HEADER -->";


	$atras		   = "atras";
	$linkAtras	   = "../";
	$titulo		   = "Fruites Romeu Sants";
	$pedidos 	   = "active";
	$nuevoPedido   = "active";
	$instruccion   = "Nuevo pedido a SERVIFRUTAS BCN";
	$navegacion    = "visible";
	$navegacionText= '<a class="disabled">Seleccionar proveedor</a>
					<a class="disabled">Seleccionar categoría</a> Tu pedido';
	include "../../../../../../../header.php";


	echo "<!-- CONTENT -->";

?>
<div class="finalizado"></div>
</div>

<?php

	echo "<!-- FOOTER -->";

	$footer 		= "no";
	$numProductos	= "5 Productos";
	$total			= "102.58";
	//$footerLink		= "";
	$enabled		= "enabled";
	$buttonText		= "VOLVER A";
	include "../../../../../../../footer.php";
?>