<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 20:03:40
         compiled from ".\templates\solomaquina.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155805476240c7a6bf6-49816525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3f82e5b9e7a1f62a0cbc0b62fc7c830c7343ee8' => 
    array (
      0 => '.\\templates\\solomaquina.tpl',
      1 => 1417002161,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155805476240c7a6bf6-49816525',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cantidad' => 0,
    'maquinas' => 0,
    'esAdmin' => 0,
    'maquina' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5476240c872f01_96201552',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5476240c872f01_96201552')) {function content_5476240c872f01_96201552($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['cantidad']->value>0){?>
<?php  $_smarty_tpl->tpl_vars['maquina'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['maquina']->_loop = false;
 $_smarty_tpl->tpl_vars['id_maquina'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['maquinas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['maquina']->key => $_smarty_tpl->tpl_vars['maquina']->value){
$_smarty_tpl->tpl_vars['maquina']->_loop = true;
 $_smarty_tpl->tpl_vars['id_maquina']->value = $_smarty_tpl->tpl_vars['maquina']->key;
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['esAdmin']->value)&&($_smarty_tpl->tpl_vars['esAdmin']->value==1))){?>
		<div class="col-lg-6 text-center">
		    <form name = "modificar" action="index.php?action=modificarMaq" method="POST">
		        <input name = "id_maq" type = "hidden" 
		        value = "<?php echo $_smarty_tpl->tpl_vars['maquina']->value['id_Contenido'];?>
">
		        <button class = "glyphicon glyphicon-edit btn btn-default" type = "submit"> Modificar</button>
		    </form>                    
		</div>
		<div class="col-lg-6 text-center">
		    <form name = "eliminar" action="index.php?action=eliminarMaq" method="POST">
		        <input name = "id_maq" type = "hidden" value = "<?php echo $_smarty_tpl->tpl_vars['maquina']->value['id_Contenido'];?>
">
		        <button type = "submit" class="glyphicon glyphicon-remove btn btn-default"> Eliminar</button>
		    </form>
		</div>
	<?php }?>
	
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
				<h3 class="info">Estado: <?php echo utf8_encode($_smarty_tpl->tpl_vars['maquina']->value['Estado']);?>
</h3></strong>
				
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
	
		<br>
		<hr align="center" size="2" width="80%" style="color: #0056b2;" />
		<br>
<?php } ?>

<?php }else{ ?>
	<div class="row">
	  <div class="col-md-3"></div>
	  <div class="col-md-6"><h2 class="style">No se encontraron resultados para su búsqueda</h2></div>
	  <div class="col-md-3"></div>
	</div>
	<br>				
<?php }?>
<?php }} ?>