<?php

include_once( "modelo.php");

Class Model_comprobar_existencia_usuario extends ModeloDB
{

	/*******Atributos***********/

	/*******Métodos***********************************/		    	
	public function load(){
		}

	public function verificar_usuario($usuario,$pass)
	{	


		return $this->query("SELECT id_persona, usuario, esAdmin
							FROM usuario
							WHERE (usuario = '$usuario') AND (password = '$pass')
							 ");	
	}
}

?>