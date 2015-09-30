<?php

class IndexController{
	
	public function actionIndex(){
		include "./vistas/vistaInicio.php";
		$view = new IndexView;
		$view->render();
	}

	public function actionIndexAjax(){
		include "./vistas/vistaInicioAjax.php";
		$view = new IndexViewAjax;
		$view->render();

	
	}
	
}

?>