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
	<?php
	$sender=$this->User_Model->fetch_trading_partner_sender();
	?>
    <body class="fixed-left" >
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
		                                    <th>Sender Receiver</th>
                                            <th data-breakpoints="xs">Trading Partner</th>
                                            <th data-breakpoints="xs sm md">Default</th>
                                            <th data-breakpoints="xs sm md">Phone No.</th>
                                            <th data-breakpoints="xs sm md">Mobile No.</th>
                                            <th data-breakpoints="xs sm md">Email</th>
                                            <th data-breakpoints="xs sm md">active</th>
                                                                                    
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

              <!--  $this->load->view('headerfile/footer');-->

            </div>

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
<script type="text/javascript" language="javascript" >
$(document).ready(function(){
  function load_data()
  {
	  
    $.ajax({
    //url:"<?php echo base_url(); ?>livetable/load_data",
      url:"<?php echo base_url('User/load_senderrec')?>",
      dataType:"JSON",
      success:function(data){
        var html = '<tr>';
        html += '<td id="sender_receiver_name" contenteditable></td>';
        html += '<td contenteditable id="tradingpartnet_insert"></td>'; 
        html += '<td id="defaults" contenteditable></td>';
        html += '<td id="phone_number" contenteditable></td>';
        html += '<td id="mobile_number" contenteditable></td>';
        html += '<td id="email" contenteditable></td>';
        html += '<td id="active" contenteditable></td>';
        html += '<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-plus"></span></button></td></tr>';
		   var a = 1;
           var all = new Array();
        for(var count = 0; count < data.length; count++)
        {
			//var x='Allseps';
			var x =  data[count].trading_partner_name;
			 all[count]=x;
			
           html += '<tr>';
           html+='<td hidden ><input hidden   type="text" class="idss'+data[count].metaid+'" value="'+data[count].sender_receiver_id+'"></td>';
           html += '<td  data-row_id="'+data[count].metaid+'" class="sender_receiver_edit"  data-column_name="sender_receiver_name" id="sender_receiver_name'+data[count].metaid+'" contenteditable>'+data[count].sender_receiver_name+'</td>';
		   html += '<td  data-row_id="'+data[count].metaid+'"   data-column_name="trading_partner_name" id="trading_partner_names'+data[count].metaid+'"  contenteditable></td>';
           html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="defaults" id="defaults'+data[count].metaid+'" contenteditable>'+data[count].defaults+'</td>';
		   html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="phone_number" class="sender_receiver_edit" id="phone_number'+data[count].metaid+'" contenteditable>'+data[count].phone_number+'</td>';
		   html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="mobile_number" class="sender_receiver_edit" id="mobile_number'+data[count].metaid+'" contenteditable>'+data[count].mobile_number+'</td>';
		   html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="email" class="sender_receiver_edit" id="email'+data[count].metaid+'" contenteditable>'+data[count].email+'</td>';
		   html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="active" id="active'+data[count].metaid+'" contenteditable>'+data[count].active+'</td>';
           html += '<td><button type="button" name="delete_btn" id="'+data[count].metaid+'" class="btn btn-xs btn-danger btn_delete"><span class="glyphicon glyphicon-remove"></span></button></td>'
		   // html += '<td><button type="button" name="table_data" id="'+data[count].metaid+'" class="btn btn-xs btn-info table_data"><span class="glyphicon glyphicon-pencil"></span></button></td></tr>';
        }
        $('tbody').html(html);
       for(var count = 0; count < data.length; count++)
        {	
               // xyzz(all[count],count);
				var metaids=data[count].metaid;
               //    alert(metaids);	
               dropdown_lists(metaids,all[count]);				   
		}	
          dropdown_list();		
      }
    });
  }
  load_data();

   $(document).on('change', '.sender_edit_select', function(){
    var Dates = $(this).val();
    var id = $(this).attr('id');
    var res = id.substring(0, 4);
    var ress = id.substring(20, 29);
    var ids = $(".idss"+ress).val(); 
    // console.log(Dates);return;
    $.ajax({
      url:"<?php echo base_url('Edit/update_sender_receiver')?>",
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


  $(document).on('keyup', '.sender_receiver_edit', function(){

          var Dates = $(this).text();
          var id = $(this).attr('id');
          var res = id.substring(0, 4);
         
              if( res == 'send'){
                var ress = id.substring(20, 25);
               }
              else if ( res == 'phon'){
                var ress = id.substring(12, 18);
                } 
              else if ( res == 'mobi'){
                var ress = id.substring(13, 18);
                }
              else if ( res == 'emai'){
                var ress = id.substring(5, 18);
                } 
              else {
                var ress = '';
                }            

          var ids = $(".idss"+ress).val();
          
          $.ajax({
            url:"<?php echo base_url('Edit/update_sender_receiver')?>",
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
    var sender_receiver_name = $('#sender_receiver_name').text();
	var trading_partner_name=$('#trading_partner_name_one').val();

    var defaults = $('#defaults').text();
    var phone_number = $('#phone_number').text();
    var mobile_number = $('#mobile_number').text();
    var email = $('#email').text();
    var active = $('#active').text();
    if(sender_receiver_name== '')
    {
      alert('Enter Sender/Receiver ');
      return false;
    }
    $.ajax({
      url:"<?php echo base_url(); ?>User/insert_senderss",
      method:"POST",
      data:{sender_receiver_name:sender_receiver_name, trading_partner_name:trading_partner_name, defaults:defaults,phone_number:phone_number,mobile_number:mobile_number,email:email,active:active},
      success:function(data){
		
        load_data();
      }
    })
  });
    $(document).on('click', '.table_data', function(){
	var id = $(this).attr('id');
    var sender_receiver_name = $('#sender_receiver_name'+id).text();
	var trading_partner_name=$('#trading_partner_name'+id).val();
	alert(trading_partner_name);
    var defaults = $('#defaults'+id).text();
    var phone_number = $('#phone_number'+id).text();
    var mobile_number = $('#mobile_number'+id).text();
    var email = $('#email'+id).text();
    var active = $('#active'+id).text();
    $.ajax({
      url:"<?php echo base_url('User/update_senderss')?>",
      method:"POST",
            data:{id:id,sender_receiver_name:sender_receiver_name, trading_partner_name:trading_partner_name, defaults:defaults,phone_number:phone_number,mobile_number:mobile_number,email:email,active:active},
      success:function(data)
      {
        load_data();
      }
    })
  });
  $(document).on('click', '.btn_delete', function(){
    var id = $(this).attr('id');
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
		 url:"<?php echo base_url('User/delete_sender_receivers')?>",
      
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
function xyzz(data,count)
{
$(".trading_partner_name"+count).val(data);
return '1';
//alert('jjj');
}
</script> 
<script>
function dropdown_list()
{
var otherssg=1;
$('#tradingpartnet_insert').load('<?php echo base_url("User/abcd")?>',{"otherssg":otherssg});
}
</script>

<script>
function dropdown_lists(count,datas)
{
var otherss=count;
$("#trading_partner_names"+count).load('<?php echo base_url("User/abcs")?>',{"otherss":otherss,"datas":datas});
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