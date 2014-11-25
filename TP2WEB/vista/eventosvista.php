<?php

require_once('view.php');	

class eventosVista extends View	{

	// public function SetUser($usuario){
		
	// 	$this->smarty->assign("usuario",$usuario);
	// }
	
	public function set_eventos($arrE){
		$cantidad = count($arrE);
		$this->smarty->assign("cantidad",$cantidad);
		$this->smarty->assign("eventos",$arrE);
	}
	
	public function set_img($arrI){
		$this->smarty->assign("imagenes",$arrI);		
	}

	public function render(){
		$this->smarty->display('eventos.tpl');
	}	

	public function renderC(){
		$this->smarty->display('carouselE.tpl');
	}

	public function busqueda($Resultado){
		$cantidad = count($Resultado);
		$this->smarty->assign("cantidad",$cantidad);
		$this->smarty->assign("eventos",$Resultado);
		$this->smarty->display('soloevento.tpl');
		
	}	

	public function nuevoEvento()
	{
		$this->smarty->display('agregarE.tpl'); //agregarE
	}
	
}

?>