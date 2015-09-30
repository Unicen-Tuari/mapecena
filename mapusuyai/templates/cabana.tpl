<div class="fondo">
    <div class="container">        
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                       <div class="row">
                            <div class="box">
                                <div class="col-lg-12">
                                    <hr>
                                    <h2 class="intro-text text-center"><strong>Cabañas</strong></h2>
                                    <hr>
                                </div>
                                {foreach key=cabana item=cabana from=$cabanas}
                                <div class="col-lg-12 text-center">                    
                                    <img class="img-responsive img-border img-full" src="{$cabana['URL_IMG']}" alt="">
                                    <h2>{$cabana['NOMBRE']}
                                        <br>
                                        <small><h4>Capacidad: {utf8_encode($cabana['CAPACIDAD'])}</h4></small>
                                        <small><h4>Precio: {$cabana['PRECIO']}</h4></small>
                                    </h2>
                                    <p>{utf8_encode($cabana['DETALLE'])}</p>
                                

                                    <hr>
                                </div>
                                {/foreach}
                                
                                <div class="col-lg-12 text-center">
                                    <ul class="pager">
                                        <li class="previous"><a href="#">&larr; Anterior</a>
                                        </li>
                                        <li class="next"><a href="#">Siguiente &rarr;</a>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
