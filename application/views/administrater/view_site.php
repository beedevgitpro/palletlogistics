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



<link rel="stylesheet" href="<?php //echo base_url('assets/plugins2/footable/footable.bootstrap.min.css')?>">



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

<h4 class="page-title">Pallet Logistics</h4><span style="margin-left:100px;"><?php echo $this->session->flashdata('message');?></span>

<ol class="breadcrumb p-0 m-0">

<li>

<a href="<?php echo base_url('User/dashboard')?>">Trading Partner</a>

</li>

<li>

<a href="<?php echo base_url('User/view_member')?>">View Trading Partner</a>

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



<h4 class="m-t-0 header-title"><b>View Trading Partner Details</b></h4>





<table  id="_datatable-buttons" class="footable table table-striped  table-colored table-info footable-info" data-toggle-column="first" data-paging="true" >

<thead>

<tr>



<th>Trading Partner Name</th>

<th data-breakpoints="xs">Type</th>

<th data-breakpoints="xs sm md">Code</th>

<th data-breakpoints="xs sm md">Email Id</th>

<th data-breakpoints="xs sm md">Notify</th>

<th data-breakpoints="xs sm md">Internal</th>

<th data-breakpoints="xs sm md">Primary</th>

<th data-breakpoints="xs sm md">Last Movement Date</th>

<th data-breakpoints="xs sm md">Special</th>

<th data-breakpoints="xs sm md">Location</th>

<th data-breakpoints="xs sm md">Licence No.</th>

<th data-breakpoints="xs sm md">Expiry Date</th>

<th data-breakpoints="xs sm md">Active</th>

<th data-breakpoints="xs sm md">Notes</th>

<th data-breakpoints="xs sm md">Date Time</th>

<th data-breakpoints="xs sm md">Action</th>

<th data-breakpoints="xs sm md" class="text-center">Supplier Details</th>

</tr>

</thead>

<tbody>

<?php

$c=1;

$result=$this->User_Model->get_member_site();

foreach($result as $row)



{



?>

<tr>



<td><?php echo $row->tp_name; ?></td>

<td><?php $this->User_Model->select_tptype($row->tp_type);?></td>

<td>

<?php echo $row->code;?></td>

<td>

<?php echo $row->emailid;?></td>



<td>

<?php echo $row->notify;?></td>



<td>

<?php echo $row->internal;?></td>

<td>



<?php echo $row->tp_primary;?></td>

<td>

<?php



echo $originalDate = $row->lmd;



//if($row->date_time=='0000-00-00')

//{

	// $row->lmd=false;

	//continue;

//}

//$createDate = new DateTime($row->lmd);

//echo $date_times = $createDate->format('d-m-Y');

// $row['join_date'] = ;

//echo $nice_date = date('d-m-Y', strtotime($originalDate));



?>

</td>

<td>

<?php echo $row->special;?>

</td>

<td>

<?php echo $row->location;?>

</td>

<td>

<?php echo $row->licence_number;?>

</td>

<td>

<?php 







echo $expiry_date = $row->expiry_date;?>

</td>

<td>

<?php echo $row->active;?>

</td>

<td>

<?php echo $row->notes;?>

</td>

<td>

<?php 







$createDate = new DateTime($row->date_time);

$date_times = $createDate->format('d-m-Y');



echo $nice_date = date('d-m-Y', strtotime($date_times)); ?>

</td>

<td>

<div class="btn-group actnbox">

<a href="<?php echo base_url();?>User/update_trading_partner?uc=<?php  echo rtrim(base64_encode($row->memberId),'='); ?>" class="btn btn-warning" data-toggle="tooltip" title="update"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i></a>

<a href="<?php echo base_url()?>User/delete_trading_partner/<?php echo rtrim(base64_encode($row->memberId),'=');?>" class="btn btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>														

</div>

</td>

<th><div class="btn-group actnbox">

<button type="button" onclick="get_sup_id('<?php echo $row->memberId;?>')"; class="btn btn-warning" data-toggle="modal" data-target="#myModal"><i class="glyphicon fa fa-eye"></i></button></th></div>



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

function get_sup_id(data)

{

	var sup_id=data;



$('#sup-id').load('<?php echo base_url("User/getData")?>',{"sup_id":sup_id});	

}

</script>

<div class="container">

  

  <!-- Trigger the modal with a button -->

 



  <!-- Modal -->

  <div class="modal fade" id="myModal" role="dialog">

    <div class="modal-dialog">

    

      <!-- Modal content-->

      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Supplier Details</h4>

        </div>

        <div class="modal-body" id="sup-id">

          

        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        </div>

      </div>

      

    </div>

  </div>

  

</div>



<script>

jQuery(function($){

	$('.footable').footable(); 

});

// See:

// http://www.sitepoint.com/responsive-data-tables-comprehensive-list-solutions

</script>



</body>

</html>