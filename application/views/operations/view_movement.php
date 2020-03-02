
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
         <style type="text/css">
    /*a {
      padding-left: 5px;
      padding-right: 5px;
      margin-left: 5px;
      margin-right: 5px;
    }*/

    #pagination a {
      
  color: black;
  /*float: right;*/
  
  padding-left: 5px;
      padding-right: 5px;
      margin-left: 5px;
      margin-right: 5px;
  text-decoration: none;
  transition: background-color .3s;
}

#pagination a.active {
  background-color: dodgerblue;
  color: white;
}

#pagination a:hover:not(.active) {background-color: #ddd;}
   
    </style>
        <!-- DataTables -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!-- App css -->
        <link href="<?php echo base_url('assets/css/core.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/components.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/icons.css')?>" rel="stylesheet" type="text/css" />
     
        <link href="<?php echo base_url('assets/css/menu.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/responsive.css')?>" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url('assets/plugins2/switchery/switchery.min.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/plugins2/footable/footable.bootstrap.min.css')?>">
             <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="<?php echo base_url('assets/js/modernizr.min.js')?>"></script>
   <script src="<?php echo base_url('assets/pages/jsgrid.min.js')?>"></script>	
  <style>
    body
    {
      margin:0;
      padding:0;
      background-color:#f1f1f1;
    }
    .box
    {
      width:900px;
      padding:20px;
      background-color:#fff;
      border:1px solid #ccc;
      border-radius:5px;
      margin-top:10px;
    }
th.scaffolding {
 width:200px;
}

