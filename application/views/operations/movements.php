<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/zircos/material-design/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Jun 2018 06:22:03 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
<meta name="author" content="Coderthemes">

<!-- App favicon -->
<link rel="shortcut icon" href="<?php  base_url('assets/images/favicon.jpg'); ?>">
<!-- App title -->
<title>Add Movements - Pallet Logistics</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
<!-- App css -->
<link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/core.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/components.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/icons.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/pages.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/menu.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/responsive.css')?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url('assets/plugins2/switchery/switchery.min.css')?>">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<link href="https://www.jqueryscript.net/demo/Multi-column-Dropdown-Plugin-jQuery-Inputpicker/src/jquery.inputpicker.css" rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://www.jqueryscript.net/demo/Multi-column-Dropdown-Plugin-jQuery-Inputpicker/src/jquery.inputpicker.js"></script>

<script src="<?php echo base_url('assets/js/modernizr.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/choosen.js')?>"></script>

<style type="text/css">
input[type="checkbox"] {
width: 30px;
height: 30px;
}
div#tp_ac_modal .modal-dialog {
width: 40%;
}
.ddmmyy {
position: relative;


}

input:before {
position: absolute;
top: 3px; left: 3px;
content: attr(data-date);
display: inline-block;
color: black;
}

input::-webkit-datetime-edit, input::-webkit-inner-spin-button, input::-webkit-clear-button {
display: none;
}

input::-webkit-calendar-picker-indicator {
position: absolute;
top: 3px;
right: 0;
color: black;
opacity: 1;
}
.sends_receives {
display: none;
}
.fee_code_hide {
display: none;
}




.chosen-container * {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}
.chosen-container .chosen-drop {
    position: absolute;
    top: 100%;
    left: -9999px;
    z-index: 1010;
    width: 100%;
    border: 1px solid #aaa;
    border-top: 0;
    background: #fff;
    box-shadow: 0 4px 5px rgba(0, 0, 0, .15)
}
.chosen-container.chosen-with-drop .chosen-drop {
    left: 0
}
.chosen-container a {
    cursor: pointer
}



