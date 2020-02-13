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
        <link href="<?php echo base_url('assets/plugins2/datatables/jquery.dataTables.min.css')?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/plugins2/datatables/buttons.bootstrap.min.css')?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/plugins2/datatables/fixedHeader.bootstrap.min.css')?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/plugins2/datatables/responsive.bootstrap.min.css')?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/plugins2/datatables/scroller.bootstrap.min.css')?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/plugins2/datatables/dataTables.colVis.css')?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/plugins2/datatables/dataTables.bootstrap.min.css')?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/plugins2/datatables/fixedColumns.dataTables.min.css')?>" rel="stylesheet" type="text/css"/>
    <!-- FooTable Bootstrap CSS -->
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

  
    <style type="text/css">
        h2 {
  text-align: center;
  padding: 20px 0;
}

table caption {
    padding: .5em 0;
}

.p {
  text-align: center;
  padding-top: 140px;
  font-size: 14px;
}

    </style>
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
                                    <h4 class="page-title">Pallet Logistics<span style="margin-left:100px;"><?php echo $this->session->flashdata('message');?></span></h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="<?php echo base_url('User/dashboard')?>">Home</a>
                                        </li>
                                 
                                        
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

<form action="<?php echo base_url('User/inser_user_rights_filelds');?>" method="post">
                            <div class="row">
<div class="col-md-6">
<div class="form-group clearfix">
<label class="control-label " for="father">Trading Partner List</label>

<select  id="selectlist" name="member_login_id" class="required form-control">
<option value="" hidden>--Select Trading Partner--</option>
<?php 
$result=$this->User_Model->get_login();
foreach($result as $row)
{
?>
<option value="<?php echo $row->login_id;?>"><?php echo $row->username;?></option>
<?php } ?>
</select>

</div>
</div>
<div class="col-md-6">
<div class="form-group clearfix">
<label class="control-label " for="father">Form List</label>

<select name="form_id" id="sendind_tp" class="required form-control" onchange="form_list(this.value)">
<option value="" hidden>--Select Form--</option>
<?php 
$result=$this->User_Model->get_form_list();
foreach($result as $row)
{
?>
<option value="<?php echo $row->form_name_id;?>"><?php echo $row->form_names;?></option>
<?php } ?>
</select>

</div>
</div>
                            <div class="col-sm-12">
							<div id="field_list"></div>


</div>

  </div>
</div>




</div> <!-- /container -->

</form>
</div> 

<!-- Placed at the end of the document so the pages load faster -->
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

        </div>
        <!-- END wrapper -->
<script>
function form_list(data)
{
	var selectlist=$('#selectlist').val();
	
	var form_id=data;
	
	$('#field_list').load('<?php echo base_url("User/findData")?>',{"form_id":form_id,"selectlist":selectlist});
	
}
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


    </body>
</html>
