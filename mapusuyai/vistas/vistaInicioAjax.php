<?php

require('vista.php');	

class IndexViewAjax extends View	{
    
	function render(){
		$this->smarty->display('indexAjax.tpl');
	}	
}

?>

