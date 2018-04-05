<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class com_carga_c extends CI_Controller{

  public function __construct(){
    parent::__construct();
  }
  //FUNCTION cargaArchivo
  function cargaArchivo(){
    // $archivo = $this->input->post('mi_archivo');
    $mi_archivo = 'mi_archivo';
    $config['upload_path'] = "./uploads/";
    $config['file_name'] = "asd";
    $config['allowed_types'] = "*";
    $config['max_size'] = "50000";
    $config['max_width'] = "2000";
    $config['max_height'] = "2000";
    $this->load->library('upload', $config);
    if (!$this->upload->do_upload($mi_archivo)) {
        $data['uploadError'] = $this->upload->display_errors();
        echo $this->upload->display_errors();
        return;
    }else{
      $data['uploadSuccess'] = $this->upload->data();
      //LEER ARCHIVO
      var_dump($mi_archivo);
    }

  }
  //FUNCTION cargaArchivo

}