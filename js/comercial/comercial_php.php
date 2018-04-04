
<script>

console.log("comercial_j ok");

$('.modal').modal();
$('select').material_select();

$("#jsGrid").jsGrid({
  // height: "510px",
  height: <?php echo "'510px'" ?>,
  width: "100%",
  // align: "center",
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
    // pagerFormat: "Paginación: {pageIndex} &nbsp;&nbsp; {first} {prev} {pages} {next} {last} &nbsp;&nbsp; total de paginas: {pageCount} total Analisis: {itemCount}",
    pagerFormat: "Página: {pageIndex} &nbsp;&nbsp; {first} {prev} {pages} {next} {last} &nbsp;&nbsp; total Presupuesto: {itemCount}",
    pagePrevText: "<",
    pageNextText: ">",
    pageFirstText: "<<",
    pageLastText: ">>",
//     rowClick: function(item) {
//   // alert("row clicked"+item.item.ID);
// },
    pageSize: 100,
    pageButtonCount: 5,


    data: [
      { ID: "1" ,Articulo: "MEEMBA1000097" ,Descripcion: "Caja Kroger Apple Sweet" ,IDCliente: "9999" ,Cliente: "Kroger" ,Canal: "NACIONAL" ,cant1: 213 ,cant2: "342" ,cant3: "543" ,cant4: "45" ,cant5: "65" ,cant6: "567" ,cant7: "87" ,cant8: "987" ,cant9: "987" ,cant10: "987" ,cant11: "987" ,cant12: "987" ,cant13: "987" ,cant14: "987" ,cant15: "987"},
      { ID: "2" ,Articulo: "MEEMBA1000097" ,Descripcion: "Caja Kroger Banana" ,IDCliente: "9999" ,Cliente: "Kroger" ,Canal: "NACIONAL" ,cant1: "65" ,cant2: "456" ,cant3: "2345" ,cant4: "456" ,cant5: "456" ,cant6: "654" ,cant7: "654" ,cant8: "654" ,cant9: "654" ,cant10: "654" ,cant11: "654" ,cant12: "654" ,P119: "654" ,cant14: "654" ,cant15: "654"},
      { ID: "3" ,Articulo: "MEEMBA1000097" ,Descripcion: "Caja Kroger Pear Peach" ,IDCliente: "9999" ,Cliente: "Kroger" ,Canal: "NACIONAL" ,cant1: "756" ,cant2: "2345" ,cant3: "456" ,cant4: "567" ,cant5: "6788" ,cant6: "8976" ,cant7: "3215" ,cant8: "3215" ,cant9: "3215" ,cant10: "3215" ,cant11: "3215" ,cant12: "3215" ,cant13: "3215" ,cant14: "3215" ,cant15: "3215"},
      { ID: "4" ,Articulo: "MEEMBA1000097" ,Descripcion: "Caja Kroger Apple Sweet" ,IDCliente: "9999" ,Cliente: "Kroger" ,Canal: "NACIONAL" ,cant1: "345" ,cant2: "345" ,cant3: "3453" ,cant4: "23456" ,cant5: "346" ,cant6: "23456" ,cant7: "1234" ,cant8: "1234" ,cant9: "1234" ,cant10: "1234" ,cant11: "1234" ,cant12: "1234" ,cant13: "1234" ,cant14: "1234" ,cant15: "1234"},
      { ID: "5" ,Articulo: "MEEMBA1000097" ,Descripcion: "Caja Kroger Pear Peach" ,IDCliente: "9999" ,Cliente: "Kroger" ,Canal: "NACIONAL" ,cant1: "23456" ,cant2: "245" ,cant3: "4562" ,cant4: "2456" ,cant5: "4256" ,cant6: "2456" ,cant7: "4566" ,cant8: "4566" ,cant9: "4566" ,cant10: "4566" ,cant11: "4566" ,cant12: "4566" ,cant13: "4566" ,cant14: "4566" ,cant15: "4566"},
      { ID: "6" ,Articulo: "MEEMBA1000097" ,Descripcion: "Caja Kroger Apple Sweet" ,IDCliente: "9999" ,Cliente: "Kroger" ,Canal: "NACIONAL" ,cant1: "2456" ,cant2: "4566" ,cant3: "4566" ,cant4: "4566" ,cant5: "4566" ,cant6: "4566" ,cant7: "4566" ,cant8: "4566" ,cant9: "4566" ,cant10: "4566" ,cant11: "4566" ,cant12: "4566" ,cant13: "4566" ,cant14: "4566" ,cant15: "4566"},
      { ID: "7" ,Articulo: "MEEMBA1000097" ,Descripcion: "Caja Kroger Pear Peach" ,IDCliente: "9999" ,Cliente: "Kroger" ,Canal: "NACIONAL" ,cant1: "645" ,cant2: "4562" ,cant3: "2456" ,cant4: "2456" ,cant5: "456" ,cant6: "243" ,cant7: "4566" ,cant8: "4566" ,cant9: "4566" ,cant10: "4566" ,cant11: "4566" ,cant12: "4566" ,cant13: "4566" ,cant14: "4566" ,cant15: "4566"},
      { ID: "8" ,Articulo: "MEEMBA1000097" ,Descripcion: "Caja Kroger Apple Sweet" ,IDCliente: "9999" ,Cliente: "Kroger" ,Canal: "NACIONAL" ,cant1: "6454" ,cant2: "4566" ,cant3: "45624" ,cant4: "754" ,cant5: "546" ,cant6: "456" ,cant7: "4566" ,cant8: "4566" ,cant9: "4566" ,cant10: "4566" ,cant11: "4566" ,cant12: "4566" ,cant13: "4566" ,cant14: "4566" ,cant15: "4566"},
      { ID: "9" ,Articulo: "MEEMBA1000097" ,Descripcion: "Caja Kroger Pear Peach" ,IDCliente: "9999" ,Cliente: "Kroger" ,Canal: "NACIONAL" ,cant1: "452" ,cant2: "3246" ,cant3: "236" ,cant4: "236" ,cant5: "26345" ,cant6: "23456" ,cant7: "4566" ,cant8: "4566" ,cant9: "4566" ,cant10: "4566" ,cant11: "4566" ,cant12: "4566" ,cant13: "4566" ,cant14: "4566" ,cant15: "4566"}
    ],

    fields: [
        { name: "ID", type: "text", width: 40, editing: false },
        { name: "Articulo", type: "text", width: 200, editing: false },
        { name: "Descripcion", type: "text", width: 200, editing: false },
        { name: "IDCliente", type: "text", width: 200, editing: false },
        { name: "Cliente", type: "text", width: 200, editing: false },
        { name: "Canal", type: "text", width: 200, editing: false },
        { name: "cant1", title:"Ene 2018", type: "number", width: 200, editing: false  },
        { name: "cant2", title:"Feb 2018", type: "number", width: 200, editing: false  },
        { name: "cant3", title:"Mar 2018", type: "number", width: 200 },
        { name: "cant4", title: "Abr 2018", width: 200 },
        { name: "cant5", title: "May 2018", width: 200 },
        { name: "cant6", title: "Jun 2018", width: 200 },
        { name: "cant7", title: "Jul 2018", width: 200 },
        { name: "cant8", title: "Ago 2018", width: 200 },
        { name: "cant9", title: "Sep 2018", width: 200 },
        { name: "cant10", title: "Oct 2018", width: 200 },
        { name: "cant11", title: "Nov 2018", width: 200 },
        { name: "cant12", title: "Dic 2018", width: 200 },
        { name: "cant13", title: "Ene 2019", width: 200 },
        { name: "cant14", title: "Feb 2019", width: 200 },
        { name: "cant15", title: "Mar 2019", width: 200 }
        // { name: "P419", type: "text", width: 200 },
        // { name: "P519", type: "text", width: 200 },
        // { name: "P619", type: "text", width: 200 },
        // { name: "P719", type: "text", width: 200 },
        // { name: "P819", type: "text", width: 200 },
        // { name: "P919", type: "text", width: 200 },
        // { name: "P1019", type: "text", width: 200 },
        // { name: "P1119", type: "text", width: 200 },
        // { name: "P1219", type: "text", width: 200 },
        // { name: "P120", type: "text", width: 200 },
        // { name: "P220", type: "text", width: 200 },
        // { name: "P320", type: "text", width: 200 },
        // { name: "P420", type: "text", width: 200 },
        // { name: "P520", type: "text", width: 200 },
        // { name: "P620", type: "text", width: 200 },
        // { name: "P720", type: "text", width: 200 },
        // { name: "P820", type: "text", width: 200 },
        // { name: "P920", type: "text", width: 200 },
        // { name: "P1020", type: "text", width: 200 },
        // { name: "P1120", type: "text", width: 200 },
        // { name: "P1220", type: "text", width: 200 }
    ]
});//FIN JSGRID

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
    console.log(data);
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
    console.log(articulos);
    $('input.codarticulo').autocomplete({
      data: articulos,
      limit: 10,
      onAutocomplete: function(val) {
        // console.log(val.split("-")[1]);
        $('.input_description').val(val.split("-")[1]);
        $('.codarticulo').val(val.split("-")[0]);
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


</script>
