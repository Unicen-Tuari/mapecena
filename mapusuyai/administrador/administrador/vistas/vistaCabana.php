<?php

require_once('vista.php');	

class CabanaView extends View{

	function nuevaCabana()
	{
		$this->smarty->display('agregarCab.tpl'); 
	}

	function finCargaCabana()
	{
		$this->smarty->display('finCarga.tpl'); 
	}

	function errorCargaCabana()
	{
		$this->smarty->display('errorCarga.tpl'); 
	}
}

?>