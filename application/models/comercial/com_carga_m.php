<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class com_carga_m extends CI_Model{

  public function __construct(){
    parent::__construct();
  }

  function consultaArticulo($articulo){
    $qad = $this->load->database('qad', TRUE);
    $articulo = json_decode($articulo, true);
    $tipo_archivo = array_pop($articulo);

    for ($i=1; $i < count($articulo); $i++) {
      $encontrado = false;
      $datos = array();
      $valor = $articulo[$i]['m'];
      $query = "select pt_part from pub.pt_mstr where pt_part = '$valor' with (nolock)";
      $execute = odbc_exec($qad->conn_id, $query);
      while (odbc_fetch_array($execute)) {
        $encontrado = true;
      }
      if (!$encontrado) {
        array_push($datos,$valor);
      }
    }//FIN FOR

    return $datos;
    // return false;
  }//FIN FUNCTION

  function insertaPresupuesto($datos_confirmados){
    date_default_timezone_set('Chile/Continental');
    $datos_confirmados = json_decode($datos_confirmados);
    $tipo_archivo = array_pop($datos_confirmados);
    // var_dump($tipo_archivo);
    //HACE EL INSERT A LA TABLA CARGAR
    for ($i=0; $i < count($tipo_archivo); $i++) {
      $datos = array('car_categoria' => $tipo_archivo->car_categoria, 'car_hora' => $tipo_archivo->car_hora, 'car_fecha' => $tipo_archivo->car_fecha);
      $insert = $this->db->insert('carga', $datos);
    }
    //HACE EL INSERT A LA TABLA PRESUPUESTO
    for ($i=1; $i < count($datos_confirmados); $i++) {
      $fecha2 = date($format = "Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($datos_confirmados[$i]->e));
      $nuevafecha = strtotime('+1 day',strtotime($fecha2));
      $nuevafecha = date('Y-m-d',$nuevafecha);
      $fechaArchivo = date('Y-m-d');
      $datos = array('pre_ano' => 2018,
      'pre_articulo' => $datos_confirmados[$i]->m,
      'pre_cant1' => $datos_confirmados[$i]->t,
      'pre_cant3' => $datos_confirmados[$i]->v,
      'pre_cant4' => $datos_confirmados[$i]->w,
      'pre_cant5' => $datos_confirmados[$i]->x,
      'pre_cant6' => $datos_confirmados[$i]->y,
      'pre_cant7' => $datos_confirmados[$i]->z,
      'pre_cant8' => $datos_confirmados[$i]->aa,
      'pre_cant9' => $datos_confirmados[$i]->ab,
      'pre_cant10' => $datos_confirmados[$i]->ac,
      'pre_cant11' => $datos_confirmados[$i]->ad,
      'pre_total_anual' => $datos_confirmados[$i]->af,
      'pre_cant12' => $datos_confirmados[$i]->ae,
      'pre_cant13' => $datos_confirmados[$i]->ag,
      'pre_cant14' => $datos_confirmados[$i]->ah,
      'pre_cant15' => $datos_confirmados[$i]->ai,
      'pre_cant16' => $datos_confirmados[$i]->aj,
      'pre_cant17' => $datos_confirmados[$i]->ak,
      'pre_cant18' => $datos_confirmados[$i]->al,
      'pre_cant19' => $datos_confirmados[$i]->am,
      'pre_cant20' => $datos_confirmados[$i]->an,
      'pre_cant21' => $datos_confirmados[$i]->ao,
      'pre_cant22' => $datos_confirmados[$i]->ap,
      'pre_cant23' => $datos_confirmados[$i]->aq,
      'pre_cant24' => $datos_confirmados[$i]->ar,
      'pre_dominio' => $datos_confirmados[$i]->b,
      'pre_clase' => $datos_confirmados[$i]->r,
      'pre_variedad' => $datos_confirmados[$i]->o,
      'pre_ship' => $datos_confirmados[$i]->k,
      'pre_descripcion_s' => $datos_confirmados[$i]->l,
      'pre_canal' => $datos_confirmados[$i]->p,
      'pre_cliente' => $datos_confirmados[$i]->g,
      'pre_cant2' => $datos_confirmados[$i]->u,
      'pre_definitivo' => $datos_confirmados[$i]->f,
      'pre_descripcion_a' => $datos_confirmados[$i]->n,
      'pre_descripcion_id' => $datos_confirmados[$i]->d,
      'pre_dominio' => $datos_confirmados[$i]->a,
      'pre_familia' => $datos_confirmados[$i]->q,
      'pre_fecha' => $fechaArchivo,
      'pre_gastocomercial' => $datos_confirmados[$i]->ax,
      'pre_idpre' => $datos_confirmados[$i]->c,
      'pre_mercado' => $datos_confirmados[$i]->j,
      'pre_pais' => $datos_confirmados[$i]->i,
      'pre_promedio' => $datos_confirmados[$i]->at,
      'pre_totalkilos' => $datos_confirmados[$i]->av,
      'pre_totalppto1' => $datos_confirmados[$i]->af,
      'pre_totalppto2' => $datos_confirmados[$i]->as,
      'pre_totalum' => $datos_confirmados[$i]->au,
      'pre_totalvalor' => $datos_confirmados[$i]->aw,
      'pre_um' => $datos_confirmados[$i]->o,
      'pre_descripcion_c' => $datos_confirmados[$i]->h,
      'pre_categoria' => $datos_confirmados[$i]->az,
      'pre_mongc' => $datos_confirmados[$i]->ay,
      'pre_fechaArchivo' => $nuevafecha);
      $inserta = $this->db->insert('presupuesto', $datos);
    }
  }

















}
