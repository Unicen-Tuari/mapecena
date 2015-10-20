{include file="header.tpl" title=foo}
{include file="nav.tpl" title=foo}
<div class="fondo">
<div class="row">
<div class="box">
<div class="top-banner"></div>	

    <div class="container">

      <div class="page-header text-center">
        <h1>Listado</h1>
      </div><br>

      <div class="row" id="noticias">
        {include file="cabanas.tpl" }
        
      </div>
   
      <div class="row">
        <div class="col-md-12">
          <form id="miform" action="admin.php?action=agregar_cabana" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="">Categor&iacute;a: </label>

              <select name="id_categoria">
                {foreach $categorias as $categoria}
                <option value="{$categoria['id_categoria']}">{$categoria['nombre']}</option>
                {/foreach}
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
              <input type="file" name="imagesToUpload[]" id="imagesToUpload" />
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

                           
{include file="footer.tpl"}
    



