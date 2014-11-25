<?php

require_once('view.php');	

class IndexVista extends View	{

	public function render(){
		$this->smarty->display('inicio.tpl');
	}
	
	// public function SetUser($usuario){
		
	// 	$this->smarty->assign("usuario",$usuario);
	// }	
}

?>