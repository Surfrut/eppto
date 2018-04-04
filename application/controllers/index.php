<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class index extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
		$this->load->model('index_m');
  }

	function validaLogin(){
		$correo = $this->input->post('correo');
		$valor = $this->index_m->validaLogin($correo);
		echo json_encode($valor);
	}

}
