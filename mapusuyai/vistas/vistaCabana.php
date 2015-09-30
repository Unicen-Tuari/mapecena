<?php

require('vista.php');	

class cabanaView extends View{
		

	function rendercabana(){
		
		$this->smarty->display('cabana.tpl');
	}	

	function renderTarifas(){
		$this->smarty->display('Tarifas.tpl');
	}

	function rendercabanaSegunCategoria(){
		$this->smarty->display('porcategoria.tpl');
	}

	function set_cabanas($arrCab){
		
		$this->smarty->assign("cabanas",$arrCab);
	}

	function set_categoria($arrCat){
		$this->smarty->assign("categorias",$arrCat);
		
	}
}

?>