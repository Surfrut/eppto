
function actualiza_linea(
    Id,
    Locacion,
    Articulo,
    Fecha,
    Lote,
    Referencia,
    Estado,
    Descripcion,
    Cliente,
    Nombre,
    Cantidad,
    UM,
    PH,
    Brix,
    Cons5sec,
    Cons30sec,
    Acasc,
    Acidez,
    Bar,
    Color,
    Densidad,
    Pnegros,
    Patulina,
    Ramacidos,
    Hongos,
    Levadura,
    Ecoli,
    Coliformes,
    HongosTerm,
    Salmonnela,
    Alyciclo,
    Howardm,
    Generico_1,
    Generico_2,
    Generico_3,
    Generico_4,
    Generico_5,
    Generico_6,
    Generico_7,
    Generico_8,
    Generico_9,
    Generico_10,
    Generico_11,
    Generico_12,
    Generico_13,
    Generico_14,
    Generico_15,
    Generico_16,
    Generico_17,
    Generico_18,
    Generico_19,
    Generico_20,
    Generico_21,
    Generico_22,
    Generico_23,
    Generico_24,
    Generico_25
    ){

    $.ajax({
        url: base_url+'Welcome/actualiza_linea',
        type: 'POST',
        dataType: 'json',
        data: {
            Id:Id,
            Locacion:Locacion,
            Articulo:Articulo,
            Fecha:Fecha,
            Lote:Lote,
            Referencia:Referencia,
            Estado:Estado,
            Descripcion:Descripcion,
            Cliente:Cliente,
            Nombre:Nombre,
            Cantidad:Cantidad,
            UM:UM,
            PH:PH,
            Brix:Brix,
            Cons5sec:Cons5sec,
            Cons30sec:Cons30sec,
            Acasc:Acasc,
            Acidez:Acidez,
            Bar:Bar,
            Color:Color,
            Densidad:Densidad,
            Pnegros:Pnegros,
            Patulina:Patulina,
            Ramacidos:Ramacidos,
            Hongos:Hongos,
            Levadura:Levadura,
            Ecoli:Ecoli,
            Coliformes:Coliformes,
            HongosTerm:HongosTerm,
            Salmonnela:Salmonnela,
            Alyciclo:Alyciclo,
            Howardm:Howardm,
            Generico_1:Generico_1,
            Generico_2:Generico_2,
            Generico_3:Generico_3,
            Generico_4:Generico_4,
            Generico_5:Generico_5,
            Generico_6:Generico_6,
            Generico_7:Generico_7,
            Generico_8:Generico_8,
            Generico_9:Generico_9,
            Generico_10:Generico_10,
            Generico_11:Generico_11,
            Generico_12:Generico_12,
            Generico_13:Generico_13,
            Generico_14:Generico_14,
            Generico_15:Generico_15,
            Generico_16:Generico_16,
            Generico_17:Generico_17,
            Generico_18:Generico_18,
            Generico_19:Generico_19,
            Generico_20:Generico_20,
            Generico_21:Generico_21,
            Generico_22:Generico_22,
            Generico_23:Generico_23,
            Generico_24:Generico_24,
            Generico_25:Generico_25
        },
    })
    .done(function(data) {
        console.log(data);
        console.log("success actualiza_linea");

    })
    .fail(function(data) {
        swal({
          title: 'Error al guardar los datos: '+data
      })
        console.log("error actualiza_linea");
        console.log(data);
    })
}//FIN ACTUALIZA LINEA

function elimina_linea(id){
    $.ajax({
        url: base_url+'Welcome/elimina_linea',
        type: 'POST',
        dataType: 'json',
        data: {
            id:id
        },
    })
    .done(function(data) {
        console.log(data);
        console.log(id);
        console.log("success elimina_linea");
        swal("ok");
    })
    .fail(function(data) {
        console.log(data);
        console.log("error elimina_linea");
        swal("no ok");
    })
}//FIN ELIMINA LINEA

