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
<title>Add Equipments - Pallet Logistics</title>

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
<a href="<?php echo base_url('User/import_equipment_csv');?>" class="btn btn-success">Import Csv File</a>
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

<h4 class="header-title m-t-0">Add Equipment</h4>

<div class="p-20 row" style="padding:20px 0 !important;">
<form id="wizard-validation-form" method="post" action="<?php echo base_url('User/insert_equipment')?>">
<div>


<section>

<?php 
$form_id=1;

$result=$this->User_Model->get_form_fieldsddd($form_id,$login_id);
 $result;

$result2=$this->User_Model->get_form_fieldss($result);
foreach($result2 as $row)
{
  
  if($row->field_id!=52 && $row->field_id!=53)
  {
  ?>
  <div class="col-md-6">
<div class="form-group clearfix">
<label class="control-label " for="first_name"><?php echo $row->form_label; ?></label>
<?php echo $row->movement_form_input_box; ?>


</div>
</div>
<?php
  }
  else
  { ?>
        <div class="col-md-6">
<div class="form-group clearfix checkboxcontainer">

<?php echo $row->movement_form_input_box; ?>
<label class="control-label " for="first_name"><?php echo $row->form_label; ?></label>

</div>
</div>
<?php }

}
?>

                                                



</section>

</div>

<div class="clearfix"></div>

<div class="row">





  <div class="col-md-4" id="div1">

<div class="hidden-print">
 <div class="pull-right">
                                         
 <a href="javascript:window.print()" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
 <input type="submit" name="submit" value="Submit" class="btn btn-success">
                                       
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
var resizefunc = [];
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
$('#demo-8').inputpicker({
data:[
<?php
$i=1;
$result=$this->User_Model->fetch_trading_partner_supply();
foreach($result as $row)
{
$type_id=$row->type_id;
$ii=$row->supplier_name;
$remove[] = "'";
$remove[] = '"';
$remove[] = "-"; // just as another example
$tp_name = str_replace( $remove, "", $ii );

//$code=$row->code;
//$tp_primary=$row->tp_primary;
//$memberId=$row->memberId;

echo"{value:'$type_id',text:'$tp_name'},"; 
$i++; } ?>

],
fields:[
{name:'value',text:'TP Id'},
{name:'text',text:'Trading Partner'},



],
headShow: true,
fieldText : 'text',
fieldValue: 'value',
filterOpen: true
});
</script>


<script>
function myFunction(data)
{
var data;

var base_quantity = +document.getElementById("base_quantity").value;
var unit_movement_fee = +document.getElementById("unit_movement_fee").value;

var x = base_quantity*unit_movement_fee;

document.getElementById("movement_fee").value = x;
}
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