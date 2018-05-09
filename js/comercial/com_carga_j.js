$('.mod_preloader').hide();
$('.mod_confirmacion').hide();
$('.btn_pptoMasivo').on('click', function(){
  $('.modal_cargaMasiva').modal('open');
});

//CARGA ARCHIVO PARA LECTURA
let datos_confirmados
$("body").on('click', '.btn_cargarMasivo',function(){
 var formData = new FormData($(".formulario_archivo")[0]);
 formData.append('tipo_archivo',$('input[name=surfrut]:checked').val());
 let nombreArchivo = $('.nombreArchivo').val();
 console.log($('input:checkbox[name=surfrut]:checked').val());
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
         console.log(data);
         let loquesea = JSON.parse(data);
         datos_confirmados = loquesea;
         let suma = 0
         for (var i = 0; i < (loquesea.length)-1; i++) {
           suma = suma + parseInt(loquesea[i]['af']);
           console.log(loquesea[i]['af'],loquesea.length,i);
         }
         $('.mod_contenido').hide();
         $('.mod_confirmacion').show();
         $('.footer').show();
         $('.titulo').text("Confirmar resumen del estimado de Presupuesto:");
         $('.titulo').show();
         $('.btn_cargarMasivo').removeClass('btn_cargarMasivo').addClass('btn_confirmaResumen');
         $('.contenido_confirmacion').append(`<span>Se han cargado <strong>${(loquesea.length)-2}</strong> lineas del archivo.<br> Con un total de: <strong>${suma}</strong> articulos para el año.</span><br><br>`)
         // $('.contenido_confirmacion').append(`<span>Se han cargado <strong>${(loquesea.length)-1}</strong> lineas del archivo.<br> Con un total de: <strong>${suma}</strong> articulos para el año.</span><br><br>`)
         console.log("success com_carga_c/cargaArchivos");
       },
       error: function(data){
         console.log(data);
         console.log("error com_carga_c/cargaArchivos");
       }
   });
})
//CARGA ARCHIVO PARA LECTURA

