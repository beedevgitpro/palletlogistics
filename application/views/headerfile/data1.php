<?php
if(isset($_REQUEST['stateId']))
{
$stateId=$_REQUEST['stateId'];
$result=$this->User_Model->get_franchise_detail($stateId);
foreach($result as $row)
{
?>
<option value="<?php echo $row->franchiseId; ?>"><?php echo $row->franchise; ?></option>
<?php
}
}

if(isset($_REQUEST['sponsorId']))
{
$sponsorId=$_REQUEST['sponsorId'];
$result=$this->User_Model->check_sponsorId($sponsorId);
foreach($result as $row)
{
$member_code=$row->member_code;
$memberId=$row->memberId;
}
if(@$member_code==$sponsorId)
{
?>
<label class="control-label " for="sponsorId">Sponsor ID *</label>
<input type="text" value="<?php echo @$member_code; ?>" class="required form-control" id="sponsorId" name="sponsorId" onfocusout="check_sponsorId(this)" placeholder="Sponsor Id">
<input type="hidden" name="sponsor" value="<?php echo @$memberId; ?>">
<?php
}
else
{
echo "<script>alert('This Sponsor ID Not Valid !!!')</script>";
?>
<label class="control-label " for="sponsorId">Sponsor ID *</label>
<input type="text" class="required form-control" id="sponsorId" name="sponsorId" onfocusout="check_sponsorId(this)" placeholder="Sponsor Id">
<?php
}
}

if(isset($_REQUEST['rdId']))
{
$rdId=$_REQUEST['rdId'];
$result=$this->User_Model->check_rdId($rdId);
foreach($result as $row)
{
$member_code1=$row->member_code;
$memberId1=$row->memberId;
}
if(@$member_code1==$rdId)
{
?>
 <label class="control-label " for="rdId"> SD/RD ID *</label>
<input id="rdId" value="<?php echo @$member_code1; ?>" name="rdId" type="text" class="required form-control" onfocusout="check_rdId(this)" Placeholder="SD/RD ID">
<input type="hidden" name="rd" value="<?php echo @$memberId1; ?>">
<?php
}
else
{
echo "<script>alert('This RD ID Not Valid !!!')</script>";
?>
 <label class="control-label " for="rdId"> SD/RD ID *</label>
<input id="rdId" name="rdId" type="text" class="required form-control" onfocusout="check_rdId(this)" Placeholder="SD/RD ID">

<?php
}
}

if(isset($_REQUEST['sponsorId2']))
{
$sponsorId2=$_REQUEST['sponsorId2'];
$rdId2=$_REQUEST['rdId2'];
$result=$this->User_Model->check_sponsorId($sponsorId2);
foreach($result as $row)
{
$member_code2=$row->member_code;
$name=$row->first_name;
}
$result1=$this->User_Model->check_rdId($rdId2);
foreach($result1 as $row1)
{
$member_code3=$row1->member_code;
$rd_name=$row1->first_name;
}
if($sponsorId2==@$member_code2 && $rdId2==@$member_code3)
{
?>
<ul class="list-unstyled w-list">
	<li><b>Sponsor ID :</b> <?php echo @$member_code2; ?> </li>
	<li><b>Sponsor Name :</b><?php echo @$name; ?>  </li>
	<li><b>RD ID:</b><?php echo @$member_code3; ?></li>
	<li><b>RD Name:</b> <?php echo @$rd_name; ?></li>
</ul>
<?php
}
}

if(isset($_REQUEST['us']))
{ 
$roleId=$_REQUEST['us'];
$res=$this->User_Model->UserDonotHavingRole($roleId);
foreach($res as $right)
{
 $login_type=$right->login_type;
 $username=$right->username;
  $id=$right->memberId;
 $res1=$this->User_Model->get_member_detail2($id);
 $emp_code=$res1['member_code'];
 $name=$res1['first_name'];
 ?>
 <option value="<?php echo $right->login_id;?>"><?php echo $emp_code."-".$name;?></option>
 <?php
}		 
}
if(isset($_REQUEST['use']))
{
    $roleId=$_REQUEST['use'];
    $res=$this->User_Model->UserHavingRole($roleId);
    foreach($res as $right)
	{
	$login_type=$right->login_type;
	$username=$right->username;
	$id=$right->memberId;
	
	$res1=$this->User_Model->get_member_detail2($id);
	$emp_code=$res1['member_code'];
	$name=$res1['first_name'];
	?>
	<option value="<?php echo $right->login_id;?>"><?php echo $emp_code."-".$name;?></option>
	<?php
	
	}
}

