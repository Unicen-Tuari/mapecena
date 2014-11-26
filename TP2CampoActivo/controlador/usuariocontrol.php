<?php


include "./modelo/modeloUsuarios.php";
include "./vista/usuariosvista.php";

class UsuarioControl{
	
	public function actionUsuario(){
		$usuariosModelo = new modeloUsuario();
		$view = new usuariosVista();
		$usuariosModelo = $usuariosModelo->load();
		$view->setUsuario($usuariosModelo);
		if (isset($_SESSION['usuario']))
			$view->SetUser($_SESSION['usuario'],$_SESSION['esAdmin']);
		$view->render();
		
	}

	

	
	public function ModificarUsuario()
	{
		$id = $_POST['idUsuario'];
		$usuariosModelo = new modeloUsuario();
		$view = new usuariosVista();
		$usuario = $usuariosModelo->usuarioPorId($id);
		
		if ($usuario[0]['esAdmin'] == '0')
			$dato = '1';
		else
			$dato = '0';
		$usuariosModelo->modificarUsuario($dato,$id);
			
		header("Location:index.php?action=usuarios");

	}

	

	public function eliminarUsuario()
	{
		$id = $_POST['idUsuario'];
		
		$usuariosModelo = new modeloUsuario();			
		$usuariosModelo->eliminarUsuario($id);

		header("Location:index.php?action=usuarios");
	}
}

?>