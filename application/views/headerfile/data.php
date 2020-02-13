<?php
if(isset($_REQUEST['form_id']))
{
	
	$form_id=$_REQUEST['form_id'];
	$member_login_id=$_REQUEST['selectlist'];
    $res=$this->User_Model->get_form_fields($form_id);
    $array=$this->User_Model->get_form_fieldsddd($form_id,$member_login_id);
	$array = explode(',', $array);  
	
foreach($res as $row)
{



?>
<div class="col-md-3">
<div class="form-group checkboxcontainer clearfix">
<?php 
if(in_array($row->field_id,$array))
{
?>
<input type="checkbox" class="required form-control" value="<?php echo $row->field_id;?>" name="field_id[]" checked>
<?php }
else
{ ?>
<input type="checkbox" class="required form-control" value="<?php echo $row->field_id;?>" name="field_id[]">	
<?php
}	?>

<label class="control-label " for="father"><?php echo $row->form_label; ?></label>
</div>
</div> 
<?php

}
?>
<div class="clearfix"></div>
<div class="col-md-3">

<input type="submit" class="required form-control btn btn-success" value="Save">

</div>
<div class="clearfix"></div>
<div class="col-md-5">
</div>
<?php
}
?>