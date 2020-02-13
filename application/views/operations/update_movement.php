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


<link href="https://www.jqueryscript.net/demo/Multi-column-Dropdown-Plugin-jQuery-Inputpicker/src/jquery.inputpicker.css" rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://www.jqueryscript.net/demo/Multi-column-Dropdown-Plugin-jQuery-Inputpicker/src/jquery.inputpicker.js"></script>

        <script src="<?php echo base_url('assets/js/modernizr.min.js')?>"></script>

<style type="text/css">
    input[type="checkbox"] {
    width: 30px;
    height: 30px;
}
div#tp_ac_modal .modal-dialog {
    width: 40%;
}
</style>
    </head>
	<div id="modaldiv"></div>
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
                                            <a href="<?php echo base_url('User/imports_csv_movements');?>" class="btn btn-success">Import Csv File</a>
                                        </li>
                                        <li>
                                        
                                        </li>
                                        
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->
                                       <?php $metaid=$_REQUEST['uc'];
						                 $metaid=base64_decode($metaid);
						                 $datass=$this->User_Model->update_movement($metaid);
										 
						                     ?>

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="card-box">

                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12 col-md-12">

                                            <h4 class="header-title m-t-0">Update Movements
                                            </h4>
                                           
                                            <div class="p-20">
                                                <form id="wizard-validation-form" method="post" action="<?php echo base_url('User/updated_movements')?>">
                                        <div>
                                          
                                           
                                             <section>
											 <input type="hidden" name="metaid" value="<?php echo $datass['metaid']; ?>">
											 <input type="hidden" name="login_id" value="<?php echo $datass['login_id']; ?>">
                                              <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="doj">Date *</label>
                                                  
                                                        <input type="date" class="required form-control" value="<?php echo $datass['movements_date']; ?>" id="doj" name="mov_date" placeholder="Date">
                                                   
                                                </div>
                                                </div>
                                                
                                                <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Equipment*</label>
                                                  
                                          <input class="form-control" name="equipment" id="demo-5" value="<?php echo $datass['equipment']; ?>"  placeholder="Select Equipment" />
                                                   
                                                </div>
                                                </div>
                                                 <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Sending Tp*</label>
													  <select name="sending_tp" id="sendind_tp" class="required form-control" onchange="myFunctioness(this.value),myFunctionesssssss(this.value)">
                                                  <?php 
												  	$result=$this->User_Model->fetch_trading_partner_sender();
	                                                   foreach($result as $row)
	                                                   {
                                                       if($datass['sending_tp']==$row->memberId)
													   {
													 echo"<option value='$row->memberId' selected>$row->tp_name</option>";
													   }
													 else {
												   echo"<option value='$row->memberId'>$row->tp_name</option>"; 
													   }
													   } ?>
														</select>
                                  
                                                </div>
                                                </div>
												      <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Sender</label>
                                                  
                                                    <select name="sender_name" id="senderss" class="required form-control valid" aria-required="true" aria-invalid="false" hidden>
                                                 <option>--- Select Sender---</option>
                                                 <?php $result=$this->User_Model->get_sender_reciever();
                                                    foreach ($result as $row) {
												       if($datass['sender_name']==$row->metaid)
													   {
                                                       echo"<option value='$row->metaid' selected>$row->sender_receiver_name</option>";
                                                       }
													   else {
														    echo"<option value='$row->metaid'>$row->sender_receiver_name</option>";
													   }
                                                       }
                                                 ?>
                                                
                                                
                                                 </select>
                                                   
                                                </div>
                                                </div>
                                                          <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Receiving Tp*</label>
                                                  
                                                 <select name="receiving_tp" id="rcv_tp" class="required form-control valid"  onchange="myFunctionesssss(this.value),myFunctionesssssss(this.value)" aria-required="true" aria-invalid="false">
                                                 <option>--- Select Receiving Tp---</option>
                                                           <?php 
												  	$result=$this->User_Model->fetch_trading_partner_sender();
	                                                    foreach($result as $row)
	                                                   {
														if($datass['receiving_tp']==$row->memberId)
													   {
														echo"<option value='$row->memberId' selected>$row->tp_name</option>";
													   }
													   else {
														  echo"<option value='$row->memberId'>$row->tp_name</option>"; 
													   }
														
														 } ?>
                                                 
                                                
                                                
                                                 </select>
                                            
                                                   
                                                </div>
                                                </div>
													      <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Receiver</label>
                                                  
                                                    <select name="receiver_name" id="receiverss" class="required form-control valid" aria-required="true" aria-invalid="false">
                                                 <option>--- Select Receiver Name---</option>
                                                 <?php $result=$this->User_Model->get_sender_reciever();
                                             foreach ($result as $row) {
                                                      
                                                       if($datass['receiver_name']==$row->metaid)
													   {
                                                       echo"<option value='$row->metaid' selected>$row->sender_receiver_name</option>";
													   }
													   else 
													   {
													  echo"<option value='$row->metaid'>$row->sender_receiver_name</option>";   
													   }
                                                       
                                                        }
                                                 ?>
                                                
                                                
                                                 </select>
                                                   
                                                </div>
                                                </div>
												<div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Carrier</label>
                                                  
                                                    <select name="carrier" class="required form-control valid" onchange="chechk_send_reciever(this.value)" aria-required="true" aria-invalid="false">
                                                 <option value="">--- Select Carrier --</option>
                                                 <?php $result=$this->User_Model->get_carrier();
                                                       foreach ($result as $row) {
                                                      
                                                      if($datass['carrier']==$row->carrier)
													  {
                                                       echo"<option value='$row->carrier' selected>$row->carrier</option>";
													  }
													  else {
														echo"<option value='$row->carrier'>$row->carrier</option>";
													  }
                                                       
                                                        }
                                                 ?>
                                                
                                                
                                                 </select>
                                                   
                                                </div>
                                                </div>
			
												<!--<div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Action</label>
                                                  
                                                    <select name="receiving_tp" class="required form-control valid" aria-required="true" aria-invalid="false">
                                                 <option>--- Select Action---</option>
                                              
                                                        <?php if($datass['carrier']==1)
														{
                                                       echo"<option value='1' selected>Delivery</option>";
													   echo"<option value='2'>Pickup</option>";
													
														}
														else if($datass['carrier']==2)
														{
													 echo"<option value='2' selected>Pickup</option>";
													 echo"<option value='1'>Delivery</option>";
														} ?>
                                               
                                                
                                                 </select>
                                                   
                                                </div>
                                                </div>-->
                                                     <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Reference</label>
                                                  
                                                        <input type="text" class="required form-control" value="<?php echo $datass['reference']; ?>" name="reference" placeholder="Reference">
                                                   
                                                </div>
                                                </div>
												     <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Own</label>
                                                  
                                                        <input type='checkbox' class='form-control' name='own' name='reference' value='1'>
                                                   
                                                </div>
                                                </div><br><br><br><br><br><br><br><br><br><br><br><br><br>
												            <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Sent</label>
                                                  
                                                        <input type="number" class="required form-control"  value="<?php echo $datass['sent']; ?>" autocomplete="off" id="fd" name="sent" placeholder="Sent">
                                                   
                                                </div>
                                                </div>
												          <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Receive</label>
                          
                                                        <input type="number" class="required form-control" autocomplete="off" id="dd" value="<?php echo $datass['receive']; ?>" onkeyup="myFunction(this.value)" name="receive" placeholder="Receive">
                             
                                                </div>
                                                </div>
                                                           <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Quantity</label>
                                                  
                                                        <input type="number" class="required form-control" id="demo" value="<?php echo $datass['quantity']; ?>" name="quantity" placeholder="Quantity">
                                                   
                                                </div>
                                                </div>
												
												     <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Trace Quantity</label>
                                                     <input type="number" class="required form-control" value="<?php echo $datass['trace_quantity']; ?>" id="trace" name="trace_quantity" >
                                                    </div>
                                                     </div>
													   <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Untrace Quantity</label>
                                                     <input type="number" class="required form-control" id="untrace" value="<?php echo $datass['untrace_quantity']; ?>" name="untrace_quantity">
                                                    </div>
                                                     </div>
													 	   <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Redeem XN</label>
													<?php 
													if($datass['redeem_xn']==1)
													{
                                                     echo"<input type='checkbox' class='required form-control checkboxyz'  id='checkedddu' name='redeem_xn' value='1' checked>";
													}
													else
													{
													 echo"<input type='checkbox' class='required form-control checkboxyz'  id='checkedddu' name='redeem_xn' value='1'>";	
													}
													 ?>
                                                    </div>
                                                     </div>
													 <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Unredeem ON</label>
                                                     <input type="number" class="required form-control" id="unredeem_on" value="<?php echo $datass['unredeem_on']; ?>" name="unredeem_on">
                                                    </div>
                                                     </div>
													  	   <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Redeem XF</label>
                                                     
													 		<?php 
													if($datass['redeem_xf']==1)
													{
                                                     echo"<input type='checkbox' class='required form-control checkboxyz'  id='redeem_xf' name='redeem_xf' value='1' checked>";
													}
													else
													{
													 echo"<input type='checkbox' class='required form-control checkboxyz'  id='redeem_xf' name='redeem_xf' value='1'>";	
													}
													 ?>
                                                    </div>
                                                     </div>
													 	 <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Unredeem OFF</label>
                                                     <input type="number" class="required form-control" value="<?php echo $datass['unredeem_off']; ?>" id="unredeem_off" name="unredeem_off">
                                                    </div>
                                                     </div>
                                                           <div class="col-md-4">
                                                     <div class="form-group clearfix">
                                                    <label class="control-label " for="address">Transfer</label>
                                                  
                         
													   		 		<?php 
													if($datass['redeem_xf']==1)
													{
                                                     echo"<input type='checkbox' class='required form-control checkboxx'  id='checked' name='transfer' value='1' checked>";
													}
													else
													{
													 echo"<input type='checkbox' class='required form-control checkboxx'  id='checked' name='transfer' value='1'>";	
													}
													 ?>
                                                       
                                                </div>
                                                </div>
												<br><br><br><br><br><br><br><br><br>
                                              <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Transaction*</label>
                                                  
                                                       <select name="transaction" id="transferof" class="required form-control valid" aria-required="true" aria-invalid="false">
                                                 <option>--- Select Transaction--</option>
                                                 <?php $result=$this->User_Model->fetch_transaction();
                                             foreach ($result as $row) {
                                                      if($datass['transaction']==$row->transaction_id)
													  {
                                                      echo"<option value='$row->transaction_id' selected>$row->transaction</option>";
													  }
													  else 
													  {
													 echo"<option value='$row->transaction_id'>$row->transaction</option>";  
													  }
                                                       
                                                        }
                                                 ?>
                                                
                                                
                                                 </select>
                                                   
                                                </div>
                                                </div>
                                                  
                                                 <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Effective Date</label>
                                                  
                                                        <input type="date" class="required form-control" value="<?php echo $datass['effective_date']; ?>" name="effective_date" placeholder="Effective Date">
                                                   
                                                </div>
                                                </div>
										
												<br><br><br><br><br>
                                                       <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Docket Number</label>
                                                  
                                                        <input type="text" class="required form-control" value="<?php echo $datass['docket_number']; ?>" name="docket_number" placeholder="Docket Number">
                                                   
                                                </div>
                                                </div>
                                                           <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Rai/corr</label>
                                                  <?php
												  if($datass['rai_corr']==1) 
												  {
                                                     echo"<input type='checkbox' name='rai_corr' class='required form-control' value='1' checked>";
												  }
												  else {
													  echo"<input type='checkbox' name='rai_corr' class='required form-control' value='1'>";
												  }
                                                   ?>
                                                </div>
                                                </div><br><br><br><br><br><br><br>
												       <div class="col-md-4">
                                                    <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Rai/corr Date Time</label>
                                                  
                                                           <input type="date" name="rai_corr_date" value="<?php echo $datass['movements_date']; ?>" class="required form-control" value='1'>
                                                   
                                                </div>
                                                </div>
                                                     <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Type*</label>
                                                  
                                                       <select name="type" class="required form-control valid" aria-required="true" aria-invalid="false">
                                                 <option>--- Select Transaction--</option>
                                                 <?php $result=$this->User_Model->movement_type();
                                             foreach ($result as $row) {
                                                      
                                                      if($datass['movements_date']==$row->type_id)
													  {
                                                       echo"<option value='$row->type_id' selected>$row->type</option>";
                                                       
											             } 
														 else {
													echo"<option value='$row->type_id' selected>$row->type</option>"; 
														 }
											            }
                                                 ?>
                                                
                                                 </select>
                                                   
                                                </div>
                                                </div> 
                                 <div class="col-md-4">
                            <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Orig.Movemevt</label>
                                                  
                                                        <input type="text" class="required form-control" value="<?php echo $datass['orig_movemevt'];?>" name="orig_movemevt" placeholder="Orig.Movemevt">
                                                   
                                                </div>
                                                </div>
												      <div class="col-md-4">
                            <div class="form-group clearfix">
                                                    <label class="control-label " for="father">Orig. Bill</label>
                                                  
                                                        <input type="date" class="required form-control" value="<?php echo $datass['orig_bill'];?>" id="father" name="orig_bill" placeholder="Orig. Bill">
                                                   
                                                </div>
                                                </div>
                                                             <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="address">Export</label>
                                                  <?php 
												  if($datass['export']==1)
												  {
                                                    echo"<input type='checkbox' name='export'  class='required form-control' value='1' checked>";
												  }
												  else {
													 echo"<input type='checkbox' name='export'  class='required form-control' value='1'>"; 
												  }
													   
													   ?>
                                                       
                                                </div>
                                                </div>
												
											<br><br><br><br><br>
                                                  <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Batch*</label>
												    <input class="form-control" name="batch" id="demo-10" value="<?php echo $datass['batch'];?>" placeholder="supplier" />
                                                </div>
                                                </div>
                                                    <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Bill*</label>
                                                  
                                         <input class="form-control" name="bill" id="demo-14"  value="<?php echo $datass['bill'];?>" placeholder="Select Equipment" />
                                                   
                                                </div>
                                                </div>
												 <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Supplier Reference</label>
                                                  
                                         <input type="text" class="form-control" name="supplier_reference"  value="<?php echo $datass['supplier_reference'];?>"  placeholder="Supplier Reference" />
                                                   
                                                </div>
                                                </div>
														 <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Days</label>
                                                  
                                         <input type="number" class="form-control" name="days" value="<?php echo $datass['days'];?>"  placeholder="Days" />
                                                   
                                                </div>
                                                </div>
														 <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Equipment Days</label>
                                                  
                                         <input type="text" class="form-control" name="equipment_days" value="<?php echo $datass['equipment_days'];?>"  placeholder="Equipment Days" />
                                                   
                                                </div>
                                                </div>
														 <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Rent</label>
                                                  
                                         <input type="text" class="form-control" name="rent" value="<?php echo $datass['rent'];?>"  placeholder="Rent" />
                                                   
                                                </div>
                                                </div>
												<div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Fee Code</label>
                                                  
                                         
										 
										 
										              <select name="fee_code" class="required form-control valid" onchange="fee_code(this.value)" aria-required="true" aria-invalid="false">
                                                 <option>--- Select Transaction--</option>
                                                 <?php $result=$this->User_Model->fee_code();
                                             foreach ($result as $row) {
                                                      ?>

                                                       <option value="<?php echo $row->fee_unit_price;?>"><?php echo $row->feecode."(".$row->fee_unit_price.")"; ?></option>
                                                       <?php
                                                        }
                                                 ?>
                                                
                                                 </select>
                                                   
                                                </div>
                                                </div>
																	 <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="first_name">Fee Unit Price</label>
                                                  
                                         <input type="text" class="form-control" id="fee_unit_prices" name="fee_unit_price" value="<?php echo $datass['fee_unit_price'];?>"  placeholder="Fee Unit Price" />
                                                   
                                                </div>
                                                </div>
											    <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                <label class="control-label " for="first_name">Fees</label>
                                                <input type="text" class="form-control" id="feesss" name="fees" value="<?php echo $datass['fees'];?>"  placeholder="Fees" /> 
                                                </div>
                                                </div>
											    <div class="col-md-4">
                                                <div class="form-group clearfix">
                                                <label class="control-label " for="first_name">Amount</label>
                                                <input type="text" class="form-control" name="amount" value="<?php echo $datass['amount'];?>"  placeholder="Amount" /> 
                                                </div>
                                                </div>
                                                </div>
                                                
       
                                    
                                    <div class="col-md-12">
                                                <div class="form-group clearfix">
                                                    <label class="control-label " for="address">Notes</label>
                                                  
                                                        <textarea name="notes" class="required form-control"><?php echo $datass['notes']; ?>
                                                        </textarea>

                                                </div>
                                                </div>
                                      
                                            </section>
                                        
           
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
function myFunctioness(data) {
   $('#senderss').load('<?php echo base_url("User/getData")?>',{"senderss_tp_id":data});
}
</script>
<script>
function myFunctionesssssss(data) {
	
   $('#modaldiv').load('<?php echo base_url("User/getData")?>',{"modals":data});
}
</script>
<script>
function myFunctionesssss(data) {
   $('#receiverss').load('<?php echo base_url("User/getData")?>',{"senderss_tp_id":data});
}
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


