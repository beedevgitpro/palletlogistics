<?php
if(isset($_REQUEST['reconcilation']))
{
	$id=$_REQUEST['reconcilation'];
	if($id==1)
	{
	?>
	                                             <form action="" method="post">
		                                         <div class="col-md-12 radiobtnbox">
										                 <div class="col-md-4">
																<input type="radio" name="reconcilation" value="reconcilation_summary">Reconcilation Summary<br>
																<input type="radio" name="reconcilation" value="reconcilation_detailed"> Reconcilation Detailed<br>
																<input type="radio" name="reconcilation" value="variance_snapshot_graph"> variance - snapshot - graph<br>
																<input type="radio" name="reconcilation" value="variance_snapshot_data"> variance - snapshot - data<br>
																<input type="radio" name="reconcilation" value="variance_snapshot_export_csv"> variance - snapshot - export to CSV text file<br>
																<input type="radio" name="reconcilation" value="variance_history_graph"> variance -history- graph<br>
										                     	</div>
                                                                <div class="col-md-8">
											                     </div>	
                                                    </div> 
                                                    
													 <div class="row">
														     <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="field-4" class="control-label">Location TP</label>
                                                      <select name="location_tp" class="required form-control valid" aria-required="true" aria-invalid="false">
                                                      <option hidden>--- Select Location TP---</option>
												
                                                     <?php $result=$this->User_Model->fetch_trading_partner();
                                                       foreach ($result as $row) {
                                                      ?>

                                                       <option value="<?php echo $row->memberId;?>"><?php echo $row->tp_name."--------------".$row->tp_type; ?>
													   
													   </option>
                                                       <?php
                                                        }
                                                 ?>
                                                 </select>
                                                      </div>
                                                      </div>
                                                       </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                        <div class="form-group">
                                                    <label for="field-3" class="control-label">Equipment</label>
                                                   <select name="equipment" class="required form-control valid" aria-required="true" aria-invalid="false">
                                                    <option>--- Select Equipment---</option>
												    <option value="">All Equipments</option>
                                                   <?php $result=$this->User_Model->fetch_equipment();
                                                     foreach ($result as $row) 
													   {
                                                       ?>
                                                       <option value="<?php echo $row->metaid;?>"><?php echo $row->equipment; ?></option>
                                                       <?php
                                                        }
                                                    ?>
                                                
                                                
                                                 </select>
                                                            </div>
                                                        </div>
                                                    </div>
																	        <div class="row">
                                                  <div class="col-md-6">
                                                            <div class="form-group datecontainer">
                                                                <label for="field-1" class="control-label">From Date</label>
                                                                <input type="text" name="from_date" data-inputmask="'alias': 'date'" class="form-control" id="field-1" placeholder="dd/mm/yyyy">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group datecontainer">
                                                                <label for="field-2" class="control-label">To Date</label>
                                                         <input type="text"  name="to_date" data-inputmask="'alias': 'date'" class="form-control" id="field-4" placeholder="dd/mm/yyyy">
                                                            </div>
                                                        </div>
                                                    </div>
													          <div class="col-md-12 radiobtnbox">
										                 <div class="col-md-4">
																<input type="checkbox" name="include_stocktake" value="male">Include Stocktake Count Details<br>
																<input type="checkbox" name="display_seprately" value="female"> Display 'In Transit' Seprately<br>
																<input type="checkbox" name="six_month" value="other"> Include 6 - Month Variance Summary<br>
																<input type="checkbox" name="six_week" value="other"> Include 6 - Week variance Summary<br>
																<input type="checkbox" name="reported_variance" value="other"> Use Reported Variance From Stocktake
																
										                     	</div>
                                                                <div class="col-md-8">
											                     </div>	
                                                    </div> 
													       </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-info waves-effect waves-light">Filter Data</button>
                                                </div>
                                                    <button type="submit" name="submit" value="1" class="btn btn-info waves-effect waves-light">Open Report</button> 
                                            </div>
											</form>
										
																 
	<?php
	}
	if($id==2)
	{ ?>
<br>
</br>
</br>
<div class="col-md-12">

<div class="col-md-2">Report Type
</div>

<div class="col-md-8"></div>

</div>
<br>

		 <div class="col-md-12 radiobtnbox">
										                 <div class="col-md-4">
																<input type="radio" name="gender" value="male">Bill Prediction Based On Movement Date<br>
																<input type="radio" name="gender" value="female">Bill Prediction Based On Effective Date<br>
																
										                     	</div>
                                                                <div class="col-md-8">
											                     </div>	
                                                    </div> 
													<div class="container">
  <h2>  .</h2>
  <div class="panel panel-default">
													 <div class="row">
                                               		          <div class="col-md-12 radiobtnbox">
										                 <div class="col-md-4">
														 
																<input type="checkbox" name="gender" value="male">Exclude transfer Off movements that have been exported<br>
																
													
																
										                     	</div>
                                                                <div class="col-md-8">
											                     </div>	
                                                    </div>
													</div>
													</div>
													</div>
								
											
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="field-3" class="control-label">Equipment</label>
                                                         <select name="equipment" class="required form-control valid" aria-required="true" aria-invalid="false">
                                                 <option>--- Select Equipment---</option>
												 <option value="">All Equipments</option>
                                                 <?php $result=$this->User_Model->fetch_equipment();
                                             foreach ($result as $row) {
                                                      ?>

                                                       <option value="<?php echo $row->metaid;?>"><?php echo $row->equipment; ?></option>
                                                       <?php
                                                        }
                                                 ?>
                                                
                                                
                                                 </select>
                                                            </div>
                                                        </div>
												
														
											
                                                    </div>
																	        <div class="row">
                                                  <div class="col-md-6">
                                                            <div class="form-group datecontainer">
                                                                <label for="field-1" class="control-label">From Date</label>
                                                                <input type="text" data-inputmask="'alias': 'date'" class="form-control" id="field-1" placeholder="dd/mm/yyyy">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group datecontainer">
                                                                <label for="field-2" class="control-label">To Date</label>
                                                         <input type="text" data-inputmask="'alias': 'date'" class="form-control" id="field-4" placeholder="dd/mm/yyyy">
                                                            </div>
                                                        </div>
                                                    </div>
													<div class="container">
													          <div class="col-md-12 radiobtnbox">
										                 <div class="col-md-4">
																<input type="radio" name="gender" value="male">Movement date<br>
																<input type="radio" name="gender" value="female"> Effective date<br>
																<input type="radio" name="gender" value="other"> Other Trading Partner<br>
															
																
										                     	</div>
                                                                <div class="col-md-8">
											                     </div>	
                                                                    </div> 
																	</div><br>
																          <div class="col-md-12 radiobtnbox">
										                 <div class="col-md-4">
																<input type="checkbox" name="gender" value="male">Include Note for Normal Movements<br>
																<input type="checkbox" name="gender" value="female">Include Note for Rejection Reversal,Correction & Reinstatements <br>
																
															
																
										                     	</div>
                                                                <div class="col-md-8">
											                     </div>	
                                                    </div> 
	<?php	
	}
	
	
	if($id==3)
	{
		?>
		
		
		<br>
</br>
</br>
<div class="col-md-12">

<div class="col-md-2">Report Type
</div>

<div class="col-md-8"></div>

</div>
<br>

		 <div class="col-md-12 radiobtnbox">
										                 <div class="col-md-4">
																<input type="radio" name="gender" value="male">Amount Graph<br>
																<input type="radio" name="gender" value="female">Summary Data<br>
																
										                     	</div>
                                                                <div class="col-md-8">
											                     </div>	
                                                    </div> 
													<div class="container">
  <h2>  .</h2>
  <div class="panel panel-default">
													 <div class="row">
                                               		          <div class="col-md-12 radiobtnbox">
										                 <div class="col-md-4">
														 
																<input type="checkbox" name="gender" value="male">Exclude transfer Off movements that have been exported<br>
																
													
																
										                     	</div>
                                                                <div class="col-md-8">
											                     </div>	
                                                    </div>
													</div>
													</div>
													</div>
								
											
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="field-3" class="control-label">Equipment</label>
                                                         <select name="equipment" class="required form-control valid" aria-required="true" aria-invalid="false">
                                                 <option>--- Select Equipment---</option>
												 <option value="">All Equipments</option>
                                                 <?php $result=$this->User_Model->fetch_equipment();
                                             foreach ($result as $row) {
                                                      ?>

                                                       <option value="<?php echo $row->metaid;?>"><?php echo $row->equipment; ?></option>
                                                       <?php
                                                        }
                                                 ?>
                                                
                                                
                                                 </select>
                                                            </div>
                                                        </div>
												
														
											
                                                    </div>
												<div class="row">
                                                  <div class="col-md-6">
                                                            <div class="form-group datecontainer">
                                                                <label for="field-1" class="control-label">From Date</label>
                                                                <input type="text" data-inputmask="'alias': 'date'" class="form-control" id="field-1" placeholder="dd/mm/yyyy">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group datecontainer">
                                                                <label for="field-2" class="control-label">To Date</label>
                                                         <input type="text" data-inputmask="'alias': 'date'" class="form-control" id="field-4" placeholder="dd/mm/yyyy">
                                                            </div>
                                                        </div>
                                                    </div>
												
		<?php
	}
	if($id==4)
	{
		?>
		<style>
		.box {
    border: 1px solid #adadad;
    padding: 15px 0;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
		                             <div class="col-md-12 radiobtnbox">
									 <div class="col-md-4">
									<input type="radio" id="toggleElement"  name="gender" onchange="toggleStatus()" >Summary data - location comparison for each equipment item<br>
									<input type="radio" name="gender" value="female" onchange="toggleStatus()">Summary data - equipment comparison<br>
									<input type="radio" name="gender" value="other" onchange="toggleStatusss()">Detailed transaction list<br>
										</div>
                                     <div class="col-md-8">
				                      </div>	                 
                                     </div> 
                                                    
													 <div class="row">
														    <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="field-4" class="control-label">Location TP</label>
                                                    <select name="trading_partner" class="required form-control valid" aria-required="true" aria-invalid="false">
                                                 <option hidden>--- Select Location TP---</option>
												
                                                 <?php $result=$this->User_Model->fetch_trading_partner();
                                             foreach ($result as $row) {
                                                      ?>

                                                       <option value="<?php echo $row->memberId;?>"><?php echo $row->tp_name."--------------".$row->tp_type; ?>
													   
													   </option>
                                                       <?php
                                                        }
                                                 ?>
                                                 </select>
                                                            </div>
                                                        </div>
                                                    </div>
											
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="field-3" class="control-label">Equipment</label>
                                                         <select name="equipment" class="required form-control valid" aria-required="true" aria-invalid="false">
                                                 <option>--- Select Equipment---</option>
												 <option value="">All Equipments</option>
                                                 <?php $result=$this->User_Model->fetch_equipment();
                                             foreach ($result as $row) {
                                                      ?>

                                                       <option value="<?php echo $row->metaid;?>"><?php echo $row->equipment; ?></option>
                                                       <?php
                                                        }
                                                 ?>
                                                
                                                
                                                 </select>
                                                            </div>
                                                        </div>
                                                    </div>
												<div class="row">
                                                  <div class="col-md-6">
                                                            <div class="form-group datecontainer">
                                                                <label for="field-1" class="control-label">From Date</label>
                                                                <input type="text" data-inputmask="'alias': 'date'" class="form-control" id="field-1" placeholder="dd/mm/yyyy">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group datecontainer">
                                                                <label for="field-2" class="control-label">To Date</label>
                                                         <input type="text" data-inputmask="'alias': 'date'" class="form-control" id="field-4" placeholder="dd/mm/yyyy">
                                                            </div>
                                                        </div>
                                                    </div>
													<div  id="elementsToOperateOn">
																  <div class="row box">
															            <div class="col-md-12 radiobtnbox">
										                 <div class="col-md-4">
																<input type="radio" name="gender" value="male">Movement Date<br>
																<input type="radio" name="gender" value="female">Effective Date<br>
																<input type="radio" name="gender" value="other"> Other Trading Partner
																
										                     	</div>
                                                                <div class="col-md-8">
											                     </div>	
                                                             </div> 
															  
															  </div>
													          <div class="col-md-12 radiobtnbox">
										                 <div class="col-md-4" >
																<input type="checkbox" name="gender" value="male">Include note for Normal movements<br>
																<input type="checkbox" name="gender" value="female"> Include note for Rejection,Reversal,Correction & Reinstatement movements<br>
																<input type="checkbox" name="gender" value="other">Charge extra day exchange one(like transfer on)<br>
																<input type="checkbox" name="gender" value="other"> Display quantity running Balance Instead Of rent days<br>
																<input type="checkbox" name="gender" value="other">Display reconcilation status in the totals row
																
										                     	</div>
                                                                <div class="col-md-8">
											                     </div>	
                                                             </div> 
															 </div>
															 
															 

</form>
  
       
</div>
															 
															 <script>
 $(document).ready(function() {
  handleStatusChanged();
  
});

function handleStatusChanged() {
    $('#toggleElement').on('change', function () {
      toggleStatus();   
    });
}

function toggleStatus() {
    if ($('#toggleElement').is(':checked')) {
        $('#elementsToOperateOn :input').attr('disabled', true);
    } else {
        $('#elementsToOperateOn :input').removeAttr('disabled');
    }   
}
function toggleStatusss() {
    if ($('#toggleElement').is(':checked')) {
        $('#elementsToOperateOn :input').attr('disabled', false);
    } else {
        $('#elementsToOperateOn :input').removeAttr('disabled');
    }   
}
</script>
												
													<?php
		
	}
	
	
	
	
}



if(isset($_REQUEST['movement_report']))
{
	$id=$_REQUEST['movement_report'];
	if($id==1)
	{
		?>
							  <div class="col-md-6">
                                                            <div class="form-group checkboxcontainer">
                                                    <h5 class="modal-title" onclick=""></h5>
													<br>
													<h5 class="modal-title"></h5>
													</div>
													</div>
													  <div class="col-md-6">
                                                            <div class="form-group checkboxcontainer">
													<h5 class="modal-title"></h5>
													<br>
													<h5 class="modal-title"></h5>
													</div>
													</div>
                                            
                                                <div class="modal-body">
												     <div class="row">
													 
                                                  <div class="col-md-12 radiobtnbox">
                                                            <div class="form-group checkboxcontainer">
                                                                <input type="radio" name="t_on_tissue" class="form-control" value='' id="field-1" placeholder="John">
                                                                <label for="field-1" class="control-label">All Transfers</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 radiobtnbox">
                                                            <div class="form-group checkboxcontainer">
                                                         <input type="radio" name="t_on_tissue" class="form-control" value='1|3' id="field-4" placeholder="Boston">
                                                                <label for="field-2" class="control-label">Transfer On & Issue Transaction only</label>
                                                            </div>
                                                        </div>
														  <div class="col-md-12 radiobtnbox">
                                                            <div class="form-group checkboxcontainer">
                                                         <input type="radio" name="t_on_tissue" class="form-control" value='2|4' id="field-4" placeholder="Boston">
                                                                <label for="field-2" class="control-label">Transfer Off & Dehire Transaction Only</label>
                                                            </div>
                                                        </div>
														 
                                                    </div>
													     <div class="row">
													 
                                                  <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="field-1" class="control-label">&nbsp;&nbsp;Sort Order</label>
                                                     <select name="order_by" class="form-control valid" aria-required="true" aria-invalid="false">
                                                       <option value="">Sort Order</option>
                                                       <option value="equipment">Equipment</option>
                                                       <option value="date_time">Date</option>
                                                       </select>
                                                            </div>
                                                        </div>
														
														<div class="clearfix"></div>
														
                                                        <div class="col-md-6">
                                                            <div class="form-group checkboxcontainer">
                                                         <input type="checkbox" name="type" class="form-control" id="field-4" value="1|2|3|4|5" placeholder="Boston">
                                                                <label for="field-2" class="control-label">Include Rejection,Reversal,Correction & Reinstatement Movements</label>
                                                            </div>
                                                        </div>
													
														 
                                                    </div>
											
                                              
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="field-3" class="control-label">Equipment</label>
                                                         <select name="equipment_id" class="form-control valid" aria-required="true" aria-invalid="false">
                                                
												 <option value="">All Equipments</option>
                                                 <?php $result=$this->User_Model->fetch_equipment();
                                             foreach ($result as $row) {
                                                      ?>

                                                       <option value="<?php echo $row->metaid;?>"><?php echo $row->equipment; ?></option>
                                                       <?php
                                                        }
                                                 ?>
                                                
                                                
                                                 </select>
                                                            </div>
                                                        </div>
														    <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="field-4" class="control-label">3rd Party TP</label>
                                                    <select name="third_parties" class="form-control valid" aria-required="true" aria-invalid="false">
												<option value="">select 3rd Parties</option>
                                                 <option value="">All 3rd Parties</option>
												  
                                                 <?php $result=$this->User_Model->fetch_trading_partner();
                                             foreach ($result as $row) {
                                                      ?>

                                              <option value="<?php echo $row->memberId;?>"><?php echo $row->tp_name; ?>
													   
											
													   
													   
													   
													   </option>
                                                       <?php
                                                        }
                                                 ?>
                                                
                                                
                                                 </select>
                                                            </div>
                                                        </div>
														
											
                                                    </div>
													         <div class="row">
                                        
														                <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="field-4" class="control-label">Location TP</label>
                                                 <select name="tp_location" class="form-control valid" aria-required="true" aria-invalid="false">
                                                 <option  value=''>All Location TP</option>
												 
                                                 <?php $result=$this->User_Model->fetch_trading_partner_location();
                                             foreach ($result as $row) {
                                                      ?>

                                                       <option value="<?php echo $row->memberId;?>"><?php echo $row->tp_name; ?>
													   
													   
													   </option>
                                                       <?php
                                                        }
                                                 ?>
                                                
                                                
                                                 </select>
                                                            </div>
                                                        </div>
														
											
                                                    </div>
													        <div class="row">
                                                  <div class="col-md-6">
                                                            <div class="form-group datecontainer">
                                                                <label for="field-1" class="control-label">From Date</label>
                                                                <input type="text" data-inputmask="'alias': 'date'" data-date="" data-date-format="DD-M-YYYY" value="<?php echo date('Y-m-d');?>" class="required form-control ddmmyy" name="from_date">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group datecontainer">
                                                                <label for="field-2" class="control-label">To Date</label>
                                                         <input type="text" data-inputmask="'alias': 'date'" data-date="" data-date-format="DD-M-YYYY" value="<?php echo date('Y-m-d');?>" class="required form-control ddmmyy" name="to_date">
                                                            </div>
                                                        </div>
                                                    </div>
                                      
                                               
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="submit" name="submit" class="btn btn-info waves-effect waves-light">Filter Data</button>
                                                </div>
                                            </div>
                                        </div>
										<?php
	}
}



?>