$(".button-collapse").sideNav();

$('.btn_csv').on('click', function() {

	swal({
	title: '¿Descargar?',
	text: "Descargaras solo los datos que estan en pantalla!",
	type: 'question',
	showCancelButton: true,
	confirmButtonColor: '#00695C',
	cancelButtonColor: '#d33',
	confirmButtonText: 'Descargar'
}).then((result) => {
	exportTableToCSV();
})

});//FIN BTN QUE DESCARGA

//FUNCIONES QUE EXPORTAN LO QUE EL USUARIO ESTA VIENDO A EXCEL
function exportTableToCSV(filename) {

	var f = new Date();
	var dd = f.getDay();
	var mm = (f.getMonth() + 1);
	var yy = f.getFullYear();
	var hh = f.getHours();
	var ii = f.getMinutes();
	var ss = f.getSeconds();

	var csv = [];
	var rows = document.querySelectorAll("table.test tr");
  csv.push("#;QAD;Cliente;Locacion;Articulo;Fecha;Lote;Referencia;Estado;Descripcion;Cliente;Nombre;Cantidad;UM;PH;Brix;Cons5sec;Cons30sec;Acasc;Acidez;Bar;Color;Densidad;Pnegros;Patulina;Ramacidos;Hongos;Levadura;Ecoli;Califormes;HongosTerm;Salmonnela;Alyciclo;Howardm;Generico_1;Generico_2;Generico_3;Generico_4;Generico_5;Generico_6;Generico_7;Generico_8;Generico_9;Generico_10;Generico_11;Generico_12;Generico_13;Generico_14;Generico_15;Generico_16;Generico_17;Generico_18;Generico_19;Generico_20;Generico_21;Generico_22;Generico_23;Generico_24;Generico_25");


	for (var i = 0; i < rows.length; i++) {
		var row = [],
			cols = rows[i].querySelectorAll("td.csv, th.csv");

		for (var j = 0; j < cols.length; j++) {
			row.push(cols[j].innerText);
		}

		csv.push(row.join(";"));
	}
	// Download CSV file
	downloadCSV(csv.join("\n"), dd + "-" + mm + "-" + yy + " " + hh + ":" + ii + ":" + ss + ".csv");
}

function downloadCSV(csv, filename) {
	var csvFile;
	var downloadLink;
	// CSV file
	csvFile = new Blob([csv], {
		type: "text/csv"
	});
	// Download link
	downloadLink = document.createElement("a");
	// File name
	downloadLink.download = filename;
	// Create a link to the file
	downloadLink.href = window.URL.createObjectURL(csvFile);
	// Hide download link
	downloadLink.style.display = "none";
	// Add the link to DOM
	document.body.appendChild(downloadLink);
	// Click download link
	downloadLink.click();
}
//FUNCIONES QUE EXPORTAN LO QUE EL USUARIO ESTA VIENDO A EXCEL

