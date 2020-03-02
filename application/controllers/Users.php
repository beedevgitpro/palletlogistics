<?php
date_default_timezone_set("Australia/Sydney");
//date_default_timezone_set("Asia/Kolkata");
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller {
	function __construct()
	{
        parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->helper('form');
        $this->load->library('form_validation');
		$this->load->model('User_Model');
		$this->load->model('Admin_model');
		$this->load->helper('url');
		$this->load->library('parser');
		
	}
	
public function load_carrier()
{
  //       $this->db->order_by('carrier_id', 'DESC');
		// $query = $this->db->get('carrier_view');
		// $datas=$query->result_array();
			$urlid = $_GET['urlid'];
			$this->load->library("pagination");
	        $configs = array();
            $configs["base_url"] = base_url()."Users/view_carrier" ;
            $configs["total_rows"] = $this->User_Model->get_count();
       	    $configs["per_page"] = 5;
            $configs["uri_segment"] =5	;
            $this->pagination->initialize($configs);
			$page = (is_numeric($urlid)) ? $urlid : 0;
			$data["links"] = $this->pagination->create_links();
			$data['authors'] = $this->User_Model->get_authors($configs["per_page"], $page);
		    echo json_encode($data);	
}





}




