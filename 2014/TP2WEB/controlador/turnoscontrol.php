<?php

class TurnosControl{
	
	public function actionTurnos(){
		include "./vista/turnosvista.php";
		$view = new turnosVista;
		$view->render();
	}
	
}


?>