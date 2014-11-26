<?php

class TurnosControl{
	
	public function actionTurnos(){
		include "./vista/turnosvista.php";
		$view = new turnosVista;
		if (isset($_SESSION['usuario']))
			$view->SetUser($_SESSION['usuario'],$_SESSION['esAdmin']);
		$view->render();
	}
	
}


?>