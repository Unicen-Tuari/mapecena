<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 15:01:44
         compiled from ".\templates\galeria.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77625475dd48333fe5-43184355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3468a005189d737e5dabe3f8cdddcada5dd5bc41' => 
    array (
      0 => '.\\templates\\galeria.tpl',
      1 => 1417010501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77625475dd48333fe5-43184355',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5475dd4838df50_19098797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5475dd4838df50_19098797')) {function content_5475dd4838df50_19098797($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript" src="./js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="./js/jssor.js"></script>
<script type="text/javascript" src="./js/jssor.slider.js"></script>
   

<div class="main_bg">
<div class="wrap">
<div class="wrapper">
<div class="main">

    <h2 class="style ">Galería de fotos</h2>
        <?php echo $_smarty_tpl->getSubTemplate ("modalGaleria.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<br>
 
</div>
</div>
</div>
</div>
<!-- <script type="text/javascript" src="../js/scripts.js"></script> -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>