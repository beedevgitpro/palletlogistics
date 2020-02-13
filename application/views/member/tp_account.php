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
<title>Add Trading Partner Account - Pallet Logistics</title>

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
<input type="submit"   class="btn btn-danger"  onclick="myFunctionq()" value="Scroll down" /> 
<li>
<a href="<?php echo base_url('User/import_trading_partner_accounts');?>" class="btn btn-success">Import Csv File</a>
</li>

</ol>
<div class="clearfix"></div>
</div>
</div>
</div>

<!-- Wizard with Validation -->

<div class="row">
<div class="col-sm-12">
<div class="card-box">

<h4 class="m-t-0 header-title"><b>Add Trading Accounts Details</b></h4>
<br>
<hr>
<?php
$form_id=3;

$result=$this->User_Model->get_form_fieldsddd($form_id,$login_id);
$fields_id=$this->User_Model->find_fields_order($result);
@$fields = explode(',', $result);

$ii=0;
foreach($fields_id as $row)
{

	$z[$row->fields_order]=@$fields[$ii];
	$ii++;
}

//print_r($z);
?>
<form  method="post" action="<?php echo base_url('User/insert_tpaccounts')?>">
<div>



<section>
<div class="col-md-6" <?php if (@$z[0]==57){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="first_name">Third Party Name*</label>
<input class="form-control" name="third_party" id="demo-7" value="" placeholder="Select Internal" />

</div>
</div>


<div class="col-md-6" <?php if (@$z[1]==58){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="last_name">Supplier TP</label>
<select name="supplier[]" id="state" class="form-control" multiple>
<option value=""hidden>--- Select Supplier ---</option>
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
<div class="col-md-6" <?php if (@$z[2]==59){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="last_name">Account Number</label>

<input type="text" class="form-control"  name="account_number" placeholder="Account Number">

</div>
</div>

<div class="col-md-6" <?php if (@$z[3]==60){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="last_name">Profile</label>
<input type="text" class="form-control" id="demo-10" name="profile" placeholder="Profile">
</div>
</div>
<div class="col-md-6" <?php if (@$z[4]==61){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="last_name">Transit Days</label>

<input type="text" class="form-control"  name="transit_days" placeholder="Transit Days">

</div>
</div>

<div class="col-md-6" <?php if (@$z[5]==62){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="last_name">Delay Rule</label>

<input type="text" class="form-control"  name="delay_rule" placeholder="Delay Rule">

</div>
</div>
<div class="col-md-6" <?php if (@$z[6]==63){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="last_name">Allow Transaction Off</label>

<input type="text" class="form-control"  name="tpa_allow_tf" placeholder="Allow Transaction Off">

</div>
</div>
<div class="col-md-6" <?php if (@$z[7]==64){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="last_name">Transaction Off Delay Type</label>


<select name="tpa_tf_delay_type" id="state" class="form-control">
<option value="">--- Select Transaction Off Delay Type ---</option>
<?php
$result=$this->User_Model->tntf_delay_type();
foreach($result as $row)
{

echo"<option value='$row->tntf_name'>$row->tntf_name</option>";

}
?>
</select>

</div>
</div>
<div class="col-md-6" <?php if (@$z[8]==65){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="last_name">Credit Limit</label>

<input type="text" class="form-control"  name="credit_limit" placeholder="Credit Limit">

</div>
</div>

<div class="clearfix"></div>

<div class="col-md-6" <?php if (@$z[9]==66){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="form-control"  name="allow_tn" placeholder="Allow Transaction On">
<label class="control-label" for="last_name">Allow Transaction On</label>

</div>
</div>

<div class="clearfix"></div>

<div class="col-md-6" <?php if (@$z[10]==67){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="last_name">Transaction On Delay Rule</label>

<select name="tn_delay_type" id="state" class="required form-control">
<option value="">--- Select Transaction On Delay Rule ---</option>
<?php
$result=$this->User_Model->tntf_delay_type();
foreach($result as $row)
{

echo"<option value='$row->tntf_name'>$row->tntf_name</option>";

}
?>
</select>

</div>
</div>
<div class="col-md-6" <?php if (@$z[11]==68){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="last_name">Transaction Off Delay Days</label>

<input type="text" class="form-control"  name="tf_delay_days" placeholder="Transaction Off Delay Days">

</div>
</div>

<div class="clearfix"></div>

<div class="col-md-6" <?php if (@$z[12]==69){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="required form-control"  name="tf_delay_rule" placeholder="Transaction Off Delay Rule">
<label class="control-label " for="father">Transaction Off Delay Rule</label>

</div>
</div>

<div class="clearfix"></div>


</section>
<h3></h3>
<section>

<div class="col-md-3" <?php if (@$z[13]==70){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="required form-control" id="bank" name="allow_exchange" placeholder="Allow Exchange">
<label class="control-label " for="first_name">Allow Exchange</label>

</div>
</div>
<div class="clearfix"></div>

<div class="col-md-3" <?php if (@$z[14]==71){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="form-control" id="bank" name="redeem_exchange" placeholder="Redeem Exchange" value="1">
<label class="control-label " for="first_name">Redeem Exchange</label>

</div>
</div>
<div class="clearfix"></div>

<div class="col-md-3" <?php if (@$z[15]==72){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="required form-control"  name="redeem_same" placeholder="Redeem Same" value="1">
<label class="control-label " for="first_name">Redeem Same</label>

</div>
</div>
<div class="clearfix"></div>

<div class="col-md-3" <?php if (@$z[16]==73){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="required form-control"  name="tpa_complete" placeholder="Complete" value="1">
<label class="control-label " for="first_name">Complete</label>

</div>
</div>
<div class="clearfix"></div>

<div class="col-md-3" <?php if (@$z[17]==74){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="required form-control"  name="override_export_status" placeholder="Override Export Status" value="1">
<label class="control-label " for="first_name">Override Export Status</label>

</div>
</div>
<div class="clearfix"></div>

<div class="col-md-3" <?php if (@$z[18]==75){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix  checkboxcontainer">

<input type="checkbox" class="required form-control"  name="export_Ons" placeholder="Override Export Status" value="1">
<label class="control-label " for="first_name">Export Ons</label>

</div>
</div>
<div class="clearfix"></div>

<div class="col-md-3" <?php if (@$z[19]==76){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="required form-control"  name="export_offs" placeholder="Override Export Status" value="1">
<label class="control-label " for="first_name">Export Offs</label>

</div>
</div>

<div class="clearfix"></div>


<div class="col-md-12" <?php if (@$z[20]==77){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="last_name">Docket Format</label>

<select class='form-control' name='docket_format'>
<?php
$resss=$this->User_Model->get_docket_format();
foreach($resss as $rowss)
{ ?>
<option value='<?php echo $rowss->docket_format_type; ?>'><?php echo $rowss->docket_format_type; ?></option>
<?php	} ?>
</select>

</div>
</div>

<div class="clearfix"></div>

<div class="col-md-12" <?php if (@$z[21]==78){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="required form-control"  name="con_note_required" placeholder="Con Note Required" value="1">
<label class="control-label " for="first_name">Con Note Required</label>

</div>
</div>

<div class="col-md-12" <?php if (@$z[22]==79){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix ">
<label class="control-label " for="first_name">Con Note Characters</label>

<input type="text" class="required form-control"  name="con_note_characters" placeholder="Con Note Characters">

</div>
</div>
<div class="col-md-12" <?php if (@$z[23]==80){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">


<input type="checkbox" class="required form-control"  name="con_note_numeric" placeholder="Con Note Numeric" value="1">
<label class="control-label " for="first_name">Con Note Numeric</label>

</div>
</div>
<div class="col-md-12" <?php if (@$z[24]==81){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="first_name">Con Note Description</label>

<input type="text" class="required form-control"  name="con_note_description" placeholder="Con Note Description">

</div>
</div>
<!-------------------------------->

<div class="col-md-12" <?php if (@$z[25]==82){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">


<input type="checkbox" class="required form-control"  name="reference_required" placeholder="Override Export Status" value="1">
<label class="control-label " for="first_name">Reference Required</label>

</div>
</div>

<div class="col-md-12" <?php if (@$z[26]==83){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="first_name">Reference Characters</label>                                              
<input type="text" class="required form-control"  name="reference_characters" placeholder="Reference Characters">


</div>
</div>

<div class="col-md-12" <?php if (@$z[27]==84){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="required form-control"  name="reference_numeric" placeholder="Reference Numeric" value="1">
<label class="control-label " for="first_name">Reference Numeric</label>

</div>
</div>

<div class="col-md-12" <?php if (@$z[28]==85){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix ">
<label class="control-label " for="first_name">Reference Description</label>                                              
<input type="text" class="required form-control"  name="reference_description" placeholder="Reference Description" >


</div>
</div>

<div class="col-md-12" <?php if (@$z[29]==86){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="required form-control"  name="reminder" value="1">
<label class="control-label " for="first_name">Reminder</label>

</div>
</div>

<div class="col-md-12" <?php if (@$z[30]==87){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="address">Notes *</label>

<textarea name="note" class="required form-control">
</textarea>
</div>
</div>

<div class="clearfix"></div>
<div class="col-md-12">
<div class="col-md-4" id="div1">
  <div class="hidden-print">
     <div class="pull-right">
   <a href="javascript:window.print()" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
  <input type="submit" name="submit" value="Submit" class="btn btn-success">
      </div>
       </div>
</div>


</div>
<div class="clearfix"></div>
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

<script>
function myFunctionq(){
	
    var divLoc = $('#div1').offset();
    $('html, body').animate({scrollTop: divLoc.top},"slow");
    return false
    };
</script>
				

</body>
</html>