<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sincronizacion_despachos extends CI_Model{

  function sincronizacion_modelo(){


    //CONSULTA WINPER EMPLEADOS DE UN PERIODO*****************************

$fechainicio_rango=date("Y-m-d", mktime(0, 0, 0, 1, 1, 2018));
echo $fechainicio_rango."rangofin<br>";

$fechafin_rango=date("Y-m-d");
echo $fechafin_rango."rangofin<br>";
	

$qad = $this->load->database('qadcustom', TRUE);
$query = "select exci_cust, exci_shipto, excid_part,month(exci_etd) as mes, sum(excid_qty_embarcar) as cantidad from pub.exci_mstr  join pub.excid_det on excid_domain in('surfrut','purefrui') and exci_container_interno=excid_container_interno where exci_domain in('surfrut','purefrui') and exci_status_despacho=1 and exci_etd>='".$fechainicio_rango."' and exci_etd<='".$fechafin_rango."' group by exci_cust, exci_shipto, excid_part, month(exci_etd) with (nolock)";
$execute = odbc_exec($qad->conn_id, $query);

while(odbc_fetch_row($execute))
{
 $datos = array('pre_desp'.odbc_result($execute,"mes") => odbc_result($execute,"cantidad"));
//var_dump($datos);
$this->db->where('pre_cliente',odbc_result($execute,"exci_cust"));
$this->db->where('pre_ship',odbc_result($execute,"exci_shipto"));
$this->db->where('pre_articulo',odbc_result($execute,"excid_part"));
$this->db->update('presupuesto',$datos);
}


return true;
} // FIN FUNCION
}//FIN MODELO