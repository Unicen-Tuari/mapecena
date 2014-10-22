<?php

class contactoControl{
	
	public function actionControl(){
		include "./vista/contactovista.php";
		$view = new contactoVista;
		$view->render();
	}
	
}


?>