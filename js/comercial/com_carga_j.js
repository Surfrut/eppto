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

         let loquesea
         loquesea = JSON.parse(data);
         let table = `<table>
        <thead>
          <tr class='tr_head'>
          </tr>
        </thead>

        <tbody class='tr_body'>
        </tbody>
      </table>`
      $('.mod_contenido').html(table);
         // for (var i = 0; i < loquesea.length; i++) {
         //   $('.tr_body').append(`<tr><td>${loquesea[i]['a']}</td><td>${loquesea[i]['b']}</td><td>${loquesea[i]['c']}</td><td>${loquesea[i]['d']}</td><td>${loquesea[i]['e']}</td></tr>`);
         // }
         console.log("success com_carga_c/cargaArchivos");
       },
       error: function(data){
         console.log(data);
         console.log("error com_carga_c/cargaArchivos");
       }
   });


})
