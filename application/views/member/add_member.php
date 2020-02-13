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
<title>Add Trading Partner - Pallet Logistics</title>
<!--Form Wizard-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins2/jquery.steps/css/jquery.steps.css')?>" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
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
input[type="checkbox"] {
width: 20px;
height: 20px;
}
div#tp_ac_modal .modal-dialog {
width: 40%;
}
.ddmmyy {
position: relative;
/*color: white;*/
}

input:before {
position: absolute;
top: 3px; left: 3px;
content: attr(data-date);
display: inline-block;
color: black;
}

input::-webkit-datetime-edit, input::-webkit-inner-spin-button, input::-webkit-clear-button {
display: none;
}

input::-webkit-calendar-picker-indicator {
position: absolute;
top: 3px;
right: 0;
color: black;
opacity: 1;
}
</style>	
<!-------------------------------->
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="https://bootswatch.com/flatly/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="https://www.jqueryscript.net/demo/Multi-column-Dropdown-Plugin-jQuery-Inputpicker/src/jquery.inputpicker.css" rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://www.jqueryscript.net/demo/Multi-column-Dropdown-Plugin-jQuery-Inputpicker/src/jquery.inputpicker.js"></script>
</head>
<body class="fixed-left" onload="getStates(13)">
<!-- Loader -->
<script>
function getStates(val)
{


$('#bp').load('<?php echo base_url("User/getData")?>',{"state":val});
}

function getState(val)
{
var name=val.value;

$('#bp').load('<?php echo base_url("User/getData")?>',{"state":name});
}
function getCity(val)
{
var name=val.value;

$('#city').load('<?php echo base_url("User/getData")?>',{"city":name});
}
</script>

<!-- Begin page -->
<div id="wrapper">

<!-- Top Bar Start -->
<?php $this->load->view('headerfile/header');?>
<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->
<?php $this->load->view('headerfile/leftmenu');?>
<!-- Left Sidebar End -->

<?php
$form_id=5;

$result=$this->User_Model->get_form_fieldsddd($form_id,$login_id);
$fields_id=$this->User_Model->find_fields_order($result);
@$fields = explode(',', $result);

$ii=0;
foreach($fields_id as $row)
{

	$z[$row->fields_order]=@$fields[$ii];
	$ii++;
}
?>
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
<a href="<?php echo base_url('User/import_csv_for_trading_partner');?>" class="btn btn-success">Import Csv File</a>
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
<h4 class="m-t-0 header-title"><b>Add Trading Partner</b></h4>

<form  method="post" action="<?php echo base_url('User/insert_member')?>">
<div>

