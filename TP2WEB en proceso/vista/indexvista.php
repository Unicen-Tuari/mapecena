<?php

require_once('view.php');	

class IndexVista extends View	{

	function render(){
		$this->smarty->display('inicio.tpl');
	}
	
}

?>