<?php
include "./models/cabanasModelo.php";
include "./models/CategoriasModelo.php";
include "./views/AdminView.php";

class AdminController{

	private $model;
	
	function __construct(){

		$this->model = new Novedades();
		$this->view = new AdminView();
	}

	public function actionIndex(){
		$catModel = new Categorias();
		$this->view->render($this->model->load_NovedadesAdmin(), $catModel->load_Categorias());		
	}

	function mostrarHome(){
		$catModel = new Categorias();
    	$this->view->render($this->model->getCabanas(), $catModel->load_Categorias());
	}

	function mostrarHomeParcial(){

    	$this->view->mostrarParcial($this->model->getCabanas());
	}

	function mostrarBorrar(){

    	$this->view->mostrarBorrar($this->model->getCabanas());
	}
	  
	function agregarCabana(){	  	 
		
		if(isset($_REQUEST['titulo']) 
			//&& isset($_REQUEST['contenido']) 
			 //&& isset($_REQUEST['id_categoria']) 
			//&& isset($_FILES['imagesToUpload'])
			//&& isset($_REQUEST['precio'])
			//&& isset($_REQUEST['capacidad'])
			){
			
	       		$this->model->agregarCabana($_REQUEST['titulo'],$_REQUEST['contenido'],$_FILES['imagesToUpload'], $_REQUEST['id_categoria'],$_REQUEST['precio'],$_REQUEST['capacidad']);
	    	}
	    $this->mostrarHomeParcial();	      
	}

	// function borrarNovedad(){

	//     if(isset($_REQUEST['id_task'])){

	//       $this->model->borrarNovedad($_REQUEST['id_task']);
	//     }

	//     $this->mostrarBorrar();
	// }

	function agregarImagenes(){

	    if(isset($_REQUEST['id_task']) && isset($_FILES)){
	      $this->model->agregarImagenes($_REQUEST['id_task'],$_FILES);
	      echo '{ "result" :  "OK" }';
	    }else{
	      echo '{ "result" :  "Faltan paramentros" }';
	    }
	}
}

?>

