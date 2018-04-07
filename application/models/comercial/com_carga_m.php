<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class com_carga_m extends CI_Model{

  public function __construct(){
    parent::__construct();
  }

  function consultaArticulo($articulo){
    $qad = $this->load->database('qad', TRUE);
    for ($i=1; $i < count($articulo); $i++) {
      $encontrado = false;
      $datos = array();
      $valor = $articulo[$i]->m;
      $query = "select pt_part from pub.pt_mstr where pt_part = '$valor' ";
      $execute = odbc_exec($qad->conn_id, $query);
      while (odbc_fetch_array($execute)) {
        $encontrado = true;
      }
      if (!$encontrado) {
        array_push($datos,$valor);
      }
    }//FIN FOR
    return $datos;
  }//FIN FUNCTION

}
