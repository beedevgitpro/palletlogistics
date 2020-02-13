<?php

		
	$result=$this->User_Model->get_max_movementsid();
	foreach($result as $row)
	{
	$metaid=$row->metaid;
	}
	$metaid=++$metaid;
	$date_time=date("Y-m-d H:i:s");
	$loginid=$this->session->userdata('id');
	$mov_date=$_POST['Date'];
	$equipment=$_POST['equipment'];
	$sending_tp=$_POST['Sending_Tp'];
	$con_note='';
	$sender_name='';
	$receiving_tp=$_POST['Receiving_Tp'];
	$receiver_name='';
	$reference=$_POST['Reference'];
	$sent='';
	$receive='';
	$carrier='';
	$quantity=$_POST['Quantity'];
	$trace_quantity='';
	$untrace_quantity='';
	$redeem_xn='';
	$unredeem_on='';
	$redeem_xf='';
	$unredeem_off='';
	$transfer=$_POST['Transfer'];
	$transaction=$_POST['Transaction'];
	$effective_date=$_POST['effective_date'];
	$docket_number=$_POST['Docket_Number'];
	$rai_corr=$_POST['Rai_Corr'];
	$rai_corr_date='';
	$type=$_POST['Type'];
	$orig_movemevt=$_POST['Orig_Movement'];
	$orig_bill='';
	$export=$_POST['Export'];
	$batch=$_POST['Batch'];
	$bill=$_POST['Bill'];
	$supplier_reference='';
	$days='';
	$equipment_days='';
	$dockets='';
	$rent='';
	$fee_code='';
	$fee_unit_price='';
	$fees='';
	$amount='';
	$notes=$_POST['Notes'];
	$data = array('metaid'=>$metaid,
	'movements_date'=>$mov_date,
	'equipment'=>$equipment,
	'sending_tp'=>$sending_tp,
	'sender_name'=>$sender_name,
	'receiving_tp'=>$receiving_tp,
	'receiver_name'=>$receiver_name,
	'carrier'=>$carrier,
	'reference'=>$reference,
	'sent'=>$sent,
	'receive'=>$receive,
	'quantity'=>$quantity,
	'trace_quantity'=>$trace_quantity,
	'untrace_quantity'=>$untrace_quantity,
	'redeem_xn'=>$redeem_xn,
	'unredeem_on'=>$unredeem_on,
	'redeem_xf'=>$redeem_xf,
	'unredeem_off'=>$unredeem_off,
	'transfer' =>$transfer,
	'transaction'=>$transaction,
	'effective_date'=>$effective_date,
	'con_note'=>$con_note,
	'docket_number'=>$docket_number,
	'rai_corr'=>$rai_corr,
	'rai_corr_date'=>$rai_corr_date,
	'type'=>$type,
	'orig_movemevt'=>$orig_movemevt,
	'orig_bill'=>$orig_bill,
	'export'=>$export,
	'batch'=>$batch,
	'bill'=>$bill,
	'supplier_reference'=>$supplier_reference,
	'days'=>$days,
	'equipment_days'=>$equipment_days,
	'rent'=>$rent,
	'fee_code'=>$fee_code,
	'fee_unit_price'=>$fee_unit_price,
	'fees'=>$fees,
	'amount'=>$amount,
	'dockets'=>$dockets,
	'Notes'=>$notes,
    'login_id'=>$loginid);
	$res= $this->User_Model->insert_movements($data);
		







 



















									?>