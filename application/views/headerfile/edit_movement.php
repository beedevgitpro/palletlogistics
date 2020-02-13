<?php  
 
 
 
 
    $metaid=$_POST["id"];
    $text=$_POST["text"];
	 $text = $_POST["text"]; 
	 $column_name = $_POST["column_name"]; 
	//$date_time=date("Y-m-d H:i:s");
	$loginid=$this->session->userdata('id');
	
	$data = array('metaid'=>$metaid,
	'movements_date'=>$text,
	'equipment'=>'',
	'sending_tp'=>$column_name,
	'sender_name'=>'',
	'receiving_tp'=>'',
	'receiver_name'=>'',
	'reference'=>'',
	'sent'=>'',
	'receive'=>'',
	'carrier'=>'',
	'quantity'=>'',
	'trace_quantity'=>'',
	'untrace_quantity'=>'',
	'redeem_xn'=>'',
	'unredeem_on'=>'',
	'redeem_xf'=>'',
	'unredeem_off'=>'',
	'transfer' =>'',
	'transaction'=>'',
	//'effective_date'=>'',
	'docket_number'=>$text,
	'rai_corr'=>'',
	//'rai_corr_date'=>$rai_corr_date,
	'type'=>'',
	'orig_movemevt'=>'',
	'orig_bill'=>'',
	'export'=>'',
	'batch'=>'',
	'bill'=>'',
	'supplier_reference'=>'',
	'days'=>'',
	'equipment_days'=>'',
	'rent'=>'',
	'fee_code'=>'',
	'fee_unit_price'=>'',
	'fees'=>'',
	'amount'=>'',
	'Notes'=>'',
    'login_id'=>$loginid);
	$res= $this->User_Model->insert_movements($data);
	
	 if($res)  
 {  
      echo 'Data Updated';  
 } 
 ?>