$('body').on('click', '.btn_confirmaResumen', function(event) {
  console.log(datos_confirmados);
  //CONSULTA ARTICULOS
  $.ajax({
    url: base_url+'comercial/com_carga_c/consultaArticulo',
    type: 'POST',
    dataType: 'json',
    data: {
      datos_confirmados: JSON.stringify(datos_confirmados)
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
    let datos_insertar = JSON.stringify(datos_confirmados)

    console.log("success com_carga_c/consultaArticulo");
    console.log(data);
    if(data == ''){
      $('.modal_contenido').modal('close');
      swal("Debes cargar un archivo con al menos un registro.");
    }else{

      //INICIO VALIDACIONES
      if (data.length==0) {
        //AJAX QUE VA HACER LOS INSERT A MYSQL si no hay errores
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
          $('.mod_contenido').modal('close');
          $('.mod_preloader').modal('close');
          $('.contenido_confirmacion').hide();
          $('.modal_contenido').html(`
            <div class="mod_preloader center">
            <br>
            <br>
            <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue">
            <div class="circle-clipper left">
            <div class="circle"></div>
            </div><div class="gap-patch">
            <div class="circle"></div>
            </div><div class="circle-clipper right">
            <div class="circle"></div>
            </div>
            </div>
            <div class="spinner-layer spinner-red">
            <div class="circle-clipper left">
            <div class="circle"></div>
            </div><div class="gap-patch">
            <div class="circle"></div>
            </div><div class="circle-clipper right">
            <div class="circle"></div>
            </div>
            </div>
            <div class="spinner-layer spinner-yellow">
            <div class="circle-clipper left">
            <div class="circle"></div>
            </div><div class="gap-patch">
            <div class="circle"></div>
            </div><div class="circle-clipper right">
            <div class="circle"></div>
            </div>
            </div>
            <div class="spinner-layer spinner-green">
            <div class="circle-clipper left">
            <div class="circle"></div>
            </div><div class="gap-patch">
            <div class="circle"></div>
            </div><div class="circle-clipper right">
            <div class="circle"></div>
            </div>
            </div>
            </div>
            <br>
            <br>
            </div>
            <h4 class="titulo">Selecciona el archivo del Presupuesto</h4>
            <div class="divider"></div><br>
            <div class="mod_contenido">
            <form action="#" class="formulario_archivo" enctype="multipart/form-data" name="mi_archivo">
            <div class="tipo_archivo">
            <p>
            <input type="checkbox" name="surfrut" id="test5" value="SURFRUT - RETAIL"/>
            <label for="test5">SURFRUT - RETAIL</label>&nbsp;&nbsp;
            <input type="checkbox" name="surfrut" id="test6" value="SURFRUT - INGREDIENTES"/>
            <label for="test6">SURFRUT - INGREDIENTES</label>&nbsp;&nbsp;
            <input type="checkbox" name="surfrut" id="test7" value="SURFRUT - MARRASCHINO"/>
            <label for="test7">SURFRUT - MARRASCHINO</label>
            </p>
            <p>
            <input type="checkbox" id="test8" value="PUREFRUIT - DOYPACK"/>
            <label for="test8">PUREFRUIT - DOYPACK</label>&nbsp;&nbsp;
            <input type="checkbox" id="test9" value="PUREFRUIT - BULK"/>
            <label for="test9">PUREFRUIT - BULK</label>
            </p>
            </div>
            <div class="file-field input-field">
            <div class="btn color_eppto">
            <span>Archivo</span>
            <input type="file" name="mi_archivo" class="nombreArchivo">
            </div>
            <div class="file-path-wrapper ">
            <input class="file-path validate txt_archivo" type="text" value="">
            </div>
            </div>
            </form>
            </div>
            <div class="mod_confirmacion">
            <div class="row">
            <div class="col s12 m12 l12">
            <div class="card-panel contenido_confirmacion">

            </div>
            </div>
            </div>
            </div>
            <div class="right footer">
            <br>
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
            <a href="#!" class="modal-action waves-effect waves-green btn btn_cargarMasivo color_eppto">Cargar</a>
            <br>
            <br>
            </div>`);
            $('.mod_preloader').hide();
            $('.mod_confirmacion').hide();
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
        }else if(data.length > 0){
          for (var i = 0; i <= data.length-1; i++) {
            $('.mod_error').append(`<a href="#!" class="collection-item center">${data[i]}</a>`);
          }
          $('.mod_contenido').modal('close');
          $('.mod_preloader').modal('close');
          $('.contenido_confirmacion').hide();
          $('.modal_contenido').html(`
            <div class="mod_preloader center">
            <br>
            <br>
            <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue">
            <div class="circle-clipper left">
            <div class="circle"></div>
            </div><div class="gap-patch">
            <div class="circle"></div>
            </div><div class="circle-clipper right">
            <div class="circle"></div>
            </div>
            </div>
            <div class="spinner-layer spinner-red">
            <div class="circle-clipper left">
            <div class="circle"></div>
            </div><div class="gap-patch">
            <div class="circle"></div>
            </div><div class="circle-clipper right">
            <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-yellow">
            <div class="circle-clipper left">
            <div class="circle"></div>
            </div><div class="gap-patch">
            <div class="circle"></div>
            </div><div class="circle-clipper right">
            <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-green">
            <div class="circle-clipper left">
            <div class="circle"></div>
            </div><div class="gap-patch">
            <div class="circle"></div>
            </div><div class="circle-clipper right">
            <div class="circle"></div>
            </div>
            </div>
            </div>
            <br>
            <br>
            </div>
            <h4 class="titulo">Selecciona el archivo del Presupuesto</h4>
            <div class="divider"></div><br>
            <div class="mod_contenido">
            <form action="#" class="formulario_archivo" enctype="multipart/form-data" name="mi_archivo">
            <div class="tipo_archivo">
            <p>
            <input type="checkbox" name="surfrut" id="test5" value="SURFRUT - RETAIL"/>
            <label for="test5">SURFRUT - RETAIL</label>&nbsp;&nbsp;
            <input type="checkbox" name="surfrut" id="test6" value="SURFRUT - INGREDIENTES"/>
            <label for="test6">SURFRUT - INGREDIENTES</label>&nbsp;&nbsp;
            <input type="checkbox" name="surfrut" id="test7" value="SURFRUT - MARRASCHINO"/>
            <label for="test7">SURFRUT - MARRASCHINO</label>
            </p>
            <p>
            <input type="checkbox" id="test8" value="PUREFRUIT - DOYPACK"/>
            <label for="test8">PUREFRUIT - DOYPACK</label>&nbsp;&nbsp;
            <input type="checkbox" id="test9" value="PUREFRUIT - BULK"/>
            <label for="test9">PUREFRUIT - BULK</label>
            </p>
            </div>
            <div class="file-field input-field">
            <div class="btn color_eppto">
            <span>Archivo</span>
            <input type="file" name="mi_archivo" class="nombreArchivo">
            </div>
            <div class="file-path-wrapper ">
            <input class="file-path validate txt_archivo" type="text" value="">
            </div>
            </div>
            </form>
            </div>
            <div class="mod_confirmacion">
            <div class="row">
            <div class="col s12 m12 l12">
            <div class="card-panel contenido_confirmacion">
            </div>
            </div>
            </div>
            </div>
            <div class="right footer">
            <br>
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
            <a href="#!" class="modal-action waves-effect waves-green btn btn_cargarMasivo color_eppto">Cargar</a>
            <br>
            <br>
            </div>`);
            $('.mod_errorCarga').modal('open');
            $('.mod_preloader').hide();
            $('.mod_confirmacion').hide();
          }else{
            $('.mod_preloader').hide();
            $('.mod_contenido').modal('close');
            swal("debes subir un archivo con al menos un registro");
          }
          //FIN VALIDACIONES
    }//fin else donde data esta vacío.


  })
  .fail(function(data) {
    console.log(data);
    console.log("error com_carga_c/consultaArticulo");
  });

  //CONSULTA ARTICULOS
  //CONSULTA CLIENTES
  //CONSULTA CLIENTES
  // CONSULTA SHIP-TO
  // CONSULTA SHIP-TO
});
