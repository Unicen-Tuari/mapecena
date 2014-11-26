<?php

class IndexControl{
	
	public function actionIndex(){
		include "./vista/indexvista.php";
		$view = new IndexVista;
		if (isset($_SESSION['usuario']))
			$view->SetUser($_SESSION['usuario'],$_SESSION['esAdmin']);
		$view->render();
	}
	
}


?>