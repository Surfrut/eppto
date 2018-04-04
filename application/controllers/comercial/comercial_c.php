<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comercial_c extends CI_Controller{

  public function __construct()
  {
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

  function actualizarPresupuesto(){
    $datos = $this->input->post('datos');

    $datos2 = json_decode($datos);

    $valor = $this->comercial_m->actualizarPresupuesto($datos2);
    echo json_encode($valor);
  }

  function descargarPresupuesto(){
    $valor = $this->comercial_m->descargarPresupuesto();
  }



}
