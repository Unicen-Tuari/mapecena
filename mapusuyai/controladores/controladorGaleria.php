<?php

	// include "./modelos/modeloContacto.php";
	include "./vistas/vistaGaleria.php";
	
	class galeriaController{
		
		public function actionGaleria(){
			
			$view = new galeriaView;
			$view->render();
		}
	}


?>
