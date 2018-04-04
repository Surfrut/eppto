<!DOCTYPE html>
<html>
<head>
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/jsgrid-theme.min.css"/>
	<!-- <link type="text/css" rel="stylesheet" href="css/jsgrid.min.css"/> -->
	<link type="text/css" rel="stylesheet" href="css/cpc.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/sweetalert2.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/animate.css"  media="screen,projection"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<title>CPC</title>
</head>
<body>

	<!-- ************************************** -->
	<!-- <div class="navbar-fixed"> -->
	<nav>
		<div class="nav-wrapper">
			<a href="<?php echo base_url() ?>" class="brand-logo">Control Procesos de Calidad</a>
			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down ul_sesion">
				<li><a class="waves-effect btn_iniciarsesion" href="#">Ingresar a CPC</a></li>
			</ul>
			<ul id="mobile-demo" class="side-nav">
				<li><div class="userView">
					<div class="background">
						<img src="">
					</div>
					<a href="#!user"><img class="circle perfil_imagen" src="img/perfil.png"></a>
					<a href="#!name"><span class="black-text name perfil_nombre">Visita</span></a>
				</div></li>
				<div class="divider"></div>
				<li><a class="waves-effect btn_iniciarsesion" href="#">Ingresar a CPC</a></li>
			</ul>
		</div>
	</nav>
	<!-- ************************************** -->

	<br>
		  <div class="row center text-middle animated fadeInLeftBig oculto">
			<div class="col s12 m12 l12">
				<div class="card green lighten-3 z-depth-4">
					<div class="card-content nopadding white-text">
						<br>
							Tambien puedes entrar a visualizar la información como:&nbsp;
							<a class="waves-effect waves-light btn visita">Visita</a>
					</div>
				</div>
			</div>
	</div>

	<div class="row botones">
		<div class="col s12 m12 l12 center">
			<img src="img/controldecalidad.png" alt="">
		</div>
	</div>

	<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/materialize.js"></script>
	<!-- <script type="text/javascript" src="js/jsgrid-script.js"></script> -->
	<script type="text/javascript" src="js/jsgrid.min.js"></script>
	<script>
		var base_url = '<?php echo base_url() ?>'
	</script>
	<script src="https://www.gstatic.com/firebasejs/4.6.0/firebase.js"></script>
	<!-- <script src="https://www.gstatic.com/firebasejs/4.2.0/firebase-auth.js"></script> -->
	<script type="text/javascript" src="js/db.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
	<script type="text/javascript" src="js/sweetalert2.js"></script>

</body>
</html>
