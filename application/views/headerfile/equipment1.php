<?php
if(isset($_SERVER['REQUEST_METHOD']))
{
	if($_SERVER['REQUEST_METHOD']=='GET')
	{
$result=$this->User_Model->get_equipments();
										foreach($result as $row)
										{
										$output[]=	 array('id'=> $row->metaid,
										'equipment' => $row->equipment,   
                                             'supplier_tp'   => $row->equipment_supplier_tp,
                                             'report_name'   => $row->equipment_report_name,
                                             'code'   => $row->equipment_code,
                                             'internal_code'   => $row->equipment_internal_code,
                                             'equipment_lost_stock'   => $row->equipment_lost_stock,
                                             'supplier_stock'   => $row->equipment_supplier_stock,
                                             
                                             'equipment_rent_unit_price'   => $row->equipment_rent_unit_price,
                                             'Status'   => $row->active);
											
										}
										header("Content-Type: application/json");
                                        echo json_encode($output);
}


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
		
	$result=$this->User_Model->get_max_equipmentid();
	foreach($result as $row)
	{
	$metaid=$row->metaid;
	}
	$metaid=++$metaid;
	$loginid=$this->session->userdata('id');
	$data = array('metaid'=>$metaid,
	'equipment'=>$_POST['equipment'],
	'equipment_supplier_tp'=>$_POST['supplier_tp'],
	'equipment_report_name'=>$_POST['report_name'],
	'equipment_code'=>$_POST['code'],
    'equipment_internal_code'=>$_POST['internal_code'],
    'equipment_book_stock'=>$_POST['equipment_book_stock'],
    'equipment_lost_stock'=>$_POST['equipment_lost_stock'],
    'equipment_supplier_stock'=>$_POST['supplier_stock'],
    'login_id'=>$loginid);
	$res= $this->User_Model->insert_equipment($data);
}




}
	if(isset($_POST['myData']))
{

   $result=$this->User_Model->get_max_equipmentid();
	foreach($result as $row)
	{
	$metaid=$row->metaid;
	}
	$metaid=++$metaid;
	$loginid=$this->session->userdata('id');
	$data = array('metaid'=>$metaid,
	'equipment'=>4,
	'equipment_supplier_tp'=>3,
	'equipment_report_name'=>3,
	'equipment_code'=>3,
    'equipment_internal_code'=>3,
    'equipment_book_stock'=>1,
    'equipment_lost_stock'=>1,
    'equipment_supplier_stock'=>1,
    'login_id'=>$loginid);
	$res= $this->User_Model->insert_equipment($data);




} 



















									?>