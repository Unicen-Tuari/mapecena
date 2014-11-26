<?php

require('./libs/Smarty.class.php');	

class View{
	
	protected $smarty;
	
	public function __construct(){
		$this->smarty = new Smarty();
	}

	public function SetUser($usuario,$esAdmin){
		
		$this->smarty->assign("usuario",$usuario);
		$this->smarty->assign("esAdmin",$esAdmin);
		
	}

}

?>