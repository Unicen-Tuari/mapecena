<?php

include_once( "modelo.php");

Class Model_comprobar_existencia_usuario extends ModeloDB
{

	/*******Atributos***********/

	/*******Metodos***********************************/		    	
	public function load(){
		}

	public function verificar_usuario($email,$pass)
	{	


		return $this->query("SELECT id_persona 
							FROM usuario
							WHERE (email = '$email') AND (password = '$pass')
							 ");	
	}
}

?>