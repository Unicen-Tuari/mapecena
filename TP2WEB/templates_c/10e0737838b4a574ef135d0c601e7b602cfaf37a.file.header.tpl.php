<?php /* Smarty version Smarty-3.1.14, created on 2014-10-22 09:50:21
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1771954475666d5efe3-63483480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1413964219,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1771954475666d5efe3-63483480',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54475666d62038_63568284',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54475666d62038_63568284')) {function content_54475666d62038_63568284($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
<title>Campo Activo S.A.</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="./css/font-awesome.css">
<link href="./css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="./css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Medula+One' rel='stylesheet' type='text/css'>

	<link href="css/camera.css" rel="stylesheet" type="text/css" media="all" />
    <script type='text/javascript' src="js/jquery.min.js"></script>
    <script type='text/javascript' src="js/jquery.mobile.customized.min.js"></script>
    <script type='text/javascript' src="js/jquery.easing.1.3.js"></script> 
    <script type='text/javascript' src="js/camera.min.js"></script> 
    <script type="text/javascript" src="./js/scripts.js"></script>

</head>
<body >

<div class="header_bg">
<div class="wrap">
<div class="wrapper">
	<div class="logo">
			<h1><a href="index.php">Campo Activo S.A.</a></h1>
	</div>
</div>
</div>
</div>

<div class="slider_bg">
<div class="wrap">
<div class="wrapper1">
<nav class="navbar navbar-default" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="top-nav">
			<div class="centrar">
				<li><a class ="active " href="index.php?action=inicio">Inicio</a> </li>
				<li class="arrow"><a class="hsubs " >Máquinas</a>  
					<ul class="subs">
			            <li><a  href="index.php?action=nuevas">Nuevas</a></li>
			            <li><a  href="index.php?action=usadas">Usadas</a></li>
			        </ul>
				</li>
				<li><a href="index.php?action=eventos">Eventos</a></li>
				<li><a href="index.php?action=galeria">Galería</a> </li>
				<li><a href="index.php?action=turnos">Turnos</a> </li>
				<li><a href="index.php?action=quienessomos">Quienes somos</a></li>
				<li><a href="index.php?action=contacto">Contacto</a> </li>
				<li>
					<form class = "busqueda" action = "index.php">
		                <input type = "hidden" name  = "action" value = "resultado">

		                        <input id = "tipeoUser" name = "q">

		                        <button class = "btn btn-default" type = "submit" value = "Búsqueda">
		                            <i class="fa fa-search"></i>
		                            
		                        </button>

		            </form>
				</li>

			</div>	
		</ul>
		</div>
	</div>
</nav>
<?php }} ?>