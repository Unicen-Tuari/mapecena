<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);

if(isset($_POST['inputBuscar'])){

					include "./controlador/maquinascontrol.php";
					$c = new maquinasControl();
					$c->actionBusqueda();
			// 		include "./controlador/maquinascontrol.php";
			// 		$c = new maquinasControl();
			// 		$c->actionBusqueda($_GET['q']);
			
	}else
if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='inicio'){

		include "./controlador/indexcontrol.php";
		$controller = new IndexControl();
		$controller->actionIndex();		

	}
else if(isset($_POST['inputBuscar'])){

					include "./controlador/maquinascontrol.php";
					$c = new maquinasControl();
					$c->actionBusqueda();
			// 		include "./controlador/maquinascontrol.php";
			// 		$c = new maquinasControl();
			// 		$c->actionBusqueda($_GET['q']);
			
	}

	else if(array_key_exists('action', $_REQUEST)&&$_REQUEST['action']=='login')
	{
		
		include_once("./controlador/ControllerUser.php");
		$log= new ControllerUser();
		// $log->turnovisible();
		echo'xxxxx';
		die('loginnnnn');
		$log->login();
		echo ("La seccion es: ");
		echo ($_SESSION['IDUsuario']);
		

	}
	else if (isset($_POST['pass_registrarse']))
	{
		
		include_once("./controlador/ControllerUser.php");
		$Registrar= new ControllerUser();
		$Registrar->registrarse();

	}	

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



	

	else if($_REQUEST['action']=='quienessomos'){

		include "./controlador/aboutcontrol.php";
		$c = new aboutControl();
		$c->actionAbout();

	}else if($_REQUEST['action']=='contacto'){

			include "./controlador/contactocontrol.php";
			$c = new contactoControl();
			$c->actionControl();

	}else if($_REQUEST['action']=='eventos'){
	
		include "./controlador/eventoscontrol.php";
		$c = new eventosControl();
		$c->actionEventos();
			
		
	}else if($_REQUEST['action']=='nuevas'){

		include "./controlador/maquinascontrol.php";
		$c = new maquinasControl();
		$c->actionMaquinas('nuevas');
				
	
	}else if($_REQUEST['action']=='usadas'){

			include "./controlador/maquinascontrol.php";
			$c = new maquinasControl();
			$c->actionMaquinas('usadas');

	}else if($_REQUEST['action']=='turnos'){
	
		// Aquí va el turnero
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