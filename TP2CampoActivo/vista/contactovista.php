<?php

require_once('view.php');	

class contactoVista extends View	{

	public function render(){
		$this->smarty->display('contacto.tpl');
	}
	
	public function renderContacto($arrComentario){
		$this->smarty->assign("contacto",$arrComentario);
		$this->smarty->display('contacto.tpl');

	}

}

?>