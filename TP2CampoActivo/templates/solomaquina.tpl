
{if $cantidad gt 0}
{foreach key=id_maquina item=maquina from=$maquinas}

	{if (isset($esAdmin) and ($esAdmin eq 1))}
		<div class="col-lg-6 text-center">
		    <form name = "modificar" action="index.php?action=modificarMaq" method="POST">
		        <input name = "id_maq" type = "hidden" 
		        value = "{$maquina['id_Contenido']}">
		        <button class = "glyphicon glyphicon-edit btn btn-default" type = "submit"> Modificar</button>
		    </form>                    
		</div>
		<div class="col-lg-6 text-center">
		    <form name = "eliminar" action="index.php?action=eliminarMaq" method="POST">
		        <input name = "id_maq" type = "hidden" value = "{$maquina['id_Contenido']}">
		        <button type = "submit" class="glyphicon glyphicon-remove btn btn-default"> Eliminar</button>
		    </form>
		</div>
	{/if}
	
	<div class="maq" >
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
				<h3 class="info">Estado: {utf8_encode($maquina['Estado'])}</h3></strong>
				
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
	
		<br>
		<hr align="center" size="2" width="80%" style="color: #0056b2;" />
		<br>
{/foreach}

{else}
	<div class="row">
	  <div class="col-md-3"></div>
	  <div class="col-md-6"><h2 class="style">No se encontraron resultados para su búsqueda</h2></div>
	  <div class="col-md-3"></div>
	</div>
	<br>				
{/if}
