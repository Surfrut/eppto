$('.mod_preloader').hide();
$('.btn_pptoMasivo').on('click', function(){
  $('.modal_cargaMasiva').modal('open');
});

$(".btn_cargarMasivo").click(function(){
 var formData = new FormData($(".formulario_archivo")[0]);
 $.ajax({
       url: base_url+'comercial/com_carga_c/cargaArchivo',
       type: 'POST',
       data: formData,
       cache: false,
       contentType: false,
       processData: false,
       beforeSend: function(){
         console.log("subiendo");
         $('.mod_contenido').hide();
         $('.mod_preloader').show('200');
       },
       success: function(data){
         $('.mod_preloader').hide();
         $('.mod_contenido').show();
         let loquesea = JSON.parse(data);
         let suma = 0
         for (var i = 0; i < loquesea.length; i++) {
           console.log(parseInt(suma) + parseInt(loquesea[i]['ag']));
         }
         console.log(suma);
         $('.mod_contenido').append(`Se han cargado ${(loquesea.length)-1} lineas del archivo.<br>`)

         console.log("success com_carga_c/cargaArchivos");
       },
       error: function(data){
         console.log(data);
         console.log("error com_carga_c/cargaArchivos");
       }
   });


})
