{include file="header.tpl"}
</div>
</div>
</div>


<div class="main_bg">
	<div class="wrap">
		<div class="wrapper">
			<div class="main">
				<!-- <h2 class="style">Máquinas {$estado}</h2> -->
				<h2 class="style">Máquinas</h2>
			</div>
		</div>
	</div>
</div>

<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4"></div>
  <div class="col-md-4">
	<form class = "busqueda" id="formBusqueda" method="POST">
	   			<input type="text" name="inputBuscar">
	            <button class = "btn btn-default" type = "submit" >
	                <i class="fa fa-search"></i>              
	            </button>
	</form>
</div>
</div>

<div id="resMaquinas">
	{include file="solomaquina.tpl"}
</div>




{include file="footer.tpl"}
