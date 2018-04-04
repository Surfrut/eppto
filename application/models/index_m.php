<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class index_m extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function validaLogin($correo){
    $this->db->select("*");
    $this->db->from("usuario");
    $this->db->where("us_correo", $correo);
    $valor = $this->db->get()->result_array();
    return $valor;
  }

}
