<?php

include_once "modelo.php";

class modelogaleria extends ModeloDB{

	public function load(){
			return $this->query("
			SELECT Ruta
			FROM imagenes
			ORDER BY RAND()
		");
		}
		
	public function soloImagenesDe($id)	
	{			
		return $this->query("
			SELECT i.ruta AS Ruta
			FROM imagenes i
			WHERE (id_contenido = $id)
    	");
	}

}

?>