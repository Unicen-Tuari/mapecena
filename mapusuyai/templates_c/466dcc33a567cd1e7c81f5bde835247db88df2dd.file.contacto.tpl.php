<?php /* Smarty version Smarty-3.1.14, created on 2015-09-30 23:46:14
         compiled from ".\templates\contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6381560c5826c75b74-00478493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '466dcc33a567cd1e7c81f5bde835247db88df2dd' => 
    array (
      0 => '.\\templates\\contacto.tpl',
      1 => 1443589004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6381560c5826c75b74-00478493',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_560c5826c9fad2_51903740',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560c5826c9fad2_51903740')) {function content_560c5826c9fad2_51903740($_smarty_tpl) {?><div class="main">
		<div class="container">
		<div class="contact-data">
			<h4>Contactanos</h4>
		          <div class="contact-form">
					     <form method="post" action="contact-post.html" class="left_form">
					    	<div>
						    	<span><label>Nombre</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
					    </form>
					    <form class="right_form">
					        <div>					    	
						    	<span><label>Comentario</label></span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Enviar" class="myButton"></span>
						  </div>
					    </form>
					    <div class="clear"></div>
				  </div>
				  <div class="content_bottom">
				 	<div class="company_address">
				     	<h4>Direccion:</h4>
						    	<p>Pietri 1402</p>
						   		<p>Tandil, Prov. Buenos Aires</p>
						   		<p>Argentina</p>
				   		<p>Teléfono:(+54) 0249 154123467</p>
				 	 	<p>Email: <span><a href="mailto:info@MapuSuyai.com">info@MapuSuyai.com</a></span></p>
				   		<p>Seguinos en : <span><a href="https://www.facebook.com/Caba%C3%B1as-Mapu-Suyai-365713570162924/">Facebook</a></span>, <span><a href="Twitter.com">Twitter</a></span></p>
				     </div>
				       <div class="contact_info">
    	 				<h4>Ubicación</h4>
					    	  <div class="map">

							   	   <iframe frameborder="0" scrolling="no" marginheight="5" marginwidth="0"width="600" height="300" src="https://maps.google.com/maps?hl=en&q=pietri 2000, Tandil, argentina&ie=UTF8&t=m&z=15&iwloc=B&output=embed"></iframe>


							  </div>
      				     </div>
				      <div class="clearfix"></div>
	                </div>
				</div>
		</div>
	</div>
	<?php }} ?>