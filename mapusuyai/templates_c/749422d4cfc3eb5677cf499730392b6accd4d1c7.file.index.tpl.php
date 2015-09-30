<?php /* Smarty version Smarty-3.1.14, created on 2015-09-30 22:56:17
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23148560c4c711d1416-06379530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1443643298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23148560c4c711d1416-06379530',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_560c4c71d92ba3_78706393',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560c4c71d92ba3_78706393')) {function content_560c4c71d92ba3_78706393($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="contenido"></div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('pagina'=>'indexAjax'), 0);?>




<?php }} ?>