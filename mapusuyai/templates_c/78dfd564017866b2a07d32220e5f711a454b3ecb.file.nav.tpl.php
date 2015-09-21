<?php /* Smarty version Smarty-3.1.14, created on 2015-09-21 03:24:30
         compiled from ".\templates\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1022755fe52d3a70633-27201242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78dfd564017866b2a07d32220e5f711a454b3ecb' => 
    array (
      0 => '.\\templates\\nav.tpl',
      1 => 1442798667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1022755fe52d3a70633-27201242',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55fe52d3a71d38_37056048',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fe52d3a71d38_37056048')) {function content_55fe52d3a71d38_37056048($_smarty_tpl) {?>
<div class="wrap">
  <div class="header">
        <div class="container">
      <div class="head-nav">
        <span class="menu"> </span>
          <ul class="cl-effect-16">
          
           
            
            <li><a href="index.php"  data-hover="INICIO">INICIO</a></li>
            <li><a href="index.php?action=CABAÑAS"  data-hover="CABAÑAS">CABAÑAS</a></li>
            <li><a href="index.php?action=GALERIA"  data-hover="GALERIA">GALERIA</a></li>
            <li><a href="index.php?action=TARIFAS"  data-hover="PROMOCIONES y TARIFAS">PROMOCIONES y TARIFAS</a></li>
            <li><a href="index.php?action=UBICACION"  data-hover="UBICACION">UBICACION</a></li>

            <div class="clearfix"> </div>
          </ul>
      </div>
            <!-- script-for-nav -->
          <script>
            $( "span.menu" ).click(function() {
              $( ".head-nav ul" ).slideToggle(300, function() {
              // Animation complete.
              });
            });
          </script>
        <!-- script-for-nav -->           
      <div class="header-bottom">
        <div class="head-left">
          <p>0249 <span>154123467</span></p>
        </div>
          <div class="logo">
            <a href="index.php?action=index"><img src="./images/logo.bmp" class="img-responsive" alt="" /></a>
          </div>
          <div class="head-right">
          
        </div>
      <div class="clearfix"> </div>
    </div>  
  </div> 
</div> 


<?php }} ?>