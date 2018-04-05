$('.btn_pptoMasivo').on('click', function(){
  $('.modal_cargaMasiva').modal('open');
});

$(".btn_cargarMasivo").click(function(){
 var formData = new FormData($(".formulario_archivo")[0]);
   // $(".btn_cargarMasivo").css({"display":"none"})
   console.log(base_url+"uploads/");
 $.ajax({
       url: base_url+'comercial/com_carga_c/cargaArchivo',
       type: 'POST',
       // Form data
       //datos del formulario
       data: formData,
       //necesario para subir archivos via ajax
       cache: false,
       contentType: false,
       processData: false,
       //mientras enviamos el archivo
       beforeSend: function(){
         console.log("subiendo");
       },
       //una vez finalizado correctamente
       success: function(data){
         // console.log(data);
         console.log("listo");
         // $(".CIM").css({"display":"inline-block"})
           // message = $("<span class='success'>La imagen ha subido correctamente.</span>");
           // showMessage(message);
           // if(isImage(fileExtension))
           // {
           //     $(".showImage").html("<img src='files/"+data+"' />");
           // }
       },
       //si ha ocurrido un error
       error: function(){
         console.log("error");
           // message = $("<span class='error'>Ha ocurrido un error.</span>");
           // showMessage(message);
       }
   });


})
