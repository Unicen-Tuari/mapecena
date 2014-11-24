
{if $cantidad gt 0}	

{foreach key=id_evento item=evento from=$eventos}
<div class="maq">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <img class="img-responsive foto img-rounded" src="{$evento['Ruta']}" />
                    
                    <a href="index.php?action=galeriaId&amp;id={$evento['id_Contenido']}" class="fa fa-camera-retro fa-4x iconos"></a>
                </div>
                <div class="col-md-1"></div>
            </div>
            
            <h3 class="style">{utf8_encode($evento['Nombre'])}</h3>
            <p class="para top">{utf8_encode($evento['Texto'])}</p>
            <strong><h4>Fecha: {$evento['Fecha']}</h4>
            <h4>Ubicación: {utf8_encode($evento['Ubicacion'])}</h4></strong>

        </div>
        <div class="col-md-3"></div>
    </div>
</div>


{/foreach}

{else}
<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6"><h2 class="style">No se encontraron resultados para su búsqueda</h2></div>
  <div class="col-md-3"></div>
</div>
<br>				
{/if}
