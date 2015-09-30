<?php /* Smarty version Smarty-3.1.14, created on 2015-09-29 08:32:58
         compiled from ".\templates\errorCarga.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21422560a309a158dd7-38903835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3881eaa1588fdff75b3c8048e32653a4feeccd93' => 
    array (
      0 => '.\\templates\\errorCarga.tpl',
      1 => 1443508327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21422560a309a158dd7-38903835',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_560a309a1a76d5_68046962',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560a309a1a76d5_68046962')) {function content_560a309a1a76d5_68046962($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<div class="fondo">
  
<div class="container">        

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Fallo la Carga de la cabaña</strong></h2>
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