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
<title>Add Stocktakes - Pallet Logistics</title>
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
</head>

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
<h4 class="page-title">Pallet Logistics</h4><?php echo $this->session->flashdata('message'); ?>
<ol class="breadcrumb p-0 m-0">
<input type="submit"   class="btn btn-danger"  onclick="myFunctionq()" value="Scroll down" /> 
<li>

<a href="<?php echo base_url('User/import_stocktakes?code=stocktake');?>" class="btn btn-success">Import Csv File</a>
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

<h4 class="header-title m-t-0">Add Stocktakes
</h4>                       <?php if($this->session->flashdata('msg')): ?>
<div class="alert alert-success alert-dismissible fade in" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
<span>Yay!</span>&nbsp;
<span><?php 
echo $this->session->flashdata('msg'); 
?>  </span>
</div>
<?php endif; ?>
<?php
$form_id=7;

$result=$this->User_Model->get_form_fieldsddd($form_id,$login_id);
$fields_id=$this->User_Model->find_fields_order($result);
@$fields = explode(',', $result);

$ii=0;
foreach($fields_id as $row)
{

	$z[$row->fields_order]=@$fields[$ii];
	$ii++;
}
//print_r($z);
?>
<div class="p-20">
<form id="wizard-validation-form" method="post" action="<?php echo base_url('User/insert_stocktake')?>">
<div>


<section>
<div class="col-md-6" <?php if (@$z[0]==120){} else { echo 'style="display:none;"';} ;?>>
<div class="form-group clearfix datecontainer">
<label class="control-label " for="first_name">Date *</label>

<input type="text" data-inputmask="'alias': 'date'" class="required form-control ddmmyy"  name="stockdate" data-date="" data-date-format="DD-M-YYYY" value="<?php echo date('d-m-Y');?>">
</div>
</div>
<div class="col-md-6" <?php if (@$z[1]==121){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="last_name">Trading Partner</label>
<select name="trading_partner" class="required form-control valid" id="tp_id" onchange="myfunction(this.value)" aria-required="true" aria-invalid="false">
<option>--- Select Trading Partner---</option>
<?php $result=$this->User_Model->fetch_trading_partner_sender();
foreach ($result as $row) {
?>

<option value="<?php echo $row->memberId;?>"><?php echo $row->tp_name; ?></option>
<?php
}
?>


</select>

</div>
</div>
<div class="clearfix"></div>
<div class="col-md-6" <?php  //if (@$z[2]==122){} else { echo 'style="display:none;"'; } ;?>>

<div class="form-group clearfix">
<label class="control-label " for="father">Type</label>
<div id="type"></div>


</div>
</div>
<div class="clearfix"></div>

<div class="col-md-6" <?php if (@$z[3]==123){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Equipment</label>
<?php
$i=1;
$resultess=$this->User_Model->fetch_equipment();
?>
<select class="form-control" name="receiving_tp" id="demo-5" onmouseout="myFunctione()" multiple>
<?php foreach($resultess as $rc)
{ ?>
<option value="<?php echo $rc->metaid ?>"><?php echo $rc->equipment;?></option>
<?php } ?>
</select>



</div>
</div>

<div class="clearfix"></div>

<div class="col-md-6" <?php if (@$z[4]==124){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Book Stock</label>

<div id="book_stock" ></div>

</div>
</div>

<div class="clearfix"></div>

<div class="col-md-6" <?php if (@$z[5]==125){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Physical Stock</label>

<input type="text" class="required form-control"  name="physical_stock" onkeyup="myfunctiondd(this.value)" placeholder="Physical Stock">

</div>
</div>


<div class="col-md-6" <?php if (@$z[6]==126){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Shrinkage</label>

<input type="text" class="required form-control" id="sharink" name="shrinkage" placeholder="Shrinkage">

</div>
</div>

<div class="col-md-6" <?php if (@$z[7]==127){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Reported Variance</label>

<input type="text" class="required form-control" id="father" name="reported_variance" placeholder="Reported Variance">

</div>
</div>
<div class="col-md-6" <?php if (@$z[8]==128){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Receiving TP</label>
<?php
$resultes=$this->User_Model->fetch_trading_partner_subbbb();
?>
<select class="form-control" name="receiving_tp">
<?php foreach($resultes as $rc)
{ ?>
<option value="<?php echo $rc->memberId ?>"><?php echo $rc->tp_name;?></option>
<?php } ?>
</select>


</div>
</div>
<div class="col-md-12" <?php if (@$z[9]==129){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Notes</label>

<input type="text" class="required form-control" id="father" name="note" placeholder="Notes">

</div>
</div>

</section>


</section>
</div>

<div class="row">

<div class="col-md-12">
<div class="col-md-6"  id="div1">

  <div class="hidden-print">
     <div class="pull-right">
   <a href="javascript:window.print()" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
 <input type="submit" name="submit" value="Submit" class="btn btn-success">
      </div>
       </div>


</div>
</div>
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
function myfunction(data)
{	
var data;

alert(data);

$('#type').load('<?php echo base_url("User/getData")?>',{"type":data});
}
</script>
<script>
function myfunctiondd(data)
{	
var data;
var results = +document.getElementById("book_stockss").value;
var x = results - data;

document.getElementById("sharink").value = x;
alert(data);


}
</script>

<script>
var resizefunc = [];
</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- jQuery  -->


<script src="<?php echo base_url('assets/assets/js/detect.js')?>"></script>
<script src="<?php echo base_url('assets/js/fastclick.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.blockUI.js')?>"></script>
<script src="<?php echo base_url('assets/js/waves.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.slimscroll.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins2/switchery/switchery.min.js')?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/plugins2/parsleyjs/parsley.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins2/inputmask/jquery.inputmask.bundle.js')?>"></script>

<!-- App js -->
<script src="<?php echo base_url('assets/js/jquery.core.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.app.js')?>"></script>
<script>
function myFunctione() {
var results = +document.getElementById("demo-5").value;
var tp_id = +document.getElementById("tp_id").value;

$('#book_stock').load('<?php echo base_url("User/getData")?>',{"book_stock":results,"tp_id":tp_id});
}
</script>

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


/* $('#demo-5').inputpicker({
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
}); */
</script>


<script>
function myFunctionq(){
	
    var divLoc = $('#div1').offset();
    $('html, body').animate({scrollTop: divLoc.top},"slow");
    return false
    };
</script>


<script>


$('#demo-6').inputpicker({
data:[
<?php
$i=1;
$result=$this->User_Model->fetch_trading_partner_subbbb();
foreach($result as $row)
{
$ii=$row->tp_name;
$memberId=$row->memberId;

$remove[] = "'";
$remove[] = '"';
$remove[] = "-"; // just as another example
$tp_type=$row->tp_type;
$tp_name = str_replace( $remove, "", $ii );
$res=$this->User_Model->fetch_trading_partner_supplys($memberId);
$accounts=$this->User_Model->get_tp_accounts($memberId);
$ac=$accounts['tpa_account_number'];
$sup_tp_name=$res['tp_name'];




echo"{value:'$memberId',text:'$tp_name',type:'$sup_tp_name', description: '$ac',primary:'$tp_type'},"; 
$i++; } ?>

],
fields:[
{name:'value',text:'TP Id'},
{name:'text',text:'Trading Partner'},
{name:'type',text:'Supplier'},
{name:'description',text:'Account Number'},
{name:'primary',text:'Lost Stock'},
],
headShow: true,
fieldText : 'text',
fieldValue: 'value',
filterOpen: true
});
</script>

<script>

function myFunctioneee()
{

alert('data');

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