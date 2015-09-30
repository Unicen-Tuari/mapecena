<?php

include_once "modelodb.php";

class cabanaModel extends ModeloDB{
	
	public function load()	
	{}

	public function todasLasCabanas() 
	{		
		return $this->query("
			SELECT c.ID as ID_CABANA, c.NOMBRE as NOMBRE, c.ID_CATEGORIA as ID_CATEGORIA,
			cat.NOMBRE as CATEGORIA, c.CAPACIDAD as CAPACIDAD, c.PRECIO as PRECIO,
			c.DETALLE as DETALLE, c.URL_IMG as URL_IMG	
        	FROM CABANA c 
        	JOIN CATEGORIA cat ON (cat.ID = c.ID_CATEGORIA)
			ORDER BY c.ID_CATEGORIA            
        ");			
	}
	
	
	public function todasCategorias() 
	{		
		return $this->query("
			SELECT c.ID as ID_CATEGORIA, c.NOMBRE as NOMBRE	
        	FROM categoria C 
            
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
