{include file = "header.tpl" title = foo}



<div class="main_bg">
<div class="wrap">
<div class="wrapper">
<div class="main">
<div class="container">        

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="style intro-text text-center"><strong>Nueva Máquina</strong></h2>
                    <hr>
                        
                    <form role="form" action="index.php?action=insertarMaq" method="POST"> 
                        <div class="row">
                            
                            <div class="form-group col-lg-12">
                                <label>Nombre:</label>
                                <input name="nombre" type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label> Tipo: </label>
                                <input name="tipo" type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Modelo: </label>
                                <input name="modelo" type="number" class="form-control" min="1900" max="3000" value="2014">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Estado</label>
                                <select enabled name="estado"  required >
                                    <option value="NUEVA"> NUEVA </option>
                                    <option value="USADA"> USADA </option>
                                </select><br>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Ruta 1: </label>
                                <input name="ruta" type="text" class="form-control" rows="6">
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
                                <label> Precio U$S: </label>
                                <input name="precio" type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Detalle: </label>
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

{include file = "footer.tpl"}