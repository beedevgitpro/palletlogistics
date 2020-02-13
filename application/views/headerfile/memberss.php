 <?php if(isset($_REQUEST['actives']))
 {
if($_REQUEST['actives']!=0)	
{	?>

 <th>TP Code</th>
  <th>Their Code</th>
   <th>Email</th>
    <th>Notify</th>
	 <th>Phone</th>
	  
	   <th>Address1</th>
	    <th>Address2</th>
		 <th>City</th>
		  <th>State/Prov/County</th>
		   <th>Postcode/ZIP</th>
		    <th>Country</th>
			  <th>Site</th>
		
 <?php }
else
{
	
}	
 }?>
 
  <?php if(isset($_REQUEST['createdby']))
 {
if($_REQUEST['createdby'])	
{	?>

 <th>Source</th>
  <th>Created Date/Time</th>
   <th>Created By User</th>
    <th>Modified Date/Time</th>
	 <th>Modified By User</th>

			
 <?php }
else
{
	
}	
 }
 
 if(isset($_REQUEST['tradingname']))
 { 
       if($_REQUEST['tradingname'])
	   {
?>
	 
	 <th>Trading Partner</th>
     <th>Site</th>
     <th>TP Code</th>
    <th>Their Code</th>
	 <th>Email</th> 
	 <th>Phone</th> 
	 <th>Address1</th> 
	 <th>address2</th> 
	 <th>City</th> 
	 <th>State/Prov/County</th> 
	 <th>Postcode/ZIP</th> 
	 <th>Country</th> 
	 <th>Active</th> 
	 <th>Notes</th> 
<?php 
	   }
	   else {
		   
	   }

	   } 
	   
	   
	   
	   
	   
	   
	if(isset($_REQUEST['tradingname']))
 { 
       if($_REQUEST['tradingname'])
	   {
?>
	 
	 <th>Trading Partner</th>
     <th>Site</th>
     <th>TP Code</th>
    <th>Their Code</th>
	 <th>Email</th> 
	 <th>Phone</th> 
	 <th>Address1</th> 
	 <th>address2</th> 
	 <th>City</th> 
	 <th>State/Prov/County</th> 
	 <th>Postcode/ZIP</th> 
	 <th>Country</th> 
	 <th>Active</th> 
	 <th>Notes</th> 
<?php 
	   }
	   else {
		   
	   }

	   } 
	   
	   
	   	if(isset($_REQUEST['accounts']))
 { 
       if($_REQUEST['accounts'])
	   {
?>

	 <th>Supplier TP</th>
     <th>Account Number</th>
	 <th>TN Delay Type</th> 
	 <th>TN Delay Days</th> 
	 <th>TN Delay Rule</th> 
	 <th>Allow TF</th> 
	 <th>TF Delay Type</th> 
	 <th>TF Delay Days</th> 
	 <th>TF Delay Rule</th> 
	 <th>Redeem Exchanges</th> 
	 <th>Redeem Same</th> 
	 <th>Complete</th> 
	 <th>Override Export Status</th> 
	 <th>Export Ons</th> 
	 <th>Export Offs</th> 
	 <th>Docket Format</th> 
	 <th>Con Note Required</th> 
	 <th>Con Note Numeric</th> 
	 <th>Con Note Description</th> 
	 <th>Reference Required</th> 
	 <th>Reference Characters</th> 
	 <th>Reference Numeric</th> 
	 <th>Reference Description</th> 
	 <th>Reminder</th> 
	 <th>Notes</th> 
<?php 
	   }
	   else {
		   
	   }

	   } 
	   
	   //==========================================================================================================
	   if(isset($_REQUEST['senderreceiver']))
	   {
		   if($_REQUEST['senderreceiver'])
			   	   {
?>
	 <th>Sender/Receiver</th>
     <th>Default</th>
	 <th>Phone</th> 
	 <th>Mobile/Cell</th> 
	 <th>Email</th> 
	 <th>Active</th> 
	 <th>Note</th> 
	

<?php 
	   }
	   else {
		   
	   }
		  
		   
	   }
	   
	   
	   
	    if(isset($_REQUEST['book_stock']))
	   {
		   if($_REQUEST['book_stock'])
			   	   {
?>
	 <th>Equipment</th>
     <th>Book Stock</th>
	
	

<?php 
	   }
	   else {
		   
	   }
		  
		   
	   }
	   
	   
	   
	   
	   ?>
	   
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
			  