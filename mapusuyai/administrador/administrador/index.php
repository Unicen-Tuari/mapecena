<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);
	
	if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='index'){
		include "./controladores/controladorCabana.php";
		$controller = new CabanaController();
		$controller->vistaAgregarCab();	

	}else if($_REQUEST['action']=='insertarCab'){
		include "./controladores/controladorCabana.php";
		$c = new CabanaController();
		$c->insertarCabana();
		
	}else if($_REQUEST['action']=='finCarga'){
		include "./controladores/controladorCabana.php";
		$c = new CabanaController();
		$c->finCarga();

	}else if($_REQUEST['action']=='errorCarga'){
		include "./controladores/controladorCabana.php";
		$c = new CabanaController();
		$c->errorCarga();
	}else{	
		echo "ERROR ACCION NO VALIDA";
	}
	
?>