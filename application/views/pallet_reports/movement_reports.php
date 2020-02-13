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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

   <!-- Popper JS -->
 
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

<style type="text/css"> .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
      
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    /*new css*/
td.title.sender-head {
    border-bottom-style: double;
    border-top-style: double;
    padding: 20px 0;
    background: #eeeeee;
}
td.title.sender-head span {
    font-size: 14px;
    font-weight: 600;
    line-height: 15px;
}
td.title.sender-head p {
    color: #131313;
    margin: 0;
    font-size: 20px;
    font-weight: bold;
    line-height: 0px;
}
td.empty {
    width: 40%;
    border-bottom: 3px double;
    border-top: 3px double;
    position: relative;
    left: -2px;
}


.information ul {
    text-decoration: none;
    list-style: none;
    padding: 0 6px;
}


.information img {
    max-width: 100%;
}
.information p {
    max-width: 100%;
}
.information ul li {
    color: #000;
    font-size: 15px;
    font-family: sans-serif;
}

.information-box {
    border-bottom: 2px dotted;
    padding: 10px;
    margin: 0 auto;
}
tr.suppiers {
    border-top: 1px solid;
}
.row.suppiers-details {
    padding: 10px;
}
tr.suppiers img {
    width: 50px;
    height: 30px;
    margin: 0 auto;
}
tr.suppiers p {
    width: 50px;
    height: 30px;
    margin: 0 auto;
}

.col-md-12.note {
    border-bottom: 2px dotted;
    border-top: 2px dotted;
    margin: 8px 0;
}

tr.signatures {
    border-bottom: 2px dotted;
}

td.receiver-sign {
    padding-bottom: 36px !important;
}
tr.big-barcode img {
    height: 200px;
    width: 100%;
}

td.date-sign {
    padding-top: 36px !important;
}

.row.footer-invoice {
    margin-top: 20px;
}   
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
 @media print
   {
      .topbar,.side-menu.left{display: none;}
      .content-page {margin-left: 0;
}
   }
</style>
    <body>

        <!-- Loader -->
 
              <?php $this->load->view('barcode/BarcodeBase');?>
			  <?php $this->load->view('barcode/Code128');?>
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <?php //$this->load->view('headerfile/header');?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <?php //$this->load->view('headerfile/leftmenu');?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
          <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                 
										   <?php 
										   
										   

