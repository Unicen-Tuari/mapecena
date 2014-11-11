<?php

require_once('view.php');	

class maquinasVista extends View	{

	function set_maquina($arrM,$estado){
		
		$this->smarty->assign("maquinas",$arrM);
		$this->smarty->assign("estado",$estado);
	}

	function set_maquinasQ($arrQ){
		$this->smarty->assign("maquinas",$arrQ);
	}

	function set_img($arrI){
		$this->smarty->assign("imagenes",$arrI);		
	}

	function render(){
		$this->smarty->display('maquinas.tpl');
	}	

}

?>