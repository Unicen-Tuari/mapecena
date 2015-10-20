<?php

require('View.php');	

class AdminView extends View{

	function render($datos, $categorias){
		$this->smarty->assign('categorias',$categorias);
		$this->smarty->assign('cabanas',$datos);
		$this->smarty->display('admin.tpl');
		
	}

	function mostrarParcial($cabanas){

	  // $this->smarty->assign('errores', $this->errores);
	  $this->smarty->assign('cabanas', $cabanas);
	  $this->smarty->display('cabanas.tpl');
	 

	}

	function mostrarBorrar($noticias){

	  // $this->smarty->assign('errores', $this->errores);
	  $this->smarty->assign('noticias', $noticias);
	  $this->smarty->display('cabanas.tpl');
	  
	}
}

?>