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
<title>Movements Repor - Pallet Logistics</title>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="<?php echo base_url('assets/js/modernizr.min.js')?>"></script>

</head>
<script>

jQuery(function(){
jQuery('#modal').click();
});
</script>
<style>
input[type=radio] {
border: 0px;
width: 100%;
height: 2em;
}

.hhh {
border:none;
border-top:1px dotted #f00;
color:#fff;
background-color:#fff;
height:1px;
width:50%;
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
</style>
<body class="fixed-left">
<?php if(isset($_POST['submit']))
{ 
$from_date=$_POST['from_date'];
$to_date=$_POST['to_date'];
$equipment_id=$_POST['equipment_id'];
$value1='';
$value2='';
if(isset($_POST['t_on_tissue']))
{
if($_POST['t_on_tissue']!='')
{
$t_on_tissue=$_POST['t_on_tissue'];
list($value1,$value2) = explode('|', $t_on_tissue);
}
else {
$value1='';
$value2='';
}
}
$order_by='';
if(isset($_POST['order_by']))
{
$order_by=$_POST['order_by'];
}
$third_parties='';
if(isset($_POST['third_parties']))
{
$third_parties=$_POST['third_parties']; 
}
$tp_location='';
if(isset($_POST['tp_location']))
{
$tp_location = $_POST['tp_location']; 
}
$type='';
if(isset($_POST['type']))
{
$type=$_POST['type'];
}

}
else
{
$from_date='';
$to_date='';
$equipment_id='';  
$value1='';	
$value2='';
$order_by='';
$third_parties='';
$tp_location='';
$type='';
}
print_r($value1);
?>
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
<h4 class="page-title">Bill Reports </h4>
<ol class="breadcrumb p-0 m-0">
<li class="active">
<button type="button" id="modal" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Data Filtering</button>
</li>
</ol>
<div class="clearfix"></div>
</div>
</div>
</div>
<!-- end row -->
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<!-- <div class="panel-heading">
<h4>Invoice</h4>
</div> -->
<div class="panel-body">
<div class="clearfix">
<div class="pull-left">
<h3>Pallet Logistics</h3>
</div>

</div>
<hr>
<div class="row">
<div class="col-md-12">
<div class="pull-left m-t-30">
<address>
<strong>Equipment:  &nbsp;&nbsp;&nbsp;&nbsp;   All Equipment</strong><br>
<strong>TP Filtering:       &nbsp;&nbsp;&nbsp;&nbsp;   All 3rd Parties<strong><br>
<strong>Transactions:       &nbsp;&nbsp;&nbsp;   All Transfer<strong><br>
</address>
</div>
</div><!-- end col -->
</div>
<!-- end row -->
<div class="m-h-50"></div>
<div class="row">
<div class="col-md-12">
<div class="table-responsive">
<table class="table m-t-30 table-colored table-info">
<thead>
<tr>
<th>Move Date</th>
<th>Eff. Date</th>
<th>S TP</th>
<th>R TP</th>
<th>Con Note</th>
<th>Reference</th>
<th>Transaction</th>
<th>Dkt Number</th>
<th>Qty</th>
<th>Export Date</th>
<th>Notes</th>
</tr></thead>
<tbody>
<?php 
$get_id=$this->User_Model->get_equipment_metaid($equipment_id);
foreach($get_id as $rows)
{
$results=$this->User_Model->get_movementreport($from_date,$to_date,$value1,$value2,$order_by,$third_parties,$tp_location,$type);
?>
<tr>

<td style="font-weight:bold"><font size="4"><?php 

$x= $this->User_Model->get_equipment_id($rows->metaid);
echo $x['equipment'];
?></font></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr> <?php
$total=0;
foreach($results as $row) 
{

?>

<tr>


<td><?php $createDate = new DateTime($row->movements_date);
echo $date_times = $createDate->format('d-m-Y');?> </td>
<td><?php  $createDate = new DateTime($row->effective_date);
echo $date_times = $createDate->format('d-m-Y');?> </td>
<?php $datasss=$this->User_Model->get_trading_partner_accounts($row->sending_tp); ?>
<td><?php echo $datasss['tpa_third_party']; ?></td>
<?php  $datas=$this->User_Model->get_trading_partner_accounts($row->receiving_tp); ?>
<td><?php echo $datas['tpa_third_party']; ?></td>
<td>---------</td>
<td><?php echo $row->reference;?></td>
<td><?php 
echo $this->User_Model->transaction_name($row->transaction);?></td>
<td><?php echo $row->docket_number;?></td>
<td><?php echo $row->quantity;?></td>
<td>----</td>
<td>-----</td>
</tr>
<?php	$total=$total+$row->quantity; } ?>


<tr>
<td><b><span style='font-weight:bold;'> <font size="4">Total</font></span></b></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><b><?php echo $total; ?></b></td>
<td></td>
<td></td>
</tr>
<?php	} ?>

</tbody>
</table>
</div>
</div>
</div>

<hr>
<div class="hidden-print">
<div class="pull-right">
<a href="javascript:window.print()" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
<a href="#" class="btn btn-primary waves-effect waves-light">Submit</a>
</div>
</div>
</div>
</div>

</div>

</div>
<!-- end row -->



</div> <!-- container -->

</div> <!-- content -->

</div> <!-- content -->

<?php $this->load->view('headerfile/footer');?>
</div>

</div>


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->



</div>
<!-- END wrapper -->



<script>
var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/assets/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/assets/js/detect.js')?>"></script>
<script src="<?php echo base_url('assets/js/fastclick.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.blockUI.js')?>"></script>
<script src="<?php echo base_url('assets/js/waves.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.slimscroll.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins2/switchery/switchery.min.js')?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/plugins2/parsleyjs/parsley.min.js')?>"></script>
<!-- App js -->
<script src="<?php echo base_url('assets/js/jquery.core.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.app.js')?>"></script>
<script src="<?php echo base_url('assets/plugins2/inputmask/jquery.inputmask.bundle.js')?>"></script>
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
<!---------------------------------------Data filter Modal------------------>
<form method="post" action="">
<div class="container">
<!-- Trigger the modal with a button -->
<!-- Modal -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h4 class="modal-title">Movements Report Data Filter</h4>
</div>
<div class="modal-body">
<div class="row">
<div class="col-md-12 radiobtnbox">
<div class="col-md-3">
<button type="button" class="btn" value="1"  onclick="myfunction(this.value)" id="one">Untraced Movements</button>
</div>
<div class="col-md-3">
<button type="button" class="btn" value="2"  onclick="myfunction(this.value)" id="two">Unprocessed Transfer</button>
</div>
<div class="col-md-3">
<button type="button" class="btn" value="3" onclick="myfunction(this.value)" id="three">Unredeemed</button>
</div>
<div class="col-md-3">
<button type="button" class="btn" value="4" onclick="myfunction(this.value)" id="fourth">Pickup Request</button>
</div>
</div>
<div id="reconcilation"></div>
</div>
</div> 
</div>
</div>
</form>
<script>
$(".ddmmyy").on("change", function() {
this.setAttribute(
"data-date",
moment(this.value, "Y-m-d")
.format( this.getAttribute("data-date-format") )
)
}).trigger("change")
</script>
<!-----------------------------------------//------------------------------->
<script>
function myfunction(data) {
var movement_report=data;
alert(movement_report);
$('#reconcilation').load('<?php echo base_url("User/reconcilation")?>',{"movement_report":movement_report});
}
</script>
<script>
//$(".datecontainer input").inputmask();
</script>
</body>
</html>