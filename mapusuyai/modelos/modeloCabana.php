<?php

include_once "modelodb.php";

class cabanaModel extends ModeloDB{
	
	public function load()	
	{			

	}

	public function todasLasCabanas() 
	{		

		return $this->query("
			SELECT c.ID as id_CABANA, c.NOMBRE as NOMBRE, c.ID_CATEGORIA as ID_CATEGORIA,
			 c.PRECIO as PRECIO, c.DETALLE as DETALLE, c.URL_IMG as URL_IMG	
        	FROM CABANA C 
            
        ");			
	}
	public function todasLasCabanasSegunCategoria($categoria) 
	{		

		return $this->query("
			SELECT c.ID as id_CABANA, c.NOMBRE as NOMBRE, c.ID_CATEGORIA as ID_CATEGORIA,
			 c.PRECIO as PRECIO, c.DETALLE as DETALLE, c.URL_IMG as URL_IMG	
        	FROM CABANA C 
        	where (c.ID_CATEGORIA = '$categoria')
            
        ");			
	}
	
	
}

?>
