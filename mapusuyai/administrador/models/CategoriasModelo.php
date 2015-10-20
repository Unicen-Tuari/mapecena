<?php

include_once "modelodb.php";

class Categorias extends ModeloDB
{
  	
	function __construct() {
		
	}

	public function load(){}
	
	
	public function load_Categorias() 
	{			
		return $this->query("
			SELECT c.id as id_categoria, c.nombre as nombre
        	FROM categoria c 
        	");			
	}

}

?>