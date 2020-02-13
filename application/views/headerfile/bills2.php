<?php	
	if(isset($_REQUEST['actives']))
	   {
		   
     if($_REQUEST['actives']!=0)
	   {
		  $id=$_REQUEST['actives'];
		  $res=$this->User_Model->get_bill_details($id);
		  foreach($res as $x)
		  {
?>
	 
	 <td><?php echo $x->opening_balance; ?></td>
     <th><?php echo "i"; ?></th>
	 <th><?php echo "j"; ?></th> 
	 <th><?php echo "k"; ?></th> 

<?php 
		   }
	   }
	   else {
		   
	   }
		   
	   }
	   
	   //===============transferon===================================
	   
	   	
	if(isset($_REQUEST['transferon']))
	   {
		   
     if($_REQUEST['transferon']!=0)
	   {
		   $id=$_REQUEST['transferon'];
		   $res=$this->User_Model->get_bill_transationon($id);
		   foreach($res as $x)
		   {
?>
	 
	 <td><?php echo ""; ?></td>
     <th><?php echo ""; ?></th>
	 <th><?php echo $x->movements_date; ?></th> 
	 <th><?php echo $x->effective_date; ?></th> 
	  
	 <td><?php echo $x->sending_tp; ?></td>
     <th><?php echo $x->receiving_tp; ?></th>
	 <th><?php echo $x->transaction; ?></th> 
	 <th><?php echo $x->docket_number; ?></th>
	 <th><?php echo $x->reference; ?></th>
	 <th><?php echo $x->con_note; ?></th>
	 <th><?php echo $x->type; ?></th>
	 <th><?php echo $x->quantity; ?></th>
	 <th><?php echo $x->days; ?></th>
	 <th><?php echo $x->equipment_days; ?></th>
	 <th><?php echo $x->rent; ?></th>
	 <th><?php echo $x->fee_unit_price; ?></th>
	 <th><?php echo $x->fees; ?></th>
	 <th><?php echo $x->amount; ?></th>
	 <th><?php echo $x->notes; ?></th>
	

<?php 
		   }
	   }
	   else {
		   
	   }
		   
	   }
	   
	   
	   
	 
	if(isset($_REQUEST['transferoff']))
	   {
		   
     if($_REQUEST['transferoff']!=0)
	   {
		   $id=$_REQUEST['transferoff'];
		   $res=$this->User_Model->get_bill_transationoff($id);
		   foreach($res as $x)
		   {
?>
	 
	 <td><?php echo ""; ?></td>
     <th><?php echo ""; ?></th>
	 <th><?php echo $x->movements_date; ?></th> 
	 <th><?php echo $x->effective_date; ?></th> 
	  
	 <td><?php echo $x->sending_tp; ?></td>
     <th><?php echo $x->receiving_tp; ?></th>
	 <th><?php echo $x->transaction; ?></th> 
	 <th><?php echo $x->docket_number; ?></th>
	 <th><?php echo $x->reference; ?></th>
	 <th><?php echo $x->con_note; ?></th>
	 <th><?php echo $x->type; ?></th>
	 <th><?php echo $x->quantity; ?></th>
	 <th><?php echo $x->days; ?></th>
	 <th><?php echo $x->equipment_days; ?></th>
	 <th><?php echo $x->rent; ?></th>
	 <th><?php echo $x->fee_unit_price; ?></th>
	 <th><?php echo $x->fees; ?></th>
	 <th><?php echo $x->amount; ?></th>
	 <th><?php echo $x->notes; ?></th>
	

<?php 
		   }
	   }
	   else {
		   
	   }
		   
	   }
	   
	   
	   if(isset($_REQUEST['location_unit']))
	   {
		   
     if($_REQUEST['location_unit']!=0)
	   {
		   //$id=$_REQUEST['senderreceiver'];
		  // $res=$this->User_Model->get_sender_receiver_details($id);
		  // foreach($res as $x)
		 //  {
?>
	 
	 <td><?php echo ""; ?></td>
     <th><?php echo ""; ?></th>


<?php 
		  // }
	   }
	   else {
		   
	   }
		   
	   }