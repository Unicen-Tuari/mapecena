<?php /* Smarty version Smarty-3.1.14, created on 2014-10-22 09:01:58
         compiled from ".\templates\galeria.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2923854475666cf8de9-10956441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3468a005189d737e5dabe3f8cdddcada5dd5bc41' => 
    array (
      0 => '.\\templates\\galeria.tpl',
      1 => 1413959292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2923854475666cf8de9-10956441',
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
  'unifunc' => 'content_54475666d4b3d5_30148200',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54475666d4b3d5_30148200')) {function content_54475666d4b3d5_30148200($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</div>
</div>

    <script type="text/javascript" src="./js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="./js/jssor.js"></script>
    <script type="text/javascript" src="./js/jssor.slider.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            var options = {
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 0,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
        });
    </script>
   

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

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>