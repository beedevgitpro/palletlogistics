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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="<?php echo base_url('assets/js/modernizr.min.js')?>"></script>
<script>

//jQuery(function(){
//jQuery('#modal').click();
//});
</script>
<style>
input[type=radio] {
border: 0px;
width: 100%;
height: 2em;
}
input[type="checkbox"]{
width: 30px; /*Desired width*/
height: 30px; /*Desired height*/
}
a.export,
a.export:visited {
  display: inline-block;
  text-decoration: none;
  color: #000;
  background-color: #ddd;
  border: 1px solid #ccc;
  padding: 8px;
}
</style>
</head>
<script>

$(document).ready(function() {

  function exportTableToCSV($table, filename) {

    var $rows = $table.find('tr:has(td)'),

      // Temporary delimiter characters unlikely to be typed by keyboard
      // This is to avoid accidentally splitting the actual contents
      tmpColDelim = String.fromCharCode(11), // vertical tab character
      tmpRowDelim = String.fromCharCode(0), // null character

      // actual delimiter characters for CSV format
      colDelim = '","',
      rowDelim = '"\r\n"',

      // Grab text from table into CSV formatted string
      csv = '"' + $rows.map(function(i, row) {
        var $row = $(row),
          $cols = $row.find('td');

        return $cols.map(function(j, col) {
          var $col = $(col),
            text = $col.text();

          return text.replace(/"/g, '""'); // escape double quotes

        }).get().join(tmpColDelim);

      }).get().join(tmpRowDelim)
      .split(tmpRowDelim).join(rowDelim)
      .split(tmpColDelim).join(colDelim) + '"';

    // Deliberate 'false', see comment below
    if (false && window.navigator.msSaveBlob) {

      var blob = new Blob([decodeURIComponent(csv)], {
        type: 'text/csv;charset=utf8'
      });

      // Crashes in IE 10, IE 11 and Microsoft Edge
      // See MS Edge Issue #10396033
      // Hence, the deliberate 'false'
      // This is here just for completeness
      // Remove the 'false' at your own risk
      window.navigator.msSaveBlob(blob, filename);

    } else if (window.Blob && window.URL) {
      // HTML5 Blob        
      var blob = new Blob([csv], {
        type: 'text/csv;charset=utf-8'
      });
      var csvUrl = URL.createObjectURL(blob);

      $(this)
        .attr({
          'download': filename,
          'href': csvUrl
        });
    } else {
      // Data URI
      var csvData = 'data:application/csv;charset=utf-8,' + encodeURIComponent(csv);

      $(this)
        .attr({
          'download': filename,
          'href': csvData,
          'target': '_blank'
        });
    }
  }

  // This must be a hyperlink
  $(".export").on('click', function(event) {
    // CSV
    var args = [$('#dvData>table'), 'export.csv'];

    exportTableToCSV.apply(this, args);

    // If CSV, don't do event.preventDefault() or return false
    // We actually need this to be a typical hyperlink
  });
});

</script>
                              <body class="fixed-left">
                              <?php if(isset($_POST['filter']))
                                        {
                              if(isset($_POST['balance']))
                                        {
                               $balance=$_POST['balance']; 

                                     }
                                 else {
                             $balance_contact='';
                                   }
                             if(isset($_POST['filters'])==1)
                                      {
                             $balance_contact=$_POST['filters']; 

                                    }
                                  else
                                     {
                            $balance_contact=''; 
                                 }
                          $first_period='';
                           $filters='';
                         if(isset($_POST['filters'])==2)
                             {
                         $filters=$_POST['filters'];
                        $first_period=@$_POST['first_period'];

                                }
                               else
                                    {
                          $first_period=''; 
                          $filters='';
                                     }
                       if(isset($_POST['filters'])==3)
                             {
					  $filters=$_POST['filters'];
					  
                               }
                                }
                         else {
                      $balance_contact='';
                      $first_period='';
                       $filters='';
                         }	

?>


<div id="wrapper">

<!-- Top Bar Start -->
<?php $this->load->view('headerfile/header');?>
<!-- Top Bar End -->

<?php $this->load->view('headerfile/leftmenu');?>

<div class="content-page">

<div class="content">
<div class="container">


<div class="row">
<div class="col-xs-12">
	<div class="page-title-box">
		<h4 class="page-title">Bill Reports </h4>
		<ol class="breadcrumb p-0 m-0">
	   <li class="active">
			  <button type="button" id="modal" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Data Filtering</button>
			</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<!-- end row -->


<div class="row">
<div class="col-md-12">
	<div class="panel panel-default">
	  
		<div class="panel-body">
			<div class="clearfix">
				<div class="pull-left">
					<h3>Pallet Logistics</h3>
				</div>
			  
			</div>
			<hr>
			<div class="row">
				<div class="col-md-12">

					<div class="pull-left m-t-30">
						<address>
						  <strong>Equipment:  &nbsp;&nbsp;&nbsp;&nbsp;   All Equipment</strong><br>
						  <strong>TP Filtering:       &nbsp;&nbsp;&nbsp;   All Location<strong><br>
						  <strong>Filtering:       &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reconciled<strong><br>
					   
						  </address>
					</div>
			   
				</div><!-- end col -->
			</div>
			<!-- end row -->

			<div class="m-h-50"></div>

			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive" id="dvData">
						   <table class="table m-t-30 table-colored table-info">
							<thead>
								<tr>
								<th>S.No.</th>
								<th>Trading Partner</th>
								<th>Account Number</th>
								<th>Last Transaction</th>
								<th>Quantity</th>
								
								<?php if($balance_contact==1)
								{ ?>
								 <th>Contact</th>
								 <th>Phone</th>
								 <th>Direct Phone</th>
								<?php } ?>
								<?php if($filters==2)
								{ ?>
								 <th>Current</th>
								 <th>1 Month</th>
								 <th>2 Month</th>
								 <th>3 & Over</th>
								<?php } ?>
								 </tr></thead>
							<tbody>
							<?php 
				$i=1;$j=0; $k=7;$m=7;
				$get_id=$this->User_Model->get_equipment_metaid_fr_tp();
				foreach($get_id as $rows)
				{
					if($filters==2)
					{
				$first_period=$first_period;
				$time =  strtotime($first_period);
				$second_period = date("Y-m-d", strtotime("-$i month", $time));
				if($i>1)
				{
					$first_period = date("Y-m-d", strtotime("-$j month", $time));
					
				}
					}
					
					
					if($filters==3)
					{
				$first_period=$first_period;
				$time =  strtotime($first_period);
				$second_period = date("Y-m-d", strtotime("-$k day", $time));
				if($i>1)
				{
					$first_period = date("Y-m-d", strtotime("-$m day", $time));
					
				}
					}
					else{
						$second_period='';
					}
					$j++;
					$k=$k+7;
				
				$results=$this->User_Model->get_movementreport_fr_tp($rows->metaid,$first_period,$second_period);
							?>
							<tr>
							 <td style="font-weight:bold"><font size="4"><?php 
							//$x=$this->User_Model->get_equipment_id($rows->metaid);
							//echo $x['equipment']
							echo $rows->equipment;
							 ?></font></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								
								</tr> 
								<?php
								$total=0;
							    foreach($results as $row) 
							     {
							     ?>
								<tr>
								  <td><?php echo $i++;?></td>
									<td><?php echo $this->User_Model->trading_partner_names($row->sending_tp);?></td>
									<?php  $row->receiving_tp;?>
									<td><?php echo $this->User_Model->trading_partner_account_number($row->sending_tp);?></td>
									<td> <?php  echo $date_time = date('m-d-Y H:i:s', strtotime($row->date_time));?></td>
									<td><?php echo $row->quantity;?> </td>
									<?php $dataaa=$this->User_Model->sender_receiver_name($row->sending_tp);?>
									<?php if($balance_contact==1)
									{ ?>
									<td><?php echo $dataaa['sender_receiver_name'];?> </td>
									<td><?php echo $dataaa['phone_number'];?> </td>
									<td><?php echo $dataaa['mobile_number'];?> </td>
									<?php } ?>
										<?php if($filters==2)
									{ ?>
									<td><?php echo $row->quantity;?> </td>
									<td><?php echo $row->quantity;?> </td>
									<td><?php echo $row->quantity;?> </td>
									<td><?php echo $row->quantity;?> </td>
									<?php } ?>
								</tr>
							<?php	$total=$total+$row->quantity; } ?>


										   <tr>
								   <td><b><span style='font-weight:bold;'> <font size="4">Net owed by third paries(negative values 'owed to')</font></span></b></td>
									<td></td>
									<td></td>
									<td></td>
									
									
									  <td><b><?php echo $total; ?></b></td>
									<td></td>
									<td></td>
								</tr>
						<?php	} ?>
						 
							</tbody>
						</table>
					</div>
				</div>
			</div>
	  
			<hr>
			<div class="hidden-print">
				<div class="pull-right">
					<a href="javascript:window.print()" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
					<a href="#" class="btn btn-primary waves-effect waves-light">Submit</a>
				</div>
			</div>
		</div>
	</div>

</div>

</div>
<!-- end row -->



</div> 

</div> 

</div> 

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
<div class="container">
<!-- Modal -->
<form action="" method="post">
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title">Trading Partner Report Data</h4>
					</div>
							 <div class="row">
						 
					  <div class="col-md-4">
								<div class="form-group">
								 <button type="button" class="btn btn-info waves-effect waves-light">Stock Levels</button>   
								</div>
							</div>
								 <div class="col-md-4">
								<div class="form-group">
								 <button type="button" class="btn btn-info waves-effect waves-light" id="modal"  data-toggle="modal" data-target="#tp_ac_modal">Trading Partner History</button>   
								</div>
							</div>
								 <div class="col-md-4">
								<div class="form-group">
								 <button type="button" class="btn btn-info waves-effect waves-light">Trading Partner List</button>   
								</div>
							</div>
							</div>
					<div class="modal-body">
						 <div class="row">
						 
					  <div class="col-md-2">
								<div class="form-group">
									<label for="field-1" class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Balance</label><br><br>
									<input type="radio" name="filters"  class="form-control balance" id="field-1" placeholder="John">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="field-2" class="control-label">Balance With Contact Details</label>
							 <input type="radio"  name="filters"  class="form-control balance"  value="1">
								</div>
							</div>
							  <div class="col-md-2">
								<div class="form-group">
									<label for="field-2" class="control-label">Monthly Aged Balance</label><br><br>
							 <input type="radio" name="filters"  class="form-control monthly" id="field-4"  value="2">
								</div>
							</div>
							  <div class="col-md-2">
								<div class="form-group">
									<label for="field-2" class="control-label">Weekly Aged Balance</label><br><br>
							 <input type="radio" name="filters" class="form-control weekly"  id="field-4" placeholder="Boston">
								</div>
							</div>
							  <div class="col-md-2">
								<div class="form-group">
									<label for="field-2" class="control-label">Custom Period Aged Balance</label>
							 <input type="radio" name="filters"  class="form-control customise" id="field-4" placeholder="Boston">
								</div>
							</div>
							 <div class="col-md-2">
								<div class="form-group">
									<label for="field-2" class="control-label">Export balance to a CSV text file</label>
									<a href="#" class="export"></a>
								</div>
							</div>
							 
						</div><br><br>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="field-3" class="control-label">Equipment</label>
							 <select name="equipment" class="required form-control valid" aria-required="true" aria-invalid="false">
					 <option>--- Select Equipment---</option>
					 <option value="">All Equipments</option>
					 <?php $result=$this->User_Model->fetch_equipment();
				 foreach ($result as $row) {
						  ?>

						   <option value="<?php echo $row->metaid;?>"><?php echo $row->equipment; ?></option>
						   <?php
							}
					 ?>
					
					
					 </select>
								</div>
							</div>
							 <div class="col-md-2">
								<div class="form-group">
									<label for="field-2" class="control-label">Owned By 3rd Party</label>
							 <input type="checkbox" name="filters" class="form-control" id="field-4" placeholder="Boston">
								</div>
							</div>
							 <div class="col-md-2">
								<div class="form-group">
									<label for="field-2" class="control-label">Owned to 3rd Party</label>
							 <input type="checkbox" name="filters" class="form-control" id="field-4" placeholder="Boston">
								</div>
							</div>
											<div class="col-md-4">
								<div class="form-group">
									<label for="field-4" class="control-label">3rd Party TP</label>
						<select name="trading_partner" class="required form-control valid" aria-required="true" aria-invalid="false">
					 <option>--- Select Location TP---</option>
					  <option value=""><?php echo 'trading partner'."-------".'Type'; ?>
					 <?php $result=$this->User_Model->fetch_trading_partner();
				 foreach($result as $row) {
						  ?>

						   <option value="<?php echo $row->memberId;?>"><?php echo $row->tp_name."--------------".$row->tp_type; ?>
						   
						   <!------------------------------------------>
						   
						   <!------------------------------------------->
						   
						   
						   
						   </option>
						   <?php
							}
					 ?>
					
					
					 </select>
								</div>
							</div>
							
				<br><br><br><br><br><br>
						</div>
			
						<div class="row">
					  <div class="col-md-4">
								<div class="form-group">
									<label for="field-1" class="control-label">From Date</label>
									<input type="date" class="form-control" id="field-1" placeholder="John">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="field-2" class="control-label">3 Periods</label>
							 <input type="checkbox" class="form-control className checkbox chb xyz"   placeholder="Boston">
								</div>
							</div>
							  <div class="col-md-4">
								<div class="form-group">
									<label for="field-2" class="control-label">6 Periods</label>
							 <input type="checkbox" class="form-control className totalperiods chb" id="second"  placeholder="Boston">
								</div>
							</div>
				
						</div>
						<div class="row"  id="monthly_record">
	
		  </div>
				   
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
						<button type="submit" name="filter" class="btn btn-info waves-effect waves-light">Filter Data</button>
					</div>
				</div>
			</div>
		</div>
		</form>

</div>


<!------------------------------trading_partner_history-------------------------------------------------->

	<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
 

  <!-- Modal -->
  <div class="modal fade" id="tp_ac_modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Trading Partner History</h4>
        </div>
        <div class="modal-body">
          <p></p>
        </div>
        <div class="modal-footer">
      
          <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        </div>
      </div>
      
    </div>
  </div>
</div>

<script>
$('.checkbox').change(function() {
if($(this).is(':checked'))
var elements = document.getElementsByClassName("third");
for(var i = 0, length = elements.length; i < length; i++) {
if( elements[i].textContent == ''){
elements[i].disabled = false;
} 
}
});
//-----------------------------------------------------------------
$(".totalperiods").change(function() {
if(this.checked) {

var elements = document.getElementsByClassName("sixperiods");
for(var i = 0, length = elements.length; i < length; i++) {
if( elements[i].textContent == ''){
elements[i].disabled = false;
} 
}


}
});
<!--------------balance----------------------->
$('.balance').change(function() {
if($(this).is(':checked'))
{
var elements = document.getElementsByClassName("className");
for(var i = 0, length = elements.length; i < length; i++) {
if( elements[i].textContent == ''){
elements[i].disabled = true;
} 
}
}
});
<!--------------------//------------------->
<!---------------------------monthly-------------->
$('.monthly').change(function() {
if($(this).is(':checked'))
{
var elements = document.getElementsByClassName("className");
for(var i = 0, length = elements.length; i < length; i++) {
if( elements[i].textContent == ''){
elements[i].disabled = true;
} 

}
var xy=10;
$('#monthly_record').load('<?php echo base_url("User/getData")?>',{"monthly":xy});
}
});

$('.customise').change(function() {
if($(this).is(':checked'))
{
var elements = document.getElementsByClassName("chb");
for(var i = 0, length = elements.length; i < length; i++) {
if( elements[i].textContent == ''){
elements[i].disabled = false;
} 
}
var xyd=10;
$('#monthly_record').load('<?php echo base_url("User/getData")?>',{"custom_periods":xyd});
}
});
<!------------------------//----------------------------
$('.third').change(function() {
if($(this).is(':checked'))
{
var elements = document.getElementsByClassName("third");
for(var i = 0, length = elements.length; i < length; i++) {
if( elements[i].textContent == ''){
elements[i].disabled = false;
} 
}
}
});
<!----------------------------------------------->

$('.weekly').change(function() {
if($(this).is(':checked'))
{
var elements = document.getElementsByClassName("className");
for(var i = 0, length = elements.length; i < length; i++) {
if( elements[i].textContent == ''){
elements[i].disabled = true;
} 
}
var xyd=10;
$('#monthly_record').load('<?php echo base_url("User/getData")?>',{"weekly":xyd});
}
});


$('.xyz').change(function() {
if($(this).is(':checked'))
{
var elements = document.getElementsByClassName("forth");
for(var i = 0, length = elements.length; i < length; i++) {
if( elements[i].textContent == ''){
elements[i].disabled = true;
} 
}
}
});
$(".chb").change(function() {
$(".chb").prop('checked', false);
$(this).prop('checked', true);
});
<!--------------------------//----------------------->

</script>



</body>
</html>