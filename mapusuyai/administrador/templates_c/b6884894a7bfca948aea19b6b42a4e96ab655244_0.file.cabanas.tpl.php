<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-20 16:25:14
         compiled from "C:\xampp\htdocs\proyecto2015\Administrador\templates\cabanas.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_56264ecaa6d5c1_39730958',
  'file_dependency' => 
  array (
    'b6884894a7bfca948aea19b6b42a4e96ab655244' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto2015\\Administrador\\templates\\cabanas.tpl',
      1 => 1445351111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false);
if ($_valid && !is_callable('content_56264ecaa6d5c1_39730958')) {
function content_56264ecaa6d5c1_39730958 ($_smarty_tpl) {
?>

<div class="col-md-12">
          
          <div class="list-group text-center"><br>
            <?php
$_from = $_smarty_tpl->tpl_vars['cabanas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_cabana_0_saved_item = isset($_smarty_tpl->tpl_vars['cabana']) ? $_smarty_tpl->tpl_vars['cabana'] : false;
$_smarty_tpl->tpl_vars['cabana'] = new Smarty_Variable();
$__foreach_cabana_0_total = $_smarty_tpl->_count($_from);
if ($__foreach_cabana_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['cabana']->value) {
$__foreach_cabana_0_saved_local_item = $_smarty_tpl->tpl_vars['cabana'];
?>
               
               <h1><br>Categor&iacute;a: <?php echo utf8_encode($_smarty_tpl->tpl_vars['cabana']->value['ID_CATEGORIA']);?>
 Estrellas</h1><br>
                <h2><?php echo utf8_encode($_smarty_tpl->tpl_vars['cabana']->value['NOMBRE']);?>
<br><br></h2> 
                <img src="<?php echo $_smarty_tpl->tpl_vars['cabana']->value['URL_IMG'];?>
"  class="img-thumbnail " Style="box-shadow: 10px 10px 5px #888888;" />
                <!--
                <h2><br>Capacidad: <?php echo utf8_encode($_smarty_tpl->tpl_vars['cabana']->value['CAPACIDAD']);?>
<br><br></h2> 
                -->
                
                <!-- <?php
$_from = $_smarty_tpl->tpl_vars['cabana']->value['imagenes'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_imagen_1_saved_item = isset($_smarty_tpl->tpl_vars['imagen']) ? $_smarty_tpl->tpl_vars['imagen'] : false;
$_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable();
$__foreach_imagen_1_total = $_smarty_tpl->_count($_from);
if ($__foreach_imagen_1_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
$__foreach_imagen_1_saved_local_item = $_smarty_tpl->tpl_vars['imagen'];
?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['ruta'];?>
" alt="imagen-<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_imagen'];?>
-cabana-<?php echo $_smarty_tpl->tpl_vars['cabana']->value['id_cabana'];?>
" class="img-thumbnail" />
                <?php
$_smarty_tpl->tpl_vars['imagen'] = $__foreach_imagen_1_saved_local_item;
}
}
if ($__foreach_imagen_1_saved_item) {
$_smarty_tpl->tpl_vars['imagen'] = $__foreach_imagen_1_saved_item;
}
?> -->
                
            
            <?php
$_smarty_tpl->tpl_vars['cabana'] = $__foreach_cabana_0_saved_local_item;
}
}
if ($__foreach_cabana_0_saved_item) {
$_smarty_tpl->tpl_vars['cabana'] = $__foreach_cabana_0_saved_item;
}
?> 
          </div>
</div>

<!--DEJO LISTO PARA USAR CON MULTIPLES IMAGENES--><?php }
}
