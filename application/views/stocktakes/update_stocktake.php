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
                                        <?php $metaid=$_REQUEST['uc'];
						                 $metaid=base64_decode($metaid);
						                 $datass=$this->User_Model->update_stocktake($metaid);
						                     ?>
											

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Pallet Logistics</h4><?php echo $this->session->flashdata('message'); ?>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            
                                            <a href="<?php echo base_url('User/import_stocktakes?code=stocktake');?>" class="btn btn-success">Import Csv File</a>
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

                                            <h4 class="header-title m-t-0">Add Stocktakes</h4>      
											<?php if($this->session->flashdata('msg')): ?>
                                            <div class="alert alert-success alert-dismissible fade in" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                               </button>
                                                <span>Yay!</span>&nbsp;
                                                <span><?php 
                                              echo $this->session->flashdata('msg'); 
                                            ?>  </span>
                                            </div>
                                            <?php endif; ?>
                                           
                                            <div class="p-20">
                                                <form id="wizard-validation-form" method="post" action="<?php echo base_url('User/updated_stocktake')?>">
                                               <div>
                                             <section>
											 <input type="hidden" name="metaid" value="<?php echo $datass['metaid']; ?>">
											 <input type="hidden" name="login_id" value="<?php echo $datass['login_id']; ?>">
                                              <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Date *</label>
                                                  
                                                        <input type="date" class="required form-control" id="doj" name="stockdate" value="<?php echo $datass['date']; ?>" placeholder="Last Movement Date" aria-required="true">

                                                   
                                                </div>
                                                </div>
                                                
                                                <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="last_name">Trading Partner</label>
                                                  
                                                           <select name="trading_partner" class="required form-control valid" id="tp_id" onchange="myfunction(this.value)" aria-required="true" aria-invalid="false">
                                                 <option>--- Select Trading Partner---</option>
                                                 <?php $result=$this->User_Model->fetch_trading_partner_stocktake();
                                             foreach ($result as $row) {
                                                      ?>

                                                       <option value="<?php echo $row->memberId;?>"><?php echo $row->tp_name; ?></option>
                                                       <?php
                                                        }
                                                 ?>
                                                
                                                
                                                 </select>
                                                   
                                                </div>
                                                </div>
												    <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Type</label>
                                                  <div id="type"></div>
                                                       
                                                   
                                                </div>
                                                </div>
                                                <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Equipment</label>
                                                  
                                                        <input type="text" class="required form-control" id="demo-5" name="equipment"  value="<?php echo $datass['equipment']; ?>" placeholder="Equipment" onmouseout="myFunctione()">
														


                                                   
                                                </div>
                                                </div>
                                                <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Book Stock</label>
                                                  
                                                         <div id="book_stock" ></div>
                                                   
                                                </div>
                                                </div>
                                                     <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Physical Stock</label>
                                                  
                                                        <input type="text" class="required form-control"  name="physical_stock" value="<?php echo $datass['physical_stock']; ?>" onkeyup="myfunctiondd(this.value)" placeholder="Physical Stock">
                                                   
                                                </div>
                                                </div>
                                                 <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Shrinkage</label>
                                                  
                                                        <input type="text" class="required form-control" id="sharink" value="<?php echo $datass['shrinkage']; ?>" name="shrinkage" placeholder="Shrinkage">
                                                   
                                                </div>
                                                </div>
                                                       <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Reported Variance</label>
                                                  
                                                        <input type="text" class="required form-control" value="<?php echo $datass['reported_variance']; ?>"  name="reported_variance" placeholder="Reported Variance">
                                                   
                                                </div>
                                                </div>
                                                       <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Receiving TP</label>
                                                  
                                                        <input class="form-control" name="receiving_tp" id="demo-6"  value="<?php echo $datass['receiving_tp']; ?>" placeholder="Select Equipment" />
                                                   
                                                </div>
                                                </div>
                                                       <div class="col-md-12">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Notes</label>
                                                  
                                                        <input type="text" class="required form-control" value="<?php echo $datass['notes']; ?>" name="note" placeholder="Notes">
                                                   
                                                </div>
                                                </div>
                                 
                                            </section>
                                          <!-- <h3>Bank Detail</h3>
                                            <section>
                                            <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Bank Name *</label>
                                                  
                                                        <input type="text" class="required form-control" id="bank" name="bank" placeholder="Bank Name">
                                                   
                                                </div>
                                                </div>
                                                <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Branch Name *</label>
                                                  
                                                        <input type="text" class="required form-control" id="branch" name="branch" placeholder="Branch Name">
                                                   
                                                </div>
                                                </div>
                                                <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">IFSC Code *</label>
                                                  
                                                        <input type="text" class="required form-control" id="ifsc" name="ifsc" placeholder="IFSC Code">
                                                   
                                                </div>
                                                </div>-->
                                        
                                            </section>
                                        </div>

                                                <div class="row">
                                       
                                        <div class="col-md-12">
										<div class="col-md-6"></div>
                                        <input type="submit" name="submit" value="Submit" class="btn btn-success">
                                        </div>
                                        
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
function myfunction(data)
{	
var data;
	
	alert(data);

		$('#type').load('<?php echo base_url("User/getData")?>',{"type":data});
}
</script>
<script>
function myfunctiondd(data)
{	
var data;
var results = +document.getElementById("book_stockss").value;
var x = results - data;

document.getElementById("sharink").value = x;
	alert(data);

		
}
</script>

        <script>
            var resizefunc = [];
        </script>
       
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- jQuery  -->
        
       
        <script src="<?php echo base_url('assets/assets/js/detect.js')?>"></script>
        <script src="<?php echo base_url('assets/js/fastclick.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.blockUI.js')?>"></script>
        <script src="<?php echo base_url('assets/js/waves.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.slimscroll.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js')?>"></script>
        <script src="<?php echo base_url('assets/plugins2/switchery/switchery.min.js')?>"></script>

        <script type="text/javascript" src="<?php echo base_url('assets/plugins2/parsleyjs/parsley.min.js')?>"></script>

        <!-- App js -->
        <script src="<?php echo base_url('assets/js/jquery.core.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.app.js')?>"></script>