$('#demo-10').inputpicker({
    data:[
	<?php
	$i=1;
	$result=$this->User_Model->fetch_trading_partner_sender();
	foreach($result as $row)
	{
		$tp_type=$row->tp_type;
		$date_time=$row->date_time;
		$date = $date_time;
        $createDate = new DateTime($date);
        $date_times = $createDate->format('Y-m-d');
		$date_times = date('m-d-Y', strtotime($date_times));
		$ii=$row->tp_name;
		$remove[] = "'";
        $remove[] = '"';
        $remove[] = "-"; // just as another example
        $tp_name = str_replace( $remove, "", $ii );
		
		$code=$row->code;
		$tp_primary=$row->tp_primary;
		$memberId=$row->memberId;
		
     echo"{value:'$memberId',text:'$date_times',type:'$tp_type', description: '$code',primary:'$tp_primary'},"; 
	$i++; } ?>
       
    ],
    fields:[
        {name:'value',text:'TP Id'},
        {name:'text',text:'Batch'},
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
	$result=$this->User_Model->fetch_trading_partner_sender();
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
	$result=$this->User_Model->fetch_trading_partner_sender();
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
var results = +document.getElementById("fd").value;

var x = results - data;
document.getElementById("demo").value = x;
document.getElementById("trace").value = data;
document.getElementById("untrace").value = data;
}
</script>
<script>
function fee_code(data)
{
    var quantityess = +document.getElementById("demo").value;
	var feesssss=quantityess*data;
	document.getElementById("fee_unit_prices").value = data;
	document.getElementById("feesss").value = feesssss;
}
</script>


<script>
$('#demo-14').inputpicker({
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

        $equipment = str_replace( $remove, "", $ii );
		$date_time=$row->date_time;
		$date = $date_time;
        $createDate = new DateTime($date);
        $date_times = $createDate->format('Y-m-d');
		$date_times = date('m-d-Y', strtotime($date_times));
		$supplier=$row->equipment_supplier_tp;
		$book_stock=$row->equipment_book_stock;
		$lost_stock=$row->equipment_lost_stock;
		$memberId=$row->metaid;
		
        echo"{value:'$memberId',text:'$date_times',type:'$supplier', description: '$book_stock',primary:'$equipment'},"; 
	$i++; } ?>
       
    ],
    fields:[
        {name:'value',text:'TP Id'},
        {name:'text',text:'Date'},
		{name:'type',text:'Supplier'},
        {name:'description',text:'Book Stock'},
		{name:'primary',text:'Equipment'},
    ],
    headShow: true,
    fieldText : 'text',
    fieldValue: 'value',
	filterOpen: true
    });