$("#jsGrid").jsGrid({

  height: "800px",
  width: "100%",
  align: "center",
  paging: true,

  editButton: false,
  deleteButton: false,
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
    pagerFormat: "Página: {pageIndex} &nbsp;&nbsp; {first} {prev} {pages} {next} {last} &nbsp;&nbsp; total Analisis: {itemCount}",
    pagePrevText: "<",
    pageNextText: ">",
    pageFirstText: "<<",
    pageLastText: ">>",

    pageSize: 100,
    pageButtonCount: 5,

    deleteconfirm: "borrar?",


    controller: db,

        fields: [
        {
          name: "Id",
          title: "#",
          type: "number",
          sorting: true,
          editing: false,
          width: 40,
          css: "php csv check_ingresado id"
        }, {
          name: "QAD",
          title: "QAD",
          type: "number",
          sorting: true,
          editing: false,
          width: 40,
          css: "qad csv check_ingresado"
        }, {
          name: "CLIENTE",
          title: "CLIENTE",
          type: "number",
          sorting: true,
          editing: false,
          width: 70,
          css: "qad csv check_ingresado"
        }, {
          name: "Locacion",
          title: "Locacion",
          type: "text",
          editing: false,
          css: "qad csv check_ingresado"
        }, {
          name: "Articulo",
          title: "Articulo",
          type: "text",
          sorting: true,
          css: "qad csv check_ingresado",
          width: 150,
          editing: false
        }, {
          name: "Fecha",
          title: "Fecha",
          type: "text",
          editing: false,
          css: "qad csv check_ingresado"
        }, {
          name: "Lote",
          title: "Lote",
          type: "text",
          css: "qad csv check_ingresado",
          editing: false
        }, {
          name: "Referencia",
          title: "Referencia",
          type: "text",
          css: "qad csv check_ingresado",
          editing: false
        }, {
          name: "Estado",
          title: "Estado",
          type: "text",
          css: "qad csv check_ingresado",
          editing: false
        }, {
          name: "Descripcion",
          title: "Descripcion",
          type: "text",
          css: "qad csv check_ingresado",
          editing: false,
          width: 300
        }, {
          name: "Cliente",
          title: "Cliente",
          type: "text",
          css: "qad csv check_ingresado",
          editing: false
        }, {
          name: "Nombre",
          title: "Nombre",
          type: "text",
          editing: false,
          css: "qad csv check_ingresado"
        }, {
          name: "Cantidad",
          title: "Cantidad",
          type: "text",
          editing: false,
          css: "qad csv check_ingresado",
          sorting: true
        }, {
          name: "UM",
          title: "UM",
          type: "text",
          css: "qad csv check_ingresado",
          editing: false
        }, {
          name: "PH",
          title: "PH",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        }, {
          name: "Brix",
          title: "Brix",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        }, {
          name: "Cons5sec",
          title: "Cons5sec",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        }, {
          name: "Cons30sec",
          title: "Cons30sec",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        }, {
          name: "Acasc",
          title: "Acasc",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        }, {
          name: "Acidez",
          title: "Acidez",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        }, {
          name: "Bar",
          title: "Bar",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        }, {
          name: "Color",
          title: "Color",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        }, {
          name: "Densidad",
          title: "Densidad",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        }, {
          name: "Pnegros",
          title: "Pnegros",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        }, {
          name: "Patulina",
          title: "Patulina",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        }, {
          name: "Ramacidos",
          title: "Ramacidos",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        }, {
          name: "Hongos",
          title: "Hongos",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        }, {
          name: "Levadura",
          title: "Levadura",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        }, {
          name: "Ecoli",
          title: "Ecoli",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        }, {
          name: "Coliformes",
          title: "Coliformes",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        }, {
          name: "HongosTerm",
          title: "HongosTerm",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        }, {
          name: "Salmonnela",
          title: "Salmonnela",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        }, {
          name: "Alyciclo",
          title: "Alyciclo",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        }, {
          name: "Howardm",
          title: "Howardm",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        }, {
          name: "Generico_1",
          title: "Generico_1",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        }, {
          name: "Generico_2",
          title: "Generico_2",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        }, {
          name: "Generico_3",
          title: "Generico_3",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        }, {
          name: "Generico_4",
          title: "Generico_4",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        }, {
          name: "Generico_5",
          title: "Generico_5",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        }, {
          name: "Generico_6",
          title: "Generico_6",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        }, {
          name: "Generico_7",
          title: "Generico_7",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        }, {
          name: "Generico_8",
          title: "Generico_8",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        }, {
          name: "Generico_9",
          title: "Generico_9",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        },
        {
          name: "Generico_10",
          title: "Generico_10",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        },
        {
          name: "Generico_11",
          title: "Generico_11",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        },
        {
          name: "Generico_12",
          title: "Generico_12",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        },
        {
          name: "Generico_13",
          title: "Generico_13",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        },
        {
          name: "Generico_14",
          title: "Generico_14",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        },
        {
          name: "Generico_15",
          title: "Generico_15",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        },
        {
          name: "Generico_16",
          title: "Generico_16",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        },
        {
          name: "Generico_17",
          title: "Generico_17",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        },
        {
          name: "Generico_18",
          title: "Generico_18",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        },
        {
          name: "Generico_19",
          title: "Generico_19",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        },
        {
          name: "Generico_20",
          title: "Generico_20",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        },
        {
          name: "Generico_21",
          title: "Generico_21",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        },
        {
          name: "Generico_22",
          title: "Generico_22",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        },
        {
          name: "Generico_23",
          title: "Generico_23",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        },
        {
          name: "Generico_24",
          title: "Generico_24",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        },
        {
          name: "Generico_25",
          title: "Generico_25",
          type: "text",
          editing: false,
          css: "php csv check_ingresado"
        }
]
});

$('.jsgrid-grid-body').children().addClass('test');
