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



                                            <th >Third Party Name</th>
											<th data-breakpoints="xs">Supplier</th>
                                            <th data-breakpoints="xs sm md">Account Number</th>
											<th data-breakpoints="xs sm md">Tn Delay Rule</th>
											<th data-breakpoints="xs sm md">Allow Tf</th>
											<th data-breakpoints="xs sm md">Tf Delay Type</th>
                                            <th data-breakpoints="xs sm md">Tf Delay Days</th>
											<th data-breakpoints="xs sm md">Tf Delay Rule</th>
                                            <th data-breakpoints="xs sm md">Redeem Exchange</th>
                                            <th data-breakpoints="xs sm md">Redeem Same</th>
                                            <th data-breakpoints="xs sm md">Complete</th>
                                            <th data-breakpoints="xs sm md">Override Export Status</th>
                                            <th data-breakpoints="xs sm md">Export On</th>
                                            <th data-breakpoints="xs sm md">Export Off</th>
                                            <th data-breakpoints="xs sm md">Docket Format</th>
                                            <th data-breakpoints="xs sm md">Con Note Required</th>
                                            <th data-breakpoints="xs sm md">Con Note Characters</th>
                                            <th data-breakpoints="xs sm md">Con Note Numeric</th>
                                            <th data-breakpoints="xs sm md">Con Note Decription</th>
                                      
                                            <th data-breakpoints="xs sm md">Reminder</th>
                                            <th data-breakpoints="xs sm md">Notes</th>
                                            <th data-breakpoints="xs sm md">Status</th>

</tr>
        </thead>
        <tbody>
        </tbody>
      </table>   
    </div> 
  </div> <!-- container -->

                </div> <!-- content -->

                <!--$this->load->view('headerfile/footer');-->

            </div>

</div>
</div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

</div>


        <script>
            var resizefunc = [];
        </script>

       
        
       
				  <?php
