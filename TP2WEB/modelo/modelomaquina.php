<?php

include_once "./modelo/modelo.php";

class modeloMaquinas extends ModeloDB{

	public function devolverDescripcion($estado)
	{
		return $this->query("
			SELECT c.id_contenido AS id_Contenido,
			c.nombre AS Nombre,m.modelo AS Modelo, m.estado AS Estado, m.tipo AS Tipo, 
			c.Texto AS Texto, m.precio AS Precio, i.Ruta
			FROM maquinas m  
			INNER JOIN contenido c ON (c.id_contenido = m.id_contenido)
			INNER JOIN imagenes i ON (m.id_contenido = i.id_contenido)
			where ((c.id_contenido = m.id_contenido) and (m.estado = '$estado'))
            GROUP BY m.id_contenido
            ");

	}


	
	public function load(){
		// return $this->query("
		// 	SELECT c.id_contenido AS id_Contenido,
		// 	c.nombre AS Nombre,m.modelo AS Modelo, m.estado AS Estado, m.tipo AS Tipo, 
		// 	c.Texto AS Texto, m.precio AS Precio, i.Ruta
		// 	FROM maquinas m  
		// 	INNER JOIN contenido c ON (c.id_contenido = m.id_contenido)
		// 	INNER JOIN imagenes i ON (m.id_contenido = i.id_contenido)
		// 	GROUP BY m.id_contenido
		// 	");
	}

	public function devolverImagenes($id)	
	{			
		return $this->query("
			SELECT m.id_contenido as id_Contenido, i.ruta as Ruta
        	FROM imagenes i
            JOIN maquinas m ON (m.id_contenido = i.id_contenido)
        	WHERE (m.id_contenido = $id)
    	");
	}
	
	public function busqueda($q) 
	{	
		return $this->query("
			SELECT c.id_contenido as id_Contenido,  c.nombre as Nombre, c.texto as Texto, 
			m.modelo as Modelo, m.tipo as Tipo, m.precio as Precio, m.id_contenido, i.Ruta, m.estado
			FROM contenido c
			INNER JOIN maquinas m ON (c.id_contenido = m.id_contenido)
			LEFT JOIN imagenes i ON (c.id_contenido = i.id_contenido)
			WHERE((c.nombre LIKE '%".$q."%')||(c.texto LIKE '%".$q."%')||(m.tipo LIKE '%".$q."%')||(m.modelo LIKE '%".$q."%'))
			GROUP BY c.id_contenido			     	
		");	
	}
}
	

?>