button#one:focus
{
    background:#6f7175;
	color: white;
}
button#two:focus
{
    background:#6f7175;
	color: white;
}
button#three:focus
{
    background:#6f7175;
	 color: white;
}
button#fourth:focus
{
    background:#6f7175;
	color: white;
}
input[type="checkbox"]{
  width: 30px; /*Desired width*/
  height: 30px; /*Desired height*/
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
                         
                     <br />
                      <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
   <div class="table-responsive">
      <br />
      <table id="_datatable-buttons" class="footable table table-striped  table-colored table-info footable-info table-bordered m-0" data-toggle-column="first" data-paging="true">
        <thead>
      <tr>
<th data-breakpoints="xs">Details</th>
<th>Date</th>
<th data-breakpoints="xs">Equipment</th>
<th data-breakpoints="xs sm md">Sending Tp</th>
<th data-breakpoints="xs sm md">Receiving Tp</th>
<th data-breakpoints="xs sm md">Reference</th>
<th data-breakpoints="xs sm md">Quantity</th>
<th data-breakpoints="xs sm md">Transfer</th>
<th data-breakpoints="xs sm md">Transaction</th>
<th style="width:500px">Effective Date</th>
<th data-breakpoints="xs sm md">Docket Number</th>
<th data-breakpoints="xs sm md">Carrier</th>
<th data-breakpoints="xs sm md">Rai/Corr</th>
<th data-breakpoints="xs sm md">Type Of Carrier</th>
<th data-breakpoints="xs sm md">Orig.Movement</th>
<th data-breakpoints="xs sm md">Export</th>
<th data-breakpoints="xs sm md">Batch</th>
<th data-breakpoints="xs sm md">Bill</th>
<th data-breakpoints="xs sm md">Notes</th>
<th data-breakpoints="xs sm md">Delete</th>
<th data-breakpoints="xs sm md">Update</th>
<th data-breakpoints="xs sm md">Genrate Docket</th>
</tr>
        </thead>
        <tbody id="tbodys">
        </tbody>
      </table>   

       
    </div> 
    <div style='margin-top: 10px;text-align: right' id='pagination'></div>
  </div> <!-- container -->

                </div> <!-- content -->

               <?php //$this->load->view('headerfile/footer');?>

            </div>

</div>
</div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
		</div>
		      <div class="row card-box">
                            <div class="col-lg-3">
							</div>
                                <div class="col-lg-9">
             <button type="button" id="one" class="btn equipment-receive">Created/Modified</button>&nbsp;&nbsp;
            <button type="button" id="two" class="btn equipment-sent">Rejections/Corrections</button>&nbsp;&nbsp;
         
                                
								
                                </div>
                          </div>
		   <div id="second-table"></div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

				  <?php
$result=$this->User_Model->fetch_equipment();
//$sender=$this->User_Model->fetch_trading_partner_sendere();
 //$receiver=$this->User_Model->get_sender_reciever();
 $transaction=$this->User_Model->fetch_transaction();
 $type=$this->User_Model->movement_type();
?> 
<script type="text/javascript" language="javascript">
$(document).ready(function(){

   $('#pagination').on('click','a',function(e){
       e.preventDefault(); 
       var pageno = $(this).attr('data-ci-pagination-page');
       load_data(pageno);
     });

  load_data(0);

  function load_data(pagno)
  {
       $.ajax({
    //  url:"<?php echo base_url(); ?>livetable/load_data",
        url:"<?php echo base_url('User/movement_one/')?>"+pagno,
        //dataType:"JSON",
        success:function(datas){
         console.log( datas );
           var posts = JSON.parse(datas);
        var e = posts.links;
        var data = posts.authors;
        var co = posts.row;
        var html = '<tr>';
		html += '<td></td>';
        html += '<td id="Date" contenteditable placeholder="Enter First Name"><?php echo date("d-m-Y")?></td>';
        html += '<td contenteditable placeholder="Enter Last Name"><select class="form-control" id="equipment"><?php foreach($result as $rowss) { ?> <option value="<?php echo $rowss->equipment; ?>"><?php echo $rowss->equipment; ?></option> <?php } ?></select></td>';
        html += '<td  id="tradingpartnet_insert" contenteditable></td>'; 
        html += '<td id="tradingpartnet_receiver" contenteditable></td>';
        html += '<td id="Reference" contenteditable></td>';
        html += '<td id="Quantity" contenteditable></td>';
        html += '<td id="Transfer" contenteditable></td>';
        html += '<td  contenteditable><select class="form-control" id="Transaction"><?php foreach($transaction as $rowt) { ?> <option value="<?php echo $rowt->transaction; ?>"><?php echo  $rowt->transaction; ?></option> <?php } ?></select></td>';
        html += '<td id="Effective_date" contenteditable><?php echo date("d-m-Y")?></td>';
        html += '<td id="Docket_Number" contenteditable></td>';
		
	    html += '<td id="carrierid" contenteditable></td>';
        html += '<td id="Rai_Corr" contenteditable></td>';
        html += '<td  contenteditable><select class="form-control" id="Type"><?php foreach($type as $rowtt) {  ?> <option value="<?php echo $rowtt->type; ?>"><?php echo $rowtt->type; ?></option> <?php } ?></select></td>';
        html += '<td id="Orig_Movement" contenteditable></td>';
        html += '<td id="Export" contenteditable></td>';
        html += '<td id="Batch" contenteditable></td>';
        html += '<td id="Bill" contenteditable></td>';
        html += '<td id="Notes" contenteditable></td>';
        html += '<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-plus"></span></button></td></tr>';
		 var equiee = new Array();
		 var sender_tp = new Array();
		 var receiver_tp = new Array();
		 var transaction = new Array();
		 var carri = new Array();
		 var typ = new Array();
        for(var count = 0; count < data.length; count++)
        {
            var x =  data[count].equipment;
            var y =  data[count].sending_tp; 
            var z =  data[count].receiving_tp; 
            var trans =  data[count].transaction; 
            var carr =  data[count].carrier; 
            var tps =  data[count].type; 
			equiee[count]=x;
			sender_tp[count]=y;
			receiver_tp[count]=z;
			transaction[count]=trans;
			carri[count]=carr;
			typ[count]=tps;
          html += '<tr>';
		  html += '<td><input type="checkbox" name="cb1"  id="'+data[count].metaid+'" class="chb btn btn-xs btn-info cha_id"></td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="Date" id="Date'+data[count].metaid+'" contenteditable>'+data[count].movements_date+'</td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="equipment"  contenteditable><select class="form-control equipment'+count+'" id="equipment'+data[count].metaid+'"><?php foreach($result as $rowss) { ?> <option value="<?php echo $rowss->equipment; ?>"><?php echo $rowss->equipment; ?></option> <?php } ?></select> </td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="Sending_Tp" id="trading_partner_names'+data[count].metaid+'"  contenteditable></td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="Receiving_Tp" id="receiver_tps'+data[count].metaid+'"  contenteditable></td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="Reference" id="Reference'+data[count].metaid+'" contenteditable>'+data[count].reference+'</td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="Quantity" id="Quantity'+data[count].metaid+'" contenteditable>'+data[count].quantity+'</td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="Transfer" id="Transfer'+data[count].metaid+'" contenteditable>'+data[count].transfer+'</td>'; 
          // html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="Transaction"  contenteditable><select class="form-control transaction'+count+'" id="Transaction'+data[count].metaid+'"><?php foreach($transaction as $rowt) { ?> <option value="<?php echo $rowt->transaction; ?>"><?php echo  $rowt->transaction; ?></option> <?php } ?></select></td>';
          html += '<td data-row_id="'+data[count].metaid+'" data-column_name="Transaction" contenteditable><select class="form-control transaction'+count+'" id="Transaction'+data[count].metaid+'"><?php foreach($transaction as $rowt) { ?> <option value="<?php echo $rowt->transaction; ?>"><?php echo  $rowt->transaction; ?></option> <?php } ?></select></td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="Effective_date" id="Effective_date'+data[count].metaid+'" contenteditable>'+data[count].effective_date+'</td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="Docket_Number" id="Docket_Number'+data[count].metaid+'" contenteditable>'+data[count].docket_number+'</td>';
		   html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="Carrier"  id="carrierlists'+data[count].metaid+'" contenteditable></td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="Rai_Corr" id="Rai_Corr'+data[count].metaid+'" contenteditable>'+data[count].rai_corr+'</td>';
          // html += '<td data-row_id="'+data[count].metaid+'" data-column_name="type"  contenteditable> <select class="form-control type'+count+'" id="Type'+data[count].metaid+'"><?php foreach($type as $rowtt) {  ?> <option value="<?php echo $rowtt->type; ?>"><?php echo $rowtt->type; ?></option> <?php } ?></select></td>'; 
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="type" contenteditable><select class="form-control type'+count+'" id="Type'+data[count].metaid+'"><?php foreach($type as $rowtt) {  ?> <option value="<?php echo $rowtt->type; ?>"><?php echo $rowtt->type; ?></option> <?php } ?></select></td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="Orig_Movement" id="Orig_Movement'+data[count].metaid+'" contenteditable>'+data[count].orig_movemevt+'</td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="Export" id="Export'+data[count].metaid+'" contenteditable>'+data[count].export+'</td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="Batch" id="Batch'+data[count].metaid+'" contenteditable>'+data[count].batch+'</td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="Bill" id="Bill'+data[count].metaid+'" contenteditable>'+data[count].bill+'</td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="Notes" id="Notes'+data[count].metaid+'" contenteditable>'+data[count].notes+'</td>';
          html += '<td><button type="button" name="delete_btn" id="'+data[count].metaid+'" class="btn btn-xs btn-danger btn_delete"><span class="glyphicon glyphicon-remove"></span></button></td>'
		  html += '<td><button type="button" name="table_data" id="'+data[count].metaid+'" class="btn btn-xs btn-info table_data"><span class="glyphicon glyphicon-pencil"></span></button></td>'
		  html += '<td><button type="button" name=" " id="'+data[count].metaid+'" class="btn btn-xs fa fa-file-pdf-o docket_tabel" aria-hidden="true"><i class="fa fa-file"></i></button></td></tr>';
          }
        //$('tbody').html(html);
        $('#tbodys').html(html);
        $('#pagination').html(e);
	   for(var count = 0; count < data.length; count++)
        {	
            load_equipment(equiee[count],count,transaction[count],typ[count]);   
	        var metaids=data[count].metaid;
               //    alert(metaids);	
               dropdown_lists(metaids,sender_tp[count],receiver_tp[count],carri[count]);     			
		}
		dropdown_list();
      $(".chb").change(function()
        {
       $(".chb").prop('checked',false);
    $(this).prop('checked',true);
    
      });
      }
    });
  }
  load_data();
  $(document).on('click', '#btn_add', function(){
    var Date = $('#Date').text();
	var equipment=$('#equipment').val();
    var Sending_Tp=$('#trading_partner_name_one').val();
    var Receiving_Tp = $('#Receiving_Tp').val();
    var Reference = $('#Reference').text();
    var Quantity = $('#Quantity').text();
    var Transfer = $('#Transfer').text();
    var Transaction = $('#Transaction').val();
    var Effective_date = $('#Effective_date').text();
    var Docket_Number = $('#Docket_Number').text();
    var Carrier = $('#Carrier').val();
	// alert(Carrier);
    var Rai_Corr = $('#Rai_Corr').text();
    var Type = $('#Type').val();   
    var Orig_Movement = $('#Orig_Movement').text();
    var Export = $('#Export').text();
    var Batch = $('#Batch').text();
    var Bill = $('#Bill').text();
    var Notes = $('#Notes').text();
    if(Date== '')
    {
      alert('Enter Date');
      return false;
    }
    if(equipment == '')
    {
      alert('Enter Equipment');
      return false;
    }
	if(Quantity=='')
	{
		 alert('Enter Quantity');
      return false;
	}
    $.ajax({
      url:"<?php echo base_url(); ?>User/insert_movement",
      method:"POST",
      data:{Date:Date, equipment:equipment, Sending_Tp:Sending_Tp,Receiving_Tp:Receiving_Tp,Reference:Reference, Quantity:Quantity, Transfer:Transfer,Transaction:Transaction,Effective_date:Effective_date, Docket_Number:Docket_Number,Carrier:Carrier, Rai_Corr:Rai_Corr,Type:Type,Orig_Movement:Orig_Movement, Export:Export, Batch:Batch,Bill:Bill,Notes:Notes},
      success:function(data){
        load_data();
      }
    })
  });
   $(document).on('click', '.table_data', function(){
    var id = $(this).attr('id');
    var Dates = $("#Date"+id).text();
    var equipments = $('#equipment'+id).val();
    var Sending_Tps = $('#trading_partner_name'+id).val();
    var Receiving_Tps = $('#Receiving_Tp'+id).val();
    var References = $('#Reference'+id).text();
    var Quantitys = $('#Quantity'+id).text();
    var Transfers = $('#Transfer'+id).text();
    var Transactions = $('#Transaction'+id).val();
    var Effective_dates = $('#Effective_date'+id).text();
    var Docket_Numbers = $('#Docket_Number'+id).text();
    var Carrier = $('#Carrier'+id).val();
    var Rai_Corrs = $('#Rai_Corr'+id).text();
    var Types = $('#Type'+id).val(); 
    var Orig_Movements = $('#Orig_Movement'+id).text();
    var Exports = $('#Export'+id).text();
    var Batchs = $('#Batch'+id).text();
    var Bills = $('#Bill'+id).text();
    var Notess = $('#Notes'+id).text();
	//alert(Types);
    $.ajax({
      url:"<?php echo base_url('User/update_movements')?>",
      method:"POST",
          data:{id:id,Dates:Dates, equipments:equipments, Sending_Tps:Sending_Tps,Receiving_Tps:Receiving_Tps,References:References, Quantitys:Quantitys, Transfers:Transfers,Transactions:Transactions,Effective_dates:Effective_dates, Docket_Numbers:Docket_Numbers,Carrier:Carrier, Rai_Corrs:Rai_Corrs,Types:Types,Orig_Movements:Orig_Movements, Exports:Exports, Batchs:Batchs,Bills:Bills,Notess:Notess},
      success:function(data)
      {
        if( data == 'success' ){
          alert( "Data Updated Successfully ");
        }
        load_data();
      }
    })
  });
  $(document).on('click', '.btn_delete', function(){
    var id = $(this).attr('id');
	//alert(id);
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
		 url:"<?php echo base_url('User/dalete_movemedsss')?>",
        //url:"<?php echo base_url(); ?>User/dalete_movemedsss",
        method:"POST",
        data:{id:id},
        success:function(data){
          load_data();
        }
      })
    }
  });
    $(document).on('click', '.docket_tabel', function(){
		 var id = $(this).attr('id'); 
	 window.location='<?php echo base_url("User/movement_reports/")?>'+id;
   });
   $(document).on('change', '.cha_id', function() {
    if(this.checked) {
     var id = $(this).attr('id');
	 document.getElementById("myOutput").value = id;
    }
}); 
  $(document).on('click', '.equipment-receive', function() {
  var actives = document.getElementById("myOutput").value;
 $("#second-table").load('<?php echo base_url("User/movement_datass")?>',{"actives":actives});
 });