function ingresaAnalisis(
    Locacion,
    Articulo,
    Fecha,
    Lote,
    Referencia,
    Estado,
    Descripcion,
    Cliente,
    Nombre,
    Cantidad,
    UM,
    PH,
    Brix,
    Cons5sec,
    Cons30sec,
    Acasc,
    Acidez,
    Bar,
    Color,
    Densidad,
    Pnegros,
    Patulina,
    Ramacidos,
    Hongos,
    Levadura,
    Ecoli,
    Coliformes,
    HongosTerm,
    Salmonnela,
    Alyciclo,
    Howardm,
    Generico_1,
    Generico_2,
    Generico_3,
    Generico_4,
    Generico_5,
    Generico_6,
    Generico_7,
    Generico_8,
    Generico_9,
    Generico_10,
    Generico_11,
    Generico_12,
    Generico_13,
    Generico_14,
    Generico_15,
    Generico_16,
    Generico_17,
    Generico_18,
    Generico_19,
    Generico_20,
    Generico_21,
    Generico_22,
    Generico_23,
    Generico_24,
    Generico_25
    ){

    $.ajax({
        url: base_url+'Welcome/ingresaAnalisis',
        type: 'POST',
        dataType: 'json',
        data: {
            Locacion:Locacion,
            Articulo:Articulo,
            Fecha:Fecha,
            Lote:Lote,
            Referencia:Referencia,
            Estado:Estado,
            Descripcion:Descripcion,
            Cliente:Cliente,
            Nombre:Nombre,
            Cantidad:Cantidad,
            UM:UM,
            PH:PH,
            Brix:Brix,
            Cons5sec:Cons5sec,
            Cons30sec:Cons30sec,
            Acasc:Acasc,
            Acidez:Acidez,
            Bar:Bar,
            Color:Color,
            Densidad:Densidad,
            Pnegros:Pnegros,
            Patulina:Patulina,
            Ramacidos:Ramacidos,
            Hongos:Hongos,
            Levadura:Levadura,
            Ecoli:Ecoli,
            Coliformes:Coliformes,
            HongosTerm:HongosTerm,
            Salmonnela:Salmonnela,
            Alyciclo:Alyciclo,
            Howardm:Howardm,
            Generico_1:Generico_1,
            Generico_2:Generico_2,
            Generico_3:Generico_3,
            Generico_4:Generico_4,
            Generico_5:Generico_5,
            Generico_6:Generico_6,
            Generico_7:Generico_7,
            Generico_8:Generico_8,
            Generico_9:Generico_9,
            Generico_10:Generico_10,
            Generico_11:Generico_11,
            Generico_12:Generico_12,
            Generico_13:Generico_13,
            Generico_14:Generico_14,
            Generico_15:Generico_15,
            Generico_16:Generico_16,
            Generico_17:Generico_17,
            Generico_18:Generico_18,
            Generico_19:Generico_19,
            Generico_20:Generico_20,
            Generico_21:Generico_21,
            Generico_22:Generico_22,
            Generico_23:Generico_23,
            Generico_24:Generico_24,
            Generico_25:Generico_25
        },
    })
    .done(function(data) {
        console.log(data);
        console.log("success ingresaAnalisis");
    })
    .fail(function(data) {
        console.log(data);
        console.log("error ingresaAnalisis");
    })
}//FIN INGRESA ANALISIS

