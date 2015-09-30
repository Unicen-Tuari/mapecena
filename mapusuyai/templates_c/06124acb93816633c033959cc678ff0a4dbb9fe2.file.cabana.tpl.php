<?php /* Smarty version Smarty-3.1.14, created on 2015-09-30 00:02:34
         compiled from ".\templates\cabana.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29686560b0a3198f1d4-85495098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06124acb93816633c033959cc678ff0a4dbb9fe2' => 
    array (
      0 => '.\\templates\\cabana.tpl',
      1 => 1443564137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29686560b0a3198f1d4-85495098',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_560b0a31a2fa01_07398232',
  'variables' => 
  array (
    'cabanas' => 0,
    'cabana' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560b0a31a2fa01_07398232')) {function content_560b0a31a2fa01_07398232($_smarty_tpl) {?><div class="fondo">
    <div class="container">        
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                       <div class="row">
                            <div class="box">
                                <div class="col-lg-12">
                                    <hr>
                                    <h2 class="intro-text text-center"><strong>Cabañas</strong></h2>
                                    <hr>
                                </div>
                                <?php  $_smarty_tpl->tpl_vars['cabana'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cabana']->_loop = false;
 $_smarty_tpl->tpl_vars['cabana'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cabanas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cabana']->key => $_smarty_tpl->tpl_vars['cabana']->value){
$_smarty_tpl->tpl_vars['cabana']->_loop = true;
 $_smarty_tpl->tpl_vars['cabana']->value = $_smarty_tpl->tpl_vars['cabana']->key;
?>
                                <div class="col-lg-12 text-center">                    
                                    <img class="img-responsive img-border img-full" src="<?php echo $_smarty_tpl->tpl_vars['cabana']->value['URL_IMG'];?>
" alt="">
                                    <h2><?php echo $_smarty_tpl->tpl_vars['cabana']->value['NOMBRE'];?>

                                        <br>
                                        <small><h4>Capacidad: <?php echo utf8_encode($_smarty_tpl->tpl_vars['cabana']->value['CAPACIDAD']);?>
</h4></small>
                                        <small><h4>Precio: <?php echo $_smarty_tpl->tpl_vars['cabana']->value['PRECIO'];?>
</h4></small>
                                    </h2>
                                    <p><?php echo utf8_encode($_smarty_tpl->tpl_vars['cabana']->value['DETALLE']);?>
</p>
                                

                                    <hr>
                                </div>
                                <?php } ?>
                                
                                <div class="col-lg-12 text-center">
                                    <ul class="pager">
                                        <li class="previous"><a href="#">&larr; Anterior</a>
                                        </li>
                                        <li class="next"><a href="#">Siguiente &rarr;</a>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>












<?php }} ?>