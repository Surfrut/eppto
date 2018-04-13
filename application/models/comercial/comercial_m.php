<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class comercial_m extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }

  function listarPresupuesto(){
    $this->db->select('
    pre_id,
    pre_ano,
	  pre_dominio,
    pre_articulo,
    pre_descripcion_a,
    pre_familia,
    pre_clase,
    pre_variedad,
    pre_cliente,
    pre_descripcion_c,
	  pre_ship,
    pre_descripcion_s,
    pre_canal,
    pre_cant1,
    pre_desp1,
    pre_cant2,
    pre_desp2,
    pre_cant3,
    pre_desp3,
    pre_cant4,
    pre_desp4,
    pre_cant5,
    pre_desp5,
    pre_cant6,
    pre_desp6,
    pre_cant7,
    pre_desp7,
    pre_cant8,
    pre_desp8,
    pre_cant9,
    pre_desp9,
    pre_cant10,
    pre_desp10,
    pre_cant11,
    pre_desp11,
    pre_cant12,
    pre_desp12,
    pre_cant13,
    pre_cant14,
    pre_cant15,
    pre_cant16,
    pre_cant17,
    pre_cant18,
    pre_cant19,
    pre_cant20,
    pre_cant21,
    pre_cant22,
    pre_cant23,
    pre_cant24,
    pre_cant25,
    pre_cant26,
    pre_cant27,
    pre_cant28,
    pre_cant29,
    pre_cant30,
    pre_cant31,
    pre_cant32,
    pre_cant33,
    pre_cant34,
    pre_cant35,
    pre_cant36,
  	pre_total_anual,
  	pre_total_desp
      ');
    // $this->db->order_by('an_id', 'desc'); //
    $this->db->from('presupuesto');
    // $this->db->order_by('Referencia', 'asc');
    return $this->db->get()->result_array();
  }

  function listarPresupuestoPRO(){
    $query = "select distinct max(car_fecha),car_categoria from carga group by";
    $valor = $this->db->query($query)->result_array();
    echo $valor;
  }

  function listarClientes(){
    $qad = $this->load->database('qad', TRUE);
    $query = "select * from pub.cm_mstr WITH (NOLOCK)";
    $execute = odbc_exec($qad->conn_id, $query);
    $datos = array();
    while(odbc_fetch_array($execute)){
      $cm_sort = odbc_result($execute, "cm_sort");
      $cm_addr = odbc_result($execute, "cm_addr");
      $arreglo = array('cm_sort' => utf8_encode($cm_sort), 'cm_addr' => utf8_encode($cm_addr));
      array_push($datos,$arreglo);
    }
    return $datos;
  }

  function listarArticulos(){
    $qad = $this->load->database('qad', TRUE);
    $query = "select pt_part, pt_desc1, pt_desc2 from pub.pt_mstr where (pt_domain = 'PUREFRUI' or pt_domain = 'SURFRUT') AND pt_pm_code = 'M' AND pt_status = 'DISPONIB' with (nolock)";
    $execute = odbc_exec($qad->conn_id, $query);
    $datos = array();
    while(odbc_fetch_array($execute)){
      $pt_part = odbc_result($execute, "pt_part");
      $pt_desc1  = odbc_result($execute, "pt_desc1");
      $pt_desc2  = odbc_result($execute, "pt_desc2");
      $arreglo = array('pt_part' => utf8_encode($pt_part), 'pt_desc1' => utf8_encode($pt_desc1), 'pt_desc2' => utf8_encode($pt_desc2));
      array_push($datos,$arreglo);
    }
    return $datos;
  }

  function ingresaPresupuesto($datos){
    $this->db->set($datos);
    return $this->db->insert('presupuesto');
  }

  function actualizarPresupuesto($datos){
    var_dump($datos);
    $this->db->set($datos);
    $this->db->where('pre_id', $datos->pre_id);
    $valor = $this->db->update('presupuesto', $datos);
    echo json_encode($datos);
  }

  function descargarPresupuesto(){
    $this->db->select('
    pre_id,
    pre_dominio,
    pre_ano,
    pre_articulo,
    pre_descripcion_a,
    pre_familia,
    pre_clase,
    pre_variedad,
    pre_cliente,
    pre_descripcion_c,
    pre_ship,
    pre_descripcion_s,
    pre_canal,
    pre_cant1,
    pre_cant2,
    pre_cant3,
    pre_cant4,
    pre_cant5,
    pre_cant6,
    pre_cant7,
    pre_cant8,
    pre_cant9,
    pre_cant10,
    pre_cant11,
    pre_cant12,
    pre_cant13,
    pre_cant14,
    pre_cant15,
    pre_total_anual,
    pre_total_desp
    ');
    $this->db->from('presupuesto');
    $presupuesto = $this->db->get()->result_array();

    date_default_timezone_set('Chile/Continental');
    $valor = new DateTime();
    $fecha = $valor->format('Y-m-d H:i:s');

    $archivo = 'EPresupuesto '.$fecha.'.csv';

    header("Content-type: text/csv");
    header("Content-Disposition: attachment; filename=".$archivo);

    $fp = fopen("php://output", 'w');

    fwrite($fp, '#'.';');
    fwrite($fp, 'DOMINIO'.';');
    fwrite($fp, 'AÑO'.';');
    fwrite($fp, 'ARTICULO'.';');
    fwrite($fp, 'DESCRIPCION'.';');
    fwrite($fp, 'FAMILIA'.';');
    fwrite($fp, 'CLASE'.';');
    fwrite($fp, 'VARIEDAD'.';');
    fwrite($fp, 'CLIENTE'.';');
    fwrite($fp, 'DESCRIPCION'.';');
    fwrite($fp, 'SHIPTO'.';');
    fwrite($fp, 'DESCRIPCION'.';');
    fwrite($fp, 'CANAL'.';');
    fwrite($fp, 'Ene 2018'.';');
    fwrite($fp, 'Feb 2018'.';');
    fwrite($fp, 'Mar 2018'.';');
    fwrite($fp, 'Abr 2018'.';');
    fwrite($fp, 'May 2018'.';');
    fwrite($fp, 'Jun 2018'.';');
    fwrite($fp, 'Jul 2018'.';');
    fwrite($fp, 'Ago 2018'.';');
    fwrite($fp, 'Sep 2018'.';');
    fwrite($fp, 'Oct 2018'.';');
    fwrite($fp, 'Nov 2018'.';');
    fwrite($fp, 'Dic 2018'.';');
    fwrite($fp, 'Ene 2019'.';');
    fwrite($fp, 'Feb 2019'.';');
    fwrite($fp, 'Mar 2019'.';');
    fwrite($fp, 'Total Anual'.';');
    fwrite($fp, 'Total Despachado'."\n");

    foreach ($presupuesto as $row) {
      fputcsv($fp, $row, ";");
    }
    fclose($fp);
    exit;

  }

}
