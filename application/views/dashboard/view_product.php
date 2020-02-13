<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url('assets/images/'); ?>">
        <!-- App title -->
        <title>saas</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/plugins2/morris/morris.css')?>">

		 <link href="<?php echo base_url('assets/plugins2/datatables/jquery.dataTables.min.css')?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/plugins2/datatables/buttons.bootstrap.min.css')?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/plugins2/datatables/fixedHeader.bootstrap.min.css')?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/plugins2/datatables/responsive.bootstrap.min.css')?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/plugins2/datatables/scroller.bootstrap.min.css')?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/plugins2/datatables/dataTables.colVis.css')?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/plugins2/datatables/dataTables.bootstrap.min.css')?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/plugins2/datatables/fixedColumns.dataTables.min.css')?>" rel="stylesheet" type="text/css"/>

		
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

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
			 <?php $this->load->view('headerfile/header');?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
				<?php $this->load->view('headerfile/leftmenu');?>

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
                                    <h4 class="page-title">Buddhaa Tech </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="#">Products</a>
                                        </li>
                                        <li class="active">
                                            View Product
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


                        

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                      <table id="datatable-buttons" class="table table-striped  table-colored table-info">
                                        <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Product Name</th>
                                            <th>Product Price</th>
											<th>Product Category</th>
                                            <th>Product Image</th>
                                            <th>Product Publish</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                      <?php
									  $counter=0;
									  $res=$this->Admin_model->select_product();
									  foreach($res as $row){
									  $counter++;
									  ?>
                                        <tr>
                                            <td><?php echo $counter;?></td>
                                            <td><?php echo $row->product_name;?></td>
                                            <td> ₹  <?php echo $row->product_price;?></td>
											<?php
											$id=$row->product_category;
											$res=$this->Admin_model->get_categoryname($id);
											foreach($res as $rows){
											?>
											<td><?php echo $rows->category_name;?></td>
											<?php
											}
											?>
                                            <td><img src="<?php echo base_url().'assets/images/products/'.$row->product_image?>" class="img-circle" height="50px" width="50px"></td>
                                            <td><?php echo $row->date;?></td>
                                            <td><a href="<?php echo base_url('User/add_product')?>?id=<?php echo $row->product_id;?>"><button class="btn btn-icon waves-effect waves-light btn-success"><i class="fa fa-pencil"></i></button></a><button class="btn btn-icon waves-effect waves-light btn-danger"> <i class="fa fa-remove"></i> </button></td>
                                            
                                        </tr>
									  <?php
									  }
									  ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                       

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/detect.js');?>"></script>
        <script src="<?php echo base_url('assets/js/fastclick.js');?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.blockUI.js');?>"></script>
        <script src="<?php echo base_url('assets/js/waves.js');?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.slimscroll.js');?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js');?>"></script>
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