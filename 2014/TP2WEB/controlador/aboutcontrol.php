<?php

class aboutControl{
	
	public function actionAbout(){
		include "./vista/aboutvista.php";
		$view = new aboutVista;
		$view->render();
	}
	
}


?>