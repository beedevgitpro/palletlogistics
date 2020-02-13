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
<title>Add Bills - Pallet Logistics</title>
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
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="https://bootswatch.com/flatly/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="https://www.jqueryscript.net/demo/Multi-column-Dropdown-Plugin-jQuery-Inputpicker/src/jquery.inputpicker.css" rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://www.jqueryscript.net/demo/Multi-column-Dropdown-Plugin-jQuery-Inputpicker/src/jquery.inputpicker.js"></script>

<script src="<?php echo base_url('assets/js/modernizr.min.js')?>"></script>


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

color: black;
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

opacity: 1;
}


</style>
</head>


<body class="fixed-left"  >

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
<h4 class="page-title">Pallet Logistics</h4><?php echo $this->session->flashdata('message'); ?>
<ol class="breadcrumb p-0 m-0">
<input type="submit"   class="btn btn-danger"  onclick="myFunctionq()" value="Scroll down" /> 
<li>
<a href="<?php echo base_url('User/import_bills');?>" class="btn btn-success">Import Csv File</a>
</li>
<li>

</li>

</ol>
<div class="clearfix"></div>
</div>
</div>
</div>
<!-- end row -->


<div class="row">
<div class="col-xs-12">
<div class="card-box">

<div class="row">
<div class="col-sm-12 col-xs-12 col-md-12">

<h4 class="header-title m-t-0">Add Bills
</h4>
<?php
$form_id=10;

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

<div class="p-20 row" style="padding:20px 0 !important;">
<form id="wizard-validation-form" method="post" action="<?php echo base_url('User/insert_bills')?>">
<div>


