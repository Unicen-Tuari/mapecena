<?php

  require('libs/smarty/Smarty.class.php');

  $templateEngine = new Smarty();
  $templateEngine->debugging = false;
  $templateEngine->assign('title',"Cabañas Mapu Suyai");
  //$templateEngine->assign('cars',$autos);
  if(!array_key_exists("v",$_GET) || $_GET["v"] === "lista" ){    
    $templateEngine->display('index.tpl');
  }
  else{    
    $templateEngine->display('index.tpl');
   /* $templateEngine->display('home_tabla.tpl');*/
  }



/*  if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='index')
  {
    include "./controladores/controladorInicio.php";
    $controller = new IndexController();
    $controller->actionIndex();   
  }
  else 
    if($_REQUEST['action']=='resenia')
    {
      include "./controladores/controladorResenia.php";
      $c = new ReseniaController();
      $c->actionResenia();
    }
    else 
      if($_REQUEST['action']=='maquina')
      {
        
        if(array_key_exists('estado', $_GET))
        {
          include "./controladores/controladorMaquina.php";
          $c = new MaquinaController();
          $c->actionMaquina($_GET['estado']);                 
        }
      }
      else
        if($_REQUEST['action']=='carouselMaq')
        {         
          if((array_key_exists('estado', $_GET)) && (array_key_exists('id', $_GET)))
          {
            include "./controladores/controladorMaquina.php";
            $c = new MaquinaController();
            $c->actionCarouselMaq($_GET['estado'],$_GET['id']);                 
          }
        }
        else 
          if($_REQUEST['action']=='evento')
          {
            include "./controladores/controladorEvento.php";
            $c = new EventoController();
            $c->actionEvento();
          }
          else
            if($_REQUEST['action']=='carouselE')
            {
              if(array_key_exists('id', $_GET))
                  {
                    include "./controladores/controladorEvento.php";
                    $c = new EventoController();
                    $c->actionCarousel($_GET['id']);                  
                  }
            }
            else
              if($_REQUEST['action']=='turno')
              {
                include "./controladores/controladorTurno.php";
                $c = new TurnoController();
                $c->actionTurno();
              }
              else
                if($_REQUEST['action']=='contacto')
                {
                                    
                  if((array_key_exists('name', $_POST)) && (array_key_exists('email', $_POST)) 
                    && (array_key_exists('phone', $_POST)) && (array_key_exists('message', $_POST)))
                  {
                    include "./controladores/controladorContacto.php";
                    $c = new ContactoController();
                    $c->actionMensaje($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['message']);                  
                  }
                  else
                  {
                    include "./controladores/controladorContacto.php";
                    $c = new ContactoController();
                    $c->actionContacto();
                  }               
                }
                else
                  if($_REQUEST['action']=='resultado')
                  {
                    if(array_key_exists('q', $_GET))
                    {
                      include "./controladores/controladorMaquina.php";
                      $c = new MaquinaController();
                      $c->actionBusquedaMaq($_GET['q']);
                    }
                    else 
                    {
                      echo "Error de Parametros";
                    }
                  }
                  else 
                  {
                    echo "ERROR ACCION NO VALIDA";
                  }
*/

?>
