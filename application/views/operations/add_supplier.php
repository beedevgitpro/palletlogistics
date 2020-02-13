<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
<meta name="author" content="Coderthemes">
<!-- App favicon -->
<link rel="shortcut icon" href="<?php  base_url('assets/images/favicon.jpg'); ?>">
<!-- App title -->
<title>Add Supplier - Pallet Logistics</title>
<!-- App css -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
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
<!--<a href="<?php //echo base_url('User/import_equipment_csv');?>" class="btn btn-success">Import Csv File</a>
</li>
<li>

</li>
</ol>-->
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

<h4 class="header-title m-t-0">Add Supplier
</h4>                                         
<div class="p-20 row" style="padding:20px 0 !important">


<?php
$form_id=8;

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
<form id="wizard-validation-form" method="post" action="<?php echo base_url('User/insert_supplier_type')?>">
<div>
<section>
<div class="col-md-6" <?php if (@$z[0]==147){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix datecontainer">
<label class="control-label " for="first_name">Date *</label>
<input type="text" data-inputmask="'alias': 'date'" data-date="" data-date-format="DD-M-YYYY" value="<?php echo date('d-m-Y');?>" class="required form-control ddmmyy"  name="datess">
</div>
</div>
<div class="col-md-6" <?php if (@$z[1]==148){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="last_name">Type</label>
<select class="form-control" name="type">
<option value="">Select Supplier Type</option>
<?php  $result=$this->User_Model->get_supplier_type();
foreach($result as $row)
{
echo"<option value='$row->type_id'>$row->supplier_name</option>"; 
}
?>


</select>												  

</div>
</div>
<div class="col-md-6" <?php if (@$z[2]==149){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Trading Partner</label>

<select class="form-control" name="tp_type">
<option value="" hidden>Select Trading Partner</option>
<?php  $gets=$this->User_Model->fetch_trading_partner_sender(); 
foreach($gets as $rowss)
{
echo"<option value='$rowss->memberId'>$rowss->tp_name</option>";
}
?>
</select>	

</div>
</div>
<div class="col-md-6" <?php if (@$z[3]==150){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Batch Number</label>
<input type="text" class="form-control"  name="batch_number">
</div>
</div>
<div class="col-md-6" <?php if (@$z[4]==151){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix datecontainer">
<label class="control-label " for="father">Start Date</label>

<input type="text" data-inputmask="'alias': 'date'" data-date="" data-date-format="DD-M-YYYY" value="<?php echo date('Y-m-d');?>" class="required form-control ddmmyy"  name="start_date">

</div>
</div>

<div class="clearfix"></div>

<div class="col-md-12" <?php if (@$z[5]==152){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="required form-control"  name="export_ons" value="1">
<label class="control-label " for="father">Export Ons</label>

</div>
</div>
<div class="col-md-12" <?php if (@$z[6]==153){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="required form-control" id="father" name="export_offs" value="1">
<label class="control-label " for="father">Export Offs</label>

</div>
</div>
<div class="col-md-12" <?php if (@$z[7]==154){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="form-control"  name="exported" value="1">
<label class="control-label " for="father">Exported</label>

</div>
</div>
<div class="clearfix"></div>
<div class="col-md-12" <?php if (@$z[8]==155){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="address">Notes</label>

<textarea name="notes" class="required form-control">
</textarea>

</div>
</div>






</section>


</section>
</div>

<div class="row">
<div class="col-md-12">
<div class="col-md-4" id="div1">

                                         <div class="hidden-print">
                                            <div class="pull-right">
                                                <a href="javascript:window.print()" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                                             <input type="submit" name="submit" value="Submit" class="btn btn-success">
                                            </div>
                                        </div>
</div>
<div class="col-md-4"></div>
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
$(".ddmmyy").on("change", function() {
this.setAttribute(
"data-date",
moment(this.value, "YYYY-MM-DD")
.format( this.getAttribute("data-date-format") )
)
}).trigger("change")
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