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
         <title>Bill Reports - Pallet Logistics</title>
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
<style>
button#one:focus
{
    background:#6f7175;
}
button#two:focus
{
    background:#6f7175;
}
button#three:focus
{
    background:#6f7175;
}
button#fourth:focus
{
    background:#6f7175;
}
</style>

<script>

jQuery(function(){
   jQuery('#modal').click();
});
</script>
    <body class="fixed-left" onload="myfunction(1)">
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
						
						<?php
						if(isset($_POST['submit']))
						{
							$id=$_POST['submit'];
							if($id==1)
							{
							    error_reporting(0);
								echo $_POST['reconcilation'];
								echo $_POST['location_tp'];
								echo $_POST['equipment'];
								echo $_POST['from_date'];
								echo $_POST['to_date'];
								echo $_POST['include_stocktake'];
								echo $_POST['display_seprately'];
								echo $_POST['six_month'];
								echo $_POST['six_week'];
								echo $_POST['reported_variance'];
								
								
							}
						}
						?>
						

<form action="" method="post">
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
											


                                               <strong>Reconcilation:  &nbsp;&nbsp;&nbsp;&nbsp;   Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo date('d/m/Y');?></strong><br>
                                                <div class="pull-left m-t-30">
                                                    <address>
                                                      <strong>Location TP:  &nbsp;&nbsp;&nbsp;&nbsp;   Combined Location</strong><br>
                                                      <strong>Equipment:       &nbsp;&nbsp;&nbsp;   CEVA Pallecons<strong><br>
													  <strong>Account Number:       &nbsp;&nbsp;&nbsp;   0000000000<strong><br>
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
														
																<th>Description </th>
																<th>Last Stock Take</th>
																
																<th>Quantity</th>
                                                        
															
														
                                                        </tr></thead>
                                                        <tbody>
														<?php 
														$results=$this->User_Model->trading_partner_report();
														foreach($results as $row) 
														{

														?>
                                                            <tr>
                                                                <td><?php echo $row->tp_name;?> </td>
                                                                <td><?php $data=$this->User_Model->tp_accounts_details($row->memberId);
																echo $data['tpa_account_number'];
																;?> </td>
																  <td>------</td>
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
		
		<div class="container">
 
  <!-- Trigger the modal with a button -->
 

  <!-- Modal -->
 
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Bills Report Data Filter</h4>
                                                </div>
                                                <div class="modal-body">
												     <div class="row">
													<div class="col-md-12 radiobtnbox">
															 <div class="col-md-3">
															  <button type="button" class="btn" value="1"  onclick="myfunction(this.value)" id="one">Reconcilation</button>
															  </div>
															  	<div class="col-md-3">
															  <button type="button" class="btn" value="2"  onclick="myfunction(this.value)" id="two">Bill Prediction</button>
															  </div>
															  	<div class="col-md-3">
															  <button type="button" class="btn" value="3" onclick="myfunction(this.value)" id="three">Bill Totals</button>
															  </div>
															  	<div class="col-md-3">
															  <button type="button" class="btn" value="4" onclick="myfunction(this.value)" id="fourth">Detailed Bill</button>
															  </div>
                                                    </div>
													<div id="reconcilation"></div>
                                         
                                        </div>
                                    </div> 
</div>
		<script>
function myfunction(data) {
var reconcilation=data;

$('#reconcilation').load('<?php echo base_url("User/reconcilation")?>',{"reconcilation":reconcilation});
}
</script>
	<script>
$(".datecontainer input").inputmask();
</script>	
		
    </body>
</html>