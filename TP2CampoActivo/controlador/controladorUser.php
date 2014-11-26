<?php

error_reporting(E_ALL);
ini_set("display_errors",1);



class controladorUser
{			

	/*******Atributos***********/
	private $model;
	private $modeloRegistro;
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
	  	include_once("./modelo/Model_comprobar_existencia_de_usuario.php");
	  	include_once("./modelo/Modeloregistro.php");

        /*************Inicializo las variables con clases***********************/

		$this->model_comprobar_existencia_usuario 	= 	new Model_comprobar_existencia_usuario();
		$this->view_registrado_exitoso				= 	new view_registrado_exitoso();
		$this->modeloRegistro						= 	new modeloRegistro();
	}

	public function errorLogueo()
	{
		include "./vista/vistaErrores.php";
		$error = new Errores();
		$error->errorLogueo();
	}
	

	public function errorRegistro()
	{
		include "./vista/vistaErrores.php";
		$error = new Errores();
		$error->errorRegistro();
	}

	public function login()
	{
		$usuario= $_POST['user'];
		$pass=$_POST['pass'];
		$IdUser = $this->model_comprobar_existencia_usuario->verificarLogueo($usuario,$pass);
		
		if($IdUser == NULL)
		{			
			header("Location:index.php?action=errorLogueo");
		}
		else
		{
			$_SESSION['IDUsuario'] = $IdUser[0]["idUsuario"];
			$_SESSION['usuario'] = $IdUser[0]["usuario"];
			$_SESSION['esAdmin'] = $IdUser[0]["esAdmin"];
			header("Location:index.php");			
		}
	}	
				
	public function logout()
	{
		session_destroy();
		header("Location:index.php");
	}

	public function envioDeMail($NombreDestino,$emailDestino){

		// $emailRemitente = "campoactivo@speedy.com.ar";
//******$emailRemitente = "matiasapecena@gmail.com";
//******$NombreRemitente = "Campo Activo S.A.";
		//incluimos la clase PHPMailer
//******require_once('class.phpmailer.php');

		//instancio un objeto de la clase PHPMailer
//******$mail = new PHPMailer(); // defaults to using php "mail()"

		//defino el cuerpo del mensaje en una variable $body
		//se trae el contenido de un archivo de texto
		//también podríamos hacer $body="contenido...";
//******$body = "Felicitaciones, ya puede solicitar turnos para nuestros talleres";
		//Esta línea la he tenido que comentar
		//porque si la pongo me deja el $body vacío
		// $body = preg_replace('/[]/i','',$body);

		//defino el email y nombre del remitente del mensaje
//******$mail->SetFrom($emailRemitente,$NombreRemitente );

		//defino la dirección de email de "reply", a la que responder los mensajes
		//Obs: es bueno dejar la misma dirección que el From, para no caer en spam
//******$mail->AddReplyTo($emailRemitente,$NombreRemitente);
		//Defino la dirección de correo a la que se envía el mensaje
		
		//la añado a la clase, indicando el nombre de la persona destinatario
//******$mail->AddAddress($emailDestino, $NombreDestino);

		//Añado un asunto al mensaje
//******$mail->Subject = "Alta en la web Campo Activo S.A.";

		//Puedo definir un cuerpo alternativo del mensaje, que contenga solo texto
		// $mail­>AltBody = "Cuerpo alternativo del mensaje";

		//inserto el texto del mensaje en formato HTML
//******$mail->MsgHTML($body);

		//asigno un archivo adjunto al mensaje
		// $mail­>AddAttachment("ruta/archivo_adjunto.gif");

		//envío el mensaje, comprobando si se envió correctamente
		// if(!$mail­>Send()) {
		// echo "Error al enviar el mensaje: " . $mail­>ErrorInfo;
		// } else {
		// echo "Mensaje enviado!!";
		// }
	}

	public function registrarse()
	{
		$arr_registro=array();
		$existeUsuario = $this->model_comprobar_existencia_usuario->existeUsuario(
							$_POST['usuario_registrarse']);		
		$resultado = count($existeUsuario);
		
		if($resultado == 0){//si no existe el usuario por el campo usuario. Prueba con el email
			$existeUsuario = $this->model_comprobar_existencia_usuario->existeUsuario(
									$_POST['email_registrarse']);
			$resultado = count($existeUsuario);
		}

		$resultado = count($existeUsuario);

		if($resultado == 0){
						
			$arr_registro['usuario']		= strtolower ($_POST['usuario_registrarse']);	
			$arr_registro['nombre']			= strtolower ($_POST['nombre_registrarse']);
			$arr_registro['apellido']		= strtolower ($_POST['apellido_registrarse']);
			$arr_registro['dni']			= strtolower ($_POST['dni_registrarse']);
			$arr_registro['FechaNacimiento']= strtolower ($_POST['FechaNacimiento']);
			$arr_registro['email']			= strtolower ($_POST['email_registrarse']);
			$arr_registro['Celular']		= strtolower ($_POST['Celular_registrarse']);
			$arr_registro['Telefono_fijo']	= strtolower ($_POST['Telefono_fijo_registrarse']);
			$arr_registro['pass']			= strtolower ($_POST['pass_registrarse']);
			$arr_registro['direccion']		= strtolower ($_POST['Direccion_registrarse']);
			$arr_registro['esAdmin']		= strtolower ('0');

			$this->envioDeMail($arr_registro['nombre'],$arr_registro['email']);

			$this->modeloRegistro->registrar($arr_registro);
			$this->view_registrado_exitoso->r_exitoso();
		}else
			{ 
				header("Location:index.php?action=errorRegistro");				
			}
	}
}

?>