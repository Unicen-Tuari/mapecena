<?php

require_once('view.php');	

class usuariosvista extends View	{

	
	public function setUsuario($arr){
		
		$this->smarty->assign("Users",$arr);
	}
	
	public function render(){
		$this->smarty->display('Usuarios.tpl');
	}	


	public function busqueda($Resultado){
		$cantidad = count($Resultado);
		$this->smarty->assign("cantidad",$cantidad);
		$this->smarty->assign("Usuarios",$Resultado);
		$this->smarty->display('soloUsuarios.tpl');
		
	}	

	function nuevoEvento()
	{
		$this->smarty->display('agregarUsuario.tpl'); 
	}

	
}


?>