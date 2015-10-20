<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);
	
	include "./controllers/AdminController.php";
			
	if(! array_key_exists('action', $_REQUEST))
	{
		
		$controller = new AdminController();
		$controller->mostrarHome();		
	}	
	else
	if( $_REQUEST['action']=='agregar_cabana')
	{
		
		$controller = new AdminController();
		$controller->agregarCabana();		
	}	
	else
	if( $_REQUEST['action']=='agregar_imagenes')
	{
		$controller = new AdminController();
		$controller->agregarImagenes();		
	}
	else
	if( $_REQUEST['action']=='agregar_imagenes')
	{
		$controller = new AdminController();
		$controller->agregarImagenes();		
	}
	else
	{
		echo "ERROR ACCION NO VALIDA";
	}
		 


?>