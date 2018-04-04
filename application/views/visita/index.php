<!DOCTYPE html>
<html>
  <head>
    <script>
      var base_url = '<?php echo base_url() ?>'
    </script>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php base_url() ?>../../css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?php base_url() ?>../../css/jsgrid-theme.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?php base_url() ?>../../css/jsgrid.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?php base_url() ?>../../css/cpc.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?php base_url() ?>../../css/sweetalert2.css"  media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Purefruit | Calidad</title>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  </head>

  <body>
    <!-- ESTRUCTURA NAVBAR -->
    <!-- ************************************** -->
    <nav>
      <div class="nav-wrapper">
        <a href="<?php echo base_url() ?>" class="brand-logo">Control Procesos de Calidad</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a class="waves-effect btn_iniciarsesion" href="#">Ingresar a CPC</a></li>
          <li><a class='dropdown-button dropnav' href='#!' data-activates='dropdown1'></a></li>
        </ul>
        <ul id="mobile-demo" class="side-nav ul_sesion">
          <li><div class="userView">
            <div class="background">
            </div>
            <a href="#!user"><img class="perfil_imagen" src="<?php echo base_url() ?>img/purefruit.png"></a>
            <a href="#!name"><span class="black-text name perfil_nombre">Visita</span></a>
          </div></li>
          <div class="divider"></div>
          <li><a class="waves-effect btn_iniciarsesion" href="#">Ingresar a CPC</a></li>
        </ul>
      </div>
    </nav>
    <!-- ************************************** -->

    <div class="jsGrid" id="jsGrid">
    </div>

    <!-- BUTTON FLOAT PARA DESCARGAR-->
    <!-- BUTTON FLOAT -->
    <div class="fixed-action-btn ">
    <a class="btn-floating btn-large green">
      <i class="large material-icons">menu</i>
    </a>
    <ul>
      <!-- <li><a class="btn-floating orange btn_menu"><i class="material-icons">report</i></a></li> -->
      <li><a class="btn-floating blue btn_data"><i class="material-icons">archive</i></a></li>
      <li><a class="btn-floating red btn_csv"><i class="material-icons">file_download</i></a></li>
      <!-- <li><a class="btn-floating yellow darken-1 btn_agregar"><i class="material-icons">add</i></a></li> -->
    </ul>
  </div>
    <!-- BUTTON FLOAT PARA DESCARGAR-->

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="<?php base_url() ?>../../js/jquery-3.1.1.js"></script>
  	<script type="text/javascript" src="<?php base_url() ?>../../js/materialize.js"></script>
  	<script type="text/javascript" src="<?php base_url() ?>../../js/jsgrid.min.js"></script>
  	<script type="text/javascript" src="<?php base_url() ?>../../js/db.js"></script>
  	<script src="https://www.gstatic.com/firebasejs/4.6.0/firebase.js"></script>
  	<script type="text/javascript" src="<?php base_url() ?>../../js/vis_visita_j.js"></script>
  	<script type="text/javascript" src="<?php base_url() ?>../../js/sweetalert2.js"></script>
  </body>
</html>
