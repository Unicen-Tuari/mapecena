<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 15:01:57
         compiled from ".\templates\eventos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192985475dd556b5aa3-32119454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa5cb7cc04deca18df6072c481defddd058bfce8' => 
    array (
      0 => '.\\templates\\eventos.tpl',
      1 => 1416996622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192985475dd556b5aa3-32119454',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5475dd5570e403_12868911',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5475dd5570e403_12868911')) {function content_5475dd5570e403_12868911($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<div class="main_bg">
    <div class="wrap">
        <div class="wrapper">
            <div class="main">
                <h2 class="style">Eventos</h2>
            </div>
        </div>
    </div>
</div>

<!-- BUSQUEDA -->
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form class = "busqueda" id="formBusquedaE" method="POST">
            <br>
            <input type="text" name="inputBuscarE" placeholder = 'Buscar...'>
            <button class = "btn btn-default" type = "submit" >
                <i class="fa fa-search"></i>              
            </button>
        </form>
    </div>
</div>

<div id="resEventos">
    <?php echo $_smarty_tpl->getSubTemplate ("soloevento.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>