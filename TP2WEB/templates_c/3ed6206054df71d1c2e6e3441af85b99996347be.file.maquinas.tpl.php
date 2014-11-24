<?php /* Smarty version Smarty-3.1.14, created on 2014-11-24 07:21:30
         compiled from ".\templates\maquinas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177975471676f4487b5-53858388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ed6206054df71d1c2e6e3441af85b99996347be' => 
    array (
      0 => '.\\templates\\maquinas.tpl',
      1 => 1416809386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177975471676f4487b5-53858388',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5471676f4d3948_13776377',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5471676f4d3948_13776377')) {function content_5471676f4d3948_13776377($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</div>
</div>

<div class="main_bg">
	<div class="wrap">
		<div class="wrapper">
			<div class="main">
				<h2 class="style">Máquinas</h2>
			</div>
		</div>
	</div>
</div>

<!-- BUSQUEDA -->
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<form class = "busqueda" id="formBusquedaM" method="POST">
			<br>
			<input type="text" name="inputBuscarM" placeholder = 'Buscar...'>
			<button class = "btn btn-default" type = "submit" >
				<i class="fa fa-search"></i>              
			</button>
		</form>
	</div>
</div>

<div id="resMaquinas">
	<?php echo $_smarty_tpl->getSubTemplate ("solomaquina.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>




<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>