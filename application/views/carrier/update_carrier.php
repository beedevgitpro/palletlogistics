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

        <!--Form Wizard-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins2/jquery.steps/css/jquery.steps.css')?>" />

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
<style>
input[type="checkbox"]{
  width: 20px; /*Desired width*/
  height: 20px; /*Desired height*/
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
					                    <?php $metaid=$_REQUEST['uc'];
						                      $metaid=base64_decode($metaid);
						                $datass=$this->User_Model->update_carrier($metaid);
						                     ?>


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Pallet Logistics<span style="margin-left:100px;"><?php echo $this->session->flashdata('message');?></span></h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Member</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('User/add_member')?>">Add Member </a>
                                        </li>
                                       
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        
                        <!-- Wizard with Validation -->

                        <div class="row">
							<div class="col-sm-12">
								<div class="card-box">
									<h4 class="m-t-0 header-title"><b>Add Carrier</b></h4>
									
									<form id="wizard-validation-form" method="post" action="<?php echo base_url('User/updatesss_carrier')?>">
                                        <div>
                                          <input type="hidden" name="login_id" value="<?php echo $datass['login_id'];?>">
                                          <input type="hidden" name="meta_id" value="<?php echo $datass['metaid'];?>">
                                            <h3></h3>
                                             <section>
                                              <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Carrier*</label>
                                                  
                                                        <input type="text" class="required form-control" value="<?php echo $datass['carrier'];?>"  name="carrier" placeholder="Carrier">
                                                   
                                                </div>
												</div>
												
												<div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="last_name">Active</label>
                                                  <?php if($datass['active']==1)
												  {
                                                        echo"<input type='checkbox' class='form-control'  name='active' value='1' checked>";
												  }
												  else 
												  {
													echo"<input type='checkbox' class='form-control'  name='active' value='1' >";  
												  }
														
														?>
                                                   
                                                </div>
												</div>
                                  
                              
                                      
                                              
											      <div class="col-md-12">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="address">Notes *</label>
                                                  
                                                       <textarea name="note" class="required form-control" ><?php echo $datass['notes'];?>
                                                        </textarea>
                                                </div>
                                                </div>

                                      
                                            </section>
                                          <h3></h3>

            <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4">
                                        <input type="submit" name="submit" value="Submit" class="btn btn-success">
                                        </div>
                                        <div class="col-md-4"></div>
                                        </div>
                                          
                                   
                                        </div>
										
                                    </form>
								</div>
							</div>
						</div>
                        <!-- End row -->



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
        <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
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
		<script>
		function change_state(data)
		{
		var stateId=data.value;
		//alert(stateId);
		$('#franchise').load('<?php echo base_url("User/getData")?>',{"stateId":stateId});
		}
		</script>
		<script>
		function check_sponsorId(data)
		{
		var sponsorId=data.value;
		//alert(sponsorId);
		$('#sponsor').load('<?php echo base_url("User/getData")?>',{"sponsorId":sponsorId});
		}
		</script>
		
		<script>
		function check_rdId(data)
		{
		var rdId=data.value;
		//alert(rdId);
		$('#rd').load('<?php echo base_url("User/getData")?>',{"rdId":rdId});
		sponsor_detail();
		}
		</script>
		
		<script>
		function sponsor_detail()
		{
		var sponsorId2=$("#sponsorId").val();
		var rdId2=$("#rdId").val();
		$('#detail').load('<?php echo base_url("User/getData")?>',{"sponsorId2":sponsorId2,"rdId2":rdId2});
		}
		</script>
    </body>
</html>