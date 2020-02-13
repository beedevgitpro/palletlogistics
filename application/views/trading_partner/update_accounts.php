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
  width: 20px; /*Desired width*/
  height: 20px; /*Desired height*/
}
</style>
		<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="https://bootswatch.com/flatly/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="https://www.jqueryscript.net/demo/Multi-column-Dropdown-Plugin-jQuery-Inputpicker/src/jquery.inputpicker.css" rel="stylesheet" type="text/css">

</head>





<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://www.jqueryscript.net/demo/Multi-column-Dropdown-Plugin-jQuery-Inputpicker/src/jquery.inputpicker.js"></script>
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
                                            <a href="<?php echo base_url('User/import_trading_partner_accounts');?>" class="btn btn-success">Import Csv File</a>
                                        </li>
                                       
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        
                        <!-- Wizard with Validation -->
						                <?php $metaid=$_REQUEST['uc'];
						                 $metaid=base64_decode($metaid);
						                 $datass=$this->User_Model->update_accounts($metaid);
						                     ?>

                        <div class="row">
							<div class="col-sm-12">
								<div class="card-box">
									<h4 class="m-t-0 header-title"><b>Add Trading Partner account</b></h4>
									
									<form id="wizard-validation-form" method="post" action="<?php echo base_url('User/update_tpaccounts')?>">
                                        <div>
                                           
                                    <input type="hidden" name="metaid" value="<?php echo $datass['metaid']; ?>">
                                    <input type="hidden" name="login_id" value="<?php echo $datass['login_id']; ?>">
                                            <h3>Accounts Details</h3>
                                             <section>
                                                <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Third Party Name*</label>
                                          
                                                   
                                                
                                                 
                                             <input class="form-control" name="third_party" id="demo-7" value="<?php echo $datass['tpa_third_party']; ?>" placeholder="Select Internal" <?php //echo $readonly;?>/>
                                                   
                                                </div>
                                                </div>
                                      
												
										
												
												
												
												<div class="col-md-6">
                                                 <div class="form-group clearfix">
                                                 <label class="control-label " for="last_name">Supplier TP</label>
                                                 <select name="supplier" id="state" class="form-control" >
                                                <option value=""hidden>--- Select Supplier ---</option>
                                               <?php
                                              $result=$this->User_Model->fetch_trading_partner_supply();
                                                foreach($result as $row)
                                                 {
													 if( $datass['tpa_supplier']==$row->type_id)
													 {
														 $x="selected";
													 }
													 else
													 {
														 $x=""; 
													 }
                                              ?>
                                                  <option value='<?php echo $row->type_id; ?>' <?php echo $x; ?>><?php echo $row->supplier_name; ?></option>
												  <?php


                                                 }
                                                 ?>
</select>

