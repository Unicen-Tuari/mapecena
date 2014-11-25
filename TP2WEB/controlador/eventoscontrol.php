<?php


include "./modelo/modeloeventos.php";
include "./vista/eventosvista.php";

class eventosControl{
	
	public function actionEventos(){
		$eventos = new modeloeventos();
		$view = new eventosVista();
		$e = $eventos->load();
		$view->set_eventos($e);
		if (isset($_SESSION['usuario']))
			$view->SetUser($_SESSION['usuario']);
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

	public function insertarEvento()
	{
		//request toma post y get...
		$nombre = $_REQUEST['nombre'];
		$texto = $_REQUEST['texto'];		
		$ruta = $_REQUEST['ruta'];
		$fecha = $_REQUEST['fecha'];
		$ubicacion = $_REQUEST['ubicacion'];
		
		$arrEvento = $this->modeloEventos->insertarContenidoEvento($nombre,$texto);
		$id_contenido = $this->modeloEventos->obtenerID_ContenidoEvento();		
		$arrEvento = $this->modeloEventos->insertarImagenesEvento($id_contenido,$ruta);		
		$arrEvento = $this->modeloEventos->insertarEvento($id_contenido,$fecha,$ubicacion);

		$this->actionEvento();
	}

	public function editarEvento()
	{
		$id_evento = $_POST['id_evento'];
		
		$evento = $this->modeloEventos->datos_Evento($id_evento);			
		$this->view->modificarEvento($evento);
	}

	public function actualizarEvento()
	{
		$evento = $_POST['id_evento'];
				
		$fecha = $_POST["fecha"];
		$ubicacion 	= $_POST["ubicacion"];
		$ruta = $_POST["ruta"];
		$nombre = $_POST["nombre"];
		$texto = $_POST["texto"];
		
		$this->modeloEventos->modificarImagenesE($evento,$ruta);
		$this->modeloEventos->modificarE($evento,$fecha,$ubicacion);
		$this->modeloEventos->modificarContenidoE($nombre,$texto,$evento);
		$this->actionEvento();				
	}

	public function eliminarEvento()
	{
		$evento = $_POST['id_evento'];
					
		$this->modeloEventos->eliminarE($evento);
		$this->modeloEventos->eliminarImagenesE($evento);
		$this->modeloEventos->eliminarContenidoE($evento);
		$this->actionEvento();
	}

}


?>