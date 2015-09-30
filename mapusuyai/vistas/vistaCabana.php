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
		$this->smarty->display('cabana.tpl');// ver si usar el mismo o usar segun categoria
	}

	function set_cabanas($arrCab){
		var_dump($arrCab);
		$this->smarty->assign("cabanas",$arrCab);
	}
}

?>