
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
}

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
}

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
}

(function() {
    let data_
    var db = {
        loadData: function(filter) {
            return $.grep(this.analisis, function(analisis) {
                return (!filter.Id || analisis.Id === filter.Id)
                && (!filter.QAD || analisis.QAD === filter.QAD)
                && (!filter.CLIENTE || analisis.CLIENTE === filter.CLIENTE)
                && (!filter.Locacion || analisis.Locacion === filter.Locacion)
                && (!filter.Articulo || analisis.Articulo === filter.Articulo)
                && (!filter.Fecha || analisis.Fecha === filter.Fecha)
                && (!filter.Lote || analisis.Lote === filter.Lote)
                && (!filter.Referencia || analisis.Referencia === filter.Referencia)
                && (!filter.Estado || analisis.Estado === filter.Estado)
                && (!filter.Descripcion || analisis.Descripcion === filter.Descripcion)
                && (!filter.Cliente || analisis.Cliente === filter.Cliente)
                && (!filter.Nombre || analisis.Nombre === filter.Nombre)
                && (!filter.Cantidad || analisis.Cantidad === filter.Cantidad)
                && (!filter.UM || analisis.UM === filter.UM)
                && (!filter.PH || analisis.PH === filter.PH)
                && (!filter.Brix || analisis.Brix === filter.Brix)
                && (!filter.Cons5sec || analisis.Cons5sec === filter.Cons5sec)
                && (!filter.Cons30sec || analisis.Cons30sec === filter.Cons30sec)
                && (!filter.Acasc || analisis.Acasc === filter.Acasc)
                && (!filter.Acidez || analisis.Acidez === filter.Acidez)
                && (!filter.Bar || analisis.Bar === filter.Bar)
                && (!filter.Color || analisis.Color === filter.Color)
                && (!filter.Densidad || analisis.Densidad === filter.Densidad)
                && (!filter.Pnegros || analisis.Pnegros === filter.Pnegros)
                && (!filter.Patulina || analisis.Patulina === filter.Patulina)
                && (!filter.Ramacidos || analisis.Ramacidos === filter.Ramacidos)
                && (!filter.Hongos || analisis.Hongos === filter.Hongos)
                && (!filter.Levadura || analisis.Levadura === filter.Levadura)
                && (!filter.Ecoli || analisis.Ecoli === filter.Ecoli)
                && (!filter.Coliformes || analisis.Coliformes === filter.Coliformes)
                && (!filter.HongosTerm || analisis.HongosTerm === filter.HongosTerm)
                && (!filter.Salmonnela || analisis.Salmonnela === filter.Salmonnela)
                && (!filter.Alyciclo || analisis.Alyciclo === filter.Alyciclo)
                && (!filter.Howardm || analisis.Howardm === filter.Howardm)
                && (!filter.Generico_1 || analisis.Generico_1 === filter.Generico_1)
                && (!filter.Generico_2 || analisis.Generico_2 === filter.Generico_2)
                && (!filter.Generico_3 || analisis.Generico_3 === filter.Generico_3)
                && (!filter.Generico_4 || analisis.Generico_4 === filter.Generico_4)
                && (!filter.Generico_5 || analisis.Generico_5 === filter.Generico_5)
                && (!filter.Generico_6 || analisis.Generico_6 === filter.Generico_6)
                && (!filter.Generico_7 || analisis.Generico_7 === filter.Generico_7)
                && (!filter.Generico_8 || analisis.Generico_8 === filter.Generico_8)
                && (!filter.Generico_9 || analisis.Generico_9 === filter.Generico_9)
                && (!filter.Generico_10 || analisis.Generico_10 === filter.Generico_10)
                && (!filter.Generico_11 || analisis.Generico_11 === filter.Generico_11)
                && (!filter.Generico_12 || analisis.Generico_12 === filter.Generico_12)
                && (!filter.Generico_13 || analisis.Generico_13 === filter.Generico_13)
                && (!filter.Generico_14 || analisis.Generico_14 === filter.Generico_14)
                && (!filter.Generico_15 || analisis.Generico_15 === filter.Generico_15)
                && (!filter.Generico_16 || analisis.Generico_16 === filter.Generico_16)
                && (!filter.Generico_17 || analisis.Generico_17 === filter.Generico_17)
                && (!filter.Generico_18 || analisis.Generico_18 === filter.Generico_18)
                && (!filter.Generico_19 || analisis.Generico_19 === filter.Generico_19)
                && (!filter.Generico_20 || analisis.Generico_20 === filter.Generico_20)
                && (!filter.Generico_21 || analisis.Generico_21 === filter.Generico_21)
                && (!filter.Generico_22 || analisis.Generico_22 === filter.Generico_22)
                && (!filter.Generico_23 || analisis.Generico_23 === filter.Generico_23)
                && (!filter.Generico_24 || analisis.Generico_24 === filter.Generico_24)
                && (!filter.Generico_25 || analisis.Generico_25 === filter.Generico_25)


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
        insertinganalisis.Locacion,
        insertinganalisis.Articulo,
        insertinganalisis.Fecha,
        insertinganalisis.Lote,
        insertinganalisis.Referencia,
        insertinganalisis.Estado,
        insertinganalisis.Descripcion,
        insertinganalisis.Cliente,
        insertinganalisis.Nombre,
        insertinganalisis.Cantidad,
        insertinganalisis.UM,
        insertinganalisis.PH,
        insertinganalisis.Brix,
        insertinganalisis.Cons5sec,
        insertinganalisis.Cons30sec,
        insertinganalisis.Acasc,
        insertinganalisis.Acidez,
        insertinganalisis.Bar,
        insertinganalisis.Color,
        insertinganalisis.Densidad,
        insertinganalisis.Pnegros,
        insertinganalisis.Patulina,
        insertinganalisis.Ramacidos,
        insertinganalisis.Hongos,
        insertinganalisis.Levadura,
        insertinganalisis.Ecoli,
        insertinganalisis.Coliformes,
        insertinganalisis.HongosTerm,
        insertinganalisis.Salmonnela,
        insertinganalisis.Alyciclo,
        insertinganalisis.Howardm,
        insertinganalisis.Generico_1,
        insertinganalisis.Generico_2,
        insertinganalisis.Generico_3,
        insertinganalisis.Generico_4,
        insertinganalisis.Generico_5,
        insertinganalisis.Generico_6,
        insertinganalisis.Generico_7,
        insertinganalisis.Generico_8,
        insertinganalisis.Generico_9,
        insertinganalisis.Generico_10,
        insertinganalisis.Generico_11,
        insertinganalisis.Generico_12,
        insertinganalisis.Generico_13,
        insertinganalisis.Generico_14,
        insertinganalisis.Generico_15,
        insertinganalisis.Generico_16,
        insertinganalisis.Generico_17,
        insertinganalisis.Generico_18,
        insertinganalisis.Generico_19,
        insertinganalisis.Generico_20,
        insertinganalisis.Generico_21,
        insertinganalisis.Generico_22,
        insertinganalisis.Generico_23,
        insertinganalisis.Generico_24,
        insertinganalisis.Generico_25
        );
  })
},

updateItem: function(updatinganalisis) {

    var analisisIndex = $.inArray(updatinganalisis, this.analisis);

    var asd = updatinganalisis.PH;
    var separado = asd.split(",");
    var separado2 = asd.split(".");
    if(separado>1 || separado2>1){
      console.log("Punto o coma: "+separado+" | "+separado2);
    }else{
      console.log("NO Punto o coma: "+separado+" | "+separado2);
    }
    // var resultado = asd.slice(-3);
    // console.log(asd.slice(-3));



    actualiza_linea(
        updatinganalisis.Id,
        updatinganalisis.Locacion,
        updatinganalisis.Articulo,
        updatinganalisis.Fecha,
        updatinganalisis.Lote,
        updatinganalisis.Referencia,
        updatinganalisis.Estado,
        updatinganalisis.Descripcion,
        updatinganalisis.Cliente,
        updatinganalisis.Nombre,
        updatinganalisis.Cantidad,
        updatinganalisis.UM,
        updatinganalisis.PH,
        updatinganalisis.Brix,
        updatinganalisis.Cons5sec,
        updatinganalisis.Cons30sec,
        updatinganalisis.Acasc,
        updatinganalisis.Acidez,
        updatinganalisis.Bar,
        updatinganalisis.Color,
        updatinganalisis.Densidad,
        updatinganalisis.Pnegros,
        updatinganalisis.Patulina,
        updatinganalisis.Ramacidos,
        updatinganalisis.Hongos,
        updatinganalisis.Levadura,
        updatinganalisis.Ecoli,
        updatinganalisis.Coliformes,
        updatinganalisis.HongosTerm,
        updatinganalisis.Salmonnela,
        updatinganalisis.Alyciclo,
        updatinganalisis.Howardm,
        updatinganalisis.Generico_1,
        updatinganalisis.Generico_2,
        updatinganalisis.Generico_3,
        updatinganalisis.Generico_4,
        updatinganalisis.Generico_5,
        updatinganalisis.Generico_6,
        updatinganalisis.Generico_7,
        updatinganalisis.Generico_8,
        updatinganalisis.Generico_9,
        updatinganalisis.Generico_10,
        updatinganalisis.Generico_11,
        updatinganalisis.Generico_12,
        updatinganalisis.Generico_13,
        updatinganalisis.Generico_14,
        updatinganalisis.Generico_15,
        updatinganalisis.Generico_16,
        updatinganalisis.Generico_17,
        updatinganalisis.Generico_18,
        updatinganalisis.Generico_19,
        updatinganalisis.Generico_20,
        updatinganalisis.Generico_21,
        updatinganalisis.Generico_22,
        updatinganalisis.Generico_23,
        updatinganalisis.Generico_24,
        updatinganalisis.Generico_25
        );

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
    url: base_url+'Welcome/listar_analisis',
    type: 'POST',
    dataType: 'json',
    async:false
})
.done(function(data) {
    data_ = data;

    console.log("success listar_analisis");
})
.fail(function(data) {
    console.log("error listar_analisis");
})

db.analisis = data_;

db.estado = [
{ Name: "", Id: 0 },
{ Name: "DISPONIB", Id: 1 },
{ Name: "CONF-INC", Id: 2 },
{ Name: "LIBERADO", Id: 3 }
];



}());
