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
    <link type="text/css" rel="stylesheet" href="<?php base_url() ?>css/materialize.css"  media="screen,projection"/> <!-- 0.98 -->
    <!-- <link type="text/css" rel="stylesheet" href="<?php base_url() ?>css/materialize1.css"  media="screen,projection"/> 1.0 -->
    <link type="text/css" rel="stylesheet" href="<?php base_url() ?>css/eppto.css"  media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>E. PRESUPUESTO <?php echo date('Y') ?></title>

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
          <li><a class="waves-effect btn_descargaTemplate" href="#">Descarga Template</a></li>
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
          <li><a class="waves-effect btn_descargaTemplate" href="#">Descarga Template</a></li>
        </ul>
      </div>
    </nav>
    <!-- ************************************** -->

    <div class="jsGrid" id="jsGrid">
    </div>

     <div class="overlay-trigger">

  <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large blue">
      <i class="large material-icons">menu</i>
    </a>
    <ul>
      <li>
        <span class="mobile-fab-tip">Descargar Estimado</span>
        <a href="#" class="btn-floating tooltipped blue btn_tst btn_descargafiltro estimado" data-position="left" data-tooltip="Descargar Estimado">
          <i class="material-icons">cloud_download</i>
        </a>
      </li>
      <li>
        <span class="mobile-fab-tip">Descargar Estimado/Despacho</span>
        <a href="#" class="btn-floating tooltipped blue btn_descargar btn_descargafiltro estimadoDespachado" data-position="left" data-tooltip="Descargar Estimado/Despacho">
          <i class="material-icons">arrow_drop_down_circle</i>
        </a>
      </li>
      <li>
        <span class="mobile-fab-tip">Cargar Estimado</span>
        <a href="#" class="btn-floating darken-1 tooltipped blue btn_pptoMasivo" data-position="left" data-tooltip="Cargar Estimado">
          <i class="material-icons">file_upload</i>
        </a>
      </li>
      <li>
        <span class="mobile-fab-tip">Ingresar Manual</span>
        <a href="#" class="btn-floating tooltipped blue btn_nuevoPresupuesto" data-position="left" data-tooltip="Ingresar Manual">
          <i class="material-icons">add</i>
        </a>
      </li>
    </ul>
  </div>
</div>

<!-- ESTRUCTURA DEL MODAL AGREGAR PRESUPUESTO -->
<div id="modal1" class="modal modal-fixed-footer modal_agregar">
  <div class="modal-content">
    <h4>Agregar presupuesto</h4>
    <p>Completa los campos para registrar:</p>
    <form action="" method="POST">
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
  <div class="modal-content modal_contenido">
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
          <div class="row">
            <div class="col m6">
              <p>
                <input class="with-gap" name="surfrut" type="radio" id="test1" value="SURFRUT - RETAIL"/>
                <label for="test1">SURFRUT - RETAIL</label>
              </p>
              <p>
                <input class="with-gap" name="surfrut" type="radio" id="test2" value="SURFRUT - INGREDIENTES"/>
                <label for="test2">SURFRUT - INGREDIENTES</label>
              </p>
              <p>
                <input class="with-gap" name="surfrut" type="radio" id="test3" value="SURFRUT - MARRASCHINO"/>
                <label for="test3">SURFRUT - MARRASCHINO</label>
              </p>
            </div>
            <div class="col m6">
              <p>
                <input class="with-gap" name="surfrut" type="radio" id="test4" value="PUREFRUIT - DOYPACK"/>
                <label for="test4">PUREFRUIT - DOYPACK</label>
              </p>
              <p>
                <input class="with-gap" name="surfrut" type="radio" id="test5" value="PUREFRUIT - BULK"/>
                <label for="test5">PUREFRUIT - BULK</label>
              </p>
            </div>
          </div>
        </div>
        <div class="file-field input-field" style="display: none;" id="campodelArchivo">
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
    </div>
  </div>
</div>
<!-- ESTRUCTURA MODAL CARGA MASIVA -->

<!-- ESTRUCTURA MODAL CARGA ARCHIVO -->
<div id="modal5" class="modal mod_errorCarga">
  <div class="modal-content ">
    <h4 class="center">Se canceló la carga del Presupuesto</h4>
    <p class="center">Favor revisar estos códigos ya que no existen en QAD e intentar nuevamente</p>
    <div class="collection mod_error">
    </div>
    <div class="right">
      <button type="button" class="btn modal-close"><i class="material-icons right"></i>Aceptar</button>
      <br><br>
    </div>
  </div>
</div>
<!-- ESTRUCTURA MODAL CARGA ARCHIVO -->

<div id="modal1" class="modal modal_descarga">
  <div class="modal-content">
    <h4>Prepara la descarga</h4>
    <div class="divider"></div>
<div class="row">
  <div class="col s6 m6 l6">
    <p class="center">SURFRUT</p>
    <p class="p_sf">
      <input name="group1" type="checkbox" id="id3" value="SURFRUT-RETAIL"/>
      <label for="id3">SURFRUT - RETAIL</label>&nbsp;&nbsp;
    </p>
    <p>
      <input name="group2" type="checkbox" id="id5" value="SURFRUT-MARRASCHINO"/>
      <label for="id5">SURFRUT - MARRASCHINO</label>
    </p>
    <p>
      <input name="group3" type="checkbox" id="id4" value="SURFRUT-INGREDIENTES"/>
     <label for="id4">SURFRUT - INGREDIENTES</label>
    </p>
  </div>
  <div class="col s6 m6 l6">
    <p class="center">PUREFRUIT</p>
    <p class="p_pf">
      <input name="group4" type="checkbox" id="id6" value="PUREFRUIT-DOYPACK"/>
      <label for="id6">PUREFRUIT - DOYPACK</label>&nbsp;&nbsp;
    </p>
    <p>
      <input name="group5" type="checkbox" id="id7" value="PUREFRUIT-BULK"/>
      <label for="id7">PUREFRUIT - BULK</label>
    </p>
  </div>
</div>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat btn_descargafiltrado color_eppto">Descargar</a>
  </div>
</div>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="<?php base_url() ?>js/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="<?php base_url() ?>js/materialize.js"></script> <!-- 0.98 -->
    <!-- <script type="text/javascript" src="<?php base_url() ?>js/materialize1.js"></script> 1.0-->
    <script type="text/javascript" src="<?php base_url() ?>js/sweetalert2.js"></script>
    <script type="text/javascript" src="<?php base_url() ?>js/jsgrid.min.js"></script>
    <script type="text/javascript" src="<?php base_url() ?>js/db.js"></script>
    <script type="text/javascript" src="<?php base_url() ?>js/comercial/comercial_j.js"></script>
    <script type="text/javascript" src="<?php base_url() ?>js/comercial/com_carga_j.js"></script>
    <script type="text/javascript" src="<?php base_url() ?>js/eppto.js"></script>

  </body>
</html>
