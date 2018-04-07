$('.mod_preloader').hide();
$('.mod_confirmacion').hide();
$('.btn_pptoMasivo').on('click', function(){
  $('.modal_cargaMasiva').modal('open');
});
let datos_confirmados
$("body").on('click', '.btn_cargarMasivo',function(){
 var formData = new FormData($(".formulario_archivo")[0]);
 $.ajax({
       url: base_url+'comercial/com_carga_c/cargaArchivo',
       type: 'POST',
       data: formData,
       cache: false,
       contentType: false,
       processData: false,
       beforeSend: function(){
         $('.mod_contenido').hide();
         $('.mod_preloader').show('200');
         $('.titulo').hide();
         $('.footer').hide();
       },
       success: function(data){
         $('.mod_preloader').hide();
         $('.mod_contenido').show();
         let loquesea = JSON.parse(data);
         datos_confirmados = data;
         let suma = 0
         for (var i = 1; i < loquesea.length; i++) {
           suma = suma + parseInt(loquesea[i]['af']);
         }
         $('.mod_contenido').hide();
         $('.mod_confirmacion').show();
         $('.footer').show();
         $('.titulo').text("Confirmar resumen del estimado de Presupueto:");
         $('.titulo').show();
         $('.btn_cargarMasivo').removeClass('btn_cargarMasivo').addClass('btn_confirmaResumen');
         $('.contenido_confirmacion').append(`<span>Se han cargado <strong>${(loquesea.length)-1}</strong> lineas del archivo.<br> Con un total de: <strong>${suma}</strong> articulos para el año.</span><br><br>`)
         console.log("success com_carga_c/cargaArchivos");
       },
       error: function(data){
         console.log(data);
         console.log("error com_carga_c/cargaArchivos");
       }
   });
})

$('body').on('click', '.btn_confirmaResumen', function(event) {
  $.ajax({
    url: base_url+'comercial/com_carga_c/consultaArticulo',
    type: 'POST',
    dataType: 'json',
    data: {
      datos_confirmados:datos_confirmados
    }
  })
  .done(function(data) {
    console.log(data);
    if (data.length>0) {
      alert("carga archivo");
      //AJAX QUE VA HACER LOS INSERT A MYSQL
      $.ajax({
        url: base_url+,
        type: 'POST',
        dataType: 'json',
        data: {datos_confirmados:datos_confirmados}
      })
      .done(function() {
        console.log("success");
      })
      .fail(function() {
        console.log("error");
      })
      //AJAX QUE VA HACER LOS INSERT A MYSQL

    }else{
      alert("Estos códigos no existen. Favor revisar. Se cancelará todo el proceso.");
    }
    console.log("success com_carga_c/consultaArticulo");
  })
  .fail(function(data) {
    // console.log(data);
    console.log("error com_carga_c/consultaArticulo");
  });


});