</script>
<script>

$(".checkboxx").change(function() {
    if(this.checked) {
	xy=document.getElementById("checked").value

  
$('#transferof').load('<?php echo base_url("User/getData")?>',{"transfer":xy});
    }
});
$(".checkboxyz").change(function() {
    if(this.checked) {
	xy=document.getElementById("demo").value
document.getElementById("unredeem_on").value = xy;
   

    }
});

</script>
<script>
 $("#checked").change(function() {
                    var ischecked= $(this).is(':checked');
                    if(!ischecked)
						var xy=1;
$('#transferof').load('<?php echo base_url("User/getData")?>',{"transfer_full":xy});
                }); 
				</script>
				
		<script>
 $("#checkedddu").change(function() {
                    
                   var ischeckedddd= $(this).is(':checked');
                    if(!ischeckedddd)
                     document.getElementById("unredeem_on").value = '';
                }); 
</script>
<script>
function chechk_send_reciever(data)
{

var senderddd = +document.getElementById("sendind_tp").value;
var recieverddd = +document.getElementById("rcv_tp").value;
if(senderddd == recieverddd)
{
alert('Sender Trading Partner And Receiver Trading Partner Both Are Same');
document.getElementById("sendind_tp").value = '';
document.getElementById("rcv_tp").value = '';
}
}
</script>
				
				
				
				
			
				
			<li class="active">
                                          
                                        </li>	
				
				<!------------------------------------------------>
						
 
  <!-- Trigger the modal with a button -->
 

  <!-- Modal -->


<!---------------------------//----------------------------------------------->
				
				
				
				
		<div id="modaldiv"></div>	
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
    </body>
	

	
	     
</html>