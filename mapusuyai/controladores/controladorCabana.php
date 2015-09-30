<?php

include_once "./vistas/vistaCabana.php";
include_once "./modelos/modeloCabana.php";

class cabanaController{
	
	public function actioncabana(){
		$cabMod = new cabanaModel;
		$view = new CabanaView;
		$arrCab = $cabMod->todasLasCabanas();
		$view->set_cabanas($arrCab);
		$view->rendercabana();

	}

	public function actioncabanaseguncategoria($categoria){
		$cabMod = new cabanaModel;
		$view = new CabanaView;
		$categMod = new cabanaModel;
		$arrCat = $categMod->todasCategorias();
		$arrCab = $cabMod->todasLasCabanasSegunCategoria($categoria);
		var_dump($arrCab);
		$view->set_categoria($arrCat);
		$view->set_cabanas($arrCab);
		$view->rendercabanaSegunCategoria();

	}

	public function actioncabanasincategoria(){
		$cabMod = new cabanaModel;
		$view = new CabanaView;
		$categMod = new cabanaModel;
		$arrCat = $categMod->todasCategorias();
		$arrCab = $cabMod->todasLasCabanas();
		$view->set_categoria($arrCat);
		$view->set_cabanas($arrCab);
		$view->rendercabanaSegunCategoria();

	}

	public function actionTarifas(){
		$view = new CabanaView;
		$view->renderTarifas();
	}



}
?>