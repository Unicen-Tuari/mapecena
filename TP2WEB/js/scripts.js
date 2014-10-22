	echo ('<h1>hola script</H1>');
		echo ('<h2>hola script</H2>');
			echo ('<h3>hola script</H3>');
				echo ('<h4>hola script</H4>');
					echo ('<h5>hola script</H5>');
						echo ('<h6>hola script</H6>');
						
	jQuery(document).ready(function ($) {
            var options = {
                $DragOrientation: 3,               //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $ArrowNavigatorOptions: {          //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$, //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,              //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 0,                //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                      //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
        });


    // jQuery(document).ready(function ($) {
    //         var options = {
    //             $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
    //             $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
    //                 $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
    //                 $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
    //                 $AutoCenter: 0,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
    //                 $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
    //             }
    //         };

    //         var jssor_slider1 = new $JssorSlider$("slider1_container", options);
    //     });