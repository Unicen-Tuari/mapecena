<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 20:07:27
         compiled from ".\templates\contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6956547624ef2b8fb2-76841004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '466dcc33a567cd1e7c81f5bde835247db88df2dd' => 
    array (
      0 => '.\\templates\\contacto.tpl',
      1 => 1416996723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6956547624ef2b8fb2-76841004',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547624ef2f2df2_90407936',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547624ef2f2df2_90407936')) {function content_547624ef2f2df2_90407936($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="main_bg">
<div class="wrap">
<div class="wrapper">
<div class="main">
		<div class="section group">				
				<div class="col span_1_of_2">
      			<div class="company_address">
				     	<h2 class="style">Encontranos en </h2>
						<p>Ruta 3 KM 299.2,</p>
						<p>CP 7300 - Azul,</p>
						<p>Buenos Aires, Argentina</p>
				   		<p>Teléfono:(54) 02281 427465</p>
				 	 	<p>Email: <span>campoactivo@speedy.com.ar</span></p>
				   		<p>Seguinos en las redes sociales: <a href="https://www.facebook.com/cristian.peronja.1"><i class="fa fa-facebook fa-2x"> /</i>  </a> <a href="https://twitter.com/CristianPeronja"><i class="fa fa-twitter fa-2x"></i></a></p>
				   		
				   </div>
					<div class="contact_info">
			    	 	<h2 class="style">Aquí Estamos</h2>
			    	 		<div class="map">
			    	 			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2799.827187409258!2d-59.842185974121094!3d-36.79340037765881!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses-419!2s!4v1403727301661" ></iframe>
					   			
					   		</div>

					   		<div class="map">
					   			<iframe width="560" height="315" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?layer=c&panoid=Hl5fqtNcyR3x633Vj_sRNA&ie=UTF8&source=embed&output=svembed&cbp=13%2C315.23%2C%2C0%2C-5.040000000000006"></iframe><br /><small><a href="https://www.google.com.ar/maps/@-36.7946123,-59.8438352,3a,90y,315.23h,95.04t/data=!3m4!1e1!3m2!1sHl5fqtNcyR3x633Vj_sRNA!2e0">View Larger Map</a></small>

					   		</div>
      				</div>				   
				   <div class="clear"></div>
				</div>				
				<div class="col span_2_of_4">
				  <div class="contact-form">
				  	<h2 class="style">Contactanos</h2>
					       <form method="POST" action="index.php?action=contacto">
					    	<div>
						    	<span><label>Nombre</label></span>
						    	<span><input name="nombre" type="text" class="textbox" required></span>
						    </div>
						    <div>
						    	<span><label>Apellido</label></span>
						    	<span><input name="apellido" type="text" class="textbox" required></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="email" type="email" class="textbox" required></span>
						    </div>
						    <div>
						     	<span><label>Nro Telefónico</label></span>
						    	<span><input name="tel" type="integer" class="textbox" ></span>
						    </div>
						    <div>
						    	<span><label>Comentarios/Sugerencias</label></span>
						    	<span><textarea name="comentario" required> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Enviar"></span>
						  </div>
					    </form>

				    </div>
  				</div>		
  			<div class="clear"></div>
		  </div>
	</div>
</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>