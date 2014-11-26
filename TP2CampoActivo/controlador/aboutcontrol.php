<?php

class aboutControl{
	
	public function actionAbout(){
		include "./vista/aboutvista.php";
		$view = new aboutVista;
		if (isset($_SESSION['usuario']))
			$view->SetUser($_SESSION['usuario'],$_SESSION['esAdmin']);
		$view->render();
	}
	
}


?>