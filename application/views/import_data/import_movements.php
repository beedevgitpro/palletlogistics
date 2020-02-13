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
<title>saas</title>

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

</head>


<body class="fixed-left">

<!-- Loader -->
<div id="preloader">
<div id="status">
<div class="spinner">
<div class="spinner-wrapper">
<div class="rotator">
<div class="inner-spin"></div>
<div class="inner-spin"></div>
</div>
</div>
</div>
</div>
</div>
<div id="wrapper">
<?php $this->load->view('headerfile/header');?>
<?php $this->load->view('headerfile/leftmenu');?>
<div class="content-page">
<!-- Start content -->
<div class="content">
<div class="container">


<div class="row">
<div class="col-xs-12">
<div class="page-title-box">
<h4 class="page-title">Foxjab</h4><?php echo $this->session->flashdata('message'); ?>
<ol class="breadcrumb p-0 m-0">
<li>
<a href=""></a>
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

<h4 class="header-title m-t-0">Import data
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

<div class="p-20">

<form  method="post" action="<?php echo base_url('User/imports_data_csv_movements') ?>" enctype="multipart/form-data">
<div>


<section>





<div class="col-md-4">
<div class="form-group clearfix">
<label class="control-label " for="father">Csv/Xsl</label>

<input type="file" class="required form-control"  name="csv_data" placeholder="Reported Variance">

</div>
</div>



</section>


</section>
</div>

<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<input type="submit" name="submit" value="Submit" class="btn btn-success">
</div>
<div class="col-md-4"></div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php $this->load->view('headerfile/footer');?>
</div>
</div>
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
</body>
</html>