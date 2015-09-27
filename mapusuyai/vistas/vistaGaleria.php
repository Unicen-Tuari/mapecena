<?php

require('vista.php');	

class galeriaView extends View{

	function render(){
		$this->smarty->display('galeria.tpl');
	}	

	// function set_contacto($arrCont){
	// 	$this->smarty->assign("contacto",$arrCont);		
	// }

	// function renderContacto(){
	// 	$this->smarty->display('contacto.tpl');
	// }	
}

?>