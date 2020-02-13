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
  width: 30px; /*Desired width*/
  height: 30px; /*Desired height*/
}
	</style>	
		
		<!-------------------------------->
		<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="https://bootswatch.com/flatly/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="https://www.jqueryscript.net/demo/Multi-column-Dropdown-Plugin-jQuery-Inputpicker/src/jquery.inputpicker.css" rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://www.jqueryscript.net/demo/Multi-column-Dropdown-Plugin-jQuery-Inputpicker/src/jquery.inputpicker.js"></script>

</head>






		
		
	
		
		
		
		
		
		
		
		
		
		
		
		
		

    </head>
<script>

function getState(val)
	{
		var name=val.value;
		alert(name);
		$('#bp').load('<?php echo base_url("User/getData")?>',{"state":name});
	}
function getCity(val)
	{
		var name=val.value;
		alert(name);
		$('#city').load('<?php echo base_url("User/getData")?>',{"city":name});
	}
</script>

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
                                            <a href="<?php echo base_url('User/import_csv_for_trading_partner');?>" class="btn btn-success">Import Csv File</a>
                                        </li>
                                       
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        
                        <!-- Wizard with Validation -->
						               <?php $metaid=$_REQUEST['uc'];
						                 $metaid=base64_decode($metaid);
						                 $datass=$this->User_Model->update_trading_partner($metaid);
						                     ?>

                        <div class="row">
							<div class="col-sm-12">
								<div class="card-box">
									<h4 class="m-t-0 header-title"><b>Add Trading Partner</b></h4>
									
									<form id="wizard-validation-form" method="post" action="<?php echo base_url('User/update_member')?>">
                                        <div>
                                          
                                            <h3>Trading Partner Detail</h3>
                                             <section>
                                              <div class="col-md-4">
                                                <div class="form-group clearfix">
												<input type="hidden" name="metaid" value="<?php echo $datass['memberId'];?>">
												<input type="hidden" name="login_id" value="<?php echo $datass['login_id']?>">
												<input type="hidden" name="member_code" value="<?php echo $datass['member_code']?>">
                                                    <label class="control-label " for="first_name">Name *</label>
                                                  
                                                        <input type="text" class="required form-control"  name="tp_name" value="<?php echo $datass['tp_name']; ?>" placeholder="Trading Partner Name">
                                                   
                                                </div>
												</div>
												
															<div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="last_name">TP Type</label>
                                                  
                                                       
										 <select name="tp_type" class="required form-control valid" aria-required="true" aria-invalid="false">
                                                 <option>--- Select TP Type---</option>
                                                 <?php $result=$this->User_Model->fetch_trading_partner_type();
                                             foreach ($result as $row) {
												 if($datass['tp_type']==$row->type_id)
												 {
                                           echo"<option value='$row->type_id' selected>$row->tp_type</option>";
												 }
												 else
												 {
											echo"<option value='$row->type_id'>$row->tp_type</option>"; 
												 }
                                                       
                                                        }
                                                 ?>
                                                
                                                
                                                 </select>
                                                   
                                                </div>
												</div>
												        <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="mobile">TP Code</label>
                                                  
                                                        <input type="text" class="required form-control" name="code" value="<?php echo $datass['code']; ?>" placeholder="TP Code">
                                                   
                                                </div>
                                                </div>
													        <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="mobile">Their Code</label>
                                                  <?php 
												  if($datass['their_code']==1)
												  {
                                                        echo"<input type='checkbox' class='form-control' name='their_code' value='1' checked>";
												  }
												  else {
							
													  echo"<input type='checkbox' class='form-control' name='their_code' value='1'>";
												  }
                                                      ?>
                                                    </div>
                                                </div>
												<div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Email Id*</label>
                                                  
                                                        <input type="email" class="required form-control"  name="emailid" value="<?php echo $datass['emailid']; ?>" placeholder="Trading Partner Email Id">
                                                   
                                                </div>
												</div>
                                                    <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                 <label class="control-label " for="gender">Notify *</label>
                                              <input type="checkbox" class="" name="notify" >
                                                </div>
                                                </div>
									<br><br><br><br><br><br><br><br><br><br>
										<div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Phone Number</label>
                                                  
                                                        <input type="number" class="required form-control"  name="phone_number" value="<?php echo $datass['phone_number']; ?>" placeholder="Phone Number">
                                                   
                                                </div>
												</div>
													<div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Fax</label>
                      
                                                    <input type="number" class="required form-control"  name="fax" value="<?php echo $datass['fax']; ?>" placeholder="Fax">
                                                   
                                                </div>
												</div>
														<div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Address1</label>
                      
                                                    <input type="text" class="required form-control"  name="address1" value="<?php echo $datass['address1']; ?>" placeholder="Address1">
                                                   
                                                </div>
												</div>
														<div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Address2</label>
                      
                                                    <input type="text" class="required form-control" name="address2" value="<?php echo $datass['address2']; ?>" placeholder="Address2">
                                                   
                                                </div>
												</div>
												<div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Country Name</label>
                      
                                                 <select name="country" class="required form-control" onChange="getState(this);">
                                                <option value=''>Select Country</option>
												 <?php  $resultss=$this->User_Model->get_Country(); 
												 foreach($resultss as $row)
												 {
												 ?>
                                                 <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
												 <?php } ?>
                                                 </select> 
                                                   
                                                </div>
												</div>
												<div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="father">State Name</label>
                      
                                                 <select name="state" id="bp" class="required form-control demoInputBox" onChange="getCity(this);">
                                         
                                            <option value="">Select State</option>
                                                   
                                                 </select> 
                                                   
                                                </div>
												</div>
													<div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="father">City Name</label>
                      
                                                 <select name="city" id="city" class="required form-control demoInputBox" ">
                                         
                                            <option value="">Select City</option>
                                                   
                                                 </select> 
                                                   
                                                </div>
												</div>
														<div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="email">Postcode/ZIP</label>	
                                           <input type="number" class="form-control" name="zip"  value="<?php echo $datass['zip']; ?>" placeholder="Postcode/ZIP" />
                                                   
                                                </div>
												</div>
															<div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="email">Report Name</label>	
                                           <input type="text" class="form-control" name="report"  value="<?php echo $datass['report']; ?>" placeholder="Report Name" />
                                                   
                                                </div>
												</div>
												<div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="email">Internal</label>
                                                  
       
														
                                           <input class="form-control" name="internal" id="demo-5"  placeholder="Select Internal" />
                                                   
                                                </div>
												</div>
												
												<div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="mobile">Primary*</label>
                                                  
                                                       <input class="form-control" name="primary" id="demo-6" value="<?php echo $datass['tp_primary']; ?>" placeholder="Select Internal" />
                                                   
                                                </div>
												</div>
												
										      <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="doj">Last Movement Date *</label>
                                                  
                                                        <input type="date" class="required form-control" id="doj" name="lmd" value="<?php echo $datass['lmd']; ?>" placeholder="Last Movement Date">
                                                   
                                                </div>
                                                </div>
                                                <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="mobile">Special TP</label>
                                                  
                                                        
												<select name="special" class="required form-control">
                                                <option value=''>Select Special TP</option>
												 <?php  $resultss=$this->User_Model->trading_partner_special(); 
												 foreach($resultss as $row)
												 {
												if($datass['special']==$row->memberId)
												{
                                                echo"<option value='$row->memberId' selected>$row->tp_name</option>";
												 }
                                                else {
	                                            echo"<option value='$row->memberId'>$row->tp_name</option>";
												 } }	?>
                                                 </select> 
                                                   
                                                </div>
                                                </div>
                                                           <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="mobile">Licence Number</label>
                                                  
                                                        <input type="text" class="required form-control"  name="licence_number" value="<?php echo $datass['licence_number']; ?>" placeholder="Licence Number">
                                                   
                                                </div>
                                                </div>

												
										      <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="doj">Expiry Date*</label>
                                                  
                                                        <input type="date" class="required form-control" id="doj" name="expiry_date" value="<?php echo $datass['expiry_date']; ?>" placeholder="Expiry Date">
                                                   
                                                </div>
                                                </div>
										  
                                                     <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="mobile">Location</label>
                                                  
                                                        <input type="text" class="required form-control" name="location" value="<?php echo $datass['location']; ?>" placeholder="location">
                                                   
                                                </div>
                                                </div>
												
									         <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="mobile">Location ID</label>
                                                  
                                                        <input type="text" class="required form-control" name="location_id" value="<?php echo $datass['location_id']; ?>" placeholder="Location ID">
                                                   
                                                </div>
                                                </div>
									
												<div class="col-md-12">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="address">Notes</label>
                           
                                                  <textarea name="notes" class="required form-control"><?php echo $datass['notes'];?>
											     </textarea>
                                                </div>
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
		
		<script>


$('#demo-5').inputpicker({
    data:[
	<?php
	$i=1;
	$result=$this->User_Model->fetch_trading_partner_internal();
	foreach($result as $row)
	{
		$ii=$row->tp_name;
		$remove[] = "'";
        $remove[] = '"';
        $remove[] = "-"; // just as another example

        $tp_name = str_replace( $remove, "", $ii );
		$tp_type=$row->tp_type;
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


$('#demo-6').inputpicker({
    data:[
	<?php
	$i=1;
	$result=$this->User_Model->fetch_trading_partner_primary();
	foreach($result as $row)
	{
		$ii=$row->tp_name;
		$remove[] = "'";
$remove[] = '"';
$remove[] = "-"; // just as another example

$tp_name = str_replace( $remove, "", $ii );
		$tp_type=$row->tp_type;
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
    </body>
</html>