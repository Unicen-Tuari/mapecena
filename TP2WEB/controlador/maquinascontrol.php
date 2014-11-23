<?php
include_once ("./modelo/modelomaquina.php");
include_once ("./vista/maquinasvista.php");

class maquinasControl{
	
	public function actionMaquinas($estado){

		$descripcion = new modeloMaquinas();
		$vistamaquina = new maquinasvista();
		// if ($estado == 'NUEVA')
		// 	$est = 'N';
		// else
		// 	$est = 'U';
		// echo($estado);
		// $datos = $descripcion->devolverDescripcion($est);
		$datos = $descripcion->devolverDescripcion($estado);
		
		$vistamaquina->set_maquina($datos,$estado);
		$vistamaquina->render();
		
	}
	
	public function actionBusqueda(){
      
		$maquinasQ = new modeloMaquinas();
		$vistamaquina = new maquinasvista();
		$busquedaRealizada = $_POST['inputBuscar'];
		$MaqQ = $maquinasQ->busqueda($busquedaRealizada);	 	 
		$vistamaquina->busqueda($MaqQ);

	}
	
}

 ?>


