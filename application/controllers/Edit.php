<?php
date_default_timezone_set("Australia/Sydney");
//date_default_timezone_set("Asia/Kolkata");
defined('BASEPATH') OR exit('No direct script access allowed');
class Edit extends CI_Controller {
	function __construct()
	{
        parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->helper('form');
        $this->load->library('form_validation');
		$this->load->model('User_Model');
		$this->load->model('Admin_model');
		$this->load->model('Edi_Model');
		$this->load->helper('url');
		$this->load->library('parser');
		$this->load->library("pagination");	 
		ini_set('max_execution_time', 0);
        ini_set("memory_limit", "1024M");
		
	}



	public function update_date(){
		
	$date = $_POST['Dates'];
	$id = $_POST['ids'];
	$res = $this->Edi_Model->update2_movements($id,$date);

	if( $res == 1 ){
		echo "success";
	}
	else{
		echo "not success";
	}	
}

public function update_referene(){
		
	$date = $_POST['Dates'];
	$id = $_POST['ids'];
	$res = $this->Edi_Model->update_referene($id,$date);

	if( $res == 1 ){
		echo "success";
	}
	else{
		echo "not success";
	}	
}

public function update_equipment(){
		
	$date = $_POST['Dates'];
	$id = $_POST['ids'];
	$res = $this->Edi_Model->update_equipment($id,$date);

	if( $res == 1 ){
		echo "success";
	}
	else{
		echo "not success";
	}	
}

public function update_sending(){
		
	$date = $_POST['Dates'];
	$id = $_POST['ids'];
	$res = $this->Edi_Model->update_sending($id,$date);

	if( $res == 1 ){
		echo "success";
	}
	else{
		echo "not success";
	}	
}

public function update_trading(){
		
	$date = $_POST['Dates'];
	$id = $_POST['ids'];
	$res = $this->Edi_Model->update_trading($id,$date);

	if( $res == 1 ){
		echo "success";
	}
	else{
		echo "not success";
	}	
}

public function update_quality(){
		
	$date = $_POST['Dates'];
	$id = $_POST['ids'];
	$res = $this->Edi_Model->update_quality($id,$date);

	if( $res == 1 ){
		echo "success";
	}
	else{
		echo "not success";
	}	
}

public function table_transfer(){
		
	$date = $_POST['Dates'];
	$id = $_POST['ids'];
	$res = $this->Edi_Model->table_transfer($id,$date);

	if( $res == 1 ){
		echo "success";
	}
	else{
		echo "not success";
	}	
}

public function update_transcation(){
		
	$date = $_POST['Dates'];
	$id = $_POST['ids'];
	$res = $this->Edi_Model->update_transcation($id,$date);

	if( $res == 1 ){
		echo "success";
	}
	else{
		echo "not success";
	}	
}
public function update_effective(){
		
	$date = $_POST['Dates'];
	$id = $_POST['ids'];
	$res = $this->Edi_Model->update_effective($id,$date);

	if( $res == 1 ){
		echo "success";
	}
	else{
		echo "not success";
	}	
}

public function update_docket(){
		
	$date = $_POST['Dates'];
	$id = $_POST['ids'];
	$res = $this->Edi_Model->update_docket($id,$date);

	if( $res == 1 ){
		echo "success";
	}
	else{
		echo "not success";
	}	
}

public function update_rai(){
		
	$date = $_POST['Dates'];
	$id = $_POST['ids'];
	$res = $this->Edi_Model->update_rai($id,$date);

	if( $res == 1 ){
		echo "success";
	}
	else{
		echo "not success";
	}	
}

public function update_carrier(){
		
	$date = $_POST['Dates'];
	$id = $_POST['ids'];
	$res = $this->Edi_Model->update_carrier($id,$date);

	if( $res == 1 ){
		echo "success";
	}
	else{
		echo "not success";
	}	
}

public function update_type(){
		
	$date = $_POST['Dates'];
	$id = $_POST['ids'];
	$res = $this->Edi_Model->update_type($id,$date);

	if( $res == 1 ){
		echo "success";
	}
	else{
		echo "not success";
	}	
}

public function update_orig(){
		
	$date = $_POST['Dates'];
	$id = $_POST['ids'];
	$res = $this->Edi_Model->update_orig($id,$date);

	if( $res == 1 ){
		echo "success";
	}
	else{
		echo "not success";
	}	
}
public function update_export(){
		
	$date = $_POST['Dates'];
	$id = $_POST['ids'];
	$res = $this->Edi_Model->update_export($id,$date);

	if( $res == 1 ){
		echo "success";
	}
	else{
		echo "not success";
	}	
}

public function update_bill(){
		
	$date = $_POST['Dates'];
	$id = $_POST['ids'];
	$res = $this->Edi_Model->update_bill($id,$date);

	if( $res == 1 ){
		echo "success";
	}
	else{
		echo "not success";
	}	
}
public function update_notes(){
		
	$date = $_POST['Dates'];
	$id = $_POST['ids'];
	$res = $this->Edi_Model->update_notes($id,$date);

	if( $res == 1 ){
		echo "success";
	}
	else{
		echo "not success";
	}	
}
public function update_batch(){
		
	$date = $_POST['Dates'];
	$id = $_POST['ids'];
	$res = $this->Edi_Model->update_batch($id,$date);

	if( $res == 1 ){
		echo "success";
	}
	else{
		echo "not success";
	}	
}
}