if(isset($_REQUEST['us2']))
{ 
$userId=$_REQUEST['us2'];
$res=$this->User_Model->UserDonotHavingRight($userId);
foreach($res as $right)
{
	?>
	<option class="form-control" value="<?php echo $right->menuId;?>"><?php echo $right->menuName;?></option>
	<?php
}		 
}
if(isset($_REQUEST['use2']))
{
    $userId=$_REQUEST['use2'];
	//echo "<script>alert('$user');</script>";
    $res=$this->User_Model->UserHavingRight($userId);
    foreach($res as $right)
	{
	?>
	<option class="form-control" value="<?php echo $right->menuId;?>"><?php echo $right->menuName;?></option>
    <?php
	}
}

if(isset($_REQUEST['us1']))
{ 
$userId=$_REQUEST['us1'];
$res=$this->User_Model->UserDonotHavingRight2($userId);
foreach($res as $right)
{
	?>
	<option class="form-control" value="<?php echo $right->menuId;?>"><?php echo $right->menuName;?></option>
	<?php
}		 
}
if(isset($_REQUEST['use1']))
{
    $userId=$_REQUEST['use1'];
	//echo "<script>alert('$user');</script>";
    $res=$this->User_Model->UserHavingRight2($userId);
    foreach($res as $right)
	{
	?>
	<option class="form-control" value="<?php echo $right->menuId;?>"><?php echo $right->menuName;?></option>
    <?php
	}
}


if(isset($_REQUEST['state']))
{ 
$country_id=$_REQUEST['state'];
$res= $results= $this->User_Model->get_states($country_id);
?>
 <option value="0">Select State</option>
 <?php
foreach($res as $right)
{
 ?>
 <option value="<?php echo $right->id;?>"><?php echo $right->name;?></option>
 <?php
}		 
}
if(isset($_REQUEST['city']))
{ 
$state_id=$_REQUEST['city'];
$res= $results= $this->User_Model->get_citys($state_id);
?>
 <option value="0">Select City</option>
 <?php
foreach($res as $right)
{

 

 ?>
 <option value="<?php echo $right->id;?>"><?php echo $right->name;?></option>
 <?php
}		 
}


if(isset($_REQUEST['rent_unit_price']))
{ 
$rent_unit_price=$_REQUEST['rent_unit_price'];
$results= $this->User_Model->get_rent_unit_price($rent_unit_price);
?>
<input type="text" class="required form-control" id="ffff" name="rent_unit_price" value="<?php echo $results ;?>">
<?php

}


if(isset($_REQUEST['type']))
{ 
$member_id=$_REQUEST['type'];
$results= $this->User_Model->get_trading_partner_type($member_id);
?>
<input type="text" class="required form-control"  name="type" value="<?php echo $results ;?>">
<?php

}
if(isset($_REQUEST['transfer']))
{
	?>
	

<option value="4">Transfer Off</option>	

<?php
}
//--------------------------------------->
if(isset($_REQUEST['transfer_full']))
{
?>

<option>--- Select Transaction--</option>
 <?php $result=$this->User_Model->fetch_transaction();
    foreach ($result as $row) {
		
            ?>
     <option value="<?php echo $row->transaction;?>"><?php echo $row->transaction; ?></option>
	 
             <?php
                        }
       


}


