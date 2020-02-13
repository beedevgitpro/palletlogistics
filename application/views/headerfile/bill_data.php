<?php
if(isset($_REQUEST['actives']))
{
if($_REQUEST['actives'])
{
	$id=$_REQUEST['actives'];
	?>
<div class="content-page">      
<div class="content">
<div class="row">
<div class="col-sm-12">
<div class="card-box table-responsive">
<div class="table-responsive">
      <table id="_datatable-buttons" class="footable table table-striped  table-colored table-info footable-info table-bordered m-0" data-toggle-column="first" data-paging="true">
        <thead>
      <tr>
<th>Opening Balance</th>
<th>Bill Days</th>
<th data-breakpoints="xs">OB Equipment Days</th>
<th data-breakpoints="xs sm md">OB Rent</th>

</tr>
</thead>
	    <tbody>
		<tr>
		<?php $data=$this->User_Model->get_movements_details($id); 
		
		?>
	 <td><?php echo "Keyed"; ?></td>
     <td><?php echo ""; ?></td>
	 <td><input type="checkbox" name="cb1"  id="" class="chb btn btn-xs btn-info"></td>

	
     <td><?php echo $data['login_id']; ?></td>

 
	 </tr>
        </tbody>
	</table>	
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
<?php
}
else
{	
}
}
if(isset($_REQUEST['rej_corr_id']))
{
	if($_REQUEST['rej_corr_id'])
	{
	?>
<div class="content-page">      
<div class="content">
<div class="row">
<div class="col-sm-12">
<div class="card-box table-responsive">
<div class="table-responsive">
      <table id="_datatable-buttons" class="footable table table-striped  table-colored table-info footable-info table-bordered m-0" data-toggle-column="first" data-paging="true">
        <thead>
      <tr>
	<th>Recocile</th>
<th>Bill Date</th>
<th data-breakpoints="xs">Date</th>
<th data-breakpoints="xs sm md">Effective Date</th>
<th data-breakpoints="xs sm md">Sending TP</th>
<th data-breakpoints="xs sm md">Receiving TP</th>
<th data-breakpoints="xs sm md">Transaction</th>
<th data-breakpoints="xs sm md">Dockert Number</th>
<th data-breakpoints="xs sm md">Reference</th>
<th data-breakpoints="xs sm md">Con Note</th>
<th data-breakpoints="xs sm md">Type</th>
<th data-breakpoints="xs sm md">Quantity</th>
<th data-breakpoints="xs sm md">Days</th>
<th data-breakpoints="xs sm md">Equipment Days</th>
<th data-breakpoints="xs sm md">Rent</th>
<th data-breakpoints="xs sm md">Fee Code</th>
<th data-breakpoints="xs sm md">Fee Unit Price</th>
<th data-breakpoints="xs sm md">Fees</th>
<th data-breakpoints="xs sm md">Amount</th>
<th data-breakpoints="xs sm md">Notes</th>
	 </tr>
	 </thead>
          <tbody>
		<tr>
		<?php 
		$ids=$_REQUEST['rej_corr_id'];
		$x=$this->User_Model->get_movements_detailss($ids);
		
         foreach($x as $row)
		 {
		?>
	 <td><?php echo $row->movements_date; ?></td>
     <th><?php echo $row->equipment; ?></th>
	 <th><?php echo $row->sending_tp; ?></th> 
	 <th><?php echo $row->receiving_tp; ?></th>  
	 <td><?php echo $row->reference; ?></td>
     <th><?php echo $row->quantity; ?></th>
	 <th><?php echo $row->transaction; ?></th> 
	 <th><?php echo $row->effective_date; ?></th> 
	 <td><?php echo $row->docket_number; ?></td>
     <th><?php echo $row->type; ?></th>
	 <th><?php echo $row->bill; ?></th> 
	 <th><?php echo $row->notes; ?></th>
	 <th><?php echo ''; ?></th> 
	 <th><?php echo $row->date_time; ?></th>
	 <th><?php echo $row->login_id; ?></th> 
		 <?php } ?>
	 </tr>
        </tbody>
	</table>	
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
<?php
	}
}
?>