<?php /* Smarty version Smarty-3.1.14, created on 2015-09-30 10:34:59
         compiled from ".\templates\porcategoria.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18676560b972a69fad3-28900496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfaf0a36a258c79dcbb64a3258cd4d4216cfc651' => 
    array (
      0 => '.\\templates\\porcategoria.tpl',
      1 => 1443602026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18676560b972a69fad3-28900496',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_560b972a7e7c34_89959470',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
    'cabanas' => 0,
    'cabana' => 0,
    'clave' => 0,
    'valor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560b972a7e7c34_89959470')) {function content_560b972a7e7c34_89959470($_smarty_tpl) {?><div class="fondo">
    <div class="container">        
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                       <div class="row">

                            <div class="btn-group" >
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categorías <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" >
                                    <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_smarty_tpl->tpl_vars['id_categ'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
 $_smarty_tpl->tpl_vars['id_categ']->value = $_smarty_tpl->tpl_vars['categoria']->key;
?>
                                        <li>
                                        <a href="index.php?action=CATEGORIA&amp;idCat=<?php echo utf8_encode($_smarty_tpl->tpl_vars['categoria']->value['ID_CATEGORIA']);?>
"><?php echo utf8_encode($_smarty_tpl->tpl_vars['categoria']->value['NOMBRE']);?>
</a></li>
                                        
                                    <?php } ?>
                                </ul>
                            </div>

                            <div class="box"  style="text-align: center">
                                <div class="col-lg-12">
                                    <hr>
                                    <h2 class="intro-text text-center"><strong>Cabañas</strong></h2>
                                    <hr>
                                </div>

                                
                               <!--  <?php  $_smarty_tpl->tpl_vars['cabana'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cabana']->_loop = false;
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
                                                <h2><?php echo utf8_encode($_smarty_tpl->tpl_vars['cabana']->value['NOMBRE']);?>

                                            </div>
                                            <div class="col-md-3"></div>
                                        </div>
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
                                <?php } ?> -->
                                
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
                                                <li class="img-responsive img-border img-full"><img class="img-responsive img-border img-full" src="<?php echo $_smarty_tpl->tpl_vars['cabana']->value['URL_IMG'];?>
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
</li><small><h5>
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