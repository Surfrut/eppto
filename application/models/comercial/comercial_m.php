<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class comercial_m extends CI_Model{

  public function __construct(){
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
    $this->db->from('presupuesto');
    return $this->db->get()->result_array();
  }

  function listarPresupuestoPRO(){
    $query = "select distinct max(car_fecha) as fecha,car_categoria from carga group by car_categoria";
    $valor = $this->db->query($query)->result_array();
    $consultas = array();
    $query2 = '';
    for ($i=0; $i < count($valor); $i++) {
      $query2 .= " select * from presupuesto where pre_fecha = '".$valor[$i]['fecha']."' and pre_categoria = '".$valor[$i]['car_categoria']."' UNION ALL ";
      // if (count($valor)-1 == $i) {
      //   $query2 .= " select * from presupuesto where pre_fecha = '".$valor[$i]['fecha']."' and pre_categoria = '".$valor[$i]['car_categoria']."'";
      // }
      $arreglo = array('query' =>  $query);
      array_push($consultas,$arreglo);
    }
    $query2 = substr($query2,0,-10);
    $resultado;
    if($this->db->query($query2)){
      return $this->db->query($query2)->result_array();
      // $resultado = $this->db->query($query2)->result_array();
    }else{
      return $this->db->error();
    }

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

  function ingresaPresupuestoTST($datos){
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

    $query = "select distinct max(car_fecha) as fecha,car_categoria from carga group by car_categoria";
    $valor = $this->db->query($query)->result_array();
    $consultas = array();
    $query2 = '';
    for ($i=0; $i < count($valor); $i++) {
      // $query2 .= " select * from presupuesto where pre_fecha = '".$valor[$i]['fecha']."' and pre_categoria = '".$valor[$i]['car_categoria']."' UNION ALL ";
      $query2 .= " select pre_id,pre_dominio,pre_idpre,pre_descripcion_id,pre_fecha,pre_definitivo,pre_cliente,pre_descripcion_c,pre_pais,pre_mercado,pre_ship,pre_descripcion_s,pre_articulo,pre_descripcion_a,pre_um,pre_canal,pre_familia,pre_clase,pre_ano,pre_promedio,pre_entidad,pre_cant1,pre_desp1,pre_cant2,pre_desp2,pre_cant3,pre_desp3,pre_cant4,pre_desp4,pre_cant5,pre_desp5,pre_cant6,pre_desp6,pre_cant7,pre_desp7,pre_cant8,pre_desp8,pre_cant9,pre_desp9,pre_cant10,pre_desp10,pre_cant11,pre_desp11,pre_cant12,pre_desp12,pre_cant13,pre_cant14,pre_cant15,pre_totalppto1,pre_total_anual,pre_total_desp from presupuesto where pre_fecha = '".$valor[$i]['fecha']."' and pre_categoria = '".$valor[$i]['car_categoria']."' UNION ALL ";
      $arreglo = array('query' =>  $query);
      array_push($consultas,$arreglo);
    }
    $query2 = substr($query2,0,-10);
    $resultado;
    if($this->db->query($query2)){
      $resultado = $this->db->query($query2)->result_array();
    }else{
      $resultado = $this->db->error();
    }

    date_default_timezone_set('Chile/Continental');
    $valor = new DateTime();
    $fecha = $valor->format('Y-m-d H:i:s');

    $archivo = 'EPPTO '.$fecha.'.csv';

    header("Content-type: text/csv");
    header("Content-Disposition: attachment; filename=".$archivo);

    $fp = fopen("php://output", 'w');

    fwrite($fp, '#'.';');
    fwrite($fp, 'DOMINIO'.';');
    fwrite($fp, 'ID PPTO'.';');
    fwrite($fp, 'DESC. PPTO'.';');
    fwrite($fp, 'Fecha'.';');
    fwrite($fp, 'Definitivo'.';');
    fwrite($fp, 'CLIENTE'.';');
    fwrite($fp, 'DESCRIPCION'.';');
    fwrite($fp, 'Pais'.';');
    fwrite($fp, 'Mercado'.';');
    fwrite($fp, 'EMBARCAR-A'.';');
    fwrite($fp, 'DESCRIPCION'.';');
    fwrite($fp, 'ARTICULO'.';');
    fwrite($fp, 'DESCRIPCION'.';');
    fwrite($fp, 'UM'.';');
    fwrite($fp, 'CANAL'.';');
    fwrite($fp, 'FAMILIA'.';');
    fwrite($fp, 'CLASE'.';');
    fwrite($fp, 'ANO'.';');
    fwrite($fp, 'Promedio'.';');
    fwrite($fp, 'Entidad'.';');
    fwrite($fp, 'Ene 2018'.';');
    fwrite($fp, 'Desp. Ene 2018'.';');
    fwrite($fp, 'Feb 2018'.';');
    fwrite($fp, 'Desp. Feb 2018'.';');
    fwrite($fp, 'Mar 2018'.';');
    fwrite($fp, 'Desp. Mar 2018'.';');
    fwrite($fp, 'Abr 2018'.';');
    fwrite($fp, 'Desp. Abr 2018'.';');
    fwrite($fp, 'May 2018'.';');
    fwrite($fp, 'Desp. May 2018'.';');
    fwrite($fp, 'Jun 2018'.';');
    fwrite($fp, 'Desp. Jun 2018'.';');
    fwrite($fp, 'Jul 2018'.';');
    fwrite($fp, 'Desp. Jul 2018'.';');
    fwrite($fp, 'Ago 2018'.';');
    fwrite($fp, 'Desp. Ago 2018'.';');
    fwrite($fp, 'Sep 2018'.';');
    fwrite($fp, 'Desp. Sep 2018'.';');
    fwrite($fp, 'Oct 2018'.';');
    fwrite($fp, 'Desp. Oct 2018'.';');
    fwrite($fp, 'Nov 2018'.';');
    fwrite($fp, 'Desp. Nov 2018'.';');
    fwrite($fp, 'Dic 2018'.';');
    fwrite($fp, 'Desp. Dic 2018'.';');
    fwrite($fp, 'Ene 2019'.';');
    fwrite($fp, 'Feb 2019'.';');
    fwrite($fp, 'Mar 2019'.';');
    fwrite($fp, 'Totalppto1'.';');
    fwrite($fp, 'Total Anual'.';');
    fwrite($fp, 'Total Despachado'."\n");

    foreach ($resultado as $row) {
      fputcsv($fp, $row, ";");
    }
    fclose($fp);
    exit;
  }

  function descargarROCIO(){
    $query = "select distinct max(car_fecha) as fecha,car_categoria from carga group by car_categoria";
    $valor = $this->db->query($query)->result_array();
    $consultas = array();
    $query2 = '';
    for ($i=0; $i < count($valor); $i++) {
      $query2 .= " select
      pre_dominio,
      pre_idpre,
      pre_descripcion_id,
      pre_fecha,
      pre_definitivo,
      pre_cliente,
      pre_descripcion_c,
      pre_pais,
      pre_mercado,
      pre_ship,
      pre_descripcion_s,
      pre_articulo,
      pre_descripcion_a,
      pre_um,
      pre_canal,
      pre_familia,
      pre_clase,
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
      pre_totalppto1,
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
      pre_totalppto2,
      pre_promedio,
      pre_totalum,
      pre_totalkilos,
      pre_totalvalor,
      pre_gastocomercial,
      pre_categoria
      from presupuesto
      where pre_fecha = '".$valor[$i]['fecha']."' and pre_categoria = '".$valor[$i]['car_categoria']."' UNION ALL ";
      $arreglo = array('query' =>  $query);
      array_push($consultas,$arreglo);
    }
    $query2 = substr($query2,0,-10);
    $resultado;
    if($this->db->query($query2)){
      $resultado = $this->db->query($query2)->result_array();
    }else{
      $resultado = $this->db->error();
    }

    date_default_timezone_set('Chile/Continental');
    $valor = new DateTime();
    $fecha = $valor->format('Y-m-d H:i:s');

    $archivo = 'EPPTO '.$fecha.'.csv';
    header('Content-Encoding: UTF-8');
    header("Content-type: text/csv; charset=utf-8");
    header("Content-Disposition: attachment; filename=".$archivo);
    $fp = fopen("php://output", 'w');
    fwrite($fp, 'DOMINIO'.';');
    fwrite($fp, 'ID PPTO'.';');
    fwrite($fp, 'DESC. PPTO'.';');
    fwrite($fp, 'Fecha'.';');
    fwrite($fp, 'Definitivo'.';');
    fwrite($fp, 'CLIENTE'.';');
    fwrite($fp, 'DESCRIPCION'.';');
    fwrite($fp, 'Pais'.';');
    fwrite($fp, 'Mercado'.';');
    fwrite($fp, 'EMBARCAR-A'.';');
    fwrite($fp, 'DESCRIPCION'.';');
    fwrite($fp, 'ARTICULO'.';');
    fwrite($fp, 'DESCRIPCION'.';');
    fwrite($fp, 'UM'.';');
    fwrite($fp, 'CANAL'.';');
    fwrite($fp, 'FAMILIA'.';');
    fwrite($fp, 'CLASE'.';');
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
    fwrite($fp, 'Totalppto1'.';');
    fwrite($fp, 'Ene 2019'.';');
    fwrite($fp, 'Feb 2019'.';');
    fwrite($fp, 'Mar 2019'.';');
    fwrite($fp, 'Abr 2019'.';');
    fwrite($fp, 'May 2019'.';');
    fwrite($fp, 'Jun 2019'.';');
    fwrite($fp, 'Jul 2019'.';');
    fwrite($fp, 'Ago 2019'.';');
    fwrite($fp, 'Sep 2019'.';');
    fwrite($fp, 'Oct 2019'.';');
    fwrite($fp, 'Nov 2019'.';');
    fwrite($fp, 'Dic 2019'.';');
    fwrite($fp, 'Totalppto2'.';');
    fwrite($fp, 'Promedio'.';');
    fwrite($fp, 'Total UM'.';');
    fwrite($fp, 'Total Kilos'.';');
    fwrite($fp, 'Total Valor'.';');
    fwrite($fp, 'Gastos Comerciales'.';');
    fwrite($fp, 'Mon GC'.";");
    fwrite($fp, 'TIPO-ARCHIVO'."\n");

    foreach ($resultado as $row) {
      fputcsv($fp, $row, ";");
    }
    fclose($fp);
    exit;
  }

  function descargaPersonalizada($datos){
    $query1 = '';
    $datos = substr($datos,0,-1);
    $datos = explode("_",$datos);
    for ($i=0; $i < count($datos); $i++) {
      $datos[$i] = str_replace("-"," - ",$datos[$i]);
      $query1 .= " select max(pre_fecha) as pre_fecha,pre_categoria from presupuesto where pre_categoria = '".$datos[$i]."' UNION ALL ";
    }
    $query1 = substr($query1,0,-10);
    $resultado1 = $this->db->query($query1)->result_array();
    $query2 = '';
    for ($i=0; $i < count($resultado1); $i++) {
      $query2 .= " select
      pre_dominio,
      pre_idpre,
      pre_descripcion_id,
      pre_fecha,
      pre_definitivo,
      pre_cliente,
      pre_descripcion_c,
      pre_pais,
      pre_mercado,
      pre_ship,
      pre_descripcion_s,
      pre_articulo,
      pre_descripcion_a,
      pre_um,
      pre_canal,
      pre_familia,
      pre_clase,
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
      pre_totalppto1,
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
      pre_totalppto2,
      pre_promedio,
      pre_totalum,
      pre_totalkilos,
      pre_totalvalor,
      pre_gastocomercial,
      pre_categoria
      from presupuesto
      where pre_categoria = '".$resultado1[$i]['pre_categoria']."' and pre_fecha = '".$resultado1[$i]['pre_fecha']."' UNION ALL ";
    }
    $query2 = substr($query2,0,-10);
    $resultado;
    if($this->db->query($query2)){
      $resultado = $this->db->query($query2)->result_array();
    }else{
      $resultado = $this->db->error();
    }
    return $resultado;
  }//fin descargaPersonalizada

  function descargaPersonalizada2($datos){
    $query1 = '';
    $datos = substr($datos,0,-1);
    $datos = explode("_",$datos);
    for ($i=0; $i < count($datos); $i++) {
      $datos[$i] = str_replace("-"," - ",$datos[$i]);
      $query1 .= " select max(car_fecha) as car_fecha,car_categoria from carga where car_categoria = '".$datos[$i]."' UNION ALL ";
    }
    $query1 = substr($query1,0,-10);
    //var_dump($query1);
    $resultado1 = $this->db->query($query1)->result_array();
    $query2 = '';
    for ($i=0; $i < count($resultado1); $i++) {
      $query2 .= " select
      pre_dominio,
      pre_idpre,
      pre_descripcion_id,
      pre_fecha,
      pre_definitivo,
      pre_cliente,
      pre_descripcion_c,
      pre_pais,
      pre_mercado,
      pre_ship,
      pre_descripcion_s,
      pre_articulo,
      pre_descripcion_a,
      pre_um,
      pre_canal,
      pre_familia,
      pre_clase,
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
      pre_totalppto1,
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
      pre_totalppto2,
      pre_promedio,
      pre_totalum,
      pre_totalkilos,
      pre_totalvalor,
      pre_gastocomercial,
      pre_categoria
      from presupuesto
      where pre_categoria = '".$resultado1[$i]['car_categoria']."' and pre_fecha = '".$resultado1[$i]['car_fecha']."' UNION ALL ";
    }
    $query2 = substr($query2,0,-10)." UNION ALL 
	select
      desp_dominio,
      '',
      '',
      '',
      '',
      desp_cliente,
      '',
      '',
      '',
      desp_ship,
      '',
      desp_articulo,
      '',
      '',
      '',
      '',
      '',
      0,
      desp_desp1,
      0,
      desp_desp2,
      0,
      desp_desp3,
      0,
      desp_desp4,
      0,
      desp_desp5,
      0,
      desp_desp6,
      0,
      desp_desp7,
      0,
      desp_desp8,
      0,
      desp_desp9,
      0,
      desp_desp10,
      0,
      desp_desp11,
      0,
      desp_desp12,
      0,
      0,
      0,
	  
	  0,
      0,
      0,
	  0,
      0,
      0,
      
	  0,
	  0,
      0,
      0,
      
	  0,
      0,
      0,
      0,
      0,
      0,
      ''
      from despachos";
    // var_dump($query2);
    $resultado;
    if($this->db->query($query2)){
      $resultado = $this->db->query($query2)->result_array();
    }else{
      $resultado = $this->db->error();
    }
    return $resultado;
  }//fin descargaPersonalizada2

}
