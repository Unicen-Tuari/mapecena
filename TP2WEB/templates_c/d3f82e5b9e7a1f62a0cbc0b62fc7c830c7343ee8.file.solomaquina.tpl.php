<?php /* Smarty version Smarty-3.1.14, created on 2014-11-20 01:28:09
         compiled from ".\templates\solomaquina.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29064546d179b22f3a2-21258922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3f82e5b9e7a1f62a0cbc0b62fc7c830c7343ee8' => 
    array (
      0 => '.\\templates\\solomaquina.tpl',
      1 => 1416443286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29064546d179b22f3a2-21258922',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_546d179b299292_59799244',
  'variables' => 
  array (
    'maquinas' => 0,
    'maquina' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546d179b299292_59799244')) {function content_546d179b299292_59799244($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['maquina'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['maquina']->_loop = false;
 $_smarty_tpl->tpl_vars['id_maquina'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['maquinas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['maquina']->key => $_smarty_tpl->tpl_vars['maquina']->value){
$_smarty_tpl->tpl_vars['maquina']->_loop = true;
 $_smarty_tpl->tpl_vars['id_maquina']->value = $_smarty_tpl->tpl_vars['maquina']->key;
?>


<div class="maq" >
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
			<h3 class="info">Estado: {	if ($maquina['Estado'] == N)
											utf8_encode("NUEVA");
										else
											utf8_encode("USADA");}</h3></strong>

		</div>
		<div class="col-md-3"></div>
	</div>
</div>

<?php } ?>
<?php }} ?>