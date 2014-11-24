<?php

error_reporting(E_ALL);
ini_set("display_errors",1);



class ControllerUser
{			

	/*******Atributos***********/
	private $model;
	private $model_registrarse;
	private $model_comprobar_existencia_usuario;
	private $model_ver_reclamos	;
	
	private $view_home;
	private $view_registrado_exitoso;
	private $view_tabla_reclamos;
	private $ver_modificar ;
	
	private $controller_reclamos;


	/*******Metodos***********/

	public function __construct()
	{
     	/*************Archivos incluidos***********************/
     	include_once("./vista/view_registrado_exitoso.php");				
		// include_once("./vista/Home_view.php");
		// include_once("./vista/View_tabla_peticiones.php");


	  	// include_once("./controlador/controller_reclamos.php");

	  	// include_once("./modelo/model_reclamos.php");
	  	include_once("./modelo/Model_comprobar_existencia_de_usuario.php");
	  	include_once("./modelo/Modelo_registrarse.php");

	  	
        
        /*************Inicializo las variables con clases***********************/

		$this->model_comprobar_existencia_usuario= 	new Model_comprobar_existencia_usuario();
		// $this->view_home 						= 	new View_Home();
		$this->view_registrado_exitoso			= 	new view_registrado_exitoso();
		// $this->view_tabla_reclamos				= 	new view_tabla_peticiones();

		// $this->model_ver_reclamos				=	new model_ver_reclamos();//esta llamada tiene que ser a un controller
		// $this->model_crear_reclamo				=	new model_crear_reclamo();//esta llamada tiene que ser a un controller
		// $this->controller_reclamos				= 	new Controller_reclamos();
		$this->model_registrarse				= 	new model_registrarse();
	}

	
						//le estoy pasando el id por referencia
	public function Calendario()//datos home es informacion de una consulta 
		{
			echo ('calendario');
			// echo ($_SESSION['IDUsuario']);
			// $id_usuario=$_SESSION['IDUsuario'];
			// $email=$_SESSION['emailUsuario'];
			// $reclamos_usuario=$this->controller_reclamos->mostrar_reclamos($id_usuario);
			// $r_p=$this->controller_reclamos->reclamos_pendientes($id_usuario);
			// $r_f=$this->controller_reclamos->reclamo_finalizados($id_usuario);
		    // $this->viewCalendario->calendario($id_usuario);

		}

	public function error404()
	{
		//https://es.wikipedia.org/wiki/Error_404
		include_once("./vista/View_error404.php");
		$error= new error_404();
		$error->pagina_error();
	}




	public function login()
	{
		
		/*datos del form login*/
		
		$email= $_POST['user'];	 
		$pass=$_POST['pass'];
		// echo "email: ".$email." ";
		// echo "pass: ".$pass." ";
		$IdUser = $this->model_comprobar_existencia_usuario->verificar_usuario($email,$pass);
		echo "IdUser:".$IdUser[0]["usuario"]." ";
		if($IdUser == NULL){
			// include_once("./vista/View_error_login.php");
		 //    $error=new View_error_login();
		 //    $error->error_login();
			echo ('no se logueo');
		}else{
			$_SESSION['IDUsuario'] = $IdUser[0]["idUsuario"];
			$_SESSION['usuario'] = $IdUser[0]["usuario"];
			$_SESSION['esAdmin'] = $IdUser[0]["esAdmin"];
			echo "USUARIO: ".$email." ";
			echo ($_SESSION['usuario']);
			//$this->Calendario();

		}
	}		
				
	

	public function registrarse()
	{
		$arr_registro=array();
		echo('usrer:'.$_POST['usuario_registrarse']);
		echo('pass:'.$_POST['pass_registrarse']);
		echo('email:'.$_POST['email_registrarse']);

		$existeUsuario = $this->model_comprobar_existencia_usuario->verificar_usuario_admin($_POST['usuario_registrarse'],$_POST['pass_registrarse']);
		//Lograr que por ajax detecte que no se puede poner el mismo mail o usuario
		echo(' CAnt existeUsuario1: ');
		$resultado = count($existeUsuario);
		echo($resultado);
		if($resultado != 0){//no existe el usuario por el campo usuario. Prueba por email
			$existeUsuario = $this->model_comprobar_existencia_usuario->verificar_usuario_admin($_POST['email_registrarse'],$_POST['pass_registrarse']);
			$resultado = count($existeUsuario);
			echo(' CAnt existeUsuario2: ');
			$resultado = count($existeUsuario);
			echo($resultado);
		}

		echo(' CAnt existeUsuario3: ');
		$resultado = count($existeUsuario);
		echo($resultado);
		echo(' Estructura: ');
		var_dump($existeUsuario);
		

		if($resultado == 0)//no existe el usuario
		{
			
			$pass=$_POST['pass_registrarse'];
			$arr_registro['usuario']		= strtolower ($_POST['usuario_registrarse']);	
			$arr_registro['nombre']			= strtolower ($_POST['nombre_registrarse']);
			$arr_registro['apellido']		= strtolower ($_POST['apellido_registrarse']);
			$arr_registro['dni']			= strtolower ($_POST['dni_registrarse']);
			$arr_registro['FechaNacimiento']= strtolower ($_POST['FechaNacimiento']);
			$arr_registro['email']			= strtolower ($_POST['email_registrarse']);
			$arr_registro['Celular']		= strtolower ($_POST['Celular_registrarse']);
			$arr_registro['Telefono_fijo']	= strtolower ($_POST['Telefono_fijo_registrarse']);
			$arr_registro['pass']			= strtolower ($pass);
			$arr_registro['direccion']		= strtolower ($_POST['Direccion_registrarse']);
		
			$this->model_registrarse->registrar($arr_registro);
			$this->view_registrado_exitoso->r_exitoso();
		}else
			{ 
				include_once("./vista/View_error_login.php");
				$error=new View_error_login();
				$mail_existente="El email ya fue usado para otra cuenta, ingrese otro o presione el  boton ingresar";
				$error->error_login($mail_existente);
			}

	}
}

?>