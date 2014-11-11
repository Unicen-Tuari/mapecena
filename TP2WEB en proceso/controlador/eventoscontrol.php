<?php


include "./modelo/modeloeventos.php";
include "./vista/eventosvista.php";

class eventosControl{
	
	public function actionEventos(){
		$eventos = new modeloeventos();
		$view = new eventosVista();
		
		$e = $eventos->load();

		$view->set_eventos($e);

		$view->render();
		
	}

	public function actionimg($id){
		$eventos = new modeloeventos();
		$view = new eventosVista();
		
		$img = $eventos->soloImagenesDe('14');
		
		$view-> set_img($img);
		$view->render();
		
	}
	
}


?>