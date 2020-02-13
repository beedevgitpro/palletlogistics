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
	<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="https://bootswatch.com/flatly/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="https://www.jqueryscript.net/demo/Multi-column-Dropdown-Plugin-jQuery-Inputpicker/src/jquery.inputpicker.css" rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://www.jqueryscript.net/demo/Multi-column-Dropdown-Plugin-jQuery-Inputpicker/src/jquery.inputpicker.js"></script>

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
                                            <a href="<?php echo base_url('User/import_equipment_csv');?>" class="btn btn-success">Import Csv File</a>
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

                                            <h4 class="header-title m-t-0">Update Equipment
</h4>
                                        <?php $metaid=$_REQUEST['uc'];
						                 echo $metaid=base64_decode($metaid);
						                 $datass=$this->User_Model->update_equipment($metaid);
						                     ?>
                                           
                                            <div class="p-20">
                                                <form id="wizard-validation-form" method="post" action="<?php echo base_url('User/update_insert_equipment')?>">
                                        <div>
                                    
                                           <input type="hidden" name="meta_id" value="<?php echo $datass['metaid']; ?>">
										   <input type="hidden" name="login_id" value="<?php echo $datass['login_id']; ?>">
                                             <section>
                                              <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Equipment Name *</label>
                                                  
                                                        <input type="text" class="form-control" id="first_name" value="<?php echo $datass['equipment']; ?>" name="equipment" placeholder="Equipment Name">
                                                   
                                                </div>
                                                </div>
                                                
                                                
                                                  
                                                 
                                        	<div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="last_name">Supplier</label>
                                                  
                                                 
												<input class="form-control" name="equipment_supplier_tp" id="demo-8"  value="<?php echo $datass['equipment_supplier_tp']; ?>" placeholder="supplier" />
                                                   
                                                </div>
												</div>
                                                <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Report Name</label>
                                                  
                                                        <input type="text" class="form-control"  value="<?php echo $datass['equipment_report_name']; ?>" name="equipment_report_name" placeholder="Report Name">
                                                   
                                                </div>
                                                </div>
                                                <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Code</label>
                                                  
                                                        <input type="text" class="form-control" value="<?php echo $datass['equipment_code']; ?>"  name="equipment_code" placeholder="Code">
                                                   
                                                </div>
                                                </div>
                                                     <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Internal Code</label>
                                                  
                                                        <input type="text" class="form-control" value="<?php echo $datass['equipment_internal_code']; ?>" name="equipment_internal_code" placeholder="Internal Code">
                                                   
                                                </div>
                                                </div>
                                                 <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Book Stock</label>
                                                  
                                                        <input type="text" class="form-control" value="<?php echo $datass['equipment_book_stock']; ?>" name="equipment_book_stock" placeholder="Book Stock">
                                                   
                                                </div>
                                                </div>
                                                       <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Lost Stock</label>
                                                  
                                                        <input type="text" class="form-control" value="<?php echo $datass['equipment_lost_stock']; ?>"  name="equipment_lost_stock" placeholder="Lost Stock">
                                                   
                                                </div>
                                                </div>
                                                       <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Supplier Stock</label>
                                                  
                                                        <input type="text" class="form-control" value="<?php echo $datass['equipment_supplier_stock']; ?>" name="equipment_supplier_stock" placeholder="Supplier Stock">
                                                   
                                                </div>
                                                </div>
                                                       <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Rent Unit Price</label>
                                                  
                                                        <input type="text" class="form-control" value="<?php echo $datass['equipment_rent_unit_price']; ?>" name="equipment_rent_unit_price" placeholder="Rent Unit Price">
                                                   
                                                </div>
                                                </div>
												        <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Base Quantity Off</label>
                                                  
                                                        <input type="number" class="form-control" id="base_quantity" onkeyup="myFunction(this.value)" value="<?php echo $datass['base_quantity_off']; ?>" name="base_quantity_off" placeholder="Base Quantity Off">
                                                   
                                                </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Unit Movement Fee</label>
                                                  
                                                        <input type="number" class="form-control" id="unit_movement_fee" name="unit_movement_fee" value="<?php echo $datass['unit_movement_fee']; ?>" onkeyup="myFunction(this.value)" placeholder="Unit Movement Fee">
                                                   
                                                </div>
                                                </div>
												     <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Movement Fee</label>
                                                  
                                                        <input type="number" class="form-control" id="movement_fee" name="movement_fee" value="<?php echo $datass['movement_fee']; ?>" placeholder="Movement Fee">
                                                   
                                                </div>
                                                </div>
                                          <div class="col-md-1">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="address">Issue Duplicates</label>
                                                  <?php if($datass['issue_duplicates']==1)
												  {
                                                       echo"<input type='checkbox' name='issue_duplicates' class='form-control' value='1' checked>";
												  } else
												  {
													  echo"<input type='checkbox' name='issue_duplicates' class='form-control' value='1'>";
												  }
                                                       ?>
                                                </div>
                                                </div>
                                       
                                                <div class="col-md-1">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="address">Active</label>
                                                     <?php if($datass['active']==1)
												  {
                                                       echo"<input type='checkbox' name='active' class='form-control' value='1' checked>";
												  } else
												  {
													  echo"<input type='checkbox' name='active' class='form-control' value='1'>";
												  }
                                                       ?>
                                                      
                                                       
                                                </div>
                                                </div>
                                      
                                            </section>
 
                                        
                                            </section><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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

        <!-- jQuery  -->
        
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
		
				<script>
$('#demo-8').inputpicker({
    data:[
	<?php
	$i=1;
	$result=$this->User_Model->fetch_trading_partner_supply();
	foreach($result as $row)
	{
		$tp_type=$row->tp_type;
		$ii=$row->tp_name;
		$remove[] = "'";
        $remove[] = '"';
        $remove[] = "-"; // just as another example
        $tp_name = str_replace( $remove, "", $ii );
		
		$code=$row->code;
		$tp_primary=$row->tp_primary;
		$memberId=$row->memberId;
		
        echo"{value:'$memberId',text:'$tp_name',type:'$tp_type', description: '$code',primary:'$tp_primary'},"; 
	$i++; } ?>
       
    ],
    fields:[
        {name:'value',text:'TP Id'},
        {name:'text',text:'Trading Partner'},
		{name:'type',text:'Type'},
        {name:'description',text:'Code'},
		{name:'primary',text:'Primary TP'},
    ],
    headShow: true,
    fieldText : 'text',
    fieldValue: 'value',
	filterOpen: true
    });
</script>


<script>
function myFunction(data)
{
var data;

var base_quantity = +document.getElementById("base_quantity").value;
var unit_movement_fee = +document.getElementById("unit_movement_fee").value;

var x = base_quantity*unit_movement_fee;

document.getElementById("movement_fee").value = x;
}
</script>
		
    </body>
</html>