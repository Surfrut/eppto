<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vis_visita_c extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('modelo');
  }

  function index()
  {
    $valor = $this->modelo->listar_analisis();
    $this->load->view('visita/index', $valor);
  }

}
