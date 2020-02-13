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
<script>

//jQuery(function(){
 //  jQuery('#modal').click();
//});
</script>
<style>
input[type=radio] {
  border: 0px;
  width: 100%;
  height: 2em;
}
div#tp_ac_modal .modal-dialog {
    width: 40%;
}
.ddmmyy {
    position: relative;
    
    color: white;
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
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Finance Reports </h4>
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
                                                      <strong>TP Filtering:       &nbsp;&nbsp;&nbsp;   All Location<strong><br>
													  <strong>Filtering:       &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reconciled<strong><br>
                                                   
                                                      </address>
                                                </div>
                                            </div><!-- end col -->
                                        </div>
                                        <!-- end row -->
                                        <div class="m-h-50"></div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table m-t-30 table-colored table-info table-responsive">
                                                        <thead>
                                                            <tr>
															 <th>Trading Partner</th>
                                                            <th>Opening Balance</th>
                                                            <th>Transfers</th>
                                                            <th>Exchanges</th>
                                                            <th>Lost</th>
															<th>Closing Balance</th>
                                                            <th>Closing Balance Detail</th>
                                                            <th>Location Rent</th>
                                                            <th>Third Party Rent</th>
															<th>Black Hole Rent</th>
															 <th>Delay Rent</th>
                                                            <th>Transfer Fees</th>
															<th>Exchange Fees</th>
															 <th>Other Charges</th>
                                                            <th>Amount</th>
                                                        </tr></thead>
                                                        <tbody>
														<tr>
														<td>
														Locations
														</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
														
														
														</tr>
														
														<?php 
														$results=$this->User_Model->fetch_trading_partner_location();
														foreach($results as $row) 
														{
															
														$this->User_Model->op_col_bal($row->memberId);	
														?>
														
                                                            <tr>
                                                                <td><?php echo $row->tp_name;?> </td>
                                                                <td><?php //echo $row->effective_date;?> </td>
                                                                <td><?php //echo $row->sending_tp;?></td>
                                                                <td><?php //echo $row->receiving_tp;?></td>
																<td>---------</td>
																<td><?php //echo $row->reference;?></td>
														        <td><?php //echo $row->transaction;?></td>
																<td><?php //echo $row->docket_number;?></td>
																<td><?php //echo $row->quantity;?></td>
																<td><?php //echo $row->reference;?></td>
														        <td><?php //echo $row->transaction;?></td>
																<td><?php //echo $row->docket_number;?></td>
																<td><?php //echo $row->quantity;?></td>
                                                                <td>----</td>
                                                            
                                                            </tr>
													<?php	} ?>
                                                      <tr>
														<td>
														Totals
														</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
														
														
														</tr>
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
                                                    <h4 class="modal-title">Financial Reports</h4>
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
													 
                                                  <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="field-1" class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Totals Data</label><br>
                                                                <input type="radio" name="filters" class="form-control" id="field-1" placeholder="John">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="field-2" class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Movements Data</label>
                                                         <input type="radio" name="filters" class="form-control" id="field-4" placeholder="Boston">
                                                            </div>
                                                        </div>
														  <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="field-2" class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amount Graph</label>
                                                         <input type="radio" name="filters" class="form-control" id="field-4" placeholder="Boston">
                                                            </div>
                                                        </div>
															    <div class="col-md-3">
                                                                <div class="form-group">
                                                                <label for="field-2" class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amount Graph</label>
                                                                 <input type="radio" name="filters" class="form-control" id="field-4" placeholder="Boston">
                                                                 </div>
                                                                 </div>
														 
                                                    </div>
													     <div class="row">
													 
                                                  <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="field-1" class="control-label">&nbsp;&nbsp;Data</label>
                                                                             <select name="equipment" class="required form-control valid" aria-required="true" aria-invalid="false">
                                                 <option>Select Data</option>
                                                       <option value="">Periods Totals</option>
                                                       <option value="">Annuals Totals</option>
                                                       <option value="">Quarterly Totals</option>
                                                       <option value="">Monthly Totals</option>
                                                       <option value="">Weekly Totals</option>
                                                      </select>
                                                            </div>
                                                        </div>
                                          
														         <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="field-1" class="control-label">&nbsp;&nbsp;Location TP</label>
                                                 <select name="equipment" class="required form-control valid" aria-required="true" aria-invalid="false">
												 <option value=''>Select Location Tp    </option>
												 <option value=''>Select All Location Tp</option>
												 <?php 
												 
												$gett =$this->User_Model->fetch_trading_partner_location();
												
												foreach($gett as $row)
												{
												echo"<option value='$row->memberId'>$row->tp_name</option>";	
												}
												?>
                                              
                                                      </select>
                                                            </div>
                                                        </div>
														              <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="field-1" class="control-label">&nbsp;&nbsp;3rd Party TP</label>
                                                 <select name="equipment" class="required form-control valid" aria-required="true" aria-invalid="false">
												 <option value=''>Select Location Tp    </option>
												 <option value=''>Select All Location Tp</option>
												 <?php 
												 
												$gett =$this->User_Model->fetch_trading_partner();
												
												foreach($gett as $row)
												{
												echo"<option value='$row->memberId'>$row->tp_name</option>";	
												}
												?>
                                              
                                                      </select>
                                                            </div>
                                                        </div>
													
														 
                                                    </div>
											
													        <div class="row">
                                                  <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="field-1" class="control-label">From Date</label>
                                                                <input type="date"  data-date="" data-date-format="DD-M-YYYY" value="<?php echo date('Y-m-d');?>" class="required form-control ddmmyy">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="field-2" class="control-label">To Date</label> 
                                                         <input type="date"  data-date="" data-date-format="DD-M-YYYY" value="<?php echo date('Y-m-d',strtotime("+1 months"));?>" class="required form-control ddmmyy">
                                                            </div>
                                                        </div>
                                                    </div>
                                      
                                               
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-info waves-effect waves-light">Filter Data</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
</div>
<script>
	$(".ddmmyy").on("change", function() {
    this.setAttribute(
        "data-date",
        moment(this.value, "YYYY-MM-DD")
        .format( this.getAttribute("data-date-format") )
    )
}).trigger("change")
</script>
		
    </body>
</html>