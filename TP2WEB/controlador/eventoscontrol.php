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

	// public function actionimg(){
	// 	$eventos = new modeloeventos();
	// 	$view = new eventosVista();
		
	// 	$img = $eventos->soloImagenesDe($id);
		
	// 	$view-> set_img($img);
	// 	$view->render();
		
	// }
	public function actionBusqueda(){
      
		$eventoModelo = new modeloeventos();
		$vistaEvento = new eventosVista();
		$busquedaRealizada = $_POST['inputBuscarE'];
		$eventoResultado = $eventoModelo->busqueda($busquedaRealizada);
		$vistaEvento->busqueda($eventoResultado);

	}

}


?>