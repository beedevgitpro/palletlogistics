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
<th>Source</th>
<th>Second Source</th>
<th data-breakpoints="xs">Docket</th>
<th data-breakpoints="xs sm md">Created Date/Time</th>
<th data-breakpoints="xs sm md">Created By User</th>
<th data-breakpoints="xs sm md">Modified Date/Time</th>
<th data-breakpoints="xs sm md">Modified By User</th>
<th data-breakpoints="xs sm md">Supplier Reference</th>
<th data-breakpoints="xs sm md">Rej/Corr</th>
</tr>
</thead>
	    <tbody>
		<tr>
		<?php $data=$this->User_Model->get_movements_details($id); 
		
		?>
	 <td><?php echo "Keyed"; ?></td>
     <td><?php echo ""; ?></td>
	 <td><input type="checkbox" name="cb1"  id="" class="chb btn btn-xs btn-info"></td>
	 <th><?php echo $data['date_time']; ?></th>  
	 <td><?php echo $data['date_time']; ?></td>
     <th><?php echo $data['login_id']; ?></th>
	 <th><?php echo  $data['login_id'];?></th> 
	 <th><?php echo ""; ?></th> 
	 <td><?php echo ""; ?></td>
 
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
	<th>Date</th>
<th>Equipment</th>
<th data-breakpoints="xs">Sending Tp</th>
<th data-breakpoints="xs sm md">Receiving TP</th>
<th data-breakpoints="xs sm md">Reference</th>
<th data-breakpoints="xs sm md">Quantity</th>
<th data-breakpoints="xs sm md">Transaction</th>
<th data-breakpoints="xs sm md">Effective Date</th>
<th data-breakpoints="xs sm md">Docket Number</th>
<th data-breakpoints="xs sm md">Type</th>
<th data-breakpoints="xs sm md">Bill</th>
<th data-breakpoints="xs sm md">Notes</th>
<th data-breakpoints="xs sm md">Source</th>
<th data-breakpoints="xs sm md">Created Date/Time</th>
<th data-breakpoints="xs sm md">Modified By User</th>
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