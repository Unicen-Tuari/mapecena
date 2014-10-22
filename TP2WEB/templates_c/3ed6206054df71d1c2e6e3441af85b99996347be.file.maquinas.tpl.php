<?php /* Smarty version Smarty-3.1.14, created on 2014-10-22 10:28:12
         compiled from ".\templates\maquinas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:334454475c9850c2f2-16957911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ed6206054df71d1c2e6e3441af85b99996347be' => 
    array (
      0 => '.\\templates\\maquinas.tpl',
      1 => 1413966360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '334454475c9850c2f2-16957911',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54475c985bb349_59642660',
  'variables' => 
  array (
    'estado' => 0,
    'maquinas' => 0,
    'maquina' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54475c985bb349_59642660')) {function content_54475c985bb349_59642660($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</div>
</div>

<div class="main_bg">
	<div class="wrap">
		<div class="wrapper">
			<div class="main">
				<h2 class="style">Máquinas <?php echo $_smarty_tpl->tpl_vars['estado']->value;?>
</h2>
			</div>
		</div>
	</div>
</div>


<?php  $_smarty_tpl->tpl_vars['maquina'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['maquina']->_loop = false;
 $_smarty_tpl->tpl_vars['id_maquina'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['maquinas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['maquina']->key => $_smarty_tpl->tpl_vars['maquina']->value){
$_smarty_tpl->tpl_vars['maquina']->_loop = true;
 $_smarty_tpl->tpl_vars['id_maquina']->value = $_smarty_tpl->tpl_vars['maquina']->key;
?>
<div class="maq">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">

					<img class="img-responsive foto img-rounded" src="<?php echo $_smarty_tpl->tpl_vars['maquina']->value['Ruta'];?>
" /> 
                	
                	<a href="index.php?action=galeriaId&amp;id=<?php echo $_smarty_tpl->tpl_vars['maquina']->value['id_Contenido'];?>
" class="fa fa-camera-retro fa-4x iconos"></a>
				</div>
				<div class="col-md-1"></div>
			</div>

			<h3 class="style"><?php echo utf8_encode($_smarty_tpl->tpl_vars['maquina']->value['Nombre']);?>
</h3>
			<p class="info"><?php echo utf8_encode($_smarty_tpl->tpl_vars['maquina']->value['Texto']);?>
</p>
			<strong><h3 class="info">Modelo: <?php echo $_smarty_tpl->tpl_vars['maquina']->value['Modelo'];?>
</h3>
			<h3 class="info">Tipo: <?php echo utf8_encode($_smarty_tpl->tpl_vars['maquina']->value['Tipo']);?>
</h3>
			<h3 class="info">Precio: <?php echo utf8_encode($_smarty_tpl->tpl_vars['maquina']->value['Precio']);?>
</h3></strong>

		</div>
		<div class="col-md-3"></div>
	</div>
</div>

<?php } ?>








<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>