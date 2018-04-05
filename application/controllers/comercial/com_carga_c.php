<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class com_carga_c extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->library('Excel');
  }

  //FUNCTION cargaArchivo
  function cargaArchivo(){
    date_default_timezone_set('Chile/Continental');
    $fecha = date('Y-m-d');

    $mi_archivo = 'mi_archivo';
    $archivo_leido = "./uploads/".$fecha.".xlsx";

    $config['upload_path'] = "./uploads/";
    $config['file_name'] = $fecha;
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
        $au = $sheet->getCell('AU'.$row)->getValue();
        $av = $sheet->getCell('AV'.$row)->getValue();
        $aw = $sheet->getCell('AW'.$row)->getValue();
        $ax = $sheet->getCell('AX'.$row)->getValue();
        $ay = $sheet->getCell('AY'.$row)->getValue();
        $az = $sheet->getCell('AZ'.$row)->getValue();
        $arreglo = array('a' => $a,	'b' => $b,	'c' => $c,	'd' => $d,	'e' => $e,	'f' => $f,	'g' => $g,	'h' => $h,	'i' => $i,	'j' => $j,	'k' => $k,	'l' => $l,	'm' => $m,	'n' => $n,	'o' => $o,	'p' => $p,	'q' => $q,	'r' => $r,	's' => $s,	't' => $t,	'u' => $u,	'v' => $v,	'w' => $w,	'x' => $x,	'y' => $y,	'z' => $z,	'aa' => $aa,	'ab' => $ab,	'ac' => $ac,	'ad' => $ad,	'ae' => $ae,	'af' => $af,	'ag' => $ag,	'ah' => $ah,	'ai' => $ai,	'aj' => $aj,	'ak' => $ak,	'al' => $al,	'au' => $au,	'av' => $av,	'aw' => $aw,	'ax' => $ax,	'ay' => $ay,	'az' => $az);
        array_push($datos,$arreglo);
      }//FIN FOR

      echo json_encode($datos);

    }



  }
  //FUNCTION cargaArchivo

}
