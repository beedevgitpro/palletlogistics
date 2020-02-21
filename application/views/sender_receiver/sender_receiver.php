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
<title>Sender Receiver - Pallet Logistics</title>

<!-- App css -->
<link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/core.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/components.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/icons.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/pages.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/menu.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/responsive.css')?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url('assets/plugins2/switchery/switchery.min.css')?>">


<script src="<?php echo base_url('assets/js/modernizr.min.js')?>"></script>
<style type="text/css">
input[type="checkbox"] {
width: 30px;
height: 30px;
}
.icon-bar {
  position: fixed;
  top: 85.5%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  z-index: 9;
}

.icon-bar a {
 
  text-align: center;
  padding: 6px 20px;
  transition: all 0.3s ease;
  color: white;
  font-size: 17px;
}

.icon-bar a:hover {
  background-color: #000;
}
</style>
</head>


<body class="fixed-left">

<!-- Loader -->


<div id="wrapper">

<?php $this->load->view('headerfile/header');?>
<?php $this->load->view('headerfile/leftmenu');?>
<div class="content-page">
<div class="content">
<div class="container">


<div class="row">
<div class="col-xs-12">
<div class="page-title-box">
<h4 class="page-title">Pallet Logistics</h4><?php //echo $this->session->flashdata('message'); ?>
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
<?php if( $this->session->flashdata('message') ){ echo '<div class="alert alert-success"><strong>Success !! </strong>'.$this->session->flashdata('message').'</div>';} ?>
<?php if( $this->session->flashdata('error') ){ echo '<div class="alert alert-danger"><strong>Error !! </strong>'.$this->session->flashdata('error').'</div>';} ?>
<?php
//error_reporting(0);
$form_id=4;

$result=$this->User_Model->get_form_fieldsddd($form_id,$login_id);
$fields_id=$this->User_Model->find_fields_order($result);
@$fields = explode(',', $result);

$ii=0;
foreach($fields_id as $row)
{

	$z[$row->fields_order]=@$fields[$ii];
	$ii++;
}


//$result2=$this->User_Model->get_form_fieldss($result);



?>
<div class="row">
<div class="col-xs-12">
<div class="card-box">

<div class="row">
<div class="col-sm-12 col-xs-12 col-md-12">

<h4 class="header-title m-t-0">Sender Receiver</h4>

<div class="p-20 row" style="padding:20px 0 !important;">
<form id="wizard-validation-form" method="post" action="<?php echo base_url('User/insert_sender_receicer')?>">
<div>


<section>
<div class="col-md-6" <?php if (@$z[0]==112){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="first_name">Sender/Receiver Name <i style="color:red">*</i></label>

<input type="text" class="form-control" id="first_name" name="sender_receicer" placeholder="Sender Name" required="">

</div>
</div>


<div class="col-md-6" <?php //if (@$z[1]==113){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="last_name">Trading Partner</label>

<select name="trading_partner_id" class="form-control valid" aria-required="true" aria-invalid="false" >
<option>--- Select Trading Partner---</option>
<?php $result=$this->User_Model->fetch_tp_send_recieve();
foreach ($result as $row) {
?>

<option value="<?php echo $row->memberId;?>"><?php echo $row->tp_name; ?></option>
<?php
}
?>


</select>

</div>
</div>

<div class="col-md-6" <?php //if (@$z[2]==114){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Phone Number</label>

<input type="text" class="form-control" id="father" name="phone_number" placeholder="Phone Number">

</div>
</div>
<div class="col-md-6" <?php if (@$z[3]==115){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Mobile Number</label>

<input type="text" class="form-control" id="father" name="mobile_number" placeholder="Mobile Number" >

</div>
</div>
<div class="col-md-6" <?php if (@$z[4]==116){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Email Id</label>

<input type="email" class="form-control" id="father" name="email_id" placeholder="Email Id" >

</div>
</div>
<div class="clearfix"></div>

<div class="col-md-6" <?php //if (@$z[5]==117){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">
<input type="checkbox" name="active" class="form-control" value='1'>
<label class="control-label " for="address">Active</label>
</div>
</div>
<div class="clearfix"></div>

<div class="col-md-6" <?php //if (@$z[6]==118){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" name="default" class="form-control" value='1'>     
<label class="control-label " for="address">Default</label>
</div>
</div>
<div class="clearfix"></div>

<div class="col-md-12" <?php ///if (@$z[7]==119){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="address">Notes <i style="color:red">*</i></label>

<textarea name="note" class="form-control" required>
</textarea>
</div>
</div>

</section>


</section>
</div>

<div class="clearfix"></div>
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

</div>
<!-- END wrapper -->



<script>
var resizefunc = [];
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
function myFunctionq(){
	
    var divLoc = $('#div1').offset();
    $('html, body').animate({scrollTop: divLoc.top},"slow");
    return false
    };
</script>
</body>
</html>