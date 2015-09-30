<?php


  error_reporting(E_ALL);
  ini_set("display_errors", 1);

if(! array_key_exists('action', $_REQUEST)||($_REQUEST['action']=='index'))
  {
    include "./controladores/controladorInicio.php";
    $controller = new IndexController();
    $controller->actionIndex();   
  }
  else if($_REQUEST['action']=='indexAjax')
  {
    include "./controladores/controladorInicio.php";
    $c = new IndexController();
    $c->actionIndexAjax();
  }
  else if($_REQUEST['action']=='GALERIA')
  {
    include "./controladores/controladorGaleria.php";
    $c = new galeriaController();
    $c->actionGaleria();
  }
  else if($_REQUEST['action']=='TARIFAS'){
    include "./controladores/controladorCabana.php";
    $c = new cabanaController();
    $c->actionTarifas();
  }
  else if($_REQUEST['action']=='CABANAS')
  {
    include "./controladores/controladorCabana.php";
    $c = new cabanaController();
    $c->actionCabana();
  }
  else if($_REQUEST['action']=='CONTACTO')
  {
    include "./controladores/controladorContacto.php";
    $c = new ContactoController();
    $c->actionContacto();
  }
  else if($_REQUEST['action']=='CATEGORIA')
  {
    include "./controladores/controladorCabana.php";
    $c = new cabanaController();
 
    if(array_key_exists('idCat', $_GET))
        {
          $c->actioncabanaseguncategoria($_GET['idCat']);              
        }
      else
          $c->actioncabanasincategoria();
  }
  else 
    {
      echo "ERROR ACCION NO VALIDA";
    }


?>