if(isset($_REQUEST['book_stock']))
{
	$equipment_id=$_REQUEST['book_stock'];
	$tp_id=$_REQUEST['tp_id'];
	$x=$this->User_Model->get_stock_book_details($tp_id,$equipment_id);
	?>
	 <input type="text" class="required form-control" id="book_stockss"  name="book_stock" value="<?php echo $x;?>" placeholder="Book Stock" readonly>
	 <?php
	
	
	
}
if(isset($_REQUEST['senderss_tp_id']))
{
	$tp_id=$_REQUEST['senderss_tp_id'];
	
	$x=$this->User_Model->get_sender_reciever_details($tp_id);
	foreach($x as $row)
	{
	if($tp_id==$row->trading_partner_name)
	{
	?>
	<option value="<?php echo $row->metaid; ?>" selected><?php echo $row->sender_receiver_name; ?></</option>
	
	 <?php
	}
	else
	{
		?>
		<option value="<?php echo $row->metaid; ?>"><?php echo $row->sender_receiver_name; ?></option>
		<?php
	}
	}
	
	
}
if(isset($_REQUEST['modals']))
{
	$tp_id=$_REQUEST['modals'];
	?>


<button type="button" id="modal" class="btn btn-info" data-toggle="modal" data-target="#tp_ac_modal">Data Filtering</button>
	<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
 

  <!-- Modal -->
  <div class="modal fade" id="tp_ac_modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add TP Account</h4>
        </div>
        <div class="modal-body">
          <p>This Trading Partner Does Not Have a Account Profile</p>Do You Want to Add New Trading Partner Account?
        </div>
        <div class="modal-footer">
          <a href="<?php echo base_url('User/tp_account?xyz='.base64_encode($tp_id));?>" class="btn btn-default">Yes</a>
          <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

		<script>

jQuery(function(){
   jQuery('#modal').click();
});
</script>


	<?php
}

if(isset($_REQUEST['monthly']))
{
	$result=$this->User_Model->get_monthly_data();
	//$time = strtotime($result['movements_date']);
	
	
	
$a_date = $result['movements_date'];
$first_period=date("Y-m-t", strtotime($a_date));

    
?>

	<!-----------------serch_periods_time------------------------------------->

<div class="col-md-2">
<div class="form-group">
<label for="field-1" class="control-label">1st Period End Date</label>
<div id="monthly_record"></div>
<input type="date" class="form-control className sixperiods third" name="first_period" value="<?php echo $first_period;?>" readonly>
</div>
</div>
<?php
  $time =  strtotime($first_period);
 $second_period = date("Y-m-d", strtotime("-1 month", $time));
	?>
<div class="col-md-2">
<div class="form-group">
<label for="field-1" class="control-label">2nt Period End Date</label>
<input type="date" class="form-control className sixperiods third"  value="<?php echo $second_period;?>" readonly>
</div>
</div>
<?php
  $time =  strtotime($second_period);
 $third_period = date("Y-m-d", strtotime("-1 month", $time));
	?>
<div class="col-md-2">
<div class="form-group">
<label for="field-1" class="control-label">3rd Period End Date</label>
<input type="date" class="form-control className sixperiods third" value="<?php echo $third_period; ?>" readonly>
</div>
</div>
<?php
$time =  strtotime($third_period);
 $fourth_period = date("Y-m-d", strtotime("-1 month", $time));
 ?>
<div class="col-md-2">
<div class="form-group">
<label for="field-1" class="control-label">4th Period End Date</label>
<input type="date" class="form-control className sixperiods forth"  value="<?php echo $fourth_period; ?>" readonly>
</div>
</div>
<?php
$time =  strtotime($fourth_period);
$fifth_period = date("Y-m-d", strtotime("-1 month", $time));
 ?>
<div class="col-md-2">
<div class="form-group">
<label for="field-1" class="control-label">5th Period End Date</label>
<input type="date" class="form-control className sixperiods forth"  value="<?php echo $fifth_period; ?>" readonly>
</div>
</div>
<?php
$time =  strtotime($fifth_period);
$six_period = date("Y-m-d", strtotime("-1 month", $time));
 ?>
<div class="col-md-2">
<div class="form-group">
<label for="field-1" class="control-label">6th Period End Date</label>
<input type="date" class="form-control className sixperiods forth" value="<?php echo $six_period;?>" readonly>
</div>
</div>
	<?php
	
	
	
}

//-------------------------------------------weekly----------------------------------------

