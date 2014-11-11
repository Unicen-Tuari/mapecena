{include file="header.tpl" title=foo}


</div>
</div>
</div>
<div class="main_bg">
<div class="wrap">
<div class="wrapper1">
<div class="main1">
	<div class="grids_of_3">
		<div class="grid_1_of_3 images_1_of_3 ">
			  <img class="img-circle" src="./images/Nuevos/NewHollandErca/NewHollandErca_004.jpg" alt="" />
			  <div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10 info">
					  <h2 class="style">Máquinas Nuevas</h2>
					  <p class="para top">Aquí encontrarás todos nuestros nuevos modelos.</p>
				     <div class="button"><a href="index.php?action=nuevas">Más</a></div>
				</div>
				<div class="col-md-1"></div>
		     </div>
		</div>
		<div class="grid_1_of_3 images_1_of_3 ">
			  <img class="img-circle" src="./images/Usados/NEWHOLLAND8030DT/NEWHOLLAND8030DT_005.jpg" alt="" />
			  <div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10 info">
					  <h2 class="style">Máquinas Usadas</h2>
					  <p class="para top">Aquí se encuentra la maquinaria usada en perfecto estado.</p>
				     <div class="button"><a href="index.php?action=usadas">Más</a></div>
				     </div>
				<div class="col-md-1"></div>
		     </div>
		</div>
		<div class="grid_1_of_3 images_1_of_3">
			  <img class="img-circle" src="./images/Eventos/AGROACTIVA2014/AGROACTIVA2014_024.jpg" alt="" />
			  <div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10 info">
					  <h2 class="style">Eventos</h2>
					  <p class="para top">Todos los eventos donde nos podrán hacer todas sus consultas.</p>
				     <div class="button"><a href="index.php?action=eventos">Más</a></div>
				     </div>
				<div class="col-md-1"></div>
		     </div>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
</div>
</div>

<!--*************************************************************************************-->
<!--*************************************************************************************-->

                                          <!-- Modal Registrarse -->



<div class="modal fade" id="Registratse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Registratse</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal"  action="index.php" method="post">
        <fieldset>
            <legend>Ingrese todo los datos requeridos.</legend>
              <div class="form-group">
                  <label for="inputEmail" class="col-lg-2 control-label" required>Nombre</label>
                  <div class="col-lg-10">
                    <input type="text" name="nombre_registrarse" class="form-control" id="inputEmail" placeholder="Nombre" required>
                  </div>
              </div>
              <div class="form-group">
                <label for="apellido" class="col-lg-2 control-label" required>Apellido</label>
                <div class="col-lg-10">
                  <input type="text" name="apellido_registrarse" class="form-control" id="apellido" placeholder="Apellido" required>
                </div>
              </div>
              <div class="form-group">
                  <label for="inputDocumento" class="col-lg-2 control-label">Documento</label>
                  <div class="col-lg-10">
                    <input type="text" name="dni_registrarse"  class="form-control" id="inputDocumento" placeholder="Dni" required>
                  </div>
              </div>
              <div class="form-group">
                  <label for="inputFechaNacimiento" class="col-lg-2 control-label" >Fecha de Nacimientó</label>
                  <div class="col-lg-10">
                    <input type="text" name="FechaNacimiento"  class="form-control" id="inputFechaNacimiento" placeholder="dia/mes/años" >
                  </div>
              </div>
              <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                      <input type="email" name="email_registrarse" class="form-control" id="inputEmail"  placeholder="E.G: Minombre@gmail.com" required required>
                    </div>
              </div>
              <div class="form-group">
                    <label for="inputCelular" class="col-lg-2 control-label" >Celular</label>
                    <div class="col-lg-10">
                      <input type="integer" name="Celular_registrarse" class="form-control" id="inputCelular" placeholder="Celular" required>
                    </div>
               </div>
              <div class="form-group">
                    <label for="inputTelefonoFijo" class="col-lg-2 control-label">Telefono fijo</label>
                    <div class="col-lg-10">
                      <input type="integer" name="Telefono_fijo_registrarse" class="form-control" id="inputTelefonoFijo" placeholder="Telefono fijo">
                    </div>
               </div>

              <div class="form-group">
                <label for="text" class="col-lg-2 control-label">Direccion</label>
                     <div class="col-lg-10">
                         <input type="text" name="Direccion_registrarse"  class="form-control" id="inputEmail" placeholder="Direcion" required>
                    </div>
              </div>
            <div class="form-group">
                  <label for="inputPassword" class="col-lg-2 control-label">Password nuevo</label>
                 <div class="col-lg-10">
                        <input type="password" name="pass_registrarse" class="form-control" id="inputPassword" placeholder="Contraseña nueva, necesaria para esta aplicacion" required >
         
                </div>

                <!-- borrar -->
		<form>
		<label for="provincias">Provincias</label>
            <select id="provincias" name="provincias">
                <option value='0'> (Seleccionar) </option>
				<option value='1'> Buenos Aires </option>	
				<option value='2'>	Capital Federal </option>
				<option value='3'>	Catamarca </option>
				<option value='4'>	Chaco </option>
				<option value='5'>	Chubut </option>
				<option value='6'>	Córdoba </option>
				<option value='7'>	Corrientes </option>
				<option value='8'>	Entre Ríos </option>
				<option value='9'>	Formosa </option>
				<option value='10'> Jujuy </option>
				<option value='11'>	La Pampa </option>
				<option value='12'>	La Rioja </option>
				<option value='13'>	Mendoza </option>
				<option value='14'>	Misiones </option>
				<option value='15'>	Neuquén </option>
				<option value='16'>	Río Negro </option>
				<option value='17'>	Salta </option>
				<option value='18'>	San Juan </option>
				<option value='19'>	San Luis </option>
				<option value='20'>	Santa Cruz </option>
				<option value='21'>	Santa Fé </option>
				<option value='22'>	Santiago del Estero </option>
				<option value='23'>	Tierra del Fuego </option>
				<option value='24'>	Tucumán </option>
            </select>
        </form>
                <!-- borrar -->



            </div>


              <div class="form-group">
                  <div class="col-lg-10 col-lg-offset-2">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
            <div class="modal-header">login
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title  text-center" id="myModalLabel">Ingresar</h4>
            </div>

      <div class="modal-body">

            <form class="form-horizontal"  id="formLogin"  method="post">
              <fieldset>
                <legend>Datos de usuario.</legend>
                    <div class="form-group">
                      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                          <div class="col-lg-10">
                            <input type="email"  name="email_login"  class="form-control" id="inputEmail"  placeholder="EJ: Minombre@gmail.com tu email" required >
                          </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword"  class="col-lg-2 control-label" required>Contraseña</label>
                          <div class="col-lg-10">
                            <input type="password" name="pass_login" class="form-control" id="inputPassword" placeholder="Password"  placeholder="contraseña para esta aplicacion" required>
                            <div id="error_login_div">
                                <!-- {include file="error_login.tpl" } -->
                            </div>
                          </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancelar</button>
                            <button type="submit" id="iniciar" class="btn btn-primary">Ingresar</button>
                      </div>
                    </div>
                     </form>
                     <script src="./js/Ajax_login.js"></script>
                 </fieldset>

           
        </div>
   
    </div>
  </div>
</div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/docs.min.js"></script>
    <script src="./js/inputFile.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./js/ie10-viewport-bug-workaround.js"></script>

    <!--index-->
    <script src="./js/index.js"></script>

      <!--Ajax Login-->

{include file="footer.tpl"}