.chosen-container-single .chosen-single {
    position: relative;
    display: block;
    overflow: hidden;
    padding: 0 0 0 8px;
    height: 25px;
    border: 1px solid #aaa;
    border-radius: 5px;
    background-color: #fff;
    background: -webkit-gradient(linear, 50% 0, 50% 100%, color-stop(20%, #fff), color-stop(50%, #f6f6f6), color-stop(52%, #eee), color-stop(100%, #f4f4f4));
    background: -webkit-linear-gradient(#fff 20%, #f6f6f6 50%, #eee 52%, #f4f4f4 100%);
    background: -moz-linear-gradient(#fff 20%, #f6f6f6 50%, #eee 52%, #f4f4f4 100%);
    background: -o-linear-gradient(#fff 20%, #f6f6f6 50%, #eee 52%, #f4f4f4 100%);
    background: linear-gradient(#fff 20%, #f6f6f6 50%, #eee 52%, #f4f4f4 100%);
    background-clip: padding-box;
    box-shadow: 0 0 3px #fff inset, 0 1px 1px rgba(0, 0, 0, .1);
    color: #444;
    text-decoration: none;
    white-space: nowrap;
    line-height: 24px
}






.chosen-container-single .chosen-search input[type=text] {
    margin: 1px 0;
    padding: 4px 20px 4px 5px;
    width: 100%;
    height: auto;
    outline: 0;
    border: 1px solid #aaa;
    background: #fff url(chosen-sprite.png) no-repeat 100% -20px;
    background: url(chosen-sprite.png) no-repeat 100% -20px;
    font-size: 1em;
    font-family: sans-serif;
    line-height: normal;
    border-radius: 0
}


.chosen-container .chosen-results {
    color: #444;
    position: relative;
    overflow-x: hidden;
    overflow-y: auto;
    margin: 0 4px 4px 0;
    padding: 0 0 0 4px;
    max-height: 240px;
    -webkit-overflow-scrolling: touch
}

@media only screen and (-webkit-min-device-pixel-ratio: 1.5),
only screen and (min-resolution: 144dpi),
only screen and (min-resolution: 1.5dppx) {
    .chosen-rtl .chosen-search input[type=text],
    .chosen-container-single .chosen-single abbr,
    .chosen-container-single .chosen-single div b,
    .chosen-container-single .chosen-search input[type=text],
    .chosen-container-multi .chosen-choices .search-choice .search-choice-close,
    .chosen-container .chosen-results-scroll-down span,
    .chosen-container .chosen-results-scroll-up span {
        background-image: url(chosen-sprite@2x.png)!important;
        background-size: 52px 37px!important;
        background-repeat: no-repeat!important
    }
}
.p {
text-align: center;
padding-top: 140px;
font-size: 14px;
}



</style>
</head>

<div id="modaldiv"></div>
<body class="fixed-left">
<!-- Loader -->
<!-- Begin page -->
<div id="wrapper">

<!-- Top Bar Start -->
<?php $this->load->view('headerfile/header');?>
<!-- Top Bar End -->
<!-- ========== Left Sidebar Start ========== -->
<?php $this->load->view('headerfile/leftmenu');?>
<!-- Left Sidebar End -->
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
<!-- Start content -->
<div class="content">
<div class="container">


<div class="row">
<div class="col-xs-12">
<div class="page-title-box">
<h4 class="page-title">Pallet Logistics</h4>
<ol class="breadcrumb p-0 m-0">
<input type="submit"   class="btn btn-danger"  onclick="myFunctionq()" value="Scroll down" /> 
<li>
<a href="<?php echo base_url('User/imports_csv_movements');?>" class="btn btn-success">Import Csv File</a>
</li>
<li>

</li>

</ol>

<div class="clearfix"></div>
</div>
</div>
</div>
<!-- end row -->
<?php if( $this->session->flashdata('message') ){ echo '<div class="alert alert-success"><strong>Success !! </strong>'.$this->session->flashdata('message').'</div>';} ?>
<?php if( $this->session->flashdata('error') ){ echo '<div class="alert alert-danger"><strong>Error !! </strong>'.$this->session->flashdata('error').'</div>';} ?>
<?php
$form_id=6;

$result=$this->User_Model->get_form_fieldsddd($form_id,$login_id);
$fields_id=$this->User_Model->find_fields_order($result);
@$fields = explode(',', $result);

$ii=0;
foreach($fields_id as $row)
{

	$z[$row->fields_order]=@$fields[$ii];
	$ii++;
}

?>

<div class="row">
<div class="col-xs-12">
<div class="card-box">

<div class="row">
<div class="col-sm-12 col-xs-12 col-md-12">

<h4 class="header-title m-t-0">Add Movements</h4>

<div class="p-20 row" style="padding:20px 0 !important;">
<form id="wizard-validation-form" method="post" action="<?php echo base_url('User/insert_movements')?>">
<div>


<section>

<div class="col-md-6" >
<div class="form-group clearfix datecontainer">
<label class="control-label " for="doj">Delivery date <i style="color:red">*</i></label>

<input type="text" data-inputmask="'alias': 'date'" data-date="" data-date-format="DD-M-YYYY" value="<?php echo date('d-m-Y');?>" class="required form-control ddmmyy"  name="mov_date" placeholder="Date"  id="ids">

</div>
</div>





<div class="col-md-6" <?php if (@$z[1]==2){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="first_name">Equipment<i style="color:red">*</i></label>

<input class="form-control" name="equipment" id="demo-5"  placeholder="Select Equipment" />

</div>
</div>

<div class="clearfix"></div>

<div class="col-md-6" <?php if (@$z[2]==3){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="first_name">Sending Tp<i style="color:red">*</i></label>
<select name="sending_tp" id="sendind_tp"   class="required form-control chosen" onchange="myFunctioness(this.value),myFunctionesssssss(this.value),docketnumber(this.value)">
<option value="" hidden>Select Sending Tp</option>
<?php 
$result=$this->User_Model->fetch_trading_partner_sender();
foreach($result as $row)
{
?>
<option value="<?php echo $row->tp_name;?>"><?php echo $row->tp_name;?></option>
<?php } ?>
</select>


<script type="text/javascript">
$(".chosen").chosen();
</script>
</div>
</div>
<div class="col-md-6 sends_receives" <?php if (@$z[3]==4){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="first_name">Sender</label>

<select name="sender_name" id="senderss" class="required form-control valid" aria-required="true" aria-invalid="false" hidden>
<option>--- Select Receiving Tp---</option>
<?php $result=$this->User_Model->get_sender_reciever();
foreach ($result as $row) {
?>

<option value="<?php echo $row->sender_receiver_name;?>"><?php echo $row->sender_receiver_name; ?></option>
<?php
}
?>


</select>

</div>
</div>



<div class="col-md-6" <?php if (@$z[4]==5){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="first_name">Receiving Tp<i style="color:red">*</i></label>

<select name="receiving_tp" id="rcv_tp" class="required form-control valid chosen"  onchange="myFunctionesssss(this.value),myFunctionesssssss(this.value)" aria-required="true" aria-invalid="false">
<option value="" hidden>Select Receiving Tp</option>

<?php 
$result=$this->User_Model->fetch_trading_partner_sender();
foreach($result as $row)
{
?>
<option value="<?php echo $row->tp_name;?>"><?php echo $row->tp_name;?></option>
<?php } ?>



</select>

<script type="text/javascript">
$(".chosen").chosen();
</script>
</div>
</div>
<div class="col-md-6 sends_receives" <?php if (@$z[5]==6){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="first_name">Receiver</label>

<select name="receiver_name" id="receiverss" class="required form-control valid" aria-required="true" aria-invalid="false">
<option>--- Select Receiving Tp---</option>
<?php $result=$this->User_Model->get_sender_reciever();
foreach ($result as $row) {
?>

<option value="<?php echo $row->sender_receiver_name;?>"><?php echo $row->sender_receiver_name; ?></option>
<?php
}
?>


</select>

</div>
</div>

<div class="clearfix"></div>
<div class="col-md-6" <?php if (@$z[22]==23){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Docket Number</label>


<div id="docketnumber">
<input type="text" class="required form-control"   name="docket_number" placeholder="Docket Number" value="" style="text-transform:uppercase">
</div>
</div>
</div>
<div class="col-md-6" <?php if (@$z[6]==7){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="first_name">Carrier</label>

<select name="carrier" class="required form-control valid chosen"  aria-required="true" aria-invalid="false">
<option hidden>Select Carrier</option>
<?php $result=$this->User_Model->get_carrier();
foreach ($result as $row) {
?>

<option value="<?php echo $row->carrier;?>"><?php echo $row->carrier; ?></option>
<?php
}
?>


</select>
<script type="text/javascript">
$(".chosen").chosen();
</script>

</div>
</div>
<div class="clearfix"></div>

<div class="col-md-6" <?php if (@$z[8]==9){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Con Note</label>

<input type="number" class="form-control" autocomplete="off"  name="con_note" placeholder="Con Note">

</div>
</div>
<!--   <div class="col-md-4">
<div class="form-group clearfix">
<label class="control-label " for="first_name">Action</label>

<select name="action" class="required form-control valid" aria-required="true" aria-invalid="false">
<option>--- Select Action---</option>


<option value="1">Delivery</option>
<option value="2">Pickup</option>



</select>

</div>
</div>-->
<div class="col-md-6" <?php if (@$z[7]==8){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Reference</label>

<input type="text" class="required form-control" id="father" name="reference" placeholder="Reference">

</div>
</div>

<div class="clearfix"></div>

<div class="col-md-6" <?php if (@$z[8]==9){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Sent</label>

<input type="number" class="form-control" autocomplete="off" id="fd" name="sent" placeholder="Sent">

</div>
</div>
<div class="col-md-6" <?php if (@$z[9]==10){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Receive</label>

<input type="number" class="form-control" autocomplete="off" id="dd" onkeyup="myFunction(this.value)" name="receive" placeholder="Receive">

</div>
</div>
<div class="col-md-4" <?php //if (@$z[13]==14){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="form-control checkboxyz"  name="dockets" value="1">
<label class="control-label " for="father">Docket</label>
</div>
</div>

<div class="clearfix"></div>

<div class="col-md-6" <?php if (@$z[10]==11){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Quantity</label>

<input type="number" class="required form-control" id="demo" name="quantity" placeholder="Quantity">

</div>
</div>

<div class="col-md-6" style="display:none;">
<div class="form-group clearfix">
<label class="control-label " for="father">Trace Quantity</label>
<input type="number" class="required form-control" id="trace" name="trace_quantity" >
</div>
</div>

<div class="clearfix"></div>

<div class="col-md-6" style="display:none;">
<div class="form-group clearfix">
<label class="control-label " for="father">Untrace Quantity</label>
<input type="number" class="required form-control" id="untrace" name="untrace_quantity">
</div>
</div>

<div class="clearfix"></div>


<div class="col-md-4" <?php if (@$z[13]==14){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="form-control checkboxyz" id="checkedddu" name="redeem_xn" value="1">
<label class="control-label " for="father">Redeem XN</label>
</div>
</div>

<div class="clearfix"></div>

<div class="col-md-6" <?php if (@$z[14]==15){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Unredeem ON</label>
<input type="number" class="form-control" id="unredeem_on" name="unredeem_on">
</div>
</div>

<div class="clearfix"></div>

<div class="col-md-4" <?php //if (@$z[15]==16){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">


<input type="checkbox" name="transfer"  id="checked" class="required form-control checkboxx" value='1' checked>
<label class="control-label " for="address">Transfer</label>

</div>
</div>


<div class="col-md-4" <?php if (@$z[16]==17){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">


<input type="checkbox" class="form-control" name="own" name="reference" value="1">
<label class="control-label " for="father">Own</label>

</div>
</div>
<div class="col-md-4" <?php if (@$z[17]==18){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="form-control checkboxyxf" id="redeem_xf" name="redeem_xf" value="1">
<label class="control-label " for="father">Redeem XF</label>
</div>
</div>

<div class="clearfix"></div>

<div class="col-md-6" <?php if (@$z[18]==19){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Unredeem OFF</label>
<input type="number" class="required form-control" id="unredeem_off" name="unredeem_off">
</div>
</div>

<div class="col-md-6" <?php if (@$z[13]==14){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="first_name">Transaction<i style="color:red">*</i></label>

<select name="transaction" id="transferof" class="required form-control valid" onchange="chechk_send_reciever(this.value)" aria-required="true" aria-invalid="false">
<option hidden>Select Transaction</option>
<?php $result=$this->User_Model->fetch_transaction();
foreach ($result as $row) {
?>

<option value="<?php echo $row->transaction;?>"><?php echo $row->transaction; ?></option>
<?php
}
?>


</select>

</div>
</div>

<div class="clearfix"></div>

<div class="col-md-6" <?php if (@$z[20]==21){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix datecontainer">
<label class="control-label " for="father">Effective Date</label>

<input type="text" data-inputmask="'alias': 'date'" class="required form-control ddmmyy"  name="effective_date" data-date="" data-date-format="DD-M-YYYY" value="<?php echo date('d-m-Y');?>" id="effective_date" >

</div>
</div>



<div class="clearfix"></div>

<div class="col-md-4">
<div class="form-group clearfix checkboxcontainer">


<input type="checkbox" name="rai_corr" class="form-control" value='1'>
<label class="control-label " for="father">Rai/corr</label>

</div>
</div>

<div class="clearfix"></div>

<div class="col-md-6" <?php if (@$z[23]==24){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix datecontainer">
<label class="control-label " for="father">Rai/corr Date Time</label>

<input type="text" data-inputmask="'alias': 'date'" name="rai_corr_date" class="required form-control ddmmyy" data-date="" data-date-format="DD-M-YYYY" value="<?php echo date('d-m-Y');?>">

</div>
</div>
<div class="col-md-6" <?php if (@$z[24]==25){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="first_name">Type<i style="color:red">*</i></label>

<select name="type" class="required form-control valid" aria-required="true" aria-invalid="false">
<option hidden>Select Type</option>
<?php $result=$this->User_Model->movement_type();
foreach ($result as $row) {
?>

<option value="<?php echo $row->type;?>"><?php echo $row->type; ?></option>
<?php
}
?>

</select>

</div>
</div> 

<div class="clearfix"></div>


<div class="col-md-6" <?php if (@$z[25]==26){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Orig.Movemevt</label>

<input type="text" class="required form-control" id="father" name="orig_movemevt" placeholder="Orig.Movemevt">

</div>
</div>
<div class="col-md-6" <?php if (@$z[26]==27){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix datecontainer">
<label class="control-label " for="father">Orig. Bill</label>

<input type="text" data-inputmask="'alias': 'date'" class="required form-control ddmmyy"  name="orig_bill" value="<?php echo date('d/m/Y');?>" id="orig_bill">

</div>
</div>

<div class="clearfix"></div>

<div class="col-md-4" <?php if (@$z[27]==28){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">


<input type="checkbox" name="export" class="required form-control" value='1' checked>
<label class="control-label " for="address">Export</label>

</div>
</div>

<div class="clearfix"></div>

<div class="col-md-6" <?php if (@$z[28]==29){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="first_name">Batch<i style="color:red">*</i></label>
<?php $result=$this->User_Model->fetch_trading_partner_senderdd(); ?>
<select name="batch" class="required form-control"> 
<?php

foreach($result as $row)
{
if($row->date_time=='0000-00-00')
{
	$row->date_time=false;
	continue;
}
$createDate = new DateTime($row->date_time);
$date_times = $createDate->format('d-m-Y');

?>
<option value='<?php echo $row->date_time; ?>'><?php echo $date_times ; ?></option>
<?php 

}
?>
</select>
</div>
</div>
<div class="col-md-6" style="display:none">
<div class="form-group clearfix">
<label class="control-label " for="first_name">Bill<i style="color:red">*</i></label>

<input class="form-control" name="bill" id="demo-14"  placeholder="Select Equipment" />

</div>
</div>

<div class="clearfix"></div>

<div class="col-md-6" <?php if (@$z[30]==31){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="first_name">Supplier Reference</label>

<input type="text" class="form-control" name="supplier_reference"   placeholder="Supplier Reference" />

</div>
</div>
<div class="col-md-6" style="display:none";>
<div class="form-group clearfix">
<label class="control-label " for="first_name">Days</label>

<input type="number" class="form-control" name="days"   placeholder="Days" />

</div>
</div>

<div class="clearfix"></div>

<div class="col-md-6" style="display:none;">
<div class="form-group clearfix">
<label class="control-label " for="first_name">Equipment Days</label>

<input type="text" class="form-control" name="equipment_days"   placeholder="Equipment Days" />

</div>
</div>
<div class="col-md-6" style="display:none;">
<div class="form-group clearfix">
<label class="control-label " for="first_name">Rent</label>

<input type="text" class="form-control" name="rent"   placeholder="Rent" />

</div>
</div>

<div class="clearfix"></div>

<div class="col-md-6 fee_code_hide" <?php if (@$z[34]==35){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="first_name">Fee Code</label>




<select name="fee_code" class="required form-control valid" onchange="fee_code(this.value)" aria-required="true" aria-invalid="false">
<option>--- Select Transaction--</option>
<?php $result=$this->User_Model->fee_code();
foreach ($result as $row) {
?>

<option value="<?php echo $row->fee_unit_price;?>"><?php echo $row->feecode."(".$row->fee_unit_price.")"; ?></option>
<?php
}
?>

</select>

</div>
</div>
<div class="col-md-6" style="display:none;">
<div class="form-group clearfix">
<label class="control-label " for="first_name">Fee Unit Price</label>

<input type="number" class="form-control" id="fee_unit_prices" onkeyup="feeunitprice(this.value);" name="fee_unit_price"   placeholder="Fee Unit Price" />

</div>
</div>
<div class="col-md-6" style="display:none;">
<div class="form-group clearfix">
<label class="control-label " for="first_name">Fees</label>
<input type="text" class="form-control" id="feesss"  name="fees"   placeholder="Fees" /> 
</div>
</div>

<div class="clearfix"></div>

<div class="col-md-6" style="display:none;">
<div class="form-group clearfix">
<label class="control-label " for="first_name">Amount</label>
<input type="text" class="form-control" id="amount" name="amount"   placeholder="Amount" /> 
</div>
</div>

<div class="clearfix"></div>
</div>


<div class="clearfix"></div>
<div class="col-md-12" <?php if (@$z[38]==39){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="address">Notes</label>

<textarea name="notes" class="required form-control">
</textarea>

</div>
</div>

</section>


</div>

<div class="row">   
<div class="col-md-4" >





  <div class="hidden-print">
     <div class="pull-right" id="div1">
 	
                                     
                                    
   <a href="javascript:window.print()" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
 <input type="submit" name="submit" value="Submit" class="btn btn-success">
   
                                
                                  

      </div>
       </div>
	   
	   

</div>
<div class="col-md-4"></div>
</div>

</form>
</div>

</div>

</div>

</div> <!-- end ard-box -->
</div><!-- end col-->

</div>
<!-- end row -->


</div> <!-- container -->

</div> <!-- content -->



<?php $this->load->view('headerfile/footer');?>
</div>


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->



</div>
<!-- END wrapper -->


<script>
$('#ids').focus(function() {
document.onkeyup = function(e) {
  if (e.altKey && e.which == 50) {
   var tt = document.getElementById('ids').value;
   var startdate = tt;
   var new_date = moment(startdate, "DD-MM-YYYY").add('days',1);
   var day = new_date.format('DD');
   var month = new_date.format('MM');
   var year = new_date.format('YYYY');
   var dates=day + '-' + month + '-' + year;
   document.getElementById('ids').value = dates;
  } 
  else if (e.altKey && e.which == 49)
  {
   var tt = document.getElementById('ids').value;
   var startdate = tt;
   var new_date = moment(startdate, "DD-MM-YYYY").add('days',-1);
   var day = new_date.format('DD');
   var month = new_date.format('MM');
   var year = new_date.format('YYYY');
   var dates=day + '-' + month + '-' + year;
   document.getElementById('ids').value = dates;
  }
 
}
});








$('#orig_bill').focus(function() {
document.onkeyup = function(e) {
  if (e.altKey && e.which == 50) {
   var tt = document.getElementById('orig_bill').value;
   var startdate = tt;
   var new_date = moment(startdate, "DD-MM-YYYY").add('days',1);
   var day = new_date.format('DD');
   var month = new_date.format('MM');
   var year = new_date.format('YYYY');
   var dates=day + '-' + month + '-' + year;
   document.getElementById('orig_bill').value = dates;
  } 
  else if (e.altKey && e.which == 49)
  {
   var tt = document.getElementById('orig_bill').value;
   var startdate = tt;
   var new_date = moment(startdate, "DD-MM-YYYY").add('days',-1);
   var day = new_date.format('DD');
   var month = new_date.format('MM');
   var year = new_date.format('YYYY');
   var dates=day + '-' + month + '-' + year;
   document.getElementById('orig_bill').value = dates;
  }
}
});

$('#effective_date').focus(function() {
document.onkeyup = function(e) {
  if (e.altKey && e.which == 50) {
   var tt = document.getElementById('effective_date').value;
   var startdate = tt;
   var new_date = moment(startdate, "DD-MM-YYYY").add('days',1);
   var day = new_date.format('DD');
   var month = new_date.format('MM');
   var year = new_date.format('YYYY');
   var dates=day + '-' + month + '-' + year;
   document.getElementById('effective_date').value = dates;
  } 
  else if (e.altKey && e.which == 49)
  {
   var tt = document.getElementById('effective_date').value;
   var startdate = tt;
   var new_date = moment(startdate, "DD-MM-YYYY").add('days',-1);
   var day = new_date.format('DD');
   var month = new_date.format('MM');
   var year = new_date.format('YYYY');
   var dates=day + '-' + month + '-' + year;
   document.getElementById('effective_date').value = dates;
  }
}
});
</script>














<script>
$(".checkboxx").change(function() {
if(this.checked) {
//xy=document.getElementById("checked").value;


//$('#transferof').load('<?php echo base_url("User/getData")?>',{"transfer":xy});
//document.getElementById("unredeem_on").value = xy;
document.getElementById("transferof").innerHTML = "<option value='4'>Transfer Off</option>";
}
else
{
var xy=1;
$('#transferof').load('<?php echo base_url("User/getData")?>',{"transfer_full":xy});
}
});

</script>



<script>
function feeunitprice(data)
{

var qtr = +document.getElementById("demo").value;
var x=qtr*data;
document.getElementById("feesss").value = x;
document.getElementById("amount").value = x;
}
</script>


<script>
var resizefunc = [];
</script>

<!-- jQuery  -->
<script>
$(".ddmmyy").on("change", function() {
this.setAttribute(
"data-date",
moment(this.value, "YYYY-MM-DD")
.format( this.getAttribute("data-date-format") )
)
}).trigger("change")
</script>
<script>
function myFunction(data)
{
var data;
var results = +document.getElementById("fd").value;
var x = results - data;
document.getElementById("demo").value = x;
document.getElementById("trace").value = data;
document.getElementById("untrace").value = data;
}
</script>
<script>


$(".checkboxyz").change(function() {
if(this.checked) {
xy=document.getElementById("demo").value
document.getElementById("unredeem_on").value = xy;
document.getElementById("unredeem_off").value = '';
document.getElementById("redeem_xf").checked = false;


}
});
$(".checkboxyxf").change(function() {
if(this.checked) {
xy=document.getElementById("demo").value
document.getElementById("unredeem_off").value = xy;

document.getElementById("unredeem_on").value = '';
document.getElementById("checkedddu").checked = false;


}
});

</script>
<script>
$("#checkedddu").change(function() {

var ischeckedddd= $(this).is(':checked');
if(!ischeckedddd)
document.getElementById("unredeem_on").value = '';
}); 
</script>
<script>
$("#redeem_xf").change(function() {

var ischeckedddd= $(this).is(':checked');
if(!ischeckedddd)
document.getElementById("unredeem_off").value = '';
}); 
</script>


<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/detect.js')?>"></script>
<script src="<?php echo base_url('assets/js/fastclick.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.blockUI.js')?>"></script>
<script src="<?php echo base_url('assets/js/waves.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.slimscroll.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins2/switchery/switchery.min.js')?>"></script>

<script src="<?php echo base_url('assets/plugins2/inputmask/jquery.inputmask.bundle.js')?>"></script>

<!--Form Wizard-->
<script src="<?php echo base_url('assets/plugins2/jquery.steps/js/jquery.steps.min.js')?>" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins2/jquery-validation/js/jquery.validate.min.js')?>"></script>

<!-- App js -->
<script src="<?php echo base_url('assets/js/jquery.core.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.app.js')?>"></script>

<!--wizard initialization-->
<script src="<?php echo base_url('assets/pages/jquery.wizard-init.js')?>" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function() {
$('form').parsley();
});
$(function () {
$('#demo-form').parsley().on('field:validated', function () {
var ok = $('.parsley-error').length === 0;
$('.alert-info').toggleClass('hidden', !ok);
$('.alert-warning').toggleClass('hidden', ok);
})
.on('form:submit', function () {
return false; // Don't submit form for this demo
});
});
</script>
<script>
function myFunctioness(data) {
$('#senderss').load('<?php echo base_url("User/getData")?>',{"senderss_tp_id":data});
}
</script>
<script>
function myFunctionesssssss(data) {

//$('#modaldiv').load('<?php echo base_url("User/getData")?>',{"modals":data});
}
</script>
<script>
function myFunctionesssss(data) {
$('#receiverss').load('<?php echo base_url("User/getData")?>',{"senderss_tp_id":data});
}
</script>
<script>
$('#demo-14').inputpicker({
data:[
<?php
$i=1;
$result=$this->User_Model->fetch_equipment();
foreach($result as $row)
{
$ii=$row->equipment;
$remove[] = "'";
$remove[] = '"';
$remove[] = "-"; // just as another example

$equipment = str_replace( $remove, "", $ii );
$date_time=$row->date_time;
$date = $date_time;
$createDate = new DateTime($date);
$date_times = $createDate->format('d-m-Y');
$supplier=$row->equipment_supplier_tp;
$book_stock=$row->equipment_book_stock;
$lost_stock=$row->equipment_lost_stock;
$memberId=$row->metaid;

echo"{value:'$memberId',text:'$date_times',type:'$supplier', description: '$book_stock',primary:'$equipment'},"; 
$i++; } ?>

],
fields:[
{name:'value',text:'TP Id'},
{name:'text',text:'Date'},
{name:'type',text:'Supplier'},
{name:'description',text:'Book Stock'},
{name:'primary',text:'Equipment'},
],
headShow: true,
fieldText : 'text',
fieldValue: 'value',
filterOpen: true
});
</script>


<script>


$('#demo-5').inputpicker({
data:[
<?php
$i=1;
$result=$this->User_Model->fetch_equipment();
foreach($result as $row)
{

$ii=$row->equipment;
$remove[] = "'";
$remove[] = '"';
$remove[] = "-"; // just as another example

$tp_name = str_replace( $remove, "", $ii );
$supplier=$row->equipment_supplier_tp;


$memberId=$row->metaid;

echo"{value:'$tp_name',text:'$tp_name',type:'$supplier'},"; 
$i++; } ?>

],
fields:[
{name:'value',text:'TP Code'},
{name:'text',text:'Equipment'},
{name:'type',text:'Supplier'},


],
headShow: true,
fieldText : 'text',
fieldValue: 'value',
filterOpen: true
});
</script>


<script>
function docketnumber(data)
{
$('#docketnumber').load('<?php echo base_url("User/getData")?>',{"docket_id":data});
}
</script>





<script>
function fee_code(data)
{
var quantityess = +document.getElementById("demo").value;
var feesssss=quantityess*data;
document.getElementById("fee_unit_prices").value = data;
document.getElementById("feesss").value = feesssss;
}
</script>







<script>
function chechk_send_reciever(data)
{
var senderddd = +document.getElementById("sendind_tp").value;
var recieverddd = +document.getElementById("rcv_tp").value;
if(senderddd == recieverddd && (data==3 | data==4))
{
alert('Transaction can only be "Tranfer On" Or "Tranfer Off" when the same #3rd party Trading Partner is both the sender and receiver ');
document.getElementById("transferof").value = '';
}
}


</script>



<li class="active">
</li><div id="modaldiv"></div>	

<script>

$(".datecontainer input").inputmask();

</script>	

<script>
function myFunctionq(){
	
    var divLoc = $('#div1').offset();
    $('html, body').animate({scrollTop: divLoc.top},"slow");
    return false
    };
</script>	

</body>     
</html>