(function() {
    let data_
    var db = {
        loadData: function(filter) {
            return $.grep(this.analisis, function(analisis) {
                return (!filter.pre_id || analisis.pre_id == filter.pre_id)
                    && (!filter.pre_dominio || analisis.pre_dominio.toUpperCase().indexOf(filter.pre_dominio.toUpperCase())>=0)
                    && (!filter.pre_ano || analisis.pre_ano == filter.pre_ano)
                    && (!filter.pre_articulo || analisis.pre_articulo.toUpperCase().indexOf(filter.pre_articulo.toUpperCase())>=0)
                    && (!filter.pre_descripcion_a || analisis.pre_descripcion_a.toUpperCase().indexOf(filter.pre_descripcion_a.toUpperCase())>=0)
                    && (!filter.pre_familia || analisis.pre_familia.toUpperCase().indexOf(filter.pre_familia.toUpperCase())>=0)
                    && (!filter.pre_clase || analisis.pre_clase.toUpperCase().indexOf(filter.pre_clase.toUpperCase())>=0)
                    && (!filter.pre_variedad || analisis.pre_variedad.toUpperCase().indexOf(filter.pre_variedad.toUpperCase())>=0)
                    && (!filter.pre_cliente || analisis.pre_cliente.toUpperCase().indexOf(filter.pre_cliente.toUpperCase())>=0)
                    && (!filter.pre_descripcion_c || analisis.pre_descripcion_c.toUpperCase().indexOf(filter.pre_descripcion_c.toUpperCase())>=0)
                    && (!filter.pre_ship || analisis.pre_ship.toUpperCase().indexOf(filter.pre_ship.toUpperCase())>=0)
                    && (!filter.pre_descripcion_s || analisis.pre_descripcion_s.toUpperCase().indexOf(filter.pre_descripcion_s.toUpperCase())>=0)
                    && (!filter.pre_canal || analisis.pre_canal.toUpperCase().indexOf(filter.pre_canal.toUpperCase())>=0)
                    && (!filter.pre_cant1 || analisis.pre_cant1 == filter.pre_cant1)
                    && (!filter.pre_cant2 || analisis.pre_cant2 == filter.pre_cant2)
                    && (!filter.pre_cant3 || analisis.pre_cant3 == filter.pre_cant3)
                    && (!filter.pre_cant4 || analisis.pre_cant4 == filter.pre_cant4)
                    && (!filter.pre_cant5 || analisis.pre_cant5 == filter.pre_cant5)
                    && (!filter.pre_cant6 || analisis.pre_cant6 == filter.pre_cant6)
                    && (!filter.pre_cant7 || analisis.pre_cant7 == filter.pre_cant7)
                    && (!filter.pre_cant8 || analisis.pre_cant8 == filter.pre_cant8)
                    && (!filter.pre_cant9 || analisis.pre_cant9 == filter.pre_cant9)
                    && (!filter.pre_cant10 || analisis.pre_cant10 == filter.pre_cant10)
                    && (!filter.pre_cant11 || analisis.pre_cant11 == filter.pre_cant11)
                    && (!filter.pre_cant12 || analisis.pre_cant12 == filter.pre_cant12)
                    && (!filter.pre_cant13 || analisis.pre_cant13 == filter.pre_cant13)
                    && (!filter.pre_cant14 || analisis.pre_cant14 == filter.pre_cant14)
                    && (!filter.pre_cant15 || analisis.pre_cant15 == filter.pre_cant15)
                    && (!filter.pre_cant16 || analisis.pre_cant16 == filter.pre_cant16)
                    && (!filter.pre_cant17 || analisis.pre_cant17 == filter.pre_cant17)
                    && (!filter.pre_cant18 || analisis.pre_cant18 == filter.pre_cant18)
                    && (!filter.pre_cant19 || analisis.pre_cant19 == filter.pre_cant19)
                    && (!filter.pre_cant10 || analisis.pre_cant10 == filter.pre_cant10)
                    && (!filter.pre_cant21 || analisis.pre_cant21 == filter.pre_cant21)
                    && (!filter.pre_cant22 || analisis.pre_cant22 == filter.pre_cant22)
                    && (!filter.pre_cant23 || analisis.pre_cant23 == filter.pre_cant23)
                    && (!filter.pre_cant24 || analisis.pre_cant24 == filter.pre_cant24)
                    && (!filter.pre_cant25 || analisis.pre_cant25 == filter.pre_cant25)
                    && (!filter.pre_cant26 || analisis.pre_cant26 == filter.pre_cant26)
                    && (!filter.pre_cant27 || analisis.pre_cant27 == filter.pre_cant27)
                    && (!filter.pre_cant28 || analisis.pre_cant28 == filter.pre_cant28)
                    && (!filter.pre_cant29 || analisis.pre_cant29 == filter.pre_cant29)
                    && (!filter.pre_cant30 || analisis.pre_cant30 == filter.pre_cant30)
                    && (!filter.pre_cant31 || analisis.pre_cant31 == filter.pre_cant31)
                    && (!filter.pre_cant32 || analisis.pre_cant32 == filter.pre_cant32)
                    && (!filter.pre_cant33 || analisis.pre_cant33 == filter.pre_cant33)
                    && (!filter.pre_cant34 || analisis.pre_cant34 == filter.pre_cant34)
                    && (!filter.pre_cant35 || analisis.pre_cant35 == filter.pre_cant35)
                    && (!filter.pre_cant36 || analisis.pre_cant36 == filter.pre_cant36)
            });
},

insertItem: function(insertinganalisis) {
    this.analisis.push(insertinganalisis);

    console.log(insertinganalisis);
    console.log(JSON.stringify(insertinganalisis));

    let datos = JSON.stringify(insertinganalisis);

    swal({
      title: '¿Ingresar analisis?',
      type: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'aceptar!'
  }).then(function () {

      swal(
        'Ingresado!',
        'Nuevo analisis ingresado.',
        'success'
        )


      ingresaAnalisis(
        insertinganalisis.ID,
        insertinganalisis.Año,
        insertinganalisis.Articulo,
        insertinganalisis.Descripcion,
        insertinganalisis.IDClient,
        insertinganalisis.Cliente,
        insertinganalisis.Canal,
        insertinganalisis.P118,
        insertinganalisis.P218,
        insertinganalisis.P318,
        insertinganalisis.P418,
        insertinganalisis.P518,
        insertinganalisis.P618,
        insertinganalisis.P718,
        insertinganalisis.P818,
        insertinganalisis.P918,
        insertinganalisis.P1018,
        insertinganalisis.P1118,
        insertinganalisis.P1218,
        insertinganalisis.P119,
        insertinganalisis.P219,
        insertinganalisis.P319,
        insertinganalisis.P419,
        insertinganalisis.P519,
        insertinganalisis.P619,
        insertinganalisis.P719,
        insertinganalisis.P819,
        insertinganalisis.P919,
        insertinganalisis.P1019,
        insertinganalisis.P1119,
        insertinganalisis.P1219,
        insertinganalisis.P120,
        insertinganalisis.P220,
        insertinganalisis.P320,
        insertinganalisis.P420,
        insertinganalisis.P520,
        insertinganalisis.P620,
        insertinganalisis.P720,
        insertinganalisis.P820,
        insertinganalisis.P920,
        insertinganalisis.P1020,
        insertinganalisis.P1120,
        insertinganalisis.P1220
        );
  })
},

updateItem: function(updatinganalisis) {

    var analisisIndex = $.inArray(updatinganalisis, this.analisis);

    delete updatinganalisis.Total;

    datos2 = JSON.stringify(updatinganalisis);

$.ajax({
  url: base_url+'comercial/comercial_c/actualizarPresupuesto',
  type: 'POST',
  // dataType: 'json',
  data: {datos:datos2}
})
.done(function(data) {
  console.log("success comercial/actualizarPresupuesto");
  // console.log(data);
})
.fail(function(data) {
  console.log("error comercial/actualizarPresupuesto");
  console.log(data);
})


},

deleteItem: function(deletinganalisis) {

    var analisisIndex = $.inArray(deletinganalisis, this.analisis);
    console.log(deletinganalisis.Id);
    elimina_linea(
        deletinganalisis.Id
        );
}
};

window.db = db;

$.ajax({
    url: base_url+'comercial/comercial_c/listarPresupuesto',
    type: 'POST',
    dataType: 'json',
    async:false
})
.done(function(data) {
    data_ = data;
    // console.log(data_);
    console.log("success comercial_c/listarPresupuesto");
})
.fail(function(data) {
    data_ = data;
    console.log(data_);
    console.log("error comercial_c/listarPresupuesto");
})

db.analisis = data_;

}());
