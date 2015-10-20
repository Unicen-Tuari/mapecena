<?php

include_once "modelodb.php";

class Cabanas extends ModeloDB
{

	private $cabanas; 
  	private $db;

	  function __construct() {
	      $this->db = new PDO('mysql:host=localhost;dbname=mapusuyai;charset=utf8', 'root', '');
	      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  }
	

	public function load_Cabanas($categoria) 
	{			
		return $this->query("
			SELECT c.ID as ID_CABANA, c.NOMBRE as NOMBRE, c.ID_CATEGORIA as ID_CATEGORIA,
			cat.NOMBRE as CATEGORIA, c.CAPACIDAD as CAPACIDAD, c.PRECIO as PRECIO,
			c.DETALLE as DETALLE, c.URL_IMG as URL_IMG	
        	FROM CABANA c 
        	JOIN CATEGORIA cat ON (cat.ID = c.ID_CATEGORIA)
        	where (c.ID_CATEGORIA = '".$categoria."')        		
        ");			
	}
	

	/*Funciones que utiliza el administrador!!!!*/
	
  	private function subirImagenes($imagenes){

	    $carpeta = "uploads/images/";
	    $destinos_finales = array();
	    foreach ($imagenes["tmp_name"] as $key => $value){
	      $destinos_finales[] = $carpeta.uniqid().$imagenes["name"][$key];
	      move_uploaded_file($value, end($destinos_finales));
	    }
	    return $destinos_finales;
  	}

	function getCabanas(){

	    $cabanas = array();
	    $consulta = $this->db->prepare("SELECT * FROM cabana");
	    $consulta->execute();

	    while($cabana = $consulta->fetch(PDO::FETCH_ASSOC)){

	      $cabanas[]=$cabana;
	    }
	    return $cabanas;
  	}

  	function agregarCabana($nombre, $detalle, $imagenes, $id_categoria, $precio, $capacidad){
		
		$ruta = $this->subirImagenes($imagenes);
		$URL_IMG = $ruta[0];
	
		  $this->db->beginTransaction();
		  
		  $consulta = $this->db->prepare('INSERT INTO cabana(nombre, detalle, URL_IMG, id_categoria, precio, capacidad) VALUES(?,?,?,?,?,?)');
		  $consulta->execute(array($nombre, $detalle, $URL_IMG, $id_categoria,$precio, $capacidad));
		 
		   $this->db->commit();		  
  	}

	
	private function subirImagenesAjax($imagenes){

	   $carpeta = "uploads/images/";
	   $destinos_finales = array();
	   foreach ($imagenes as $imagen){
	      $destino =  $carpeta.uniqid().$imagen["name"];
	      move_uploaded_file($imagen["tmp_name"], $destino);
	      $destinos_finales[] = $destino;
	    }
	   return $destinos_finales;
	}

  	
  
}

?>