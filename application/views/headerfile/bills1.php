 <?php if(isset($_REQUEST['actives']))
 {
if($_REQUEST['actives']!=0)	
{	?>

 <th>Opening Balance</th>
  <th>Bill Days</th>
   <th>OB Equipment Days</th>
    <th>OB Rent</th>
	 

		
 <?php }
else
{
	
}	
 }?>
<!-----------------------//second---------------------->
 <?php if(isset($_REQUEST['transferon']))
 {
if($_REQUEST['transferon']!=0)	
{	?>

    <th>Reconcile</th>
    <th>Bill Date</th>
    <th>Date</th>
    <th>Effective Date</th>
    <th>Sending TP</th>
    <th>Receiving TP</th>
    <th>Transaction</th>
    <th>Docket Number</th>
    <th>Reference</th>
    <th>Con Note</th>
    <th>Type</th>
    <th>Quantity</th>
    <th>Days</th>
    <th>Equipment Days</th>
    <th>Rent</th>
    <th>Fee Unit Price</th>
	<th>Fees</th>
    <th>Amount</th>
    <th>Notes</th>
    
	 

		
 <?php }
else
{
	
}	
 }?>
 
 
 
 <!-----------------------//third---------------------->
 <?php if(isset($_REQUEST['transferoff']))
 {
if($_REQUEST['transferoff']!=0)	
{	?>

 <th>Reconcile</th>
  <th>Bill Date</th>
   <th>Date</th>
    <th>Effective Date</th>
    <th>Sending TP</th>
    <th>Receiving TP</th>
    <th>Transaction</th>
    <th>Docket Number</th>
    <th>Reference</th>
    <th>Con Note</th>
    <th>Type</th>
    <th>Quantity</th>
    <th>Days</th>
    <th>Equipment Days</th>
    <th>Rent</th>
    <th>Fee Code</th>
    <th>Fee Unit Price</th>
    <th>Fees</th>
    <th>Amount</th>
    <th>Notes</th>
	 

		
 <?php }
else
{
	
}	
 }?>
 
 
 <!-----------------------//fourth---------------------->
 <?php if(isset($_REQUEST['location_unit']))
 {
if($_REQUEST['location_unit']!=0)	
{	?>

 <th>Location TP</th>
  <th>Rent Unit Price</th>
 
	 

		
 <?php }
else
{
	
}	
 }
 
 //=======================================================
 
  if(isset($_REQUEST['other_charges']))
 {
if($_REQUEST['other_charges']!=0)	
{	?>

 <th>Location TP</th>
  <th>Description</th>
  <th>Movement Fees</th>
  <th>Quantity</th>
  <th>Unit Price</th>
  <th>Amount</th>
 
	 

		
 <?php }
else
{
	
}	
 }
 
 
 
 
 ?>