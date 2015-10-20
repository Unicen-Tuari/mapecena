<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-20 16:23:55
         compiled from "C:\xampp\htdocs\proyecto2015\Administrador\templates\admin.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_56264e7b6afc29_84067634',
  'file_dependency' => 
  array (
    '3b9fef59e830699d0dbde465cb64b454da033bb7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto2015\\Administrador\\templates\\admin.tpl',
      1 => 1445351032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:cabanas.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false);
if ($_valid && !is_callable('content_56264e7b6afc29_84067634')) {
function content_56264e7b6afc29_84067634 ($_smarty_tpl) {
$_smarty_tpl->setupSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false)->render();
?>

<?php $_smarty_tpl->setupSubTemplate('file:nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false)->render();
?>

<div class="fondo">
<div class="row">
<div class="box">
<div class="top-banner"></div>	

    <div class="container">

      <div class="page-header text-center">
        <h1>Listado de Caba&ntilde;as</h1>
      </div>

      <div class="row" id="noticias">
        <?php $_smarty_tpl->setupSubTemplate('file:cabanas.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false)->render();
?>

        
      </div>
   
      <div class="row">
        <div class="col-md-12">
          <form id="miform" action="admin.php?action=agregar_cabana" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="">Categor&iacute;a: </label>

              <select name="id_categoria">
                <?php
$_from = $_smarty_tpl->tpl_vars['categorias']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_categoria_0_saved_item = isset($_smarty_tpl->tpl_vars['categoria']) ? $_smarty_tpl->tpl_vars['categoria'] : false;
$_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable();
$__foreach_categoria_0_total = $_smarty_tpl->_count($_from);
if ($__foreach_categoria_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$__foreach_categoria_0_saved_local_item = $_smarty_tpl->tpl_vars['categoria'];
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</option>
                <?php
$_smarty_tpl->tpl_vars['categoria'] = $__foreach_categoria_0_saved_local_item;
}
}
if ($__foreach_categoria_0_saved_item) {
$_smarty_tpl->tpl_vars['categoria'] = $__foreach_categoria_0_saved_item;
}
?>
              </select>
            </div>
            <div class="form-group">
              <label for="task">Nombre de la Caba&ntilde;a</label>
              <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Para x personas" required>
            </div>
            <div class="form-group col-lg-12">
                <label>Capacidad: </label>
                <input name="capacidad" type="number" min="1" max="5" class="form-control" id="capacidad" placeholder="1" required>
            </div>
            <div class="form-group col-lg-12">
                <label>Precio: </label>
                <input name="precio" type="number" id="precio" min="1000" max="100000" class="form-control" placeholder="1000" required>
            </div>
            <div class="form-group">
               <label>Descripci&oacute;n: </label>
              <input type="text" class="form-control" id="contenido" name="contenido" placeholder="Contenido">
            </div>
            <div class="form-group id="imagenes" ">
              <label for="imagesToUpload">Im&aacute;gen</label>
              <input type="file" name="imagesToUpload[]" id="imagesToUpload" required/>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Agregar</button>
          </form>
        </div>
      </div>
    </div>
</div>
</div>
</div>
</div>

                           
<?php $_smarty_tpl->setupSubTemplate('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false)->render();
?>

    



<?php }
}
