<div class="card normal">
<span class="triangle <?php puts($hideOptions, "");//"hide" to hide edit/remove ?>">
		<a href="" class="remove-icon"></a>
</span>
<a id="<?php puts($idProveedor, ""); ?>"
	class="proveedores"
	href="<?php puts($linkProveedor, "javascript:void(0)"); ?>">
	<span class="nombre">
		<?php puts($nombreProveedor, "Nombre proveedor"); ?>
	</span>
	<span class="categorias hide-mobile">
		<span class="title">
			Categorías:
		</span>
		<span class="list">
			<?php if ($categorias = nvl($categoriasList1)): ?>
			<ul class="first">
			<?php
			foreach ($categorias as $name):?>
					<?php echo "<li>$name</li>"?>
				<?php endforeach ?>
			</ul>
			<?php endif ?>
			<?php if ($categorias = nvl($categoriasList2)): ?>
			<ul class="second hide-mobile">
				<?php
				foreach ($categorias as $name):?>
					<?php echo "<li>$name</li>"?>
				<?php endforeach ?>

			</ul>
			<?php endif ?>
		</span> 
	</span>
</a>
</div>