<h3>Trading Partner Detail</h3>
<section>
<div class="col-md-6" <?php if (@$z[0]==88){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="first_name">Name *</label>

<input type="text" class="required form-control" id="first_name" name="tp_name" placeholder="Trading Partner Name">
</div>
</div>
<div class="col-md-6" <?php if (@$z[1]==89){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="last_name">Type</label>    
<select name="tp_type" class="required form-control valid" id="type" onChange="get_fields(this.value);insert_location_id(this.value)">
<option>--- Select TP Type---</option>
<?php $result=$this->User_Model->fetch_trading_partner_type();
foreach ($result as $row) {
?>

<option value="<?php echo $row->type_id;?>"><?php echo $row->tp_type; ?></option>
<?php
}
?>
</select>
</div>
</div>

<div class="clearfix"></div>
<div id="type_id"></div>
<div class="col-md-6" <?php if (@$z[2]==90){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="mobile">TP Code</label>

<input type="text" class="required form-control" value="<?php echo(rand(0000000000,9999999999));?>" name="code" placeholder="TP Code">

</div>
</div>
<div class="clearfix"></div>
<div class="col-md-4" <?php if (@$z[3]==91){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="form-control" name="their_code" placeholder="code">
<label class="control-label " for="mobile">Their Code</label>

</div>
</div>

<div class="clearfix"></div>

<div class="col-md-6" <?php if (@$z[4]==92){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Email Id*</label>

<input type="email" class="required form-control" id="father" name="emailid" placeholder="Trading Partner Email Id">

</div>
</div>
<div class="clearfix"></div>

<div class="col-md-4" <?php if (@$z[5]==93){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix checkboxcontainer">

<input type="checkbox" class="" name="notify" >
<label class="control-label " for="gender">Notify *</label>
</div>
</div>

<div class="clearfix"></div>

<div class="col-md-6" <?php if (@$z[6]==94){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Office Number</label>

<input type="number" class="required form-control" id="father" name="phone_number" placeholder="Office Number">

</div>
</div>
<div class="col-md-6" <?php echo 'style="display:none"';?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Fax</label>

<input type="number" class="form-control" id="father" name="fax" placeholder="Fax">

</div>
</div>

<div class="clearfix"></div>

<div class="col-md-6" <?php if (@$z[8]==96){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Address1</label>

<input type="text" class="required form-control" id="father" name="address1" placeholder="Address1">

</div>
</div>
<div class="col-md-6" <?php if (@$z[9]==97){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Address2</label>

<input type="text" class="form-control" id="father" name="address2" placeholder="Address2">

</div>
</div>

<div class="clearfix"></div>


<div class="col-md-6" <?php if (@$z[10]==98){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">Country Name</label>

<select name="country" class="required form-control" onChange="getState(this);">
<option value=''>Select Country</option>
<?php  $resultss=$this->User_Model->get_Country(); 
foreach($resultss as $row)
{
	if($row->id==13){$f="selected";}else{$f="";}
?>
<option value="<?php echo $row->id; ?>" <?php echo $f;?>><?php echo $row->name; ?></option>
<?php } ?>
</select> 

</div>
</div>
<div class="col-md-6" <?php if (@$z[11]==99){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">State Name</label>

<select name="state" id="bp" class="required form-control demoInputBox" onChange="getCity(this);">

<option value="">Select State</option>

</select> 

</div>
</div>

<div class="clearfix"></div>

<div class="col-md-6" <?php if (@$z[12]==100){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="father">City Name</label>

<select name="city" id="city" class="required form-control demoInputBox">

<option value="">Select City</option>

</select> 

</div>
</div>
<div class="col-md-6" <?php if (@$z[13]==101){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="email">Postcode/ZIP</label>	
<input type="number" class="form-control" name="zip"   placeholder="Postcode/ZIP" />

</div>
</div>

<div class="clearfix"></div>

<div class="col-md-6" style="display:none">
<div class="form-group clearfix">
<label class="control-label " for="email">Report Name</label>	
<input type="text" class="form-control" name="report"  placeholder="Report Name" />

</div>
</div>
<div class="col-md-6" <?php if (@$z[15]==103){} else { echo 'style="display:none;"'; } ;?> id="internal">
<div class="form-group clearfix">
<label class="control-label " for="email">Internal</label>



<input class="form-control" name="internal" id="demo-5"  placeholder="Select Internal" />

</div>
</div>

<div class="clearfix"></div>

<div class="col-md-6" <?php if (@$z[16]==104){} else { echo 'style="display:none;"'; } ;?> id="primary">
<div class="form-group clearfix">
<label class="control-label " for="mobile">Primary</label>

<input class="form-control" name="primary" id="demo-6"  placeholder="Select Internal" />

</div>
</div>

<div class="col-md-6" <?php if (@$z[17]==105){} else { echo 'style="display:none;"'; } ;?> id="last-movement">
<div class="form-group clearfix datecontainer">
<label class="control-label " for="doj">Last Movement Date *</label>


<input type="text"  class="required form-control"  name="lmd"   value="<?php echo $this->User_Model->lmd_date($login_id);?>">


</div>
</div>

<div class="clearfix"></div>

<div class="col-md-6" <?php if (@$z[18]==106){} else { echo 'style="display:none;"'; } ;?> id="sptp">
<div class="form-group clearfix">
<label class="control-label " for="mobile">Special TP</label>


<select name="special" class="required form-control">
<option value=''>Select Special TP</option>
<?php  $resultss=$this->User_Model->trading_partner_special(); 
foreach($resultss as $row)
{
?>
<option value="<?php echo $row->memberId; ?>"><?php echo $row->tp_name; ?></option>
<?php } ?>
</select> 

</div>
</div>
<div class="col-md-6" <?php if (@$z[19]==107){} else { echo 'style="display:none;"'; } ;?> id="licence-number">
<div class="form-group clearfix">
<label class="control-label " for="mobile">Licence Number</label>

<input type="text" class="form-control"  name="licence_number" placeholder="Licence Number">

</div>
</div>

<div class="clearfix"></div>


<div class="col-md-6" <?php if (@$z[20]==108){} else { echo 'style="display:none;"'; } ;?> id="expiry-date">
<div class="form-group clearfix datecontainer">
<label class="control-label " for="doj">Expiry Date*</label>

<input type="text" data-inputmask="'alias': 'date'" class="required form-control ddmmyy expdate"  name="expiry_date"   data-date="" data-date-format="DD-M-YYYY" value="<?php echo date('d-m-Y');?>">

</div>
</div>

<div class="col-md-6"  <?php if (@$z[21]==109){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="mobile">Site</label>
<input type="text" class="form-control" name="location" placeholder="Site">
</div>
</div>
<div class="clearfix"></div>

<div class="col-md-6" <?php if (@$z[22]==110){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="mobile">Site ID</label>

<input type="text" class="form-control" id="location_id" name="location_id" placeholder="Site ID">

</div>
</div>

<div class="col-md-12" <?php if (@$z[23]==111){} else { echo 'style="display:none;"'; } ;?>>
<div class="form-group clearfix">
<label class="control-label " for="address">Notes</label>

<textarea name="notes" class="form-control">
</textarea>
</div>
</div>
<div class="row">
<div class="col-md-12">

<div class="col-md-4" id="div1">
    <div class="hidden-print">
     <div class="pull-right">
   <a href="javascript:window.print()" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
   <input type="submit" name="submit" value="Submit" class="btn btn-success">
      </div>
       </div>
</div>


<div class="col-md-8"></div>
</div>
</div>
</form>
</div>
</div>
</div>




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

<script src="<?php echo base_url('assets/plugins2/inputmask/jquery.inputmask.bundle.js')?>"></script>


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

<script>
$(".ddmmyy").on("change", function() {
this.setAttribute(
"data-date",
moment(this.value, "YYYY-MM-DD")
.format( this.getAttribute("data-date-format") )
)
}).trigger("change")
</script>

<script>

$(".datecontainer input").inputmask();


</script>
<script>
function get_fields(data)
{
	var type_data=data;
	//alert(type_data);
$('#type_id').load('<?php echo base_url("User/getData")?>',{"type_id":type_data});
}	

</script>

<script>
function insert_location_id(data)
{
	var locations=data;
	if(locations=='Site')
	{
	 document.getElementById("location_id").value = '<?php echo rand(0000000,99999999);?>';
	}
	else{
		 document.getElementById("location_id").value = '';
	}
}
</script>
<script>
const markup = `
<div class="col-md-6">
<div class="form-group clearfix">

<input type="text" class="form-control" name="rup"   placeholder="Rent Unit Price" />
</div>
</div>
`;
</script>
<script>
const markupuu = `
 <div class="col-md-6">
<div class="form-group clearfix">
<select name="special" class="required form-control">
<option value='' hidden>Select Equipment</option>
<?php  $resultss=$this->User_Model->get_equipmentreport(); 
foreach($resultss as $row)
{
?>
<option value="<?php echo $row->metaid; ?>"><?php echo $row->equipment; ?></option>
<?php } ?>
</select>  
</div>
</div>
`;

</script>
<script>
function add_fields() {
    document.getElementById('wrapperss').innerHTML += markupuu;
    document.getElementById('wrapperss').innerHTML += markup;
    
}

</script>

<script>
function find_lenth(data)
{
 var str = data;
  var n = str.length;
if(n > 4)
{
alert('Not More Than 4 Char');	
}	
}

</script>
<script>
function startnumber(data)
{
	 var str = data;
  var n = str.length;
if(n > 3)
{
alert('Not More Than 3 Number');	
}
}
</script>
<script>
function nextnumber(data)
{
	 var str = data;
  var n = str.length;
if(n > 3)
{
alert('Not More Than 3 Number');	
}
}
</script>

<script>
function endnumber(data)
{
  var str = data;
  var n = str.length;
  if(n > 2)
  {
  alert('Not More Than 2 Number');	
  }
	
}
</script>
<script>
function suffixes(data)
{
	 var str = data;
  var n = str.length;
  if(n > 1)
  {
  alert('Not More Than 1 Char');	
  }
}
</script>
<script>
$(function() {
  
    $('#type').change(function(){
        if($('#type').val() == 3) {
            $('#primary').hide(); 
			 $('#sptp').hide();
			 $('#last-movement').hide();
			 $('#internal').hide();
        } 
		else if($('#type').val() == 1) 
		{
            $('#licence-number').hide(); 
            $('#expiry-date').hide(); 
			
        }
else{
	$('#primary').show(); 
			$('#sptp').show();
}	
    });
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