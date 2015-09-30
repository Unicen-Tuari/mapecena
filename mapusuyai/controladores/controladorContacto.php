<?php



	include "./vistas/vistaContacto.php";
	
	class ContactoController{
		
		public function actionContacto(){
			
			$view = new ContactoView;
			$view->render();
		}

		

	}



?>