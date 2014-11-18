<?php

require_once('view.php');	

class contactoVista extends View	{

	function render(){
		$this->smarty->display('contacto.tpl');
	}
	
}

?>