<section>
<div class="col-md-6" <?php if (@$z[0]==130){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix datecontainer">
<label class="control-label " for="doj">Date *</label>

<input type="text" data-inputmask="'alias': 'date'" class="required form-control ddmmyy" name="bill_date" data-date="" data-date-format="DD-M-YYYY" value="<?php echo date('d-m-Y');?>">

</div>
</div>

<div class="col-md-6" <?php if (@$z[1]==131){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="first_name">Equipment*</label>

<select name="equipment" onchange="xyz(this.value),myfunction(this.value)"; class="required form-control valid" aria-required="true" aria-invalid="false">
<option>--- Select Equipment---</option>
<?php  $result=$this->User_Model->fetch_equipment();
foreach ($result as $row) {
?>

<option value="<?php echo $row->metaid;?>"><?php echo $row->equipment; ?></option>
<?php
}
?>
</select>
<!-- <input class="form-control" name="equipment"  id="demo-5"  placeholder="Select Equipment" />-->
</div>
</div>
<div class="col-md-6" <?php if (@$z[2]==132){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Source</label>

<input type="text" class="required form-control"  id="father" name="source" placeholder="Source">

</div>
</div>
<div class="col-md-6" <?php if (@$z[3]==133){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="first_name">Opening Balance*</label>

<div class="openig_balance">
<input type="text" class="required form-control"  name="opening_balance"  placeholder="Opening Balance">
</div>

</div>
</div>
<div class="col-md-6" <?php if (@$z[4]==134){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="first_name">Quantity On *</label>

<input type="text" class="required form-control" id="qtron"  onkeyup="myfunctions(this.value)" name="quantity_on" placeholder="Quantity On">

</div>
</div>
<div class="col-md-6" <?php if (@$z[5]==135){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Unreconciled Qty On</label>

<input type="text" class="required form-control" id="quantityes" name="unreconciled_qty_on" placeholder="Unreconciled Qty On" readonly>

</div>
</div>
<div class="col-md-6" <?php if (@$z[6]==136){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="first_name">Quantity Off *</label>

<input type="text" class="required form-control"  id="quantityofss" onkeyup="quantity_offs(this.value);" name="quantity_off" placeholder="Quantity Off">

</div>
</div>
<div class="col-md-6" <?php if (@$z[7]==137){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Unreconciled Qty Off</label>

<input type="text" class="required form-control" id="quantityof" name="unreconciled_qty_off" placeholder="Unreconciled Qty Off" readonly>

</div>
</div>
<div class="col-md-6" <?php if (@$z[8]==138){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Closing Balance</label>
<div class="closing_balance">
<input type="text" class="required form-control"  name="closing_balance" placeholder="Closing Balance">
</div>
</div>
</div>
<div class="col-md-6" <?php if (@$z[9]==139){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="address">Equipment Days</label>

<input type="text" name="equipment_days" onkeyup="equipmentday(this.value)"  class="required form-control" placeholder="Equipment Days">
</div>
</div>
<div class="col-md-6" <?php if (@$z[10]==140){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="first_name">Unreconciled Equipment Days*</label>

<input type="text" class="required form-control" id="unrd" name="unreconciled_equipment_days" placeholder="Unreconciled Equipment Days">

</div>
</div>
<div class="col-md-6" <?php if (@$z[11]==141){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Rent Unit Price</label>
<div id="rent_unit_price">
<input type="text" class="required form-control"  placeholder="Rent Unit Price">
</div>
</div>
</div>




<div class="col-md-6" <?php if (@$z[12]==142){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Rent</label>

<input type="text" class="required form-control" id="rentss" name="rent" placeholder="Rent">

</div>
</div>
<div class="col-md-6" <?php if (@$z[13]==143){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Fees</label>
<input type="text" name="fees" class="required form-control" placeholder="Fees">   
</div>
</div>
<div class="col-md-6" <?php if (@$z[14]==144){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="first_name">Other Charges*</label>
<input type="text" class="required form-control" id="father" name="Other_charges" placeholder="Other Charges"> 
</div>
</div>
<div class="col-md-6" <?php if (@$z[15]==145){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label" for="father">Amount</label>

<input type="text" class="required form-control" id="amount" name="amount" placeholder="Amount">

</div>
</div>
<div class="col-md-6" <?php if (@$z[16]==146){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="address">Unreconciled Amount</label>

<input type="text" name="unreconciled_amount" id="unreconciled_amount" class="required form-control" placeholder="Unreconciled Amount">

</div>
</div>

</div>



<div class="col-md-12">

</div>

</section>


</section>
</div>

<div class="row" id="div1">


 <div class="hidden-print" >
     <div class="pull-right">
	
   <a href="javascript:window.print()" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
 <input type="submit" name="submit" value="Submit" class="btn btn-success">
      
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
$(".ddmmyy").on("change", function() {
this.setAttribute(
"data-date",
moment(this.value, "YYYY-MM-DD")
.format( this.getAttribute("data-date-format") )
)
}).trigger("change")
</script>
<script>
var resizefunc = [];
</script>
<script>
function quantity(data)
{
alert('gg');
}
</script>
<!-- jQuery  -->

<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/detect.js')?>"></script>
<script src="<?php echo base_url('assets/js/fastclick.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.blockUI.js')?>"></script>
<script src="<?php echo base_url('assets/js/waves.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.slimscroll.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins2/switchery/switchery.min.js')?>"></script>

<!--Form Wizard-->
<script src="<?php echo base_url('assets/plugins2/jquery.steps/js/jquery.steps.min.js')?>" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins2/jquery-validation/js/jquery.validate.min.js')?>"></script>

<!-- App js -->
<script src="<?php echo base_url('assets/js/jquery.core.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.app.js')?>"></script>

<!--wizard initialization-->
<script src="<?php echo base_url('assets/pages/jquery.wizard-init.js')?>" type="text/javascript"></script>

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


<script>


$('#demo-5').inputpicker({
data:[
<?php
$i=1;
$result=$this->User_Model->fetch_equipment();;
foreach($result as $row)
{
$ii=$row->equipment;
$remove[] = "'";
$remove[] = '"';
$remove[] = "-"; // just as another example

$tp_name = str_replace( $remove, "", $ii );
$supplier=$row->equipment_supplier_tp;
$book_stock=$row->equipment_book_stock;
$lost_stock=$row->equipment_lost_stock;
$memberId=$row->metaid;

echo"{value:'$memberId',text:'$tp_name',type:'$supplier', description: '$book_stock',primary:'$lost_stock'},"; 
$i++; } ?>

],
fields:[
{name:'value',text:'TP Id'},
{name:'text',text:'Equipment'},
{name:'type',text:'Supplier'},
{name:'description',text:'Book Stock'},
{name:'primary',text:'Lost Stock'},
],
headShow: true,
fieldText : 'text',
fieldValue: 'value',
filterOpen: true
});
</script>
<script>
function myfunction(data)
{

var unit_movement_fee = data;
$('#rent_unit_price').load('<?php echo base_url("User/getData")?>',{"rent_unit_price":unit_movement_fee});

}
</script>
<script>
function myfunctions(data)
{
var data;	
document.getElementById("quantityes").value = data;

//var y = +document.getElementById("opening_balance").value;
var z = +document.getElementById("qtron").value;
var opening_balance = +document.getElementById("opening_balance").value;
var x = parseInt(z) + parseInt(opening_balance);
document.getElementById("closing_balance").value = x;

}
</script>
<script>
function equipmentday(data)
{
var data;
var rent_unit_prices = +document.getElementById("ffff").value;
var total=rent_unit_prices*data;
document.getElementById("unrd").value = data;
document.getElementById("rentss").value = total;
document.getElementById("amount").value = total;	
document.getElementById("unreconciled_amount").value = total;	
}
</script>
<script>
function qqqq(data)
{
var data;
var quantityon=+document.getElementById("qtron").value;
var quantityofs=+document.getElementById("quantityofss").value;
var cal=quantityon-quantityofs;

//document.getElementById("closing_balances").value = cal;	
}

function quantity_offs(data)
{

var opening_balance = +document.getElementById("opening_balance").value;
var qtron = +document.getElementById("qtron").value;
//var closing_balance = +document.getElementById("closing_balance").value;
var quantityofss = +document.getElementById("quantityofss").value;
var x = parseInt(opening_balance) + parseInt(qtron)-parseInt(quantityofss);
document.getElementById("quantityof").value = data;
document.getElementById("closing_balance").value = x;

}

//function ajax_field()
//{
// $.ajax({
// method: "POST",
// url: "<?php echo base_url("User/getData")?>",
//data: { name: "John"}
//});
//}
</script>

<script>
function xyz(data)
{
var openig_balance =data;
var closing_balance =data;
$('.openig_balance').load('<?php echo base_url("User/getData")?>',{"openig_balance":openig_balance});
$('.closing_balance').load('<?php echo base_url("User/getData")?>',{"closing_balance":closing_balance});

}
</script>

<script>
function quantity_off(data)
{
var data;
var y = +document.getElementById("ffff").value;
var z = +document.getElementById("ffff").value;
var x = +y + +z;
document.getElementById("unrd").value = x;

}
</script>

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