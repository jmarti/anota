<?php
//inicio
	include_once "utils.php";

	$background = "mobileHome";
	$siteTitle   = "Inicio";
	include "head.php";


	echo "<!-- HEADER -->";

	$titulo			 = "Fruites Romeu Sants";
	$inicio			 = "active";
	$instruccion 	 = "";
	$hideInstruccion = "hide";
	$changeContent	 = "change";
	
	include "header.php";


	echo "<!-- CONTENT -->";
?>
<div class="hide-mobile">
	<div id="plantillasYresumen-card" class="home hide-tablet-v">
		<p>Últimas plantillas</p>
		<a href="javascript:void(0)" class="card plantillas">
		</a>
		<p>Resumen</p>
		<a href="javascript:void(0)" class="card resumen">
		</a>
	</div>
	<div id="pedidos-card" class="home">
		<p>Últimos pedidos</p>
		<a href="javascript:void(0)" class="card card-1x2 pedidos">
		</a>
	</div>
	<div id="avisos-card" class="home">
		<p>Avisos Recientes<a class="mas" href="javascript:void(0)">ver más avisos</a></p>
		<a href="javascript:void(0)" class="card card-1x2 avisos">
		</a>
	</div>
	<div id="plantillas-card" class="home show-tablet-v">
		<p>Últimas plantillas</p>
		<a href="javascript:void(0)" class="card plantillas">
		</a>
	</div>
	<div id="resumen-card" class="home show-tablet-v">
		<p>Resumen</p>
		<a href="javascript:void(0)" class="card resumen">
		</a>
	</div>
	<div id="historico-card" class="home hide-tablet-v">
		<p>Histórico anual</p>
		<a href="javascript:void(0)" class="card card-3x1 historico">
		</a>
	</div>
	<div id="historico-card" class="home show-tablet-v">
		<p>Histórico anual</p>
		<a href="javascript:void(0)" class="card card-2x1 historico">
		</a>
	</div>
</div>
<div class="show-mobile">
	<?php
		include "index-mobile.php"
	?>
</div>
<?php
	echo "<!-- FOOTER -->";

	$footer 		= "no";
	include "footer.php";
?>