$bcode = array();
$bcode['c128']	= array('name' => 'Code128', 'obj' => new emberlabs\Barcode\Code128());
function bcode_error($m)
{
	echo "<div class='error'>{$m}</div>";
}
function bcode_success($bcode_name)
{
	 "<div class='success'>A $bcode_name barcode was successfully created</div>";
}
function bcode_img64($b64str)
{
	return $x="<img src='data:image/png;base64,$b64str' /><br/>";
}






										   
										   
										   
										 $res= $this->User_Model->get_movement_report($movement_id);
										 
										 $movements_date= $res['movements_date'];
										 $equipment_id=$res["equipment"];
										 $sending_tpss=$res['sending_tp'];
										 $receiving_tpss=$res['receiving_tp'];
										                 
										 $equipment= $this->User_Model->equipment($equipment_id);
										 //----------------------------------
										 $equipments=$equipment['equipment'];
										$equipment_supplier_tp=$equipment['equipment_supplier_tp'];
										// $equipment_report_name=$equipment['equipment_report_name'];
									     $equipment_code=$equipment['equipment_code'];
										// $equipment_internal_code=$equipment['equipment_internal_code'];
										// $equipment_book_stock=$equipment['equipment_book_stock'];
										// $equipment_lost_stock=$equipment['equipment_lost_stock'];
										// $equipment_supplier_stock=$equipment['equipment_supplier_stock'];
										// $equipment_rent_unit_price=$equipment['equipment_rent_unit_price'];
										
										 //----------------------------------
										$sending_tps=$res['sending_tp'];
										$receiving_tps= $res['receiving_tp'];
										$sending_tp= $this->User_Model->get_trading_partners($sending_tps);
										$receiving_tp= $this->User_Model->get_trading_partners($receiving_tps);
										$sender_ac_number= $this->User_Model->get_trading_partner_accountsaaaa($sending_tps);
										$receiving_ac_number= $this->User_Model->get_trading_partner_accountsaaaa($receiving_tps);
										$sending_tp['tp_name'];
										$receiving_tp['tp_name'];
										// $reference=$res['reference'];
										  $quantity=$res['quantity'];
										// $transfer= $res['transfer'];
										$transaction=$res['transaction'];
										 $effective_date=$res['effective_date'];
										$docket_number=$res['docket_number'];
										// $export=$res['export'];
										// $batch= $res['batch'];
										// $notes= $res['notes'];
										   
										   ?>
                      
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <!-- <div class="panel-heading">
                                        <h4>Invoice</h4>
                                    </div> -->
                                    <div class="panel-body">
                                
                                        <hr>
                                      
                                        <!-- end row -->

                                        <div class="m-h-50"></div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                       <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title sender-head">
							<?php if($res['transaction']=='Issue')
							{
							echo $t="<p>Issue Authorisation</p>";	
							}
                           elseif($res['transaction']=='Dehire'){
							   echo $t="<p>Dehire Authorisation</p>";
							   
                                     }
                            elseif($res['transaction']=="	
Transfer On") 
                                    {
	                          echo $t="<p>CHEP Transfer</p>";
                                     }
                              elseif($res['transaction']=="Transfer Off
")
                                {
								echo $t="<p>CHEP Transfer</p>";
                                }
                               elseif($res['transaction']=='Exchange'){
								   echo $t="<p>CHEP Transfer</p>";
                                 }
                                elseif($res['transaction']=="Internal Exchange
"){
									 echo $t="<p>CHEP Exchange/IOU</p>";
                                  }	
                               else {
								   echo $t="<p>CHEP Exchange/IOU</p>";
                                  }	
							?>
							
							
                                
                                <span>Sender Copy</span>
                            </td>                            
                            <td class="empty">&nbsp;</td>
                        </tr>
                    </table>
                </td>
            </tr>
           
        </table>
    <div class="row information-box">
     <div class="col-3 information">
         <ul>
         <li>Movement Date:</li>
         <li>Delivery Date:</li>
         <li>Efective Date:</li>
         <li>Carrier:</li>
         <li>Reference:</li>
         <li>Con Note:</li>
         <li>Type:</li>
         </ul>
     </div>
     <div class="col-3 information">
         <ul>
         <li><?php echo $movements_date = date('d-m-Y', strtotime($movements_date));?>
		 </li>
         <li> Delivery Date</li>
         <li><?php echo date('d-m-Y', strtotime($effective_date))?></li>
         <li><?php echo $res['carrier']; ?></li>
         <li>-</li>
         <li>-</li>
         <li><?php if($res['type']=='Rejection' || $res['type']=='Reversal' || $res['type']=='Correction')
		 { ?><font size="3" color="red"><?php echo $res['type']; ?></font> <?php } ?></li>
         </ul>
     </div>
     <div class="col-3"></div>
     <div class="col-3 information">
         <ul>
             <li><p>
<?php	foreach($bcode as $k => $value)
	                         {
		                try
		             {
			$bcode[$k]['obj']->setData($movements_date);
			$bcode[$k]['obj']->setDimensions(300, 150);
			$bcode[$k]['obj']->draw();
			$b64 = $bcode[$k]['obj']->base64();

			bcode_success($bcode[$k]['name']);
			echo bcode_img64($b64);
		}
		catch (Exception $e)
		{
			bcode_error($e->getMessage());
		}
	};?></p></li>
             <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $movements_date; ?></li>
             <li></li>
             <li></li>
             <li></li>
             <li></li>
         </ul>
     </div> 
    </div>
    <div class="row information-box">
     <div class="col-3 information">
         <ul>
         <li>From:</li>
         <li>Site:</li>
         <li>Account Number:</li>
         <li>Advised by (sender):</li>
         <li>Address:</li>
         <li>Phone:</li>
         <li>Contact email:</li>
         </ul>
     </div>
     <div class="col-3 information">
         <ul>
         <li><?php echo $sending_tp['tp_name']; ?></li>
         <li><?php //echo $sending_tp['tp_location_id']; ?></li>
         <li><?php echo $sender_ac_number['tpa_account_number']; ?></li>
         <li>--</li>
         <li>--</li>
         <li>--</li>
		  <li>--</li>
         <li><?php //echo $sending_tp['tp_email']; ?></li>
         </ul>
     </div>
     <div class="col-3"></div>
     <div class="col-3 information">
         <ul>
                   <li><p><?php	foreach($bcode as $k => $value)
	{
		try
		{
			$bcode[$k]['obj']->setData($sender_ac_number['tpa_account_number']);
			$bcode[$k]['obj']->setDimensions(300, 150);
			$bcode[$k]['obj']->draw();
			$b64 = $bcode[$k]['obj']->base64();

			bcode_success($bcode[$k]['name']);
			echo bcode_img64($b64);
		}
		catch (Exception $e)
		{
			bcode_error($e->getMessage());
		}
	};?></p></li>
             <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $sender_ac_number['tpa_account_number']; ?></li>
             <li></li>
             <li></li>
             <li></li>
             <li></li>
             <li></li>
         </ul>
     </div> 
    </div>
    <div class="row information-box">
     <div class="col-3 information">
         <ul>
         <li>To:</li>
         <li>Site:</li>
         <li>Account Number:</li>
         <li>Authorised (receiver):</li>
         <li>Address:</li>
         <li>Phone:</li>
         <li>Contact email:</li>
         </ul>
     </div>
     <div class="col-3 information">
         <ul>
         <li><?php	echo $receiving_tp['tp_name'];; ?></li>
         <li>---</li>
         <li><?php echo $receiving_ac_number['tpa_account_number']; ?></li>
         <li>--</li>
         <li>--</li>
         <li>--</li>
         
		 <li>--</li>
		 <li><?php	//echo $receiving_tp['tp_email']; ?></li>
         </ul>
     </div>
     <div class="col-3"></div>
     <div class="col-3 information">
         <ul>
                       <li><p><?php	foreach($bcode as $k => $value)
	{
		try
		{
			$bcode[$k]['obj']->setData($receiving_ac_number['tpa_account_number']);
			$bcode[$k]['obj']->setDimensions(300, 150);
			$bcode[$k]['obj']->draw();
			$b64 = $bcode[$k]['obj']->base64();

			bcode_success($bcode[$k]['name']);
			echo bcode_img64($b64);
		}
		catch (Exception $e)
		{
			bcode_error($e->getMessage());
		}
	};?></p></li>
             <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $receiving_ac_number['tpa_account_number']; ?></li>
             <li></li>
             <li></li>
             <li></li>
             <li></li>
             <li></li>
         </ul>
     </div> 
    </div>
    <div class="row suppiers-details">
    <div class="col-md-12">
    <table cellpadding="0" cellspacing="0">
     <th>Supplier</th>
     <th>Equipment</th>
     <th>Code</th>
     <th>Transaction</th>
     <th></th>
     <th>Quantity</th>
     <th>Returns</th>
        <tr class="suppiers">
          <td><?php echo $equipment_supplier_tp; ?></td>
          <td><?php echo $equipments; ?></td>
          <td><?php echo $equipment_code; ?></td>
          <td><?php echo $transaction; ?></td>
          <td></td>
          <td><?php echo $quantity; ?></td>
          <td style="border:1px solid;"></td>
                    <td><p><?php	foreach($bcode as $k => $value)
	{
		try
		{
			$bcode[$k]['obj']->setData($quantity);
			$bcode[$k]['obj']->setDimensions(300, 150);
			$bcode[$k]['obj']->draw();
			$b64 = $bcode[$k]['obj']->base64();

			bcode_success($bcode[$k]['name']);
			echo bcode_img64($b64);
		}
		catch (Exception $e)
		{
			bcode_error($e->getMessage());
		}
	};?></p></td>        
        </tr>
    </table>
   </div>  
   <div class="col-md-12 note">
    <table cellpadding="0" cellspacing="0">
      <tr>
        <td>Notes:</td>
        <td>Opening Balance</td>
    </tr>
    </table>
   </div>  
  </div>
  <div class="row">
    <div class="col-md-6">
    <table cellpadding="0" cellspacing="0">
     <tr class="signatures">
          <td class="receiver-sign">Driver Signatures</td>
          <td>Print Name</td>         
    </tr>
    
    <tr class="signatures">
          <td class="receiver-sign">Receiver Signatures</td>
          <td>Print Name</td>         
    </tr>
    <tr class="signatures">
          <td class="date-sign">Date Receicved</td>
          <td></td>
    </tr>
    </table>
   </div>  
   <div class="col-md-6">
    <table cellpadding="0" cellspacing="0">
     <tr class="big-barcode">
        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scan this barcode</span>
        <td width="100px" height="50px";><?php	foreach($bcode as $k => $value)
	{
		try
		{
			$bcode[$k]['obj']->setData($docket_number);
			$bcode[$k]['obj']->setDimensions(300, 150);
			$bcode[$k]['obj']->draw();
			$b64 = $bcode[$k]['obj']->base64();

			bcode_success($bcode[$k]['name']);
			echo bcode_img64($b64);
		}
		catch (Exception $e)
		{
			bcode_error($e->getMessage());
		}
	};?></td>              
    </tr>
    </table>
   </div>  
  </div>
  <div class="row footer-invoice">
    <div class="col-md-4">
    <span>Session 1</span>
    <p>9/14/2018 9:00:38PM</p>
   </div>  
   <div class="col-md-4">
   <img src="../../assets/images/logocanvas.jpg" width="100px">

   </div>  
   <div class="col-md-4">

    <p>World best pallet control: You and Pallet Logistics</p>
   </div> 
  </div>
 </div>
 <!--receiver invoice-->
 <br><br><br><br>
 <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title sender-head">
                                <p><?php echo $t; ?></p>
                                <span>Receiver Copy</span>
                            </td>                            
                            <td class="empty">&nbsp;</td>
                        </tr>
                    </table>
                </td>
            </tr>
           
        </table>
    <div class="row information-box">
     <div class="col-3 information">
         <ul>
         <li>Movement Date:</li>
         <li>Delivery Date:</li>
         <li>Efective Date:</li>
         <li>Carrier:</li>
         <li>Reference:</li>
         <li>Con Note:</li>
         <li>Type:</li>
         </ul>
     </div>
     <div class="col-3 information">
         <ul>
         <li><?php echo $movements_date; ?></li>
         <li>--</li>
         <li><?php echo $effective_date; ?></li>
         <li><?php echo $res['carrier']; ?></li>
        <li>-</li>
         <li>-</li>
         <li><?php if(($res['type']=='Rejection' || $res['type']=='Reversal' || $res['type']=='Correction'))
		 { ?><font size="3" color="red"><?php echo $res['type']; ?></font> <?php } ?></li>
         </ul>
     </div>
     <div class="col-3"></div>
     <div class="col-3 information">
         <ul>
             <li><p><?php	foreach($bcode as $k => $value)
	{
		try
		{
			$bcode[$k]['obj']->setData($movements_date);
			$bcode[$k]['obj']->setDimensions(300, 150);
			$bcode[$k]['obj']->draw();
			$b64 = $bcode[$k]['obj']->base64();

			bcode_success($bcode[$k]['name']);
			echo bcode_img64($b64);
		}
		catch (Exception $e)
		{
			bcode_error($e->getMessage());
		}
	};?></p></li>
             <li>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $movements_date; ?></li>
             <li></li>
             <li></li>
             <li></li>
             <li></li>
         </ul>
     </div> 
    </div>
    <div class="row information-box">
     <div class="col-3 information">
         <ul>
         <li>From:</li>
         <li>Site:</li>
         <li>Account Number:</li>
         <li>Advised by (sender):</li>
         <li>Address:</li>
         <li>Phone:</li>
         <li>Contact email:</li>
         </ul>
     </div>
     <div class="col-3 information">
          <ul>
         <li><?php echo $sending_tp['tp_name']; ?></li>
         <li><?php //echo $sending_tp['tp_location_id']; ?></li>
         <li><?php echo $sender_ac_number['tpa_account_number']; ?></li>
         <li>--</li>
         <li>--</li>
         <li>--</li>
		  <li>--</li>
         <li><?php //echo $sending_tp['tp_email']; ?></li>
         </ul>
     </div>
     <div class="col-3"></div>
     <div class="col-3 information">
         <ul>
             <li><p><?php	foreach($bcode as $k => $value)
	{
		try
		{
			$bcode[$k]['obj']->setData($sender_ac_number['tpa_account_number']);
			$bcode[$k]['obj']->setDimensions(300, 150);
			$bcode[$k]['obj']->draw();
			$b64 = $bcode[$k]['obj']->base64();

			bcode_success($bcode[$k]['name']);
			echo bcode_img64($b64);
		}
		catch (Exception $e)
		{
			bcode_error($e->getMessage());
		}
	};?></p></li>
             <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $sender_ac_number['tpa_account_number']; ?></li>
             <li></li>
             <li></li>
             <li></li>
             <li></li>
             <li></li>
         </ul>
     </div> 
    </div>
    <div class="row information-box">
     <div class="col-3 information">
         <ul>
         <li>To:</li>
         <li>Site:</li>
         <li>Account Number:</li>
         <li>Authorised (receiver):</li>
         <li>Address:</li>
         <li>Phone:</li>
         <li>Contact email:</li>
         </ul>
     </div>
     <div class="col-3 information">
            <ul>
         <li><?php	echo $receiving_tp['tp_name']; ?></li>
         <li><?php	//echo $receiving_tp['tp_location_id']; ?></li>
         <li><?php echo $receiving_ac_number['tpa_account_number']; ?></li>
         <li>--</li>
         <li>--</li>
         <li>--</li>
         
		 <li>--</li>
		 <li><?php	//echo $receiving_tp['tp_email']; ?></li>
         </ul>
     </div>
     <div class="col-3"></div>
     <div class="col-3 information">
         <ul>
             <li><p>
		<?php	foreach($bcode as $k => $value)
	     {
		try
		{
			$bcode[$k]['obj']->setData($receiving_ac_number['tpa_account_number']);
			$bcode[$k]['obj']->setDimensions(300, 150);
			$bcode[$k]['obj']->draw();
			$b64 = $bcode[$k]['obj']->base64();

			bcode_success($bcode[$k]['name']);
			echo bcode_img64($b64);
		}
		catch (Exception $e)
		{
			bcode_error($e->getMessage());
		}
	};?></p></li>
             <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $receiving_ac_number['tpa_account_number']; ?></li>
             <li></li>
             <li></li>
             <li></li>
             <li></li>
             <li></li>
         </ul>
     </div> 
    </div>
    <div class="row suppiers-details">
    <div class="col-md-12">
    <table cellpadding="0" cellspacing="0">
     <th>Supplier</th>
     <th>Equipment</th>
     <th>Code</th>
     <th>Transaction</th>
     <th></th>
     <th>Quantity</th>
     <th>Returns</th>
        <tr class="suppiers">
         <td><?php echo $equipments; ?></td>
          <td><?php echo $equipments; ?></td>
          <td><?php echo $equipment_code; ?></td>
          <td><?php echo $transaction; ?></td>
          <td></td>
          <td><?php echo $quantity; ?></td>
          <td style="border:1px solid;"></td>
          <td><p><?php	foreach($bcode as $k => $value)
	{
		try
		{
			$bcode[$k]['obj']->setData($quantity);
			$bcode[$k]['obj']->setDimensions(300, 150);
			$bcode[$k]['obj']->draw();
			$b64 = $bcode[$k]['obj']->base64();

			bcode_success($bcode[$k]['name']);
			echo bcode_img64($b64);
		}
		catch (Exception $e)
		{
			bcode_error($e->getMessage());
		}
	};?></p></td>        
        </tr>
    </table>
   </div>  
   <div class="col-md-12 note">
    <table cellpadding="0" cellspacing="0">
      <tr>
        <td>Notes:</td>
        <td>Opening Balance</td>
    </tr>
    </table>
   </div>  
  </div>
  <div class="row">
    <div class="col-md-6">
    <table cellpadding="0" cellspacing="0">
     <tr class="signatures">
          <td class="receiver-sign">Driver Signatures</td>
          <td>Print Name</td>         
    </tr>
    
    <tr class="signatures">
          <td class="receiver-sign">Receiver Signatures</td>
          <td>Print Name</td>         
    </tr>
    <tr class="signatures">
          <td class="date-sign">Date Receicved</td>
          <td></td>
    </tr>
    </table>
   </div>  
   <div class="col-md-6">
    <table cellpadding="0" cellspacing="0">
     <tr class="big-barcode">
        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scan this barcode</span>
       <td width="100px" height="50px";><?php	foreach($bcode as $k => $value)
	{
		try
		{
			$bcode[$k]['obj']->setData($docket_number);
			$bcode[$k]['obj']->setDimensions(300, 150);
			$bcode[$k]['obj']->draw();
			$b64 = $bcode[$k]['obj']->base64();

			bcode_success($bcode[$k]['name']);
			echo bcode_img64($b64);
		}
		catch (Exception $e)
		{
			bcode_error($e->getMessage());
		}
	};?></td>          
    </tr>
    </table>
   </div>  
  </div>
  <div class="row footer-invoice">
    <div class="col-md-4">
    <span>Session 1</span>
    <p>9/14/2018 9:00:38PM</p>
   </div>  
   <div class="col-md-4">
   <img src="../../assets/images/logocanvas.jpg" width="100px">  
   </div>  
   <div class="col-md-4">

    <p>World best pallet control: You and Pallet Logistics</p>
   </div> 
  </div>
 </div>
                                                </div>
                                            </div>
                                        </div>
                            
                                        <hr>
                                        <div class="hidden-print">
                                            <div class="pull-right">
											<a href="<?php echo base_url('User/view_movement'); ?>" class="btn btn-primary waves-effect waves-light">Back</a>
                                                <a href="javascript:window.print()" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- end row -->



                    </div> <!-- container -->

                </div> <!-- content -->

                 </div> <!-- content -->

             <?php $this->load->view('headerfile/footer');?>
            </div>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->



        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

         <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 
      <script src="
     https://s3-us-west-2.amazonaws.com/s.cdpn.io/123941/footable.js"></script>

        <!-- jQuery  -->
        <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
        <script src="<?php echo base_url('assets/assets/js/bootstrap.min.js')?>"></script>
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
    </body>
</html>