$(document).on('click', '.equipment-sent', function() {
  var rej_corr_id = document.getElementById("myOutput").value;
 $("#second-table").load('<?php echo base_url("User/movement_datass")?>',{"rej_corr_id":rej_corr_id});		  
}); 
});
</script>
  <input type="hidden" id="myOutput">
<script>
$('#orig_bill').focus(function() {
document.onkeyup = function(e) {
  if (e.altKey && e.which == 50) {
   var tt = document.getElementById('orig_bill').value;
   var startdate = tt;
   var new_date = moment(startdate, "DD-MM-YYYY").add('days',1);
   var day = new_date.format('DD');
   var month = new_date.format('MM');
   var year = new_date.format('YYYY');
   var dates=day + '-' + month + '-' + year;
   document.getElementById('orig_bill').value = dates;
  } 
  else if (e.altKey && e.which == 49)
  {
   var tt = document.getElementById('orig_bill').value;
   var startdate = tt;
   var new_date = moment(startdate, "DD-MM-YYYY").add('days',-1);
   var day = new_date.format('DD');
   var month = new_date.format('MM');
   var year = new_date.format('YYYY');
   var dates=day + '-' + month + '-' + year;
   document.getElementById('orig_bill').value = dates;
  }
}
});

$('#effective_date').focus(function() {
document.onkeyup = function(e) {
  if (e.altKey && e.which == 50) {
   var tt = document.getElementById('effective_date').value;
   var startdate = tt;
   var new_date = moment(startdate, "DD-MM-YYYY").add('days',1);
   var day = new_date.format('DD');
   var month = new_date.format('MM');
   var year = new_date.format('YYYY');
   var dates=day + '-' + month + '-' + year;
   document.getElementById('effective_date').value = dates;
  } 
  else if (e.altKey && e.which == 49)
  {
   var tt = document.getElementById('effective_date').value;
   var startdate = tt;
   var new_date = moment(startdate, "DD-MM-YYYY").add('days',-1);
   var day = new_date.format('DD');
   var month = new_date.format('MM');
   var year = new_date.format('YYYY');
   var dates=day + '-' + month + '-' + year;
   document.getElementById('effective_date').value = dates;
  }
}
});
</script>
<script>
function load_equipment(data,count,transaction,type)
{
$(".equipment"+count).val(data);


$(".transaction"+count).val(transaction);

$(".type"+count).val(type);
return '1';
   jQuery("#Carrier").prepend('<div id="preloader">Loading...</div>');
   jQuery(document).ready(function() {
        jQuery("#preloader").remove();
    });
}
</script>



<script>
function dropdown_list()
{
var otherssg=1;
$('#tradingpartnet_insert').load('<?php echo base_url("User/abcd")?>',{"otherssg":otherssg});
$('#tradingpartnet_receiver').load('<?php echo base_url("User/receiver_tp")?>',{"otherssg":otherssg});
$('#carrierid').load('<?php echo base_url("User/carrierlist")?>',{"otherssg":otherssg});
}
</script>

<script>
function dropdown_lists(count,datas,receiver_tp,carri)
{

var otherss=count;
var receiver_tp=receiver_tp;
var carri=carri;
$("#trading_partner_names"+count).load('<?php echo base_url("User/abc")?>',{"otherss":otherss,"datas":datas});
$("#receiver_tps"+count).load('<?php echo base_url("User/receiver_tps")?>',{"otherss":otherss,"receiver_tp":receiver_tp});
$("#carrierlists"+count).load('<?php echo base_url("User/carrierlists")?>',{"otherss":otherss,"carri":carri});
}
</script>
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
<script src="<?php echo base_url('assets/plugins2/datatables/jszip.min.js')?>"></script>
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
<!-- App js-->
 <script src="<?php echo base_url('assets/js/jquery.core.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.app.js')?>"></script> 
    </body>
</html>