<script>
function myFunctione() {
	var results = +document.getElementById("demo-5").value;
	var tp_id = +document.getElementById("tp_id").value;
	
    $('#book_stock').load('<?php echo base_url("User/getData")?>',{"book_stock":results,"tp_id":tp_id});
}
</script>

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


$('#demo-5').inputpicker({
    data:[
	<?php
	$i=1;
	$result=$this->User_Model->fetch_equipment();;
	foreach($result as $row)
	{
		$ii=$row->equipment;
		$remove[] = "'";
        $remove[] = '"';
        $remove[] = "-"; // just as another example

        $tp_name = str_replace( $remove, "", $ii );
		$supplier=$row->equipment_supplier_tp;
		$book_stock=$row->equipment_book_stock;
		$lost_stock=$row->equipment_lost_stock;
		$memberId=$row->metaid;
		
        echo"{value:'$memberId',text:'$tp_name',type:'$supplier', description: '$book_stock',primary:'$lost_stock'},"; 
	$i++; } ?>
       
    ],
    fields:[
        {name:'value',text:'TP Id'},
        {name:'text',text:'Equipment'},
		{name:'type',text:'Supplier'},
        {name:'description',text:'Book Stock'},
		{name:'primary',text:'Lost Stock'},
    ],
    headShow: true,
    fieldText : 'text',
    fieldValue: 'value',
	filterOpen: true
    });
</script>





<script>


$('#demo-6').inputpicker({
    data:[
	<?php
	$i=1;
	$result=$this->User_Model->fetch_trading_partner_subbbb();
	foreach($result as $row)
	{
		$ii=$row->tp_name;
		$memberId=$row->memberId;
		$Supplier='Supplier';
		$remove[] = "'";
        $remove[] = '"';
        $remove[] = "-"; // just as another example
        $tp_type=$row->tp_type;
        $tp_name = str_replace( $remove, "", $ii );
		$res=$this->User_Model->fetch_trading_partner_supplys($memberId);
	    $accounts=$this->User_Model->get_tp_accounts($memberId);
		$ac=$accounts['tpa_account_number'];
	    $sup_tp_name=$res['tp_name'];
			
		
	
		
        echo"{value:'$memberId',text:'$tp_name',type:'$sup_tp_name', description: '$ac',primary:'$tp_type'},"; 
	$i++; } ?>
       
    ],
    fields:[
        {name:'value',text:'TP Id'},
        {name:'text',text:'Trading Partner'},
		{name:'type',text:'Supplier'},
        {name:'description',text:'Account Number'},
		{name:'primary',text:'Lost Stock'},
    ],
    headShow: true,
    fieldText : 'text',
    fieldValue: 'value',
	filterOpen: true
    });
</script>

<script>

function myFunctioneee()
{

alert('data');

}

</script>



    </body>
</html>