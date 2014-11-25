<?php

require_once('view.php');	

class eventosVista extends View	{

	function set_eventos($arrE){
		$cantidad = count($arrE);
		$this->smarty->assign("cantidad",$cantidad);
		$this->smarty->assign("eventos",$arrE);
	}
	function set_img($arrI){
		$this->smarty->assign("imagenes",$arrI);		
	}

	function render(){
		$this->smarty->display('eventos.tpl');
	}	

	function renderC(){
		$this->smarty->display('carouselE.tpl');
	}

	function busqueda($Resultado){
		$cantidad = count($Resultado);
		$this->smarty->assign("cantidad",$cantidad);
		$this->smarty->assign("eventos",$Resultado);
		$this->smarty->display('soloevento.tpl');
		
	}	

	function nuevoEvento()
	{
		$this->smarty->display('agregarE.tpl'); //agregarE
	}
	
}

?>