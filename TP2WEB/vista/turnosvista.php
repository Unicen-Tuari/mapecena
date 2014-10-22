<?php

require_once('view.php');	

class turnosVista extends View	{

	function render(){
		$this->smarty->display('turnos.tpl');
	}
	
}

?>
<?php

require_once('view.php');	

class maquinasVista extends View	{

	function set_maquina($arrM,$estado){
		// echo'<h1>'.$estado.'</h1>';
		$this->smarty->assign("maquinas",$arrM);
		$this->smarty->assign("estado",$estado);
	}

	function set_img($arrI){
		$this->smarty->assign("imagenes",$arrI);		
	}

	function render(){
		$this->smarty->display('maquinas.tpl');
	}	

}

?>