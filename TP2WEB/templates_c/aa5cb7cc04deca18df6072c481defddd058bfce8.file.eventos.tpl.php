<?php /* Smarty version Smarty-3.1.14, created on 2014-11-25 01:43:53
         compiled from ".\templates\eventos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2647154725f85d5c730-49720779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa5cb7cc04deca18df6072c481defddd058bfce8' => 
    array (
      0 => '.\\templates\\eventos.tpl',
      1 => 1416876210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2647154725f85d5c730-49720779',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54725f85dfb1b0_71008303',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54725f85dfb1b0_71008303')) {function content_54725f85dfb1b0_71008303($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</div>
</div>

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