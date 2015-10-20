
<div class="col-md-12">
          <!-- <label class="control-label" for="nombre">Novedad</label> -->
          <div class="list-group text-center"><br>
            {foreach $cabanas as $cabana}
               
               <h1><br>Categor&iacute;a: {utf8_encode($cabana['ID_CATEGORIA'])} Estrellas</h1><br>
                <h2>{utf8_encode($cabana['NOMBRE'])}<br><br></h2> 
                <img src="{$cabana['URL_IMG']}"  class="img-thumbnail " Style="box-shadow: 10px 10px 5px #888888;" />
                <!--<h2><br>Capacidad: {utf8_encode($cabana['CAPACIDAD'])}<br><br></h2> 
                
                {$cabana['ID']}<br>
                {$cabana['NOMBRE']}<br>

                {$cabana['ID_CATEGORIA']}<br>
                {$cabana['PRECIO']}<br>
                {$cabana['DETALLE']}<br>
                {$cabana['URL_IMG']}<br> -->
                
                <!-- {foreach $cabana['imagenes'] as $imagen}
                <img src="{$imagen['ruta']}" alt="imagen-{$imagen['id_imagen']}-cabana-{$cabana['id_cabana']}" class="img-thumbnail" />
                {/foreach} -->
                
            
            {/foreach} 
          </div>
</div>

<!--DEJO LISTO PARA USAR CON MULTIPLES IMAGENES-->