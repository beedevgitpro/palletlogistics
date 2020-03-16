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
.content-pages .content {
    padding: 0 5px 10px 5px;
    margin-top: -19px;
}
input[type="checkbox"]{
  width: 30px; /*Desired width*/
  height: 30px; /*Desired height*/
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
        <span id="f"></span>
        <thead>
      <tr>
<th data-breakpoints="xs">Details</th>
<th data-breakpoints="xs">Date</th>
<th data-breakpoints="xs">Trading Partner</th>
<th data-breakpoints="xs sm md">Equipment</th>
<th data-breakpoints="xs sm md">Book Stock</th>
<th data-breakpoints="xs sm md">Physical Stock</th>
<th data-breakpoints="xs sm md">Shrinkage</th>
<th data-breakpoints="xs sm md">Reported Variance</th>
<th data-breakpoints="xs sm md">Receiving Tp</th>
<th data-breakpoints="xs sm md">Note</th>
<th data-breakpoints="xs sm md">Delete</th>
<!-- <th data-breakpoints="xs sm md">Update</th> -->
</tr>
        </thead>
        <tbody>
        </tbody>
      </table>   
    </div> 
  </div> <!-- container -->
 </div> <!-- content -->

               <?php //$this->load->view('headerfile/footer');?>
</div>
</div>
</div>
</div>
</div>
                         <div class="row card-box">
                            <div class="col-lg-3">
							</div>
                                <div class="col-lg-9">
                                    <button type="button" id="one" class="btn equipment-receive">Equipment Received</button>&nbsp;&nbsp;
                                    <button type="button" id="two" class="btn equipment-sent">Equipment Sent</button>&nbsp;&nbsp;
                                    <button type="button" id="three" class="btn counts">Counts</button>&nbsp;&nbsp;
                                    <button type="button" id="fourth" class="btn created">Created By User</button>
                                
								
                                </div>
                          </div>
						  <div id="second-table"></div>
        <script>
            var resizefunc = [];
        </script>

				  <?php
$result=$this->User_Model->fetch_equipment();
$sender=$this->User_Model->fetch_trading_partner_senderee();
// $receiver=$this->User_Model->get_sender_reciever();
// $transaction=$this->User_Model->fetch_transaction();
// $carrier=$this->User_Model->get_carriers();
// $type=$this->User_Model->movement_type();
?>  
<script type="text/javascript" language="javascript" >
$(document).ready(function(){ 
  function load_data()
  {
    $.ajax({
      url:"<?php echo base_url('User/get_stocktake_json')?>",
      dataType:"JSON",
      success:function(data){
        var html = '<tr>';
		html += '<td></td>';
        html += '<td id="Date" contenteditable placeholder="Enter First Name"><?php echo date("d-m-Y")?></td>';
        html += '<td id="tradingpartnet_insert" contenteditable></td>';
        html += '<td  contenteditable><select class="form-control" id="equipment"><?php foreach($result as $rowss) { ?> <option value="<?php echo $rowss->equipment; ?>"><?php echo $rowss->equipment; ?></option> <?php } ?></select></td>';
        html += '<td id="book_stock" contenteditable></td>';
        html += '<td id="physical_stock" contenteditable></td>';
        html += '<td id="shrinkage" contenteditable></td>';
        html += '<td id="reported_variance" contenteditable></td>';
        html += '<td id="tradingpartnet_second" contenteditable></td>';
        html += '<td id="notes" contenteditable></td>';
        html += '<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-plus"></span></button></td></tr>';
		var equiee = new Array();
		var sender_tp = new Array();
		var receiver_tp = new Array();
        for(var count = 0; count < data.length; count++)
        {
		  var x =  data[count].trading_partner;
          var y =  data[count].equipment; 
          var z =  data[count].receiving_tp;        
		  sender_tp[count]=x;
		  equiee[count]=y;
		  receiver_tp[count]=z;
          html += '<tr>';
          html+='<td  hidden ><input hidden   type="text" class="idss'+data[count].metaid+'" value="'+data[count].id+'"></td>';
		  html += '<td><input type="checkbox" name="cb1"  id="'+data[count].metaid+'" class="chb btn btn-xs btn-info cha_id"></td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="Date" id="Date'+data[count].metaid+'" contenteditable>'+data[count].date+'</td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="trading_partner" id="trading_partner_names'+data[count].metaid+'" contenteditable></td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="equipment"  contenteditable><select class="form-control stocktakes_edit_select equipment'+count+'" id="equipment'+data[count].metaid+'"><?php foreach($result as $rowss) { ?> <option value="<?php echo $rowss->equipment; ?>"><?php echo $rowss->equipment; ?></option> <?php } ?></select></td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="book_stock" class="edit_stocktakes" id="book_stock'+data[count].metaid+'" contenteditable>'+data[count].book_stock+'</td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="physical_stock" class="edit_stocktakes" id="physical_stock'+data[count].metaid+'" contenteditable>'+data[count].physical_stock+'</td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="shrinkage" class="edit_stocktakes" id="shrinkage'+data[count].metaid+'" contenteditable>'+data[count].shrinkage+'</td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="reported_variance" class="edit_stocktakes" id="reported_variance'+data[count].metaid+'" contenteditable>'+data[count].reported_variance+'</td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="receiving_tp"  contenteditable><select class="form-control stocktakes_edit_select receiver_tp'+count+'" id="receiving_tp'+data[count].metaid+'"><?php foreach($sender as $row) { ?> <option value="<?php echo $row->tp_name; ?>"><?php echo $row->tp_name; ?></option> <?php } ?></select></td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="notes" class="edit_stocktakes" id="notes'+data[count].metaid+'" contenteditable>'+data[count].notes+'</td>';
		   html += '<td><button type="button" name="delete_btn" id="'+data[count].metaid+'" class="btn btn-xs btn-danger btn_delete"><span class="glyphicon glyphicon-remove"></span></button></td>';
		   // html += '<td><button type="button" name="table_data" id="'+data[count].metaid+'" class="btn btn-xs btn-info table_data"><span class="glyphicon glyphicon-pencil"></span></button></td></tr>';
           }
        $('tbody').html(html);
		   for(var count = 0; count < data.length; count++)
           {	
                load_equipment(sender_tp[count],count,equiee[count],receiver_tp[count]);
				  var metaids=data[count].metaid;
                  dropdown_lists(metaids,sender_tp[count]);				
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

   $(document).on('change', '.stocktakes_edit_select', function(){
    var Dates = $(this).val();
    var id = $(this).attr('id');
    var res = id.substring(0, 4);

    if( res == 'trad' ){
       var ress = id.substring(20, 29);
    }
    else if( res == 'equi' ){
       var ress = id.substring(9, 29);  
    }
    else if( res == 'rece' ){
       var ress = id.substring(12, 29);
        
    }
   
    var ids = $(".idss"+ress).val(); 
    console.log( ids );
    $.ajax({
      url:"<?php echo base_url('Edit/update_stocktakes')?>",
      method:"POST",
      data:{Dates:Dates,ids:ids,res:res},
      success:function(data)
      {
        if( data == 'success' ){
          // alert( "Data Updated Successfully ");
          $("#f").html('Data updated Successfully');
        }
        else{
          alert( "Data Not Updated ");
        }
        console.log( data );
        // load_data();
      }
    })
  });

   $(document).on('keyup', '.edit_stocktakes', function(){

          var Dates = $(this).text();
          var id = $(this).attr('id');
          var res = id.substring(0, 4);
          
              if( res == 'book'){
                 var ress = id.substring(10, 25);
               }
              else if ( res == 'phys'){
                 var ress = id.substring(14, 20);
                } 
              else if ( res == 'shri'){
                 var ress = id.substring(9, 26);
                }
              else if ( res == 'repo'){
                 var ress = id.substring(17, 22);
                } 
              else if ( res == 'note'){
                 var ress = id.substring(5, 18);
                }
              else {
                 var ress = '';
                }            

          var ids = $(".idss"+ress).val();
          $.ajax({
            url:"<?php echo base_url('Edit/update_stocktakes')?>",
            method:"POST",
            data:{Dates:Dates,ids:ids,res:res},
            success:function(data)
            {
              if( data == 'success' ){
                // alert( "Data Updated Successfully ");
                 $("#f").html('Data updated Successfully');  
              }
              else{
               alert( "Data Not Updated ");
              }
            }
          })
    });

  $(document).on('click', '#btn_add', function(){
    var Date = $("#Date").text();
	var trading_partner=$('#trading_partner_name_one').val();
    // var equipment = $('#equipment').text();
    var equipment=$('#equipment').val();
    var book_stock = $('#book_stock').text();
    var physical_stock = $('#physical_stock').text();
    var shrinkage = $('#shrinkage').text();
    var reported_variance = $('#reported_variance').text();
    var receiving_tp = $('#receiving_tp').val();
    var notes = $('#notes').text();
  // alert(equipment);
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
    $.ajax({
      url:"<?php echo base_url(); ?>User/insert_stocktakes",
      method:"POST",
      data:{Date:Date, trading_partner:trading_partner, equipment:equipment,book_stock:book_stock,physical_stock:physical_stock, shrinkage:shrinkage, reported_variance:reported_variance,receiving_tp:receiving_tp,notes:notes},
      success:function(data){
		    //alert(data);
			//$("#").load('<?php echo base_url("User/abc")?>',{"otherss":data,"datas":data});
             load_data();
      }
    })
  });

   $(document).on('click', '.table_data', function(){
    var id = $(this).attr('id');
    var Date = $("#Date"+id).text();
    var trading_partner = $('#trading_partner_name'+id).val();
    var equipment = $('#equipment'+id).val();
    var book_stock = $('#book_stock'+id).text();
    var physical_stock = $('#physical_stock'+id).text();
    var shrinkage = $('#shrinkage'+id).text();
    var reported_variance = $('#reported_variance'+id).text();
    var receiving_tp = $('#receiving_tp'+id).val();
    var notes = $('#notes'+id).text();
	//alert(equipments);
    $.ajax({
      url:"<?php echo base_url('User/update_stoketake')?>",
      method:"POST",
          data:{id:id,Date:Date, trading_partner:trading_partner, equipment:equipment,book_stock:book_stock,physical_stock:physical_stock, shrinkage:shrinkage, reported_variance:reported_variance,receiving_tp:receiving_tp,notes:notes},
      success:function(data)
      {
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
		 url:"<?php echo base_url('User/dalete_stocktake')?>",
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
    $(document).on('click', '.details', function(){
    var id = $(this).attr('id');
          alert(id);
          $("#second-table").load('<?php echo base_url("User/stock_one")?>',{"id":id});
    
  }); 
$(document).on('change', '.cha_id', function() {
    if(this.checked) {
     var id = $(this).attr('id');
	 document.getElementById("myOutput").value = id;
    }
}); 
$(document).on('click', '.equipment-receive', function() {
  var equipment_id = document.getElementById("myOutput").value;

 $("#second-table").load('<?php echo base_url("User/stock_one")?>',{"equipment_id":equipment_id});
 });
$(document).on('click', '.equipment-sent', function() {
  var eq_sent_id = document.getElementById("myOutput").value;
 $("#second-table").load('<?php echo base_url("User/stock_one")?>',{"eq_sent_id":eq_sent_id});	  
		  
}); 

$(document).on('click', '.counts', function() {
  var counts_id = document.getElementById("myOutput").value;
 $("#second-table").load('<?php echo base_url("User/stock_one")?>',{"counts_id":counts_id});	  
		  
}); 
$(document).on('click', '.created', function() {
  var created_id = document.getElementById("myOutput").value;
 $("#second-table").load('<?php echo base_url("User/stock_one")?>',{"created_id":created_id});	  
		  
}); 


});
</script>

<script>
function detailsone()
{
	
}
</script>
  <input type="hidden" id="myOutput">


<!-- <script>
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
</script> --->
<script>
function dropdown_list()
{
var otherssg=1;
$('#tradingpartnet_insert').load('<?php echo base_url("User/abcd")?>',{"otherssg":otherssg});
$('#tradingpartnet_second').load('<?php echo base_url("User/tp_second")?>',{"otherssg":otherssg});
}
</script>
<script>
function dropdown_lists(count,datas)
{
var otherss=count;
//alert(datas);
$("#trading_partner_names"+count).load('<?php echo base_url("User/abc")?>',{"otherss":otherss,"datas":datas});
}
</script>

<script>
function load_equipment(sender_tp,count,equiee,receiver_tp)
{
$(".equipment"+count).val(equiee);
$(".senders_tp"+count).val(sender_tp);
$(".receiver_tp"+count).val(receiver_tp);
//$(".transaction"+count).val(transaction);
//$(".carrier"+count).val(carrier);
//$(".type"+count).val(type);
return '1';
	//alert('jjj');
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
<!-- App js -->
<script src="<?php echo base_url('assets/js/jquery.core.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.app.js')?>"></script>
    </body>
</html>