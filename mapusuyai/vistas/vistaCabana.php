<?php

require('vista.php');	

class cabanaView extends View{
		

	function render(){
		$this->smarty->display('cabana.tpl');
	}	

	function renderTarifas(){
		$this->smarty->display('Tarifas.tpl');
	}
	
}

?>