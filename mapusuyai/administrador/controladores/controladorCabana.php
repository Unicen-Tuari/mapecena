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

	// public function actionMaquina($estado)
	// {			
	// 	$m = $this->modeloMaquinas->load_Maq($estado);				
		
	// 	$this->view->set_maquinas($m);
	// 	$this->view->render();		
	// }

	// public function actionCarouselMaq($estado,$id_maq)
	// {
	// 	$imgMaq = $this->modeloMaquinas->load_ImgMaq($estado,$id_maq);		 	 
		
	// 	$this->view->set_imgMaq($imgMaq);
	// 	$this->view->renderCM();
	// }

	public function vistaAgregarCab()
	{
		$this->view->nuevaCabana();
	}

	public function insertarCabana()
	{
		
		//sin control porque se supone que lo utiliza el administrador de la pagina
		 
		 		
				$NOMBRE = $_REQUEST['NOMBRE'];
				
				$ID_CATEGORIA 	= $_REQUEST['ID_CATEGORIA'];//tipo
				$CAPACIDAD = $_REQUEST['CAPACIDAD'];
				$URL_IMG 	= $_REQUEST['URL_IMG'];//ruta
				$PRECIO = $_REQUEST['PRECIO'];
				$DETALLE 	= $_REQUEST['DETALLE'];//texto		

				$arrCab = $this->modeloCabanas->insertarContenidoCab($NOMBRE,$ID_CATEGORIA,$CAPACIDAD,
								$URL_IMG,$PRECIO,$DETALLE);

			
				
	      		
		// llamar a mostrar cabañas
		
	// 	$this->view->mostrarCabanas();
			
	}

	// public function actionBusquedaMaq($q)
	// {
	// 	$imgMaqB = $this->modeloMaquinas->load_ResFinales($q);		 	 
		
	// 	$this->view->set_maquinas($imgMaqB);
	// 	$this->view->render();
	// }	

	// public function editarMaq()
	// {
	// 	$maquina = $_POST['id_maq'];
	// 	$m = explode("&", $maquina);
		
	// 	$maqmod = $this->modeloMaquinas->datos_Maq($m[1],$m[0]);			
	// 	$this->view->modificarMaquina($maqmod);
	// }

	// public function actualizarMaq()
	// {
	// 	$maquina = $_POST['id_maq'];
	// 	$m = explode("&", $maquina);

	// 	$nombre = $_POST["nombre"];
	// 	$tipo 	= $_POST["tipo"];
	// 	$modelo = $_POST["modelo"];
	// 	$estado = $_POST["estado"];
	// 	$ruta 	= $_POST["ruta"];
	// 	$precio = $_POST["precio"];
	// 	$texto 	= $_POST["texto"];	
		
	// 	$this->modeloMaquinas->modificarImagenesMaq($m[0],$ruta);
	// 	$this->modeloMaquinas->modificarMaq($m[0],$m[1],$modelo,$tipo,$precio);// $this->actualizarMaq($m[0]);
	// 	$this->modeloMaquinas->modificarContenidoMaq($nombre,$texto,$m[0]);
	// 	$this->actionMaquina($m[1]);				
	// }

	// public function eliminarMaquina()
	// {
	// 	$maquina = $_POST['id_maq'];
	// 	$m = explode("&", $maquina);
			
	// 	$this->modeloMaquinas->eliminarMaq($m[0]);
	// 	$this->modeloMaquinas->eliminarImagenesMaq($m[0]);
	// 	$this->modeloMaquinas->eliminarContenidoMaq($m[0]);
	// 	$this->actionMaquina($m[1]);
	// }	
}

?>