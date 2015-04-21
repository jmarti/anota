<body>
<header>
	<div id="top-bar">
			<a href="<?php puts($linkAtras, "javascript:void(0)");?>" id="<?php puts($atras, "menu");?>"></a>
			<h1 id="titulo"><?php puts($titulo, "Fruites Romeu Sants");//Title in H1?></h1>
			<ul class= "navigation right">
				<li id="tienda"><a href="#">Cambiar tienda</a>
					<ul id="tiendas-list">
						<li>
							<a href="/aplicacion/">Fruites Romeu Sants</a>
						</li>
						</li>
						<li>
							<a href="">Fruites Romeu Clot</a>
						</li>
						<li>
							<a href="">Fruites Romeu Gràcia</a>
						</li>
					</ul>
				</li>
				<li id="avisos" class="icons">
					<a href="#"></a>
				</li>
				<li id="ajustes" class="icons">
					<a href="#"></a>
				</li>
				<li id="ayuda" class="icons">
					<a href="#"></a>
				</li>
			</ul>
		</div>
	<div class="container">
		<div id="instruccion" class="<?php puts($hideInstruccion, "");//"hide" makes #instruccion transparent. Note: combine this with $changeContent?>">
			<h2><?php puts($instruccion, "");//instruccion text?></h2>
			<span id="search"></span>
		</div>
	</div>
</header>
<nav id="menu-list">
	<ul>
		<li id="inicio-menu" class="hide-mobile">
			<a href="/aplicacion" class="<?php puts($inicio, "");//"active" to .active class?>">
				<span id="inicio-icon"></span>Inicio
			</a>
		<li id="pedidos-menu">
			<a href="/aplicacion/pedidos" class="<?php puts($pedidos, "");//"active" to .active class?>">
				<span id="pedidos-icon"></span>
				Pedidos
			</a>
			<ul id="submenu">
				<li id="nuevo-pedido-submenu">
					<a href="/aplicacion/pedidos/nuevo-pedido" class="<?php puts($nuevoPedido, "");//"active" to .active class?>">Nuevo Pedido</a>
				</li>
				<li id="plantillas-submenu">
					<a href="" class="<?php puts($plantillas, "");//"active" to .active class?>">Plantillas</a>
				</li>
				<li id="pedidos-pendientes-submenu">
					<a href="" class="<?php puts($Pendientes, "");//"active" to .active class?>">Pendientes</a>
				</li>
				<li id="pedidos-confirmados-submenu">
					<a href="" class="<?php puts($confirmados, "");//"active" to .active class?>">Confirmados</a>
				</li>
				<li id="borradores-submenu">
					<a href="" class="<?php puts($borradores, "");//"active" to .active class?>">Borradores</a>
				</li>
			</ul>
		</li>
		<li id="proveedores-menu">
			<a href="/aplicacion/proveedores" class="<?php puts($proveedores, "");//"active" to .active class?>">
				<span></span>
				Proveedores
			</a>
		</li>
		<li id="tiendas-menu">
			<a href="/aplicacion/tiendas" class="<?php puts($tiendas, "");//"active" to .active class?>">
				<span></span>
				Tiendas
			</a>
		</li>
		<li id="historico-menu">
			<a href="" class="<?php puts($historico, "");//"active" to .active class?>">
				<span></span>
				Histórico
			</a>
		</li>
		<li id="perfil-menu">
			<a href="" class="<?php puts($perfil, "");//"active" to .active class?>">
				<span></span>
				Mi Perfil
			</a>
		</li>
		<li id="ajustes-menu">
			<a href="" class="<?php puts($ajustes, "");//"active" to .active class?>">
				<span></span>
				Ajustes
			</a>
		</li>
		<li id="gold-menu">
			<a href="" class="<?php puts($gold, "");//"active" to .active class?>">
				<span></span>
				Cuenta Gold
			</a>
		</li>
	</ul>
</nav>
<div class="container <?php puts($background, "");//"mobileHome" for background in mobiles?>">
	<div id="content" class="<?php puts($changeContent, "");//"change" changes #content's padding-top. Usefull when #instruccion is 'hide'; "changeMobile" for do it only on mobile.?>">
		<div class="navegacion <?php puts($navegacion, "");//"visible" si hay navegacion?>"><?php puts($navegacionText, "");//contenido de la navegacion?></div>