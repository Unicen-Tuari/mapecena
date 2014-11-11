<?php
include_once ("./modelo/modelomaquina.php");
include_once ("./vista/maquinasvista.php");

class maquinasControl{
	
	public function actionMaquinas($estado){

		$descripcion = new modeloMaquinas();
		$vistamaquina = new maquinasvista();
		if ($estado == 'nuevas')
			$est = 'N';
		else
			$est = 'U';
		$datos = $descripcion->devolverDescripcion($est);
		
		$vistamaquina->set_maquina($datos,$estado);
		$vistamaquina->render();
		
	}
	
	public function actionBusqueda($q){

		$maquinasQ = new modeloMaquinas();
		$view = new maquinasvista;
		
		$MaqQ = $maquinasQ->busqueda($q);		 	 
		
		$view->set_maquina($MaqQ," ");
		
		
		$view->render();

	}
	
}

 ?>


