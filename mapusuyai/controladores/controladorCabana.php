<?php

include_once "./vistas/vistaCabana.php";
include_once "./modelos/modeloCabana.php";

class cabanaController{
	
	public function actioncabana(){
		$cabnamod = new cabanaModel;
		$view = new CabanaView;

		$arrCab = $cabnamod->todasLasCabanas();
		var_dump($arrCab);
		
		$view->set_cabanas($arrCab);
		$view->rendercabana();

	}

	public function actioncabanaseguncategoria($categoria){
		$cabnamod = new cabanaModel;
		$view = new CabanaView;

		$arrCab = $cabnamod->todasLasCabanasSegunCategoria($categoria);
		var_dump($arrCab);
		
		$view->set_cabanas($arrCab);
		$view->rendercabanaSegunCategoria();

	}

	public function actionTarifas(){
		$view = new CabanaView;
		$view->renderTarifas();
	}
}

?>