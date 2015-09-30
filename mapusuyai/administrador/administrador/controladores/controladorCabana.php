<?php

class CabanaController
{	
	private $modeloCabanas;
	private	$view;
	

	public function __construct()
	{
		include_once "./vistas/vistaCabana.php";
		include_once "./modelos/modeloCabana.php";

		$this->modeloCabanas = new Cabana();
		$this->view = new CabanaView;
	}


	public function vistaAgregarCab()
	{
		$this->view->nuevaCabana();
	}

	
	public function finCarga()
	{
		$this->view->finCargaCabana();
	}

	public function errorCarga()
	{
		$this->view->errorCargaCabana();
	}

	public function insertarCabana()
	{
		
		//No es necesario tener un control de datos porque se 
		//supone que lo utiliza el administrador de la pagina
		//y esta contemplado en el tpl
		
 		$urlDefault = "uploads/";
		$NOMBRE = $_REQUEST['NOMBRE'];
		$ID_CATEGORIA = $_REQUEST['ID_CATEGORIA'];
		$CAPACIDAD = $_REQUEST['CAPACIDAD'];
		$URL_IMG = $urlDefault.$_FILES[0]['name'];
		
		$PRECIO = $_REQUEST['PRECIO'];
		$DETALLE = $_REQUEST['DETALLE'];		

		$arrCab = $this->modeloCabanas->insertarContenidoCab($NOMBRE,$ID_CATEGORIA,$CAPACIDAD,
						$URL_IMG,$PRECIO,$DETALLE);

		// echo '{ "result" :  "OK" }';
		return;
			
	}
}

?>