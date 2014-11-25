<?php

require_once('view.php');	

class maquinasVista extends View	{

	function set_maquina($arrM,$estado,$cantidad){
		$this->smarty->assign("cantidad",$cantidad);
		$this->smarty->assign("maquinas",$arrM);
		$this->smarty->assign("estado",$estado);
	}

	function set_maquinasQ($arrQ){
		$this->smarty->assign("maquinas",$arrQ);
	}

	function set_img($arrI){
		$this->smarty->assign("imagenes",$arrI);		
	}

	function render(){
		$this->smarty->display('maquinas.tpl');
	}	

	function busqueda($Resultado){
		$cantidad = count($Resultado);
		$this->smarty->assign("cantidad",$cantidad);
		$this->smarty->assign("maquinas",$Resultado);
		$this->smarty->display('solomaquina.tpl');

	}	

	function nuevaMaquina()
	{
		$this->smarty->display('agregarMaq.tpl'); 
	}

	function modificarMaquina($maquina)
	{
		$this->smarty->assign("maquinas",$maquina);
		$this->smarty->display('modificarMaq.tpl'); 
	}

}

?>