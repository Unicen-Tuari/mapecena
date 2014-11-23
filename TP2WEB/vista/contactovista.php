<?php

require_once('view.php');	

class contactoVista extends View	{

	function render(){
		$this->smarty->display('contacto.tpl');
	}
	
	function renderContacto($arrComentario){
		$this->smarty->assign("contacto",$arrComentario);
		$this->smarty->display('contacto.tpl');

	}
}

?>