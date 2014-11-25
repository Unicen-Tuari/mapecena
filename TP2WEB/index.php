<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);


	// else if(!isset($_SESSION['IDUsuario'])){
	// 	include "./controlador/IndexController.php";
	// 	$controller = new IndexController();
	// 	$controller->actionLoginForm();	
		// echo ($_SESSION['usuario']);
		// echo('NO ESTA LOGUEADO');
	// } 		
	// else if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='logout')
	// {
		// 	include "./controlador/IndexController.php";
		// $controller = new IndexController();
		// $controller->actionLogout();	
	// 	echo('DESLOGUEO');
	// 	session_start();
	// 	session_destroy();
	// }
if(!isset($_SESSION['IDUsuario']))
	echo('DESLOGUEADO ');
if(isset($_SESSION['IDUsuario']))
	echo('Logueado ');

if(isset($_POST['inputBuscarE'])){
		include "./controlador/eventoscontrol.php";
		$c = new eventosControl();
		$c->actionBusqueda();
}
else if(isset($_POST['inputBuscarM'])){
		include "./controlador/maquinascontrol.php";
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
		include "./controlador/indexcontrol.php";
		$controller = new IndexControl();
		$controller->actionIndex();

}else if($_REQUEST['action']=='quienessomos'){
		include "./controlador/aboutcontrol.php";
		$c = new aboutControl();
		$c->actionAbout();

}else if($_REQUEST['action']=='contacto'){

		if ((array_key_exists('nombre',$_POST))&&(array_key_exists('apellido',$_POST))&&(array_key_exists('email',$_POST))
			&&(array_key_exists('tel',$_POST))&&(array_key_exists('comentario',$_POST))){
				include "./controlador/contactocontrol.php";
				$c = new contactoControl();
				$c->insertarComentario($_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['tel'],$_POST['comentario']);
		}else{
			include "./controlador/contactocontrol.php";
			$c = new contactoControl();
			$c->actionControl();
		}	

}else if($_REQUEST['action']=='NUEVA'){
	include "./controlador/maquinascontrol.php";
	$c = new maquinasControl();
	$c->actionMaquinas('NUEVA');
			
}else if($_REQUEST['action']=='USADA'){
	include "./controlador/maquinascontrol.php";
	$c = new maquinasControl();
	$c->actionMaquinas('USADA');

}else if($_REQUEST['action']=='verCrearMaq'){
	include "./controladores/controladorMaquina.php";
	$c = new maquinasControl();
	$c->vistaAgregarMaq();

}else if($_REQUEST['action']=='insertarMaq'){
	include "./controladores/controladorMaquina.php";
	$c = new maquinasControl();
	$c->insertarMaquina();

}else if($_REQUEST['action']=='modificarMaq'){
	include "./controladores/controladorMaquina.php";
	$c = new maquinasControl();
	$c->editarMaq();

}else if($_REQUEST['action']=='actualizarMaq'){
	include "./controladores/controladorMaquina.php";
	$c = new maquinasControl();
	$c->actualizarMaq();

}else if($_REQUEST['action']=='eliminarMaq'){
	include "./controladores/controladorMaquina.php";
	$c = new maquinasControl();
	$c->eliminarMaquina();

}else if($_REQUEST['action']=='eventos'){
	include "./controlador/eventoscontrol.php";
	$c = new eventosControl();
	$c->actionEventos();
		
}else if($_REQUEST['action']=='verCrearEvento'){
	include "./controladores/controladorEvento.php";
	$c = new eventosControl();
	$c->vistaAgregarE();

}else if($_REQUEST['action']=='insertarEvento'){
	include "./controladores/controladorEvento.php";
	$c = new eventosControl();
	$c->insertarEvento();

}else if($_REQUEST['action']=='modificarEvento'){
	include "./controladores/controladorEvento.php";
	$c = new eventosControl();
	$c->editarEvento();

}else if($_REQUEST['action']=='actualizarEvento'){
	include "./controladores/controladorEvento.php";
	$c = new eventosControl();
	$c->actualizarEvento();

}else if($_REQUEST['action']=='eliminarEvento'){
	include "./controladores/controladorEvento.php";
	$c = new eventosControl();
	$c->eliminarEvento();

}else if($_REQUEST['action']=='turnos'){
	include "./controlador/turnoscontrol.php";
	$controller = new TurnosControl();
	$controller->actionTurnos();
	
}else if($_REQUEST['action']=='galeria'){
	include "./controlador/galeriacontrol.php";
	$controller = new galeriaControl();
	$controller->actionGaleria();
	
}else if($_REQUEST['action']=='galeriaId'){					
		
		if(array_key_exists('id', $_GET)){
			include "./controlador/galeriacontrol.php";
			$c = new galeriaControl();
			$c->soloImagenesDe($_GET['id']);									
		}
}
else{
	echo "ERROR ACCION NO VALIDA";
}
?>