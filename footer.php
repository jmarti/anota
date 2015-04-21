	</div>
</div>
<footer class="<?php puts($footer, "");//footer content?>">
	<div class="right carrito">
		<div class="productos">
			<div class="num-productos">
				<?php puts($numProductos,"0 Productos");?>
			</div>
			<div class="total">
				TOTAL: <?php puts($total,"0");?>€
			</div>
		</div>
		<a href="<?php puts($footerLink, "javascript:void(0)");?>"
			class="footer-button <?php puts($enabled, "disabled");//"enabled"?>">
			<?php puts($buttonText, "VER PEDIDO");?>
		</a>
	</div>
	<div class="options <?php puts($footerOptions, "");//"show"?>">
		<a href="javascript:void(0)" class="guardar <?php puts($guardar,"");//"hide";?>"></a>
	</div>
</footer>
</body>
</html>