if(isset($_REQUEST['weekly']))
{
	$result=$this->User_Model->get_monthly_data();	
    $a_date = $result['movements_date'];
    $first_period=date("Y-m-t", strtotime($a_date));
  
?>

<div class="col-md-2">
<div class="form-group">
<label for="field-1" class="control-label">1st Period End Date</label>
<div id="monthly_record"></div>
<input type="date" class="form-control" name="first_period"  value="<?php echo $first_period;?>" readonly>
</div>
</div>
<?php
  $time =  strtotime($first_period);
 $second_period = date("Y-m-d", strtotime("-7 day", $time));
	?>
<div class="col-md-2">
<div class="form-group">
<label for="field-1" class="control-label">2nt Period End Date</label>
<input type="date" class="form-control className sixperiods third" value="<?php echo $second_period;?>" readonly>
</div>
</div>
<?php
  $time =  strtotime($second_period);
 $third_period = date("Y-m-d", strtotime("-7 day", $time));
	?>
<div class="col-md-2">
<div class="form-group">
<label for="field-1" class="control-label">3rd Period End Date</label>
<input type="date" class="form-control className sixperiods third"  value="<?php echo $third_period; ?>" readonly>
</div>
</div>
<?php
$time =  strtotime($third_period);
 $fourth_period = date("Y-m-d", strtotime("-7 day", $time));
 ?>
<div class="col-md-2">
<div class="form-group">
<label for="field-1" class="control-label">4th Period End Date</label>
<input type="date" class="form-control className sixperiods forth"   value="<?php echo $fourth_period; ?>" readonly>
</div>
</div>
<?php
$time =  strtotime($fourth_period);
$fifth_period = date("Y-m-d", strtotime("-7 day", $time));
 ?>
<div class="col-md-2">
<div class="form-group">
<label for="field-1" class="control-label">5th Period End Date</label>
<input type="date" class="form-control className sixperiods forth"  value="<?php echo $fifth_period; ?>" readonly>
</div>
</div>
<?php
$time =  strtotime($fifth_period);
$six_period = date("Y-m-d", strtotime("-7 day", $time));
 ?>
<div class="col-md-2">
<div class="form-group">
<label for="field-1" class="control-label">6th Period End Date</label>
<input type="date" class="form-control className sixperiods forth" value="<?php echo $six_period;?>" readonly>
</div>
</div>
	<?php
   }
?>


<!---------------------------------------------------------->

<?php

if(isset($_REQUEST['custom_periods']))
{
	$result=$this->User_Model->get_monthly_data();	
    $a_date = $result['movements_date'];
    $first_period=date("Y-m-t", strtotime($a_date));
  
?>

<div class="col-md-2">
<div class="form-group">
<label for="field-1" class="control-label">1st Period End Date</label>
<div id="monthly_record"></div>
<input type="date" class="form-control" name="first_period" value="<?php echo $first_period;?>">
</div>
</div>
<?php
  $time =  strtotime($first_period);
 $second_period = date("Y-m-d", strtotime("-7 day", $time));
	?>
<div class="col-md-2">
<div class="form-group">
<label for="field-1" class="control-label">2nt Period End Date</label>
<input type="date" class="form-control className sixperiods third" value="<?php echo $second_period;?>">
</div>
</div>
<?php
  $time =  strtotime($second_period);
 $third_period = date("Y-m-d", strtotime("-7 day", $time));
	?>
<div class="col-md-2">
<div class="form-group">
<label for="field-1" class="control-label">3rd Period End Date</label>
<input type="date" class="form-control className sixperiods third"  value="<?php echo $third_period; ?>">
</div>
</div>
<?php
$time =  strtotime($third_period);
 $fourth_period = date("Y-m-d", strtotime("-7 day", $time));
 ?>
<div class="col-md-2">
<div class="form-group">
<label for="field-1" class="control-label">4th Period End Date</label>
<input type="date" class="form-control className sixperiods forth"   value="<?php echo $fourth_period; ?>">
</div>
</div>
<?php
$time =  strtotime($fourth_period);
$fifth_period = date("Y-m-d", strtotime("-7 day", $time));
 ?>
<div class="col-md-2">
<div class="form-group">
<label for="field-1" class="control-label">5th Period End Date</label>
<input type="date" class="form-control className sixperiods forth"  value="<?php echo $fifth_period; ?>" >
</div>
</div>
<?php
$time =  strtotime($fifth_period);
$six_period = date("Y-m-d", strtotime("-7 day", $time));
 ?>
<div class="col-md-2">
<div class="form-group">
<label for="field-1" class="control-label">6th Period End Date</label>
<input type="date" class="form-control className sixperiods forth" value="<?php echo $six_period;?>" >
</div>
</div>
	<?php
   }
   
   
   
