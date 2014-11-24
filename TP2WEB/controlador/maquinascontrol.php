<?php
include_once ("./modelo/modelomaquina.php");
include_once ("./vista/maquinasvista.php");

class maquinasControl{
	
	public function actionMaquinas($estado){

		$descripcion = new modeloMaquinas();
		$vistamaquina = new maquinasvista();		
		$datos = $descripcion->devolverDescripcion($estado);
		$cantidad = count($datos);
		$vistamaquina->set_maquina($datos,$estado,$cantidad);
		$vistamaquina->render();
		
	}
	
	public function actionBusqueda(){
      
		$maquinasQ = new modeloMaquinas();
		$vistamaquina = new maquinasvista();
		$busquedaRealizada = $_POST['inputBuscarM'];
		$MaqQ = $maquinasQ->busqueda($busquedaRealizada);
		$vistamaquina->busqueda($MaqQ);

	}
	
}

 ?>


