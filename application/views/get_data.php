
 <!-------------------wallet------------------->
 
 <?php
if (isset($_REQUEST['credit']))
	
	{
	
    $pagess = 1;
    $page = 1;
 
    //include '../../quid/connection-db.php';
    //include "../../common_Resources/establishment/config.php";


   include "../ofo_resource/ofo.property"; 
  $res=$this->User_Model->credit_fetch_details($cr_list); ?>
    <select name="alpha" id="al" class="form-control">
     
		
    <?php while ($row = mysqli_fetch_array($res)) { ?>

            <option value="<?php echo $row['Login_id']; ?>"><?php echo $row['Login_Name']; ?></option>
    <?php } ?>
    </select>
	<?php
}
if (isset($_REQUEST['debit'])) {
    $pagess = 1;
    $page = 1;
   // include '../../quid/connection-db.php';
  //include "../../common_Resources/establishment/config.php";
 // $res=$this->User_Model->debate_fetch_details();
 echo"<script>alert('ffffffffff')</script>";  
 
	

	
	
}
 
if(isset($_REQUEST['unread']))
{
echo $x=$_REQUEST['unread'];

$res=$object1->update_oracalling_female($x);
if($res)
{
	?>
	
	<script>
	
	alert('successfully Read')</script>;
	<?php
}
}
if(isset($_REQUEST['unread_male']))
{
$x=$_REQUEST['unread_male'];

$res=$object1->update_oracalling_male($x);
if($res)
{
	?>
	
	<script>
	
	alert('successfully Read')</script>;
	<?php
}
}  


if(isset($_REQUEST['unread_hording']))
{
$x=$_REQUEST['unread_hording'];

$res=$object1->update_oracalling_hoarding($x);
if($res)
{
	?>
	
	<script>
	
	alert('successfully Read')</script>;
	<?php
}
} 
if(isset($_REQUEST['unread_cooraprintig']))
{
echo $x=$_REQUEST['unread_cooraprintig'];

$res=$object1->update_oracalling_cooraprintig($x);
if($res)
{
	?>
	
	<script>
	
	alert('successfully Read')</script>;
	<?php
}
}
 if(isset($_REQUEST['unread_cinema']))
{
echo $x=$_REQUEST['unread_cinema'];

$res=$object1->update_oracalling_cinema($x);
if($res)
{
	?>
	
	<script>
	
	alert('successfully Read')</script>;
	<?php
}
}
 if(isset($_REQUEST['unread_news']))
{
echo $x=$_REQUEST['unread_news'];

$res=$object1->update_oracalling_news($x);
if($res)
{
	?>
	
	<script>
	
	alert('successfully Read')</script>;
	<?php
}
}
 if(isset($_REQUEST['unread_news']))
{
echo $x=$_REQUEST['unread_news'];

$res=$object1->update_oracalling_news($x);
if($res)
{
	?>
	
	<script>
	
	alert('successfully Read')</script>;
	<?php
}
}

?> 

 