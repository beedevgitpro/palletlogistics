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

<!-- App css -->
<link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/core.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/components.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/icons.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/pages.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/menu.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/responsive.css')?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url('assets/plugins2/switchery/switchery.min.css')?>">

<link rel="stylesheet" href="<?php echo base_url('assets/plugins2/footable/footable.bootstrap.min.css')?>">

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
<h4 class="page-title">Pallet Logistics</h4>
<ol class="breadcrumb p-0 m-0">
<li>
<a href="<?php echo base_url('User/dashboard')?>">View Supplier</a>
</li>
<li>
<a href="<?php echo base_url('User/view_incentive_level')?>">View Supplier</a>
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

<h4 class="m-t-0 header-title"><b>View Supplier</b></h4>


<table id="_datatable-buttons" class="footable table table-striped  table-colored table-info footable-info" data-toggle-column="first" data-paging="true">
<thead>
<tr>

<th>Supplier Date</th>
<th data-breakpoints="xs">Type</th>
<th data-breakpoints="xs sm md">Trading Partner</th>
<th data-breakpoints="xs sm md">Batch Number</th>
<th data-breakpoints="xs sm md">Start Date</th>
<th data-breakpoints="xs sm md">Export Ons</th>
<th data-breakpoints="xs sm md">Export_Offs</th>
<th data-breakpoints="xs sm md">Exported</th>
<th data-breakpoints="xs sm md">Note</th>
<th data-breakpoints="xs sm md">Action</th>
</tr>
</thead>
<tbody>
<?php
$c=1;
$result=$this->User_Model->get_supplier_viewss();
foreach($result as $row)
{
?>
<tr>

<td><?php echo $row->supplier_date; ?></td>
<td>
<?php
echo $this->User_Model->supplier_name($row->type);

?>
</td>
<td><?php echo $this->User_Model->find_name($row->trading_partner)  ; ?></td>
<td><?php echo $row->batch_number; ?></td>
<td><?php echo $row->start_date; ?></td>
<td><?php echo $row->export_ons; ?></td>
<td><?php echo $row->export_offs; ?></td>
<td><?php echo $row->exported; ?></td>
<td><?php echo $row->note; ?></td>

<td>
<div class="btn-group actnbox">
<a href="<?php echo base_url();?>User/update_equipments?uc=<?php  //echo rtrim(base64_encode($row->metaid),'='); ?>" class="btn btn-warning" data-toggle="tooltip" title="update"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i></a>
<a href="<?php echo base_url()?>User/delete_interview/<?php //echo rtrim(base64_encode($row->metaid ),'=');?>" class="btn btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>											

</div>
</td>

</tr>
<?php
$c++;
}
?>
</tbody>
</table>
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

<script src="<?php echo base_url('assets/plugins2/footable/footable.min.js')?>"></script>

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

		<script>
			jQuery(function($){
				$('.footable').footable(); 
			});
		</script>
</body>
</html>