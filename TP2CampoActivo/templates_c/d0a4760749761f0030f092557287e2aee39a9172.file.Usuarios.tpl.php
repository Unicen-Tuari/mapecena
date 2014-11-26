<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 22:34:35
         compiled from ".\templates\Usuarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2634554762df15a04e4-42589945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0a4760749761f0030f092557287e2aee39a9172' => 
    array (
      0 => '.\\templates\\Usuarios.tpl',
      1 => 1417037672,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2634554762df15a04e4-42589945',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54762df15fc584_53362134',
  'variables' => 
  array (
    'Users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54762df15fc584_53362134')) {function content_54762df15fc584_53362134($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


   

<div class="main_bg">
<div class="wrap">
<div class="wrapper">
<div class="main">

<h2 class="style ">Usuarios</h2>
<div class="table-responsive">
  
  <div class="table-responsive">
  <table class=" table table-condensed" data-toggle="table" style="text-align:center">
<tbody >
<TR ALIGN=center>
    <TH scope="col"><h3>Usuario</h3></TH>
    <TH scope="col"><h3>Nombre</h3></TH>
    <TH scope="col"><h3>Apellido</h3></TH>
    <TH scope="col"><h3>Es Administrador</h3></TH>
    <TH scope="col"><h3>Promover</h3></TH>
    <TH scope="col"><h3>Eliminar</h3></TH>
</TR>
<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_smarty_tpl->tpl_vars['idUsuario'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
 $_smarty_tpl->tpl_vars['idUsuario']->value = $_smarty_tpl->tpl_vars['user']->key;
?>
  <tr>
    <td class="success"><?php echo $_smarty_tpl->tpl_vars['user']->value['Usuario'];?>
</td>
    <td class="active"><?php echo $_smarty_tpl->tpl_vars['user']->value['nombre'];?>
</td>
    <td class="success"><?php echo $_smarty_tpl->tpl_vars['user']->value['apellido'];?>
</td>
    <td class="active"><?php echo $_smarty_tpl->tpl_vars['user']->value['esAdmin'];?>
</td>
    <td class="success">
        <form name = "modificar" action="index.php?action=modificarUsuario" method="POST">
            <input name = "idUsuario" type = "hidden" value = "<?php echo $_smarty_tpl->tpl_vars['user']->value['idUsuario'];?>
">
            <button class = "glyphicon glyphicon-edit btn btn-default" type = "submit"></button>
        </form></td> 
    <td class="active">
        <form name = "eliminar" action="index.php?action=eliminarUsuario" method="POST">
            <input name = "idUsuario" type = "hidden" value = "<?php echo $_smarty_tpl->tpl_vars['user']->value['idUsuario'];?>
">
            <button class="glyphicon glyphicon-remove btn btn-default" type = "submit"></button>
        </form></td>
  </tr>
<?php } ?>

</tbody>
</table>
<br>
</div>
</div>
</div>
</div>
</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>