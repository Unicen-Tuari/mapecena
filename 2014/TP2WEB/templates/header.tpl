<!DOCTYPE HTML>
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


  <!--clase del registrar y loguear del index-->
  <link href="css/Inicio_registrar_loguear.css" rel="stylesheet">
  <link href="css/Botoens_registrar.css" rel="stylesheet">

  <link href="css/camera.css" rel="stylesheet" type="text/css" media="all" />
  <script type='text/javascript' src="js/jquery.min.js"></script>
  <script type='text/javascript' src="js/jquery.mobile.customized.min.js"></script>
  <script type='text/javascript' src="js/jquery.easing.1.3.js"></script> 
  <script type='text/javascript' src="js/camera.min.js"></script> 
  <script type="text/javascript" src="./js/scripts.js"></script>

</head>
<body >



<!-- Registracion y logueo-->
<div class="navbar-collapse collapse">
  <ul class="nav navbar-nav navbar-right">
   <li> <a href="#" title="Click para registrarse y comenzar a utilizar la aplicacion" data-toggle="modal" data-target="#Registrarse"><i class="fa fa-sign-in fa-1x"></i>  Registrarse</a></li>
    <li><a href="#"   data-toggle="modal" data-target="#Ingresar" title="Click para ingresar. Debe estar registrado"><i class="fa fa-user"></i>  Iniciar sesión</a></li>
  </ul>
  <form class="navbar-form navbar-right">
  </form>
</div>

<!-- FIN Registracion y logueo-->



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
			<!-- Barra de opciones -->
				<li><a class ="active " href="index.php?action=inicio">Inicio</a> </li>
				<li class="arrow"><a class="hsubs">Máquinas</a>  
					<ul class="subs">
			            <li><a  href="index.php?action=nuevas">Nuevas</a></li>
			            <li><a  href="index.php?action=usadas">Usadas</a></li>
			        </ul>
				</li>
				<li><a href="index.php?action=eventos">Eventos</a></li>
				<li><a href="index.php?action=galeria">Galería</a> </li>
				<li><a href="index.php?action=quienessomos">Quienes somos</a></li>
				<li><a href="index.php?action=contacto">Contacto</a> </li>
				<li><a id = "turnos" href="index.php?action=turnos" style="visibility: hidden">Turnos</a> </li>
				<!-- FIN Barra de opciones -->
			</div>	
		</ul>
		</div>
	</div>
</nav>



<!--*************************************************************************************-->
<!--*************************************************************************************-->

                                          <!-- Modal Registrarse -->



<div class="modal fade" id="Registrarse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Registrarse</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal"  action="index.php" method="post">
        <fieldset>
            <legend>Ingrese todo los datos requeridos.</legend>
              <div class="form-group">
                  <label for="inputEmail" class="col-lg-2 control-label" required>Nombres</label>
                  <div class="col-lg-10">
                    <input type="text" name="nombre_registrarse" class="form-control" id="inputEmail" placeholder="" required>
                  </div>
              </div>
              <div class="form-group">
                <label for="apellido" class="col-lg-2 control-label" required>Apellido</label>
                <div class="col-lg-10">
                  <input type="text" name="apellido_registrarse" class="form-control" id="apellido" placeholder="" required>
                </div>
              </div>
              <div class="form-group">
                  <label for="inputDocumento" class="col-lg-2 control-label">Documento</label>
                  <div class="col-lg-10">
                    <input type="text" name="dni_registrarse"  class="form-control" id="inputDocumento" placeholder="D.N.I" required>
                  </div>
              </div>
              <div class="form-group">
                  <label for="inputFechaNacimiento" class="col-lg-2 control-label">Fecha de Nacimiento</label>
                  <div class="col-lg-10">
                    <input type="text" name="FechaNacimiento"  class="form-control" id="inputFechaNacimiento" placeholder="Día/Mes/Año" >
                  </div>
              </div>
              <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">E-mail</label>
                    <div class="col-lg-10">
                      <input type="email" name="email_registrarse" class="form-control" id="inputEmail"  placeholder="EJ: Minombre@gmail.com"  required>
                    </div>
              </div>
              <div class="form-group">
                    <label for="inputCelular" class="col-lg-2 control-label">Teléfono 
                    celular</label>
                    <div class="col-lg-10">
                      <input type="integer" name="Celular_registrarse" class="form-control" id="inputCelular" placeholder="XXXX-XXXXXXXXX" >
                    </div>
               </div>
              <div class="form-group">
                    <label for="inputTelefonoFijo" class="col-lg-2 control-label">Teléfono fíjo</label>
                    <div class="col-lg-10">
                      <input type="integer" name="Telefono_fijo_registrarse" class="form-control" id="inputTelefonoFijo" placeholder="XXXX-XXXXXXX">
                    </div>
               </div>

              <div class="form-group">
                <label for="text" class="col-lg-2 control-label">Dirección</label>
                     <div class="col-lg-10">
                         <input type="text" name="Direccion_registrarse"  class="form-control" id="inputEmail" placeholder="Direccion" required>
                    </div>
              </div>

              <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                   <div class="col-lg-10">
                          <input type="password" name="pass_registrarse" class="form-control" id="inputPassword" placeholder="Contraseña" required >
                  </div>
              </div>


              <div class="form-group">
                  <div class="col-lg-10 col-lg-offset-2">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Registrarse</button>
                  </div>
              </div>
         </fieldset>  
      </form>
      </div>

    </div>
  </div>
</div>



<!--*************************************************************************************-->
<!--*************************************************************************************-->

                                          <!-- Modal login -->


<div class="modal fade" id="Ingresar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title  text-center" id="myModalLabel">Ingresar</h4>
            </div>

      <div class="modal-body">
<!-- 
            <form class="form-horizontal"  id="formLogin"  method="post" action="index.php">
              <fieldset>
                <legend>Datos de usuario.</legend>
                    <div class="form-group">
                      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                          <div class="col-lg-10">
                            <input type="email"  name="email_login"  class="form-control" id="inputEmail"  placeholder="EJ: Minombre@gmail.com " required >
                          </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword"  class="col-lg-2 control-label" required>Contraseña</label>
                          <div class="col-lg-10">
                            <input type="password" name="pass_login" class="form-control" id="inputPassword"  placeholder="contraseña para esta aplicacion" required>
                            <div id="error_login_div">
                                 {include file="error_login.tpl" }
                            </div>
                          </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancelar</button>
                            <button type="submit" id="iniciar" class="btn btn-primary">Ingresar</button>
                      </div>
                    </div>
                     
                     <script src="./js/Ajax_login.js"></script>
                 </fieldset>
              </form> -->
                <form method="post" action="index.php?action=login">
                    <p><input type="text" name="user" value="" placeholder="Username o E-mail"></p>
                    <p><input type="password" name="pass" value="" placeholder="Password"></p>
                    <p><input type="submit" name="commit" value="Login"></p>
                </form>
           
        </div>
   
    </div>
  </div>
</div>
