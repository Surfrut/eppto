<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class despachos_c extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('sincronizacion_despachos');
  }

  function index()
  {
    $valor = $this->sincronizacion_despachos->sincronizacion_modelo();
  }

}
