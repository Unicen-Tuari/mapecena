<?php /* Smarty version Smarty-3.1.14, created on 2015-09-29 00:30:44
         compiled from ".\templates\agregarE.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2064954725621381092-64746160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '599f4bf56adb4dc82f786a73e910330fa1c40145' => 
    array (
      0 => '.\\templates\\agregarE.tpl',
      1 => 1416891391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2064954725621381092-64746160',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5472562143a517_53146179',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5472562143a517_53146179')) {function content_5472562143a517_53146179($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div class="container">        

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Nuevo Evento</strong></h2>
                    <hr>
                        
                    <form role="form" action="index.php?action=insertarEvento" method="POST">
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label>Nombre del Evento:</label>
                                <input name="nombre" type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label> Fecha (AAAA-MM-DD): </label>
                                <input name="fecha" type="datetime" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Ubicaci&oacute;n: </label>
                                <input name="ubicacion" type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Seleccione im&aacute;genes: </label>
                                <input name="ruta" type="text" class="form-control" rows="6">

                                <!-- <div id="archivos">
                                <ul></ul>
                                </div> -->

                                <script>
                                var insertar_en = document.querySelector("#archivos ul");
                                file_in = document.querySelector("#files")
                                file_in.onchange = function(e){
                                    var files = e.target.files;
                                    for(var i=0,f;f= files[i];++i){
                                        var archivo = document.createElement("li");
                                        archivo.innerHTML = f.name + " - (<b>" + f.type + "</b>) ->" + f.size;
                                        insertar_en.appendChild(archivo);
                                    }
                                }
                                </script>

                                <!-- <form action="demo_form.asp">
                                  Select images: <input type="file" name="ruta" multiple>
                                  <input type="submit">
                                </form> -->
                                <!-- <input name="ruta" type="text" class="form-control" rows="6"></input> -->
                                <!-- <label>Ruta 2: </label>
                                <input name="ruta" type="text" class="form-control" rows="6"></input>
                                <label>Ruta 3:</label>
                                <input name="ruta" type="text" class="form-control" rows="6"></input>
                                <label>Ruta 4: </label>
                                <input name="ruta" type="text" class="form-control" rows="6"></input>
                                <label>Ruta 5: </label>
                                <input name="ruta" type="text" class="form-control" rows="6"></input>
                                <label>Ruta 6: </label>
                                <input name="ruta" type="text" class="form-control" rows="6"></input>
                                <label>Ruta 7: </label>
                                <input name="ruta" type="text" class="form-control" rows="6"></input>
                                <label>Ruta 8: </label>
                                <input name="ruta" type="text" class="form-control" rows="6"></input> -->
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Descripci&oacute;n: </label>
                                <textarea rows="6" cols="60" name="texto" type="text" class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Agregar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>