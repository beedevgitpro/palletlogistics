
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

         <title>saas</title>

        <!-- DataTables -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <!-- App css -->

        <link href="<?php echo base_url('assets/css/core.css')?>" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url('assets/css/components.css')?>" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url('assets/css/icons.css')?>" rel="stylesheet" type="text/css" />

     

        <link href="<?php echo base_url('assets/css/menu.css')?>" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url('assets/css/responsive.css')?>" rel="stylesheet" type="text/css" />

		<link rel="stylesheet" href="<?php echo base_url('assets/plugins2/switchery/switchery.min.css')?>">

		<link rel="stylesheet" href="<?php echo base_url('assets/plugins2/footable/footable.bootstrap.min.css')?>">

             <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

        <script src="<?php echo base_url('assets/js/modernizr.min.js')?>"></script>

   <script src="<?php echo base_url('assets/pages/jsgrid.min.js')?>"></script>

<style type="text/css">

input[type="checkbox"] {

width: 30px;

height: 30px;

}



</style>

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

<div class="col-lg-12">

<div class="page-title-box">

<h4 class="page-title">Pallet Logistics</h4><?php echo $this->session->flashdata('message'); ?>

<ol class="breadcrumb p-0 m-0">

<input type="submit"   class="btn btn-danger"  onclick="myFunctionq()" value="Scroll down" /> 

<li>

<a href="<?php echo base_url('User/import_stocktakes?code=tp_account');?>" class="btn btn-success">Import Csv File</a>

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



<h4 class="header-title m-t-0">Add Profile

</h4>

<?php

$form_id=9;



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

<form id="wizard-validation-form" method="post" action="<?php echo base_url('User/insert_profile')?>">

<div>





<section>

<div class="col-md-6" <?php if (@$z[0]==156){} else { echo 'style="display:none;"'; } ;?>>

<div class="form-group clearfix">

<label class="control-label " for="first_name">Profile Name *</label>



<input type="text" class="required form-control" id="profile_name" name="profile_name" placeholder="Profile Name">



</div>

</div>



<div class="col-md-6" <?php if (@$z[1]==157){} else { echo 'style="display:none;"'; } ;?>>

<div class="form-group clearfix">

<label class="control-label " for="last_name">Transit Days</label>

<input type="text" class="required form-control" id="first_name" name="transit_days" placeholder="Transit Days">



</div>

</div>

<div class="col-md-4" <?php if (@$z[2]==158){} else { echo 'style="display:none;"'; } ;?>>

<div class="form-group clearfix checkboxcontainer">



<input type="checkbox" class="required form-control" id="Allow Exchange" name="allow_exchange" value="1">

<label class="control-label " for="father">Allow Exchange</label>



</div>

</div>



<div class="clearfix"></div>



<div class="col-md-6" <?php if (@$z[3]==159){} else { echo 'style="display:none;"'; } ;?>>

<div class="form-group clearfix">

<label class="control-label " for="father">Credit Limit</label>



<input type="text" class="required form-control" id="father" name="credit_limit" placeholder="Credit Limit">



</div>

</div>



<div class="clearfix"></div>



<div class="col-md-4" <?php if (@$z[4]==160){} else { echo 'style="display:none;"'; } ;?>>

<div class="form-group clearfix checkboxcontainer">



<input type="checkbox" class="required form-control" id="father" name="allow_tn" value="1">

<label class="control-label " for="father">Allow TN</label>



</div>

</div>

<div class="clearfix"></div>



<div class="col-md-6" <?php if (@$z[5]==161){} else { echo 'style="display:none;"'; } ;?>>

<div class="form-group clearfix">

<label class="control-label " for="father">TN Delay Type</label>



<select name="tn_delay_type" id="state" class="required form-control" onchange="change_state(this)">

<option value="0">--- Select  -</option>



<option value="0">TN Delay Type</option>



</select>



</div>

</div>

<div class="col-md-6" <?php if (@$z[6]==162){} else { echo 'style="display:none;"'; } ;?>>

<div class="form-group clearfix">

<label class="control-label " for="father">TN Delay Days</label>



<input type="text" class="required form-control" id="father" name="tn_delay_days" placeholder="Lost Stock">



</div>

</div>



<div class="clearfix"></div>



<div class="col-md-6" <?php if (@$z[7]==163){} else { echo 'style="display:none;"'; } ;?>>

<div class="form-group clearfix checkboxcontainer">



<input type="checkbox" class="required form-control" id="father" name="tn_delay_rule" value="1">

<label class="control-label " for="father">TN Delay Rule</label>



</div>

</div>

<div class="clearfix"></div>



<div class="col-md-6" <?php if (@$z[8]==164){} else { echo 'style="display:none;"'; } ;?>>

<div class="form-group clearfix checkboxcontainer">



<input type="checkbox" class="required form-control" id="father" name="allow_tf" value="1" >

<label class="control-label " for="father">Allow TF</label>



</div>

</div>





<div class="clearfix"></div>



<div class="col-md-6" <?php if (@$z[9]==165){} else { echo 'style="display:none;"'; } ;?>>

<div class="form-group clearfix">

