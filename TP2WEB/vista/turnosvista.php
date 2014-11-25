<?php

require_once('view.php');	

class turnosVista extends View	{

	function render(){
		$this->smarty->display('turnos.tpl');
	}
	
	// public function SetUser($usuario){
		
	// 	$this->smarty->assign("usuario",$usuario);
	// }

}

?>
