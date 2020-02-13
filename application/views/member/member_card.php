<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App title -->
        <title>BUDDHAA TECH Pvt.Ltd.</title>

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
       

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
			<?php $this->load->view('headerfile/header');?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
			<?php $this->load->view('headerfile/leftmenu');?>
            <!-- Left Sidebar End -->

			<?php
			$id=$this->input->get('id', TRUE);
			$result=$this->User_Model->get_member_detail($id);
			foreach($result as $row)
			{
			$member_code=$row->member_code;
			$first_name=$row->first_name;
			$father=$row->father;
			$last_name=$row->last_name;
			$dob=$row->dob;
			$gender=$row->gender;
			$age=$row->age;
			$occupation=$row->occupation;
			$doj=$row->doj;
			$address=$row->address;
			}
			?>

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
                                    <h4 class="page-title">BUDDHAA <span style="margin-left:100px;"><?php echo $this->session->flashdata('message');?></span></h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="<?php echo base_url('User/view_member')?>">Member</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('User/member_card')?>">Member Card</a>
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
                                                <h4><img src="<?php echo base_url('assets/images/logo.jpg'); ?>" alt="" height="30"> BUDDHAATECH WORLD ADVANTAGE PRIVATE LIMITED</h4>
												<h6 style="margin-left:70px">BuddhNagari Ward No-4 Gorakhpur Road NH-28 Kushinagar-274403</h6>
												<h6 style="margin-left:100px">Uttar Pradesh, Contact Us:9662101102</h6>
												<h6 style="margin-left:100px">www.buddhaatech.com</h6>
                                            </div>
                                            
                                        </div>
                                        <hr>
										<table width="100%"><tr><th style="text-align:center"><button> Main Applicant</button>  </th></tr></table>
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="pull-left m-t-30" style="border:0.5px solid;height:250px;width:320px;">
												<!--title-->
												 <h5 style="font-size:10px"><img src="<?php echo base_url('assets/images/logo.jpg'); ?>" alt="" height="25"> <strong>BUDDHAATECH WORLD ADVANTAGE PRIVATE LIMITED</strong></h5>
												<h6 style="margin-left:70px;font-size:8px;">BuddhNagari Ward No-4 Gorakhpur Road NH-28 Kushinagar-274403</h6>
												<h6 style="margin-left:100px;font-size:8px;">Uttar Pradesh, Contact Us:9662101102</h6>
												<h6 style="margin-left:100px;font-size:8px;">www.buddhaatech.com</h6>
												<table width="100%"><tr><th style="text-align:center;font-size:10px;"><button> Main Applicant</button>  </th></tr></table>
												<!--title-->
                                                    <table width="100%">
													<br/>
													<tr><th style="padding-left:7px">Name:&nbsp;</th><td><?php echo @$first_name; ?></td><th style="padding-left:5px">Gender:</th><td><?php echo @$gender; ?></td></tr>
													<tr><th >&nbsp;</th><td></td><th ></th><td></td></tr>
													<tr><th style="padding-left:7px">ID:&nbsp;</th><td><?php echo @$member_code; ?></td><th style="padding-left:5px">DOB:&nbsp;</th><td><?php echo @$dob; ?></td></tr>
													<tr><th >&nbsp;</th><td></td><th ></th><td></td></tr>
													<tr><th style="padding-left:7px">DOJ:&nbsp;</th><td><?php echo @$doj; ?></td><th style="padding-left:5px">Occupation:&nbsp;</th><td><?php echo @$occupation; ?></td></tr>
													
													</table>
                                                </div>
                                                <div class="pull-right m-t-30" style="border:0.5px solid;height:250px;width:320px;">
                                                    <h4 style="text-align:center">Term & Condition</h4>
                                                    <ol> 
													  <li style="font-size:8px">The holder of this card is the solder of buddhaatech world advantage pvt ltd</li>
													  <li style="font-size:8px">He is not an employee or agent or in partnership with buddhaa tech and has no power to incur any debt, contracts obligation or liabilities or to make any representation of any warranties on behalf of buddhaatech world advantage pvt ltd.</li>
													  <li style="font-size:8px">This card is not transferable.</li>
													  <li style="font-size:8px">This card is and shall remain the property of the buddhaa tech and solder shall return in to buddhaa tech without any delay upon termination or expiration of the solderahip.</li>
													  <li style="font-size:8px">Validity of this card is subject to renewal of soldership and its usage governed by buddhaa tech rules, regulations & code of ethics.</li>
													  <li style="font-size:8px"> If found, please return to buddhaatech world advantage pvt. ltd., Buddhanagari ward number 4 NH28 gorakhapur road kushinagar-274403, contact-9662101102,www.buddhaatech.com</li>
													</ol> 

                                                </div>
                                            </div><!-- end col -->
                                        </div>
                                        <!-- end row -->
										<hr>
                                        
                                        <div class="row">
                                            <div class="col-md-12">
											<div class="pull-left">
											<table width="100%"><tr><th style="text-align:center">Declaration Form / घोषणा  पत्र  </th></tr>
											<tr><th style="text-align:center"><button> Applicant Declaration / आवेदक  की  घोषणा </button>  </th></tr>
											</table>
                                            <table width="100%">
											<tr><th>मैं &nbsp;:&nbsp;</th><td><?php echo @$first_name.@$last_name; ?>........</td>&nbsp;&nbsp;<th>पुत्र /पुत्री /पत्नी &nbsp;:&nbsp;</th><td><?php echo @$father; ?>..........</td>&nbsp;&nbsp;<th>उम्र &nbsp;:&nbsp;</th>&nbsp;&nbsp;&nbsp;<td><?php echo @$age; ?>..........</td></tr></table>
											
											<table width="100%">
											<tr style="padding-top:15px;"><th>आई .  डी . न 0. &nbsp;:&nbsp;</th><td><?php echo @$member_code; ?>........</td>&nbsp;&nbsp;<th>पता &nbsp;:&nbsp;</th><td><?php echo @$address; ?>...............</td>&nbsp;&nbsp;<th></th><td></td></tr></table>
											
											<table width="100%">
											<tr style="padding-top:15px;"><th>आज  दिनांक  &nbsp;:&nbsp;</th><td><?php echo @$doj; ?>.......</td><th></th><td></td></tr>
											</table>
											<table width="100%">
											<tr><th>को पूरे होशोहवास में , पूरी सत्यनिष्ठा व पवित्रता के साथ बिना किसी <br/>दबाव के निम्न लिखित बातो की  घोषणा करता  हूँ </th></tr>
											</table>
												</div>
												
												<div class="pull-right m-t-30" style="border:0.5px solid;height:130px;width:170px;"></div>
                                            </div>
											
                                        </div>
                                       
                                        <br/>
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

        <!-- App js -->
        <script src="<?php echo base_url('assets/js/jquery.core.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.app.js')?>"></script>

    </body>
</html>