<?php
include_once ("./modelo/modelomaquina.php");
include_once ("./vista/maquinasvista.php");

class maquinasControl{
	
	private $modeloMaquinas;
	private	$view;

	public function __construct()
	{
		$this->modeloMaquinas = new modeloMaquinas();
		$this->view = new maquinasvista;
	}

	public function actionMaquinas($estado){
		
		$descripcion = new modeloMaquinas();
		$vistamaquina = new maquinasvista();		
		$datos = $descripcion->devolverDescripcion($estado);
		$cantidad = count($datos);
		$vistamaquina->set_maquina($datos,$estado,$cantidad);
		if (isset($_SESSION['usuario']))
			$vistamaquina->SetUser($_SESSION['usuario'],$_SESSION['esAdmin']);
		$vistamaquina->render();
		
	}
	
	public function actionBusqueda(){
      
		$maquinasQ = new modeloMaquinas();
		$vistamaquina = new maquinasvista();
		$busquedaRealizada = $_POST['inputBuscarM'];
		$MaqQ = $maquinasQ->busqueda($busquedaRealizada);
		$vistamaquina->busqueda($MaqQ);

	}

	public function actionBusquedaMaq($q)
	{
		$imgMaqB = $this->modeloMaquinas->load_ResFinales($q);		 	 
		
		$this->view->set_maquinas($imgMaqB);
		if (isset($_SESSION['usuario']))
			$this->view->SetUser($_SESSION['usuario'],$_SESSION['esAdmin']);

		$this->view->render();
	}

	public function AgregarMaq()
	{
		if (isset($_SESSION['usuario']))
			$this->view->SetUser($_SESSION['usuario'],$_SESSION['esAdmin']);
		$this->view->nuevaMaquina();
	}

	public function insertarMaquina()
	{
		//request toma post y get...

		$nombre = $_REQUEST["nombre"];
		$tipo 	= $_REQUEST["tipo"];
		$modelo = $_REQUEST["modelo"];
		$estado = $_REQUEST["estado"];
		$ruta 	= $_REQUEST["ruta"];
		$precio = $_REQUEST["precio"];
		$texto 	= $_REQUEST["texto"];		

		$arrMaq = $this->modeloMaquinas->insertarContenidoMaq($nombre,$texto);
		$id_contenido = $this->modeloMaquinas->obtenerID_ContenidoMaq();		
		$arrMaq = $this->modeloMaquinas->insertarImagenesMaq($id_contenido,$ruta);		
		$arrMaq = $this->modeloMaquinas->insertarMaq($id_contenido,$estado,$modelo,$tipo,$precio);
		include "./vista/vistaErrores.php";
		$error = new Errores();
		if (isset($_SESSION['usuario']))
			$error->SetUser($_SESSION['usuario'],$_SESSION['esAdmin']);
		$error->altaMaquina();
	}

		



	public function editarMaq()
	{
		$maquina = $_POST['id_maq'];		

		$maqmod = $this->modeloMaquinas->datos_Maq($maquina);			
		$this->view->modificarMaquina($maqmod);
	}

	public function limpiarString($string) //función para limpiar strings
		{
			$string = strip_tags($string);
			$string = htmlentities($string, ENT_QUOTES,'UTF-8');
			return stripslashes($string);  
			mysql_real_escape_string($string);
			return($string);
		}
	public function actualizarMaq()
	{
		$maquina = $_POST['id_maq'];
		$m = explode("&", $maquina);

		$nombre = $_POST["nombre"];
		$tipo 	= $_POST["tipo"];
		$modelo = $_POST["modelo"];
		$estado = $_POST["estado"];
		$ruta 	= $_POST["ruta"];
		$precio = $_POST["precio"];
		$texto 	= ($_POST["texto"]);	
		// echo('$texto: '.$texto);//no funcionó
		// echo('-------------------------------------------------------------');
		$textoLimpio = $this->limpiarString($texto); //función para limpiar strings
		echo('$m[0] '.$m[0]);
		echo('$m[1] '.$m[1]);
		die(' actionMaquinas');
		// echo('$textoLimpio: '.$textoLimpio);
		$this->modeloMaquinas->modificarImagenesMaq($m[0],$ruta);
		$this->modeloMaquinas->modificarMaq($m[0],$m[1],$modelo,$tipo,$precio);
		$this->modeloMaquinas->modificarContenidoMaq($nombre,$texto,$m[0]);
		$this->actionMaquinas($m[1]);


		$this->modeloMaquinas->modificarImagenesMaq($m[0],$ruta);
		$this->modeloMaquinas->modificarMaq($m[0],$m[1],$modelo,$tipo,$precio);
		$this->modeloMaquinas->modificarContenidoMaq($nombre,$texto,$m[0]);
		$this->actionMaquinas($m[1]);				
	}

	public function eliminarMaquina()
	{
		$maquina = $_POST['id_maq'];
		$m = explode("&", $maquina);
				
		$this->modeloMaquinas->eliminarMaq($m[0]);
		$this->modeloMaquinas->eliminarImagenesMaq($m[0]);
		$this->modeloMaquinas->eliminarContenidoMaq($m[0]);
		$this->actionMaquinas('NUEVA');
	}	

	
}

 ?>


