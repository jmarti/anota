<div class="card normal">
<span class="triangle">
	<a href="" class="edit-icon"></a>
</span>
<a id="<?php puts($idTienda, ""); ?>"
	class="tienda <?php puts($hayAvisos,"");//"si" cuando hay avisos?>"
	href="<?php puts($linkTienda, "javascript:void(0)"); ?>">
	<?php puts($nombreTienda, "Nombre tienda"); ?>
	<span class="avisosTienda">
		<?php puts($mensajeAvisos, ""); ?>
	</span>
</a>
</div>