<?php 

 if(isset($_SERVER['REQUEST_METHOD']))

    {

		if($_SERVER['REQUEST_METHOD']=="POST")

		{

		



	$loginid=$this->session->userdata('id');

	$data = array('metaid'=>$_POST['id'],

	'movements_date'=>$_POST['Date'],
	'equipment'=>$_POST['equipment'],
	'sending_tp'=>$_POST['Sending_Tp'],
	'receiving_tp'=>$_POST['Receiving_Tp'],
	'reference'=>$_POST['Reference'],

	'quantity'=>$_POST['Quantity'],

    'transfer'=>$_POST['Transfer'],

    'Transaction'=>$_POST['Transaction'],

    'effective_date'=>$_POST['Effective_date'],

    'docket_number'=>$_POST['Docket_Number'],
    'rai_corr'=>$_POST['Rai_Corr'],
    'Type'=>$_POST['type'],
    'orig_movemevt'=>$_POST['Orig_Movement'],
    'export'=>$_POST['Export'],
    'batch'=>$_POST['Batch'],
    'bill'=>$_POST['Bill'],
    'notes'=>$_POST['Notes'],

    'login_id'=>$loginid);
		

	$res= $this->User_Model->insert_movements($data);

		}

	

 	if($_SERVER['REQUEST_METHOD'] == "GET")

{

		$data=array('show_hide'=>1);
     $this->db->where('metaid',$_GET["id"]);
     $res=$this->db->update('movements',$data);

} 

}







?>