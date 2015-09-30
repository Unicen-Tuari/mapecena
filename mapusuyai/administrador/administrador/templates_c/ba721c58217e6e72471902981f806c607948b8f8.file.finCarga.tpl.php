<?php /* Smarty version Smarty-3.1.14, created on 2015-09-29 08:43:30
         compiled from ".\templates\finCarga.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23596560a2a6cc11ce7-10320458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba721c58217e6e72471902981f806c607948b8f8' => 
    array (
      0 => '.\\templates\\finCarga.tpl',
      1 => 1443508217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23596560a2a6cc11ce7-10320458',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_560a2a6cc54566_49087779',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560a2a6cc54566_49087779')) {function content_560a2a6cc54566_49087779($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<div class="fondo">
  
<div class="container">        

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Carga Exitosa</strong></h2>
                    <hr>
                    <br><br>
                    <a href="index.php?action=index"><h2 class="intro-text text-center"><strong>Seguir Cargando Cabañas</strong></h2>
                    <hr></a>
                    <br><br>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>