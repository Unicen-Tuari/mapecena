<?php

class IndexControl{
	
	public function actionIndex(){
		include "./vista/indexvista.php";
		$view = new IndexVista;
		$view->render();
	}
	
}


?>