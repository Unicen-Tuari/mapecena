<?php

require_once('view.php');	

class eventosVista extends View	{

	
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


	public function busqueda($Resultado){
		$cantidad = count($Resultado);
		$this->smarty->assign("cantidad",$cantidad);
		$this->smarty->assign("eventos",$Resultado);
		$this->smarty->display('soloevento.tpl');
		
	}	

	function nuevoEvento()
	{
		$this->smarty->display('agregarE.tpl'); 
	}

	function modificarEvento($evento)
	{
		if (isset($_SESSION['usuario']))
			$this->SetUser($_SESSION['usuario'],$_SESSION['esAdmin']);
		
		$this->smarty->assign("eventos",$evento);
		$this->smarty->display('modificarEvento.tpl'); 
	}

	
}


?>