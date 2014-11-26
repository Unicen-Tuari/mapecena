<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 15:01:44
         compiled from ".\templates\modalGaleria.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54115475dd483aa6c9-48799359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63b6b527566311a65c7d19fee24cd7ad9865cfe9' => 
    array (
      0 => '.\\templates\\modalGaleria.tpl',
      1 => 1416772607,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54115475dd483aa6c9-48799359',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'galeriaImg' => 0,
    'galeriaI' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5475dd483e5143_06703291',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5475dd483e5143_06703291')) {function content_5475dd483e5143_06703291($_smarty_tpl) {?>
   <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 500px; height: 400px; ">

                <!-- Slides Container -->
                <div u="slides" style="cursor:pointer; position: absolute; left: 0px; top: 0px; width: 500px; height: 400px; overflow: hidden;">
                    <?php  $_smarty_tpl->tpl_vars['galeriaI'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['galeriaI']->_loop = false;
 $_smarty_tpl->tpl_vars['id_galeria'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['galeriaImg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['galeriaI']->key => $_smarty_tpl->tpl_vars['galeriaI']->value){
$_smarty_tpl->tpl_vars['galeriaI']->_loop = true;
 $_smarty_tpl->tpl_vars['id_galeria']->value = $_smarty_tpl->tpl_vars['galeriaI']->key;
?>
                        <div>
                            <img class="img-responsive" u="image" src="<?php echo $_smarty_tpl->tpl_vars['galeriaI']->value['Ruta'];?>
" />    
                        </div>
                    <?php } ?>
                </div>
                
                <span u="arrowleft" class="jssora03l" style="width: 55px; height: 55px; top: 175px; left: -75px;">
                </span>
                
                <span u="arrowright" class="jssora03r" style="width: 55px; height: 55px; top: 175px; right: -75px;">
                </span>
                
            </div>
        </div>

        <div class="col-md-3"></div>
    </div><?php }} ?>