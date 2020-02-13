
<?php
if(isset($_REQUEST['cha_id']))
{
	if($_REQUEST['id']==1)
	{
	$memberid=$_REQUEST['cha_id'];	
	$xyz=$this->User_Model->get_memberssss($memberid);
	foreach($xyz as $row)
 ?>

<td><?php echo $row->code;?></td>
<td><?php echo $row->their_code;?></td>
<td><?php echo $row->emailid;?></td>
<td><?php echo $row->notify;?></td>
<td><?php echo $row->phone_number;?></td>
<td><?php echo $row->address1;?></td>
<td><?php echo $row->address2;?></td>
<td><?php echo $row->city;?></td>
<td><?php echo $row->state;?></td>
<td><?php echo $row->zip;?></td>
<td><?php echo $row->country;?></td>
<td><?php echo $row->location;?></td>


<?php 
	}
	else
	{
		
	}
} 

if(isset($_REQUEST['createdby']))
{
	$xr=$_REQUEST['createdby'];
$createdby=$this->User_Model->get_memberssss($xr);
foreach($createdby as $roww)
{
	
	?>
<td>Source</td>
<td><?php echo $roww->date_time;?></td>
<td><?php echo $this->User_Model->get_created_name($roww->login_id);?></td>
<td><?php echo $roww->date_time;?></td>
<td><?php echo $this->User_Model->get_created_name($roww->login_id);?></td>

<?php	
}


}

 if(isset($_REQUEST['tradingname']))
 { 
       if($_REQUEST['tradingname'])
	   {
?>
	 
	 <td></td>
     <th></th>
     <th></th>
    <th></th>
	 <th></th> 
	 <th></th> 
	 <th></th> 
	 <th></th> 
	 <th></th> 
	 <th></th> 
	 <th></th> 
	 <th></th> 
	 <th></th> 
	 <th></th> 
<?php 
	   }
	   else {
		   
	   }

	   } 
	   
	   if(isset($_REQUEST['accounts']))
	   {
		   
     if($_REQUEST['accounts'])
	   {
		   $id=$_REQUEST['accounts'];
		   $res=$this->User_Model->get_accounts_details($id);
		   foreach($res as $x)
		   {
?>
	 
	 <td><?php echo $x->tpa_supplier ?></td>
     <th><?php echo $x->tpa_account_number ?></th>
   
	 <th><?php echo $x->tpa_tf_delay_type; ?></th> 
	 <th><?php echo $x->tpa_tf_delay_days; ?></th> 
	 <th><?php echo $x->tpa_tf_delay_rule; ?></th> 
	 <th><?php echo $x->tpa_redeem_exchange; ?></th> 
	 <th><?php echo $x->tpa_redeem_same; ?></th> 
	 <th><?php echo $x->tpa_complete; ?></th> 
	 <th><?php echo $x->tpa_override_export_status; ?></th> 
	 <th><?php echo $x->tpa_export_on; ?></th> 
	 <th><?php echo $x->tpa_export_off; ?></th> 
	 <th><?php echo $x->tpa_docket_format; ?></th> 
	 <th><?php echo $x->tpa_con_note_required; ?></th> 
	 <th><?php echo $x->tpa_con_note_numeric; ?></th> 
	 <th><?php echo $x->tpa_con_note_decription; ?></th> 
	 <th><?php echo $x->tpa_reference_required; ?></th> 
	 <th><?php echo $x->tpa_reference_characters; ?></th> 
	 <th><?php echo $x->tpa_reference_numeric; ?></th> 
	 <th><?php echo $x->tpa_reference_description; ?></th> 
	 <th><?php echo $x->tpa_reminder; ?></th> 
	 <th><?php echo $x->tpa_notes; ?></th> 
<?php 
		   }
	   }
	   else {
		   
	   }
		   
	   }
	   
	   
	   //=========================================================================================================
	   
	   
	  if(isset($_REQUEST['senderreceiver']))
	   {
		   
     if($_REQUEST['senderreceiver'])
	   {
		   $id=$_REQUEST['senderreceiver'];
		   $res=$this->User_Model->get_sender_receiver_details($id);
		   foreach($res as $x)
		   {
?>
	 
	 <td><?php echo $x->sender_receiver_name; ?></td>
     <th><?php echo $x->defaults; ?></th>
	 <th><?php echo $x->phone_number; ?></th> 
	 <th><?php echo $x->mobile_number; ?></th> 
	 <th><?php echo $x->email; ?></th> 
	 <th><?php echo $x->active; ?></th> 
	 <th><?php echo $x->note; ?></th> 

<?php 
		   }
	   }
	   else {
		   
	   }
		   
	   }
	   
	   
	   
	 if(isset($_REQUEST['book_stock']))
	   {
		   
     if($_REQUEST['book_stock'])
	   {
		   $id=$_REQUEST['book_stock'];
		 // $res=$this->User_Model->get_book_stock($id);
		 //  foreach($res as $x)
		  // {
?>
	 
	 <td><?php echo ""; ?></td>
     <th><?php echo ""; ?></th>
	

<?php 
		  // }
	   }
	   else {
		   
	   }
		   
	   } 
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
		   
	   
	   
	   
	   ?>





