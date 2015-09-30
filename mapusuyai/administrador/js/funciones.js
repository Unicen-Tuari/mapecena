// You can also use "$(window).load(function() {"
$(function () {

      $("#btn-enviar").on("click", function(event){
        event.preventDefault();

        var archivos = $("#input-imagen").prop('files');

        if(typeof(archivos) == 'undefined'){
          mostrarMensaje("No pusiste imagenes");
          return;
        }

        var datos = new FormData();

        $.each(archivos, function(key,value){
          datos.append(key,value);
        });

        var inputs = $("#miform").serializeArray();

        $.each(inputs, function(i, objeto){
          datos.append(objeto.name,objeto.value);
        });

        $.ajax({
          type: "POST",
          dataType: "html",
          url: $("#miform").attr("action"),
          data: datos,
          success: function(data){
            // console.log(data);
            // alert(data);
            window.location.href = "index.php?action=finCarga";

          },
          error: function(data){
            window.location.href = "index.php?action=errorCarga";
          },
          contentType : false,
          processData : false
        });

      });

	$("#bs-example-navbar-collapse-1 ul li").unbind();//para evitar multiples triggers
	$("#bs-example-navbar-collapse-1 ul li").click(function(e){
		//selecciono todos los li del menu que no son dropdown

		$(".nav.navbar-nav.navbar-right li").removeClass("active");
		$(this).addClass("active");

		//localizamos cada elemento del menu
		e.preventDefault();//anula el click asi no navega
		var contenido=$(this).children("a").attr("id");	//obtenemos el id

		//cargamos contenido del id deseado
		
		var attr=$(this).attr("id-categoria");
		if (typeof attr !== typeof undefined && attr !== false) {
			var auxString='';
		} else {
			var idCategoria = $(this).children("a").attr("id-categoria");
			console.log($(this));
			var auxString='&categoria='+idCategoria;
		}
		$.get( "index.php?action="+contenido+auxString, function( data ) {
			$(".contenido").html(data);//ponemos el resultado de la pagina en el div contenido
		 	$.getScript('js/funciones.js');//llamamos al js aca para que tenga contenido a la hora de aplicar
		});		
	});	

	$(".scroll").click(function(event) {		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
	});	
});



addEventListener("load", function() {
	setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); 
};