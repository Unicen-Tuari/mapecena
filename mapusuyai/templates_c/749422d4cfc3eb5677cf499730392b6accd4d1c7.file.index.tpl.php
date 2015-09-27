<?php /* Smarty version Smarty-3.1.14, created on 2015-09-27 09:11:55
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1271655fe400b33d074-15417572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1443337911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1271655fe400b33d074-15417572',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55fe400b37e396_09120861',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fe400b37e396_09120861')) {function content_55fe400b37e396_09120861($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('index'=>1), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




<div class="banner">
    <div class="container">
    <div class="wmuSlider example1 section" id="section-1">
         <article style="position: absolute; width: 100%; opacity: 0;"> 
              <div class="banner-info">

<div class="row">
  
  <div class="col-md-4">
  <h2 id="presentacion" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae euismod ex. Quisque lobortis vulputate ante non auctor. </h2></div>
  <div class="col-md-4"></div>
  <div class="col-md-4"></div>

</div>
</article>
            <!-- <h1>Titulo 1 </h1>
            <a href="#" class="meet wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">Entrar</a>
          </div> -->
          
        

        <!--  <article style="position: absolute; width: 100%; opacity: 0;"> 
              <div class="banner-info">
            <h1>Titulo 2 </h1>
            <a href="#" class="meet wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">Acceder</a>
          </div>
        </article>
         <article style="position: absolute; width: 100%; opacity: 0;"> 
              <div class="banner-info">
            <h1>Titulo 3</h1>
            <a href="#" class="meet wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">Ir</a>
          </div>
        </article> -->
       <!--  <ul class="wmuSliderPagination">
                  <li><a href="#" class="">00000000000</a></li>
                  <li><a href="#" class="">11111111</a></li>
                  <li><a href="#" class="">222222222</a></li>
                </ul> -->
      </div>    
     
          <script src="js/jquery.wmuSlider.js"></script> 
      <script>
            $('.example1').wmuSlider();         
          </script>
         
  </div>
  </div>



<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>