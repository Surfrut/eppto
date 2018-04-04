<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sincronizacion_m extends CI_Model{

  function sincronizacion_modelo(){

    date_default_timezone_set('Chile/Continental');
    $valor = new DateTime();
    $fecha = $valor->format('Y-m-d');
    $nuevafecha = strtotime ( '-100 day' , strtotime ( $fecha ) ) ;
    $nuevafecha = date ( 'Y-m-j' , $nuevafecha );

    $progress = array();
    $arreglo = array();
    $arreglo_update = array();
    $auxiliar = array();
    $mysql = array();
    $arreglo2 = array();
    $si_inserto;
    $clave;

    //CONSULTA LD_DET QAD*****************************
    $qad = $this->load->database('qad', TRUE);
    $query = "select * from pub.ld_det inner join pub.pt_mstr on pt_part=ld_part and pt_group='BULK' and pt_domain='PUREFRUI' where ld_domain = 'PUREFRUI' and ld_loc = 'PRODUCC' and ld_site = 206 and ld_date > '2017-12-31' WITH (NOLOCK)";
    $execute = odbc_exec($qad->conn_id, $query);
    while(odbc_fetch_array($execute)){
      $ld_loc = odbc_result($execute, "ld_loc");
      $ld_part = odbc_result($execute, "ld_part");
      $ld_date = odbc_result($execute, "ld_date");
      $ld_qty_oh = round(odbc_result($execute, "ld_qty_oh"), 1, PHP_ROUND_HALF_UP);
      $ld_lot = odbc_result($execute, "ld_lot");
      $ld_ref = odbc_result($execute, "ld_ref");
      $ld_status = odbc_result($execute, "ld_status");
      $ld__chr01 = odbc_result($execute, "ld__chr01");
      $arreglo = array('ld_loc' => $ld_loc, 'ld_part' => $ld_part, 'ld_date' => $ld_date, 'ld_qty_oh' => $ld_qty_oh, 'ld_lot' => $ld_lot, 'ld_ref' => $ld_ref, 'ld_status' => $ld_status, 'ld__chr01' => $ld__chr01);
      array_push($progress,$arreglo);
    }//FIN CONSULTA LD_DET QAD**********************

    //CONSULTA ANALISIS MYSQL
    $query = $this->db->query("select * from analisis");

    foreach ($query->result_array() as $row) {
      $an_locacion = $row['an_locacion'];
      $an_articulo = $row['an_articulo'];
      $an_fecha = $row['an_fecha'];
      $an_cantidad = $row['an_cantidad'];
      $an_lote = $row['an_lote'];
      $an_referencia = $row['an_referencia'];
      $an_estado = $row['an_estado'];
      $arreglo2 = array('an_locacion' => $an_locacion,'an_articulo' => $an_articulo,'an_fecha' => $an_fecha,'an_cantidad' => $an_cantidad,'an_lote' => $an_lote,'an_referencia' => $an_referencia, 'an_estado' => $an_estado);
      array_push($mysql,$arreglo2);
    }//FIN CONSULTA ANALISIS MYSQL

    $test=array();

    for ($i=0; $i < count($progress); $i++) {
    $hay=0;
      for ($j=0; $j < count($mysql) ; $j++) {
        if ( (($progress[$i]['ld_lot'] == $mysql[$j]['an_lote']) && ($progress[$i]['ld_ref'] == $mysql[$j]['an_referencia'])) ) {
          $repetidos = array('ld_lot' => $progress[$i]['ld_lot'], 'an_lote' => $mysql[$j]['an_lote'], 'ld_ref' => $progress[$i]['ld_ref'], 'an_referencia' => $mysql[$j]['an_referencia']);
          $hay=1;
          $p_lot1 = $progress[$i]['ld_lot'];
          $p_ref1 = $progress[$i]['ld_ref'];

          //UPDATE que trae cliente y estado según referencia y lote
          $update = "select * from pub.ld_det where ld_domain = 'PUREFRUI' and ld_loc = 'PRODUCC' and ld_site = 206 and ld_ref = '$p_ref1' and ld_lot = '$p_lot1' WITH (NOLOCK)";
          $estado_cliente = odbc_exec($qad->conn_id, $update);
          while (odbc_fetch_array($estado_cliente)) {

            $ld_estado = odbc_result($estado_cliente, "ld_status");
            $ld_cliente = trim(odbc_result($estado_cliente, "ld__chr01"));
            if ($ld_cliente == "") {
              $ld_cliente = "NO";
            }else {
              $ld_cliente = "SI";
            }
            $ld_part = odbc_result($estado_cliente, "ld_part");

            //INNER PARA OBTENER INFORMACIÓN DE CADA REFERENCIA.
            $inner_datos = "select pt_part, pt_desc1, pt_desc2, pt_um from pub.pt_mstr inner join pub.ld_det on pt_part = '$ld_part' where pt_domain = 'PUREFRUI' and ld_domain = 'PUREFRUI' and ld_site = 206 and ld_loc = 'PRODUCC' WITH (NOLOCK)";

            $estado_inner = odbc_exec($qad->conn_id, $inner_datos);
            while (odbc_fetch_array($estado_inner)) {
              $ldpt_desc1 = odbc_result($estado_inner, "pt_desc1");
              $ldpt_desc2 = odbc_result($estado_inner, "pt_desc2");
              $descripciones = $ldpt_desc1." ".$ldpt_desc2;
              $ldpt_um = odbc_result($estado_inner, "pt_um");
              $data = array('an_estado' => $ld_estado, 'an_cliente' => $ld_cliente, 'an_descripcion' => $descripciones, 'an_um' => $ldpt_um, 'an_qad' => "SI", 'an_qad_cliente' => $ld_cliente);
              $this->db->where('an_referencia', $p_ref1);
              $this->db->where('an_lote', $p_lot1);
              $this->db->set($data);
              $estado_update = $this->db->update('analisis');
            }//FIN SEGUNDO WHILE

          }//FIN PRIMER WHILE

          array_push($test,$repetidos);
        }
      }//FIN FOR J

        $p_loc = $progress[$i]['ld_loc'];
        $p_part = $progress[$i]['ld_part'];
        $p_date = $progress[$i]['ld_date'];
        $p_ld_qty_oh = $progress[$i]['ld_qty_oh'];
        $p_lot = $progress[$i]['ld_lot'];
        $p_ref = $progress[$i]['ld_ref'];
        $p_status = $progress[$i]['ld_status'];
        $p_cliente = $progress[$i]['ld__chr01'];

      if($hay==0){
        //INSERT
        $inserta = $this->db->query(" insert into analisis(an_locacion, an_articulo, an_fecha, an_lote, an_referencia, an_estado, an_cantidad) values('$p_loc', '$p_part', '$p_date', '$p_lot', '$p_ref', '$p_status', '$p_ld_qty_oh') ");
        $si_inserto = $this->db->affected_rows();
      }

    }//FIN FOR I

    if (empty($estado_update)) {
      $dos_arreglos = array('progress' => $progress, 'mysql' => $mysql);
    }else{
      $dos_arreglos = array('progress' => $progress, 'mysql' => $mysql, 'estado_update' => $estado_update);
    }

    return $dos_arreglos;

  }


}//FIN MODELO
