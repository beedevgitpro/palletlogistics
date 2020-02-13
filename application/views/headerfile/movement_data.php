<?php if(isset($_REQUEST['actives']))
{ 
if($_REQUEST['actives'])
{
$metaid=$_REQUEST['actives'];
$result=$this->User_Model->trading_partner_creaion_details($metaid);
foreach($result as $row)
{
?>
<td>Source</td>
<td>Second Source</td>
<td><input type="checkbox" checked></td>
<td><?php echo $row->date_time;?></td>
<td><?php echo $this->User_Model->get_username($row->login_id);?></td>
<td><?php echo $row->date_time;?></td>
<td><?php echo $this->User_Model->get_username($row->login_id);?></td>
<td><?php echo $row->supplier_reference; ?></td>
<td><?php echo $row->rai_corr; ?></td>

<?php } ?>

<?php 
}
else
{
	
}
}

if(isset($_REQUEST['cha_iddd']))
{
	?>

<?php 
$metaid=$_REQUEST['cha_iddd'];
if($metaid)
{
$result=$this->User_Model->trading_partner_creaion_detailsss($metaid);
foreach($result as $row)
{
?>
<td><?php echo $row->date_time;?></td>
<?php $ac=$this->User_Model->equipment($row->equipment);?>
<td><?php echo $ac['equipment']; ?></td>
<td><?php echo $this->User_Model->trading_partner_names($row->sending_tp); ?></td>
<td><?php echo $this->User_Model->trading_partner_names($row->receiving_tp); ?></td>
<td><?php echo $row->reference; ?></td>
<td><?php echo $row->quantity; ?></td>
<td><?php echo $row->transaction; ?></td>
<td><?php echo $row->effective_date; ?></td>
<td><?php echo $row->docket_number;?></td>
<td><?php echo $row->type;?></td>
<td><?php echo $row->bill;?></td>
<td><?php echo $row->notes;?></td>
<td><?php echo "Source";?></td>
<td><?php echo $row->date_time;?></td>
<td><?php echo $this->User_Model->get_username($row->login_id);?></td>

<?php } ?>

<?php } }

 ?>