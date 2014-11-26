<?php

include_once "modelo.php";

class modeloUsuario extends ModeloDB{

	public function load(){
			return $this->query("
			SELECT idUsuario,Usuario,nombre,apellido,esAdmin
			FROM usuario
		");
		}

	public function usuarioPorId($idUsuario)
	{
		return $this->query("
			SELECT idUsuario,Usuario,esAdmin
			FROM usuario
			WHERE (idUsuario = $idUsuario)

		");
	}	

	public function modificarUsuario($esAdmin,$idUsuario)
	{
		$this->query("
			UPDATE usuario
			SET esAdmin = $esAdmin
			WHERE (idUsuario = $idUsuario)

		");
	}	

	public function eliminarUsuario($idUsuario)
	{
		$this->query("
			DELETE FROM usuario			
            WHERE (idUsuario = '$idUsuario')
		");
	}	

}

?>

