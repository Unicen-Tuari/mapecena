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

	function rendercabanaSegunCategoriaalter(){
		$this->smarty->display('porcategoriaalter.tpl');
	}

	function set_cabanas($arrCab){
		
		$this->smarty->assign("cabanas",$arrCab);
	}
			 
	function set_categoria($arrCat,$arrCab){
		$this->smarty->assign("categorias",$arrCat);
		$this->smarty->assign("cabanas",$arrCab);
		
	}
}

?>