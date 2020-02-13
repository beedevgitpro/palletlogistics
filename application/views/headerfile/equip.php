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
        <link href="https://coderthemes.com/zircos/layouts/material-design/assets/css/style.css" rel="stylesheet" type="text/css"/>
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
             <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="<?php echo base_url('assets/js/modernizr.min.js')?>"></script>
		
		<style>
.icon-bar {
  position: fixed;
  top: 27.5%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  z-index: 9;
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 6px 28px;
  transition: all 0.3s ease;
  color: white;
  font-size: 17px;
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

.linkedin {
  background: #007bb5;
  color: white;
}

.youtube {
  background: #bb0000;
  color: white;
}

ul.icon_line li {
    display: inline-block;
}
ul.icon_line {
    list-style: none;
    display: block;
    padding: 0;
}

tr.highlighted td {
    background: #6b6868;
	color: white;
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
                                    <h4 class="page-title">Pallet Logistics</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="<?php echo base_url('User/dashboard')?>">View Equipments</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('User/view_incentive_level')?>">View Equipments</a>
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
                                    <h4 class="m-t-0 header-title"><b></b></h4>
								
                                   

                                 
                        <div class="card">

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="m-b-30">
                                            <button id="addToTable" class="btn btn-success waves-effect waves-light">Add <i class="mdi mdi-plus-circle-outline"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="">
                                	<table class="table table-striped add-edit-table table-bordered dt-responsive nowrap" id="datatable-editable" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
											<th>Select</th>
                                            <th>Equipment</th>
											<th data-breakpoints="xs">Equipment Supplier Tp</th>
                                            <th data-breakpoints="xs sm md">Equipment Report Name</th>
											<th data-breakpoints="xs sm md">Equipment Code</th>
                                            <th data-breakpoints="xs sm md">Equipment Internal Code</th>
                                            <th data-breakpoints="xs sm md">Equipment Book Stock</th>
                                            <th data-breakpoints="xs sm md">Equipment Supplier Stock</th>
                                            <th data-breakpoints="xs sm md">Equipment Rent Unit Price</th>
                                            <th data-breakpoints="xs sm md">Active</th>
											<?php if($login_id==1) 
											{
												?>
                                            <th data-breakpoints="xs sm md">Action</th>
											<?php }?>
                                        </tr>
                                        </thead>
                                        <tbody>
										<?php
										$c=1;
										$i=0;
										$x=array();
								$result=$this->User_Model->get_equipments();
										foreach($result as $row)
										{
											$i++;
									
										$x[$i]=$i;
										?>
                                        <tr class="gradeX">
										<td> 
    <input type="checkbox" id="cha_id<?php echo$i?>" class="radio" value="<?php echo $row->metaid;?>" name="fooby[2][]" />
                                        </td>
  
<script>
$("#cha_id<?php echo$i?>").change(function() {
if(this.checked) {
	var id=1;
	var cha_id = document.getElementById("cha_id<?php echo$i?>").value;
	document.getElementById("myOutput").value = cha_id;
	document.getElementById("trid").value = <?php echo$i?>;
	var actives=cha_id;
$('#viewmembe<?php echo$i?>').load('<?php echo base_url("User/equipment_data")?>',{"actives":actives});
$('#viewmember<?php echo$i?>').load('<?php echo base_url("User/member_datass")?>',{"actives":actives});
}
else
{
	var cha_id = document.getElementById("cha_id<?php echo$i?>").value;
	document.getElementById("myOutput").value = '';
var id=0;
var actives=0;
$('#viewmembe<?php echo$i?>').load('<?php echo base_url("User/equipment_data")?>',{"actives":actives,"id":id});
$('#viewmember<?php echo$i?>').load('<?php echo base_url("User/member_datass")?>',{"cha_id":cha_id,"id":id});
}

});
</script>

                                            
                                            <td><?php echo $row->equipment; ?></td>
											<td>
											<?php
											 echo $row->equipment_supplier_tp;
											
											?>
											</td>
                                            <td><?php echo $row->equipment_report_name  ; ?></td>
											 <td><?php echo $row->equipment_code; ?></td>
                                             <td><?php echo $row->equipment_internal_code; ?></td>
                                            <td><?php echo $row->equipment_book_stock; ?></td>
                                             
                                              <td><?php echo $row->equipment_supplier_stock; ?></td>
                                               <td><?php echo $row->equipment_rent_unit_price; ?></td>
											   <?php  
											   if($row->active==1)
											   {
												   $cx="Active";
											   }
											   else
											   {
												   $cx="Inactive";
											   }
											   ?>
                                                 <td><?php echo $cx;?></td>
                                            
											<?php if($login_id==1) 
											{
												?>
												<td>
											<div class="btn-group actnbox">
											<a href="<?php echo base_url();?>User/update_equipments?uc=<?php  echo rtrim(base64_encode($row->metaid),'='); ?>" class="btn btn-warning" data-toggle="tooltip" title="update"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i></a>
											<a href="<?php echo base_url()?>User/delete_interview/<?php echo rtrim(base64_encode($row->metaid ),'=');?>" class="btn btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>																						
											</div>
											</td>
											<?php } ?>
										
                                            
                                        </tr>
										
                                        <?php
										$c++;
										
										}
										?>
                                        </tbody>
                                    </table>
									
									
									
                                     <div>
                                     <ul class="icon_line">
                                    <li><a href="#" class="facebook"    onclick="detailsone()">Issue/Dehire Fees</a></li>
                                    <li><a href="#" class="twitter"   onclick="detailstwo()";>Book Stock</a></li>
                                    <li><a href="#" class="google" onclick="detailsthree()";>Location Unit Price</a></li>
                                    </ul>
                                    </div>
                               
									</div>
									</div>
									</div>
									
									<input type="hidden" id="myOutput">
                                     <input type="hidden" id="trid">
                                     <div id="resultss"></div>
									 <?php  for($kl=1;$kl<=sizeof($x);$kl++)
									 { ?>
									  <div id="viewmembe<?php echo$kl?>"></div>
                                      <div id="viewmember<?php echo$kl?>"></div>
									 <?php } ?>
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
		<script src="https://coderthemes.com/zircos/layouts/material-design/assets/pages/jquery.datatables.editable.init.js"></script>
		<script src="https://coderthemes.com/zircos/layouts/plugins/tiny-editable/mindmup-editabletable.js"></script>
		<script src="https://coderthemes.com/zircos/layouts/plugins/datatables/responsive.bootstrap4.min.js"></script>
		<script src="https://coderthemes.com/zircos/layouts/plugins/tiny-editable/numeric-input-example.js"></script>
		<script src="https://coderthemes.com/zircos/layouts/material-design/assets/js/fastclick.js"></script>
		<script src="https://coderthemes.com/zircos/layouts/material-design/assets/js/bootstrap.bundle.min.js"></script>
		<script src="https://coderthemes.com/zircos/layouts/material-design/assets/js/detect.js"></script>
		<script src="https://coderthemes.com/zircos/layouts/material-design/assets/js/fastclick.js"></script>
		<script src="https://coderthemes.com/zircos/layouts/material-design/assets/js/jquery.blockUI.js"></script>
   <script>
			$('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
		</script>

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
		
		
<!--		<script>
// the selector will match all input controls of type :checkbox
// and attach a click event handler 
$("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var $box = $(this);
  if ($box.is(":checked")) {
    // the name of the box is retrieved using the .attr() method
    // as it is assumed and expected to be immutable
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});
</script> -->
		
	<script>
function detailsone()
{
	var cha_iddd = document.getElementById("myOutput").value;
	var tridd = document.getElementById("trid").value;
	var strss='viewmembe'+tridd;
	var strss2='viewmember'+tridd;
	var actives=cha_iddd;
$('#'+strss).load('<?php echo base_url("User/equipment_data")?>',{"actives":actives});
$('#'+strss2).load('<?php echo base_url("User/member_datass")?>',{"actives":actives});
}
function detailstwo()
{
	var cha_iddd = document.getElementById("myOutput").value;
	var tridd = document.getElementById("trid").value;
	var strss='viewmembe'+tridd;
	var strss2='viewmember'+tridd;
	var book_stock=cha_iddd;
	$('#'+strss).load('<?php echo base_url("User/equipment_data")?>',{"book_stock":book_stock});
    $('#'+strss2).load('<?php echo base_url("User/member_datass")?>',{"book_stock":book_stock});
}

function detailsthree()
{
	//var cha_iddd = document.getElementById("myOutput").value;
	//alert(cha_iddd);	
    var cha_iddd = document.getElementById("myOutput").value;
	var tridd = document.getElementById("trid").value;
	var strss='viewmembe'+tridd;
	var strss2='viewmember'+tridd;
	var unitprice=cha_iddd;
	$('#'+strss).load('<?php echo base_url("User/equipment_data")?>',{"unitprice":unitprice});
    $('#'+strss2).load('<?php echo base_url("User/member_datass")?>',{"unitprice":unitprice});
}
</script>
<script>
$('#nodatatable-buttons tr').click(function(e) {
    $('#nodatatable-buttons tr').removeClass('highlighted');
    $(this).addClass('highlighted');
});
</script>
<script>
const markup = `
 <div class="col-md-3">
<div class="form-group clearfix">
<select name="special" class="required form-control">
	 <option value="">Fee Code</option>
	 <?php
	 $result=$this->User_Model->fetch_trading_partner_supply();
foreach($result as $row)

{
echo"<option value=''></option>";
}
?>
	 </select>  
</div>
</div>
`;
</script>
<script>
const markupuu = `
 <div class="col-md-3">
<div class="form-group clearfix">
<select name="special" class="required form-control">
	
	 <?php
	 $result=$this->User_Model->fetch_trading_partner_supply();

foreach($result as $row)

{
echo"<option value='$row->type_id'>$row->supplier_name</option>";
}
?>
	 </select>  
</div>
</div>
`;
</script>

<script>
const thirdd = `
 <div class="col-md-2">
<div class="form-group clearfix">
<input type="text" class="form-control" name="location" placeholder="Issue Fee"> 
</div>
</div>
`;

</script>
<script>
const fourthss = `
 <div class="col-md-2">
<div class="form-group clearfix">
<select name="special" class="required form-control">
	 <option value="">Fee Code</option>
	 <?php
	 $result=$this->User_Model->fetch_trading_partner_supply();

foreach($result as $row)

{
echo"<option value=''></option>";
}
?>
	 </select> 
</div>
</div>
`;
</script>

<script>
const twos = `
 <div class="col-md-2">
<div class="form-group clearfix">
<input type="text" class="form-control" name="location" placeholder="Dehire Fee">
</div>
</div>
`;
</script>
 
 
 <script>
const unitpriceone = `
 <div class="col-md-6"><div class="form-group clearfix"><input type="text" class="form-control" name="location" placeholder="Issue Fee"> </div></div>
`;
</script>
 <script>
const unitpricetwo = `
 <div class="col-md-6"><div class="form-group clearfix"><input type="text" class="form-control" name="location" placeholder="Dehire Fee"></div></div>
`;
</script>
 
 
 
<script>
function add_fields() {
    document.getElementById('wrapperss').innerHTML += markupuu;
    document.getElementById('wrapperss').innerHTML += markup;
    document.getElementById('wrapperss').innerHTML += thirdd;
    document.getElementById('wrapperss').innerHTML += fourthss;
    document.getElementById('wrapperss').innerHTML += twos;
    
}
</script>

<script>
function add_fields_for_unit() {
    document.getElementById('wrapperss').innerHTML += unitpriceone;
    document.getElementById('wrapperss').innerHTML += unitpricetwo;
  
    
}
</script>
		
		
		
		
	<script>
		jQuery(function($){
			$('.footable').footable(); 
		});	
	</script>
		
    </body>
</html>