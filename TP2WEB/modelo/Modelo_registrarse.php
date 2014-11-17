<?php
class model_registrarse extends modelodb
   {

	/*******Atributos***********/
	public $sectorReclamo;

		/*****acciones posibles a realizar con un reclamo******/
	public function load(){
		}

	public function registrar($Reclamo_ingresado)
		{

			$nombre			=	$Reclamo_ingresado["nombre"];
			$apellido		=	$Reclamo_ingresado["apellido"];
			$dni			=	$Reclamo_ingresado["dni"];
			$email			=	$Reclamo_ingresado["email"];
			$Celular		=	$Reclamo_ingresado["Celular"];
			$fecha_nacimiento=	date("y/m/d");//$Reclamo_ingresado["fecha_nacimiento"];
			$Telefono_fijo	=	$Reclamo_ingresado["Telefono_fijo"];
			$pass			=	$Reclamo_ingresado["pass"];
			$direccion		=	$Reclamo_ingresado["direccion"];
			$fecha_registro	=	date("y/m/d");


			// El id_persona debe incrementarse solo
			$sql = "INSERT INTO USUARIO(
					 nombre				,
					 apellido			,
					 dni_persona		,
					 fecha_nacimiento	,
					 direccion			,
					 celular			,
					 telefono_fijo		, 
					 email				, 
					 password			,
					 fecha_registro
					 )
			VALUES( 
					:nombre				, 
					:apellido			,				
					:dni_persona		,
					:fecha_nacimiento	,
			 		:direccion			, 
			 		:celular			,
			 		:telefono_fijo		, 
			 		:email				, 
			 		:password			,
			 		:fecha_registro
			 	  )";


			$q=$this->connection(); 
			$preparado=$q->prepare($sql);

			$preparado->execute(
								array
									(														
										':nombre'				=>$nombre				, 
										':apellido'				=>$apellido				,				
										':dni_persona'			=>$dni					,
										':fecha_nacimiento'		=>$fecha_nacimiento		,
								 		':direccion'			=>$direccion			, 
								 		':celular'				=>$Celular				,
								 		':telefono_fijo'		=>$Telefono_fijo		, 
								 		':email'				=>$email				, 
								 		':password'				=>$pass					,
								 		':fecha_registro'		=>$fecha_registro
					 				 )
								);


		}
		

		
}


?>