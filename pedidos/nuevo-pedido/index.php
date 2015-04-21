<?php
//Nuevo pedido - seleccion proveedor
	include_once "../../utils.php";

	$siteTitle   = "Nuevo pedido | Fruites Romeu Sants";
	include "../../head.php";


	echo "<!-- HEADER -->";


	$atras			 = "atras";
	$linkAtras		 = "../";
	$titulo		   = "Fruites Romeu Sants";
	$pedidos 	   = "active";
	$nuevoPedido   = "active";
	$instruccion   = "Nuevo pedido";
	$navegacion    = "visible";
	$navegacionText= "Seleccionar proveedor";
	include "../../header.php";


	echo "<!-- CONTENT -->";

	?>

	<?php
	$hideOptions = "hide";	

	$nombreProveedor = "Servifrutas Bcn";
	$linkProveedor = "servifrutas-bcn/catalogo/";
	$categoriasList1 = array(
		"Frutas",
		"Verduras",
		"Hortalizas");
	$categoriasList2 = array(
		"Frutos secos",
		"Setas");

	include "../../plantillas/tarjetas/proveedores.php";


	$nombreProveedor = "Grupo de frutas antonio";
	$categoriasList1 = array(
		"Frutas",
		"Verduras",
		"Hortalizas");

	include "../../plantillas/tarjetas/proveedores.php";


	$nombreProveedor = "Frutas a lo grande";
	$categoriasList1 = array(
		"Frutas",
		"Verduras");

	include "../../plantillas/tarjetas/proveedores.php";


	$nombreProveedor = "Verduras y Hortalizas ecológicas";
	$categoriasList1 = array(
		"Verduras",
		"Hortalizas");

	include "../../plantillas/tarjetas/proveedores.php";


	$nombreProveedor = "Casa Fruta";
	$categoriasList1 = array(
		"Frutas",
		"Verduras",
		"Hortalizas");

	include "../../plantillas/tarjetas/proveedores.php";


	$anadir	= "proveedor";

	include "../../plantillas/tarjetas/proveedores-anadir.php";
	

	echo "<!-- FOOTER -->";

	$footer 		= "no";
	include "../../footer.php";
?>