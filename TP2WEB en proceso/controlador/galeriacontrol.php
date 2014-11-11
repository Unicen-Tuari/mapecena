<?php
include "./modelo/modelogaleria.php";
include "./vista/galeriavista.php";

class galeriaControl{
	
	public function actionGaleria(){
		$galeria = new modelogaleria();
		$view = new galeriaVista();
		
		$e = $galeria->load();

		$view->set_galeria($e);
		$view->render();

	}

	public function soloImagenesDe($id){

		$galeria = new modelogaleria();
		$view = new galeriaVista;
		
		$imgMaq = $galeria->soloImagenesDe($id);		 	 
		
		$view->set_galeria($imgMaq);

		$view->render();

	}

	public function actionBusquedaMaq($q){

		$galeria = new modelogaleria();
		$view = new galeriaVista;
		
		$imgMaqB = $galeria->load_ResFinales($q);		 	 
		
		$view->set_maquinas($imgMaqB);

		$view->render();

	}
	
}


?>
