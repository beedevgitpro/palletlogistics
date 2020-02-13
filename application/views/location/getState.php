<?php

if (! empty($_POST["country_id"])) {
	$country_id=$_POST["country_id"];
   $results= $this->User_Model->get_states($country_id)
    ?>
<option value disabled selected>Select State</option>
<?php
    foreach ($results as $state) {
        ?>
<option value="<?php echo $state->id; ?>"><?php echo $state->name; ?></option>
<?php
    }
}

?><option value="00">ertyui</option>