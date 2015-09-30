<?php /* Smarty version Smarty-3.1.14, created on 2015-09-30 08:57:29
         compiled from ".\templates\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2863356082609668d26-39522088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1be7ff7fdee636597edd726ee98dfef4bfd55d1f' => 
    array (
      0 => '.\\templates\\footer.tpl',
      1 => 1443596239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2863356082609668d26-39522088',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5608260966b6a5_33458698',
  'variables' => 
  array (
    'pagina' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5608260966b6a5_33458698')) {function content_5608260966b6a5_33458698($_smarty_tpl) {?><!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-4 footer-left">
				<div class="footer-top">
					
				</div>
				<div class="social">
					<ul>
						<li><a href="#"><i class="pho"> </i></a></li>
						<li><a href="#"><i class="twiter"> </i></a></li>
						<li><a href="https://www.facebook.com/Caba%C3%B1as-Mapu-Suyai-365713570162924/"><i class="facebok"> </i></a></li>
							<div class="clearfix"></div>	
					</ul>
				</div>
					<div class="clearfix"> </div>
			</div>
			<div class="col-md-4 footer-right"></div>
			<div class="col-md-4 footer-right">
				<p>Copyrights © 2015 Cabañas Mapu Suyai </p>
			</div>
		</div>
	</div>
	</div>
	
	<script type="text/javascript" src="./js/funciones.js"></script>
	<script type="text/javascript">
		//cuando la pagina esta lista
		$(function () {
			$("#<?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
").parent().click();//hago click en el boton pasado por parametro
		});
	</script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    
<!-- footer -->
</body>
</html><?php }} ?>