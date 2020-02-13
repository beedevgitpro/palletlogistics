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
<link href="<?php echo base_url('assets/plugins2/datatables/jquery.dataTables.min.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('assets/plugins2/datatables/buttons.bootstrap.min.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('assets/plugins2/datatables/fixedHeader.bootstrap.min.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('assets/plugins2/datatables/responsive.bootstrap.min.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('assets/plugins2/datatables/scroller.bootstrap.min.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('assets/plugins2/datatables/dataTables.colVis.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('assets/plugins2/datatables/dataTables.bootstrap.min.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('assets/plugins2/datatables/fixedColumns.dataTables.min.css')?>" rel="stylesheet" type="text/css"/>


<!-- App css -->
<link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/core.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/components.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/icons.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/pages.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/menu.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/responsive.css')?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url('assets/plugins2/switchery/switchery.min.css')?>">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/plugins2/footable/footable.bootstrap.min.css')?>">

<script src="<?php echo base_url('assets/js/modernizr.min.js')?>"></script>

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
<h4 class="page-title">Pallet Logistics</h4><span style="margin-left:100px;"><?php echo $this->session->flashdata('message');?></span>
<ol class="breadcrumb p-0 m-0">
<li>
<a href="<?php echo base_url('User/dashboard')?>">Trading Partner</a>
</li>
<li>
<a href="<?php echo base_url('User/view_member')?>">View Trading Partner</a>
</li>

</ol>
<div class="clearfix"></div>
</div>
</div>
</div>
<!-- end row -->





<div class="row">
<div class="col-sm-12">
<div class="card-box table-responsive">

