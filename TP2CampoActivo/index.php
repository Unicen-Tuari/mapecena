<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
 

if((array_key_exists('action', $_REQUEST))&&($_REQUEST['action']=='login')){	
		include_once "./controlador/ControllerUser.php";
		$log= new ControllerUser();
		$log->login();	
		
}
else if((array_key_exists('action', $_REQUEST))&&($_REQUEST['action']=='logout')){
		include_once "./controlador/ControllerUser.php";
		$controller = new ControllerUser();
		$controller->logout();
}

if(isset($_POST['inputBuscarE'])){
		include_once "./controlador/eventoscontrol.php";
		$c = new eventosControl();
		$c->actionBusqueda();
}
else if(isset($_POST['inputBuscarM'])){
		include_once "./controlador/maquinascontrol.php";
		$c = new maquinasControl();
		$c->actionBusqueda();
}
else if (isset($_POST['pass_registrarse'])){
		include_once("./controlador/ControllerUser.php");
		$Registrar= new ControllerUser();
		$Registrar->registrarse();
}
else if((array_key_exists('action', $_REQUEST))&&($_REQUEST['action']=='login')){	
		include_once("./controlador/ControllerUser.php");
		$log= new ControllerUser();
		$log->login();	
		
}else if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='inicio'){
		include_once "./controlador/indexcontrol.php";
		$controller = new IndexControl();
		$controller->actionIndex();

}else if($_REQUEST['action']=='quienessomos'){
		include_once "./controlador/aboutcontrol.php";
		$c = new aboutControl();
		$c->actionAbout();

}else if($_REQUEST['action']=='contacto'){

		if ((array_key_exists('nombre',$_POST))&&(array_key_exists('apellido',$_POST))&&(array_key_exists('email',$_POST))
			&&(array_key_exists('tel',$_POST))&&(array_key_exists('comentario',$_POST))){
				include_once "./controlador/contactocontrol.php";
				$c = new contactoControl();
				$c->insertarComentario($_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['tel'],$_POST['comentario']);
		}else{
			include_once "./controlador/contactocontrol.php";
			$c = new contactoControl();
			$c->actionControl();
		}	

}else if($_REQUEST['action']=='NUEVA'){
	include_once "./controlador/maquinascontrol.php";
	$c = new maquinasControl();
	$c->actionMaquinas('NUEVA');
			
}else if($_REQUEST['action']=='USADA'){
	include_once "./controlador/maquinascontrol.php";
	$c = new maquinasControl();
	$c->actionMaquinas('USADA');

}else if($_REQUEST['action']=='AgregarMaq'){
		include_once "./controlador/maquinascontrol.php";
		$c = new maquinasControl();
		$c->AgregarMaq();

}else if($_REQUEST['action']=='insertarMaq'){
	include_once "./controlador/maquinascontrol.php";
	$c = new maquinasControl();
	$c->insertarMaquina();

}else if($_REQUEST['action']=='modificarMaq'){
	include_once "./controlador/maquinascontrol.php";	
	$c = new maquinasControl();
	$c->editarMaq();

}else if($_REQUEST['action']=='actualizarMaq'){
	include_once "./controlador/maquinascontrol.php";	
	$c = new maquinasControl();
	$c->actualizarMaq();

}else if($_REQUEST['action']=='eliminarMaq'){				
	include_once "./controlador/maquinascontrol.php";
	$c = new maquinasControl();
	$c->eliminarMaquina();

}else if($_REQUEST['action']=='verCrearEvento'){
	include_once "./controlador/eventoscontrol.php";
	$c = new eventosControl();
	$c->vistaAgregarE();

}else if($_REQUEST['action']=='insertarEvento'){
	include_once "./controlador/eventoscontrol.php";
	$c = new eventosControl();
	$c->insertarEvento();

}else if($_REQUEST['action']=='modificarEvento'){
	include_once "./controlador/eventoscontrol.php";
	$c = new eventosControl();
	$c->editarEvento();

}else if($_REQUEST['action']=='actualizarEvento'){
	include_once "./controlador/eventoscontrol.php";
	$c = new eventosControl();
	$c->actualizarEvento();

}else if($_REQUEST['action']=='eliminarEvento'){
	include_once "./controlador/eventoscontrol.php";
	$c = new eventosControl();
	$c->eliminarEvento();

}else if($_REQUEST['action']=='turnos'){
	include_once "./controlador/turnoscontrol.php";
	$controller = new TurnosControl();
	$controller->actionTurnos();
}else if($_REQUEST['action']=='eventos'){
	include_once "./controlador/eventoscontrol.php";
	$c = new eventosControl();
	$c->actionEventos();
		
}else if($_REQUEST['action']=='galeria'){
	include_once "./controlador/galeriacontrol.php";
	$controller = new galeriaControl();
	$controller->actionGaleria();
	
}else if($_REQUEST['action']=='galeriaId'){							
	if(array_key_exists('id', $_GET)){
		include_once "./controlador/galeriacontrol.php";
		$c = new galeriaControl();
		$c->soloImagenesDe($_GET['id']);									
	}
}else if($_REQUEST['action']=='errorLogueo'){
		include_once "./controlador/ControllerUser.php";
		$c = new ControllerUser();
		$c->errorLogueo();
		
}else if($_REQUEST['action']=='errorRegistro'){
		include_once "./controlador/ControllerUser.php";
		$c = new ControllerUser();
		$c->errorRegistro();
		
}else{
	echo "ERROR ACCION NO VALIDA";
}
?>