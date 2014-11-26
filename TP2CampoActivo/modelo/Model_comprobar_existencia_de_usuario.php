<?php

include_once( "modelo.php");

Class Model_comprobar_existencia_usuario extends ModeloDB
{


	public function load(){
		}

	public function existeUsuario($usuario)
	{	
		return $this->query("
			SELECT idUsuario, usuario, email, esAdmin
			FROM usuario
			WHERE ((usuario = '$usuario') OR (email = '$usuario'))

		");	
	}
	
	public function verificarLogueo($usuario,$pass)
	{
		return $this->query("
			SELECT idUsuario, usuario, email, esAdmin
	 		FROM usuario
	 		WHERE ((usuario = '$usuario') OR (email = '$usuario')) AND (password = '$pass')
		");	
	}
}

?>