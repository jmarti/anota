<div id="<?php puts($nombre, "");?>"
	 class="card normal producto anadido">
	<div class="cabecera">
		<a class="edit show-mobile" href="javascript:void(0)"></a>
		<label for="<?php puts($nombre, "");?>" class="nombre">
			<?php puts($nombre, "");?>
		</label>
	</div>
	<div class="detalles">
		<span class="importe">
			<?php puts($calculado, "");?> / <?php puts($cantidad);?><?php puts($unidad, "kg");?>
		</span>
		<img class="foto hide-mobile" src="<?php puts($foto, "");?>">
		<div class="options">
			<a class="editar" href="<?php puts($urlEditar, "")?>">
				Editar
			</a>
			<a class="eliminar" href="<?php puts($urlEliminar, "")?>">
				Eliminar
			</a>
		</div>
	</div>
</div>