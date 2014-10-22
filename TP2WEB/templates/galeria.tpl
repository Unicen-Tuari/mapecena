{include file="header.tpl"}
</div>
</div>
</div>

    <script type="text/javascript" src="./js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="./js/jssor.js"></script>
    <script type="text/javascript" src="./js/jssor.slider.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            var options = {
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 0,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
        });
    </script>
   

<div class="main_bg">
<div class="wrap">
<div class="wrapper">
<div class="main">
            <h2 class="style ">Galería</h2>

<div class="container">
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
</div>

</div>
</div>
</div>
</div>

{include file="footer.tpl"}