<?php

include_once("view.php");


class error_404 extends View
{
	public function pagina_error()
	{
		$this->smarty->display('error404.tpl');
	}
	
	// public function SetUser($usuario){
		
	// 	$this->smarty->assign("usuario",$usuario);
	// }

}

?>