<?php

require_once('view.php');	

class aboutVista extends View	{

	function render(){
		$this->smarty->display('about.tpl');
	}
	
}

?>