<label class="control-label " for="father">TF Delay type</label>



<select name="tf_delay_type" id="state" class="required form-control" onchange="change_state(this)">

<option value="">--- Select State ---</option>



<option value="0">TN Delay Type</option>



</select>



</div>

</div>

<div class="col-md-6" <?php if (@$z[10]==166){} else { echo 'style="display:none;"'; } ;?>>

<div class="form-group clearfix">

<label class="control-label " for="father">TF Delay Days</label>



<input type="text" class="required form-control" id="father" name="tf_delay_days" placeholder="TF Delay Days">



</div>

</div>





<div class="clearfix"></div>



<div class="col-md-6" <?php if (@$z[11]==167){} else { echo 'style="display:none;"'; } ;?>>

<div class="form-group clearfix checkboxcontainer">



<input type="checkbox" class="required form-control" id="father" name="tf_delay_rule" value="1">

<label class="control-label " for="father">TF Delay Rule</label>



</div>

</div>

<div class="clearfix"></div>



<div class="col-md-6" <?php if (@$z[12]==168){} else { echo 'style="display:none;"'; } ;?>>

<div class="form-group clearfix checkboxcontainer">



<input type="checkbox" class="required form-control" id="father" name="redeem_exchange" value="1" >

<label class="control-label " for="father">Redeem Exchange</label>



</div>

</div>

<div class="clearfix"></div>



<div class="col-md-6" <?php if (@$z[13]==169){} else { echo 'style="display:none;"'; } ;?>>

<div class="form-group clearfix checkboxcontainer">



<input type="checkbox" class="required form-control" id="father" name="redeem_same" value="1">

<label class="control-label " for="father">Redeem Same</label>

</div>

</div>

<div class="clearfix"></div>



<div class="col-md-6" <?php if (@$z[14]==170){} else { echo 'style="display:none;"'; } ;?>>

<div class="form-group clearfix checkboxcontainer">



<input type="checkbox" class="required form-control" id="father" name="complete" value="1">

<label class="control-label " for="father">Complete</label>



</div>

</div>	

<div class="clearfix"></div>												



<div class="col-md-6" <?php if (@$z[15]==171){} else { echo 'style="display:none;"'; } ;?>>

<div class="form-group clearfix checkboxcontainer">



<input type="checkbox" class="required form-control" id="father" name="override_export_status" value="1">

<label class="control-label " for="father">Override Export Status</label>



</div>

</div>

<div class="clearfix"></div>



<div class="col-md-3" <?php if (@$z[16]==172){} else { echo 'style="display:none;"'; } ;?>>

<div class="form-group clearfix checkboxcontainer">



<input type="checkbox" class="required form-control" id="father" name="export_ons" value="1">



<label class="control-label " for="father">Export Ons</label>



</div>

</div>

<div class="clearfix"></div>



<div class="col-md-3" <?php if (@$z[17]==173){} else { echo 'style="display:none;"'; } ;?>>

<div class="form-group clearfix checkboxcontainer">



<input type="checkbox" class="required form-control" id="father" name="export_offs" value="1">

<label class="control-label " for="father">Export Offs</label>



</div>

</div>





<div class="clearfix"></div>

<div class="col-md-6" <?php if (@$z[18]==174){} else { echo 'style="display:none;"'; } ;?>>

<div class="form-group clearfix">

<label class="control-label " for="father">Docket Format</label>

<input type="text" class="required form-control" id="father" name="docket_format" placeholder="Docket Format">



</div>

</div>



<div class="clearfix"></div>



<div class="col-md-4" <?php if (@$z[19]==175){} else { echo 'style="display:none;"'; } ;?>>

<div class="form-group clearfix checkboxcontainer">





<input type="checkbox" class="required form-control" id="father" value="1" name="con_note_required" placeholder="Con Note Required">

<label class="control-label " for="father">Con Note Required</label>



</div>

</div>



<div class="clearfix"></div>

<div class="col-md-6" <?php if (@$z[20]==176){} else { echo 'style="display:none;"'; } ;?>>

<div class="form-group clearfix">

<label class="control-label " for="father">Con Note Characters</label>



<input type="text" class="required form-control" id="father" name="con_note_characters" placeholder="Con Note Characters">



</div>

</div>



<div class="clearfix"></div>

<div class="col-md-4" <?php if (@$z[21]==177){} else { echo 'style="display:none;"'; } ;?>>

<div class="form-group clearfix checkboxcontainer">



<input type="checkbox" class="required form-control" id="father" name="con_note_numeric" value="1">

<label class="control-label " for="father">Con Note Numeric</label>



</div>

</div>



<div class="clearfix"></div>



<div class="col-md-6" <?php if (@$z[22]==178){} else { echo 'style="display:none;"'; } ;?>>

<div class="form-group clearfix">

<label class="control-label " for="father">Con Note Description</label>



<input type="text" class="required form-control" id="father" name="con_note_description" placeholder="Con Note Description">



</div>

</div>



<div class="clearfix"></div>

<div class="col-md-4" <?php if (@$z[23]==179){} else { echo 'style="display:none;"'; } ;?>>

