<!DOCTYPE html>
<html>
  <head>
    <script>
      var base_url = '<?php echo base_url() ?>';
    </script>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php base_url() ?>css/sweetalert2.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?php base_url() ?>css/jsgrid-theme.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?php base_url() ?>css/jsgrid.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?php base_url() ?>css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?php base_url() ?>css/eppto.css"  media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>E. PRESUPUESTO <?php echo date('Y') ?></title>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  </head>

  <body>


    <!-- ESTRUCTURA NAVBAR -->
    <!-- ************************************** -->
    <nav>
      <div class="nav-wrapper">
        <a href="<?php echo base_url() ?>" class="brand-logo">Estimado Presupuesto de venta <?php echo date('Y') ?></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a class="waves-effect btn_iniciarsesion" href="#">Ingresar a EPPTO</a></li>
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
          <li><a class="waves-effect btn_iniciarsesion" href="#">Ingresar a EPPTO</a></li>
        </ul>
      </div>
    </nav>
    <!-- ************************************** -->

    <div class="jsGrid" id="jsGrid">
    </div>

    <!-- <button type="button" class="btn btn_actualiza jsgrid-button jsgrid-update-button"><i class="material-icons right"></i>asdasd</button> -->

    <div class="fixed-action-btn">
   <a class="btn-floating btn-large red">
     <i class="large material-icons">mode_edit</i>
   </a>
   <ul>
     <li><a class="btn-floating blue btn_descargar"><i class="material-icons">cloud_download</i></a></li>
     <li><a class="btn-floating blue btn_pptoMasivo"><i class="material-icons">add_box</i></a></li>
     <li><a class="btn-floating blue btn_nuevoPresupuesto"><i class="material-icons">add</i></a></li>
   </ul>
 </div>

