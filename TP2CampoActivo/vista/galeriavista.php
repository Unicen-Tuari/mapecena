<?php

require_once('view.php');	

class galeriaVista extends View	{

	
	function set_galeria($arrG){
		$this->smarty->assign("galeriaImg",$arrG);
	}
	function set_img($arrI){
		$this->smarty->assign("imagenes",$arrI);		
	}

	function render(){
		$this->smarty->display('galeria.tpl');
	}	
	function renderModal(){
		$this->smarty->display('modalGaleria.tpl');
	}
	
	
}

?>