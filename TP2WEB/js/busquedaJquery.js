



$("#formBusqueda").submit(function() 
{
  $.ajax({
    url: 'index.php',
    type: "POST",
    data:$("#formBusqueda").serialize(), 
   success: function(data) {
      $("#resMaquinas").html(data);
    }
    
  });
  return false;
});
