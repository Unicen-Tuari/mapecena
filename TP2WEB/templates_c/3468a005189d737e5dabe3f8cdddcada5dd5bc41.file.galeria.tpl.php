<?php /* Smarty version Smarty-3.1.14, created on 2014-11-23 20:49:35
         compiled from ".\templates\galeria.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139695472353b2a2be8-74986244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3468a005189d737e5dabe3f8cdddcada5dd5bc41' => 
    array (
      0 => '.\\templates\\galeria.tpl',
      1 => 1416772174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139695472353b2a2be8-74986244',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5472353b301135_49235986',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5472353b301135_49235986')) {function content_5472353b301135_49235986($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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

 <!-- Large modal -->
<!-- <button type="button" class="btn btn-defaul" data-toggle="modal" data-target=".bs-example-modal-lg"><h2 class="style ">Galería</h2></button>



<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <h2 class="style ">Galería</h2>
            <div class="galeria"> -->
            <h2 class="style ">Galería de fotos</h2>
                <?php echo $_smarty_tpl->getSubTemplate ("modalGaleria.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<br>
           
    <!--         <h2 class="style "> </h2>
            </div>
        </div>
    </div>
</div> -->



</div>
</div>
</div>
</div>
<script type="text/javascript" src="../js/scripts.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>