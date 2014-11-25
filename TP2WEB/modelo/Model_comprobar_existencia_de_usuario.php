<?php

include_once( "modelo.php");

Class Model_comprobar_existencia_usuario extends ModeloDB
{

	/*******Atributos***********/

	/*******Métodos***********************************/		    	
	public function load(){
		}

	public function verificar_usuario($usuario)
	{	
		return $this->query("
			SELECT idUsuario, usuario, email, esAdmin
			FROM usuario
			WHERE ((usuario = '$usuario') OR (email = '$usuario'))
		");	
	}
	
	// public function verificar_usuario($usuario,$pass)
	// {	
	// 	return $this->query("
	// 		SELECT idUsuario, usuario, email, esAdmin
	// 		FROM usuario
	// 		WHERE ((usuario = '$usuario') OR (email = '$usuario')) AND (password = '$pass')
	// 	");	
	// }
	public function verificar_existencia($usuario,$email)
	{
		return $this->query("
			SELECT idUsuario, usuario, email
			FROM usuario
			WHERE ((usuario = '$usuario') OR (email = '$usuario')) OR (email = '$email')
		");	
	}
}

?>