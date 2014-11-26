<?php

require_once('view.php');	

class IndexVista extends View	{

	public function render(){
		$this->smarty->display('inicio.tpl');
	}
	
	
}

?>