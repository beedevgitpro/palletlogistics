 <?php if(isset($_REQUEST['actives']))
 {
if($_REQUEST['actives']!=0)	
{	?>
	
 <?php }
else
{
	
}	
 }?>
  <?php 
  if(isset($_REQUEST['book_stock']))
 {
if($_REQUEST['book_stock'])	
{	?>
<table id="nodatatable-buttons" class="footable table table-striped  table-colored table-info footable-info" data-toggle-column="first" data-paging="true"><tr>
    <th>Type</th>
    <th>Trading Partner</th>
    <th>TP Code</th>
    <th>Book Stock</th>
   <th>Primary TP</th>  </tr></table>

		
 <?php }
else
{
	
}	
 }
 
 
 if(isset($_REQUEST['unitprice']))
 {
if($_REQUEST['unitprice'])	
{	?>
    <table id="nodatatable-buttons" class="footable table table-striped  table-colored table-info footable-info" data-toggle-column="first" data-paging="true"><tr>
    <th>Site TP</th>
    <th>Rent Unit Price</th>
   <th>Add More Field</th></tr>
   </table>
		
 <?php }
else
{
	
}	
 }
 
 //=========================================================
 
 if(isset($_SERVER['REQUEST_METHOD']))
 {
 $method = $_SERVER['REQUEST_METHOD'];
if($method == 'GET')
{
 $data = array(
  ':first_name'   => "%" . $_GET['first_name'] . "%",
  ':last_name'   => "%" . $_GET['last_name'] . "%",
  ':age'     => "%" . $_GET['age'] . "%",
  ':gender'    => "%" . $_GET['gender'] . "%"
 );
                                    $result=$this->User_Model->get_equipments();
										foreach($result as $row)
										{
											 array('id'    => $row['id'],   
                                             'first_name'  => $row['first_name'],
                                             'last_name'   => $row['last_name'],
                                             'age'    => $row['age'],
                                             'gender'   => $row['gender'])
											
										}

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
}

?>

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 