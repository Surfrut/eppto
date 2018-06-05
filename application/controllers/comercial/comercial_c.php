<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comercial_c extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('comercial/comercial_m');
  }

  function index(){
    $this->load->view('comercial/index');
  }

  function listarPresupuesto(){
    $valor = $this->comercial_m->listarPresupuesto();
    echo json_encode($valor);
  }

  function listarPresupuestoPRO(){
    $valor = $this->comercial_m->listarPresupuestoPRO();
    echo json_encode($valor);
    // print_r(json_encode($valor));
  }

  function listarClientes(){
    $valor = $this->comercial_m->listarClientes();
    echo json_encode($valor);
  }

  function listarArticulos(){
    $valor = $this->comercial_m->listarArticulos();
    echo json_encode($valor);
  }

  function ingresaPresupuesto(){
    $datos = $this->input->post('data');
    $datos2 = json_decode($datos);
    $valor = $this->comercial_m->ingresaPresupuesto($datos2);
    // echo json_encode($valor);
  }

  function ingresaPresupuestoTST(){
    $datos = $this->input->post('data');
    $datos2 = json_decode($datos);
    $valor = $this->comercial_m->ingresaPresupuestoTST($datos2);
    // echo json_encode($valor);
  }

  function actualizarPresupuesto(){
    $datos = $this->input->post('datos');
    $datos2 = json_decode($datos);
    $valor = $this->comercial_m->actualizarPresupuesto($datos2);
    echo json_encode($valor);
  }

  function descargarPresupuesto(){
    $valor = $this->comercial_m->descargarPresupuesto();
  }

  function descargarROCIO(){
    $valor = $this->comercial_m->descargarROCIO();
  }

  function descargaPersonalizada($datos){
    // var_dump($datos);
    // $datos = json_decode($datos);
    $valor = $this->comercial_m->descargaPersonalizada($datos);

    date_default_timezone_set('Chile/Continental');
    $valor2 = new DateTime();
    $fecha = $valor2->format('Y-m-d H:i:s');

    $archivo = 'EPPTO '.$fecha.'.csv';
    header('Content-Encoding: UTF-8');
    header("Content-type: text/csv; charset=utf-8");
    header("Content-Disposition: attachment; filename=".$archivo);
    // header("Pragma: public");
    // header("Expires: 0");
    // header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    // header("Content-Type: application/force-download");
    // header("Content-Type: application/octet-stream");
    // header("Content-Type: application/download");
    // header("Content-Disposition: attachment; filename=".$archivo);
    $fp = fopen("php://output", 'w');
    fwrite($fp, 'Entidad'.';');
    fwrite($fp, 'DESC. ENTIDAD'.';');
    fwrite($fp, 'ID PPTO'.';');
    fwrite($fp, 'DESC. PPTO'.';');
    fwrite($fp, 'Fecha'.';');
    fwrite($fp, 'Definitivo'.';');
    fwrite($fp, 'CLIENTeE'.';');
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
    fwrite($fp, 'GRUPO'.';');
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
    fwrite($fp, 'Mon GC'.';');
    fwrite($fp, 'TIPO-ARCHIVO'."\n");
    foreach ($valor as $row) {
      fputcsv($fp, $row, ";");
    }
    fclose($fp);
    exit;

    // echo json_encode($valor);
  }

  function descargaPersonalizada2($datos){
    // var_dump($datos);
    // $datos = json_decode($datos);
    $valor = $this->comercial_m->descargaPersonalizada2($datos);

    date_default_timezone_set('Chile/Continental');
    $valor2 = new DateTime();
    $fecha = $valor2->format('Y-m-d H:i:s');

    $archivo = 'EPPTO '.$fecha.'.csv';
    header('Content-Encoding: UTF-8');
    header("Content-type: text/csv; charset=utf-8");
    header("Content-Disposition: attachment; filename=".$archivo);
    // header("Pragma: public");
    // header("Expires: 0");
    // header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    // header("Content-Type: application/force-download");
    // header("Content-Type: application/octet-stream");
    // header("Content-Type: application/download");
    // header("Content-Disposition: attachment; filename=".$archivo);
    $fp = fopen("php://output", 'w');
    fwrite($fp, 'ENTIDAD'.';');
    fwrite($fp, 'DESC. ENTIDAD'.';');
    fwrite($fp, 'ID PPTO'.';');
    fwrite($fp, 'DESC. PPTO'.';');
    fwrite($fp, 'FECHA'.';');
    fwrite($fp, 'DEFINITIVO'.';');
    fwrite($fp, 'CLIENTE'.';');
    fwrite($fp, 'DESCRIPCION'.';');
    fwrite($fp, 'PAIS'.';');
    fwrite($fp, 'MERCADO'.';');
    fwrite($fp, 'EMBARCAR-A'.';');
    fwrite($fp, 'DESCRIPCION'.';');
    fwrite($fp, 'ARTICULO'.';');
    fwrite($fp, 'DESCRIPCION'.';');
    fwrite($fp, 'UM'.';');
    fwrite($fp, 'CANAL'.';');
    fwrite($fp, 'FAMILIA'.';');
    fwrite($fp, 'CLASE'.';');
    fwrite($fp, 'GRUPO'.';');
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
    fwrite($fp, 'Mon GC'.';');
    fwrite($fp, 'TIPO-ARCHIVO'."\n");
    foreach ($valor as $row) {
      fputcsv($fp, $row, ";");
    }
    fclose($fp);
    exit;

    // echo json_encode($valor);
  }



}
