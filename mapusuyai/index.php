<?php

  // require('lib/smarty/Smarty.class.php');
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
    else 
      if($_REQUEST['action']=='CABANAS')
    {
      include "./controladores/controladorCabana.php";
      $c = new cabanaController();
      $c->actionCabana();
    }
      else 
      if($_REQUEST['action']=='CONTACTO')
    {
      include "./controladores/controladorContacto.php";
      $c = new ContactoController();
      $c->actionContacto();
    }
    else 
      {
        echo "ERROR ACCION NO VALIDA";
      }


?>
