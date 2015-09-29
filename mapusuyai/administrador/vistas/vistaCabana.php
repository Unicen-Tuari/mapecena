<?php

require_once('vista.php');	

class CabanaView extends View{
		
	// function set_maquinas($arrM)
	// {
	// 	$this->smarty->assign("maquinas",$arrM);
	// }

	// function set_imgMaq($arrIM)
	// {
	// 	$this->smarty->assign("imagenes",$arrIM);		
	// }

	// function render()
	// {
	// 	$this->smarty->display('maquina.tpl');
	// }	

	// function renderCM()
	// {
	// 	$this->smarty->display('carouselMaq.tpl');
	// }

	function nuevaCabana()
	{
		$this->smarty->display('agregarCab.tpl'); 
	}

	// function modificarMaquina($maquina)
	// {
	// 	$this->smarty->assign("maquinas",$maquina);
	// 	$this->smarty->display('modificarMaq.tpl'); 
	// }
}

?>