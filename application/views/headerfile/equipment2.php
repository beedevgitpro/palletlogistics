<?php 
 if(isset($_SERVER['REQUEST_METHOD']))
    {
		if($_SERVER['REQUEST_METHOD']=="POST")
		{
		

	$loginid=$this->session->userdata('id');
	$data = array('metaid'=>$_POST['id'],
	'equipment'=>$_POST['equipment'],
	'equipment_supplier_tp'=>$_POST['supplier_tp'],
	'equipment_report_name'=>$_POST['report_name'],
	'equipment_code'=>$_POST['code'],
    'equipment_internal_code'=>$_POST['internal_code'],
    'equipment_book_stock'=>$_POST['equipment_book_stock'],
    'equipment_lost_stock'=>$_POST['equipment_lost_stock'],
    'equipment_supplier_stock'=>$_POST['equipment_supplier_stock'],
    'login_id'=>$loginid);
	$res= $this->User_Model->insert_equipment($data);
		}
	
	if($_SERVER['REQUEST_METHOD'] == "GET")
{
		$data=array('show_hide'=>1);
     $this->db->where('metaid',$_GET["id"]);
     $res=$this->db->update('equipment',$data);
}
}



?>