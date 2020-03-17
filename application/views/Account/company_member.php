<?php $rand = rand(1,1000);?>
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

button#four:focus

{

    background:#6f7175;

  color: white;

}

button#five:focus

{

    background:#6f7175;

  color: white;

}

button#six:focus

{

    background:#6f7175;

  color: white;

}

button#seven:focus

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
      <?php if( $login_type == 'A' ){ } else{ ?>
      <form id="for" method="Post" action="<?= base_url('User/view_account_company');?>">
        <input type="hidden" name="newid" id="new_id">
      </form>
    <?php } ?>
    <!-- <h4>f</h4> -->
      <table id="_datatable-buttons" class="footable table table-striped  table-colored table-info footable-info table-bordered m-0" data-toggle-column="first" data-paging="true">
        <span id="f"></span>
        <thead>

                        <th data-breakpoints="xs">Details</th>

                    <th>Username</th>

            <th data-breakpoints="xs">Password</th>

            <th data-breakpoints="xs sm md">Role</th>
            <th data-breakpoints="xs sm md">View User</th>
            <th data-breakpoints="xs sm md">Delete</th>

            <!-- <th data-breakpoints="xs sm md">Update</th> -->

</tr>

        </thead>

        <tbody id="tbodys">
          <?php foreach( $view as $row ){ ?>
            <tr>
             <td><input type="checkbox" name="cb1"   class="chb btn btn-xs btn-info cha_id"></td>
             <td hidden><input type="hidden"  id="<?= $row->login_id?>" name="log_id" value="<?= $row->login_id?>"></td>
             <td><?= $row->username?></td>
             <td><?= $row->password?></td>
             <td><?= $row->login_typ?></td>
             <td><button type="button" name="view_btn" onclick = "btn_view('<?= $row->login_id?>')" class="btn btn-xs btn-info"><span class="glyphicon  glyphicon-eye-open"></span></button></td>
          <td><button type="button" name="delete_btn" id="'+data[count].metaid+'" onclick = "btn_delete('<?= $row->login_id?>')" class="btn btn-xs btn-danger "><span class="glyphicon glyphicon-remove"></span></button></td>
           </tr>
          <?php } ?>
        </tbody>

      </table>   

    </div> 
<div style='margin-top: 10px;text-align: right' id='pagination'></div>
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

        </div>

          <div class="row card-box">

                            <div class="col-lg-3">

              </div>

                                <div class="col-lg-9">

             <button type="button" id="one" class="btn equipment-receive">Opening Balance</button>&nbsp;&nbsp;

       <button type="button" id="two" class="btn equipment-receive">Transfer Ons</button>&nbsp;&nbsp;

       <button type="button" id="three" class="btn equipment-receive">Transfer Offs</button>&nbsp;&nbsp;

       <button type="button" id="four" class="btn equipment-receive">Imported transfer Ons</button>&nbsp;&nbsp;

       <button type="button" id="five" class="btn equipment-receive">Imported transfer Offs</button>&nbsp;&nbsp;

         <button type="button" id="six" class="btn equipment-receive">Location Unit Prices</button>&nbsp;&nbsp;

            <button type="button" id="seven" class="btn equipment-sent">Other Charges</button>&nbsp;&nbsp;

                                </div>

                          </div>

       <div id="second-table"></div>

        <!-- END wrapper -->







        <script>

            var resizefunc = [];

        </script>

<?php

$result=$this->User_Model->fetch_equipment();

$sender=$this->User_Model->fetch_trading_partner_sender();

 $receiver=$this->User_Model->get_sender_reciever();

 $transaction=$this->User_Model->fetch_transaction();

 $carrier=$this->User_Model->get_carriers();

 $type=$this->User_Model->movement_type();

?> 

<script type="text/javascript" language="javascript" >

function btn_view( id ){
   
     
     $("#new_id").val( id );
     $("#for").submit();
 }

 

