<?php /* Smarty version Smarty-3.1.14, created on 2015-09-30 21:16:37
         compiled from ".\templates\agregarCab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9829560a1ff7911488-42471965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f83478f6afe5f1c90bfbe35193505281bc10d9a' => 
    array (
      0 => '.\\templates\\agregarCab.tpl',
      1 => 1443586415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9829560a1ff7911488-42471965',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_560a1ff7a761f2_29958905',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560a1ff7a761f2_29958905')) {function content_560a1ff7a761f2_29958905($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<div class="fondo">
  
<div class="container">        

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Nueva Cabaña</strong></h2>
                    <hr>
                       
                    <form id="miform" role="form" action="index.php?action=insertarCab" method="POST"> 
                        <div class="row">
                            
                            <div class="form-group col-lg-12">
                                <label>Nombre de la Cabaña:</label>
                                <input name="NOMBRE" type="text" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label> Categoria: </label>
                                <input name="ID_CATEGORIA" type="number" min="1" max="5" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Capacidad: </label>
                                <input name="CAPACIDAD" type="number" min="1" max="5" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label> Precio: </label>
                                <input name="PRECIO" type="number" min="1000" max="100000"class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Imagen: </label>
                                <input id="input-imagen" name="URL_IMG" type="file" accept="image/*" class="form-control" rows="6"required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Descripci&oacute;n: </label>
                                <textarea rows="6" cols="60" name="DETALLE" type="text" class="form-control" rows="6" required></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button id="btn-enviar" type="submit" class="btn btn-default">Agregar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>