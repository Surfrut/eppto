// console.log("comercial_j ok");
let global_asd
$('.modal').modal();
$('select').material_select();
$(".button-collapse").sideNav();

$("#jsGrid").jsGrid({
  height: "800px",
  width: "100%",
  paging: true,

  editButton: true,
  deleteButton: true,
  clearFilterButton: true,
  modeSwitchButton: true,
  // autoload: true,
  headerRowRenderer: true,

  heading: true,
  filtering: true,
  editing: true,
  sorting: true,
  autoload: true,
  inserting: false,
    pagerFormat: "Página: {pageIndex} &nbsp;&nbsp; {first} {prev} {pages} {next} {last} &nbsp;&nbsp; total Presupuesto: {itemCount}",
    pagePrevText: "<",
    pageNextText: ">",
    pageFirstText: "<<",
    pageLastText: ">>",
    pageSize: 100,
    pageButtonCount: 5,
    controller: db,
    rowClick: function(value){
      var $row = $("#jsGrid").jsGrid("rowByItem", value.item);
      console.log($row);
      $('body').keyup('td', function(e) {



        let clases = $(e.target).parent().attr('class').split(" ")[1];
        value.item[clases] = e.target.value;
        let sumaTotal = sumaPeriodos(value.item);
        $(e.target).parent().parent().children('td.nivel3').text(sumaTotal)
        global_asd = value.item
        // $(e.target).parent().parent().next().children('td.nivel3').text(sumaTotal) //AL HACER EL REFRESH GUARDA EL DATO, NO ES NECESARIO DARLO AL OCULTO



     });//FIN KEYUP
     $("#jsGrid").jsGrid("editItem", $($row));
    },
    fields: [
        { name: "pre_id", title: "#", type: "text", width: 30, editing: false },
		    { name: "pre_dominio", title: "Dominio", type: "text", width: 100, editing: false },
        { name: "pre_ano", title: "Año", type: "text", width: 100, editing: false },
        { name: "pre_articulo", title: "Articulo", type: "text", width: 200, editing: false },
        { name: "pre_descripcion_a", title: "Descripción", type: "text", width: 200, editing: false },
        { name: "pre_familia", title: "Familia", type: "text", width: 200, editing: false },
        { name: "pre_clase", title: "Clase", type: "text", width: 200, editing: false },
        { name: "pre_variedad", title: "Variedad", type: "text", width: 200, editing: false },
        { name: "pre_cliente", title: "Cliente", type: "text", width: 200, editing: false },
        { name: "pre_descripcion_c", title: "Descripción", type: "text", width: 200, editing: false },
		    { name: "pre_ship", title: "Shipto", type: "text", width: 200, editing: false },
        { name: "pre_descripcion_s", title: "Descripción", type: "text", width: 200, editing: false },
        { name: "pre_canal", title: "Canal", type: "text", width: 200, editing: false },
        { name: "pre_cant1", title: "Ene 2018", type: "number", width: 200, editing: false, css: 'pre_cant1' },
        { name: "pre_desp1", title: "Desp. Ene 2018", type: "number", width: 200, editing: false, css: 'pre_cant1', editing: false },
        { name: "pre_cant2", title: "Feb 2018", type: "number", width: 200, editing: false, css: 'pre_cant2' },
        { name: "pre_desp2", title: "Desp. Feb 2018", type: "number", width: 200, editing: false, css: 'pre_cant2', editing: false },
        { name: "pre_cant3", title: "Mar 2018", type: "number", width: 200, editing: false, css: 'pre_cant3' },
        { name: "pre_desp3", title: "Desp. Mar 2018", type: "number", width: 200, editing: false, css: 'pre_cant3', editing: false },
        { name: "pre_cant4", title: "Abr 2018", type: "number", width: 200, css: 'pre_cant4' },
        { name: "pre_desp4", title: "Desp. Abr 2018", type: "number", width: 200, css: 'pre_cant4', editing: false },
        { name: "pre_cant5", title: "May 2018", type: "number", width: 200, css: 'pre_cant5' },
        { name: "pre_desp5", title: "Desp. May 2018", type: "number", width: 200, css: 'pre_cant5', editing: false },
        { name: "pre_cant6", title: "Jun 2018", type: "number", width: 200, css: 'pre_cant6' },
        { name: "pre_desp6", title: "Desp. Jun 2018", type: "number", width: 200, css: 'pre_cant6', editing: false },
        { name: "pre_cant7", title: "Jul 2018", type: "number", width: 200, css: 'pre_cant7' },
        { name: "pre_desp7", title: "Desp. Jul 2018", type: "number", width: 200, css: 'pre_cant7', editing: false },
        { name: "pre_cant8", title: "Ago 2018", type: "number", width: 200, css: 'pre_cant8' },
        { name: "pre_desp8", title: "Desp. Ago 2018", type: "number", width: 200, css: 'pre_cant8', editing: false },
        { name: "pre_cant9", title: "Sep 2018", type: "number", width: 200, css: 'pre_cant9' },
        { name: "pre_desp9", title: "Desp. Sep 2018", type: "number", width: 200, css: 'pre_cant9', editing: false },
        { name: "pre_cant10", title: "Oct 2018", type: "number", width: 200, css: 'pre_cant10' },
        { name: "pre_desp10", title: "Desp. Oct 2018", type: "number", width: 200, css: 'pre_cant10', editing: false },
        { name: "pre_cant11", title: "Nov 2018", type: "number", width: 200, css: 'pre_cant11' },
        { name: "pre_desp11", title: "Desp. Nov 2018", type: "number", width: 200, css: 'pre_cant11', editing: false },
        { name: "pre_cant12", title: "Dic 2018", type: "number", width: 200, css: 'pre_cant12' },
        { name: "pre_desp12", title: "Desp. Dic 2018", type: "number", width: 200, css: 'pre_cant12', editing: false },
        { name: "pre_cant13", title: "Ene 2019", type: "number", width: 200, css: 'pre_cant13' },
        { name: "pre_cant14", title: "Feb 2019", type: "number", width: 200, css: 'pre_cant14' },
        { name: "pre_cant15", title: "Mar 2019", type: "number", width: 200, css: 'pre_cant15'
        ,
        cellRenderer: function(value, item){
          var arreglo = [];
          var suma = 0;
          arreglo.push(item.pre_cant1,item.pre_cant2,item.pre_cant3,item.pre_cant4,item.pre_cant5,item.pre_cant6,item.pre_cant7,item.pre_cant8,item.pre_cant9,item.pre_cant10,item.pre_cant11,item.pre_cant12,item.pre_cant13,item.pre_cant14,item.pre_cant15);
          for (var i = 0; i < arreglo.length; i++) {
            suma = suma+parseInt(arreglo[i])
          }
         item.Total=suma;
         return $("<td>").append(value);
       }//FIN CELLRENDERER
},
            { name: "pre_total_anual", title: "Total Anual", type: "number", width: 200, css: 'nivel1', editing: false },
		    { name: "pre_total_desp", title: "Total Despachado", type: "number", width: 200, css: 'nivel2', editing: false },
				{ name: "Total", title: "Estimado Actual", type: "number", width: 200, css: 'nivel3', editing: false },
/*         { name: "pre_cant16", title: "Abr 2019", type: "number", width: 200 },
        { name: "pre_cant17", title: "May 2019", type: "number", width: 200 },
        { name: "pre_cant18", title: "Jun 2019", type: "number", width: 200 },
        { name: "pre_cant19", title: "Jul 2019", type: "number", width: 200 },
        { name: "pre_cant20", title: "Ago 2019", type: "number", width: 200 },
        { name: "pre_cant21", title: "Sep 2019", type: "number", width: 200 },
        { name: "pre_cant22", title: "Oct 2019", type: "number", width: 200 },
        { name: "pre_cant23", title: "Nov 2019", type: "number", width: 200 },
        { name: "pre_cant24", title: "Dic 2019", type: "number", width: 200 },
        { name: "pre_cant25", title: "Ene 2020", type: "number", width: 200 },
        { name: "pre_cant26", title: "Feb 2020", type: "number", width: 200 },
        { name: "pre_cant27", title: "Mar 2020", type: "number", width: 200 },
        { name: "pre_cant28", title: "Abr 2020", type: "number", width: 200 },
        { name: "pre_cant29", title: "May 2020", type: "number", width: 200 },
        { name: "pre_cant30", title: "Jun 2020", type: "number", width: 200 },
        { name: "pre_cant31", title: "Jul 2020", type: "number", width: 200 },
        { name: "pre_cant32", title: "Ago 2020", type: "number", width: 200 },
        { name: "pre_cant33", title: "Sep 2020", type: "number", width: 200 },
        { name: "pre_cant34", title: "Oct 2020", type: "number", width: 200 },
        { name: "pre_cant35", title: "Nov 2020", type: "number", width: 200 },
        { name: "pre_cant36", title: "Dic 2020", type: "number", width: 200 }, */
			{type: "control" }
    ]
});//FIN JSGRID

