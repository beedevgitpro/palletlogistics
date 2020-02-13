<style>td.sizeofinput {    margin-left: -256px;}</style>	
    

        <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>

        
		<?php
	if(isset($_REQUEST['actives']))
	   {
		   
     if($_REQUEST['actives']!=0)
	   {
		  // $id=$_REQUEST['senderreceiver'];
		  // $res=$this->User_Model->get_sender_receiver_details($id);
		  // foreach($res as $x)
		 //  { specialss
?>
<div class="crcform">
        <h1></h1>
        <form id="internship_details">
            <table class="table table-bordered" id="dynamic_field">
                <tr>
                    <td>
                        <!--div class="top-row"-->
                        <div class="field-wrap">
						<div class="col-md-2">
                         <div class="form-group clearfix">
                            <label>
                                SUPPLIER TP<span class="req">*</span>
                            </label>
                            <select name="specialss[]" class="required form-control"> <?php $result=$this->User_Model->get_member_sitess(4);foreach($result as $row){ ?> <option value="<?php echo $row->metaId; ?>"><?php echo $row->tp_name; ?></option> <?php } ?> </select>
                        </div>
						</div>
						</div>

                        <div class="field-wrap">
						<div class="col-md-3">
                         <div class="form-group clearfix">
                            <label>
                               ISSUE FEE CODE<span class="req">*</span>
                            </label>
                          <select name="specialss[]" class="required form-control"> <?php $result=$this->User_Model->get_member_sitess(4);foreach($result as $row){ ?> <option value="0"></option> <?php } ?> </select> 
                        </div>
						</div>
						</div>

                        <div class="field-wrap">
						<div class="col-md-2">
                         <div class="form-group clearfix">
                            <label>
                                ISSUE FEE<span class="req">*</span>
                            </label>
                            <input type="text" class="form-control" required autocomplete="off" name="duration[]"/>
                        </div>
						</div>
						</div>

                        <div class="field-wrap">
						<div class="col-md-2">
                         <div class="form-group clearfix">
                            <label>
                               DEHIRE FEE CODE<span class="req">*</span>
                            </label>
                        <select name="specialss[]" class="required form-control"> <?php $result=$this->User_Model->get_member_sitess(4);foreach($result as $row){ ?> <option value="0"></option> <?php } ?> </select> 
                        </div>
						</div>
						</div>
						  <div class="field-wrap">
						<div class="col-md-3">
                         <div class="form-group clearfix">
                            <label>
                               DEHIRE FEE CODE<span class="req">*</span>
                            </label>
                            <input type="text" class="form-control" required autocomplete="off" name="companys[]"/>
                        </div>
						</div>
						</div>
					
                    </td>
                    <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                </tr>
            </table>
            <input type="button" name="submit" id="submit"  class="btn btn-info" value="Submit" />
        </form>
   
    <script>
        $(document).ready(function(){
            var i = 1;
            $('#add').click(function(){
                i++;
                $('#dynamic_field').append('<tr id="row'+i+'"><td><div class="field-wrap"><div class="col-md-2">  <select name="specials[]" class="required form-control"> <?php $result=$this->User_Model->get_member_sitess(4);foreach($result as $row){ ?> <option value="<?php echo $row->metaId; ?>"><?php echo $row->tp_name; ?></option> <?php } ?> </select> </div> </div></div><div class="field-wrap"><div class="col-md-2"> <select name="specialss[]" class="required form-control"> <?php $result=$this->User_Model->get_member_sitess(4);foreach($result as $row){ ?> <option value="0"></option> <?php } ?> </select>  </div></div><div class="field-wrap"><div class="col-md-2"><input type="text" class="form-control" required autocomplete="off" name="duration[]"/></div></div><div class="field-wrap"><div class="col-md-3"><select name="specialss[]" class="required form-control"> <?php $result=$this->User_Model->get_member_sitess(4);foreach($result as $row){ ?> <option value="0"></option> <?php } ?> </select> </div></div><div class="field-wrap"><div class="col-md-3"><input type="text" class="form-control" required autocomplete="off" name="companys[]"/></div></div></td></td><td><button name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
            });

            $(document).on('click','.btn_remove', function(){
                var button_id = $(this).attr("id");
                $("#row"+button_id+"").remove();
            });

            $('#submit').click(function(){
                $.ajax({
                    async: true,
                    url: "<?php echo base_url('User/insert_issuedesirefee');?>",
                    method: "POST",
                    data: $('#internship_details').serialize(),
                    success:function(rt)
                    {
                        alert(rt);
                        $('#internship_details')[0].reset();
                    }
                });
            });
        });
    </script>
<?php 
		  // }
	   }
	   else {
		   
	   }
	   ?>

		<?php
		   
	   }
	 //=================================================================================  
	   	if(isset($_REQUEST['book_stock']))
	   {
     if($_REQUEST['book_stock'])
	   {
		  
?>
<table id="nodatatable-buttons" class="footable table table-striped  table-colored table-info footable-info" data-toggle-column="first" data-paging="true" >
<tr>
	 <td><?php //echo $x->tp_type; ?>tttttttttt</td>
     <th><?php //echo $this->User_Model->trading_partner_names($x->trading_partner); ?>gggggggggggg</th>
	 <th>ffffffffffffff</th>
	 <th><?php //echo $x->book_stock; ?>yyyyyyyyyyyyyy</th> 
	 <th><?php echo "fffffffffffff"; ?></th> 
	 </tr>
	 </table>
     <?php 
		   }
	   
	   else {
		   
	   }
		   
	   }
	   
	   
	   
		   /* 	if(isset($_REQUEST['book_stock']))
	   {
		   
     if($_REQUEST['book_stock'])
	   {
		   //$id=$_REQUEST['senderreceiver'];
		  // $res=$this->User_Model->get_sender_receiver_details($id);
		  // foreach($res as $x)
		 //  {
?>
	 
	 <td><?php echo "a"; ?></td>
     <th><?php echo "b"; ?></th>
	 <th><?php echo "c"; ?></th> 
	 <th><?php echo "c"; ?></th> 
	 <th><?php echo "d"; ?></th> 
	 <th><?php echo "e"; ?></th> 
	 <th><?php echo "f"; ?></th> 

<?php 
		  // }
	   }
	   else {
		   
	   }
		   
	   } */
	   
	   
	   	if(isset($_REQUEST['unitprice']))
	   {
		   
     if($_REQUEST['unitprice'])
	   {
		   ?>
	 
	 <div class="crcform">
        <h1></h1>
        <form id="internship_details">
            <table class="table table-bordered" id="dynamic_field">
                <tr>
                    <td>
                        <!--div class="top-row"-->
                        <div class="field-wrap">
						<div class="col-md-2">
                         <div class="form-group clearfix">
                            <label>
                                Site TP<span class="req"></span>
                            </label>
                              <select name="specialss[]" class="required form-control"> <?php $result=$this->User_Model->get_member_sitess(3);foreach($result as $row){ ?> <option value="<?php $row->metaId; ?>"><?php echo $row->tp_name; ?></option> <?php } ?> </select>
                        </div>
						</div>
						</div>

                        <div class="field-wrap">
						<div class="col-md-3">
                         <div class="form-group clearfix">
                            <label>
                               Rent Unit Price<span class="req"></span>
                            </label>
                            <input type="text" class="form-control" required autocomplete="off" name="project[]"/>
                        </div>
						</div>
						</div>

                    

                 
				
					
                    </td>
                    <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                </tr>
            </table>
            <input type="button" name="submit" id="submit"  class="btn btn-info" value="Submit" />
        </form>
		
    </div>
    <script>
        $(document).ready(function(){
            var i = 1;
            $('#add').click(function(){
                i++;
                $('#dynamic_field').append('<tr id="row'+i+'"><td><div class="field-wrap"><div class="col-md-2"><select name="specialss[]" class="required form-control"> <?php $result=$this->User_Model->get_member_sitess(3);foreach($result as $row){ ?> <option value="<?php echo $row->metaId; ?>"><?php echo $row->tp_name; ?></option> <?php } ?> </select></div></div><div class="field-wrap"><div class="col-md-2"><input type="text" class="form-control" required autocomplete="off" name="project[]"/></div></div></td></td><td><button name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
            });

            $(document).on('click','.btn_remove', function(){
                var button_id = $(this).attr("id");
                $("#row"+button_id+"").remove();
            });

            $('#submit').click(function(){
                $.ajax({
                    async: true,
                    url: "<?php echo base_url('User/site_unit_price');?>",
                    method: "POST",
                    data: $('#internship_details').serialize(),
                    success:function(rt)
                    {
                        alert(rt);
                        $('#internship_details')[0].reset();
                    }
                });
            });
        });
    </script>


<?php 
		  // }
	   }
	   else {
		   
	   }
		   
	   }
	   
	   
	   