<!-- ESTRUCTURA DEL MODAL AGREGAR PRESUPUESTO -->
<!-- Modal Structure -->
<div id="modal1" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4>Agregar presupuesto</h4>
    <p>Completa los campos para registrar:</p>
    <form action="" method="POST">
      <!-- CHECK PARA INGRESAR EL AÑO AL PRESUPUESTO -->
      <!-- <div class="row">
        <div class="col s3 m3 l3">
          <p>
           <input type="checkbox" class="filled-in pre_ano" id="filled-in-box" checked="checked" />
           <label for="filled-in-box">2018</label>
         </p>
       </div>
       <div class="col s3 m3 l3">
         <p>
          <input type="checkbox" class="filled-in pre_ano1" id="filled-in-box2" checked="" />
          <label for="filled-in-box2">2019</label>
        </p>
       </div>
      </div> -->
    <div class="row">
      <div class="input-field col s6">
        <div class="progress progress2">
          <div class="indeterminate"></div>
        </div>
        <div class="input_descripcion">
          <label class="control-label" for="icon_prefix">Articulo</label>
          <input type="text" class="form-control autocomplete codarticulo pre_articulo" id="icon_prefix">
        </div>
      </div>
      <div class="input-field col s6">
        <div class="form-group">
          <label class="control-label" for="icon_prefix">Descripción</label>
          <input type="text" class="form-control input_description pre_descripcion_a" id="icon_prefix" placeholder=" ">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <div class="progress progress1">
          <div class="indeterminate"></div>
        </div>
        <div class="input_cliente">
          <label for="autocomplete-input">Cliente</label>
          <input type="text" id="autocomplete-input" class="autocomplete codcliente pre_cliente">
        </div>
      </div>
      <div class="input-field col s6">
        <div class="form-group">
          <label class="control-label" for="icon_prefix">IDCliente</label>
          <input type="text" class="form-control id_cliente pre_descripcion_c" id="icon_prefix" placeholder=" ">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <div class="form-group">
          <label class="control-label" for="icon_prefix">Canal</label>
          <input type="text" class="form-control pre_canal" id="icon_prefix" required="" >
        </div>
      </div>
      <div class="input-field col s6">
        <div class="form-group">
          <label class="control-label" for="icon_prefix">Ene 2018</label>
          <input type="text" class="form-control pre_cant1" id="icon_prefix" >
        </div>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <div class="form-group">
          <label class="control-label" for="icon_prefix">Feb 2018</label>
          <input type="text" class="form-control pre_cant2" id="icon_prefix" >
        </div>
      </div>
      <div class="input-field col s6">
        <div class="form-group">
          <label class="control-label" for="icon_prefix">Mar 2018</label>
          <input type="text" class="form-control pre_cant3" id="icon_prefix" >
        </div>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <div class="form-group">
          <label class="control-label" for="icon_prefix">Abr 2018</label>
          <input type="text" class="form-control pre_cant4" id="icon_prefix" >
        </div>
      </div>
      <div class="input-field col s6">
        <div class="form-group">
          <label class="control-label" for="icon_prefix">May 2018</label>
          <input type="text" class="form-control pre_cant5" id="icon_prefix" >
        </div>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <div class="form-group">
          <label class="control-label" for="icon_prefix">Jun 2018</label>
          <input type="text" class="form-control pre_cant6" id="icon_prefix" >
        </div>
      </div>
      <div class="input-field col s6">
        <div class="form-group">
          <label class="control-label" for="icon_prefix">Jul 2018</label>
          <input type="text" class="form-control pre_cant7" id="icon_prefix" >
        </div>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <div class="form-group">
          <label class="control-label" for="icon_prefix">Ago 2018</label>
          <input type="text" class="form-control pre_cant8" id="icon_prefix" >
        </div>
      </div>
      <div class="input-field col s6">
        <div class="form-group">
          <label class="control-label" for="icon_prefix">Sep 2018</label>
          <input type="text" class="form-control pre_cant9" id="icon_prefix" >
        </div>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <div class="form-group">
          <label class="control-label" for="icon_prefix">Oct 2018</label>
          <input type="text" class="form-control pre_cant10" id="icon_prefix" >
        </div>
      </div>
      <div class="input-field col s6">
        <div class="form-group">
          <label class="control-label" for="icon_prefix">Nov 2018</label>
          <input type="text" class="form-control pre_cant11" id="icon_prefix" >
        </div>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <div class="form-group">
          <label class="control-label" for="icon_prefix">Dic 2018</label>
          <input type="text" class="form-control pre_cant12" id="icon_prefix" >
        </div>
      </div>
      <div class="input-field col s6">
        <div class="form-group">
          <label class="control-label" for="icon_prefix">Ene 2019</label>
          <input type="text" class="form-control pre_cant13" id="icon_prefix" >
        </div>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <div class="form-group">
          <label class="control-label" for="icon_prefix">Feb 2019</label>
          <input type="text" class="form-control pre_cant14" id="icon_prefix" >
        </div>
      </div>
      <div class="input-field col s6">
        <div class="form-group">
          <label class="control-label" for="icon_prefix">Mar 2019</label>
          <input type="text" class="form-control pre_cant15" id="icon_prefix" >
        </div>
      </div>
    </div>


      <!-- <button type="submit" class="btn">Submit</button> -->
    </form>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat btn_cancelar">Cancelar</a>
    <a href="#!" class="modal-action waves-effect waves-green btn-flat btn_aceptar">Aceptar</a>
  </div>
</div>

<!-- ESTRUCTURA DEL MODAL AGREGAR PRESUPUESTO  -->

<!-- ESTRUCTURA MODAL CARGA MASIVA -->
<div id="modal1" class="modal modal_cargaMasiva">
  <div class="modal-content ">
    <div class="mod_preloader center">
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
    </div>
    <div class="mod_contenido">
      <h4>Selecciona el archivo del Presupuesto</h4>
      <form action="#" class="formulario_archivo" enctype="multipart/form-data" name="mi_archivo">
        <div class="file-field input-field">
          <div class="btn color_eppto">
            <span>Archivo</span>
            <input type="file" name="mi_archivo">
          </div>
          <div class="file-path-wrapper ">
            <input class="file-path validate txt_archivo" type="text" value="">
          </div>
        </div>
      </form>
      <div class="right">
        <br>
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
        <a href="#!" class="modal-action waves-effect waves-green btn btn_cargarMasivo color_eppto">Cargar</a>
        <br>
        <br>
      </div>
    </div>
  </div>
</div>
<!-- ESTRUCTURA MODAL CARGA MASIVA -->


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="<?php base_url() ?>js/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="<?php base_url() ?>js/materialize.js"></script>
    <script type="text/javascript" src="<?php base_url() ?>js/sweetalert2.js"></script>
    <script type="text/javascript" src="<?php base_url() ?>js/jsgrid.min.js"></script>
    <script type="text/javascript" src="<?php base_url() ?>js/db.js"></script>
    <script type="text/javascript" src="<?php base_url() ?>js/comercial/comercial_j.js"></script>
    <script type="text/javascript" src="<?php base_url() ?>js/comercial/com_carga_j.js"></script>

  </body>
</html>
