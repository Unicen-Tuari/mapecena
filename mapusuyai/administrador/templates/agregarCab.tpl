{include file="header.tpl" title=foo}
{include file="nav.tpl" }


<div class="fondo">
  
<div class="container">        

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Nueva Cabaña</strong></h2>
                    <hr>
                        <!-- $NOMBRE,$ID_CATEGORIA,$CAPACIDAD,
                        $URL_IMG,$PRECIO,$DETALLE -->
                    <form role="form" action="index.php?action=insertarCab" method="POST"> <!-- enctype="multipart/form-data" -->
                        <div class="row">
                            
                            <div class="form-group col-lg-12">
                                <label>Nombre de la Cabaña:</label>
                                <input name="NOMBRE" type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label> Categoria: </label>
                                <input name="ID_CATEGORIA" type="number" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Capacidad: </label>
                                <input name="CAPACIDAD" type="number" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label> Precio: </label>
                                <input name="PRECIO" type="number" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Ruta Imagen: </label>
                                <input name="URL_IMG" type="text" class="form-control" rows="6">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Descripci&oacute;n: </label>
                                <textarea rows="6" cols="60" name="DETALLE" type="text" class="form-control" rows="6"></textarea>
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
</div>

{include file = "footer.tpl"}