function sumaPeriodos(valor){
  let suma = parseInt(valor.pre_cant1)+parseInt(valor.pre_cant2)+parseInt(valor.pre_cant3)+parseInt(valor.pre_cant4)+parseInt(valor.pre_cant5)+parseInt(valor.pre_cant6)+parseInt(valor.pre_cant7)+parseInt(valor.pre_cant8)+parseInt(valor.pre_cant9)+parseInt(valor.pre_cant10)+parseInt(valor.pre_cant11)+parseInt(valor.pre_cant12)+parseInt(valor.pre_cant13)+parseInt(valor.pre_cant14)+parseInt(valor.pre_cant15)
  return suma;
}

$('body').change('tr',function(){
  $("#jsGrid").jsGrid("refresh");
  $("#jsGrid").jsGrid("updateItem", global_asd);
  console.log("Actualizó con el .change");
});

//FIN btn_nuevoPresupuesto AGREGAR PRESUPUESTO
$('.btn_nuevoPresupuesto').on('click', function(){
  $('.modal').modal('open');
  //CARGAR CLIENTES AL SELECT
  $.ajax({
    url: base_url+'comercial/comercial_c/listarClientes',
    type: 'POST',
    dataType: 'json'
  })
  .done(function(data) {
    console.log("success comercial_c/listarClientes");
    var datos = {};
    $('#select_cliente').material_select('destroy');
    for (var i = 0; i < data.length; i++) {
      datos[data[i].cm_sort + " - " + data[i].cm_addr] = null;
      $('#select_cliente').append(`<option value="${data[i].cm_sort}">${data[i].cm_addr} - ${data[i].cm_sort}</option>`)
    }//FIN FOR
    $('input.codcliente').autocomplete({
      data: datos,
      limit: 10,
      onAutocomplete: function(val) {
        $('.id_cliente').val(val.split("-")[1]);
        $('.codcliente').val(val.split("-")[0]);
      },
      minLength: 0,
    });
    $('.progress1').hide('200');
    $('.input_cliente').show('300');
  })//FIN DONE
  .fail(function(data) {
    console.log("error comercial_c/listarClientes");
    console.log(data);
  })
  //CARGAR CLIENTES AL SELECT

  //CARGA CÓDIGOS DE ARTICULO
  $.ajax({
    url: base_url+'comercial/comercial_c/listarArticulos',
    type: 'POST',
    dataType: 'json'
  })
  .done(function(data) {
    var articulos = {};
    for (var i = 0; i < data.length; i++) {
      articulos[data[i].pt_part+" - "+data[i].pt_desc1+" "+data[i].pt_desc2] = null
    }
    $('input.codarticulo').autocomplete({
      data: articulos,
      limit: 10,
      onAutocomplete: function(valores) {
        // console.log(val.split("-")[1]);
        console.log(valores.split("-")[1]);
        // $('.input_description').val(valores.split("-")[1]);
        // $('.codarticulo').val(valores.split("-")[0]);
      },
      minLength: 0,
    });
    $('.progress2').hide('200');
    $('.input_descripcion').show('300');
    console.log("success comercial_c/listarArticulos");
  })
  .fail(function(data) {
    console.log(data);
    console.log("error comercial_c/listarArticulos");
  })
  //CARGA CÓDIGOS DE ARTICULO
});
//FIN btn_nuevoPresupuesto AGREGAR PRESUPUESTO