if(isset($_REQUEST['openig_balance']))
{ 
$openig_balance=$_REQUEST['openig_balance'];
$openig_balances= $this->User_Model->get_opening_balance($openig_balance);
?>
<input type="text" class="required form-control" id="opening_balance" name="opening_balance"  value="<?php echo $openig_balances;?>" readonly>
<?php
}
if(isset($_REQUEST['closing_balance']))
{
$closing_balance=$_REQUEST['closing_balance'];
$closing_balance= $this->User_Model->get_opening_balance($closing_balance);
?>
<input type="text" class="required form-control" id="closing_balance" name="closing_balance"  value="<?php echo $closing_balance;?>" readonly>
<?php	
}
 
  if(isset($_POST['name'])) 
  {
	 // $this->User_Model->testtt();
	  
	  
  }
   
   
   
   if(isset($_REQUEST['type_id']))
   { 
if($_REQUEST['type_id']==4)
{
	 
?>
<div class="col-md-6">
	<div class="form-group clearfix">
<label class="control-label " for="mobile">Account Number</label>

<input type="text" class="required form-control" name="account_number" placeholder="Account Number">

</div>
</div> 
<div class="col-md-6">
	<div class="form-group clearfix">
<label class="control-label " for="mobile">Account Name</label>

<input type="text" class="required form-control" name="account_name" placeholder="Account Name">



</div> 
</div>
<div class="col-md-6">
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="" value="1" name="gdn" >
<label class="control-label" for="gender">Generate Docket Numbers</label>
</div>
</div>
<div class="col-md-6">
	<div class="form-group clearfix">
<label class="control-label " for="mobile">Prefix</label>

<input type="text" class="required form-control" name="prefix" onkeyup="find_lenth(this.value),alphaOnly(event)"  onkeypress="return (event.charCode > 64 && 
event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">

</div> 
</div>
<div class="col-md-6">
	<div class="form-group clearfix">
<label class="control-label " for="mobile">Start Number</label>

<input type="text" class="required form-control" name="start_number" placeholder="Start Number" onkeyup="startnumber(this.value)">

</div>
</div> 
<div class="col-md-6">
	<div class="form-group clearfix">
<label class="control-label " for="mobile">Next Number</label>

<input type="number" class="required form-control" name="next_number" placeholder="Next Number" onkeyup="nextnumber(this.value)">

</div>
</div>  
<div class="col-md-6">
	<div class="form-group clearfix">
<label class="control-label " for="mobile">End Number</label>

<input type="number" class="required form-control" name="end_number" placeholder="End Number" onkeyup="endnumber(this.value)">

</div>
</div> 
<div class="col-md-6">
	<div class="form-group clearfix">
<label class="control-label " for="mobile">Suffix</label>

<input type="text" class="required form-control" name="suffix" placeholder="Suffix" onkeypress="return (event.charCode > 64 && 
event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" onkeyup="suffixes(this.value)">

</div>
</div>  



 <?php  }
 if($_REQUEST['type_id']==1)
 { 
$form_id=3;
$login_idew=$this->session->userdata('id');
$result=$this->User_Model->get_form_fieldsddd($form_id,$login_idew);
$fields_id=$this->User_Model->find_fields_order($result);
@$fields = explode(',', $result);

$ii=0;
foreach($fields_id as $row)
{

	$z[$row->fields_order]=@$fields[$ii];
	$ii++;
}

?>
<div class="col-md-6" <?php if (@$z[18]==106){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="mobile">Special TP</label>


<select name="special" class="required form-control">
<option value=''>Select Special TP</option>
<?php  $resultss=$this->User_Model->trading_partner_special(); 
foreach($resultss as $row)
{
?>
<option value="<?php echo $row->memberId; ?>"><?php echo $row->tp_name; ?></option>
<?php } ?>
</select> 

</div>
</div>
<div class="col-md-6">
	<div class="form-group clearfix">
<label class="control-label " for="mobile">Chep/Loscam Account Number</label>

<input type="text" class="required form-control" name="account_number" placeholder="Chep/Loscam Account Number">

</div>
</div> 

<div class="col-md-6" <?php if (@$z[18]==106){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="mobile">Profile</label>


<select name="special" class="required form-control">
<option value=''>Select Profile</option>
<?php  $resultss=$this->User_Model->trading_partner_profile(); 
foreach($resultss as $row)
{
?>
<option value="<?php echo $row->metaid; ?>"><?php echo $row->profile_name; ?></option>
<?php } ?>
</select> 

</div>
</div>

<div class="col-md-6" <?php if (@$z[4]==61){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="last_name">Transit Days</label>

<input type="text" class="form-control"  name="transit_days" placeholder="Transit Days">

</div>
</div>
<div class="col-md-3" <?php if (@$z[13]==70){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="required form-control" id="bank" name="allow_exchange" placeholder="Allow Exchange">
<label class="control-label " for="first_name">Allow Exchange</label>

</div>
</div>

<div class="col-md-6" <?php if (@$z[8]==65){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="last_name">Credit Limit</label>

<input type="text" class="form-control"  name="credit_limit" placeholder="Credit Limit">

</div>
</div>
<div class="col-md-6" <?php if (@$z[9]==66){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="form-control"  name="allow_tn" placeholder="Allow TN">
<label class="control-label" for="last_name">Allow TN</label>

</div>
</div>

<div class="col-md-6" <?php if (@$z[10]==67){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="last_name">TN Delay Type</label>

<select name="tn_delay_type"  class="required form-control">
<option value="">--- Select TN Delay Type ---</option>
<?php
$result=$this->User_Model->tntf_delay_type();
foreach($result as $row)
{

echo"<option value='$row->tntf_name'>$row->tntf_name</option>";

}
?>
</select>
</div>
</div>

<div class="col-md-6" <?php if (@$z[11]==68){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="last_name">Tf Delay Days</label>

<input type="text" class="form-control"  name="tf_delay_days" placeholder="Tf Delay Days">

</div>
</div>
<div class="col-md-6" <?php if (@$z[12]==69){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="required form-control"  name="tf_delay_rule" placeholder="Tf Delay Rule">
<label class="control-label " for="father">Tf Delay Rule</label>

</div>
</div>

<div class="col-md-3" <?php if (@$z[14]==71){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="form-control" id="bank" name="redeem_exchange" placeholder="Redeem Exchange" value="1">
<label class="control-label " for="first_name">Redeem Exchange</label>

</div>
</div>
<div class="col-md-3" <?php if (@$z[15]==72){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="required form-control"  name="redeem_same" placeholder="Redeem Same" value="1">
<label class="control-label " for="first_name">Redeem Same</label>

</div>
</div>
<div class="col-md-3" <?php if (@$z[16]==73){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="required form-control"  name="tpa_complete" placeholder="Complete" value="1">
<label class="control-label " for="first_name">Complete</label>

</div>
</div>


<div class="col-md-3" <?php if (@$z[17]==74){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="required form-control"  name="override_export_status" placeholder="Override Export Status" value="1">
<label class="control-label " for="first_name">Override Export Status</label>

</div>
</div>
<div class="clearfix"></div>

<div class="col-md-3" <?php if (@$z[18]==75){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix  checkboxcontainer">

<input type="checkbox" class="required form-control"  name="export_Ons" placeholder="Override Export Status" value="1">
<label class="control-label " for="first_name">Export Ons</label>

</div>
</div>
<div class="clearfix"></div>

<div class="col-md-3" <?php if (@$z[19]==76){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="required form-control"  name="export_offs" placeholder="Override Export Status" value="1">
<label class="control-label " for="first_name">Export Offs</label>

</div>
</div>
<div class="clearfix"></div>


<div class="col-md-12" <?php if (@$z[20]==77){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="last_name">Docket Format</label>

<select class='form-control' name='docket_format'>
<?php
$resss=$this->User_Model->get_docket_format();
foreach($resss as $rowss)
{ ?>
<option value='<?php echo $rowss->docket_format_type; ?>'><?php echo $rowss->docket_format_type; ?></option>
<?php	} ?>
</select>

</div>
</div>
<div class="clearfix"></div>

<div class="col-md-12" <?php if (@$z[21]==78){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="required form-control"  name="con_note_required" placeholder="Con Note Required" value="1">
<label class="control-label " for="first_name">Con Note Required</label>

</div>
</div>

<div class="col-md-12" <?php if (@$z[22]==79){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix ">
<label class="control-label " for="first_name">Con Note Characters</label>

<input type="text" class="required form-control"  name="con_note_characters" placeholder="Con Note Characters">

</div>
</div>
<div class="col-md-12" <?php if (@$z[23]==80){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">


<input type="checkbox" class="required form-control"  name="con_note_numeric" placeholder="Con Note Numeric" value="1">
<label class="control-label " for="first_name">Con Note Numeric</label>

</div>
</div>
<div class="col-md-12" <?php if (@$z[24]==81){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="first_name">Con Note Description</label>

<input type="text" class="required form-control"  name="con_note_description" placeholder="Con Note Description">

</div>
</div>

<div class="col-md-12" <?php if (@$z[25]==82){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">


<input type="checkbox" class="required form-control"  name="reference_required" placeholder="Override Export Status" value="1">
<label class="control-label " for="first_name">Reference Required</label>

</div>
</div>

<div class="col-md-12" <?php if (@$z[26]==83){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="first_name">Reference Characters</label>                                              
<input type="text" class="required form-control"  name="reference_characters" placeholder="Reference Characters">


</div>
</div>


<div class="col-md-12" <?php if (@$z[27]==84){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="required form-control"  name="reference_numeric" placeholder="Reference Numeric" value="1">
<label class="control-label " for="first_name">Reference Numeric</label>

</div>
</div>
<div class="col-md-12" <?php if (@$z[28]==85){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix ">
<label class="control-label " for="first_name">Reference Description</label>                                              
<input type="text" class="required form-control"  name="reference_description" placeholder="Reference Description" >


</div>
</div>

<div class="col-md-12" <?php if (@$z[29]==86){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="required form-control"  name="reminder" value="1">
<label class="control-label " for="first_name">Reminder</label>

</div>
</div>

<div class="col-md-12" <?php if (@$z[30]==87){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="address">Notes *</label>

<textarea name="note" class="required form-control">
</textarea>
</div>
</div>

<?php	 
 }
   if($_REQUEST['type_id']==3)
   {
	   ?>
<input type="button" id="more_fields" onclick="add_fields();" value="Add Equipment Unit Price" />


 <div class="content" id="wrappersses"> </div>
    <div class="content" id="wrapperss"> </div>
   
<?php 
	   
   }
   }

if(isset($_REQUEST['sup_id']))
{
	$sup_ides=$_REQUEST['sup_id'];

?>
<div class="container">
  
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Supplier Account Number</th>
        <th>Supplier Account Name</th>
        <th>Supplier Generate Docket</th>
        <th>Prefix</th>
        <th>Start Number</th>
        <th>Next Number</th>
        <th>End Number</th>
        <th>Suffix</th>
      </tr>
    </thead>
    <tbody>
	<?php $supp=$this->User_Model->find_supplier_details($sup_ides)?>
      <tr>
        <td><?php echo $supp['supplier_ac_no'] ;?></td>
        <td><?php echo $supp['supplier_ac_name'] ;?></td>
        <td> <?php if($supp['supplier_generate_docket']==1){ ?><input type="checkbox" style="width:20px;height:20px;"; disabled <?php echo"checked"; ?>/> <?php }?> &nbsp;</td>
        <td><?php echo $supp['prefix'] ;?></td>
        <td><?php echo $supp['start_number'] ;?></td>
        <td><?php echo $supp['next_number'] ;?></td>
        <td><?php echo $supp['end_number'] ;?></td>
        <td><?php echo $supp['suffix'] ;?></td>
      </tr>
 
  
    </tbody>
  </table>
  </div>
</div>
<?php
}



if(isset($_REQUEST['docket_id']))
{
	$docket_id=$_REQUEST['docket_id'];
	$roww=$this->User_Model->get_docket_number($docket_id);
	$dc=$roww['prefix'].$roww['start_number'].$roww['next_number'].$roww['end_number'].$roww['suffix'];
	
	?>
	<input type="text" class="required form-control"   name="docket_number" placeholder="Docket Number" value="<?php echo $dc; ?>" style="text-transform:uppercase">
	
	<?php
}






?>




   
   
   
   





