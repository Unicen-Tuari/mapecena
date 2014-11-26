<?php 

include_once('view.php');


class Errores extends View
{

	public function errorLogueo()
	{
		$this->smarty->display('errorLogueo.tpl');
	}

	public function errorRegistro()
	{
		$this->smarty->display('errorRegistro.tpl');
	}

	public function altaMaquina()
	{	
		$this->smarty->display('altaMaquina.tpl');
	}

}