</div>
</div>
                                                    <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="last_name">Account Number</label>
                                                  
                                                        <input type="text" class="form-control"  name="account_number" value="<?php echo $datass['tpa_account_number']; ?>" placeholder="Account Number">
                                                   
                                                </div>
                                                </div>
												
												       <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="last_name">Profile</label>
                                                        <input type="text" class="form-control" id="demo-10" name="profile" value="<?php echo $datass['profile']; ?>" placeholder="Profile">
                                                </div>
                                                </div>
												
												       <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="last_name">Transit Days</label>
                                                  
                                                        <input type="text" class="form-control"  name="transit_days" value="<?php echo ''; ?>" placeholder="Transit Days">
                                                   
                                                </div>
                                                </div>
												
                                                    <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="last_name">Delay Rule</label>
                                                  
                                                        <input type="text" class="form-control"  name="delay_rule" value="<?php echo $datass['tpa_tn_delay_rule']; ?>" placeholder="Delay Rule">
                                                   
                                                </div>
                                                </div>
                                                <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="last_name">Allow Tf</label>
                                                  
                                                        <input type="text" class="form-control"  name="tpa_allow_tf" value="<?php echo $datass['tpa_allow_tf']; ?>" placeholder="Allow Tf">
                                                   
                                                </div>
                                                </div>
                                                      <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="last_name">Tf Delay Type</label>
                                                  
                                                        <input type="text" class="form-control"  name="tpa_tf_delay_type" value="<?php echo $datass['tpa_tf_delay_type']; ?>" placeholder="Tf Delay Type">
                                                   
                                                </div>
                                                </div>
												        <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="last_name">Credit Limit</label>
                                                  
                                                        <input type="text" class="form-control"  name="credit_limit" value="<?php ; ?>" placeholder="Credit Limit">
                                                   
                                                </div>
                                                </div>
												     <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="last_name">Allow TN</label>
                                                  
												
                                                        <input type="checkbox" class="form-control"  name="allow_tn"  value="1">
												  
											
                                                </div>
                                                </div>
												     <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="last_name">TN Delay Type</label>
                                                  
                                                           <select name="tn_delay_type" id="state" class="form-control">
                                                        <option value="">--- Select TN Delay Type ---</option>
                                                        <?php
                                                       // $result=$this->User_Model->get_state();
                                                      //  foreach($result as $row)
                                                      //  {
                                                        ?>
                                                        <option value="Not allowed (warning if not the same day)">Not allowed (warning if not the same day)</option>
                                                        <?php
                                                       // }
                                                        ?>
                                                        </select>
                                                   
                                                </div>
                                                </div>
                                                    <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="last_name">Tf Delay Days</label>
                                                  
                                                        <input type="text" class="form-control"  name="tf_delay_days" value="<?php echo $datass['tpa_tf_delay_days']; ?>" placeholder="Tf Delay Days">
                                                   
                                                </div>
                                                </div>
												<div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Tf Delay Rule</label>
                                                  
                                                       
														     <?php 
												  if($datass['tpa_tf_delay_rule']==1)
												  {
                                                        echo"<input type='checkbox' class='form-control'  name='tf_delay_rule'  value='1' checked>";
												  }
												  else
												  {
													  echo"<input type='checkbox' class='form-control'  name='tf_delay_rule'  value='1'>";
												  }
                                                   ?>
                                                   
                                                </div>
					                       	</div>

                                      
                                            </section>
                                          <h3></h3>
                                            <section>
                                                    <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Allow Exchange</label>
                                                  
                                                        <input type="checkbox" class="form-control" id="bank" name="allow_exchange"  placeholder="Allow Exchange">
                                                   
                                                </div>
                                                </div>
											<div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Redeem Exchange</label>
                                                  <?php
												  if($datass['tpa_tf_delay_rule']==1)
												  {
                                               echo"<input type='checkbox' class='form-control' id='bank' name='redeem_exchange'  value='1' checked>";
												  }
												  else {
											    echo"<input type='checkbox' class='form-control' id='bank' name='redeem_exchange'  value='1'>";
												  }
												?>
                                                   
                                                </div>
												</div>
												<div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Redeem Same</label>
                                                  
                                                       
														   <?php
												  if($datass['tpa_redeem_same']==1)
												  {
                                               echo"<input type='checkbox' class='form-control' id='bank'  name='redeem_same'  value='1' checked>";
												  }
												  else {
											    echo"<input type='checkbox' class='form-control' id='bank'  name='redeem_same'  value='1'>";
												  }
												?>
                                                   
                                                </div>
												</div>
												<div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Complete</label>
                                                  
                                                        
																		   <?php
												  if($datass['tpa_complete']==1)
												  {
                                               echo"<input type='checkbox' class='form-control'   name='tpa_complete'  value='1' checked>";
												  }
												  else {
											    echo"<input type='checkbox' class='form-control'   name='tpa_complete'  value='1'>";
												  }
												?>
                                                   
                                                </div>
												</div>

                                            <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Override Export Status</label>
                                                  
                                                       
														<?php
												if($datass['tpa_override_export_status']==1)
												  {
                                               echo"<input type='checkbox' class='form-control'   name='override_export_status'  value='1' checked>";
												  }
												  else {
											    echo"<input type='checkbox' class='form-control'   name='override_export_status'  value='1'>";
												  }
												?>
                                                   
                                                </div>
                                                </div>
                                                      <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Export Ons</label>
                                                  
                                                        
														
																	<?php
												if($datass['tpa_export_on']==1)
												  {
                                               echo"<input type='checkbox' class='form-control'   name='export_Ons'  value='1' checked>";
												  }
												  else {
											    echo"<input type='checkbox' class='form-control'   name='export_Ons'  value='1'>";
												  }
												?>
                                                   
                                                </div>
                                                </div>
                                                    <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Export Offs</label>
                                                  
                                                    
														
																				<?php
												if($datass['tpa_export_off']==1)
												  {
                                               echo"<input type='checkbox' class='form-control'   name='export_offs'  value='1' checked>";
												  }
												  else {
											    echo"<input type='checkbox' class='form-control'   name='export_offs'  value='1'>";
												  }
												?>
                                                   
                                                </div>
                                                </div>
                                                            <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="last_name">Docket Format</label>
                                                  
                                                        <input type="text" class="form-control"  name="docket_format" value="<?php echo $datass['tpa_docket_format']; ?>" placeholder="Docket Format">
                                                   
                                                </div>
                                                </div>
                                                        <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Con Note Required</label>
                                                  
                                                        
												<?php
												if($datass['tpa_con_note_required']==1)
												  {
                                               echo"<input type='checkbox' class='form-control'   name='con_note_required'  value='1' checked>";
												  }
												  else {
											    echo"<input type='checkbox' class='form-control'   name='con_note_required'  value='1'>";
												  }
												?>
                                   
                                                        </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Con Note Characters</label>
                                                  
                                                        <input type="text" class="form-control"  name="con_note_characters" value="<?php echo $datass['tpa_con_note_characters']; ?>" placeholder="Con Note Characters">
                                                   
                                                </div>
                                                </div>
                                                                    <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Con Note Numeric</label>
                                                  
                                                        
														
												<?php
												if($datass['tpa_con_note_numeric']==1)
												  {
                                               echo"<input type='checkbox' class='form-control'   name='con_note_numeric'  value='1' checked>";
												  }
												  else {
											    echo"<input type='checkbox' class='form-control'   name='con_note_numeric'  value='1'>";
												  }
												?>
                                                   
                                                </div>
                                                </div>
                                                           <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Con Note Description</label>
                                                  
                                                        <input type="text" class="form-control"  name="con_note_description" value="<?php echo $datass['tpa_con_note_decription']; ?>" placeholder="Con Note Description" >
                                                   
                                                </div>
                                                </div>
                                                <!-------------------------------->
                                                    <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Reference Required</label>
                                                  
                                                        
                                                   	<?php
												if($datass['tpa_reference_required']==1)
												  {
                                               echo"<input type='checkbox' class='form-control'   name='reference_required'  value='1' checked>";
												  }
												  else {
											    echo"<input type='checkbox' class='form-control'   name='reference_required'  value='1'>";
												  }
												?>
                                                </div>
                                                </div>
                                                                      <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Reference Characters</label>
                                                  
                                                        <input type="text" class="form-control"  name="reference_characters" value="<?php echo $datass['tpa_reference_characters']; ?>" placeholder="Reference Characters">
                                                   
                                                </div>
                                                </div>
                                                                      <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Reference Numeric</label>
                                                  
                                                       
                                                          	<?php
												if($datass['tpa_reference_numeric']==1)
												  {
                                               echo"<input type='checkbox' class='form-control'   name='reference_numeric'  value='1' checked>";
												  }
												  else {
											    echo"<input type='checkbox' class='form-control'   name='reference_numeric'  value='1'>";
												  }
												?>
                                                </div>
                                                </div>
                                                    <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Reference Description</label>
                                                  
                                                   <input type="text" class="form-control"  name="reference_description" value="<?php echo $datass['tpa_reference_description']; ?>" placeholder="Reference Description" >
                                                   
                                                </div>
                                                </div>
                                                  <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Reminder</label>
                                                  
                                                 
														            	<?php
												if($datass['tpa_reminder']==1)
												  {
                                               echo"<input type='checkbox' class='form-control'   name='reminder'  value='1' checked>";
												  }
												  else {
											    echo"<input type='checkbox' class='form-control'   name='reminder'  value='1'>";
												  }
												?>
                                                   
                                                </div>

                                                </div>

                                                <div class="col-md-12">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="address">Notes *</label>
                                                  
                                                       <textarea name="note" class="form-control"><?php echo $datass['tpa_notes']; ?>
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
                                            </section>
                                        </div>
										
                                    </form>
								</div>
							</div>
						</div>
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
$('#demo-7').inputpicker({
    data:[
	<?php
	$i=1;
	$result=$this->User_Model->fetch_trading_partner();
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
$('#demo-9').inputpicker({
    data:[
	<?php
	$i=1;
	$result=$this->User_Model->get_profile();
	foreach($result as $row)
	{
		$profile_name=$row->profile_name;
		
		$remove[] = "'";
        $remove[] = '"';
        $remove[] = "-"; // just as another example
        //$tp_name = str_replace( $remove, "", $ii );
		
		$allow_exchange=$row->allow_exchange;
		$allow_tn=$row->allow_tn;
		$allow_tf=$row->allow_tf;
		
        echo"{value:'$memberId',profile:'$profile_name',allow_exchange:'$allow_exchange', allow_tn: '$allow_tn',allow_tf:'$allow_tf'},"; 
	$i++; } ?>
       
    ],
    fields:[
        {name:'value',text:'TP Id'},
        {name:'profile',text:'Profile'},
		{name:'allow_exchange',text:'Allow Exchange'},
        {name:'allow_tn',text:'Allow TN'},
		{name:'allow_tf',text:'Allow TF'},
    ],
    headShow: true,
    fieldText : 'text',
    fieldValue: 'value',
	filterOpen: true
    });
</script>			
				<script>
$('#demo-10').inputpicker({
  data:[
	<?php
	$i=1;
	$result=$this->User_Model->get_profile();
	foreach($result as $row)
	{
		$tp_type=$row->transit_days;
		$ii=$row->profile_name;
		$remove[] = "'";
        $remove[] = '"';
        $remove[] = "-"; // just as another example
        $tp_name = str_replace( $remove, "", $ii );
		
		$code=$row->allow_exchange;
		$tp_primary=$row->allow_tn;
		$memberId=$row->metaid;
		
        echo"{value:'$memberId',text:'$tp_name',type:'$tp_type', description: '$code',primary:'$tp_primary'},"; 
	$i++; } ?>
       
    ],
    fields:[
        {name:'value',text:'TP Id'},
        {name:'text',text:'Profile'},
		{name:'type',text:'Allow Exchange'},
        {name:'description',text:'Allow TN'},
		{name:'primary',text:'Allow  TF'},
    ],
    headShow: true,
    fieldText : 'text',
    fieldValue: 'value',
	filterOpen: true
    });
</script>					
		
    </body>
</html>