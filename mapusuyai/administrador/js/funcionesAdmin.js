$(document).ready(function(){

  $("#miform").on("submit", function(event){
          
      event.preventDefault();
          
      $.ajax({
        type: "POST",
        dataType: "html",
        url: event.target.action,
        data: new FormData(this),
        success: function(data){
          //alert(data.result);
         $("#noticias").html(data);
         setHandlers();
              
        },
        error: function(data){
          alert(data.responseText);
        },
        contentType : false,
        processData : false
      });
  });

  setHandlers();

});

function setHandlers(){



  // $(".borrarBtn").on("click", function(event){

  //   event.preventDefault();
    
  //   $.ajax({
  //     type: "POST",
  //     dataType: "html",
  //     url: event.target.href,
  //     success: function(data){
  //       //alert(data.result);
  //       $("#noticias").html(data);
  //       setHandlers();
  //     },
  //     error: function(data){
  //       alert(data.responseText);
  //     },
  //     contentType : false,
  //     processData : false
  //   });
  // });

  // $(".botonAgregarImagenes").on("click", function(event){

  //   event.preventDefault();
    
  //   $.ajax({
  //     type: "POST",
  //     dataType: "html",
  //     url: event.target.href,
  //     success: function(data){
  //       //alert(data.result);
  //       $("#imagenes").html(data);
  //       setHandlers();
  //     },
  //     error: function(data){
  //       alert(data.responseText);
  //     },
  //     contentType : false,
  //     processData : false
  //   });
  // });
}

//listo pero no probado para agregar el boton de borrar y agregar imagenes


