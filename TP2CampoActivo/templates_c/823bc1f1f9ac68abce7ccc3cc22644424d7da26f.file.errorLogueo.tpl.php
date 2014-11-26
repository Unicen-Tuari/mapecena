<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 20:08:07
         compiled from ".\templates\errorLogueo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23072547625170fc141-96336969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '823bc1f1f9ac68abce7ccc3cc22644424d7da26f' => 
    array (
      0 => '.\\templates\\errorLogueo.tpl',
      1 => 1416996623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23072547625170fc141-96336969',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54762517135f63_81725980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54762517135f63_81725980')) {function content_54762517135f63_81725980($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="main_bg">
<div class="wrap">
<div class="wrapper">
    <div class="main">
        <div class="row">
            <div class="box" style="text-align: center"><br><br><br><br><br>
                <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-4"><h2 class="style">Error al intentar loguearse.<br>Vuelva a intentarlo</h2></div>
                  <div class="col-md-4"></div>
                </div>
                <br><br><br><br><br>
            </div>
        </div>        
    </div>
</div>
</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>