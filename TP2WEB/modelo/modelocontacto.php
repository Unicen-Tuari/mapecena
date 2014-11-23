<?php
	include_once "modelo.php";

	class modeloContacto extends ModeloDB{

		public function load(){}

		public function nuevoComentario($nombre,$apellido,$email,$tel,$comentario){
			
			return $this->query("
				INSERT INTO contactos (Nombre,Apellido,Telefono,Email,Comentario)
				VALUES ('$nombre','$apellido','$email','$tel','$comentario')
				");
		}
	}
?>