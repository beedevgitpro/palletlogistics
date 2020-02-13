<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.jpg'); ?>">
        <!-- App title -->
        <title>BUDDHAA TECH Pvt.Ltd.</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/plugins2/morris/morris.css')?>">

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

        <!-- Loader -
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
        </div>-->

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
			<?php echo $login_id=$this->session->userdata('id'); ?>
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Wallet</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Wallet</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('User/dashboard')?>">Home</a>
                                        </li>
                                       
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->
						<?php
						 $establishment_id=3;
						 $login_list=$this->User_Model->user_list();
						 foreach($login_list as $listt)
						 {
   $wallet=$this->User_Model->sum_debit_credit($establishment_id);
  // print_r($wallet);
  
   //$ro=mysqli_fetch_array($wallet);
   $debit_amount=$wallet['debit_amount'];
   $credit_amount=$wallet['credit_amount'];
    $wallet_amount=$debit_amount-$credit_amount;
  $sms_row=$this->User_Model->sum_of_sms_charge_amount($establishment_id);
   //$sms_row=mysqli_fetch_array($sms_charges);
   $sms_charge=$sms_row['sms_charge'];
    $email_row=$this->User_Model->sum_of_email_charge_amount($establishment_id);
   //$email_row=mysqli_fetch_array($email_charges);
   $email_charge=$email_row['email_charge'];
 // $call_charge=$object1->sum_of_call_charge_amount($establishment_id);
   //$call_row=mysqli_fetch_array($call_charge);
   //$sum_call_charge=$call_row['call_charge'];
   //$recharge=$object1->money_transaction_amount_DR_total($establishment_id);
   //$ro=mysqli_fetch_array($recharge);
   //$debit_amount=$ro['debit_amount'];
   //$credit_amount=$ro['credit_amount'];
  // $recharge_amount=$debit_amount-$credit_amount;
   
   $final_amount=$wallet_amount-$sms_charge-$email_charge;
   
						 }
   ?>

                        <div>
 <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table table-hover m-0">
                                                <thead>
                                                    <tr>
                                                        <th>rrr</th>
                                               
                                                        <th>Phone</th>
                                                        <th>Location</th>
                                                        <th>Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  

                                              

                                                
<?php 
                                            $user_list= $this->User_Model->user_list();
											foreach($user_list as $rrr)
											{
												
											
											 ?>

                                                    <tr>
                                                      
                                                        <td>
                                                           
                                                            <p class="m-0 text-muted font-13"><small><?php echo $rrr->username ; ?></small></p>
                                                        </td>
                                                        <td><?php echo $rrr->password ; ?></td>
                                                        <td><?php echo $rrr->login_type ; ?></td>
                                                        <td><?php echo $rrr->date_time; ?></td>
                                                    </tr>
										<?php	} ?>

                                                </tbody>
                                            </table>

                                        </div> <!-- table-responsive -->
                                    </div>
                           

                        </div>
                        <!-- end row -->



                        <!-- end row -->


                      
                        <!-- end row -->




                    </div> <!-- container -->

                </div> <!-- content -->

               <?php $this->load->view('headerfile/footer');?>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->

            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->


        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/detect.js')?>"></script>
        <script src="<?php echo base_url('assets/js/fastclick.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.blockUI.js')?>"></script>
        <script src="<?php echo base_url('assets/js/waves.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.slimscroll.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js')?>"></script>
        <script src="<?php echo base_url('assets/plugins2/switchery/switchery.min.js')?>"></script>

        <!-- Counter js  -->
        <script src="<?php echo base_url('assets/plugins2/waypoints/jquery.waypoints.min.js')?>"></script>
        <script src="<?php echo base_url('assets/plugins2/counterup/jquery.counterup.min.js')?>"></script>

        <!--Morris Chart-->
		<script src="<?php echo base_url('assets/plugins/morris/morris.min.js')?>"></script>
		<script src="<?php echo base_url('assets/plugins/raphael/raphael-min.js')?>"></script>

        <!-- Dashboard init -->
        <script src="<?php echo base_url('assets/pages/jquery.dashboard.js')?>"></script>

        <!-- App js -->
        <script src="<?php echo base_url('assets/js/jquery.core.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.app.js')?>"></script>

    </body>
	
</html>