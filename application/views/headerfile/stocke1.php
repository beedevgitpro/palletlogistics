 <?php if(isset($_REQUEST['equipment_id']))
 {
if($_REQUEST['equipment_id'])	
{	?>
              <div class="content-page">      
              <div class="content">
              
              <div class="row">
              <div class="col-sm-12">
              <div class="card-box table-responsive">
      <div class="table-responsive">
      <br />
      <table id="_datatable-buttons" class="footable table table-striped  table-colored table-info footable-info table-bordered m-0" data-toggle-column="first" data-paging="true">
        <thead>
      <tr>
   <th>Date</th>
   <th>Date Received</th>
   <th>Sending TP</th>
   <th>Con Note</th>
   <th>Reference</th>
   <th>Quantity</th>
   <th>Transaction</th>
    <th>Effective Date</th>
    <th>Docket Number</th>
    <th>Type</th>
    <th>Note</th>
	 </tr>
</thead>
	    <tbody>
		<tr>
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
	 </tr>
        </tbody>
	</table>	
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	
 <?php }
else
{
	
}	
 }?>
<!-----------------------//second---------------------->
 <?php if(isset($_REQUEST['eq_sent_id']))
 {
if($_REQUEST['eq_sent_id']!=0)	
{	?>
              <div class="content-page">      
              <div class="content">
              <div class="container">   
              <div class="row">
              <div class="col-sm-12">
              <div class="card-box table-responsive">
      <div class="table-responsive">
      <br />
      <table id="_datatable-buttons" class="footable table table-striped  table-colored table-info footable-info table-bordered m-0" data-toggle-column="first" data-paging="true">
        <thead>
      <tr>
  <th>Date</th>
  <th>Date Received</th>
   <th>Receiving TP</th>
   <th>Con Note</th>
   <th>Reference</th>
   <th>Quantity</th>
   <th>Transaction</th>
    <th>Effective Date</th>
    <th>Docket Number</th>
    <th>Type</th>
    <th>Note</th>
	</tr>
    <?php
	/*       $id=$_REQUEST['eq_sent_id'];
		    $senderid=$_REQUEST['senderid'];
		   $equipmentid=$_REQUEST['equipmentid'];
		   $res=$this->User_Model->get_stocktake_sentdetails($senderid,$equipmentid);
		   foreach($res as $x)
		   { */
      ?> 
	  </thead>
	    <tbody>
		<tr>
	 <td><?php //echo $x->date_time; ?></td>
	 <td></td>
	 <?php //echo $cv=$this->User_Model->get_member_detail2($x->receiving_tp); ?>
     <th><?php //echo $cv['tp_name']; ?></th>
	 <th><?php //echo ""; ?></th> 
	 <th><?php // echo $x->reference; ?></th> 
	  
	 <td><?php //echo $x->quantity; ?></td>
     <th><?php //echo $this->User_Model->transaction_name($x->transaction); ?></th>
	 <th><?php //echo $x->effective_date; ?></th> 
	 <th><?php //echo $x->docket_number; ?></th>
	 <th><?php //echo $this->User_Model->get_movement_status($x->type); ?></th>
	 <th><?php //echo $x->notes; ?></th>
        </tr>
        </tbody>
		
 <?php }
else
{
	
} ?>
	</table>	
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>	
	<?php
 } ?>
 
 
 
 <!-----------------------//third---------------------->
 <?php if(isset($_REQUEST['counts_id']))
 {
if($_REQUEST['counts_id']!=0)	
{	?>
       <div class="content-page">      
       <div class="content">
       <div class="container">   
       <div class="row">
      <div class="col-sm-12">
      <div class="card-box table-responsive">
      <div class="table-responsive">
      <br />
      <table id="_datatable-buttons" class="footable table table-striped  table-colored table-info footable-info table-bordered m-0" data-toggle-column="first" data-paging="true">
        <thead>
      <tr>
 <th>Description</th>
  <th>Quantity</th>
   <th>Note</th>
</tr>
  </thead>
	    <tbody>
		<tr>
	<td><?php echo ""; ?></td>
     <th><?php echo ""; ?></th>
	 <th><?php echo ""; ?></th> 
		</tr>
	   </tbody>
	   

		
 <?php }
else
{
	
} ?>
	</table>	
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>	
	<?php
 } ?>
 
 
 <!-----------------------//fourth---------------------->
 <?php if(isset($_REQUEST['created_id']))
 {
  if($_REQUEST['created_id']!=0)	
  {	?>
<div class="content-page">      
       <div class="content">
       <div class="container">   
       <div class="row">
      <div class="col-sm-12">
      <div class="card-box table-responsive">
      <div class="table-responsive">
      <br />
      <table id="_datatable-buttons" class="footable table table-striped  table-colored table-info footable-info table-bordered m-0" data-toggle-column="first" data-paging="true">
        <thead>
      <tr>
  <th>Source</th>
  <th>Created Date/Time</th>
  <th>Created By User</th>
  <th>Modified Date/Time</th>
  <th>Modified By user</th>
  </tr>
  <thead>
		    <tbody>
		<tr>
	<td><?php echo ""; ?></td>
     <th><?php echo ""; ?></th>
	 <th><?php echo ""; ?></th> 
	 <th><?php echo ""; ?></th>
	 <th><?php echo ""; ?></th> 
		</tr>
	   </tbody>
 <?php }
else
{
	
} ?>
	</table>	
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>	
	<?php
 }
 
 //=======================================================
 
 
 
 
 
 
 ?>