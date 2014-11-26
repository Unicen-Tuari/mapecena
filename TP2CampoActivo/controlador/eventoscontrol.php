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
			$view->SetUser($_SESSION['usuario'],$_SESSION['esAdmin']);
		$view->render();
		
	}

	
	public function actionBusqueda(){
      
		$eventoModelo = new modeloeventos();
		$vistaEvento = new eventosVista();
		$busquedaRealizada = $_POST['inputBuscarE'];
		$eventoResultado = $eventoModelo->busqueda($busquedaRealizada);
		$vistaEvento->busqueda($eventoResultado);

	}

	public function vistaAgregarE()
	{	$view = new eventosVista();
		if (isset($_SESSION['usuario']))
			$view->SetUser($_SESSION['usuario'],$_SESSION['esAdmin']);
		
		$view->nuevoEvento();
	}

	public function insertarEvento()
	{
		//request toma post y get...
		$nombre = $_REQUEST['nombre'];
		$texto = $_REQUEST['texto'];		
		$ruta = $_REQUEST['ruta'];
		$fecha = $_REQUEST['fecha'];
		$ubicacion = $_REQUEST['ubicacion'];
		$modeloEventos = new modeloeventos();
		$arrEvento = $modeloEventos->insertarContenidoEvento($nombre,$texto);
		$id_contenido = $modeloEventos->obtenerID_ContenidoEvento();		
		$arrEvento = $modeloEventos->insertarImagenesEvento($id_contenido,$ruta);		
		$arrEvento = $modeloEventos->insertarEvento($id_contenido,$fecha,$ubicacion);

		$this->actionEventos();
	}

	public function editarEvento()
	{
		$id_evento = $_POST['id_evento'];
		$modeloEventos = new modeloeventos();
		$view = new eventosVista();
		$evento = $modeloEventos->datos_Evento($id_evento);			
		$view->modificarEvento($evento);
	}

	public function actualizarEvento()
	{
		$evento = $_POST['id_evento'];
				
		$fecha = $_POST["fecha"];
		$ubicacion 	= $_POST["ubicacion"];
		$ruta = $_POST["ruta"];
		$nombre = $_POST["nombre"];
		$texto = $_POST["texto"];
		$modeloEventos = new modeloeventos();
		$modeloEventos->modificarImagenesE($evento,$ruta);
		$modeloEventos->modificarE($evento,$fecha,$ubicacion);
		$modeloEventos->modificarContenidoE($nombre,$texto,$evento);
		$this->actionEventos();				
	}

	public function eliminarEvento()
	{
		$evento = $_POST['id_evento'];
		$modeloEventos = new modeloeventos();			
		$modeloEventos->eliminarImagenesE($evento);
		$modeloEventos->eliminarE($evento);
		$modeloEventos->eliminarContenidoE($evento);
		$this->actionEventos();
	}
}

?>