<div class="form-group clearfix checkboxcontainer">



<input type="checkbox" class="required form-control" id="father" name="reference_required" value="1">

<label class="control-label " for="father">Reference Required</label>



</div>

</div>   



<div class="clearfix"></div>



<div class="col-md-6" <?php if (@$z[24]==180){} else { echo 'style="display:none;"'; } ;?>>

<div class="form-group clearfix">

<label class="control-label " for="father">Reference Characters</label>



<input type="text" class="required form-control" id="father" name="reference_characters" placeholder="Reference Characters">



</div>

</div>   



<div class="clearfix"></div>												

<div class="col-md-4" <?php if (@$z[25]==181){} else { echo 'style="display:none;"'; } ;?>>

<div class="form-group clearfix checkboxcontainer">



<input type="checkbox" class="required form-control" id="father" name="reference_numeric" value="1">

<label class="control-label " for="father">Reference Numeric</label>



</div>

</div>



<div class="clearfix"></div>

<div class="col-md-6" <?php if (@$z[26]==182){} else { echo 'style="display:none;"'; } ;?>>

<div class="form-group clearfix">

<label class="control-label " for="father">Reference Description</label>



<input type="text" class="required form-control" id="father" name="reference_description" placeholder="Reference Description">



</div>

</div>



<div class="clearfix"></div>

<div class="col-md-4" <?php if (@$z[27]==183){} else { echo 'style="display:none;"'; } ;?>>

<div class="form-group clearfix checkboxcontainer">



<input type="checkbox" class="required form-control" id="father" name="reminder" value="1" >



<label class="control-label " for="father">Reminder</label>



</div>

</div>

<div class="clearfix"></div>

<div class="col-md-12" <?php if (@$z[28]==184){} else { echo 'style="display:none;"'; } ;?>>

<div class="form-group clearfix">

<label class="control-label " for="address">Note</label>



<input type="text" name="note" class="required form-control">



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



<?php  $this->load->view('headerfile/footer');?>

</div>





<!-- ============================================================== -->

<!-- End Right content here -->

<!-- ============================================================== -->







</div>

<!-- END wrapper -->







<script>

var resizefunc = [];

</script>



<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>

<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>

<script src="<?php echo base_url('assets/js/detect.js')?>"></script>

<script src="<?php echo base_url('assets/js/fastclick.js')?>"></script>

<script src="<?php echo base_url('assets/js/jquery.blockUI.js')?>"></script>

<script src="<?php echo base_url('assets/js/waves.js')?>"></script>

<script src="<?php echo base_url('assets/js/jquery.slimscroll.js')?>"></script>

<script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js')?>"></script>

<script src="<?php echo base_url('assets/plugins2/switchery/switchery.min.js')?>"></script>

<script src="<?php echo base_url('assets/plugins2/datatables/jquery.dataTables.min.js')?>"></script>

<script src="<?php echo base_url('assets/plugins2/datatables/dataTables.bootstrap.js')?>"></script>

<script src="<?php echo base_url('assets/plugins2/datatables/dataTables.buttons.min.js')?>"></script>

<script src="<?php echo base_url('assets/plugins2/datatables/buttons.bootstrap.min.js')?>"></script>

<script src="<?php echo base_url('assets/plugins2/datatables/jszip.min.js')?>"></script>

<script src="<?php echo base_url('assets/plugins2/datatables/pdfmake.min.js')?>"></script>

<script src="<?php echo base_url('assets/plugins2/datatables/vfs_fonts.js')?>"></script>

<script src="<?php echo base_url('assets/plugins2/datatables/buttons.html5.min.js')?>"></script>

<script src="<?php echo base_url('assets/plugins2/datatables/buttons.print.min.js')?>"></script>

<script src="<?php echo base_url('assets/plugins2/datatables/dataTables.fixedHeader.min.js')?>"></script>

<script src="<?php echo base_url('assets/plugins2/datatables/dataTables.keyTable.min.js')?>"></script>

<script src="<?php echo base_url('assets/plugins2/datatables/dataTables.responsive.min.js')?>"></script>

<script src="<?php echo base_url('assets/plugins2/datatables/responsive.bootstrap.min.js')?>"></script>

<script src="<?php echo base_url('assets/plugins2/datatables/dataTables.scroller.min.js')?>"></script>

<script src="<?php echo base_url('assets/plugins2/datatables/dataTables.colVis.js')?>"></script>

<script src="<?php echo base_url('assets/plugins2/datatables/dataTables.fixedColumns.min.js')?>"></script>

<!-- init -->

<script src="<?php echo base_url('assets/pages/jquery.datatables.init.js')?>"></script>

<script src="<?php echo base_url('assets/plugins2/footable/footable.min.js')?>"></script>

<!-- App js -->

<script src="<?php echo base_url('assets/js/jquery.core.js')?>"></script>

<script src="<?php echo base_url('assets/js/jquery.app.js')?>"></script>

 

		<script type="text/javascript">
function myFunctionq(){

	

    var divLoc = $('#div1').offset();

    $('html, body').animate({scrollTop: divLoc.top},"slow");

    return false

    };

</script>

</body>

</html>