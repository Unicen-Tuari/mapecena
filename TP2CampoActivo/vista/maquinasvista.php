<?php

require_once('view.php');	

class maquinasVista extends View	{


	public function set_maquina($arrM,$estado,$cantidad){
		$this->smarty->assign("cantidad",$cantidad);
		$this->smarty->assign("maquinas",$arrM);
		$this->smarty->assign("estado",$estado);
	}

	public function set_maquinasQ($arrQ){
		$this->smarty->assign("maquinas",$arrQ);
	}

	public function set_img($arrI){
		$this->smarty->assign("imagenes",$arrI);		
	}

	public function render(){
		$this->smarty->display('maquinas.tpl');
	}	

	public function busqueda($Resultado){
		$cantidad = count($Resultado);
		$this->smarty->assign("cantidad",$cantidad);
		$this->smarty->assign("maquinas",$Resultado);
		$this->smarty->display('solomaquina.tpl');

	}	

	public function nuevaMaquina()
	{
		$this->smarty->display('agregarMaq.tpl'); 
	}

	public function modificarMaquina($maquina)
	{
		$this->smarty->assign("maquinas",$maquina);
		$this->smarty->display('modificarMaq.tpl'); 
	}

}

?>