<h4 class="m-t-0 header-title"><b>  </b></h4>
<style>
.icon-bar {
  position: fixed;
  top: 27.5%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  z-index: 9;
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 6px 28px;
  transition: all 0.3s ease;
  color: white;
  font-size: 17px;
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

.linkedin {
  background: #007bb5;
  color: white;
}

.youtube {
  background: #bb0000;
  color: white;
}

ul.icon_line li {
    display: inline-block;
}
ul.icon_line {
    list-style: none;
    display: block;
    padding: 0;
}
tr.highlighted td {
    background: #6b6868;
	color: white;
}
</style>
<script>
function scriptss(data)
{
var cha_iddd = 1;
var strss='shows' + cha_iddd;
alert(strss);
 $("tr").removeClass("p");
$(".show1").show();
//$(".p").hide();
}
</script>


<table id="_datatable-buttons" class="footable table table-striped  table-colored table-info footable-info table-bordered m-0" data-toggle-column="first" data-paging="true">
<thead>
<tr>


<th>Trading Partner Name</th>
<th data-breakpoints="xs">Type</th>
<th data-breakpoints="xs sm md">Code</th>
<th data-breakpoints="xs sm md">Email Id</th>
<th data-breakpoints="xs sm md">Notify</th>
<th data-breakpoints="xs sm md">Phone Number</th> 
<th data-breakpoints="xs sm md">Internal</th>
<th data-breakpoints="xs sm md">Primary</th>
<th data-breakpoints="xs sm md">Last Movement Date</th>
<th data-breakpoints="xs sm md">Special</th>
<th data-breakpoints="xs sm md">Location</th>
<th data-breakpoints="xs sm md">Licence No.</th>
<th data-breakpoints="xs sm md">Expiry Date</th>
<th data-breakpoints="xs sm md">Active</th>
<th data-breakpoints="xs sm md">Notes</th>
<th data-breakpoints="xs sm md">Delete</th>
<th data-breakpoints="xs sm md">Update</th>
</tr>
        </thead>
        <tbody>
        </tbody>
      </table>   
    </div> 
  </div> <!-- container -->

                </div> <!-- content -->

               <?php $this->load->view('headerfile/footer');?>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

      
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>
				  <?php
//$result=$this->User_Model->fetch_equipment();
//$sender=$this->User_Model->fetch_trading_partner_sender();
$result=$this->User_Model->fetch_trading_partner_type();
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
      url:"<?php echo base_url('User/get_member_json')?>",
      dataType:"JSON",
      success:function(data){
        var html = '<tr>'; 
        html += '<td id="tp_name" contenteditable placeholder="Enter First Name"></td>';
        html += '<td  contenteditable><select class="form-control" id="tp_type"><?php foreach($result as $row) { ?> <option value="<?php echo $row->tp_type; ?>"><?php echo $row->tp_type; ?></option> <?php } ?></select></td>';
        html += '<td id="code" contenteditable><?php echo(rand(0000000000,9999999999));?></td>';
        html += '<td id="emailid" contenteditable></td>';
        html += '<td id="notify" contenteditable></td>';
		html += '<td id="phone_number" contenteditable></td>';
        html += '<td id="internal" contenteditable></td>';
        html += '<td id="tp_primary" contenteditable></td>';
        html += '<td id="lmd" contenteditable></td>';
        html += '<td id="special" contenteditable></td>';
		html += '<td id="location" contenteditable></td>';
		html += '<td id="licence_number" contenteditable></td>';
		html += '<td id="expiry_date" contenteditable></td>';
		html += '<td id="active" contenteditable></td>';
		html += '<td id="notes" contenteditable></td>';
	
        html += '<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-plus"></span></button></td></tr>';
		//var equiee = new Array();
		// var sender_tp = new Array();
		//var receiver_tp = new Array();
		// var transaction = new Array();
		// var carri = new Array();
		 var typ = new Array();
        for(var count = 0; count < data.length; count++)
        {
			//var x =  data[count].trading_partner;
         //   var y =  data[count].equipment; 
         //  var z =  data[count].receiving_tp; 
          //  var trans =  data[count].transaction; 
          //  var carr =  data[count].carrier; 
            var tps =  data[count].tp_type; 
			//sender_tp[count]=x;
			//equiee[count]=y;
			//receiver_tp[count]=z;
			//transaction[count]=trans;
			//carri[count]=carr;   equipment
			typ[count]=tps;
          html += '<tr>';
          html += '<td  data-row_id="'+data[count].memberId+'" data-column_name="tp_name" id="tp_name'+data[count].memberId+'" contenteditable>'+data[count].tp_name+'</td>';
          html += '<td  data-row_id="'+data[count].memberId+'"  data-column_name="tp_type"  contenteditable>  <select class="form-control  tp_type'+count+'" id="tp_type'+data[count].memberId+'"><option value="">Select TP Type</option><?php foreach($result as $row) { ?> <option value="<?php echo $row->tp_type; ?>"><?php echo $row->tp_type; ?></option> <?php } ?></select></td>';
		  
          html += '<td  data-row_id="'+data[count].memberId+'"  id="code'+data[count].memberId+'" data-column_name="code"  contenteditable>'+data[count].code+'</td>';
		  
          html += '<td  data-row_id="'+data[count].memberId+'" data-column_name="emailid" id="emailid'+data[count].memberId+'" contenteditable>'+data[count].emailid+'</td>';
          html += '<td  data-row_id="'+data[count].memberId+'" data-column_name="notify" id="notify'+data[count].memberId+'" contenteditable>'+data[count].notify+'</td>';
		   html += '<td  data-row_id="'+data[count].memberId+'" data-column_name="phone_number" id="phone_number'+data[count].memberId+'" contenteditable>'+data[count].phone_number+'</td>';
          html += '<td  data-row_id="'+data[count].memberId+'" data-column_name="internal" id="internal'+data[count].memberId+'" contenteditable>'+data[count].internal+'</td>';
          html += '<td  data-row_id="'+data[count].memberId+'" id="tp_primary'+data[count].memberId+'"  data-column_name="tp_primary"  contenteditable>'+data[count].tp_primary+'</td>';
          html += '<td  data-row_id="'+data[count].memberId+'" data-column_name="lmd" id="lmd'+data[count].memberId+'" contenteditable>'+data[count].lmd+'</td>';
		  
		  
		  
		  html += '<td  data-row_id="'+data[count].memberId+'" data-column_name="special" id="special'+data[count].memberId+'" contenteditable>'+data[count].special+'</td>';
	      html += '<td  data-row_id="'+data[count].memberId+'" data-column_name="location" id="location'+data[count].memberId+'" contenteditable>'+data[count].location+'</td>';
		  html += '<td  data-row_id="'+data[count].memberId+'" data-column_name="licence_number" id="licence_number'+data[count].memberId+'" contenteditable>'+data[count].licence_number+'</td>';
		  html += '<td  data-row_id="'+data[count].memberId+'" data-column_name="expiry_date" id="expiry_date'+data[count].memberId+'" contenteditable>'+data[count].expiry_date+'</td>';
		   html += '<td  data-row_id="'+data[count].memberId+'" data-column_name="active" id="active'+data[count].memberId+'" contenteditable>'+data[count].active+'</td>';
		    html += '<td  data-row_id="'+data[count].memberId+'" data-column_name="notes" id="notes'+data[count].memberId+'" contenteditable>'+data[count].notes+'</td>';
			 
		   html += '<td><button type="button" name="delete_btn" id="'+data[count].memberId+'" class="btn btn-xs btn-danger btn_delete"><span class="glyphicon glyphicon-remove"></span></button></td>'
		   html += '<td><button type="button" name="table_data" id="'+data[count].memberId+'" class="btn btn-xs btn-info table_data"><span class="glyphicon glyphicon-pencil"></span></button></td>';
        }
        $('tbody').html(html);
		   for(var count = 0; count < data.length; count++)
        {	
          load_equipment(typ[count],count);        			
		}
      }
    });
  }
  load_data();
  $(document).on('click', '#btn_add', function(){
    var tp_name = $("#tp_name").text();
	var tp_type=$('#tp_type').val(); 
    var code = $('#code').text();
    var emailid=$('#emailid').text();
    var notify = $('#notify').text();
    var phone_number = $('#phone_number').text();
    var internal = $('#internal').text();
    var tp_primary = $('#tp_primary').text();
    var lmd = $('#lmd').text();
    var special = $('#special').text();
    var location = $('#location').text();
    var licence_number = $('#licence_number').text();
    var expiry_date = $('#expiry_date').text();
    var active = $('#active').text();
    var notes = $('#notes').text();
  // alert(equipment);
    if(tp_name== '')
    {
      alert('Enter Date');
      return false;
    }
    if(code == '')
    {
      alert('Enter code');
      return false;
    }
    $.ajax({
      url:"<?php echo base_url(); ?>User/insert_members",
      method:"POST",
      data:{tp_name:tp_name,tp_type:tp_type,code:code,emailid:emailid,notify:notify,phone_number :phone_number,internal:internal, tp_primary:tp_primary,lmd:lmd,special:special,location:location,licence_number:licence_number,expiry_date:expiry_date,active:active,notes:notes},
      success:function(data){
        load_data();
      }
    })
  });

   $(document).on('click', '.table_data', function(){
	   var id = $(this).attr('id');
   var tp_name = $("#tp_name"+id).text();
	var tp_type=$('#tp_type'+id).val();
    var code = $('#code'+id).text(); 
    var emailid=$('#emailid'+id).text();
    var notify = $('#notify'+id).text();
	var phone_number = $('#phone_number'+id).text();
    var internal = $('#internal'+id).text();
    var tp_primary = $('#tp_primary'+id).text();
    var lmd = $('#lmd'+id).text();
    var special = $('#special'+id).text();
    var location = $('#location'+id).text();
    var licence_number = $('#licence_number'+id).text();
    var expiry_date = $('#expiry_date'+id).text();
    var active = $('#active'+id).text();
    var notes = $('#notes'+id).text();
	//alert(equipments);
    $.ajax({
      url:"<?php echo base_url('User/update_memberss')?>",
      method:"POST",
          data:{id:id,tp_name:tp_name,tp_type:tp_type,code:code,emailid:emailid,notify:notify,phone_number:phone_number, internal:internal, tp_primary:tp_primary,lmd:lmd,special:special,location:location,licence_number:licence_number,expiry_date:expiry_date,active:active,notes:notes},
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
		 url:"<?php echo base_url('User/dalete_member_login')?>",
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

<script>
function load_equipment(tp_type,count)
{
$(".tp_type"+count).val(tp_type);   
//$(".senders_tp"+count).val(sender_tp);
//$(".receiver_tp"+count).val(receiver_tp);
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