$result=$this->User_Model->fetch_equipment();
$sender=$this->User_Model->fetch_trading_partner_sender();
$suplier=$this->User_Model->fetch_trading_partner_supply();
$profile=$this->User_Model->get_profile();
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
      url:"<?php echo base_url('User/get_tp_accounts_json')?>",
      dataType:"JSON",
      success:function(data){
        var html = '<tr>';
        html += '<td  contenteditable placeholder="Enter First Name"><select class="form-control" id="tpa_third_party"><?php foreach($sender as $row) { ?> <option value="<?php echo $row->tp_name;; ?>"><?php echo $row->tp_name; ?></option> <?php } ?></select></td>';
        html += '<td   contenteditable><select class="form-control" id="tpa_supplier"><?php foreach($suplier as $row) { ?> <option value="<?php echo $row->supplier_name; ?>"><?php echo $row->supplier_name; ?></option> <?php } ?></select></td>';
        html += '<td id="tpa_account_number" contenteditable></td>';
        html += '<td id="tpa_tn_delay_rule" contenteditable></td>';
        html += '<td id="tpa_allow_tf" contenteditable></td>';
        html += '<td id="tpa_tf_delay_type" contenteditable></td>';
        html += '<td id="tpa_tf_delay_days" contenteditable></td>';
        html += '<td  contenteditable id="tpa_tf_delay_rule"></td>';
        html += '<td id="tpa_redeem_exchange" contenteditable></td>';
        html += '<td id="tpa_redeem_same" contenteditable></td>';
        html += '<td id="tpa_complete" contenteditable></td>';
        html += '<td id="tpa_override_export_status" contenteditable></td>';
        html += '<td id="tpa_export_on" contenteditable></td>';
        html += '<td id="tpa_export_off" contenteditable></td>';
        html += '<td id="tpa_docket_format" contenteditable></td>';
        html += '<td id="tpa_con_note_required" contenteditable></td>';
        html += '<td id="tpa_con_note_characters" contenteditable></td>';
        html += '<td id="tpa_con_note_numeric" contenteditable></td>';
        html += '<td id="tpa_con_note_decription" contenteditable></td>';
        html += '<td id="tpa_reminder" contenteditable></td>';
        html += '<td id="tpa_notes" contenteditable></td>';
      
        html += '<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-plus"></span></button></td></tr>';
        for(var count = 0; count < data.length; count++)
        {
          html += '<tr>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="tpa_third_party" id="tpa_third_party'+data[count].metaid+'" contenteditable>'+data[count].tpa_third_party+'</td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="tpa_supplier" id="tpa_supplier'+data[count].metaid+'" contenteditable>'+data[count].tpa_supplier+'  </td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="tpa_account_number" id="tpa_account_number'+data[count].metaid+'" contenteditable>'+data[count].tpa_account_number+'</td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="tpa_tn_delay_rule" id="tpa_tn_delay_rule'+data[count].metaid+'" contenteditable>'+data[count].tpa_tn_delay_rule+'</td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="tpa_allow_tf" id="tpa_allow_tf'+data[count].metaid+'" contenteditable>'+data[count].tpa_allow_tf+'</td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="tpa_tf_delay_type" id="tpa_tf_delay_type'+data[count].metaid+'" contenteditable>'+data[count].tpa_tf_delay_type+'</td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="tpa_tf_delay_days" id="tpa_tf_delay_days'+data[count].metaid+'" contenteditable>'+data[count].tpa_tf_delay_days+'</td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="tpa_tf_delay_rule" id="tpa_tf_delay_rule'+data[count].metaid+'" contenteditable>'+data[count].tpa_tf_delay_rule+'</td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="tpa_redeem_exchange" id="tpa_redeem_exchange'+data[count].metaid+'" contenteditable>'+data[count].tpa_redeem_exchange+'</td>';
		  html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="tpa_redeem_same" id="tpa_redeem_same'+data[count].metaid+'" contenteditable>'+data[count].tpa_redeem_same+'</td>';
		  html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="tpa_complete" id="tpa_complete'+data[count].metaid+'" contenteditable>'+data[count].tpa_complete+'</td>';
		  html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="tpa_override_export_status" id="tpa_override_export_status'+data[count].metaid+'" contenteditable>'+data[count].tpa_override_export_status+'</td>';
		  html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="tpa_export_on" id="tpa_export_on'+data[count].metaid+'" contenteditable>'+data[count].tpa_export_on+'</td>';
		  
		  
		  
		  html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="tpa_export_off" id="tpa_export_off'+data[count].metaid+'" contenteditable>'+data[count].tpa_export_off+'</td>';
		  html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="tpa_docket_format" id="tpa_docket_format'+data[count].metaid+'" contenteditable>'+data[count].tpa_docket_format+'</td>';
		  html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="tpa_con_note_required" id="tpa_con_note_required'+data[count].metaid+'" contenteditable>'+data[count].tpa_con_note_required+'</td>';
		  html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="tpa_con_note_characters" id="tpa_con_note_characters'+data[count].metaid+'" contenteditable>'+data[count].tpa_con_note_characters+'</td>';
		  html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="tpa_con_note_numeric" id="tpa_con_note_numeric'+data[count].metaid+'" contenteditable>'+data[count].tpa_con_note_numeric+'</td>';
		  html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="tpa_con_note_decription" id="tpa_con_note_decription'+data[count].metaid+'" contenteditable>'+data[count].tpa_con_note_decription+'</td>';
		  
		  html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="tpa_reminder" id="tpa_reminder'+data[count].metaid+'" contenteditable>'+data[count].tpa_reminder+'</td>';
		  
		  html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="tpa_notes" id="tpa_notes'+data[count].metaid+'" contenteditable>'+data[count].tpa_notes+'</td>';
		 
		  
		  
		   html += '<td><button type="button" name="delete_btn" id="'+data[count].metaid+'" class="btn btn-xs btn-danger btn_delete"><span class="glyphicon glyphicon-remove"></span></button></td>'
		   html += '<td><button type="button" name="table_data" id="'+data[count].metaid+'" class="btn btn-xs btn-info table_data"><span class="glyphicon glyphicon-pencil"></span></button></td>';
        }
        $('tbody').html(html);
      }
    });
  }
  load_data();
  $(document).on('click', '#btn_add', function(){
    var tpa_third_party = $("#tpa_third_party").val();
	var tpa_supplier=$('#tpa_supplier').val();
    var tpa_account_number = $('#tpa_account_number').text();
    var tpa_tn_delay_rule = $('#tpa_tn_delay_rule').text();
    var tpa_allow_tf = $('#tpa_allow_tf').text();
    var tpa_tf_delay_type=$('#tpa_tf_delay_type').val();
    var tpa_tf_delay_days = $('#tpa_tf_delay_days').text();
    var tpa_tf_delay_rule = $('#tpa_tf_delay_rule').text();
    var tpa_redeem_exchange = $('#tpa_redeem_exchange').text();
    var tpa_redeem_same = $('#tpa_redeem_same').text();
    var tpa_complete = $('#tpa_complete').text();
    var tpa_override_export_status = $('#tpa_override_export_status').text();
    var tpa_export_on = $('#tpa_export_on').text();
    var tpa_export_off = $('#tpa_export_off').text();
    var tpa_docket_format = $('#tpa_docket_format').text();
    var tpa_con_note_required = $('#tpa_con_note_required').text();
    var tpa_con_note_characters = $('#tpa_con_note_characters').text();
    var tpa_con_note_numeric = $('#tpa_con_note_numeric').text();
    var tpa_con_note_decription = $('#tpa_con_note_decription').text();
    var tpa_reminder = $('#tpa_reminder').text();
    var tpa_notes = $('#tpa_notes').text();
  // alert(equipment);
    if(tpa_third_party== '')
    {
      alert('Enter Third Party');
      return false;
    }
    if(tpa_supplier == '')
    {
      alert('Enter Supplier');
      return false;
    }
    $.ajax({
      url:"<?php echo base_url(); ?>User/insert_tp_accountss",
      method:"POST",
      data:{tpa_third_party:tpa_third_party, tpa_supplier:tpa_supplier, tpa_account_number:tpa_account_number,tpa_tn_delay_rule:tpa_tn_delay_rule,tpa_allow_tf:tpa_allow_tf, tpa_tf_delay_type:tpa_tf_delay_type, tpa_tf_delay_days:tpa_tf_delay_days,tpa_tf_delay_rule:tpa_tf_delay_rule,tpa_redeem_exchange:tpa_redeem_exchange,tpa_redeem_same:tpa_redeem_same,tpa_complete:tpa_complete,tpa_override_export_status:tpa_override_export_status,tpa_export_on:tpa_export_on,tpa_export_off:tpa_export_off,tpa_docket_format:tpa_docket_format,tpa_con_note_required:tpa_con_note_required,tpa_con_note_characters:tpa_con_note_characters,tpa_con_note_numeric:tpa_con_note_numeric,tpa_con_note_decription:tpa_con_note_decription,tpa_reminder:tpa_reminder,tpa_notes:tpa_notes},
      success:function(data){
        load_data();
      }
    })
  });

   $(document).on('click', '.table_data', function(){
   var id = $(this).attr('id');
   // var Date = $("#Date"+id).text();
    var tpa_third_party = $("#tpa_third_party"+id).text();
	var tpa_supplier=$('#tpa_supplier'+id).text();
    var tpa_account_number = $('#tpa_account_number'+id).text();
    var tpa_tn_delay_rule = $('#tpa_tn_delay_rule'+id).text();
    var tpa_allow_tf = $('#tpa_allow_tf'+id).text();
    var tpa_tf_delay_type=$('#tpa_tf_delay_type'+id).val();
    var tpa_tf_delay_days = $('#tpa_tf_delay_days'+id).text();
    var tpa_tf_delay_rule = $('#tpa_tf_delay_rule'+id).text();
    var tpa_redeem_exchange = $('#tpa_redeem_exchange'+id).text();
    var tpa_redeem_same = $('#tpa_redeem_same'+id).text();
    var tpa_complete = $('#tpa_complete'+id).text();
    var tpa_override_export_status = $('#tpa_override_export_status'+id).text();
    var tpa_export_on = $('#tpa_export_on'+id).text();
    var tpa_export_off = $('#tpa_export_off'+id).text();
    var tpa_docket_format = $('#tpa_docket_format'+id).text();
    var tpa_con_note_required = $('#tpa_con_note_required'+id).text();
    var tpa_con_note_characters = $('#tpa_con_note_characters'+id).text();
    var tpa_con_note_numeric = $('#tpa_con_note_numeric'+id).text();
    var tpa_con_note_decription = $('#tpa_con_note_decription'+id).text();
    var tpa_reminder = $('#tpa_reminder'+id).text();
    var tpa_notes = $('#tpa_notes'+id).text();

	//alert(equipments);
    $.ajax({
      url:"<?php echo base_url('User/update_accountsss')?>",
      method:"POST",
            data:{id:id,tpa_third_party:tpa_third_party, tpa_supplier:tpa_supplier, tpa_account_number:tpa_account_number,tpa_tn_delay_rule:tpa_tn_delay_rule,tpa_allow_tf:tpa_allow_tf, tpa_tf_delay_type:tpa_tf_delay_type, tpa_tf_delay_days:tpa_tf_delay_days,tpa_tf_delay_rule:tpa_tf_delay_rule,tpa_redeem_exchange:tpa_redeem_exchange,tpa_redeem_same:tpa_redeem_same,tpa_complete:tpa_complete,tpa_override_export_status:tpa_override_export_status,tpa_export_on:tpa_export_on,tpa_export_off:tpa_export_off,tpa_docket_format:tpa_docket_format,tpa_con_note_required:tpa_con_note_required,tpa_con_note_characters:tpa_con_note_characters,tpa_con_note_numeric:tpa_con_note_numeric,tpa_con_note_decription:tpa_con_note_decription,tpa_reminder:tpa_reminder,tpa_notes:tpa_notes},
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
		 url:"<?php echo base_url('User/dalete_tp_accounts')?>",
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
  
});
</script>
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