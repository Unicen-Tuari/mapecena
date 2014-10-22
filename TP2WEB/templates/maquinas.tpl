{include file="header.tpl"}
</div>
</div>
</div>

<div class="main_bg">
	<div class="wrap">
		<div class="wrapper">
			<div class="main">
				<h2 class="style">Máquinas {$estado}</h2>
			</div>
		</div>
	</div>
</div>


{foreach key=id_maquina item=maquina from=$maquinas}
<div class="maq">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">

					<img class="img-responsive foto img-rounded" src="{$maquina['Ruta']}" /> 
                	
                	<a href="index.php?action=galeriaId&amp;id={$maquina['id_Contenido']}" class="fa fa-camera-retro fa-4x iconos"></a>
				</div>
				<div class="col-md-1"></div>
			</div>

			<h3 class="style">{utf8_encode($maquina['Nombre'])}</h3>
			<p class="info">{utf8_encode($maquina['Texto'])}</p>
			<strong><h3 class="info">Modelo: {$maquina['Modelo']}</h3>
			<h3 class="info">Tipo: {utf8_encode($maquina['Tipo'])}</h3>
			<h3 class="info">Precio: {utf8_encode($maquina['Precio'])}</h3></strong>

		</div>
		<div class="col-md-3"></div>
	</div>
</div>

{/foreach}








{include file="footer.tpl"}