function btn_delete( ids ){
    // var id = $(this).attr('id');
 var id = ids;


    if(confirm("Are you sure you want to delete this?"))

    {

      $.ajax({

     url:"<?php echo base_url('User/delete_user')?>",

        //url:"<?php echo base_url(); ?>User/dalete_movemedsss",

        method:"POST",

        data:{id:id},

        success:function(data){
          
          load_data();
        }

      })

    }
}

 
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

      url:"<?php echo base_url('User/view_accountss_company/')?>"+pagno,

      // dataType:"JSON",

      success:function(datas){
        console.log( datas );
           var posts = JSON.parse(datas);
        var e = posts.links;
        var data = posts.authors;
        var co = posts.row;
        var html;

    var all = new Array();

        for(var count = 0; count < data.length; count++)

        {

       var x =  data[count].equipment;

       all[count]=x;

           html += '<tr>';
            html+='<td hidden ><input hidden type="text" class="ids'+data[count].metaid+'" value="'+data[count].login_id+'"></td>';

       html += '<td><input type="checkbox" name="cb1"  id="'+data[count].metaid+'" class="chb btn btn-xs btn-info cha_id"></td>';

           html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="bills_date" id="bills_date'+data[count].metaid+'" contenteditable>'+data[count].username+'</td>';

       html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="bills_date" id="bills_date'+data[count].metaid+'" contenteditable>'+data[count].password+'</td>';
        html += '<td  data-row_id="'+data[count].metaid+'" data-column_name="bills_date" id="bills_date'+data[count].metaid+'" contenteditable>'+data[count].login_typ+'</td>';
        // <?php if( $login_type == 'A'){}else{?>
        //    html += '<td><button type="button" name="view_btn" id="'+data[count].metaid+'" class="btn btn-xs btn-info btn_view"><a href="<?= base_url('User/user_view');?>"><span class="glyphicon glyphicon-eye-open"></span></a></button></td>';
        //  <?php } ?>  
        //    html += '<td><button type="button" name="delete_btn" id="'+data[count].metaid+'" class="btn btn-xs btn-danger btn_delete"><span class="glyphicon glyphicon-remove"></span></button></td>'

       // html += '<td><button type="button" name="table_data" id="'+data[count].metaid+'" class="btn btn-xs btn-info table_data"><span class="glyphicon glyphicon-pencil"></span></button></td></tr>';

           }

         $('#tbodys').html(html);
        $('#pagination').html(e);
        for(var count = 0; count < data.length; count++)

           {  

             var metaids=data[count].metaid;

                xyzz(metaids,all[count]);            

       }

     $(".chb").change(function()

        {

       $(".chb").prop('checked',false);

       $(this).prop('checked',true);

      });

      }

    });

  }

  load_data();

   $(document).on('change', '.table_drop_quipment', function(){
    var Dates = $(this).val();
    var id = $(this).attr('id');
    var ress = id.substring(9, 21);
    var res = id.substring(0, 4);
    var ids = $(".ids"+ress).val(); 
    $.ajax({
      url:"<?php echo base_url('Edit/update_bill_ss')?>",
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

 // $(document).on('click', '.btn_view', function(){

 //    var id = $("#logs").val();
 //    alert(id);return;
 //    var ids = $("#login"+id).val(); 
 //     $("#new_id").val( ids );
 //     $("#for").submit();
 //  });

 
   $(document).on('keyup', '.bills_edit', function(){

          var Dates = $(this).text();
          var id = $(this).attr('id');
          var res = id.substring(0, 4);
          
               if( res == 'sour'){
                var ress = id.substring(6, 11);
               }
               else if ( res == 'open'){
                var ress = id.substring(15, 18); 
                }
                else if ( res == 'quan'){
                var ress = id.substring(11, 20);
                }
                else if ( res == 'Unre'){
                var ress = id.substring(19, 28);
                }
                else if ( res == 'qsua'){
                var ress = id.substring(13, 18);
                }
                else if ( res == 'unre'){
                var ress = id.substring(20, 28);
                }
                else if ( res == 'clos'){
                var ress = id.substring(15, 28);
                }
                else if ( res == 'equi'){
                var ress = id.substring(14, 18);
                }
                else if ( res == 'sunr'){
                var ress = id.substring(28, 38);  
                }
                else if ( res == 'rent'){
                var ress = id.substring(15, 19);
                }
                else if ( res == 'uren'){
                var ress = id.substring(5, 18);
                }
                else if ( res == 'fees'){
                var ress = id.substring(4, 18);
                }
                else if ( res == 'Othe'){
                var ress = id.substring(13, 18);
                }
                 else if ( res == 'amou'){
                var ress = id.substring(6, 18);
                }
                else if ( res == 'unsr'){
                var ress = id.substring(20, 28);
                }

            
          var ids = $(".ids"+ress).val(); 
          $.ajax({
            url:"<?php echo base_url('Edit/update_bill_ss')?>",
            method:"POST",
            data:{Dates:Dates,ids:ids,res:res},
            success:function(data)
            {
              if( data == 'success' ){
                // alert( "Data Updated Successfully ");
                 $("#f").html('Data updated Successfully');  
              }
              else{
                $("#f").html(data);
               // alert( "Data Not Updated ");
              }
            }
          })
    });


  $(document).on('click', '#btn_add', function(){

    var bills_date = $('#bills_date').text();

  var equipment=$('#equipment').val();

    var source = $('#source').text();

    var opening_balance = $('#opening_balance').text();

    var quantity_on = $('#quantity_on').text();

    var Unreconciled_qty_on = $('#Unreconciled_qty_on').text();

    var quantity_off = $('#quantity_off').text();

    var unreconciled_qty_off = $('#unreconciled_qty_off').text();

    var closing_balance = $('#closing_balance').text();

    var equipment_days = $('#equipment_days').text();

    var unreconciled_equipment_days = $('#unreconciled_equipment_days').text();

    var rent_unit_price = $('#rent_unit_price').text();

    var rent = $('#rent').text();

    var fees = $('#fees').text();

    var Other_charges = $('#Other_charges').text();

    var amount = $('#amount').text();

    var unreconciled_amount = $('#unreconciled_amount').text();

    if(equipment== '')

    {

      alert('Enter Equipment');

      return false;

    }

    $.ajax({

      url:"<?php echo base_url(); ?>User/insert_billsss",

      method:"POST",

      data:{bills_date:bills_date, equipment:equipment, source:source,opening_balance:opening_balance, quantity_on:quantity_on,Unreconciled_qty_on:Unreconciled_qty_on,quantity_off:quantity_off,unreconciled_qty_off:unreconciled_qty_off, closing_balance:closing_balance,equipment_days:equipment_days, unreconciled_equipment_days:unreconciled_equipment_days,rent_unit_price:rent_unit_price, rent:rent,fees:fees, Other_charges:Other_charges,amount:amount,unreconciled_amount:unreconciled_amount},

      success:function(data){

        load_data();

      }

    })

  });

   $(document).on('click', '.table_data', function(){

  var id = $(this).attr('id');

    var bills_date = $('#bills_date'+id).text();

  var equipment=$('#equipment'+id).val();

    var source = $('#source'+id).text();

    var opening_balance = $('#opening_balance'+id).text();

    var quantity_on = $('#quantity_on'+id).text();

    var Unreconciled_qty_on = $('#Unreconciled_qty_on'+id).text();

    var quantity_off = $('#quantity_off'+id).text();

    var unreconciled_qty_off = $('#unreconciled_qty_off'+id).text();

    var closing_balance = $('#closing_balance'+id).text();

    var equipment_days = $('#equipment_days'+id).text();

    var unreconciled_equipment_days = $('#unreconciled_equipment_days'+id).text();

    var rent_unit_price = $('#rent_unit_price'+id).text();

    var rent = $('#rent'+id).text();

    var fees = $('#fees'+id).text();

    var Other_charges = $('#Other_charges'+id).text();

    var amount = $('#amount'+id).text();

    var unreconciled_amount = $('#unreconciled_amount'+id).text();

    $.ajax({

      url:"<?php echo base_url('User/update_bills')?>",

      method:"POST",

           data:{id:id,bills_date:bills_date, equipment:equipment, source:source,opening_balance:opening_balance, quantity_on:quantity_on,Unreconciled_qty_on:Unreconciled_qty_on,quantity_off:quantity_off,unreconciled_qty_off:unreconciled_qty_off, closing_balance:closing_balance,equipment_days:equipment_days, unreconciled_equipment_days:unreconciled_equipment_days,rent_unit_price:rent_unit_price, rent:rent,fees:fees, Other_charges:Other_charges,amount:amount,unreconciled_amount:unreconciled_amount},

      success:function(data)

      {

        load_data();

      }

    })

  });

 //  $(document).on('click', '.btn_delete', function(){

 //    var id = $(this).attr('id');

  // //alert(id);

 //    if(confirm("Are you sure you want to delete this?"))

 //    {

 //      $.ajax({

  //   url:"<?php echo base_url('User/delete_bills')?>",

 //        //url:"<?php echo base_url(); ?>User/dalete_movemedsss",

 //        method:"POST",

 //        data:{id:id},

 //        success:function(data){

 //          load_data();

 //        }

 //      })

 //    }

 //  });

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

 $("#second-table").load('<?php echo base_url("User/bills_datass")?>',{"actives":actives});

 });

$(document).on('click', '.equipment-sent', function() {

  var rej_corr_id = document.getElementById("myOutput").value;

 $("#second-table").load('<?php echo base_url("User/bills_datass")?>',{"rej_corr_id":rej_corr_id});     

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

function xyzz(count,data)

{

$("#equipment"+count).val(data);

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