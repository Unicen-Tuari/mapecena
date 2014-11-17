<?php /* Smarty version Smarty-3.1.14, created on 2014-11-16 23:34:57
         compiled from ".\templates\galeria.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2846654692691c9faf2-14090648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3468a005189d737e5dabe3f8cdddcada5dd5bc41' => 
    array (
      0 => '.\\templates\\galeria.tpl',
      1 => 1414014355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2846654692691c9faf2-14090648',
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
  'unifunc' => 'content_54692691cf7873_84691826',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54692691cf7873_84691826')) {function content_54692691cf7873_84691826($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</div>
</div>

    <script type="text/javascript" src="./js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="./js/jssor.js"></script>
    <script type="text/javascript" src="./js/jssor.slider.js"></script>
   

<div class="main_bg">
<div class="wrap">
<div class="wrapper">
<div class="main">
            <h2 class="style ">Galería</h2>

<div class="container">
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
    </div>
</div>

</div>
</div>
</div>
</div>
<script type="text/javascript" src="../js/scripts.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>