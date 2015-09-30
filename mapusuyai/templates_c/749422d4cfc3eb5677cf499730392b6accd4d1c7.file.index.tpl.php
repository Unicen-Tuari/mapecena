<?php /* Smarty version Smarty-3.1.14, created on 2015-09-30 04:58:56
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15954560826095447b3-90616083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1443567863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15954560826095447b3-90616083',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_560826095a6a81_21613662',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560826095a6a81_21613662')) {function content_560826095a6a81_21613662($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="contenido"></div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('pagina'=>'indexAjax'), 0);?>


<!-- tengo que hacer un tpl nuevo solo con contenido sin header y sin footer-->


<?php }} ?>