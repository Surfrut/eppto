$(document).ready(function() {
	$('.preloader').hide();
	$(".button-collapse").sideNav();
	$('input.jsgrid-insert-mode-button').hide();
	validaLogin();
});

$('.visita').on('click', function(){
	window.location.href = base_url+'visita/vis_visita_c/index'
});

$('.btn_liberador').on('click', function(event) {
	console.log("Accediento a Liberador...");
	$('.botones').hide();
	$('.preloader').fadeIn(800);
	setTimeout(function(){
		window.location.href = base_url+'liberador/lib_liberar_c/index';
	}, 1200)
});

$('.btn_analista').on('click', function(event) {
	console.log("Accediento a Analistas...");
	$('.botones').hide();
	$('.preloader').fadeIn(800);
	setTimeout(function(){
		window.location.href = base_url+'analista/ana_analista_c/index';
	}, 1200)
});


  // INICIALIZA FIREBASE LOGIN GOOGLE.
  var config = {
    apiKey: "AIzaSyDB5pQK8tmSG0r_J1f7K80jMv16Ob0zyas",
    authDomain: "cpcpf-d0624.firebaseapp.com",
    databaseURL: "https://cpcpf-d0624.firebaseio.com",
    projectId: "cpcpf-d0624",
    storageBucket: "cpcpf-d0624.appspot.com",
    messagingSenderId: "332840881264"
  };
  firebase.initializeApp(config);

var provider = new firebase.auth.GoogleAuthProvider();

//BTN INICIAR SESION AL SISTEMA
$('body').on('click', '.btn_iniciarsesion', function(){
	firebase.auth().signInWithPopup(provider).then(function(result) {
	  var token = result.credential.accessToken;
	  var user = result.user;

	consultaUsuario(user.email);

	}).catch(function(error) {
	  var errorCode = error.code;
	  var errorMessage = error.message;
	  var email = error.email;
	  var credential = error.credential;
});//FIN POPUP LOGIN

});

//BTN CERRAR SESION
$('body').on('click', '.btn_cerrarsesion', function(){
cierrasesion();
});

//FUNCION CIERRA SESIÓN. DIRECCIONA AL INICIO.
function cierrasesion(){
	firebase.auth().signOut().then(function() {
	window.location.href = base_url;
}).catch(function(error) {
  // An error happened.
});
}

//FUNCION CIERRA SESIÓN. DIRECCIONA AL INICIO.
function cierrasesion1(){
	firebase.auth().signOut().then(function() {
		console.log("CERRÓ SESION cierrasesion1()");
}).catch(function(error) {
  // An error happened.
});
}


function validaLogin(){
	firebase.auth().onAuthStateChanged(function(user) {
	  if (user) {
			console.log(user.displayName);
			consultaUsuario(user.email);
			// $('.perfil_imagen').attr('src', user.photoURL);
			// $('.perfil_nombre').text(user.displayName);
			// $('div.userView').append(`<a href="#!correo"><span class="black-text name perfil_correo">${user.email}</span></a>`)
			// $('ul.ul_sesion').append(`<li><a class='waves-effect btn_cerrarsesion' href='#'><i class='material-icons' dp48>close</i>Cerrar Sesion</a></li>`)
			// $('.btn_iniciarsesion').hide();
			// $('.btn_cerrarsesion').show();
	  } else {
			console.log("NO ESTA LOGEADO");
			cierrasesion1();
	  }
	});//FIN CONSULTA LOGIN E INGRESA LA INFORMACIÓN.
}//FIN validaLogin

function consultaUsuario(correo){
	//AJAX REDIRECCIONAR AL PERFIL CORRESPONDIENTE.
	$.ajax({
		url: base_url+'index/validaLogin',
		type: 'POST',
		dataType: 'json',
		data: {
			correo:correo
		}
	})
	.done(function(data) {
		if (data == "") {
			swal({
				title: 'No estas autorizado para entrar al sistema.',
				timer: 3000
			}).then(
				function () {
					cierrasesion1();
					console.log("nada pasa CLICK");
				},
				function (dismiss) {
					if (dismiss === 'timer') {
						cierrasesion1();
						console.log("nada pasa TIMER");
					}
				}
			)//fin then
		}else{
			switch (data[0].us_perfil) {
				case "liberador":
				window.location.href = base_url+'liberador/lib_liberar_c/index';
				break;
				case "analista":
				window.location.href = base_url+'analista/ana_analista_c/index';
				break;
			}
		}
		console.log("success validaLogin");
	})//FIN DONE
	.fail(function(data) {
		console.log(data);
		console.log("error validaLogin");
	})//FIN CLICK INICIAR SESION.
}

//FUNCION QUE VALIDE USUARIO AJAX PARA LLAMAR EN EL VALIDA LOGIN Y EN CADA VISTA
