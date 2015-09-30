<div class="fondo">
    <div class="container">        
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                       <div class="row">

                            <div class="box"  style="text-align: center">
                                <div class="col-lg-12">
                                    <hr>
                                    <h2 class="intro-text text-center"><strong>Cabañas</strong></h2>
                                    <hr>
                                </div>

                                
                            <!--{foreach key=id_cabana item=cabana from=$cabanas}
                                
                                <div class="col-lg-12 text-center">   
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">                  
                                        <img class="img-responsive img-border img-full" src="{$cabana['URL_IMG']}" alt="">
                                        </div>
                                    <div class="col-md-3"></div>
                                </div>
                                    <h2>{utf8_encode($cabana['NOMBRE'])}
                                        <br>
                                        <small><h5>Capacidad: {$cabana['CAPACIDAD']}</h5></small>
                                        <small><h5>Precio: {$cabana['PRECIO']}</h5></small>
                                        <small><h5>Categoria: {utf8_encode($cabana['CATEGORIA'])}</h5></small>
                                    </h2>
                                    <p>{utf8_encode($cabana['DETALLE'])}</p>
                                

                                    <hr>
                                </div>
                                {/foreach}
                                 -->

 


                                <!-- Lista de cabañas-->

                                {foreach from=$cabanas key=id_cabana item=cabana}
                                <ul style="list-style-type:none">
                                  {foreach from=$cabana key=clave item=valor}
                                    {if $clave eq 'URL_IMG'}
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-6">
                                                <li style="text-align: center" class="img-responsive img-border img-full"><img class="img-responsive img-border img-full" src="{$cabana['URL_IMG']}" alt=""></li>
                                            </div>
                                            <div class="col-md-3"></div>
                                        </div>
                                    {elseif $clave eq 'DETALLE' }
                                        <p><li >{utf8_encode($clave)}: {utf8_encode($valor)}</li><p><hr>
                                    {elseif ($clave eq 'ID_CABANA') or ($clave eq 'ID_CATEGORIA') }<li></li>
                                    {elseif ($clave eq 'NOMBRE') }
                                    <H2><li>{utf8_encode($valor)}</li></H2>
                                    {else}
                                        <small><h5><li >{utf8_encode($clave)}: {utf8_encode($valor)}</li></small></h5>
                                    {/if}

                                  {/foreach}
                                </ul>
                                <hr>
                                <br>
                                {/foreach}

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


