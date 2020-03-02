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
