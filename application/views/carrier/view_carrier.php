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
                                  <input type="hidden" class="urlid" value="<?=$url?>">
   <div class="table-responsive">
      <br />
      <table id="_datatable-buttons" class="footable table table-striped  table-colored table-info footable-info table-bordered m-0" data-toggle-column="first" data-paging="true">
        <thead>
<th>carrier</th>
<th data-breakpoints="xs">active</th>
<th data-breakpoints="xs sm md">Notes</th>
<th data-breakpoints="xs sm md">Delete</th>
<th data-breakpoints="xs sm md">Update</th>
</tr>
        </thead>
        <tbody id="tbodys">

        </tbody>
      </table>  
      <!-- <p class='link'></p>  -->
      <div style='margin-top: 10px;text-align: right' id='pagination'></div>
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
  
  $('#pagination').on('click','a',function(e){
       e.preventDefault(); 
       var pageno = $(this).attr('data-ci-pagination-page');
       load_data(pageno);
     });

  load_data(0);

  function load_data( pagno )
  {
    
    $.ajax({
      // url:"<?php //echo base_url('User/load_carrier?urlid=')?>"+ids,
      url: '<?=base_url()?>User/load_carrier/'+pagno,
      // dataType:"JSON",

      success:function(datas){
        // console.log( datas);
        var posts = JSON.parse(datas);
        var e = posts.links;
        var data = posts.authors;
        var co = posts.row;
        // alert( co );
        
        var html = '<tr>';
        html += '<td id="carrier" contenteditable></td>';
        html += '<td id="actives" contenteditable></td>';
        html += '<td id="notes" contenteditable></td>';
        html += '<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-plus"></span></button></td></tr>';
        
        for(var count = 0; count < data.length; count++)
        {

          html += '<tr>';
           html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="carrier" id="carrier'+data[count].metaid+'" contenteditable>'+data[count].carrier+'</td>';
        
		   html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="actives" id="actives'+data[count].metaid+'" contenteditable>'+data[count].active+'</td>';
          html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="notes" id="notes'+data[count].metaid+'" contenteditable>'+data[count].notes+'</td>';

          html += '<td><button type="button" name="delete_btn" id="'+data[count].metaid+'" class="btn btn-xs btn-danger btn_delete"><span class="glyphicon glyphicon-remove"></span></button></td>'
		  html += '<td><button type="button" name="table_data" id="'+data[count].metaid+'" class="btn btn-xs btn-info table_data"><span class="glyphicon glyphicon-pencil"></span></button></td></tr>';

       
        }   
        $('#tbodys').html(html);
        $('#pagination').html(e);
        

      },

      
    });


  }

  
  load_data();


  $(document).on('click', '#btn_add', function(){
    var carrier = $('#carrier').text();
	var actives=$('#actives').text();
    var notes = $('#notes').text();
  // alert(equipment);
    if(carrier== '')
    {
      alert('Enter Carrier');
      return false;
    }
    $.ajax({
      url:"<?php echo base_url(); ?>User/insert_carrierss",
      method:"POST",
      data:{carrier:carrier, actives:actives, notes:notes},
      success:function(data){
        load_data();
      }
    })
  });

   $(document).on('click', '.table_data', function(){
	   var id = $(this).attr('id');
    var carrier = $('#carrier'+id).text();
	var actives=$('#actives'+id).text();
    var notes = $('#notes'+id).text();
	//alert(equipments);
    $.ajax({
      url:"<?php echo base_url('User/update_carrers')?>",
      method:"POST",
          data:{id:id,carrier:carrier, actives:actives, notes:notes},
      success:function(data)
      {
        console.log(data);
        
        load_data();
        if( data == 'success' ){
          alert('Data Updated Successfully');
        }
      }
    })
  });

  $(document).on('click', '.btn_delete', function(){
    var id = $(this).attr('id');
	//alert(id);
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
		 url:"<?php echo base_url('User/delete_carrierss')?>",
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

   <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="spinner-wrapper">
                    <div class="rotator">
                        <div class="inner-spin"></div>
                        <div class="inner-spin"></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

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