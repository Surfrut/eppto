<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class com_carga_c extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->library('Excel');
    $this->load->model('comercial/com_carga_m');
  }

  //FUNCTION cargaArchivo
  function cargaArchivo(){

    $tipo_archivo = $this->input->post('tipo_archivo');
    // echo $tipo_archivo;
    $nombreArchivo = $this->input->post('nombreArchivo');
    $nombreArchivo = explode("\\",$nombreArchivo);
    $nombreArchivo = $nombreArchivo[(count($nombreArchivo)-1)];
    // var_dump($nombreArchivo);

    date_default_timezone_set('Chile/Continental');
    $fecha = date('Y-m-d');
    $mi_archivo = 'mi_archivo';
    $archivo_leido = "./uploads/".$nombreArchivo;
    $config['upload_path'] = "./uploads/";
    $config['file_name'] = $nombreArchivo;
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
      $inputFileType = PHPExcel_IOFactory::identify($archivo_leido);
      $objReader = PHPExcel_IOFactory::createReader($inputFileType);
      $objPHPExcel = $objReader->load($archivo_leido);
      $sheet = $objPHPExcel->getSheet(0);
      $highestRow = $sheet->getHighestRow();
      $highestColumn = $sheet->getHighestColumn();
      $datos = array();
      $datos_categoria = array();
      for ($row = 1; $row <= $highestRow; $row++){
        $a = $sheet->getCell('A'.$row)->getValue();
        $b = $sheet->getCell('B'.$row)->getValue();
        $c = $sheet->getCell('C'.$row)->getValue();
        $d = $sheet->getCell('D'.$row)->getValue();
        $e = $sheet->getCell('E'.$row)->getValue();
        $f = $sheet->getCell('F'.$row)->getValue();
        $g = $sheet->getCell('G'.$row)->getValue();
        $h = $sheet->getCell('H'.$row)->getValue();
        $i = $sheet->getCell('I'.$row)->getValue();
        $j = $sheet->getCell('J'.$row)->getValue();
        $k = $sheet->getCell('K'.$row)->getValue();
        $l = $sheet->getCell('L'.$row)->getValue();
        $m = $sheet->getCell('M'.$row)->getValue();
        $n = $sheet->getCell('N'.$row)->getValue();
        $o = $sheet->getCell('O'.$row)->getValue();
        $p = $sheet->getCell('P'.$row)->getValue();
        $q = $sheet->getCell('Q'.$row)->getValue();
        $r = $sheet->getCell('R'.$row)->getValue();
        $s = $sheet->getCell('S'.$row)->getValue();
        $t = $sheet->getCell('T'.$row)->getValue();
        $u = $sheet->getCell('U'.$row)->getValue();
        $v = $sheet->getCell('V'.$row)->getValue();
        $w = $sheet->getCell('W'.$row)->getValue();
        $x = $sheet->getCell('X'.$row)->getValue();
        $y = $sheet->getCell('Y'.$row)->getValue();
        $z = $sheet->getCell('Z'.$row)->getValue();
        $aa = $sheet->getCell('AA'.$row)->getValue();
        $ab = $sheet->getCell('AB'.$row)->getValue();
        $ac = $sheet->getCell('AC'.$row)->getValue();
        $ad = $sheet->getCell('AD'.$row)->getValue();
        $ae = $sheet->getCell('AE'.$row)->getValue();
        $af = $sheet->getCell('AF'.$row)->getValue();
        $ag = $sheet->getCell('AG'.$row)->getValue();
        $ah = $sheet->getCell('AH'.$row)->getValue();
        $ai = $sheet->getCell('AI'.$row)->getValue();
        $aj = $sheet->getCell('AJ'.$row)->getValue();
        $ak = $sheet->getCell('AK'.$row)->getValue();
        $al = $sheet->getCell('AL'.$row)->getValue();
        $am = $sheet->getCell('AM'.$row)->getValue();
        $an = $sheet->getCell('AN'.$row)->getValue();
        $ao = $sheet->getCell('AO'.$row)->getValue();
        $ap = $sheet->getCell('AP'.$row)->getValue();
        $aq = $sheet->getCell('AQ'.$row)->getValue();
        $ar = $sheet->getCell('AR'.$row)->getValue();
        $as = $sheet->getCell('AS'.$row)->getValue();
        $at = $sheet->getCell('AT'.$row)->getValue();
        $au = $sheet->getCell('AU'.$row)->getValue();
        $av = $sheet->getCell('AV'.$row)->getValue();
        $aw = $sheet->getCell('AW'.$row)->getValue();
        $ax = $sheet->getCell('AX'.$row)->getValue();
        $ay = $sheet->getCell('AY'.$row)->getValue();
        $az = $tipo_archivo;
        $arreglo = array('a' => $a,	'b' => $b,	'c' => $c,	'd' => $d,	'e' => $e,	'f' => $f,	'g' => $g,	'h' => $h,	'i' => $i,	'j' => $j,	'k' => $k,	'l' => $l,	'm' => $m,	'n' => $n,	'o' => $o,	'p' => $p,	'q' => $q,	'r' => $r,	's' => $s,	't' => $t,	'u' => $u,	'v' => $v,	'w' => $w,	'x' => $x,	'y' => $y,	'z' => $z,	'aa' => $aa,	'ab' => $ab,	'ac' => $ac,	'ad' => $ad,	'ae' => $ae,	'af' => $af,	'ag' => $ag,	'ah' => $ah,	'ai' => $ai,	'aj' => $aj,	'ak' => $ak,	'al' => $al, 'am' => $am, 'an' => $an, 'ao' => $ao, 'ap' => $ap, 'aq' => $aq, 'ar' => $ar, 'as' => $as, 'at' => $at,	'au' => $au,	'av' => $av,	'aw' => $aw,	'ax' => $ax,	'ay' => $ay, 'az' => $az);
        array_push($datos,$arreglo);
      }//FIN FOR

      date_default_timezone_set('Chile/Continental');
      $valor = new DateTime();
      $car_hora = $valor->format('Y-m-d H:i:s');
      $car_fecha = $valor->format('Y-m-d');

      $arreglo_categoria = array('car_categoria' => $tipo_archivo, 'car_hora' => $car_hora, 'car_fecha' => $car_fecha);

      array_push($datos,$arreglo_categoria);

      unlink($archivo_leido);


      echo json_encode($datos);
    }//FIN ELSE
  }
  //FUNCTION cargaArchivo

  //FUNCTION QUE VALIDA LOS DATOS CONTRA QAD Y HACE INSERT A MYSQL
  function consultaArticulo(){
    $valor = $this->input->post('datos_confirmados');
    // $datos = json_decode($valor);
    $respuesta = $this->com_carga_m->consultaArticulo($valor);
    echo json_encode($respuesta);
  }
  //FUNCTION QUE VALIDA LOS DATOS CONTRA QAD Y HACE INSERT A MYSQL

  function insertaPresupuesto(){
    $datos = $this->input->post('datos_insertar');
    $valor = $this->com_carga_m->insertaPresupuesto($datos);
    echo json_encode($valor);
  }


}
