<?php

class IndexControl{
	
	public function actionIndex(){
		include "./vista/indexvista.php";
		$view = new IndexVista;
		if (isset($_SESSION['usuario']))
			$view->SetUser($_SESSION['usuario']);
		$view->render();
	}
	
}


?>