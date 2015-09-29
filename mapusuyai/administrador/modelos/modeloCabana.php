<?php

include_once "modelodb.php";

class Cabana extends ModeloDB{
	
				
	public function insertarContenidoCab($NOMBRE,$ID_CATEGORIA,$CAPACIDAD,
										$URL_IMG,$PRECIO,$DETALLE)
	{
		return $this->query("

			INSERT INTO cabana (NOMBRE,ID_CATEGORIA,CAPACIDAD,URL_IMG,PRECIO,DETALLE)
					VALUES ('$NOMBRE','$ID_CATEGORIA','$CAPACIDAD',
						'$URL_IMG','$PRECIO','$DETALLE')
		");
	}
	
}

?>
