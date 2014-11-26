<?php

include_once "./modelo/modelo.php";

class modeloMaquinas extends ModeloDB{
	public function load(){

	}

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
			m.modelo as Modelo, m.tipo as Tipo, m.precio as Precio, m.id_contenido, i.Ruta, m.estado as Estado
			FROM contenido c
			INNER JOIN maquinas m ON (c.id_contenido = m.id_contenido)
			LEFT JOIN imagenes i ON (c.id_contenido = i.id_contenido)
			WHERE((c.nombre LIKE '%".$q."%')||(c.texto LIKE '%".$q."%')
				||(m.tipo LIKE '%".$q."%')||(m.modelo LIKE '%".$q."%')
				||(m.estado LIKE '%".$q."%'))
			GROUP BY c.id_contenido			     	
		");	
	}

	public function insertarContenidoMaq($nombre,$texto)
	{
		return $this->query("
			INSERT INTO contenido (nombre,texto)
					VALUES ('$nombre','$texto')
		");
	}

	public function obtenerID_ContenidoMaq()
	{
		$datos =  $this->query("
			SELECT id_contenido
					FROM contenido
					ORDER BY id_contenido ASC
		");

		$id = array_pop ($datos); //Obtiene el ultimo dato del arreglo.....
		return $id['id_contenido'];
	}

	public function insertarImagenesMaq($id_contenido,$ruta)
	{
		return $this->query("
			INSERT INTO imagenes (id_contenido,ruta)
						VALUES ('$id_contenido','$ruta')
		");
	}

	public function insertarMaq($id_contenido,$estado,$modelo,$tipo,$precio)
	{
		return $this->query("
			INSERT INTO maquinas (id_contenido, estado, modelo, tipo, precio)
					VALUES ('$id_contenido','$estado', '$modelo', '$tipo', '$precio')
		");
	}

	public function datos_Maq($id_contenido) 
	{			
		return $this->query("
			SELECT c.id_contenido as id_Contenido,  c.nombre as Nombre, c.texto as Texto, 
                            m.modelo as Modelo, m.tipo as Tipo, m.precio as Precio, m.id_contenido, i.Ruta, m.estado
        	FROM maquinas m  
            INNER JOIN contenido c ON (c.id_contenido = m.id_contenido)
            INNER JOIN imagenes i ON (m.id_contenido = i.id_contenido)
		   	WHERE(m.id_contenido = '$id_contenido')
        	GROUP BY m.id_contenido	
        ");			
	}

	public function modificarContenidoMaq($nombre,$texto,$id_contenido)
	{
		return $this->query("
			UPDATE contenido
			SET nombre = '$nombre',texto = '$texto'
            WHERE (id_contenido = '$id_contenido')
		");
	}	

	public function modificarImagenesMaq($id_contenido,$ruta)
	{
		return $this->query("
			UPDATE imagenes
			SET id_contenido = '$id_contenido',ruta = '$ruta'
			WHERE (id_contenido = '$id_contenido')
		");
	}

	public function modificarMaq($id_contenido,$estado,$modelo,$tipo,$precio)
	{
		return $this->query("
			UPDATE maquinas 
			SET id_contenido = '$id_contenido', estado = '$estado', modelo = '$modelo',
			 tipo = '$tipo', precio = '$precio'
			WHERE (id_contenido = '$id_contenido')
		");
	}

	public function eliminarContenidoMaq($id_contenido)
	{
		return $this->query("
			DELETE FROM contenido			
            WHERE (id_contenido = '$id_contenido')
		");
	}	

	public function eliminarImagenesMaq($id_contenido)
	{
		return $this->query("
			DELETE FROM imagenes
			WHERE (id_contenido = '$id_contenido')
		");
	}

	public function eliminarMaq($id_contenido)
	{
		return $this->query("
			DELETE FROM maquinas 			
			WHERE (id_contenido = '$id_contenido')
		");
	}	
	
}

?>
