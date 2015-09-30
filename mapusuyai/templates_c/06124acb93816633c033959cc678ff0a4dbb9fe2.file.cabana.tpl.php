<?php /* Smarty version Smarty-3.1.14, created on 2015-09-30 10:40:04
         compiled from ".\templates\cabana.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29686560b0a3198f1d4-85495098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06124acb93816633c033959cc678ff0a4dbb9fe2' => 
    array (
      0 => '.\\templates\\cabana.tpl',
      1 => 1443602094,
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
    'clave' => 0,
    'valor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560b0a31a2fa01_07398232')) {function content_560b0a31a2fa01_07398232($_smarty_tpl) {?><div class="fondo">
    <div class="container">        
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                       <div class="row">

                            <div class="box"  style="text-align: center">
                                <div class="col-lg-12">
                                    <hr>
                                    <h2 class="intro-text text-center"><strong>Cabañas</strong></h2>
                                    <hr>
                                </div>

                                
                            <!--<?php  $_smarty_tpl->tpl_vars['cabana'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cabana']->_loop = false;
 $_smarty_tpl->tpl_vars['id_cabana'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cabanas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cabana']->key => $_smarty_tpl->tpl_vars['cabana']->value){
$_smarty_tpl->tpl_vars['cabana']->_loop = true;
 $_smarty_tpl->tpl_vars['id_cabana']->value = $_smarty_tpl->tpl_vars['cabana']->key;
?>
                                
                                <div class="col-lg-12 text-center">   
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">                  
                                        <img class="img-responsive img-border img-full" src="<?php echo $_smarty_tpl->tpl_vars['cabana']->value['URL_IMG'];?>
" alt="">
                                        </div>
                                    <div class="col-md-3"></div>
                                </div>
                                    <h2><?php echo utf8_encode($_smarty_tpl->tpl_vars['cabana']->value['NOMBRE']);?>

                                        <br>
                                        <small><h5>Capacidad: <?php echo $_smarty_tpl->tpl_vars['cabana']->value['CAPACIDAD'];?>
</h5></small>
                                        <small><h5>Precio: <?php echo $_smarty_tpl->tpl_vars['cabana']->value['PRECIO'];?>
</h5></small>
                                        <small><h5>Categoria: <?php echo utf8_encode($_smarty_tpl->tpl_vars['cabana']->value['CATEGORIA']);?>
</h5></small>
                                    </h2>
                                    <p><?php echo utf8_encode($_smarty_tpl->tpl_vars['cabana']->value['DETALLE']);?>
</p>
                                

                                    <hr>
                                </div>
                                <?php } ?>
                                 -->

 


                                <!-- Lista de cabañas-->

                                <?php  $_smarty_tpl->tpl_vars['cabana'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cabana']->_loop = false;
 $_smarty_tpl->tpl_vars['id_cabana'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cabanas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cabana']->key => $_smarty_tpl->tpl_vars['cabana']->value){
$_smarty_tpl->tpl_vars['cabana']->_loop = true;
 $_smarty_tpl->tpl_vars['id_cabana']->value = $_smarty_tpl->tpl_vars['cabana']->key;
?>
                                <ul style="list-style-type:none">
                                  <?php  $_smarty_tpl->tpl_vars['valor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['valor']->_loop = false;
 $_smarty_tpl->tpl_vars['clave'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cabana']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['valor']->key => $_smarty_tpl->tpl_vars['valor']->value){
$_smarty_tpl->tpl_vars['valor']->_loop = true;
 $_smarty_tpl->tpl_vars['clave']->value = $_smarty_tpl->tpl_vars['valor']->key;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['clave']->value=='URL_IMG'){?>
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-6">
                                                <li style="text-align: center" class="img-responsive img-border img-full"><img class="img-responsive img-border img-full" src="<?php echo $_smarty_tpl->tpl_vars['cabana']->value['URL_IMG'];?>
" alt=""></li>
                                            </div>
                                            <div class="col-md-3"></div>
                                        </div>
                                    <?php }elseif($_smarty_tpl->tpl_vars['clave']->value=='DETALLE'){?>
                                        <p><li ><?php echo utf8_encode($_smarty_tpl->tpl_vars['clave']->value);?>
: <?php echo utf8_encode($_smarty_tpl->tpl_vars['valor']->value);?>
</li><p><hr>
                                    <?php }elseif(($_smarty_tpl->tpl_vars['clave']->value=='ID_CABANA')||($_smarty_tpl->tpl_vars['clave']->value=='ID_CATEGORIA')){?><li></li>
                                    <?php }elseif(($_smarty_tpl->tpl_vars['clave']->value=='NOMBRE')){?>
                                    <H2><li><?php echo utf8_encode($_smarty_tpl->tpl_vars['valor']->value);?>
</li></H2>
                                    <?php }else{ ?>
                                        <small><h5><li ><?php echo utf8_encode($_smarty_tpl->tpl_vars['clave']->value);?>
: <?php echo utf8_encode($_smarty_tpl->tpl_vars['valor']->value);?>
</li></small></h5>
                                    <?php }?>

                                  <?php } ?>
                                </ul>
                                <hr>
                                <br>
                                <?php } ?>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<?php }} ?>