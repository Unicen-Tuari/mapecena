<?php

require_once('view.php');	

class aboutVista extends View	{

	public function render(){
		$this->smarty->display('about.tpl');
	}
	
}

?>