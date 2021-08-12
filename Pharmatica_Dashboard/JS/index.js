$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: './Model/TraerVehiculosSelect.php'
  })
  .done(function(listas_rep){
    $('#vehiculo').html(listas_rep)
  })
  .fail(function(){
    alert('Hubo un errror al cargar la de profesores')
  })

})