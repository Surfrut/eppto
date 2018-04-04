function sincronizacion(){
  $.ajax({
    url: base_url+'sincronizacion_c/sincronizacion_controlador',
    type: 'POST',
    dataType: 'json',
  })
  .done(function(data) {
    console.log(data);
    console.log("success sincronizacion");
    swal("NO HAY NUEVOS REGISTROS");
  })
  .fail(function(data) {
    console.log(data);
    console.log("TERMINÓ.");
    console.log("error sincronizacion");
  });//FIN AJAX SINCRONIZACION
}

$('.btn_sincronizacion').on('click', function(){
  sincronizacion();
});
