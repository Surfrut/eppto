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
$query = "select exci_cust, exci_shipto, excid_part,month(exci_etd) as mes, sum(excid_qty_embarcar) as cantidad, exci_domain from pub.exci_mstr  join pub.excid_det on excid_domain in('surfrut','purefrui') and exci_container_interno=excid_container_interno where exci_domain in('surfrut','purefrui') and exci_status_despacho=1 and exci_etd>='".$fechainicio_rango."' and exci_etd<='".$fechafin_rango."' group by exci_domain, exci_cust, exci_shipto, excid_part, month(exci_etd) with (nolock)";
$execute = odbc_exec($qad->conn_id, $query);

$this->db->truncate('despachos');

while(odbc_fetch_row($execute))
{
$query = $this->db->query("select count(*) as cantidad from presupuesto where pre_cliente='".odbc_result($execute,"exci_cust")."' and pre_ship='".odbc_result($execute,"exci_shipto")."' and pre_articulo='".odbc_result($execute,"excid_part")."'");
foreach($query->result() as $row)
{
$cantidad=$row->cantidad;
}

$datos = array('pre_desp'.odbc_result($execute,"mes") => odbc_result($execute,"cantidad"));
//var_dump($datos);
$this->db->where('pre_cliente',odbc_result($execute,"exci_cust"));
$this->db->where('pre_ship',odbc_result($execute,"exci_shipto"));
$this->db->where('pre_articulo',odbc_result($execute,"excid_part"));
$this->db->update('presupuesto',$datos);

if($cantidad==0){
if(odbc_result($execute,"exci_domain")=='PUREFRUI'){
$dominio='206';
}
if(odbc_result($execute,"exci_domain")=='SURFRUT'){
$dominio='200';
}


$datos = array('desp_dominio' => $dominio,'desp_cliente' => odbc_result($execute,"exci_cust"),'desp_ship' => odbc_result($execute,"exci_shipto"),'desp_articulo' => odbc_result($execute,"excid_part"),'desp_desp'.odbc_result($execute,"mes") => odbc_result($execute,"cantidad"));
//var_dump($datos);
$this->db->insert('despachos',$datos);
}

}




return true;
} // FIN FUNCION
}//FIN MODELO
