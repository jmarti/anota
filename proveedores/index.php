<?php
	include_once "../utils.php";

	$siteTitle   = "Proveedores";
	include "../head.php";


	echo "<!-- HEADER -->";

	$titulo		 = "Fruites Romeu Sants";
	$proveedores = "active";
	$instruccion = "Administra tus proveedores";
	
	include "../header.php";


	echo "<!-- CONTENT -->";

	$nombreProveedor = "Servifrutas Bcn";
	$categoriasList1 = array(
		"Frutas",
		"Verduras",
		"Hortalizas");
	$categoriasList2 = array(
		"Frutos secos",
		"Setas");

	include "../plantillas/tarjetas/proveedores.php";


	$nombreProveedor = "Grupo de frutas antonio";
	$categoriasList1 = array(
		"Frutas",
		"Verduras",
		"Hortalizas");

	include "../plantillas/tarjetas/proveedores.php";


	$nombreProveedor = "Frutas a lo grande";
	$categoriasList1 = array(
		"Frutas",
		"Verduras");

	include "../plantillas/tarjetas/proveedores.php";


	$nombreProveedor = "Verduras y Hortalizas ecológicas";
	$categoriasList1 = array(
		"Verduras",
		"Hortalizas");

	include "../plantillas/tarjetas/proveedores.php";


	$nombreProveedor = "Casa Fruta";
	$categoriasList1 = array(
		"Frutas",
		"Verduras",
		"Hortalizas");

	include "../plantillas/tarjetas/proveedores.php";


	$anadir	= "proveedor";

	include "../plantillas/tarjetas/proveedores-anadir.php";
	

	echo "<!-- FOOTER -->";

	$footer 		= "no";
	include "../footer.php";
?>