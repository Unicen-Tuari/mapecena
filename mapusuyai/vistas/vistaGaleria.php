<?php

require('vista.php');	

class galeriaView extends View{

	function render(){
		$this->smarty->display('galeria.tpl');
	}	


}

?>