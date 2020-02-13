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
         <title>Dashboard - Pallet Logistics</title>

        <!-- DataTables -->
        <link href="<?php echo base_url('assets/plugins2/datatables/jquery.dataTables.min.css')?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/plugins2/datatables/buttons.bootstrap.min.css')?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/plugins2/datatables/fixedHeader.bootstrap.min.css')?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/plugins2/datatables/responsive.bootstrap.min.css')?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/plugins2/datatables/scroller.bootstrap.min.css')?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/plugins2/datatables/dataTables.colVis.css')?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/plugins2/datatables/dataTables.bootstrap.min.css')?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/plugins2/datatables/fixedColumns.dataTables.min.css')?>" rel="stylesheet" type="text/css"/>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/123941/footable.core.css" rel="stylesheet">
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
                                    <h4 class="page-title">Dashboard</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Dashboard</a>
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

                        <div class="row text-center">

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Total Movements</p>
                                        <h2 class="text-danger"><span data-plugin="counterup">
										<?php
										
										$result=$this->User_Model->get_total_member($login_id);
										
										
										echo $total_member=$result['total_member']; ?>
										</span></h2>
                                        <!--<p class="text-muted m-0"><b>Last:</b> 30.4k</p>-->
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Total Bills</p>
                                        <h2 class="text-dark"><span data-plugin="counterup">895</span> </h2>
                                        <p class="text-muted m-0"><b>Last:</b> 1250</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <!--<div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow">joining in this month</p>
                                        <h2 class="text-success"><span data-plugin="counterup">52410</span></h2>
                                        <p class="text-muted m-0"><b>Last:</b> 40.33k</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                        <!-- end col -->

                         <!-- end col -->

                         <!-- end col -->

                        </div>
                        <!-- end row -->



                        <!-- end row -->
    


                                            <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">

                                    <h4 class="m-t-0 header-title"><b>View Equipments</b></h4>
                                             <table id="datatable-buttons" class="table table-striped  table-colored table-info">
                                                <thead>
                                                    <tr>
                                                        <th>S.No.</th>
														<th>username</th>
                                                        <th>password</th>
														<th>User Type</th>
                                                        
                                                        <th>Date of Joining</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php
												$c=1;
											$result1=$this->User_Model->get_latest_login($login_id);
												foreach($result1 as $row1)
												{
												?>
                                                    <tr>
                                                        <td>
                                                           <?php echo $c; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row1->username; ?>
                                                        </td>
                                                        <td><?php echo $row1->password; ?></td>
                                                        <td><?php echo $row1->login_type; ?></td>
                                                        <td><?php 
														echo $date_time = date('d-m-Y H:i:s', strtotime($row1->date_time)); ?></td>
														
                                                    </tr>
													<?php
													$c++;
												}
												?>
                                                 
                                                </tbody>
                                            </table>

                                        </div> <!-- table-responsive -->
                                    
                                

                            
                            <!-- end col -->


                            <!-- end col -->

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

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 
      <script src="
     https://s3-us-west-2.amazonaws.com/s.cdpn.io/123941/footable.js"></script>
<!-- Initialize FooTable -->
<script>
$('.footable').footable({
  calculateWidthOverride: function() {
    return { width: $(window).width() };
  }
}); 

// See:
// http://www.sitepoint.com/responsive-data-tables-comprehensive-list-solutions
</script>


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

        <!-- App js -->
        <script src="<?php echo base_url('assets/js/jquery.core.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.app.js')?>"></script>

        <script>
            $(document).ready(function () {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable({keys: true});
                $('#datatable-responsive').DataTable();
                $('#datatable-colvid').DataTable({
                    "dom": 'C<"clear">lfrtip',
                    "colVis": {
                        "buttonText": "Change columns"
                    }
                });
                $('#datatable-scroller').DataTable({
                    ajax: "../plugins/datatables/json/scroller-demo.json",
                    deferRender: true,
                    scrollY: 380,
                    scrollCollapse: true,
                    scroller: true
                });
                var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
                var table = $('#datatable-fixed-col').DataTable({
                    scrollY: "300px",
                    scrollX: true,
                    scrollCollapse: true,
                    paging: false,
                    fixedColumns: {
                        leftColumns: 1,
                        rightColumns: 1
                    }
                });
            });
            TableManageButtons.init();
        </script>

    </body>

</html>