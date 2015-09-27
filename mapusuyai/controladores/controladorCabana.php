<?php

include "./vistas/vistaCabana.php";
// include "./modelos/modeloMaquina.php";

class cabanaController{
	
	public function actioncabana(){
		
		
		$view = new CabanaView;
		
		$view->render();
		
	}

	

}

?>