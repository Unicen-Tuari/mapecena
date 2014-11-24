
   <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 500px; height: 400px; ">

                <!-- Slides Container -->
                <div u="slides" style="cursor:pointer; position: absolute; left: 0px; top: 0px; width: 500px; height: 400px; overflow: hidden;">
                    {foreach key=id_galeria item=galeriaI from=$galeriaImg}
                        <div>
                            <img class="img-responsive" u="image" src="{$galeriaI['Ruta']}" />    
                        </div>
                    {/foreach}
                </div>
                
                <span u="arrowleft" class="jssora03l" style="width: 55px; height: 55px; top: 175px; left: -75px;">
                </span>
                
                <span u="arrowright" class="jssora03r" style="width: 55px; height: 55px; top: 175px; right: -75px;">
                </span>
                
            </div>
        </div>

        <div class="col-md-3"></div>
    </div>