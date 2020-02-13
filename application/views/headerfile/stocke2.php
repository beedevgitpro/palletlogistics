<?php	
	if(isset($_REQUEST['actives']))
	   {
		   
     if($_REQUEST['actives']!=0)
	   {
		   $id=$_REQUEST['actives'];
		   //$senderid=$_REQUEST['senderid'];
		   //$equipmentid=$_REQUEST['equipmentid'];
		   
		//  $res=$this->User_Model->get_stocktake_sentdetails($senderid,$equipmentid);
		//  foreach($res as $x)
		// {
?>
	 
	 <td><?php echo ""; ?></td>
     <th><?php echo ""; ?></th>
	 <th><?php echo ""; ?></th> 
	 <th><?php echo ""; ?></th>  
	 <td><?php echo ""; ?></td>
     <th><?php echo ""; ?></th>
	 <th><?php echo ""; ?></th> 
	 <th><?php echo ""; ?></th> 
	 <td><?php echo ""; ?></td>
     <th><?php echo ""; ?></th>
	 <th><?php echo ""; ?></th> 
	

<?php 
		 //  }
	   }
	   else {
		   
	   }
		   
	   }
	   
	   //===============transferon===================================
	   
	   	
	if(isset($_REQUEST['equipment_sent']))
	   {
		   
     if($_REQUEST['equipment_sent']!=0)
	   {
		    $id=$_REQUEST['equipment_sent'];
		    $senderid=$_REQUEST['senderid'];
		   $equipmentid=$_REQUEST['equipmentid'];
		   $res=$this->User_Model->get_stocktake_sentdetails($senderid,$equipmentid);
		   foreach($res as $x)
		   {
?>
	 <td><?php echo $x->date_time; ?></td>
	 <td><?php ; ?></td>
	 <?php echo $cv=$this->User_Model->get_member_detail2($x->receiving_tp); ?>
     <th><?php echo $cv['tp_name']; ?></th>
	 <th><?php echo ""; ?></th> 
	 <th><?php echo $x->reference; ?></th> 
	  
	 <td><?php echo $x->quantity; ?></td>
     <th><?php echo $this->User_Model->transaction_name($x->transaction); ?></th>
	 <th><?php echo $x->effective_date; ?></th> 
	 <th><?php echo $x->docket_number; ?></th>
	 <th><?php echo $this->User_Model->get_movement_status($x->type); ?></th>
	 <th><?php echo $x->notes; ?></th>
<?php 
		   }
	   }
	   else {   
	   }   
	   }
	   if(isset($_REQUEST['Countsss']))
	   {
		   
     if($_REQUEST['Countsss']!=0)
	   {
		   //$id=$_REQUEST['senderreceiver'];
		  // $res=$this->User_Model->get_sender_receiver_details($id);
		  // foreach($res as $x)
		 //  {
?>
	 <td><?php echo "h"; ?></td>
     <th><?php echo "i"; ?></th>
	 <th><?php echo "j"; ?></th> 
	 <th><?php echo "k"; ?></th> 
	  
	 <td><?php echo "hf"; ?></td>
     <th><?php echo "if"; ?></th>
	 <th><?php echo "js"; ?></th> 
	 <th><?php echo "ka"; ?></th>

<?php 
		  // }
	   }
	   else {
		   
	   }
		   
	   }
	   
	   
	   if(isset($_REQUEST['modifiedd']))
	   {
		   
     if($_REQUEST['modifiedd']!=0)
	   {
		   $id=$_REQUEST['modifiedd'];
		   $senderid=$_REQUEST['senderid'];
		   $equipmentid=$_REQUEST['equipmentid'];
		   $res=$this->User_Model->get_stocktake_sentdetails($senderid,$equipmentid);
		   foreach($res as $x)
		  {
?>
	 
	 <td><?php echo ""; ?></td>
     <th><?php echo $x->date_time; ?></th>
	 <th><?php echo $x->login_id; ?></th> 
	 <th><?php echo $x->date_time; ?></th> 
	  
	 <td><?php echo $x->login_id; ?></td>
    

<?php 
		  }
	   }
	   else {
		   
	   }
		   
	   }