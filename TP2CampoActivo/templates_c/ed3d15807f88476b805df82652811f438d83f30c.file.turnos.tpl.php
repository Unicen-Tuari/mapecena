<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 20:03:23
         compiled from ".\templates\turnos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22697547623fb972236-83182189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed3d15807f88476b805df82652811f438d83f30c' => 
    array (
      0 => '.\\templates\\turnos.tpl',
      1 => 1416996620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22697547623fb972236-83182189',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547623fb9b18c2_62842286',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547623fb9b18c2_62842286')) {function content_547623fb9b18c2_62842286($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="main_bg">
	<div class="wrap">
		<div class="wrapper">
			<div class="main">
				<h2 class="style">Turnos</h2>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-3"></div>
		<div class="col-md-6">
			<iframe src="https://www.google.com/calendar/embed?src=8m6vh3ie9e8oqoa5fb0pc4rtas%40group.calendar.google.com&ctz=America/Argentina/Buenos_Aires" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
		</div>
	<div class="col-md-3"></div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>