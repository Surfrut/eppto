$('.mod_preloader').hide();
$('.mod_confirmacion').hide();
$('.btn_pptoMasivo').on('click', function(){
  $('.modal_cargaMasiva').modal('open');
});
let datos_confirmados
$("body").on('click', '.btn_cargarMasivo',function(){
 var formData = new FormData($(".formulario_archivo")[0]);

 formData.append('tipo_archivo',$('input:checkbox[name=surfrut]:checked').val());

 let nombreArchivo = $('.nombreArchivo').val();
 formData.append('nombreArchivo', nombreArchivo);

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
         datos_confirmados = loquesea;
         let suma = 0
         for (var i = 1; i < (loquesea.length)-1; i++) {
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
  //CONSULTA ARTICULOS
  $.ajax({
    url: base_url+'comercial/com_carga_c/consultaArticulo',
    type: 'POST',
    dataType: 'json',
    data: {
      datos_confirmados:datos_confirmados
    },
    beforeSend: function(){
      $('.mod_contenido').hide();
      $('.mod_preloader').show('200');
      $('.titulo').addClass('center').text("Validando códigos...");
      $('.footer').hide();
      $('.contenido_confirmacion').hide();
    }
  })
  .done(function(data) {
    console.log("success com_carga_c/consultaArticulo");
    console.log(data.length);
    console.log(data);
    let datos_insertar = JSON.stringify(datos_confirmados)
    if (data.length<=0) {
      //AJAX QUE VA HACER LOS INSERT A MYSQL
      $.ajax({
        url: base_url+'comercial/com_carga_c/insertaPresupuesto',
        type: 'POST',
        dataType: 'json',
        data: {datos_insertar:datos_insertar},
        beforeSend: function(){
          $('.titulo').text("Ingresando Presupuesto");
        }
      })
      .done(function(data) {
        console.log(data);
        console.log("success com_carga_c/insertaPresupuesto");
        swal(
          'Perfecto!',
          'Todas las lineas ingresadas.',
          'success'
        )
      })
      .fail(function(data) {
        console.log(data);
        console.log("error com_carga_c/insertaPresupuesto");
      })
      //AJAX QUE VA HACER LOS INSERT A MYSQL

    }else{
      alert("Estos códigos no existen. Favor revisar. Se cancelará todo el proceso."+data);
    }
  })
  .fail(function(data) {
    // console.log(data);
    console.log("error com_carga_c/consultaArticulo");
  });
  //CONSULTA ARTICULOS

  //CONSULTA CLIENTES
  //CONSULTA CLIENTES

  // CONSULTA SHIP-TO
  // CONSULTA SHIP-TO


});
