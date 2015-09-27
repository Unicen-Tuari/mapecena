<?php

require('vista.php');	

class cabanaView extends View{
		

	function render(){
		$this->smarty->display('cabana.tpl');
	}	

	
}

?>