<?php /* Smarty version Smarty-3.1.14, created on 2015-09-27 07:15:22
         compiled from ".\templates\galeria.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5326560157214fc9a2-07945137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3468a005189d737e5dabe3f8cdddcada5dd5bc41' => 
    array (
      0 => '.\\templates\\galeria.tpl',
      1 => 1443330919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5326560157214fc9a2-07945137',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5601572157fb76_89938879',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5601572157fb76_89938879')) {function content_5601572157fb76_89938879($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('index'=>1), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="galeria">
    <div class="container">
<div id="slideshow">
    <div>
        <img src="./images/img6.jpg"  >
    </div>
    <div>
        <img src="./images/img7.jpg"  >
    </div>
    <div>
        <img src="./images/img8.jpg" >
    </div>
    <div>
        <img src="./images/img9.jpg"  >
    </div>
    <div>
        <img src="./images/img10.jpg"  >
    </div>
    <div>
        <img src="./images/img11.jpg" >
    </div>
    <div>
        <img src="./images/img12.jpg" >
    </div>
</div>
</div>
</div>




<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>