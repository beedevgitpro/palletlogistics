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
         <title>Equipment Report - Pallet Logistics</title>
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

        <!-- Loader -->
		
	  <?php if(isset($_POST['submit']))
	          { 
      $from_date=$_POST['from_date'];
	  $to_date=$_POST['to_date'];
	 // $equipment_id=$_POST['equipment_id'];
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
	  $equipment_id='';
	  if(isset($_POST['equipment']))
	  {
	  $equipment_id=$_POST['equipment'];
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
	$group_by='';
	$third_parties='';
	$tp_location='';
	$type='';
	}
    

  ?>    
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
                                          <button type="button" id="modal" class="btn btn-info btn-lg click_button" data-toggle="modal" data-target="#myModal">Data Filtering</button>
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
                                                <h3>Pallet Logistics</h3> <?php echo $equipment_id; ?>
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
                                                    <table class="table m-t-30 table-colored table-info">
                                                        <thead>
                                                            <tr>
														<tr>
															<th>Location</th>
                                                            <th>Issues</th>
                                                            <th>Transfers</th>
                                                            <th>Exchanges</th>
                                                            <th>Total</th>
															<th>Dehires</th>
                                                            <th>Transfers</th>
                                                            <th>Exchanges</th>
                                                            <th>Total</th>
															<th>FT Ratio</th>
                                                            </tr></thead>
                                                  
                                                        <tbody>
														<?php 
					
					$results=$this->User_Model->get_movementreport($from_date,$to_date,$value1,$value2,$order_by,$third_parties,$tp_location,$type,$equipment_id);
								
														foreach($results as $row) 
														{
														$total=0;
                                                  if($equipment_id=='combine')
														 {														
														?>
												
														 <?php }
														 else { ?>
															 				     <tr>
														 <td style="font-weight:bold"><font size="4">
														 <?php 
														
														$x=$this->User_Model->get_equipment_id($row->equipment);
														echo $x['equipment']; ?>
														</font></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
																<td></td>
																<td></td>
														        <td></td>
																 <td></td>
																  <td></td>
                                                            </tr>
														<?php	 
														 } ?>
	                                         
                                                            <tr>
                                                                <td>
																<?php
                                                                $sending_tp=$this->User_Model->member_management_view($row->sending_tp);
																$sending_tp;?> 
																<?php echo $sending_tp;?><br><?php $receiving_tp=$this->User_Model->member_management_view($row->receiving_tp,$equipment_id);
																echo $receiving_tp;?>
																</td>
																<td>0<br>0</td>
                                                                <td>0<br>0</td>
                                                                
                                                                <td><?php echo $row->quantity;?><br>0</td>
                                                                <td><?php echo $row->quantity; ?><br>0</td>
																	<td>0<br>0</td>
                                                                <td>0<br>0</td>
                                                                
                                                                <td>0<br><?php echo $row->quantity;?></td>
                                                                <td>0<br><?php echo $row->quantity; ?></td>
                                                                <td>----</td>
                                                                
                                                            </tr>
														<?php	
														if($equipment_id=='combine')
														 {
															 
														 }
														 else {
														$total=$total+$row->quantity; ?>
                                                                       <tr>
                                                               <td><b><span style='font-weight:bold;'> <font size="4">Total</font></span></b></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
																<td></td>
																<td></td>
														        <td></td>
																 <td></td>
														 <td><b><?php echo $total;}

                                                            $total=$total+$row->quantity;														
															} if($equipment_id=='combine')
														     { ?></b></td>
														           <tr>
                                                               <td><b><span style='font-weight:bold;'> <font size="4">Total</font></span></b></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
																<td></td>
																<td></td>
														        <td></td>
																 <td></td>
															 <td><b><?php echo $total; } ?></b></td>     
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

		<!-------------------------------Modal----------------------------->
		<div class="container">
 
  <!-- Trigger the modal with a button -->
 

  <!-- Modal -->
 <form action="" method="post">
 <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Equipment Report Data Filter</h4>
                                                </div>
                                                <div class="modal-body">
												     <div class="row">
                                                  <div class="col-md-12 radiobtnbox">
                                                            <div class="form-group checkboxcontainer">
                                                                <input type="radio" name="filters" class="form-control" id="field-1" placeholder="John">
                                                                <label for="field-1" class="control-label">Summery Data</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 radiobtnbox">
                                                            <div class="form-group checkboxcontainer">
                                                                
                                                         <input type="radio" name="filters" class="form-control" id="field-4" placeholder="Boston">
														 <label for="field-2" class="control-label">Movement Data</label>
                                                            </div>
                                                        </div>
														  <div class="col-md-12 radiobtnbox">
                                                            <div class="form-group checkboxcontainer">                                                                
                                                         <input type="radio" name="filters" class="form-control" id="field-4" placeholder="Boston">
														 <label for="field-2" class="control-label">Monthly  Data</label>
                                                            </div>
                                                        </div>
														  <div class="col-md-12 radiobtnbox">
                                                            <div class="form-group checkboxcontainer">
                                                         <input type="radio" name="filters" class="form-control" id="field-4" placeholder="Boston">		
														 <label for="field-2" class="control-label">Annual Data</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                  <div class="col-md-6">
                                                            <div class="form-group datecontainer">
                                                                <label for="field-1" class="control-label">From Date</label>
                                                                <input type="text" data-inputmask="'alias': 'date'" name="from_date" data-date="" data-date-format="DD-M-YYYY" value="<?php echo date('Y-m-d');?>" class="required form-control ddmmyy" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group datecontainer">
                                                                <label for="field-2" class="control-label">To Date</label>
                                                         <input type="text" data-inputmask="'alias': 'date'" name="to_date" data-date="" data-date-format="DD-M-YYYY" value="<?php echo date('Y-m-d');?>" class="required form-control ddmmyy">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="field-3" class="control-label">Equipment</label>
                                                         <select name="equipment" class="required form-control valid" aria-required="true" aria-invalid="false">
                                                 <option>--- Select Equipment---</option>
												 <option value="">All Equipments</option>
                                                 <?php $result=$this->User_Model->fetch_equipment();
												  
												   echo"<option value='combine'>Combine Equipment;</option>";
                                                 foreach ($result as $row) {
                                                      ?>
                                                       <option value="<?php echo $row->metaid;?>"><?php echo $row->equipment; ?></option>
                                                       <?php
                                                        }
                                                       ?>
                                                 </select>
                                                            </div>
                                                        </div>
														                <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="field-4" class="control-label">Location TP</label>
                                                    <select name="trading_partner" class="required form-control valid" aria-required="true" aria-invalid="false">
                                                 <option>--- Select Location TP---</option>
												  <option value=""><?php echo 'trading partner'."-------".'Type'; ?>
                                                 <?php $result=$this->User_Model->fetch_trading_partner();
                                             foreach ($result as $row) {
                                                      ?>

                                                       <option value="<?php echo $row->memberId;?>"><?php echo $row->tp_name."--------------".$row->tp_type;?>
													   </option>
                                                       <?php
                                                        }
                                                 ?>
                                                
                                                
                                                 </select>
                                                            </div>
                                                        </div>
											
                                                    </div>
                                      
                                               
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="submit" name="submit" class="btn btn-info waves-effect waves-light">Filter Data</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
  
</div>
</form>
		<!-----------------------------//--------------------------------->
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
		
    </body>
</html>