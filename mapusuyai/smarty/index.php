<?php

  // require('lib/smarty/Smarty.class.php');
  error_reporting(E_ALL);
  ini_set("display_errors", 1);


  // include "./controladores/controladorInicio.php";
  // $controller = new IndexController();
  // $controller->actionIndex();   

  // $templateEngine = new Smarty();
  // $templateEngine->debugging = false;
  // $templateEngine->assign('title',"Cabañas Mapu Suyai");
  // //$templateEngine->assign('cars',$autos);
  // if(!array_key_exists("v",$_GET) || $_GET["v"] === "lista" ){    
  //   $templateEngine->display('index.tpl');
  // }
  // else{    
  //   $templateEngine->display('index.tpl');
  //  /* $templateEngine->display('home_tabla.tpl');*/
  // }

/****************************************/
if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='INDEX')
  {
    include "./controladores/controladorInicio.php";
    $controller = new IndexController();
    $controller->actionIndex();   
  }
  else 
    if($_REQUEST['action']=='GALERIA')
    {
      include "./controladores/controladorGaleria.php";
      $c = new galeriaController();
      $c->actionGaleria();
    }
    else 
      if($_REQUEST['action']=='CABANAS')
    {
      include "./controladores/controladorCabana.php";
      $c = new cabanaController();
      $c->actionCabana();
    }
    else 
      {
        echo "ERROR ACCION NO VALIDA";
      }


?>
