<?php /* Smarty version Smarty-3.1.14, created on 2014-11-25 01:46:25
         compiled from ".\templates\soloevento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48185472bb1d22a239-41790965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '879ddce2cbb4daa39cb7d163ff658163ef227a80' => 
    array (
      0 => '.\\templates\\soloevento.tpl',
      1 => 1416876314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48185472bb1d22a239-41790965',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5472bb1d2ad448_74389983',
  'variables' => 
  array (
    'cantidad' => 0,
    'eventos' => 0,
    'evento' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5472bb1d2ad448_74389983')) {function content_5472bb1d2ad448_74389983($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['cantidad']->value>0){?>	

<?php  $_smarty_tpl->tpl_vars['evento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['evento']->_loop = false;
 $_smarty_tpl->tpl_vars['id_evento'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['eventos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['evento']->key => $_smarty_tpl->tpl_vars['evento']->value){
$_smarty_tpl->tpl_vars['evento']->_loop = true;
 $_smarty_tpl->tpl_vars['id_evento']->value = $_smarty_tpl->tpl_vars['evento']->key;
?>
<div class="maq">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <img class="img-responsive foto img-rounded" src="<?php echo $_smarty_tpl->tpl_vars['evento']->value['Ruta'];?>
" />
                    
                    <a href="index.php?action=galeriaId&amp;id=<?php echo $_smarty_tpl->tpl_vars['evento']->value['id_Contenido'];?>
" class="fa fa-camera-retro fa-4x iconos"></a>
                </div>
                <div class="col-md-1"></div>
            </div>
            
            <h3 class="style"><?php echo utf8_encode($_smarty_tpl->tpl_vars['evento']->value['Nombre']);?>
</h3>
            <p class="para top"><?php echo utf8_encode($_smarty_tpl->tpl_vars['evento']->value['Texto']);?>
</p>
            <strong><h4>Fecha: <?php echo $_smarty_tpl->tpl_vars['evento']->value['Fecha'];?>
</h4>
            <h4>Ubicación: <?php echo utf8_encode($_smarty_tpl->tpl_vars['evento']->value['Ubicacion']);?>
</h4></strong>

        </div>
        <div class="col-md-3"></div>
    </div>
</div>

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