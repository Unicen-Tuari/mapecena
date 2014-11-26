<?php

require_once('view.php');	

class turnosVista extends View	{

	function render(){
		$this->smarty->display('turnos.tpl');
	}
	

}

?>
