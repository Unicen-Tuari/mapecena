<?php

include_once "modelo.php";

class modeloeventos extends ModeloDB{

	public function load(){
			return $this->query("
			SELECT c.id_contenido AS id_Contenido, c.nombre AS Nombre,e.fecha AS Fecha, e.ubicacion AS Ubicacion, 
			c.Texto AS Texto, i.Ruta
			FROM evento e  
			INNER JOIN contenido c ON (c.id_contenido = e.id_contenido)
			INNER JOIN imagenes i ON (e.id_contenido = i.id_contenido)
			GROUP BY e.id_contenido
		");
		}

	public function soloImagenesDe($id)	
	{			
		return $this->query("
			SELECT i.ruta AS Ruta
			FROM imagenes i
			INNER JOIN evento e ON (e.id_contenido = i.id_contenido)
			WHERE (e.id_contenido = $id)
    	");
	}

	public function busqueda($q) 
	{	
		return $this->query("
			SELECT c.id_contenido AS id_Contenido, c.nombre AS Nombre,e.fecha AS Fecha, e.ubicacion AS Ubicacion, 
			c.Texto AS Texto, i.Ruta
			FROM evento e  
			INNER JOIN contenido c ON (c.id_contenido = e.id_contenido)
			INNER JOIN imagenes i ON (e.id_contenido = i.id_contenido)
			WHERE((Nombre LIKE '%".$q."%')||(Texto LIKE '%".$q."%')
				||(Ubicacion LIKE '%".$q."%')||(Fecha LIKE '%".$q."%'))
			GROUP BY e.id_contenido		     	
		");	
	}
}

?>

