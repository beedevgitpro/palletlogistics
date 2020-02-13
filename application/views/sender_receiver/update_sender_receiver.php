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
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Pallet Logistics</h4><?php echo $this->session->flashdata('message'); ?>
                                    <ol class="breadcrumb p-0 m-0">
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

                                            <h4 class="header-title m-t-0">Sender Receiver
</h4>
                                            <?php $metaid=$_REQUEST['uc'];
						                 $metaid=base64_decode($metaid);
						                 $datass=$this->User_Model->update_sender_receiver($metaid);
						                     ?>
                                            <div class="p-20">
                                                <form id="wizard-validation-form" method="post" action="<?php echo base_url('User/updated_sender_receicer')?>">
                                        <div>
                                           
                                           
                                             <section>
											 <input type="hidden" class="required form-control"  name="login_id" value="<?php $datass['login_id'];?>">
											 <input type="hidden" class="required form-control"  name="metaid" value="<?php $datass['metaid'];?>">
                                              <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Sender/Receiver Name *</label>
                                                  
                                                        <input type="text" class="required form-control"  name="sender_receicer" value="<?php echo $datass['sender_receiver_name'];?>" placeholder="Sender Name">
                                                   
                                                </div>
                                                </div>
                                                
                                      
                                                       <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="last_name">Trading Partner</label>
                                                  
                                                           <select name="trading_partner_id" class="required form-control valid" aria-required="true" aria-invalid="false">
                                                 <option>--- Select Trading Partner---</option>
                                                 <?php $result=$this->User_Model->fetch_tp_send_recieve();
                                             foreach ($result as $row) {
                                                      if($datass['trading_partner_name']==$row->memberId)
													  {
                                                      
                                                       echo"<option value='$row->memberId' selected>$row->tp_name</option>";
													  }
													  else {
														  echo"<option value='$row->memberId'>$row->tp_name</option>";
													  }
                                                        }
                                                 ?>
                                                
                                                
                                                 </select>
                                                   
                                                </div>
                                                </div>


                            
                                                <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Phone Number</label>
                                                 
                                                        <input type="text" class="required form-control" id="father" name="phone_number" value="<?php echo $datass['phone_number'];?>" placeholder="Phone Number">
                                                   
                                                </div>
                                                </div>
                                                     <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Mobile Number</label>
                                                  
                                                        <input type="text" class="required form-control"  name="mobile_number" value="<?php echo $datass['mobile_number'];?>" placeholder="Mobile Number">
                                                   
                                                </div>
                                                </div>
                                                 <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Email Id</label>
                                                  
                                                        <input type="email" class="required form-control"  name="email_id" value="<?php echo $datass['email'];?>" placeholder="Email Id">
                                                   
                                                </div>
                                                </div>
                    
                                                <div class="col-md-2">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="address">Active</label>
                                                  <?php 
												      if($datass['active']==1)
													  {
                                                       echo"<input type='checkbox' name='active' class='required form-control' value='1' checked>";
													  }
													  else
													  {
													   echo"<input type='checkbox' name='active' class='required form-control' value='1' >";
													  }
                                                       ?>
                                                </div>
                                                </div>
                                                    <div class="col-md-2">
                                     <div class="form-group clearfix">
                                     <label class="control-label " for="address">Default</label>            
                                 
								  <?php
                                                  if($datass['defaults']==1)
													  {
                                                       echo"<input type='checkbox' name='default' class='required form-control' value='1' checked>";
													  }
													  else
													  {
													   echo"<input type='checkbox' name='default' class='required form-control' value='1'>";
													  }
                                                       ?>								  
                                                </div>
                                                </div>
                                                     <div class="col-md-12">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="address">Notes *</label>
                                                  
                                                       <textarea name="note" class="required form-control"><?php echo $datass['note']?>
                                                        </textarea>
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