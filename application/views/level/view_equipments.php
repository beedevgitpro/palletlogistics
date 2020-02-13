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
        <link href="https://coderthemes.com/zircos/layouts/material-design/assets/css/style.css" rel="stylesheet" type="text/css"/>
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
		<link rel="stylesheet" href="<?php echo base_url('assets/plugins2/footable/footable.bootstrap.min.css')?>">
             <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="<?php echo base_url('assets/js/modernizr.min.js')?>"></script>
		     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
		
  <style>
  .hide
  {
     display:none;
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
   <div class="table-responsive">  
    <h3 align="center"></h3><br />
    <div id="grid_table"></div>
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
        <script src="<?php echo base_url('assets/js/waves.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.slimscroll.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js')?>"></script>
        <script src="<?php echo base_url('assets/plugins2/switchery/switchery.min.js')?>"></script>
        <script src="<?php echo base_url('assets/plugins2/datatables/jquery.dataTables.min.js')?>"></script>
        <script src="<?php echo base_url('assets/plugins2/datatables/dataTables.bootstrap.js')?>"></script>
        <script src="<?php echo base_url('assets/plugins2/datatables/dataTables.buttons.min.js')?>"></script>
        <script src="<?php echo base_url('assets/plugins2/datatables/buttons.bootstrap.min.js')?>"></script>
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
				  <?php
?> 
 <script>
    $('#grid_table').jsGrid({
     width: "100%",
     height: "700px",
     filtering: true,
     inserting:true,
     editing: true,
     sorting: true,
     paging: true,
     autoload: true,
     pageSize: 10,
     pageButtonCount: 5,
     deleteConfirm: "Do you really want to delete data?",
     controller: {
      loadData: function(filter){
       return $.ajax({
        type: "GET",
        url: "<?php echo base_url('User/equipment_one')?>",
		
        data: filter
       });
      },
      insertItem: function(item){
       return $.ajax({
        type: "POST",
        url: "<?php echo base_url('User/equipment_one')?>",
        data:item
       });
      },
      updateItem: function(item){
       return $.ajax({
		data: { myData: 'sss' },
        type: "POST",
        url: "<?php echo base_url('User/equipment_two')?>",
        data: item
       });
      },
      deleteItem: function(item){
       return $.ajax({
        type: "GET",
        url: "<?php echo base_url('User/equipment_two')?>",
        data: item
       });
      },
     },
    fields: [
      {
       name: "id",
    type: "hidden",
    css: 'hide'
      },
      {
       name: "equipment", 
    type: "text", 
    width: 60, 
    validate: "required"
      },
  
	  
	  {
    name: "supplier_tp", 
    type: "select", 
    items: [
     { Name: "", Id: '' },
     { Name: "CPC", Id: '3' },
     { Name: "CPS", Id: '4' },
     { Name: "IFCO", Id: '5' },
     { Name: "IPP LOGIPAL", Id: '6' },
     { Name: "LINPAC", Id: '7' },
     { Name: "LOSCAM", Id: '8' }
    ], 
    valueField: "Id", 
    textField: "Name", 
    validate: "required"
      },  
	  
/* 	  {
     name: "supplier_tp", 
    type: "select", 
    items: [
     { Name: "", Id: '' },
	 <?php
      foreach($result as $row)
      {  ?>
     { Name: '<?php echo $row->supplier_name; ?>', Id: '<?php echo $row->type_id;?>' }
    
	<?php 
	 }
	 
	 ?>
	  { Name: "", Id: '' },
 
    ], 
    valueField: "Id", 
    textField: "Name", 
    validate: "required"
      }, */
	  
	  
	  


	  
	  
	  
      {
       name: "report_name", 
    type: "text", 
    width: 50
 
  
      },
	  
            {
       name: "code", 
    type: "text", 
    width: 60
      },
	  
	        {
       name: "internal_code", 
    type: "text", 
    width: 60

      },
	  	        {
       name: "equipment_supplier_stock", 
    type: "text", 
    width: 60 
   
      },
      {
       type: "control"
      }
     ]

    });

</script>



<?php

//fetch_data.php

/* $connect = new PDO("mysql:host=localhost;dbname=testing", "root", "");

$method = $_SERVER['REQUEST_METHOD'];

if($method == 'GET')
{
 $data = array(
  ':first_name'   => "%" . $_GET['first_name'] . "%",
  ':last_name'   => "%" . $_GET['last_name'] . "%",
  ':age'     => "%" . $_GET['age'] . "%",
  ':gender'    => "%" . $_GET['gender'] . "%"
 );
 $query = "SELECT * FROM sample_data WHERE first_name LIKE :first_name AND last_name LIKE :last_name AND age LIKE :age AND gender LIKE :gender ORDER BY id DESC";

 $statement = $connect->prepare($query);
 $statement->execute($data);
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output[] = array(
   'id'    => $row['id'],   
   'first_name'  => $row['first_name'],
   'last_name'   => $row['last_name'],
   'age'    => $row['age'],
   'gender'   => $row['gender']
  );
 }
 header("Content-Type: application/json");
 echo json_encode($output);
}

if($method == "POST")
{
 $data = array(
  ':first_name'  => $_POST['first_name'],
  ':last_name'  => $_POST["last_name"],
  ':age'    => $_POST["age"],
  ':gender'   => $_POST["gender"]
 );

 $query = "INSERT INTO sample_data (first_name, last_name, age, gender) VALUES (:first_name, :last_name, :age, :gender)";
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

if($method == 'PUT')
{
 parse_str(file_get_contents("php://input"), $_PUT);
 $data = array(
  ':id'   => $_PUT['id'],
  ':first_name' => $_PUT['first_name'],
  ':last_name' => $_PUT['last_name'],
  ':age'   => $_PUT['age'],
  ':gender'  => $_PUT['gender']
 );
 $query = "
 UPDATE sample_data 
 SET first_name = :first_name, 
 last_name = :last_name, 
 age = :age, 
 gender = :gender 
 WHERE id = :id
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

if($method == "DELETE")
{
 parse_str(file_get_contents("php://input"), $_DELETE);
 $query = "DELETE FROM sample_data WHERE id = '".$_DELETE["id"]."'";
 $statement = $connect->prepare($query);
 $statement->execute();
} */

?>
 
 
 

 
		
    </body>
</html>