//BTN PARA AGREGAR PRESUPUESTO MANUAL
$('.btn_aceptar').on('click', function(){
  let datos = {};
  let valida = false;
  datos.pre_articulo = $('.pre_articulo').val();
  datos.pre_descripcion_a = $('.pre_descripcion_a').val();
  datos.pre_cliente = $('.pre_cliente').val();
  datos.pre_descripcion_c = $('.pre_descripcion_c').val();
  datos.pre_canal = $('.pre_canal').val();
  datos.pre_cant1 = $('.pre_cant1').val();
  datos.pre_cant2 = $('.pre_cant2').val();
  datos.pre_cant3 = $('.pre_cant3').val();
  datos.pre_cant4 = $('.pre_cant4').val();
  datos.pre_cant5 = $('.pre_cant5').val();
  datos.pre_cant6 = $('.pre_cant6').val();
  datos.pre_cant7 = $('.pre_cant7').val();
  datos.pre_cant8 = $('.pre_cant8').val();
  datos.pre_cant9 = $('.pre_cant9').val();
  datos.pre_cant10 = $('.pre_cant10').val();
  datos.pre_cant11 = $('.pre_cant11').val();
  datos.pre_cant12 = $('.pre_cant12').val();
  datos.pre_cant13 = $('.pre_cant13').val();
  datos.pre_cant14 = $('.pre_cant14').val();
  datos.pre_cant15 = $('.pre_cant15').val();
for (var variable in datos) {
  if(datos[variable].trim() == ''){
    $('input.'+variable).css('border-bottom-color', 'red');
    swal('Ojo!','Debes ingresar completar todos los campos.','warning')
    console.log(variable);
  }else{
    valida = true
  }
}//FIN FOR VALIDA DATOS
  var datos2 = JSON.stringify(datos);
  console.log(datos2);
if (valida) {
  $.ajax({
    url: base_url+'comercial/comercial_c/ingresaPresupuesto',
    type: 'POST',
    data: {
      data:datos2
    }
  })
  .done(function(data) {
    console.log("success comercial_c/ingresaPresupuesto");
    console.log(data);
  })
  .fail(function(data) {
    console.log("error comercial_c/ingresaPresupuesto");
    console.log(data);
  })
}
});
//BTN PARA AGREGAR PRESUPUESTO MANUAL

$('.btn_descargar').on('click', function(){

  window.location.href = base_url+'comercial/comercial_c/descargarPresupuesto';

});

$('.btn_tst').on('click', function(){

  // window.location.href = base_url+'comercial/comercial_c/descargarROCIO';
  // swal("NO TOQUE");

});

$('.btn_tst').on('click', function(){

  window.location.href = base_url+'comercial/comercial_c/descargarROCIO';

});
