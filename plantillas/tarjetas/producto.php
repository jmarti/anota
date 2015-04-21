<div id="<?php puts($nombre, "");?>"
	 class="card normal producto <?php puts($stock, "");//"sinStock"?>">
	<form action="<?php puts($url,"javascript:void(0)");?>">
		<div class="cabecera">
			<label for="<?php puts($nombre, "");?>" class="nombre">
				<?php puts($nombre, "");?>
			</label>
			<div class="precio">
				<?php puts($precio, "");?>/<?php puts($unidad, "kg");?>
			</div>
		</div>
		<div class="detalles">
			<img class="foto" src="<?php puts($foto, "");?>">
			<span class="minimo">
				Mínimo <?php puts($minimo, "");?><?php puts($unidad, "kg");?>
			</span>
			<input type="number" name="<?php puts($nombre, "");?>"
			placeholder="<?php puts($minimo, "");?>"
			value="<?php puts($cantidad);?>">
			<span class="unidad"><?php puts($unidad, "kg");?></span>
			<button type="submit" class="<?php puts($estado,"");?>">
				Añadir: <?php puts($calculado,"0€");?>
			</button>
		</div>
		<div class="message <?php puts($stock, "");//"sinStock"?>">
			sin stock
		</div>
	</form>
</div>