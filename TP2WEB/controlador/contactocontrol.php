<?php
include "./modelo/modelocontacto.php";
include "./vista/contactovista.php";
class contactoControl{
	
	public function actionControl(){
		
		$view = new contactoVista;
		if (isset($_SESSION['usuario']))
			$view->SetUser($_SESSION['usuario']);
		$view->render();
	}

	public function insertarComentario($nombre,$apellido,$email,$tel,$comentario){
		
		$contacto = new modeloContacto;
		$view = new contactoVista;
		$arrContacto = $contacto->nuevoComentario($nombre,$apellido,$email,$tel,$comentario);
		$view->renderContacto($arrContacto);

	}
	
}


?>