<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Edi_Model extends CI_Model
{
    var $multibyte = 4; // Use setUnicode(TRUE|FALSE)
	var $convertquotes = ENT_QUOTES; // ENT_COMPAT (double-quotes), ENT_QUOTES (Both), ENT_NOQUOTES (None)
	var $showprogress = true; // TRUE if you have problems with time-out
	// Variables
	var $filename = '';
	var $decodedtext = '';
	function __construct()
	{
		// Call the Model constructor
        parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}

	public function update_tra( $id,$data,$res ){
		 	   if( $res == 'tpa_'){
                $query = $this->db->query("update trading_partner_accounts set tpa_third_party = '$data' where tpa_id = '$id'");
			        return true;
               }
              
               else if ( $res == 'tpas'){
                 $query = $this->db->query("update trading_partner_accounts set tpa_supplier = '$data' where tpa_id = '$id'");
			        return true;
                }
                else if ( $res == 'tpaa'){
                	$query = $this->db->query("update trading_partner_accounts set tpa_account_number = '$data' where tpa_id = '$id'");
			        return true;
                }
                else if ( $res == 'tpar'){
                	$query = $this->db->query("update trading_partner_accounts set tpa_tn_delay_rule = '$data' where tpa_id = '$id'");
			        return true;
                }
                else if ( $res == 'tpam'){
               		$query = $this->db->query("update trading_partner_accounts set tpa_allow_tf = '$data' where tpa_id = '$id'");
			        return true;
                }
                else if ( $res == 'tpad'){
                	$query = $this->db->query("update trading_partner_accounts set tpa_tf_delay_type = '$data' where tpa_id = '$id'");
			        return true;
                }
                else if ( $res == 'tpaf'){
                	$query = $this->db->query("update trading_partner_accounts set tpa_tf_delay_days = '$data' where tpa_id = '$id'");
			        return true;
                }
                else if ( $res == 'tptf'){
                	$query = $this->db->query("update trading_partner_accounts set tpa_tf_delay_rule = '$data' where tpa_id = '$id'");
			        return true;
                }
                else if ( $res == 'tpsp'){
                	$query = $this->db->query("update trading_partner_accounts set tpa_redeem_exchange = '$data' where tpa_id = '$id'");
			        return true;
                }
                else if ( $res == 'tpav'){
                	$query = $this->db->query("update trading_partner_accounts set tpa_redeem_same = '$data' where tpa_id = '$id'");
			        return true; 
                }
                else if ( $res == 'tpai'){
                	$query = $this->db->query("update trading_partner_accounts set tpa_complete = '$data' where tpa_id = '$id'");
			        return true;
                }
                else if ( $res == 'tpan'){
                	$query = $this->db->query("update trading_partner_accounts set tpa_override_export_status = '$data' where tpa_id = '$id'");
			        return true;
                }
                else if ( $res == 'tpac'){
                	$query = $this->db->query("update trading_partner_accounts set tpa_export_on = '$data' where tpa_id = '$id'");
			        return true;
                }
                else if ( $res == 'tpao'){
                	$query = $this->db->query("update trading_partner_accounts set tpa_export_off = '$data' where tpa_id = '$id'");
			        return true;
                }
                 else if ( $res == 'tpaq'){
                	$query = $this->db->query("update trading_partner_accounts set tpa_docket_format = '$data' where tpa_id = '$id'");
			        return true;
                }
                else if ( $res == 'tpae'){
                	$query = $this->db->query("update trading_partner_accounts set tpa_con_note_required = '$data' where tpa_id = '$id'");
			        return true;
                }
                else if ( $res == 'tpaw'){
               		$query = $this->db->query("update trading_partner_accounts set tpa_con_note_characters = '$data' where tpa_id = '$id'");
			        return true;
                }
                else if ( $res == 'tpay'){
                	$query = $this->db->query("update trading_partner_accounts set tpa_con_note_numeric = '$data' where tpa_id = '$id'");
			        return true;
                }
                else if ( $res == 'tpaz'){
                	$query = $this->db->query("update trading_partner_accounts set tpa_con_note_decription = '$data' where tpa_id = '$id'");
			        return true;
                }
                else if ( $res == 'tpax'){
                	$query = $this->db->query("update trading_partner_accounts set tpa_reminder = '$data' where tpa_id = '$id'");
			        return true;
                }
                else if ( $res == 'tpcv'){
                	$query = $this->db->query("update trading_partner_accounts set tpa_notes = '$data' where tpa_id = '$id'");
			        return true;
                }
	}

   public function update_bill_s( $id,$data,$res ){
   		
   		       if( $res == 'sour'){
	                $query = $this->db->query("update bills set source = '$data' where bills_id = '$id'");
			        return true;
               }
               elseif ( $res == 'equi' ) {
               		$query = $this->db->query("update bills set equipment = '$data' where bills_id = '$id'");
			        return true; 
               }
               else if ( $res == 'open'){
	                $query = $this->db->query("update bills set opening_balance = '$data' where bills_id = '$id'");
			        return true; 
                }
                else if ( $res == 'quan'){
                	$query = $this->db->query("update bills set quantity_on = '$data' where bills_id = '$id'");
			        return true; 
                }
                else if ( $res == 'Unre'){
                	$query = $this->db->query("update bills set Unreconciled_qty_on = '$data' where bills_id = '$id'");
			        return true;
                }
                else if ( $res == 'qsua'){
                	$query = $this->db->query("update bills set quantity_off = '$data' where bills_id = '$id'");
			        return true;
                }
                else if ( $res == 'unre'){
                	$query = $this->db->query("update bills set unreconciled_qty_off = '$data' where bills_id = '$id'");
			        return true;
                }
                else if ( $res == 'clos'){
                	$query = $this->db->query("update bills set closing_balance = '$data' where bills_id = '$id'");
			        return true;
                }
                else if ( $res == 'equi'){
                	$query = $this->db->query("update bills set equipment_days = '$data' where bills_id = '$id'");
			        return true;
                }
                else if ( $res == 'sunr'){
                	$query = $this->db->query("update bills set unreconciled_equipment_days = '$data' where bills_id = '$id'");
			        return true;
                }
                else if ( $res == 'rent'){
                	$query = $this->db->query("update bills set rent_unit_price = '$data' where bills_id = '$id'");
			        return true;
                }
                else if ( $res == 'uren'){
	                $query = $this->db->query("update bills set rent = '$data' where bills_id = '$id'");
			        return true;
                }
                else if ( $res == 'fees'){
                	$query = $this->db->query("update bills set fees = '$data' where bills_id = '$id'");
			        return true;
                }
                else if ( $res == 'Othe'){
                	$query = $this->db->query("update bills set Other_charges = '$data' where bills_id = '$id'");
			        return true;
                }
                 else if ( $res == 'amou'){
                	$query = $this->db->query("update bills set amount = '$data' where bills_id = '$id'");
			        return true;
                }
                else if ( $res == 'unsr'){
                	$query = $this->db->query("update bills set unreconciled_amount = '$data' where bills_id = '$id'");
			        return true;
                }
	}

  public function update2_sender_receiver($id,$data,$res)
  {
  	if( $res == 'send'){
	   	 	$query = $this->db->query("update sender_receiver set sender_receiver_name = '$data' where sender_receiver_id = '$id'");
		     return true;
	   	 }
	 else if( $res == 'phon' ){
	   	 	$query = $this->db->query("update sender_receiver set phone_number = '$data' where sender_receiver_id = '$id'");
		     return true;
	   	 }
	 else if( $res == 'mobi' ){
	   	 	$query = $this->db->query("update sender_receiver set mobile_number = '$data' where sender_receiver_id = '$id'");
		     return true;
	   	 }
	 else if( $res == 'emai' ){
	   	 	$query = $this->db->query("update sender_receiver set email = '$data' where sender_receiver_id = '$id'");
		     return true;
	   	 } 
	  else if( $res == 'trad' ){
	   	 	$query = $this->db->query("update sender_receiver set trading_partner_name = '$data' where sender_receiver_id = '$id'");
		     return true;
	   	 }     	 	  	 
  }

  public function update2_stocktakes($id,$data,$res)
  {
  	if( $res == 'book'){
	   	 	$query = $this->db->query("update stocktakes set book_stock = '$data' where id = '$id'");
		     return true;
	   	 }
	 else if( $res == 'phys' ){
	   	 	$query = $this->db->query("update stocktakes set physical_stock = '$data' where id = '$id'");
		     return true;
	   	 }
	 else if( $res == 'shri' ){
	   	 	$query = $this->db->query("update stocktakes set shrinkage = '$data' where id = '$id'");
		     return true;
	   	 }
	 else if( $res == 'repo' ){
	   	 	$query = $this->db->query("update stocktakes set reported_variance = '$data' where id = '$id'");
		     return true;
	   	 } 
	 else if( $res == 'note' ){
	   	 	$query = $this->db->query("update stocktakes set notes = '$data' where id = '$id'");
		     return true;
	   	 }  
	 else if( $res == 'trad' ){
	   	 	$query = $this->db->query("update stocktakes set trading_partner = '$data' where id = '$id'");
		     return true;
	   	 }  
	 else if( $res == 'equi' ){
	   	 	$query = $this->db->query("update stocktakes set equipment = '$data' where id = '$id'");
		     return true;
	   	 }  
	 else if( $res == 'rece' ){
	   	 	$query = $this->db->query("update stocktakes set receiving_tp = '$data' where id = '$id'");
		     return true;
	   	 }  	  	   	    	 	  	 
  }

  public function update2_carr_s($id,$data,$res)
  {
  	if( $res == 'carr'){
	   	 	$query = $this->db->query("update carrier set carrier = '$data' where carrier_id = '$id'");
		     return true;
	   	 }
   else if( $res == 'note' ){
	   	 	$query = $this->db->query("update carrier set notes = '$data' where carrier_id = '$id'");
		     return true;
	   	 }
  }

   public function update2_trading_s($id,$data,$res){
	   	 if( $res == 'tp_n'){
	   	 	$query = $this->db->query("update member_management set tp_name = '$data' where metaId = '$id'");
		     return true;
	   	 }
	   	 else if( $res == 'code' ){
	   	 	$query = $this->db->query("update member_management set code = '$data' where metaId = '$id'");
		     return true;
	   	 }
	   	  else if( $res == 'emai' ){
	   	 	$query = $this->db->query("update member_management set emailid = '$data' where metaId = '$id'");
		     return true;
	   	 }
	   	 else if( $res == 'noti' ){
	   	 	$query = $this->db->query("update member_management set notify = '$data' where metaId = '$id'");
		     return true;
	   	 }
	   	 else if( $res == 'phon' ){
	   	 	$query = $this->db->query("update member_management set phone_number = '$data' where metaId = '$id'");
		     return true;
	   	 }
	   	  else if( $res == 'inte' ){
	   	 	$query = $this->db->query("update member_management set internal = '$data' where metaId = '$id'");
		     return true;
	   	 }
	   	 else if( $res == 'tp_p' ){
	   	 	$query = $this->db->query("update member_management set tp_primary = '$data' where metaId = '$id'");
		     return true;
	   	 }
	   	 else if( $res == 'spec' ){
	   	 	$query = $this->db->query("update member_management set special = '$data' where metaId = '$id'");
		     return true;
	   	 }
	   	  else if( $res == 'loca' ){
	   	 	$query = $this->db->query("update member_management set location = '$data' where metaId = '$id'");
		     return true;
	   	 }
	   	  else if( $res == 'lice' ){
	   	 	$query = $this->db->query("update member_management set licence_number = '$data' where metaId = '$id'");
		     return true;
	   	 }
	   	  else if( $res == 'note' ){
	   	 	$query = $this->db->query("update member_management set notes = '$data' where metaId = '$id'");
		     return true;
	   	 }
	   	 else if( $res == 'tp_t' ){
	   	 	$query = $this->db->query("update member_management set tp_type = '$data' where metaId = '$id'");
		     return true;
	   	 }
   }

	public function update2_movements($id,$data)
	{		
		$query = $this->db->query("update movements set movements_date = '$data' where movements_id = '$id'");
	     return true;
	}

	public function update_referene($id,$data)
	{		
		$query = $this->db->query("update movements set reference = '$data' where movements_id = '$id'");
	     return true;
	}

	public function update_equipment($id,$data)
	{		
		$query = $this->db->query("update movements set equipment = '$data' where movements_id = '$id'");
	     return true;
	}

	public function update_sending($id,$data)
	{		
		$query = $this->db->query("update movements set sending_tp = '$data' where movements_id = '$id'");
	     return true;
	}

	public function update_trading($id,$data)
	{		
		$query = $this->db->query("update movements set receiving_tp = '$data' where movements_id = '$id'");
	     return true;
	}

	public function update_quality($id,$data)
	{		
		$query = $this->db->query("update movements set quantity = '$data' where movements_id = '$id'");
	     return true;
	}

	public function table_transfer($id,$data)
	{		
		$query = $this->db->query("update movements set transfer = '$data' where movements_id = '$id'");
	     return true;
	}

	public function update_transcation($id,$data)
	{		
		$query = $this->db->query("update movements set transaction = '$data' where movements_id = '$id'");
	     return true;
	}

	public function update_effective($id,$data)
	{		
		$query = $this->db->query("update movements set effective_date = '$data' where movements_id = '$id'");
	     return true;
	}

	public function update_docket($id,$data)
	{		
		$query = $this->db->query("update movements set docket_number = '$data' where movements_id = '$id'");
	     return true;
	}

	public function update_rai($id,$data)
	{		
		$query = $this->db->query("update movements set rai_corr = '$data' where movements_id = '$id'");
	     return true;
	}

	public function update_carrier($id,$data)
	{		
		$query = $this->db->query("update movements set carrier = '$data' where movements_id = '$id'");
	     return true;
	}

	public function update_type($id,$data)
	{		
		$query = $this->db->query("update movements set type = '$data' where movements_id = '$id'");
	     return true;
	}

	public function update_orig($id,$data)
	{		
		$query = $this->db->query("update movements set orig_movemevt = '$data' where movements_id = '$id'");
	     return true;
	}

	public function update_export($id,$data)
	{		
		$query = $this->db->query("update movements set export = '$data' where movements_id = '$id'");
	     return true;
	}

	public function update_bill($id,$data)
	{		
		$query = $this->db->query("update movements set bill = '$data' where movements_id = '$id'");
	     return true;
	}

	public function update_notes($id,$data)
	{		
		$query = $this->db->query("update movements set notes = '$data' where movements_id = '$id'");
	     return true;
	}
	
	public function update_batch($id,$data)
	{		
		$query = $this->db->query("update movements set batch = '$data' where movements_id = '$id'");
	     return true;
	}



}
