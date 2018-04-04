<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comercial_c extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  //CARGA LA VISTA PRINCIPAL DEL COMERCIAL
  function index(){
    $this->load->view('comercial/index');
  }
  //CARGA LA VISTA PRINCIPAL DEL COMERCIAL


}
