<?php
date_default_timezone_set("Australia/Sydney");
//date_default_timezone_set("Asia/Kolkata");
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
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
		$this->load->library("pagination");	 
		ini_set('max_execution_time', 0);
        ini_set("memory_limit", "1024M");
		
	}
	public function index()
	{
		
		$this->load->view('index/login');
	}
	public function dashboard()
	{
		$login_id=$this->session->userdata('id');
		$data['login_id']=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
			// $this->load->view('dashboard/index',$data);
			$this->load->view('dashboard/index_two',$data);
		}
	}
	public function add_franchise ()
	{
	$login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
			$this->load->view('franchise/add_franchise');
		}
	}
	public function view_franchise()
	{
	$login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
			$this->load->view('franchise/view_franchise');
		}
	}
	public function add_member()
	{
	    $login_id=$this->session->userdata('id');
	    $data['login_id']=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
		$this->load->view('member/add_member',$data);
		}
	}
	public function add_equipments()
	{
	    $login_id=$this->session->userdata('id');
	    $data['login_id']=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
		$this->load->view('level/add_equipments',$data);
		}
	}
	public function view_equipments()
	{
	$login_id=$this->session->userdata('id');
	$data['login_id']=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
			$this->load->view('level/view_equipments',$data);
		}
	}

		public function approve_member()
	{
	$login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
			$this->load->view('member/approve_member');
		}
	}
	
	public function view_incentive_level()
	{
	$login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
			$this->load->view('level/view_incentive_level');
		}
	}
	
	public function manage_ip()
	{
	$login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
			
		}
	}
	
	public function view_ip()
	{
	$login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
			$this->load->view('manage_ip/view_ip');
		}
	}
	
	public function getData()
	{
	$login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
			$this->load->view('headerfile/data1');
		}
	}
		public function reconcilation()
	{
	$login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
			$this->load->view('headerfile/reconcilation');
		}
	}
		public function findData()
	{
	$login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
			$this->load->view('headerfile/data');
		}
	}
	
	public function view_member()
	{
	$data['login_id']=$this->session->userdata('id');
	$login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
	$this->load->view('member/view_member',$data);
		}
	}
	
	public function update_trading_partner()
	{
		
	     $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
			$this->load->view('member/update_trading_partner');
		}
		
	}
	public function add_role(){
	    $login_id=$this->session->userdata('id');
	    if($login_id==null){redirect('User/');}
		else
		{
			$this->load->view('user_right/add_role');
		}
	}
	public function purchase_product(){
	    $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
			$this->load->view('dashboard/purchase_product');
		}
	}
	public function view_member_detail()
	{
	$login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
			$this->load->view('member/view_member_detail');
		}
	}
	public function view_role()
	{
	$login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
			$this->load->view('user_right/view_role');
		}
	}
	public function user_right()
	{
		$login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
		$this->load->view('user_right/user_right');
		}
	}
	public function Login()
	{
		//echo "test";exit;
		 $username=$this->input->post('username');
		 $password = $this->input->post('password');
		$result=$this->User_Model->Login($username,$password);
		//print_r($result);
		if($result)
		{
			foreach($result as $row)
            {
				$data=array(
			    'username'=> $row->username,
				'password'=> $row->password,
				'id'=> $row->login_id,
				'memberId'=> $row->memberId
			);
			}	
            
            $this->session->set_userdata($data);
           redirect(base_url().'User/dashboard');
		}
		else
		{
			//$this->session->set_userdata($data);
			redirect(base_url().'User/error');
		}
	}
	
	public function Logout()
	{
		$this->session->sess_destroy();
		$this->session->unset_userdata('id');
		//redirect('https://pallet.adtestbed.com/User/'); 
		redirect(base_url().'User');
		
		
	}
		public function member_card()
	{
	$login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
			$this->load->view('member/member_card');
		}
	}
	public function insert_franchise()
	{
	$login_id=$this->session->userdata('id');
	$franchise=$this->input->post('franchise');
	$state=$this->input->post('state');
	$description=$this->input->post('description');
	$date=date('Y-m-d H:i:s');
	
	$result=$this->User_Model->get_max_franchiseId();
	foreach($result as $row)
	{
	$franchiseId=$row->franchiseId;
	}
	$franchiseId=++$franchiseId;
	
	$data=array(
	'franchiseId'=>$franchiseId,
	'login_id'=>$login_id,
	'franchise'=>$franchise,
	'state'=>$state,
	'description'=>$description,
	'date_time'=>$date
	);
	
	$result1=$this->User_Model->insert_franchise($data);
	if($result1)
		{
			$this->session->set_flashdata('message','<div class="alert alert-success"><strong>Success !! </strong>Franchise Added successfully</div>');
			redirect('User/add_franchise');
		}
		else
		{
			$this->session->set_flashdata('message','|| Error ||');
			redirect('User/add_franchise');
		}
	}
	
	public function insert_level_incentive()
	{
	$login_id=$this->session->userdata('id');
	$level_name=$this->input->post('level_name');
	$level_percent=$this->input->post('level_percent');
	$level_ip=$this->input->post('level_ip');
	$level_incentive=$this->input->post('level_incentive');
	$date=date('Y-m-d H:i:s');
	
	$result=$this->User_Model->get_max_level_incentiveId();
	foreach($result as $row)
	{
	$level_incentiveId=$row->level_incentiveId;
	}
	$level_incentiveId=++$level_incentiveId;
	
	$data=array(
	'level_incentiveId'=>$level_incentiveId,
	'level_name'=>$level_name,
	'level_percent'=>$level_percent,
	'level_ip'=>$level_ip,
	'level_incentive'=>$level_incentive,
	'login_id'=>$login_id,
	'date_time'=>$date
	);
	$result1=$this->User_Model->insert_level_incentive($data);
	if($result1)
		{
			$this->session->set_flashdata('message','<div class="alert alert-success"><strong>Success !! </strong>Incentive Level Added successfully</div>');
			redirect('User/incentive_level');
		}
		else
		{
			$this->session->set_flashdata('message','|| Error ||');
			redirect('User/incentive_level');
		}
	}
	
	public function insert_ip()
	{
	$login_id=$this->session->userdata('id');
	$ip_amount=$this->input->post('ip_amount');
	$description=$this->input->post('description');
	$date=date('Y-m-d H:i:s');
	
	$result=$this->User_Model->get_max_ipId();
	foreach($result as $row)
	{
	$ipId=$row->ipId;
	}
	$ipId=++$ipId;
	$data=array(
	'ipId'=>$ipId,
	'ip_amount'=>$ip_amount,
	'description'=>$description,
	'date_time'=>$date
	);
	$result1=$this->User_Model->insert_ip($data);
	if($result1)
		{
			$this->session->set_flashdata('message','<div class="alert alert-success"><strong>Success !! </strong>Incentive Level Added successfully</div>');
			redirect('User/manage_ip');
		}
		else
		{
			$this->session->set_flashdata('message','|| Error ||');
			redirect('User/manage_ip');
		}
	}
	
	public function insert_member()
	{
	$a=rand(04540, 98529);
	//$code="KSN".$a."BT";
	$code=$this->input->post('emailid');
	$pass=rand(1111,9999);
    $login_id=$this->session->userdata('id');
	
		
	$sponsorId=0;
	$rdId=0;
	$state=38;
	$franchise=0;
	$tp_name=$this->input->post('tp_name');
    $tp_type=$this->input->post('tp_type');
	$location=$this->input->post('location');
	$internal=$this->input->post('internal');
	$primary=$this->input->post('primary');
    $codes=$this->input->post('code');
    $lmd=$this->input->post('lmd');
    $their_code=$this->input->post('their_code');
    $notify=$this->input->post('notify');
    $fax=$this->input->post('fax');
    $country=$this->input->post('country');
    $state=$this->input->post('state');
    $city=$this->input->post('city');
    $address1=$this->input->post('address1');
    $address2=$this->input->post('address2');
    $location_id=$this->input->post('location_id');
    $zip=$this->input->post('zip');
    $report=$this->input->post('report');
    $doj=$this->input->post('doj');
    $active=$this->input->post('active');
    $phone_number=$this->input->post('phone_number');
    $licence_number=$this->input->post('licence_number');
	$expiry_date=$this->input->post('expiry_date');
	$notes=$this->input->post('notes');
	$email=$this->input->post('emailid');
	$special=$this->input->post('special');
	$date=date('Y-m-d H:i:s');
	$login_type='M';
	$result=$this->User_Model->get_max_memberId();
	foreach($result as $row)
	{
	$memberId=$row->memberId;
	}
	$memberId=++$memberId;
	
	$data=array(
	'memberId'=>$memberId,
	'tp_type'=>$tp_type,
	'member_code'=>$email,
	'franchiseId'=>$franchise,
	'stateId'=>$state,
	'sponsorId'=>$sponsorId,
	'rdId'=>$rdId,
    'expiry_date'=>$expiry_date,
	'internal'=>$internal,
    'tp_primary'=>$primary,
	'phone_number'=>$phone_number,
	'licence_number'=>$licence_number,
	'tp_name'=>$tp_name,
	'location'=>$location,
	'code'=>$codes,
	'their_code'=>$their_code,
	'notify'=>$notify,
	'fax'=>$fax,
	'country'=>$country,
	'state'=>$state,
	'city'=>$city,
	'address1'=>$address1,
	'address2'=>$address2,
	'notes'=>$notes,
	'emailid'=>$email,
	'zip'=>$zip,
	'lmd'=>$lmd,
	'location_id'=>$location_id,
	'report'=>$report,
	'active'=>$active,
	'doj'=>$doj,
	'special'=>$special,
	'login_id'=>$login_id,
	'date_time'=>$date
	);
	$login=array(
	'memberId'=>$memberId,
	'username'=>$code,
	'password'=>$pass,
	'login_type'=>$login_type,
	'date_time'=>$date
	);
	$sup=array(
	'metaid'=>$memberId,
	'supplier_ac_no'=>$this->input->post('account_number'),
	'supplier_ac_name'=>$this->input->post('account_name'),
	'supplier_generate_docket'=>$this->input->post('gdn'),
	'prefix'=>$this->input->post('prefix'),
	'start_number'=>$this->input->post('start_number'),
	'next_number'=>$this->input->post('next_number'),
	'end_number'=>$this->input->post('end_number'),
	'suffix'=>$this->input->post('suffix'),
	'login_id'=>$login_id);
	
	//==============TP Accounts=====================
	$third_party = array('tpa_third_party' =>$this->input->post('third_party'),
	     	'tpa_supplier'=>implode(',', $this->input->post('supplier')),
	     	'metaid'=>$memberId,
	     	'tpa_account_number'=>$this->input->post('account_number'),
	     	'tpa_tn_delay_rule'=>$this->input->post('delay_rule'),
	     	'tpa_allow_tf'=>$this->input->post('tpa_allow_tf'),
	     	'tpa_tf_delay_type'=>$this->input->post('tpa_tf_delay_type'),
	     	'tpa_tf_delay_days'=>$this->input->post('tf_delay_days'),
	        'tpa_tf_delay_rule'=>$this->input->post('tf_delay_rule'),
	        'tpa_redeem_exchange'=>$this->input->post('redeem_exchange'),
	        'tpa_redeem_same'=>$this->input->post('redeem_same'),
	        'tpa_complete'=>$this->input->post('tpa_complete'),
	        'tpa_override_export_status'=>$this->input->post('override_export_status'),
	        'tpa_export_on'=>$this->input->post('export_Ons'),
	        'tpa_export_off'=>$this->input->post('export_offs'),
	        'tpa_docket_format'=>$this->input->post('docket_format'),
	        'tpa_con_note_required'=>$this->input->post('con_note_required'),
	        'tpa_con_note_characters'=>$this->input->post('con_note_characters'),
	         'tpa_con_note_numeric'=>$this->input->post('con_note_numeric'),
	         'tpa_con_note_decription'=>$this->input->post('con_note_description'),
	         'tpa_reference_required'=>$this->input->post('reference_required'),
	        'tpa_reference_characters'=>$this->input->post('reference_characters'),
	         'tpa_reference_numeric'=>$this->input->post('reference_numeric'),
	         'tpa_reference_description'=>$this->input->post('reference_description'),
	         'tpa_reminder'=>$this->input->post('reminder'),
			 'login_id'=>$login_id,
	         'tpa_notes'=>$note);
	          
		 
		 
	//==============//TP Accounts===================
	
	
	$result1=$this->User_Model->insert_member($data);
	$result2=$this->User_Model->insert_login($login);
	$result222=$this->User_Model->insert_suppliers($sup);
	$log_id=$this->User_Model->get_login_id($memberId);
	$this->User_Model->insert_tpaccounts($third_party);
	
			$data_roles=array(
		           'roleId'=>2,
		           'empId'=>$log_id,
				   'login_id'=>$login_id,
		           'date_time'=>$date
				   );
        $result=$this->User_Model->insert_assign_role($data_roles);
       $this->User_Model->inser_user_rights_filelds(40,1,$log_id,$login_id);	
       $this->User_Model->inser_user_rights_filelds(54,2,$log_id,$login_id);	
       $this->User_Model->inser_user_rights_filelds(57,3,$log_id,$login_id);	
       $this->User_Model->inser_user_rights_filelds(112,4,$log_id,$login_id);	
       $this->User_Model->inser_user_rights_filelds(88,5,$log_id,$login_id);	
       $this->User_Model->inser_user_rights_filelds(1,6,$log_id,$login_id);	
       $this->User_Model->inser_user_rights_filelds(120,7,$log_id,$login_id);	
       $this->User_Model->inser_user_rights_filelds(147,8,$log_id,$login_id);	
       $this->User_Model->inser_user_rights_filelds(130,9,$log_id,$login_id);	
       $this->User_Model->inser_user_rights_filelds(156,10,$log_id,$login_id);	
	//$result1=$this->User_Model->insert_bank_detail($data2);
	if($result1==$result2)
		{
			$this->session->set_flashdata('message','<div class="alert alert-success"><strong>Success !! </strong>Trading Partner Added successfully</div>');
			redirect('User/add_member');
		}
		else
		{
			$this->session->set_flashdata('message','|| Error ||');
			redirect('User/add_member');
		}
	}
//==================================




//=====================================	


public function insert_members()
{
	$a=rand(04540, 98529);
	//$code="KSN".$a."BT";
	$code=$this->input->post('emailid');
	$pass=rand(1111,9999);
    $login_id=$this->session->userdata('id');
	
		
	$sponsorId=0;
	$rdId=0;
	$state=38;
	$franchise=0;
	$tp_name=$this->input->post('tp_name');
    $tp_type=$this->input->post('tp_type');
	$location=$this->input->post('location');
	$internal=$this->input->post('internal');
	$primary=$this->input->post('primary');
    $codes=$this->input->post('code');
    $lmd=$this->input->post('lmd');
    $their_code=$this->input->post('their_code');
    $notify=$this->input->post('notify');
    $fax=$this->input->post('fax');
    $country=$this->input->post('country');
    $state=$this->input->post('state');
    $city=$this->input->post('city');
    $address1=$this->input->post('address1');
    $address2=$this->input->post('address2');
    $location_id=$this->input->post('location_id');
    $zip=$this->input->post('zip');
    $report=$this->input->post('report');
    $doj=$this->input->post('doj');
    $active=$this->input->post('active');
    $phone_number=$this->input->post('phone_number');
    $licence_number=$this->input->post('licence_number');
	$expiry_date=$this->input->post('expiry_date');
	$notes=$this->input->post('notes');
	$email=$this->input->post('emailid');
	$special=$this->input->post('special');
	$date=date('Y-m-d H:i:s');
	$login_type='M';
	$result=$this->User_Model->get_max_memberId();
	foreach($result as $row)
	{
	$memberId=$row->memberId;
	}
	$memberId=++$memberId;
	
	$data=array(
	'memberId'=>$memberId,
	'tp_type'=>$tp_type,
	'member_code'=>$email,
	'franchiseId'=>$franchise,
	'stateId'=>$state,
	'sponsorId'=>$sponsorId,
	'rdId'=>$rdId,
    'expiry_date'=>$expiry_date,
	'internal'=>$internal,
    'tp_primary'=>$primary,
	'phone_number'=>$phone_number,
	'licence_number'=>$licence_number,
	'tp_name'=>$tp_name,
	'location'=>$location,
	'code'=>$codes,
	'their_code'=>$their_code,
	'notify'=>$notify,
	'fax'=>$fax,
	'country'=>$country,
	'state'=>$state,
	'city'=>$city,
	'address1'=>$address1,
	'address2'=>$address2,
	'notes'=>$notes,
	'emailid'=>$email,
	'zip'=>$zip,
	'lmd'=>$lmd,
	'location_id'=>$location_id,
	'report'=>$report,
	'active'=>$active,
	'doj'=>$doj,
	'special'=>$special,
	'login_id'=>$login_id,
	'date_time'=>$date
	);
	$login=array(
	'memberId'=>$memberId,
	'username'=>$code,
	'password'=>$pass,
	'login_type'=>$login_type,
	'date_time'=>$date
	);

	
	//==============TP Accounts=====================
	
	          
		 
		 
	//==============//TP Accounts===================
	
	
	$result1=$this->User_Model->insert_member($data);
	$result2=$this->User_Model->insert_login($login);
	
	$log_id=$this->User_Model->get_login_id($memberId);
	
	
			$data_roles=array(
		           'roleId'=>2,
		           'empId'=>$log_id,
				   'login_id'=>$login_id,
		           'date_time'=>$date
				   );
        $result=$this->User_Model->insert_assign_role($data_roles);
       $this->User_Model->inser_user_rights_filelds(40,1,$log_id,$login_id);	
       $this->User_Model->inser_user_rights_filelds(54,2,$log_id,$login_id);	
       $this->User_Model->inser_user_rights_filelds(57,3,$log_id,$login_id);	
       $this->User_Model->inser_user_rights_filelds(112,4,$log_id,$login_id);	
       $this->User_Model->inser_user_rights_filelds(88,5,$log_id,$login_id);	
       $this->User_Model->inser_user_rights_filelds(1,6,$log_id,$login_id);	
       $this->User_Model->inser_user_rights_filelds(120,7,$log_id,$login_id);	
       $this->User_Model->inser_user_rights_filelds(147,8,$log_id,$login_id);	
       $this->User_Model->inser_user_rights_filelds(130,9,$log_id,$login_id);	
       $this->User_Model->inser_user_rights_filelds(156,10,$log_id,$login_id);	
}

public function update_memberss()
{
		$a=rand(04540, 98529);
	//$code="KSN".$a."BT";
	$code=$this->input->post('emailid');
	$pass=rand(1111,9999);
    $login_id=$this->session->userdata('id');
	
		
	$sponsorId=0;
	$rdId=0;
	$state=38;
	$franchise=0;
	$id=$this->input->post('id');
	$tp_name=$this->input->post('tp_name');
    $tp_type=$this->input->post('tp_type');
	$location=$this->input->post('location');
	$internal=$this->input->post('internal');
	$primary=$this->input->post('primary');
    $codes=$this->input->post('code');
    $lmd=$this->input->post('lmd');
    $their_code=$this->input->post('their_code');
    $notify=$this->input->post('notify');
    $fax=$this->input->post('fax');
    $country=$this->input->post('country');
    $state=$this->input->post('state');
    $city=$this->input->post('city');
    $address1=$this->input->post('address1');
    $address2=$this->input->post('address2');
    $location_id=$this->input->post('location_id');
    $zip=$this->input->post('zip');
    $report=$this->input->post('report');
    $doj=$this->input->post('doj');
    $active=$this->input->post('active');
    $phone_number=$this->input->post('phone_number');
    $licence_number=$this->input->post('licence_number');
	$expiry_date=$this->input->post('expiry_date');
	$notes=$this->input->post('notes');
	$email=$this->input->post('emailid');
	$special=$this->input->post('special');
	$date=date('Y-m-d H:i:s');
	$login_type='M';

	$memberId=$id;
	
	$data=array(
	'memberId'=>$memberId,
	'tp_type'=>$tp_type,
	'member_code'=>$email,
	'franchiseId'=>$franchise,
	'stateId'=>$state,
	'sponsorId'=>$sponsorId,
	'rdId'=>$rdId,
    'expiry_date'=>$expiry_date,
	'internal'=>$internal,
    'tp_primary'=>$primary,
	'phone_number'=>$phone_number,
	'licence_number'=>$licence_number,
	'tp_name'=>$tp_name,
	'location'=>$location,
	'code'=>$codes,
	'their_code'=>$their_code,
	'notify'=>$notify,
	'fax'=>$fax,
	'country'=>$country,
	'state'=>$state,
	'city'=>$city,
	'address1'=>$address1,
	'address2'=>$address2,
	'notes'=>$notes,
	'emailid'=>$email,
	'zip'=>$zip,
	'lmd'=>$lmd,
	'location_id'=>$location_id,
	'report'=>$report,
	'active'=>$active,
	'doj'=>$doj,
	'special'=>$special,
	'login_id'=>$login_id,
	'date_time'=>$date
	);


	
	//==============TP Accounts=====================
	
	          
		 
		 
	//==============//TP Accounts===================
	
	
	$result1=$this->User_Model->insert_member($data);

	
	
	
	
			
	
}



       function insert_tpaccounts()
       {

       	 $login_id=$this->session->userdata('id');
         $third_party=$this->input->post('third_party');
         $supplier=$this->input->post('supplier');
		 $supplier = implode(',', $supplier);
         $account_number=$this->input->post('account_number');
         $tn_delay_rule=$this->input->post('delay_rule');
         $tpa_allow_tf=$this->input->post('tpa_allow_tf');
         $tpa_tf_delay_type=$this->input->post('tpa_tf_delay_type');
         $tf_delay_days=$this->input->post('tf_delay_days');
         $tf_delay_rule=$this->input->post('tf_delay_rule');
         $redeem_exchange=$this->input->post('redeem_exchange');
         $redeem_same=$this->input->post('redeem_same');
         $tpa_complete=$this->input->post('tpa_complete');
         $override_export_status=$this->input->post('override_export_status');
         $export_Ons=$this->input->post('export_Ons');
         $export_offs=$this->input->post('export_offs'); 
         $profile=$this->input->post('profile'); 
         $docket_format=$this->input->post('docket_format');
         $con_note_required=$this->input->post('con_note_required');
         $con_note_characters=$this->input->post('con_note_characters');
         $con_note_numeric=$this->input->post('con_note_numeric');
         $con_note_description=$this->input->post('con_note_description');
         $reference_required=$this->input->post('reference_required');
         $reference_characters=$this->input->post('reference_characters');
         $reference_numeric=$this->input->post('reference_numeric');
         $reference_description=$this->input->post('reference_description');
         $reminder=$this->input->post('reminder');
         $note=$this->input->post('note');
         $result=$this->User_Model->get_max_tp_accountsId();
	     foreach($result as $row)
	     {
	     $metaid=$row->metaid;
	     }
	     $metaid=++$metaid;
	     $data = array('tpa_third_party' => $third_party,
	     	'tpa_supplier'=>$supplier,
	     	'metaid'=>$metaid,
	     	'tpa_account_number'=>$account_number,
	     	'tpa_tn_delay_rule'=>$tn_delay_rule,
	     	'tpa_allow_tf'=>$tpa_allow_tf,
	     	'tpa_tf_delay_type'=>$tpa_tf_delay_type,
	     	'tpa_tf_delay_days'=>$tf_delay_days,
	        'tpa_tf_delay_rule'=>$tf_delay_rule,
	        'tpa_redeem_exchange'=>$redeem_exchange,
	        'tpa_redeem_same'=>$redeem_same,
	        'tpa_complete'=>$tpa_complete,
	        'tpa_override_export_status'=>$override_export_status,
	        'tpa_export_on'=>$export_Ons,
	        'tpa_export_off'=>$export_offs,
	        'tpa_docket_format'=>$docket_format,
	        'tpa_con_note_required'=>$con_note_required,
	         'tpa_con_note_characters'=>$con_note_required,
	         'tpa_con_note_numeric'=>$con_note_numeric,
	         'tpa_con_note_decription'=>$con_note_description,
	         'tpa_reference_required'=>$reference_required,
	         'tpa_reference_characters'=>$reference_characters,
	         'tpa_reference_numeric'=>  $reference_numeric,
	         'tpa_reference_description'=>$reference_description,
	         'profile'=>$profile,
	         'tpa_reminder'=>$reminder,
			 'login_id'=>$login_id,
	         'tpa_notes'=>$note);
	     $result12=$this->User_Model->insert_tpaccounts($data);
	     	if($result12)
		{
			$this->session->set_flashdata('message','<div class="alert alert-success"><strong>Success !! </strong>Tp Accounts Added successfully</div>');
			redirect('User/tp_account');
		}
		else
		{
			$this->session->set_flashdata('message','|| Error ||');
			redirect('User/tp_account');
		}
        }
		
	public function insert_tp_accountss()
	{
		
	
		
		
	     $login_id=$this->session->userdata('id');
         $third_party=$this->input->post('tpa_third_party');
         $supplier=$this->input->post('tpa_supplier');
         $account_number=$this->input->post('tpa_account_number');
         $tn_delay_rule=$this->input->post('tpa_tn_delay_rule');
         $tpa_allow_tf=$this->input->post('tpa_allow_tf');
         $tpa_tf_delay_type=$this->input->post('tpa_tf_delay_type');
         $tf_delay_days=$this->input->post('tpa_tf_delay_days');
         $tf_delay_rule=$this->input->post('tpa_tf_delay_rule');
         $redeem_exchange=$this->input->post('tpa_redeem_exchange');
         $redeem_same=$this->input->post('tpa_redeem_same');
         $tpa_complete=$this->input->post('tpa_complete');
         $override_export_status=$this->input->post('tpa_override_export_status');
         $export_Ons=$this->input->post('tpa_export_on');
         $export_offs=$this->input->post('tpa_export_off'); 
        // $profile=$this->input->post('profile'); 
         $docket_format=$this->input->post('tpa_docket_format');
         $con_note_required=$this->input->post('tpa_con_note_required');
         $con_note_characters=$this->input->post('tpa_con_note_characters');
         $con_note_numeric=$this->input->post('tpa_con_note_numeric');
         $con_note_description=$this->input->post('tpa_con_note_decription');
        // $reference_required=$this->input->post('reference_required');
        // $reference_characters=$this->input->post('reference_characters');
        // $reference_numeric=$this->input->post('reference_numeric');
         //$reference_description=$this->input->post('reference_description');
         $reminder=$this->input->post('tpa_reminder');
         $note=$this->input->post('tpa_notes');
         $result=$this->User_Model->get_max_tp_accountsId();
	     foreach($result as $row)
	     {
	     $metaid=$row->metaid;
	     }
	     $metaid=++$metaid;
	     $data = array('tpa_third_party' => $third_party,
	     	'tpa_supplier'=>$supplier,
	     	'metaid'=>$metaid,
	     	'tpa_account_number'=>$account_number,
	     	'tpa_tn_delay_rule'=>$tn_delay_rule,
	     	'tpa_allow_tf'=>$tpa_allow_tf,
	     	'tpa_tf_delay_type'=>$tpa_tf_delay_type,
	     	'tpa_tf_delay_days'=>$tf_delay_days,
	        'tpa_tf_delay_rule'=>$tf_delay_rule,
	        'tpa_redeem_exchange'=>$redeem_exchange,
	        'tpa_redeem_same'=>$redeem_same,
	        'tpa_complete'=>$tpa_complete,
	        'tpa_override_export_status'=>$override_export_status,
	        'tpa_export_on'=>$export_Ons,
	        'tpa_export_off'=>$export_offs,
	        'tpa_docket_format'=>$docket_format,
	        'tpa_con_note_required'=>$con_note_required,
	         'tpa_con_note_characters'=>$con_note_required,
	         'tpa_con_note_numeric'=>$con_note_numeric,
	         'tpa_con_note_decription'=>$con_note_description,	
	         'tpa_reminder'=>$reminder,
			 'login_id'=>$login_id,
	         'tpa_notes'=>$note);
	     $result12=$this->User_Model->insert_tpaccounts($data);	
	}
		
		
		
	//------------------------------update_accounts------------------------------
 function update_tpaccounts()
          {
       	 $login_id=$this->session->userdata('id');
       	 
         $third_party=$this->input->post('third_party');
         $supplier=$this->input->post('supplier');
         $account_number=$this->input->post('account_number');
         $tn_delay_rule=$this->input->post('delay_rule');
         $tpa_allow_tf=$this->input->post('tpa_allow_tf');
         $tpa_tf_delay_type=$this->input->post('tpa_tf_delay_type');
         $tf_delay_days=$this->input->post('tf_delay_days');
         $tf_delay_rule=$this->input->post('tf_delay_rule');
         $redeem_exchange=$this->input->post('redeem_exchange');
         $redeem_same=$this->input->post('redeem_same');
         $tpa_complete=$this->input->post('tpa_complete');
         $override_export_status=$this->input->post('override_export_status');
         $export_Ons=$this->input->post('export_Ons');
         $export_offs=$this->input->post('export_offs');
         $docket_format=$this->input->post('docket_format');
         $con_note_required=$this->input->post('con_note_required');
         $con_note_characters=$this->input->post('con_note_characters');
         $con_note_numeric=$this->input->post('con_note_numeric');
         $con_note_description=$this->input->post('con_note_description');
         $reference_required=$this->input->post('reference_required');
         $reference_characters=$this->input->post('reference_characters');
         $reference_numeric=$this->input->post('reference_numeric');
         $reference_description=$this->input->post('reference_description');
         $reminder=$this->input->post('reminder');
         $note=$this->input->post('note');
      
	     $metaid=$this->input->post('metaid');
	     $login_id=$this->input->post('login_id');
	     $data = array('tpa_third_party' => $third_party,
	     	'tpa_supplier'=>$supplier,
	     	'metaid'=>$metaid,
	     	
	     	'tpa_account_number'=>$account_number,
	     	'tpa_tn_delay_rule'=>$tn_delay_rule,
	     	'tpa_allow_tf'=>$tpa_allow_tf,
	     	'tpa_tf_delay_type'=>$tpa_tf_delay_type,
	     	'tpa_tf_delay_days'=>$tf_delay_days,
	        'tpa_tf_delay_rule'=>$tf_delay_rule,
	        'tpa_redeem_exchange'=>$redeem_exchange,
	        'tpa_redeem_same'=>$redeem_same,
	        'tpa_complete'=>$tpa_complete,
	        'tpa_override_export_status'=>$override_export_status,
	        'tpa_export_on'=>$export_Ons,
	        'tpa_export_off'=>$export_offs,
	        'tpa_docket_format'=>$docket_format,
	        'tpa_con_note_required'=>$con_note_required,
	         'tpa_con_note_characters'=>$con_note_required,
	         'tpa_con_note_numeric'=>$con_note_numeric,
	         'tpa_con_note_decription'=>$con_note_description,
	         'tpa_reference_required'=>$reference_required,
	         'tpa_reference_characters'=>$reference_characters,
	         'tpa_reference_numeric'=>  $reference_numeric,
	         'tpa_reference_description'=>$reference_description,
	         'tpa_reminder'=>$reminder,
			 'login_id'=>$login_id,
	         'tpa_notes'=>$note);
	     $result12=$this->User_Model->insert_tpaccounts($data);
	     	if($result12)
		{
			$this->session->set_flashdata('message','<div class="alert alert-success"><strong>Success !! </strong>Tp Accounts Update successfully</div>');
			redirect('User/view_accounts');
		}
		else
		{
			$this->session->set_flashdata('message','|| Error ||');
			redirect('User/view_accounts');
		}
        }
		
		
		
		public function update_accountsss()
		{
	     $login_id=$this->session->userdata('id');
		 $id=$this->input->post('id');
         $third_party=$this->input->post('tpa_third_party');
         $supplier=$this->input->post('tpa_supplier');
         $account_number=$this->input->post('tpa_account_number');
         $tn_delay_rule=$this->input->post('tpa_tn_delay_rule');
         $tpa_allow_tf=$this->input->post('tpa_allow_tf');
         $tpa_tf_delay_type=$this->input->post('tpa_tf_delay_type');
         $tf_delay_days=$this->input->post('tpa_tf_delay_days');
         $tf_delay_rule=$this->input->post('tpa_tf_delay_rule');
         $redeem_exchange=$this->input->post('tpa_redeem_exchange');
         $redeem_same=$this->input->post('tpa_redeem_same');
         $tpa_complete=$this->input->post('tpa_complete');
         $override_export_status=$this->input->post('tpa_override_export_status');
         $export_Ons=$this->input->post('tpa_export_on');
         $export_offs=$this->input->post('tpa_export_off'); 
        // $profile=$this->input->post('profile'); 
         $docket_format=$this->input->post('tpa_docket_format');
         $con_note_required=$this->input->post('tpa_con_note_required');
         $con_note_characters=$this->input->post('tpa_con_note_characters');
         $con_note_numeric=$this->input->post('tpa_con_note_numeric');
         $con_note_description=$this->input->post('tpa_con_note_decription');
        // $reference_required=$this->input->post('reference_required');
        // $reference_characters=$this->input->post('reference_characters');
        // $reference_numeric=$this->input->post('reference_numeric');
         //$reference_description=$this->input->post('reference_description');
         $reminder=$this->input->post('tpa_reminder');
         $note=$this->input->post('tpa_notes');
         
    
	     $data = array('tpa_third_party' => $third_party,
	     	'tpa_supplier'=>$supplier,
	     	'metaid'=>$id,
	     	'tpa_account_number'=>$account_number,
	     	'tpa_tn_delay_rule'=>$tn_delay_rule,
	     	'tpa_allow_tf'=>$tpa_allow_tf,
	     	'tpa_tf_delay_type'=>$tpa_tf_delay_type,
	     	'tpa_tf_delay_days'=>$tf_delay_days,
	        'tpa_tf_delay_rule'=>$tf_delay_rule,
	        'tpa_redeem_exchange'=>$redeem_exchange,
	        'tpa_redeem_same'=>$redeem_same,
	        'tpa_complete'=>$tpa_complete,
	        'tpa_override_export_status'=>$override_export_status,
	        'tpa_export_on'=>$export_Ons,
	        'tpa_export_off'=>$export_offs,
	        'tpa_docket_format'=>$docket_format,
	        'tpa_con_note_required'=>$con_note_required,
	         'tpa_con_note_characters'=>$con_note_required,
	         'tpa_con_note_numeric'=>$con_note_numeric,
	         'tpa_con_note_decription'=>$con_note_description,	
	         'tpa_reminder'=>$reminder,
			 'login_id'=>$login_id,
	         'tpa_notes'=>$note);
	     $result12=$this->User_Model->insert_tpaccounts($data);
		}
		
		
		

public function delete_accounts($id)
{
     $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
		$id=base64_decode($id);
		$this->User_Model->delete_tp_accounts($id);
		}
}	
	public function update_sender_reciver()
	{
		   $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
			
		$this->load->view('sender_receiver/update_sender_receiver');
		}
		
	}		
public function updated_sender_receicer()
{
	$metaid=$this->input->post('metaid');
	
	$date_time=date("Y-m-d H:i:s");
	$loginid=$this->session->userdata('id');
	$loginid=$this->input->post('login_id');
	$sender_receicer=$this->input->post('sender_receicer');
	$trading_partner_id=$this->input->post('trading_partner_id');
	$phone_number=$this->input->post('phone_number');
	$mobile_number=$this->input->post('mobile_number');
	$email_id=$this->input->post('email_id');
	$active=$this->input->post('active');
	$default=$this->input->post('default');
	$note=$this->input->post('note');
    $data = array( 'metaid'=>$metaid,
    	           'sender_receiver_name' =>$sender_receicer,
                   'trading_partner_name' =>$trading_partner_id,
                   'phone_number'=>$phone_number,
                   'mobile_number'=>$mobile_number,
                   'email'=>$email_id,
                   'active'=>$active,
                   'defaults'=>$default,
                   'note'=>$note,
                   'login_id'=>$loginid,
                   'date_time'=>$date_time);
   $res= $this->User_Model->insert_sender_receiver($data);
	    if($res){
	        $this->session->set_flashdata('message','sender/receiver Updated Successfully!');
			redirect('User/view_sender_receiver');
	    }else {
	        $this->session->set_flashdata('error','Not Added!');
			redirect('User/view_sender_receiver');
	    }

}


	
	public function wallet_balance()
	{
		$login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
			$this->load->view('member/member_card');
		}
		
	}
	public function view_carrier()
	{
		$login_id=$this->session->userdata('id');
		$data['login_id']=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
			$data['url'] = $this->uri->segment(3);
			$this->load->view('carrier/view_carrier',$data);
		}
	}
	


public function load_carrier($rowno=0)
{
		  
    $rowperpage = 15;
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }

    $allcount = $this->User_Model->get_count();
    $users_record = $this->User_Model->get_authors($rowno,$rowperpage);
    $configs['base_url'] = base_url()."User/view_carrier";
    $configs['use_page_numbers'] = TRUE;
    $configs['total_rows'] = $allcount;
    $configs['per_page'] = $rowperpage;
    $this->pagination->initialize($configs);
    $data['links'] = $this->pagination->create_links();
    $data['authors'] = $users_record;
    $data['row'] = $rowno;
    echo json_encode($data);
}


	
	
	public function get_data()
	{
		echo"<script>alert('successfully Read')</script>";
	    $this->load->view('get_data');	
	}
	

	public function assign_role(){
	   $this->load->view('user_right/assign_role');
	}
	public function add_roles()
	{
	    $loginid=$this->session->userdata('id');
	    $roleid=$this->input->post('roleid');
	    $rolename=$this->input->post('rolename');
	    $description=$this->input->post('description');
	    $DT=date('Y-m-d H:i:s');
	    $data=array(
	        'roleId'=>$roleid,
	        'login_id'=>$loginid,
	        'role'=>$rolename,
	        'description'=>$description,
	        'date_time'=>$DT,
	        'show_hide'=>0
	    );
	    $res=$this->User_Model->insert_role($data);
	    if($res){
	        $this->session->set_flashdata('msg','Role Added Successfully!');
			redirect('User/add_role');
	    }else{
	        $this->session->set_flashdata('error','Not Added!');
			redirect('User/add_role');
	    }
	    
	}
	
	public function insert_assign_role()
	{	
		$login_id=$this->session->userdata('id');
		$role=$this->input->post('role');
		$date=date('Y-m-d H:i:s');
	    foreach($_POST['right_select'] as $value)
		{
		$data=array(
		           'roleId'=>$role,
		           'empId'=>$value,
				   'login_id'=>$login_id,
		           'date_time'=>$date
				   );
  
        $result=$this->User_Model->insert_assign_role($data);   
		} 
		if($result)
		{
			redirect('User/assign_role');
		}
		else
		{
		redirect('User/assign_role');
		}
	}
	
	
	public function insert_user_right()
	{
		$role=$this->input->post('role');
		$date=date('Y-m-d H:i:s');
		$login_type='0';
	    foreach($_POST['right_select1'] as $value)
		{
		$data=array(
		           'login_menuId'=>$role,
		           'menuId'=>$value,
				   'login_type'=>$login_type,
		           'date_time'=>$date
				   );
  
                $result=$this->User_Model->insert_user_right1($data);   
		} 
		if($result==1)
		{
			redirect('User/user_right');
		}
		else
		{
		redirect('User/user_right');
		}	
	}
	
	public function insert_user_right1()
	{
		$user=$this->input->post('username');
		$date=date('Y-m-d H:i:s');
		$login_type='1';
	    foreach($_POST['right_select'] as $value)
		{
		$data=array(
		           'login_menuId'=>$user,
		           'menuId'=>$value,
				   'login_type'=>$login_type,
		           'date_time'=>$date
				   );
  
                $result=$this->User_Model->insert_user_right1($data);   
		} 
		if($result==1)
		{
			redirect('User/user_right');
		}
		else
		{
		redirect('User/user_right');
		}	
	}

	public function view_accounts()
	{

		$data['login_id']=$this->session->userdata('id');
		$login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
		$this->load->view('member/view_accounts',$data);
		}
	
	}

	

	public function tp_account()
	{
		
		$login_id=$this->session->userdata('id');
		$data['login_id']=$this->session->userdata('id');
		
		if($login_id==null){redirect('User/');}
		else
		{
			
		$this->load->view('member/tp_account',$data);
		}
	}
	
	public function update_accounts()
	{
	   $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
			
		$this->load->view('trading_partner/update_accounts');
		}
		
	}
	
	
	public function add_stocktakes()
	{
		$login_id=$this->session->userdata('id');
		$data['login_id']=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
		$this->load->view('member/add_stocktakes',$data);
		}
	}
	public function insert_stocktake()
	{
		$date_time=date("Y-m-d H:i:s");
		$loginid=$this->session->userdata('id');
	    $stockdate=$this->input->post('stockdate');
	    $trading_partner=$this->input->post('trading_partner');
	    $type=$this->input->post('type');
	    $equipment=$this->input->post('equipment');
	    $book_stock=$this->input->post('book_stock');
	    $physical_stock=$this->input->post('physical_stock');
	    $shrinkage=$this->input->post('shrinkage');
	    $reported_variance=$this->input->post('reported_variance');
	    $receiving_tp=$this->input->post('receiving_tp');
	    $note=$this->input->post('note');
	    $result=$this->User_Model->get_max_tp_stocktake();
	     foreach($result as $row)
	     {
	     $metaid=$row->metaid;
	     }
	     $metaid=++$metaid;
	    $insert_data =array('metaid'=>$metaid,
	    	               'date' => $stockdate,
	                       'trading_partner'=>$trading_partner,
	                       'tp_type'=>$type,
	                       'equipment'=>$equipment,
	                       'book_stock'=>$book_stock,
	                       'physical_stock'=>$physical_stock,
	                       'shrinkage'=>$shrinkage,
	                       'reported_variance'=>$reported_variance,
	                       'receiving_tp'=>$receiving_tp,
	                       'notes'=>$note,
	                       'login_id'=>$loginid,
	                       'date_time'=>$date_time);
	   $res= $this->User_Model->insert_stocktake($insert_data);

	    if($res){
	        $this->session->set_flashdata('msg','stocktakes Added Successfully!');
			redirect('User/add_stocktakes');
	    }else{
	        $this->session->set_flashdata('error','Not Added!');
			redirect('User/add_stocktakes');
	    }

	}

	function view_stocktakes()
	{
		$login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
		$this->load->view('member/view_stocktakes');
		}
	}
	public function add_carrier()
	{
		$login_id=$this->session->userdata('id');
		$data['login_id']=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
		$this->load->view('carrier/add_carrier',$data);
		}
		
	}
	public function insert_carrier()
	{
	$result=$this->User_Model->get_max_carrierid();
	$date_time=date("Y-m-d H:i:s");
	$loginid=$this->session->userdata('id');
	$carrier=$this->input->post('carrier');
    $active=$this->input->post('active');
    $note=$this->input->post('note');

	foreach($result as $row)
	{
	$metaid=$row->metaid;
	}
	$metaid=++$metaid;
	$data = array(
                       'metaid'=>$metaid,
		               'carrier' =>$carrier,
	                   'active'=>$active,
	                   'notes'=>$note,
	                   'login_id'=>$loginid,
	                   'date_time'=>$date_time);
    $result=$this->User_Model->insert_carrier($data);
    if($result)
    {
  		$this->session->set_flashdata('message','<div class="alert alert-success"><strong>Success !! </strong>Added successfully</div>');
			redirect('User/add_carrier');
		}
		else
		{
			$this->session->set_flashdata('message','|| Error ||');
			redirect('User/add_carrier');
		}
        }
		
		public function insert_carrierss()
		{
	$result=$this->User_Model->get_max_carrierid();
	$date_time=date("Y-m-d H:i:s");
	$loginid=$this->session->userdata('id');
	$carrier=$this->input->post('carrier');
    $active=$this->input->post('actives');
    $note=$this->input->post('notes');

	foreach($result as $row)
	{
	$metaid=$row->metaid;
	}
	$metaid=++$metaid;
	$data = array(
                       'metaid'=>$metaid,
		               'carrier' =>$carrier,
	                   'active'=>$active,
	                   'notes'=>$note,
	                   'login_id'=>$loginid,
	                   'date_time'=>$date_time);
    $result=$this->User_Model->insert_carrier($data);
		}
		public function update_carrers()
		{
			// echo "f";exit;
			$date_time=date("Y-m-d H:i:s");
	$loginid=$this->session->userdata('id');
	$metaid=$this->input->post('id');
	$carrier=$this->input->post('carrier');
    $active=$this->input->post('actives');
    $note=$this->input->post('notes');
   
	$data = array(
                       'metaid'=>$metaid,
		               'carrier' =>$carrier,
	                   'active'=>$active,
	                   'notes'=>$note,
	                   'login_id'=>$loginid,
	                   'date_time'=>$date_time);
    $result=$this->User_Model->insert_carrier($data);
     // echo $this->db->affected_rows();exit;

    if( $this->db->affected_rows() == 1){
    	echo 'success';
    }
    else{
    	$this->session->set_flashdata('message','<div class="alert alert-success"><strong>Error !! </strong>Something Went Wrong</div>');
			redirect('User/view_carrier');
    }
		}
		
	public function updatesss_carrier()
	{
	$date_time=date("Y-m-d H:i:s");
	$loginid=$this->input->post('login_id');;
	$carrier=$this->input->post('carrier');
    $active=$this->input->post('active');
    $note=$this->input->post('note');


	$metaid=$this->input->post('meta_id');
	$data = array(
                       'metaid'=>$metaid,
		               'carrier' =>$carrier,
	                   'active'=>$active,
	                   'notes'=>$note,
	                   'login_id'=>$loginid,
	                   'date_time'=>$date_time);
    $result=$this->User_Model->insert_carrier($data);
    if($result)
    {
  		$this->session->set_flashdata('message','<div class="alert alert-success"><strong>Success !! </strong>Added successfully</div>');
			redirect('User/view_carrier');
		}
		else
		{
			$this->session->set_flashdata('message','|| Error ||');
			redirect('User/view_carrier');
		}
        }


        public function insert_equipment()
        {
    $result=$this->User_Model->get_max_equipmentid();

	foreach($result as $row)
	{
	$metaid=$row->metaid;
	}
	$metaid=++$metaid;
	$date_time=date("Y-m-d H:i:s");
	$loginid=$this->session->userdata('id');
	$equipment=$this->input->post('equipment');
	$equipment_supplier_tp=$this->input->post('equipment_supplier_tp');
	$equipment_report_name=$this->input->post('equipment_report_name');
	$equipment_code=$this->input->post('equipment_code');
	$equipment_internal_code=$this->input->post('equipment_internal_code');
	$equipment_book_stock=$this->input->post('equipment_book_stock');
	$equipment_lost_stock=$this->input->post('equipment_lost_stock');
	$equipment_supplier_stock=$this->input->post('equipment_supplier_stock');
	$equipment_rent_unit_price=$this->input->post('equipment_rent_unit_price');
	$base_quantity_off=$this->input->post('base_quantity_off');
	$unit_movement_fee=$this->input->post('unit_movement_fee');
	$movement_fee=$this->input->post('movement_fee');
	$issue_duplicates=$this->input->post('issue_duplicates');
	$active=$this->input->post('active');
	$data = array('metaid'=>$metaid,
	'equipment'=>$equipment,
	'equipment_supplier_tp'=>$equipment_supplier_tp,
	'equipment_report_name'=>$equipment_report_name,
	'equipment_code'=>$equipment_code,
	'equipment_internal_code'=>$equipment_internal_code,
	'equipment_book_stock'=>$equipment_book_stock,
	'equipment_supplier_stock' =>$equipment_lost_stock,
	'equipment_supplier_stock'=>$equipment_supplier_stock,
	'equipment_rent_unit_price'=>$equipment_rent_unit_price,
	'base_quantity_off'=>$base_quantity_off,
	'unit_movement_fee'=>$unit_movement_fee,
	'movement_fee'=>$movement_fee,
	'issue_duplicates'=>$issue_duplicates,
	'active'=>$active,
    'login_id'=>$loginid);
	$res= $this->User_Model->insert_equipment($data);
	    if($res){
	        $this->session->set_flashdata('message','Equipment Added Successfully!');
			redirect('User/add_equipments');
	    }else{
	        $this->session->set_flashdata('error','Not Added!');
			redirect('User/add_equipments');
	    }

        }


        public function daily_reports()
        {
        $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
		$this->load->view('pallet_reports/daily_reports');
		}	
        }
        public function bills()
        {
        $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
		$this->load->view('pallet_reports/bills');
		}	
        }
        public function operations_reports()
        {
        $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
		$this->load->view('pallet_reports/operations_reports');
		}

        }
        public function movement_reports($movement_id)
        {
		$data['movement_id']=$movement_id;
        $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
		$this->load->view('pallet_reports/movement_reports',$data);
		}
        }
        function monthly_report()
        {
        $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
		$this->load->view('pallet_reports/monthly_report');
		}
        }
        function sender_receiver()
        {
        $login_id=$this->session->userdata('id');
        $data['login_id']=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
		$this->load->view('sender_receiver/sender_receiver',$data);
		}
        }
        public function import_stocktakes()
        {
        $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
		$this->load->view('stocktakes/import_stocktakes');
		}

        }
//---------------------------
        public function stocktakecsv()
        {    
  $login_id=$this->session->userdata('id');
if(isset($_POST['submit'])){
if($_FILES['csv_data']['name']){
$arrFileName = explode('.',$_FILES['csv_data']['name']);
if($arrFileName[1] == 'csv' || $arrFileName[1] == 'xlsx'){
$handle = fopen($_FILES['csv_data']['tmp_name'], "r");
$skip_line = true;//rest of your code
while (($emapData = fgetcsv($handle, 1000, ",")) !== FALSE) {
  if($skip_line) { $skip_line = false; continue; }
         $result=$this->User_Model->get_max_tp_stocktake();
	     foreach($result as $row)
	     {
	     $metaid=$row->metaid;
	     }
	     $metaid=++$metaid;
	     $insert_data =array('metaid'=>$metaid,
	    	               'date' => $emapData[0],
	                       'trading_partner'=>$emapData[1],
	                       'tp_type'=>$emapData[2],
	                       'equipment'=>$emapData[3],
	                       'book_stock'=>$emapData[4],
	                       'physical_stock'=>$emapData[5],
	                       'shrinkage'=>$emapData[6],
	                       'reported_variance'=>$emapData[7],
	                       'receiving_tp'=>$emapData[8],
	                       'login_id'=>$login_id,
						   'notes'=>$emapData[9]);
	   $res= $this->User_Model->insert_stocktake($insert_data);
        }
    if($res){
	        $this->session->set_flashdata('message','<div class="alert alert-success"><strong>Success !! </strong>Stocktakes Added Successfully!</div>');
			redirect('User/import_stocktakes');
	    }else{
	        $this->session->set_flashdata('error','Not Added!');
			redirect('User/import_stocktakes');
	    }


}
else{
	$this->session->set_flashdata('message','<div class="alert alert-danger"><strong>Error !! </strong>Only Csv or Xslx Files are allowed</div>');
			redirect('User/import_stocktakes');
}
        }
}
}

public function import_bill_data()
        { 
$login_id=$this->session->userdata('id');
if(isset($_POST['submit'])){
if($_FILES['csv_data']['name']){

$arrFileName = explode('.',$_FILES['csv_data']['name']);
if($arrFileName[1] == 'csv'){
$handle = fopen($_FILES['csv_data']['tmp_name'], "r");
  $skip_line = true;//rest of your code
while (($emapData = fgetcsv($handle, 1000, ",")) !== FALSE) {
if($skip_line) { $skip_line = false; continue; }
         $result=$this->User_Model->get_max_tp_bill();
	     foreach($result as $row)
	     {
	     $metaid=$row->metaid;
	     }
	     $metaid=++$metaid;
	    $insert_data =array('metaid'=>$metaid,
	    	               'bills_date' => $emapData[0],
	                       'equipment'=>$emapData[1],
	                       'source'=>$emapData[2],
	                       'opening_balance'=>$emapData[3],
	                       'quantity_on'=>$emapData[4],
	                       'Unreconciled_qty_on'=>$emapData[5],
	                       'quantity_off'=>$emapData[6],
	                       'unreconciled_qty_off'=>$emapData[7],
	                       'closing_balance'=>$emapData[8],
	                       'equipment_days'=>$emapData[9],
	                       'unreconciled_equipment_days'=>$emapData[10],
	                       'rent_unit_price'=>$emapData[11],
	                       'rent'=>$emapData[12],
	                       'fees'=>$emapData[13],
						   'Other_charges'=>$emapData[14],
	                       'amount'=>$emapData[15],
	                       'unreconciled_amount'=>$emapData[16],
	                       'login_id'=>$login_id);
	   $res= $this->User_Model->insert_bills($insert_data);


	

        }
    if($res){
	        $this->session->set_flashdata('message','Bills Added Successfully!');
			redirect('User/import_bills');
	    }else{
	        $this->session->set_flashdata('error','Not Added!');
			redirect('User/import_bills');
	    }


}
        }
}
}


public function import_trading_partner_accounts()
{
  $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
		$this->load->view('import_data/import_trading_partner');
		}
}
public function trading_partnercsv()
{
	$login_id=$this->session->userdata('id');
	if(isset($_POST['submit'])){
if($_FILES['csv_data']['name']){

$arrFileName = explode('.',$_FILES['csv_data']['name']);
if($arrFileName[1] == 'csv'){
$handle = fopen($_FILES['csv_data']['tmp_name'], "r");
while (($emapData = fgetcsv($handle, 1000, ",")) !== FALSE) {

         $result=$this->User_Model->get_max_tp_accountsId();
	     foreach($result as $row)
	     {
	     $metaid=$row->metaid;
	     }
	     $metaid=++$metaid;
	    $insert_data =array('metaid'=>$metaid,
	    	               'item' => $emapData[0],
	    	               'tpa_third_party' => $emapData[1],
	                       'tpa_supplier'=>$emapData[2],
	                       'tp_code'=>$emapData[3],
	                       'tpa_account_number'=>$emapData[3],
	                       'tpa_tn_delay_rule'=>$emapData[4],
	                       'tpa_allow_tf'=>$emapData[5],
	                       'tpa_tf_delay_type'=>$emapData[6],
	                       'tpa_tf_delay_days'=>$emapData[7],
	                       'tpa_tf_delay_rule'=>$emapData[8],
	                       'tpa_redeem_exchange'=>$emapData[9],
	                       'tpa_redeem_same'=>$emapData[10],
	                       'tpa_complete'=>$emapData[11],
	                       'tpa_override_export_status'=>$emapData[11],
	                       'tpa_export_on'=>$emapData[12],
	                       'tpa_export_off'=>$emapData[13],
	                       'tpa_docket_format'=>$emapData[14],
	                       'tpa_con_note_required'=>$emapData[15],
	                       'tpa_con_note_characters'=>$emapData[16],
	                       'tpa_con_note_numeric'=>$emapData[17],
	                       'tpa_con_note_decription'=>$emapData[18],
	                       'tpa_reference_required'=>$emapData[19],
	                       'tpa_reference_characters'=>$emapData[20],
	                       'tpa_reference_numeric'=>$emapData[21],
	                       'tpa_reference_description'=>$emapData[22],
	                       'tpa_reminder'=>$emapData[23],
	                       'login_id'=>$login_id,
	                       'tpa_notes'=>$emapData[24],
	                       'date_time'=>$emapData[25]);

	    $result12=$this->User_Model->insert_tpaccounts($insert_data);




        }

	     	if($result12)
		{
			$this->session->set_flashdata('message','<div class="alert alert-success"><strong>Success !! </strong> Added successfully</div>');
			redirect('User/import_trading_partner_accounts');
		}
		else
		{
			$this->session->set_flashdata('message','|| Error ||');
			redirect('User/import_trading_partner_accounts');
		}

}
        }
}

}

public function movements()
{
 $login_id=$this->session->userdata('id');
 $data['login_id']=$this->session->userdata('id');
 if($login_id==null){redirect('User/');}
 else
	{
	$this->load->view('operations/movements',$data);
	}

}
public function insert_movements()
{ 

    $result=$this->User_Model->get_max_movementsid();
	foreach($result as $row)
	{
	$metaid=$row->metaid;
	}
	$metaid=++$metaid;
	$date_time=date("Y-m-d H:i:s");
	$loginid=$this->session->userdata('id');
	$mov_date=$this->input->post('mov_date');
	$equipment=$this->input->post('equipment');
	$sending_tp=$this->input->post('sending_tp');
	$con_note=$this->input->post('con_note');
	$sender_name=$this->input->post('sender_name');
	$receiving_tp=$this->input->post('receiving_tp');
	$receiver_name=$this->input->post('receiver_name');
	$reference=$this->input->post('reference');
	$sent=$this->input->post('sent');
	$receive=$this->input->post('receive');
	$carrier=$this->input->post('carrier');
	$quantity=$this->input->post('quantity');
	$trace_quantity=$this->input->post('trace_quantity');
	$untrace_quantity=$this->input->post('untrace_quantity');
	$redeem_xn=$this->input->post('redeem_xn');
	$unredeem_on=$this->input->post('unredeem_on');
	$redeem_xf=$this->input->post('redeem_xf');
	$unredeem_off=$this->input->post('unredeem_off');
	$transfer=$this->input->post('transfer');
	$transaction=$this->input->post('transaction');
	$effective_date=$this->input->post('effective_date');
	$docket_number=$this->input->post('docket_number');
	$rai_corr=$this->input->post('rai_corr');
	$rai_corr_date=$this->input->post('rai_corr_date');
	$type=$this->input->post('type');
	$orig_movemevt=$this->input->post('orig_movemevt');
	$orig_bill=$this->input->post('orig_bill');
	$export=$this->input->post('export');
	$batch=$this->input->post('batch');
	$bill=$this->input->post('bill');
	$supplier_reference=$this->input->post('supplier_reference');
	$days=$this->input->post('days');
	$equipment_days=$this->input->post('equipment_days');
	$dockets=$this->input->post('dockets');
	$rent=$this->input->post('rent');
	$fee_code=$this->input->post('fee_code');
	$fee_unit_price=$this->input->post('fee_unit_price');
	$fees=$this->input->post('fees');
	$amount=$this->input->post('amount');
	$notes=$this->input->post('notes');
	$data = array('metaid'=>$metaid,
	'movements_date'=>$mov_date,
	'equipment'=>$equipment,
	'sending_tp'=>$sending_tp,
	'sender_name'=>$sender_name,
	'receiving_tp'=>$receiving_tp,
	'receiver_name'=>$receiver_name,
	'carrier'=>$carrier,
	'reference'=>$reference,
	'sent'=>$sent,
	'receive'=>$receive,
	'quantity'=>$quantity,
	'trace_quantity'=>$trace_quantity,
	'untrace_quantity'=>$untrace_quantity,
	'redeem_xn'=>$redeem_xn,
	'unredeem_on'=>$unredeem_on,
	'redeem_xf'=>$redeem_xf,
	'unredeem_off'=>$unredeem_off,
	'transfer' =>$transfer,
	'transaction'=>$transaction,
	'effective_date'=>$effective_date,
	'con_note'=>$con_note,
	'docket_number'=>$docket_number,
	'rai_corr'=>$rai_corr,
	'rai_corr_date'=>$rai_corr_date,
	'type'=>$type,
	'orig_movemevt'=>$orig_movemevt,
	'orig_bill'=>$orig_bill,
	'export'=>$export,
	'batch'=>$batch,
	'bill'=>$bill,
	'supplier_reference'=>$supplier_reference,
	'days'=>$days,
	'equipment_days'=>$equipment_days,
	'rent'=>$rent,
	'fee_code'=>$fee_code,
	'fee_unit_price'=>$fee_unit_price,
	'fees'=>$fees,
	'amount'=>$amount,
	'dockets'=>$dockets,
	'Notes'=>$notes,
    'login_id'=>$loginid);

	$res= $this->User_Model->insert_movements($data);
	    if($res){
	        $this->session->set_flashdata('message','movements Added Successfully!');
			redirect('User/movements');
	    }else{
	        $this->session->set_flashdata('error','Not Added!');
			redirect('User/movements');
	    }


}



public function updated_movements()
{ 

    $metaid=$this->input->post('metaid');
	$date_time=date("Y-m-d H:i:s");
	$loginid=$this->session->userdata('id');
	$loginid=$this->input->post('login_id');
	$mov_date=$this->input->post('mov_date');
	$equipment=$this->input->post('equipment');
	$sending_tp=$this->input->post('sending_tp');
	$sender_name=$this->input->post('sender_name');
	$receiving_tp=$this->input->post('receiving_tp');
	$receiver_name=$this->input->post('receiver_name');
	$reference=$this->input->post('reference');
	$sent=$this->input->post('sent');
	$receive=$this->input->post('receive');
	$carrier=$this->input->post('carrier');
	$quantity=$this->input->post('quantity');
	$trace_quantity=$this->input->post('trace_quantity');
	$untrace_quantity=$this->input->post('untrace_quantity');
	$redeem_xn=$this->input->post('redeem_xn');
	$unredeem_on=$this->input->post('unredeem_on');
	$redeem_xf=$this->input->post('redeem_xf');
	$unredeem_off=$this->input->post('unredeem_off');
	$transfer=$this->input->post('transfer');
	$transaction=$this->input->post('transaction');
	$effective_date=$this->input->post('effective_date');
	$docket_number=$this->input->post('docket_number');
	$rai_corr=$this->input->post('rai_corr');
	$rai_corr_date=$this->input->post('rai_corr_date');
	$type=$this->input->post('type');
	$orig_movemevt=$this->input->post('orig_movemevt');
	$orig_bill=$this->input->post('orig_bill');
	$export=$this->input->post('export');
	$batch=$this->input->post('batch');
	$bill=$this->input->post('bill');
	$supplier_reference=$this->input->post('supplier_reference');
	$days=$this->input->post('days');
	$equipment_days=$this->input->post('equipment_days');
	$rent=$this->input->post('rent');
	$fee_code=$this->input->post('fee_code');
	$fee_unit_price=$this->input->post('fee_unit_price');
	$fees=$this->input->post('fees');
	$amount=$this->input->post('amount');
	$notes=$this->input->post('notes');
	$data = array('metaid'=>$metaid,
	'movements_date'=>$mov_date,
	'equipment'=>$equipment,
	'sending_tp'=>$sending_tp,
	'sender_name'=>$sender_name,
	'receiving_tp'=>$receiving_tp,
	'receiver_name'=>$receiver_name,
	'reference'=>$reference,
	'sent'=>$sent,
	'receive'=>$receive,
	'carrier'=>$carrier,
	'quantity'=>$quantity,
	'trace_quantity'=>$trace_quantity,
	'untrace_quantity'=>$untrace_quantity,
	'redeem_xn'=>$redeem_xn,
	'unredeem_on'=>$unredeem_on,
	'redeem_xf'=>$redeem_xf,
	'unredeem_off'=>$unredeem_off,
	'transfer' =>$transfer,
	'transaction'=>$transaction,
	'effective_date'=>$effective_date,
	'docket_number'=>$docket_number,
	'rai_corr'=>$rai_corr,
	'rai_corr_date'=>$rai_corr_date,
	'type'=>$type,
	'orig_movemevt'=>$orig_movemevt,
	'orig_bill'=>$orig_bill,
	'export'=>$export,
	'batch'=>$batch,
	'bill'=>$bill,
	'supplier_reference'=>$supplier_reference,
	'days'=>$days,
	'equipment_days'=>$equipment_days,
	'rent'=>$rent,
	'fee_code'=>$fee_code,
	'fee_unit_price'=>$fee_unit_price,
	'fees'=>$fees,
	'amount'=>$amount,
	'Notes'=>$notes,
    'login_id'=>$loginid);
	$res= $this->User_Model->insert_movements($data);
	    if($res){
	        $this->session->set_flashdata('message','movements Updated Successfully!');
			redirect('User/view_movement');
	    }else{
	        $this->session->set_flashdata('error','Not Added!');
			redirect('User/view_movement');
	    }


}

public function view_movement(){
$login_id=$this->session->userdata('id');
$data['login_id']=$this->session->userdata('id');
if($login_id==null){redirect('User/');}
else
{
$this->load->view('operations/view_movement',$data);
}
}
public function add_bills()
{
$login_id=$this->session->userdata('id');
$data['login_id']=$this->session->userdata('id');
if($login_id==null){redirect('User/');}
else
{
$this->load->view('operations/add_bills',$data);
}	
}

public function insert_bills()
{
	$result=$this->User_Model->get_max_billsid();
	foreach($result as $row)
	{
	$metaid=$row->metaid;
	}
	$metaid=++$metaid;
	$date_time=date("Y-m-d H:i:s");
	$loginid=$this->session->userdata('id');
	$bill_date=$this->input->post('bill_date');
	$equipment=$this->input->post('equipment');
	$source=$this->input->post('source');
	$opening_balance=$this->input->post('opening_balance');
	$quantity_on=$this->input->post('quantity_on');
	$unreconciled_qty_on=$this->input->post('unreconciled_qty_on');
	$quantity_off=$this->input->post('quantity_off');
	$unreconciled_qty_off=$this->input->post('unreconciled_qty_off');
	$closing_balance=$this->input->post('closing_balance');
	$equipment_days=$this->input->post('equipment_days');
	$unreconciled_equipment_days=$this->input->post('unreconciled_equipment_days');
	$rent_unit_price=$this->input->post('rent_unit_price');
	$rent=$this->input->post('rent');
	$fees=$this->input->post('fees');
	$Other_charges=$this->input->post('Other_charges');
	$amount=$this->input->post('amount');
	$unreconciled_amount=$this->input->post('unreconciled_amount');
	$data = array('metaid'=>$metaid,
	'bills_date'=>$bill_date,
	'equipment'=>$equipment,
	'source'=>$source,
	'opening_balance'=>$opening_balance,
	'quantity_on'=>$quantity_on,
	'Unreconciled_qty_on'=>$unreconciled_qty_on,
	'quantity_off' =>$quantity_off,
	'unreconciled_qty_off'=>$unreconciled_qty_off,
	'closing_balance'=>$closing_balance,
	'equipment_days'=>$equipment_days,
	'unreconciled_equipment_days'=>$unreconciled_equipment_days,
	'rent_unit_price'=>$rent_unit_price,
	'rent'=>$rent,
	'fees'=>$fees,
	'amount'=>$amount,
	'unreconciled_amount'=>$unreconciled_amount,
	'date_time'=>$date_time,
    'login_id'=>$loginid);
	 $res= $this->User_Model->insert_bills($data);
	 if($res){
	 $this->session->set_flashdata('message',' Added Successfully!');
	 redirect('User/add_bills');
	  }else
	  {
	  $this->session->set_flashdata('error','Not Added!');
	 redirect('User/add_bills');
	  }

}


public function insert_billsss()
{
    $result=$this->User_Model->get_max_billsid();
	foreach($result as $row)
	{
	$metaid=$row->metaid;
	}
	$metaid=++$metaid;
	$date_time=date("Y-m-d H:i:s");
	$loginid=$this->session->userdata('id');
	$bill_date=$this->input->post('bills_date');
	$equipment=$this->input->post('equipment');
	$source=$this->input->post('source');
	$opening_balance=$this->input->post('opening_balance');
	$quantity_on=$this->input->post('quantity_on');
	$unreconciled_qty_on=$this->input->post('Unreconciled_qty_on');
	$quantity_off=$this->input->post('quantity_off');
	$unreconciled_qty_off=$this->input->post('unreconciled_qty_off');
	$closing_balance=$this->input->post('closing_balance');
	$equipment_days=$this->input->post('equipment_days');
	$unreconciled_equipment_days=$this->input->post('unreconciled_equipment_days');
	$rent_unit_price=$this->input->post('rent_unit_price');
	$rent=$this->input->post('rent');
	$fees=$this->input->post('fees');
	$Other_charges=$this->input->post('Other_charges');
	$amount=$this->input->post('amount');
	$unreconciled_amount=$this->input->post('unreconciled_amount');
	$data = array('metaid'=>$metaid,
	'bills_date'=>$bill_date,
	'equipment'=>$equipment,
	'source'=>$source,
	'opening_balance'=>$opening_balance,
	'quantity_on'=>$quantity_on,
	'Unreconciled_qty_on'=>$unreconciled_qty_on,
	'quantity_off' =>$quantity_off,
	'unreconciled_qty_off'=>$unreconciled_qty_off,
	'closing_balance'=>$closing_balance,
	'equipment_days'=>$equipment_days,
	'unreconciled_equipment_days'=>$unreconciled_equipment_days,
	'rent_unit_price'=>$rent_unit_price,
	'rent'=>$rent,
	'fees'=>$fees,
	'amount'=>$amount,
	'unreconciled_amount'=>$unreconciled_amount,
	'date_time'=>$date_time,
    'login_id'=>$loginid);
	 $res= $this->User_Model->insert_bills($data);	
}

public function update_bills()
{
   
	$date_time=date("Y-m-d H:i:s");
	$loginid=$this->session->userdata('id');
	$id=$this->input->post('id');
	$bill_date=$this->input->post('bills_date');
	$equipment=$this->input->post('equipment');
	$source=$this->input->post('source');
	$opening_balance=$this->input->post('opening_balance');
	$quantity_on=$this->input->post('quantity_on');
	$unreconciled_qty_on=$this->input->post('Unreconciled_qty_on');
	$quantity_off=$this->input->post('quantity_off');
	$unreconciled_qty_off=$this->input->post('unreconciled_qty_off');
	$closing_balance=$this->input->post('closing_balance');
	$equipment_days=$this->input->post('equipment_days');
	$unreconciled_equipment_days=$this->input->post('unreconciled_equipment_days');
	$rent_unit_price=$this->input->post('rent_unit_price');
	$rent=$this->input->post('rent');
	$fees=$this->input->post('fees');
	$Other_charges=$this->input->post('Other_charges');
	$amount=$this->input->post('amount');
	$unreconciled_amount=$this->input->post('unreconciled_amount');
	$data = array('metaid'=>$id,
	'bills_date'=>$bill_date,
	'equipment'=>$equipment,
	'source'=>$source,
	'opening_balance'=>$opening_balance,
	'quantity_on'=>$quantity_on,
	'Unreconciled_qty_on'=>$unreconciled_qty_on,
	'quantity_off' =>$quantity_off,
	'unreconciled_qty_off'=>$unreconciled_qty_off,
	'closing_balance'=>$closing_balance,
	'equipment_days'=>$equipment_days,
	'unreconciled_equipment_days'=>$unreconciled_equipment_days,
	'rent_unit_price'=>$rent_unit_price,
	'rent'=>$rent,
	'fees'=>$fees,
	'amount'=>$amount,
	'unreconciled_amount'=>$unreconciled_amount,
	'date_time'=>$date_time,
    'login_id'=>$loginid);
	 $res= $this->User_Model->insert_bills($data);

}

public function insert_sender_receicer()
{
	$result=$this->User_Model->get_max_sender_receiverid();
	foreach($result as $row)
	{
	$metaid=$row->metaid;
	}
	$metaid=++$metaid;
	$date_time=date("Y-m-d H:i:s");
	$loginid=$this->session->userdata('id');
	$sender_receicer=$this->input->post('sender_receicer');
	$trading_partner_id=$this->input->post('trading_partner_id');
	$phone_number=$this->input->post('phone_number');
	$mobile_number=$this->input->post('mobile_number');
	$email_id=$this->input->post('email_id');
	$active=$this->input->post('active');
	$default=$this->input->post('default');
	$note=$this->input->post('note');
    $data = array( 'metaid'=>$metaid,
    	           'sender_receiver_name' =>$sender_receicer,
                   'trading_partner_name' =>$trading_partner_id,
                    'phone_number'=>$phone_number,
                   'mobile_number'=>$mobile_number,
                   'email'=>$email_id,
                   'active'=>$active,
                   'defaults'=>$default,
                   'note'=>$note,
                   'login_id'=>$loginid,
                   'date_time'=>$date_time);
   $res= $this->User_Model->insert_sender_receiver($data);
	    if($res){
	        $this->session->set_flashdata('message','sender/receiver Added Successfully!');
			redirect('User/sender_receiver');
	    }else{
	        $this->session->set_flashdata('error','Not Added!');
			redirect('User/sender_receiver');
	    }

        
}

public function insert_senderss()
{
    $result=$this->User_Model->get_max_sender_receiverid();
	foreach($result as $row)
	{
	$metaid=$row->metaid;
	}
	$metaid=++$metaid;
	$date_time=date("Y-m-d H:i:s");
	$loginid=$this->session->userdata('id');
	$sender_receicer=$this->input->post('sender_receiver_name');
	$trading_partner_id=$this->input->post('trading_partner_name');
	$phone_number=$this->input->post('phone_number');
	$mobile_number=$this->input->post('mobile_number');
	$email_id=$this->input->post('email');
	$active=$this->input->post('active');
	$default=$this->input->post('defaults');
    $data = array( 'metaid'=>$metaid,
    	           'sender_receiver_name' =>$sender_receicer,
                   'trading_partner_name' =>$trading_partner_id,
                    'phone_number'=>$phone_number,
                   'mobile_number'=>$mobile_number,
                   'email'=>$email_id,
                   'active'=>$active,
                   'defaults'=>$default,
                   'login_id'=>$loginid,
                   'date_time'=>$date_time);
   $res= $this->User_Model->insert_sender_receiver($data);	

}

public function insert_sendersss()
{
	
	$metaid=$this->input->post('id');
	$date_time=date("Y-m-d H:i:s");
	$loginid=$this->session->userdata('id');
	$sender_receicer=$this->input->post('sender_receiver_name');
	$trading_partner_id=$this->input->post('trading_partner_name');
	$phone_number=$this->input->post('phone_number');
	$mobile_number=$this->input->post('mobile_number');
	$email_id=$this->input->post('email');
	$active=$this->input->post('active');
	$default=$this->input->post('defaults');
    $data = array( 'metaid'=>$metaid,
    	           'sender_receiver_name' =>$sender_receicer,
                   'trading_partner_name' =>$trading_partner_id,
                    'phone_number'=>$phone_number,
                   'mobile_number'=>$mobile_number,
                   'email'=>$email_id,
                   'active'=>$active,
                   'defaults'=>$default,
                   'login_id'=>$loginid,
                   'date_time'=>$date_time);
  $res= $this->User_Model->insert_sender_receiver($data);	
}




public function view_sender_receiver()
{
$login_id=$this->session->userdata('id');
if($login_id==null){redirect('User/');}
else
{
$this->load->view('sender_receiver/view_sender_receiver');
}	
}






public function abc()
{ 
    //$cs=json_encode($this->User_Model->fetch_trading_partner_sender());
	$sender=$this->User_Model->fetch_trading_partner_sender();
	if(isset($_REQUEST['otherss']))
 {
	$x=$_REQUEST['otherss'];
	$y=$_REQUEST['datas'];
 }
 else{
	 $x='';
	 $y='';
 }
	?>
	<select class="form-control  table_drop1 trading_partner_name<?php echo$x;?>" id="trading_partner_name<?php echo$x;?>"><?php foreach($sender as $row) {
		if($y==$row->tp_name)
		{
			$select="selected";
		}
		else{
		$select='';	
		}
		?> <option  value="<?php echo $row->metaId; ?>" <?php echo $select; ?>><?php echo $row->tp_name; ?></option> <?php 
		} ?></select>
	<?php
}

public function abcs()
{ 
    //$cs=json_encode($this->User_Model->fetch_trading_partner_sender());
	$sender=$this->User_Model->fetch_trading_partner_sender();
	if(isset($_REQUEST['otherss']))
 {
	$x=$_REQUEST['otherss'];
	$y=$_REQUEST['datas'];
 }
 else{
	 $x='';
	 $y='';
 }
	?>
	<select class="form-control sender_edit_select table_drop1 trading_partner_name<?php echo$x;?>" id="trading_partner_name<?php echo$x;?>"><?php foreach($sender as $row) {
		if($y==$row->tp_name)
		{
			$select="selected";
		}
		else{
		$select='';	
		}
		?> <option  value="<?php echo $row->tp_name; ?>" <?php echo $select; ?>><?php echo $row->tp_name; ?></option> <?php 
		} ?></select>
	<?php
}

public function receiver_tps()
{
	$sender=$this->User_Model->fetch_trading_partner_sender();
	if(isset($_REQUEST['otherss']))
    { $x=$_REQUEST['otherss'];
	$y=$_REQUEST['receiver_tp']; }
    else {
	 $x='';
	 $y='';}
	?>
	<select class=" form-control table_drop2 Receiving_Tp<?php echo$x;?>" id="Receiving_Tp<?php echo$x;?>"><?php foreach($sender as $row) {
		if($y==$row->tp_name)
		{
			$select="selected";
		}
		else{
		$select='';	
		}
		?> <option  value="<?php echo $row->metaId; ?>" <?php echo $select; ?>><?php echo $row->tp_name; ?></option> <?php 
		} ?></select>
	<?php
}



public function abcd()
{ 
$sender=$this->User_Model->fetch_trading_partner_sender();
?>
	<select class="form-control trading_partner_name" id="trading_partner_name_one"><?php foreach($sender as $row) {
	
	
		?> <option value="<?php echo $row->tp_name; ?>"><?php echo $row->tp_name; ?></option> <?php 
		} ?></select>
		<?php
}


public function tp_second()
{
	
	$sender=$this->User_Model->fetch_trading_partner_sender();
?>
<select class="form-control" id="receiving_tp"><?php foreach($sender as $row) { ?> <option value="<?php echo $row->tp_name; ?>"><?php echo $row->tp_name; ?></option> <?php } ?></select>
		<?php
}

public function receiver_tp()
{
$sender=$this->User_Model->fetch_trading_partner_sender();
?>
	<select class="form-control trading_partner_name" id="Receiving_Tp"><?php foreach($sender as $row) {
	
		?> <option value="<?php echo $row->tp_name; ?>"><?php echo $row->tp_name; ?></option> <?php 
		} ?></select>
		<?php	
}

public function carrierlist()
{
	$carrier=$this->User_Model->get_carriers(); 
	?>
	<select class="form-control" id="Carrier"><?php foreach($carrier as $sha) {  ?> <option value="<?php echo $sha->carrier; ?>"><?php echo $sha->carrier; ?></option> <?php } ?></select>
	<?php
}
public function carrierlists()
{
	$carrier=$this->User_Model->get_carriers(); 
	if(isset($_REQUEST['otherss']))
    { $x=$_REQUEST['otherss'];
	$y=$_REQUEST['carri']; }
    else {
	 $x='';
	 $y='';}
	?>
	<select class=" carrier form-control" id="Carrier<?php echo$x?>"><?php foreach($carrier as $sha) {
	   if($y==$sha->carrier)
		{
			$select="selected";
		}
		else{
		$select='';	
		}
		?> <option value="<?php echo $sha->carrier_id; ?>" <?php echo$select;?>><?php echo $sha->carrier; ?></option> <?php } ?></select>
	<?php
	
}

public function  equipment_report()
{
$login_id=$this->session->userdata('id');
if($login_id==null){redirect('User/');}
else
{
$this->load->view('pallet_reports/equipment_report');
}
}
public function movementreports()
{
$login_id=$this->session->userdata('id');
if($login_id==null){redirect('User/');}
else
{
$this->load->view('pallet_reports/movementreports');
}	
}
public function Trading_Partner_report()
{
	$login_id=$this->session->userdata('id');
if($login_id==null){redirect('User/');}
else
{
$this->load->view('pallet_reports/trading_partner_report');
}	
}
public function financial_report()
{
$login_id=$this->session->userdata('id');
if($login_id==null){redirect('User/');}
else
{
$this->load->view('pallet_reports/financial_report');
}	
}

public function add_profile()
{
$login_id=$this->session->userdata('id');
$data['login_id']=$this->session->userdata('id');
if($login_id==null){redirect('User/');}
else
{
	
$this->load->view('profile/add_profile',$data);
}	
}
public function import_equipment_csv()
{
	$login_id=$this->session->userdata('id');
if($login_id==null){redirect('User/');}
else
{
$this->load->view('import_data/import_equipment');
}
	
}


public function import_equipments_csv()
{	
$login_id=$this->session->userdata('id');
	if(isset($_POST['submit'])){
if($_FILES['csv_data']['name']){

$arrFileName = explode('.',$_FILES['csv_data']['name']);
if($arrFileName[1] == 'csv' || $arrFileName[1] == 'xlsx'){
$handle = fopen($_FILES['csv_data']['tmp_name'], "r");
$skip_line = true;//rest of your code
while (($emapData = fgetcsv($handle, 1000, ",")) !== FALSE) {

         if($skip_line) { $skip_line = false; continue;}
         $result=$this->User_Model->get_max_tp_equipment();
	     foreach($result as $row)
	     {
	     $metaid=$row->metaid;
	     }
	     $metaid=++$metaid;
	    $insert_data =array('metaid'=>$metaid,
	    	             
	    	               'equipment' => $emapData[0],
	                       'equipment_supplier_tp'=>$emapData[1],
	                       'equipment_report_name'=>$emapData[2],
	                       'equipment_code'=>$emapData[3],
	                       'equipment_internal_code'=>$emapData[4],
	                       'equipment_book_stock'=>$emapData[5],
	                       'equipment_lost_stock'=>$emapData[6],
	                       'equipment_supplier_stock'=>$emapData[7],
	                       'equipment_rent_unit_price'=>$emapData[8],
	                       'base_quantity_off'=>$emapData[9],
	                       'unit_movement_fee'=>$emapData[10],
	                       'movement_fee'=>$emapData[11],
	                       'issue_duplicates'=>$emapData[12],
	                       'active'=>$emapData[13],
	                       'login_id'=>$login_id);

	    $result12=$this->User_Model->insert_equipment($insert_data);
        }

	     	if($result12)
		{
			$this->session->set_flashdata('message','<div class="alert alert-success"><strong>Success !! </strong> Added successfully</div>');
			redirect('User/import_equipment_csv');
		}
		else
		{
			$this->session->set_flashdata('error','|| Error ||');
			redirect('User/import_equipment_csv');
		}

}
else{
	$this->session->set_flashdata('message','<div class="alert alert-danger"><strong>Error !! </strong>Only Csv or Xslx Files are allowed</div>');
			redirect('User/import_equipment_csv');
}
        }
}	
}
public function import_csv_for_trading_partner()
{
$login_id=$this->session->userdata('id');
if($login_id==null){redirect('User/');}
else
{
$this->load->view('trading_partner/trading_partner_csv');
}	
}

public function trading_partner_csv_file()
{
$login_id=$this->session->userdata('id');
	if(isset($_POST['submit'])){
if($_FILES['csv_data']['name']){

$arrFileName = explode('.',$_FILES['csv_data']['name']);
if($arrFileName[1] == 'csv' || $arrFileName[1] == 'xlsx' ){
$handle = fopen($_FILES['csv_data']['tmp_name'], "r");
while (($emapData = fgetcsv($handle, 1000, ",")) !== FALSE) {
$a=rand(04540, 98529);
$code="KSN".$a."BT";

$pass=rand(1111,9999);
         $result=$this->User_Model->get_max_memberId();
	     foreach($result as $row)
	     {
	     $metaid=$row->memberId;
	     }
	     $metaid=++$metaid;
		 
		 $date=date('Y-m-d H:i:s');
	     $login_type='M';
	      $insert_data =array('memberId'=>$metaid,
	    	              // 'item' => $emapData[0],
	    	               'tp_name' => $emapData[0],
	                       'tp_type'=>$emapData[1],
	                       'emailid'=>$emapData[2],
	                       'member_code'=>$emapData[3],
	                       'franchiseId'=>0,
	                       'stateId'=>0,
	                       'sponsorId'=>0,
	                       'rdId'=>0,
	                       'code'=>$emapData[4],
	                       'their_code'=>$emapData[5],
	                       'notify'=>$emapData[6],
	                       'phone_number'=>$emapData[7],
	                       'fax'=>$emapData[8],
	                       'address1'=>$emapData[9],
	                       'address2'=>$emapData[10],
	                       'country'=>$emapData[11],
	                       'state'=>$emapData[12],
	                       'city'=>$emapData[13],
	                       'zip'=>$emapData[14],
	                       'internal'=>$emapData[15],
	                       'tp_primary'=>$emapData[16],
	                       'lmd'=>$emapData[17],
	                       'special'=>$emapData[18],
	                       'location'=>$emapData[19],
	                       'location_id'=>$emapData[20],
	                       'report'=>$emapData[21],
	                       'licence_number'=>$emapData[22],
	                       'expiry_date'=>$emapData[23],
	                       'active'=>$emapData[24],
	                       'notes'=>$emapData[25],
	                       'doj'=>$emapData[26],
	                       'login_id'=>$login_id);
      $login=array(
	'memberId'=>$metaid,
	'username'=>$code,
	'password'=>$pass,
	'login_type'=>$login_type,
	'date_time'=>$date
	);   
	   	$result1=$this->User_Model->insert_member($insert_data);
	    $result2=$this->User_Model->insert_login($login);
	//$result1=$this->User_Model->insert_bank_detail($data2);
	
        }

	 if($result1==$result2)
		{
			$this->session->set_flashdata('message','<div class="alert alert-success"><strong>Success !! </strong>Trading Partner Added successfully</div>');
			redirect('User/add_member');
		}
		else
		{
			$this->session->set_flashdata('message','|| Error ||');
			redirect('User/add_member');
		}

}
else{
	$this->session->set_flashdata('error','Only Css & Xlsx files are allowed');
			redirect('User/import_csv_for_trading_partner');
}
        }
}		
}



public function imports_csv_movements()
{
		$login_id=$this->session->userdata('id');
if($login_id==null){redirect('User/');}
else
{
$this->load->view('import_data/import_movements');
}
}


public function imports_data_csv_movements()
{
	error_reporting(0);
$login_id=$this->session->userdata('id');
if(isset($_POST['submit'])){
if($_FILES['csv_data']['name']){
$arrFileName = explode('.',$_FILES['csv_data']['name']);
if($arrFileName[1] == 'csv' || $arrFileName[1] == 'xlsx' ){
$handle = fopen($_FILES['csv_data']['tmp_name'], "r");
$skip_line = true;//rest of your code
while (($emapData = fgetcsv($handle, 1000, ",")) !== FALSE) {
	
       if($skip_line) { $skip_line = false; continue; }
         $result=$this->User_Model->get_max_movementsid();
	     foreach($result as $row)
	     {
	     $metaid=$row->metaid;
	     }
	     $metaid=++$metaid;
 $insert_data =array('metaid'=>$metaid,
	    	              // 'item' => $emapData[0],
	    	               'movements_date' => $emapData[0],
	                       'equipment'=>$emapData[1],
	                       'sending_tp'=>$emapData[2],
	                       'receiving_tp'=>$emapData[3],
	                       'reference'=>$emapData[4],
	                       'sent'=>$emapData[5],
	                       'receive'=>$emapData[6],
	                       'quantity'=>$emapData[7],
	                       'trace_quantity'=>$emapData[8],
	                       'untrace_quantity'=>$emapData[9],
	                       'redeem_xn'=>$emapData[10],
	                       'unredeem_on'=>$emapData[11],
	                       'redeem_xf'=>$emapData[12],
	                       'unredeem_off'=>$emapData[13],
	                       'transfer'=>$emapData[14],
	                       'transaction'=>$emapData[15],
	                       'effective_date'=>$emapData[16],
	                       'docket_number'=>$emapData[17],
	                       'rai_corr'=>$emapData[18],
	                       'rai_corr_date'=>$emapData[19],
	                       'type'=>$emapData[20],
	                       'orig_movemevt'=>$emapData[21],
	                       'orig_bill'=>$emapData[22],
	                       'export'=>$emapData[23],
	                       'batch'=>$emapData[24],
	                       'bill'=>$emapData[25],
	                       'supplier_reference'=>$emapData[26],
	                       'carrier'=>$emapData[27],
	                       'days'=>$emapData[28],
	                       'equipment_days'=>$emapData[29],
	                       'rent'=>$emapData[30],
	                       'fee_code'=>$emapData[31],
	                       'fee_unit_price'=>$emapData[32],
	                       'fees'=>$emapData[33],
	                       'amount'=>$emapData[34],
	                       'notes'=>$emapData[35],
	                       'login_id'=>$login_id);
    
	   	$result1=$this->User_Model->insert_movements($insert_data);	
}
	 if($result1)
		{
			$this->session->set_flashdata('message','<div class="alert alert-success"><strong>Success !! </strong>Movements Added successfully</div>');
			redirect('User/imports_csv_movements');
		}
		else
		{
			$this->session->set_flashdata('message','|| Error ||');
			redirect('User/imports_csv_movements');
		}
}
else{
	$this->session->set_flashdata('message','<div class="alert alert-danger"><strong>Error !! </strong>Only Csv or Xslx Files are allowed</div>');
			redirect('User/imports_csv_movements');
}
}
	}
}

public function trading_partner_accounts_csv()
{
	$login_id=$this->session->userdata('id');
	if(isset($_POST['submit'])){
if($_FILES['csv_data']['name']){

$arrFileName = explode('.',$_FILES['csv_data']['name']);
// print_r($arrFileName);exit;
if($arrFileName[1] == 'csv' || $arrFileName[1] == 'xlsx' ){
$handle = fopen($_FILES['csv_data']['tmp_name'], "r");
$skip_line = true;
while (($emapData = fgetcsv($handle, 1000, ",")) !== FALSE) {
	print_r( $emapData);exit;
           if($skip_line) { $skip_line = false; continue; }
         $result=$this->User_Model->get_max_tp_accountsId();
	     foreach($result as $row)
	     {
	     $metaid=$row->metaid;
	     }
	     $metaid=++$metaid;
	    $insert_data =array('metaid'=>$metaid,
	    	          
	    	               'tpa_third_party' => $emapData[0],
	                       'there_code'=>$emapData[1],
	                       'tpa_supplier'=>$emapData[2],
	                       'tp_code'=>$emapData[3],
	                       'tpa_account_number'=>$emapData[4],
	                       'tpa_tn_delay_rule'=>$emapData[5],
	                       'tn_delay_type'=>$emapData[6],
	                       'tpa_allow_tf'=>$emapData[7],
	                       // 'tpa_tf_delay_type'=>$emapData[8],
	                       'tpa_tf_delay_days'=>$emapData[9],
	                       'tpa_tf_delay_rule'=>$emapData[10],
	                       'tpa_redeem_exchange'=>$emapData[11],
	                       'tpa_redeem_same'=>$emapData[12],
	                       'tpa_complete'=>$emapData[13],
	                       'tpa_override_export_status'=>$emapData[14],
	                       'tpa_export_on'=>$emapData[15],
	                       'tpa_export_off'=>$emapData[16],
	                       'tpa_docket_format'=>$emapData[17],
	                       'tpa_con_note_required'=>$emapData[18],
	                       'tpa_con_note_characters'=>$emapData[19],
	                       'tpa_con_note_numeric'=>$emapData[20],
	                       'tpa_con_note_decription'=>$emapData[22],
	                       'tpa_reference_required'=>$emapData[23],
	                       'tpa_reference_characters'=>$emapData[24],
	                       'tpa_reference_numeric'=>$emapData[25],
	                       'tpa_reference_description'=>$emapData[26],
	                       'tpa_reminder'=>$emapData[27],
	                       'tpa_notes'=>$emapData[28],
	                       'login_id'=>$login_id);
	    $result12=$this->User_Model->insert_tpaccounts($insert_data);
        }

	     	if($result12)
		{
			$this->session->set_flashdata('message','<div class="alert alert-success"><strong>Success !! </strong> Added successfully</div>');
			redirect('User/import_trading_partner_accounts');
		}
		else
		{
			$this->session->set_flashdata('message','|| Error ||');
			redirect('User/import_trading_partner_accounts');
		}

}
else{
	$this->session->set_flashdata('message','<div class="alert alert-danger"><strong>Error !! </strong> Only Css & Xlxs files are allow</div>');
			redirect('User/import_trading_partner_accounts');
}
        }
}
}



public function update_insert_equipment()
{
    $metaid=$this->input->post('meta_id');
    $loginid=$this->input->post('login_id');
	$metaid=$metaid;
	$date_time=date("Y-m-d H:i:s");
	$equipment=$this->input->post('equipment');
	$equipment_supplier_tp=$this->input->post('equipment_supplier_tp');
	$equipment_report_name=$this->input->post('equipment_report_name');
	$equipment_code=$this->input->post('equipment_code');
	$equipment_internal_code=$this->input->post('equipment_internal_code');
	$equipment_book_stock=$this->input->post('equipment_book_stock');
	$equipment_lost_stock=$this->input->post('equipment_lost_stock');
	$equipment_supplier_stock=$this->input->post('equipment_supplier_stock');
	$equipment_rent_unit_price=$this->input->post('equipment_rent_unit_price');
	$base_quantity_off=$this->input->post('base_quantity_off');
	$unit_movement_fee=$this->input->post('unit_movement_fee');
	$movement_fee=$this->input->post('movement_fee');
	$issue_duplicates=$this->input->post('issue_duplicates');
	$active=$this->input->post('active');
	$data = array('metaid'=>$metaid,
	'equipment'=>$equipment,
	'equipment_supplier_tp'=>$equipment_supplier_tp,
	'equipment_report_name'=>$equipment_report_name,
	'equipment_code'=>$equipment_code,
	'equipment_internal_code'=>$equipment_internal_code,
	'equipment_book_stock'=>$equipment_book_stock,
	'equipment_supplier_stock' =>$equipment_lost_stock,
	'equipment_supplier_stock'=>$equipment_supplier_stock,
	'equipment_rent_unit_price'=>$equipment_rent_unit_price,
	'base_quantity_off'=>$base_quantity_off,
	'unit_movement_fee'=>$unit_movement_fee,
	'movement_fee'=>$movement_fee,
	'issue_duplicates'=>$issue_duplicates,
	'active'=>$active,
    'login_id'=>$loginid);
	$res= $this->User_Model->insert_equipment($data);
	    if($res){
	        $this->session->set_flashdata('message','Equipment Added Successfully!');
			redirect('User/view_equipments');
	    }else{
	        $this->session->set_flashdata('error','Not Added!');
			redirect('User/view_equipments');
	    }
	
}
public function update_equipments()
{
	
	    $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
		$this->load->view('level/update_equipments');
		}
	
}
public function update_carrier()
{
	     $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
		$this->load->view('carrier/update_carrier');
		}	
}
public function delete_carrier($id)
{
	     $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
		$id=base64_decode($id);
		$this->User_Model->delete_carrier($id);
		}	
}
public function delete_sender_receiver($id)
{
	   $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
		$id=base64_decode($id);
		$this->User_Model->delete_sender_receiver($id);
		}
	
}
public function update_member()
{
	
	$code=$this->input->post('member_code');
	
    $login_id=$this->session->userdata('id');
	$sponsorId=0;
	$rdId=0;
	$state=38;
	$franchise=0;
	$tp_name=$this->input->post('tp_name');
    $tp_type=$this->input->post('tp_type');
	$location=$this->input->post('location');
	$internal=$this->input->post('internal');
	$primary=$this->input->post('primary');
    $codes=$this->input->post('code');
    $lmd=$this->input->post('lmd');
    $their_code=$this->input->post('their_code');
    $notify=$this->input->post('notify');
    $fax=$this->input->post('fax');
    $country=$this->input->post('country');
    $state=$this->input->post('state');
    $city=$this->input->post('city');
    $address1=$this->input->post('address1');
    $address2=$this->input->post('address2');
    $location_id=$this->input->post('location_id');
    $zip=$this->input->post('zip');
    $report=$this->input->post('report');
    $doj=$this->input->post('doj');
    $active=$this->input->post('active');
    $phone_number=$this->input->post('phone_number');
    $licence_number=$this->input->post('licence_number');
	$expiry_date=$this->input->post('expiry_date');
	$notes=$this->input->post('notes');
	$email=$this->input->post('emailid');
	$special=$this->input->post('special');
	$date=date('Y-m-d H:i:s');


	$memberId=$this->input->post('metaid');
	
	$data=array(
	'memberId'=>$memberId,
	'tp_type'=>$tp_type,
	'member_code'=>$code,
	'franchiseId'=>$franchise,
	'stateId'=>$state,
	'sponsorId'=>$sponsorId,
	'rdId'=>$rdId,
    'expiry_date'=>$expiry_date,
	'internal'=>$internal,
    'tp_primary'=>$primary,
	'phone_number'=>$phone_number,
	'licence_number'=>$licence_number,
	'tp_name'=>$tp_name,
	'location'=>$location,
	'code'=>$codes,
	'their_code'=>$their_code,
	'notify'=>$notify,
	'fax'=>$fax,
	'country'=>$country,
	'state'=>$state,
	'city'=>$city,
	'address1'=>$address1,
	'address2'=>$address2,
	'notes'=>$notes,
	'emailid'=>$email,
	'zip'=>$zip,
	'lmd'=>$lmd,
	'location_id'=>$location_id,
	'report'=>$report,
	'active'=>$active,
	'doj'=>$doj,
	'special'=>$special,
	'login_id'=>$login_id,
	'date_time'=>$date
	);
	$result1=$this->User_Model->insert_member($data);
	if($result1)
		{
			$this->session->set_flashdata('message','<div class="alert alert-success"><strong>Success !! </strong>Trading Partner Updated successfully</div>');
			redirect('User/view_member');
		}
		else
		{
			$this->session->set_flashdata('message','|| Error ||');
			redirect('User/view_member');
		}
	}
	
public function update_stocktake()
{
        $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
		$this->load->view('stocktakes/update_stocktake');
		}	    
}

public function updated_stocktake()
{
        $date_time=date("Y-m-d H:i:s");
		$loginid=$this->session->userdata('id');
	    $stockdate=$this->input->post('stockdate');
	    $trading_partner=$this->input->post('trading_partner');
	    $type=$this->input->post('type');
	    $equipment=$this->input->post('equipment');
	    $book_stock=$this->input->post('book_stock');
	    $physical_stock=$this->input->post('physical_stock');
	    $shrinkage=$this->input->post('shrinkage');
	    $reported_variance=$this->input->post('reported_variance');
	    $receiving_tp=$this->input->post('receiving_tp');
	    $note=$this->input->post('note');
	    $loginid=$this->input->post('login_id');
	    $metaid=$this->input->post('metaid');
	    
	    $insert_data =array('metaid'=>$metaid,
	    	               'date' => $stockdate,
	                       'trading_partner'=>$trading_partner,
	                       'tp_type'=>$type,
	                       'equipment'=>$equipment,
	                       'book_stock'=>$book_stock,
	                       'physical_stock'=>$physical_stock,
	                       'shrinkage'=>$shrinkage,
	                       'reported_variance'=>$reported_variance,
	                       'receiving_tp'=>$receiving_tp,
	                       'notes'=>$note,
	                       'login_id'=>$loginid,
	                       'date_time'=>$date_time);
	   $res= $this->User_Model->insert_stocktake($insert_data);

	    if($res){
	        $this->session->set_flashdata('msg','stocktakes Added Successfully!');
			redirect('User/view_stocktakes');
	    }else{
	        $this->session->set_flashdata('error','Not Added!');
			redirect('User/view_stocktakes');
	    }	
}

public function delete_stocktake($id)
{
        $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
		echo $id=base64_decode($id);
		$this->User_Model->delete_stocktake($id);
		}	
}
public function update_movement()
{
	   $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
		$this->load->view('operations/update_movement');
		}
	
}
public function delete_movement($metaid)
{
	 $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
		echo $id=base64_decode($metaid);
		$this->User_Model->delete_movemented($id);
		}
	
}

	public function dalete_movemedsss()	
	{
	 $id=$_POST['id'];
	 $data=array('show_hide'=>1);
     $this->db->where('metaid',$id);
     $res=$this->db->update('movements',$data);
	 $res;
	
	}
	
	public function delete_carrierss()
	{
	 $id=$_POST['id'];
	 $data=array('show_hide'=>1);
     $this->db->where('metaid',$id);
     $res=$this->db->update('carrier',$data);
	 $res;	
	}
	
	public function delete_bills()
	{
	 $id=$_POST['id'];
	 $data=array('show_hide'=>1);
     $this->db->where('metaid',$id);
     $res=$this->db->update('bills',$data);
	 $res;	
	}
	public function delete_sender_receivers()
	{
	 $id=$_POST['id'];
	 $data=array('show_hide'=>1);
     $this->db->where('metaid',$id);
     $res=$this->db->update('sender_receiver',$data);
	 $res;	
	}
	
	
	public function dalete_stocktake()	
	{
		$id=$_POST['id'];
	 $data=array('show_hide'=>1);
     $this->db->where('metaid',$id);
     $res=$this->db->update('stocktakes',$data);
	 $res;
	
	}
	public function dalete_member_login()	
	{
		$id=$_POST['id'];
	 $data=array('show_hide'=>1);
     $this->db->where('memberId',$id);
     $res=$this->db->update('member_management',$data);
	 $res;
	 if($res)
	 {
	  $data=array('show_hide'=>1);
     $this->db->where('memberId',$id);
     $res=$this->db->update('login',$data);
	 $res;
	 }
	
	}
		public function dalete_tp_accounts()	
	{
		$id=$_POST['id'];
	 $data=array('show_hide'=>1);
     $this->db->where('metaid',$id);
     $res=$this->db->update(' trading_partner_accounts',$data);
	 $res;
	
	}

public function delete_trading_partner($id)
{
 $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
		echo $id=base64_decode($id);
		$this->User_Model->delete_trading_partner($id);
		}	
}

public function add_supplier()
{
       $login_id=$this->session->userdata('id');
       $data['login_id']=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
		$this->load->view('operations/add_supplier',$data);
		}	
}
public function insert_supplier_type()
{
	$login_id=$this->session->userdata('id');
	$result=$this->User_Model->get_max_supplier_view();
	foreach($result as $row)
	{
	$metaid=$row->metaid;
	}
	$metaid=++$metaid;
	$date=$this->input->post('datess');
	$type=$this->input->post('type');
	$tp_type=$this->input->post('tp_type');
	$batch_number=$this->input->post('batch_number');
	$start_date=$this->input->post('start_date');
	$export_ons=$this->input->post('export_ons');
	$export_offs=$this->input->post('export_offs');
	$exported=$this->input->post('exported');
	$notes=$this->input->post('notes');
	$data = array('metaid'=>$metaid,
	'supplier_date'=>$date,
	'type'=>$type,
	'trading_partner'=>$tp_type,
	'batch_number'=>$batch_number,
	'start_date'=>$start_date,
	'export_ons'=>$export_ons,
	'export_offs'=>$export_offs,
	'exported'=>$exported,
	'note'=>$notes,
	'login_id'=>$login_id
	);
	$result1=$this->User_Model->insert_supplier_types($data);
		
	if($result1)
		{
			$this->session->set_flashdata('message','<div class="alert alert-success"><strong>Success !! </strong>Supplier Inserted successfully</div>');
			redirect('User/add_supplier');
		}
		else
		{
			$this->session->set_flashdata('message','|| Error ||');
			redirect('User/add_supplier');
		}
	
}


public function view_supplier()
{
	    $login_id=$this->session->userdata('id');
	    $data['login_id']=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
		$this->load->view('operations/view_supplier',$data);
		}
}

public function import_bills()
{
        $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
		$this->load->view('operations/import_bills');
		}	
}

public function view_bill()
{
	
	    $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{
		$this->load->view('operations/view_bill');
		}
}

public function load_bills( $rowno = 0)
{
	 //    $this->db->order_by('bills_id', 'DESC');
		// $query = $this->db->get('bills_view');
		// $datas=$query->result_array();
		// echo json_encode($datas); 
	   $rowperpage = 10;
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }

    $allcount = $this->User_Model->get_bill();
    $users_record = $this->User_Model->get_bills($rowno,$rowperpage);
    $configs['base_url'] = base_url()."User/view_carrier";
    $configs['use_page_numbers'] = TRUE;
    $configs['total_rows'] = $allcount;
    $configs['per_page'] = $rowperpage;
    $this->pagination->initialize($configs);
    $data['links'] = $this->pagination->create_links();
    $data['authors'] = $users_record;
    $data['row'] = $rowno;
    echo json_encode($data);
		
}

public function load_senderrec()
{
	    $this->db->order_by('sender_receiver_id', 'DESC');
		$query = $this->db->get('sender_receiver_view');
		$datas=$query->result_array();
		echo json_encode($datas); 
		
}



public function manage_form()
   {
        $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{	
		$this->load->view('user_right/manage_form');
		}	
   }
public function inser_user_rights_filelds()
{
    $login_id=$this->session->userdata('id');

	$member_login_id=$this->input->post('member_login_id');
	$form_id=$this->input->post('form_id');
	$field_id=$this->input->post('field_id');
	if($field_id=='')
	{
	$field_id=array();	
	}
    $field_id = implode(',', $field_id);

	$result1=$this->User_Model->inser_user_rights_filelds($field_id,$form_id,$member_login_id,$login_id);
		
	if($result1)
		{
			$this->session->set_flashdata('message','<div class="alert alert-success"><strong>Success !! </strong>Save successfully</div>');
			redirect('User/manage_form');
		}
		else
		{
			$this->session->set_flashdata('message','|| Error ||');
			redirect('User/manage_form');
		}	
}


public function openfile()
{

$personalinfo = fopen("personaldata.dat", "r");
$firstname = fgets($personalinfo);
$age = fgets($personalinfo);
$birthyear = fgets($personalinfo);
$sex = fgets($personalinfo);
$weight = fgets($personalinfo);
fclose($personalinfo);
print("<p> $firstname you are $age years old, born in $birthyear, you are $weight lbs. and $sex.</p>");
}




public function carrier_controller()
{
    $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{	
		$this->load->view('carrier/import_carriers');
		}	
}

public function import_carrier()
{
$login_id=$this->session->userdata('id');
	if(isset($_POST['submit'])){
if($_FILES['csv_data']['name']){

$arrFileName = explode('.',$_FILES['csv_data']['name']);
if($arrFileName[1] == 'csv' || $arrFileName[1] == 'xlsx' ){
$handle = fopen($_FILES['csv_data']['tmp_name'], "r");
$skip_line = true;//rest of your code
while (($emapData = fgetcsv($handle, 1000, ",")) !== FALSE) {


         if($skip_line) { $skip_line = false; continue;}
         $result=$this->User_Model->get_max_carrierid();
         
	     foreach($result as $row)
	     {
	     $metaid=$row->metaid;
	     }
	     $metaid=++$metaid;
	    $insert_data =array('metaid'=>$metaid,
	    	               'carrier' => $emapData[2],
	                       'login_id'=>$login_id);
	    // print_r($insert_data);exit;
						   if($emapData[0]=='')
						   {
							   break;
						   }

	    $result12=$this->User_Model->insert_carrier($insert_data);
        }

	     	if($result12)
		{
			$this->session->set_flashdata('message','<div class="alert alert-success"><strong>Success !! </strong> Added successfully</div>');
			redirect('User/carrier_controller');
		}
		else
		{
			$this->session->set_flashdata('message','|| Error ||');
			redirect('User/carrier_controller');
		}

}
else{
	$this->session->set_flashdata('message','<div class="alert alert-danger"><strong>Error !! </strong>Only Css & Xlsx Files allowed </div>');
			redirect('User/carrier_controller');
}
        }
}	
	
}

//public function mlm()
//{
//	users
//}

	public function delete_interview($id)
	{
		$id=base64_decode($id);
		$data=array('show_hide'=>1);
     $this->db->where('metaid',$id);
     $res=$this->db->update('equipment',$data);
	 $res;
	
	if($res)
		{
			$this->session->set_flashdata('message','<div class="alert alert-success"><strong>Success !! </strong>Deleted successfully</div>');
			redirect('User/view_equipments');
		}
		else
		{
			$this->session->set_flashdata('message','|| Error ||');
			redirect('User/view_equipments');
		}
			
	}


public function movement_data()
{
        $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{	
		$this->load->view('headerfile/movement_data');
		}	
}


public function movement_datass()
{
        $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{	
		$this->load->view('headerfile/movement_data2');
		}	
}
public function bills_datass()
{
        $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{	
		$this->load->view('headerfile/bill_data');
		}	
}

public function view_sites()
{
  $login_id=$this->session->userdata('id');
  $data['login_id']=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{	
		$this->load->view('administrater/view_site',$data);
		}
}

public function view_3rd_parties()
{
	    $login_id=$this->session->userdata('id');
	    $data['login_id']=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{	
		$this->load->view('administrater/view_rd_party',$data);
		}
}

public function member_data()
{
         $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{	
		$this->load->view('headerfile/member_data');
		}	
}

public function memberss()
{
	    $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{	
		$this->load->view('headerfile/memberss');
		}	
}


public function equipment_data()
{ 

        $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{	
		$this->load->view('headerfile/equipment_data');
		}	
	
}
public function equipment_one()
{ 

        $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{	
		$this->load->view('headerfile/equipment1');
		}	
	
}
public function equipment_two()
{ 

        $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{	
		$this->load->view('headerfile/equipment2');
		}	
	
}

public function update_movements()
{
       // $login_id=$this->session->userdata('id');
		//if($login_id==null){redirect('User/');}
		//else
		//{	
		//$this->load->view('headerfile/update_movement');
		//}		
		
		$loginid=$this->session->userdata('id');

	$data = array('metaid'=>$_POST['id'],

	'movements_date'=>$_POST['Dates'],
	'equipment'=>$_POST['equipments'],
	'sending_tp'=>$_POST['Sending_Tps'],
	'receiving_tp'=>$_POST['Receiving_Tps'],
	'reference'=>$_POST['References'],

	'quantity'=>$_POST['Quantitys'],

    'transfer'=>$_POST['Transfers'],

    'Transaction'=>$_POST['Transactions'],

    'effective_date'=>$_POST['Effective_dates'],

    'docket_number'=>$_POST['Docket_Numbers'],
    'carrier'=>$_POST['Carrier'],
    'rai_corr'=>$_POST['Rai_Corrs'],
    'type'=>$_POST['Types'],
    'orig_movemevt'=>$_POST['Orig_Movements'],
    'export'=>$_POST['Exports'],
    'batch'=>$_POST['Batchs'],
    'bill'=>$_POST['Bills'],
    'notes'=>$_POST['Notess'],
    'login_id'=>$loginid);
	$res= $this->User_Model->insert_movements($data);
	if( $this->db->affected_rows() == 1 ){
		echo "success";
	}
	else{

	}
}

public function member_datass()
{
	     $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{	
		$this->load->view('headerfile/equipment_data1');
		}
	
}

public function bills_one()
{
	    $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{	
		$this->load->view('headerfile/bills1');
		}
	
}

public function bills_two()
{
	    $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{	
		$this->load->view('headerfile/bills2');
		}
	
}


public function stock_one()
{
	    $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{	
		$this->load->view('headerfile/stocke1');
		}
	
}
public function stock_two()
{
	    $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{	
		$this->load->view('headerfile/stocke2');
		}
	
}

public function upload_docket()
{
        $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{	
		$this->load->view('upload/upload_docket');
		}
		
}


public function insert_docket_img()
{
//$packs_image=$_FILES['image_file']['name'];
 $login_id=$this->session->userdata('id');
//------------------upload_image---------------------
$file_name = $_FILES['image_file']['name'];
$file_size = $_FILES['image_file']['size'];
$file_tmp = $_FILES['image_file']['tmp_name'];
$file_type = $_FILES['image_file']['type'];
$x=move_uploaded_file($file_tmp,"assets/images/upload_docket/".$file_name);

$user_id=$this->input->post('user_id');
$data=array('docket_name'=>$file_name,'user_id'=>$user_id,'login_id'=>$login_id);
 $insert=$this->db->insert('upload_mannual_docket',$data);
if($insert)
{
	$this->session->set_flashdata('msg','Docket Uploaded Successfully!');
	redirect('User/view_movement');
}
else
{
	$this->session->set_flashdata('msg','Error');
	redirect('User/view_movement');
} 



 /* if(isset($_FILES['image_file'])){
$file_name = $_FILES['image_file']['name'];
$file_tmp =$_FILES['image_file']['tmp_name'];
move_uploaded_file($file_tmp,"assets/images/upload_docket/".$file_name);
echo "<h3>Image Upload Success</h3>";
 '<img src="https://pallet.adtestbed.com/assets/images/upload_docket/'.$file_name.'" style="width:100%">';
shell_exec('"assets/images/upload_docket/'.$file_name.'" out');

echo "<br><h3>OCR after reading</h3><br><pre>";

$myfile = fopen("out.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("out.txt"));
fclose($myfile);
echo "</pre>";
}


}
echo $url = 'https://www.easfone.in/saf/sandeep/assets/images/upload_docket/'.$file_name;
$data = json_decode(file_get_contents('http://api.rest7.com/v1/ocr.php?url=' . $url . '&format=txt'));

if (@$data->success !== 1)
{
    die('Failed');
}
$txt = file_get_contents($data->file);
file_put_contents('text.txt', $txt); */


}

public function manual_upload_docket()
{
	    $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{	
		$this->load->view('upload/manual_upload_docket');
		}
	
}

public function show_docket()
{
	    $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{	
		$this->load->view('upload/show_docket');
		}
}

public function import_image()
{
	    $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{	
		$this->load->view('upload/indexs');
		}
}




public function pdf2text()
{
	
	echo $this->User_Model->setFilename($_FILES['file']['tmp_name']); 
	echo $this->User_Model->decodePDF();
	echo $this->User_Model->output(); 
	//if file types is not pdf
}

public function insert_profile()
{
	 $date_time=date("Y-m-d H:i:s");
		$loginid=$this->session->userdata('id');
	    $profile_name=$this->input->post('profile_name');
	    $transit_days=$this->input->post('transit_days');
	    $allow_exchange=$this->input->post('allow_exchange');
	    $credit_limit=$this->input->post('credit_limit');
	    $allow_tn=$this->input->post('allow_tn');
	    $tn_delay_type=$this->input->post('tn_delay_type');
	    $tn_delay_days=$this->input->post('tn_delay_days');
	    $tn_delay_rule=$this->input->post('tn_delay_rule');
	    $allow_tf=$this->input->post('allow_tf');
	    $tf_delay_type=$this->input->post('tf_delay_type');
	    $tf_delay_days=$this->input->post('tf_delay_days');
	    $tf_delay_rule=$this->input->post('tf_delay_rule');
	    $redeem_exchange=$this->input->post('redeem_exchange');
	    $redeem_same=$this->input->post('redeem_same');
	    $complete=$this->input->post('complete');
	    $override_export_status=$this->input->post('override_export_status');
	    $export_ons=$this->input->post('export_ons');
	    $export_offs=$this->input->post('export_offs');
	    $docket_format=$this->input->post('docket_format');
	    $con_note_required=$this->input->post('con_note_required');
	    $con_note_characters=$this->input->post('con_note_characters');
	    $con_note_numeric=$this->input->post('con_note_numeric');
	    $con_note_description=$this->input->post('con_note_description');
	    $reference_required=$this->input->post('reference_required');
	    $reference_characters=$this->input->post('reference_characters');
	    $reference_numeric=$this->input->post('reference_numeric');
	    $reference_description=$this->input->post('reference_description');
	    $reminder=$this->input->post('reminder');
	    $note=$this->input->post('note');
		   $result=$this->User_Model->get_max_profileid();
	     foreach($result as $row)
	     {
	     $metaid=$row->metaid;
	     }
	     $metaid=++$metaid;
	    
	    $insert_data =array('metaid'=>$metaid,
		                    'profile_name' =>$profile_name,
	                       'transit_days'=>$transit_days,
	                       'allow_exchange'=>$allow_exchange,
	                       'credit_limit'=>$credit_limit,
	                       'allow_tn'=>$allow_tn,
	                       'tn_delay_type'=>$tn_delay_type,
	                       'tn_delay_days'=>$tn_delay_days,
	                       'tn_delay_rule'=>$tn_delay_rule,
	                       'allow_tf'=>$allow_tf,
	                       'tf_delay_type'=>$tf_delay_type,
	                       'tf_delay_days'=>$tf_delay_days,
	                       'tf_delay_rule'=>$tf_delay_rule,
	                       'redeem_exchange'=>$redeem_exchange,
	                       'redeem_same'=>$redeem_same,
	                       'complete'=>$complete,
	                       'override_export_status'=>$override_export_status,
	                       'export_ons'=>$export_ons,
	                       'export_offs'=>$export_offs,
	                       'docket_format'=>$docket_format,
	                       'con_note_required'=>$con_note_required,
	                       'con_note_characters'=>$con_note_characters,
	                       'con_note_numeric'=>$con_note_numeric,
	                       'con_note_description'=>$con_note_description,
	                       'reference_required'=>$reference_required,
	                       'reference_characters'=>$reference_characters,
	                       'reference_numeric'=>$reference_numeric,
	                       'reference_description'=>$reference_description,
	                       'reminder'=>$reminder,
	                       'note'=>$note,
	                       'login_id'=>$loginid,
	                       'date_time'=>$date_time);
	   $res= $this->User_Model->insert_profile($insert_data);

	    if($res){
	        $this->session->set_flashdata('message','Profile Added Successfully!');
			redirect('User/add_profile');
	    }else{
	        $this->session->set_flashdata('error','Not Added!');
			redirect('User/add_profile');
	    }	
	
}


public function insert_issuedesirefee()
{
	  for($i = 0; $i < count($_POST['company']); $i++)
     {
     $company  =   $_POST['company'][$i];
     $companys  =   $_POST['companys'][$i];
     $project  =   $_POST['project'][$i];
     $duration =  $_POST['duration'][$i];
     $key_learning = $_POST['key_learning'][$i];
     }
    if($_POST['company'])
    {
     echo $i."/".$company."/".$project."/".$duration."/".$key_learning;
    }
}

public function site_unit_price()
{
	  for($i = 0; $i < count($_POST['company']); $i++)
     {
     $compan[]  =   $_POST['company'][$i];
    // $companys  =   $_POST['companys'][$i];
     $projec[] =   $_POST['project'][$i];
    // $duration =  $_POST['duration'][$i];
    // $key_learning = $_POST['key_learning'][$i];
     }

    if($_POST['company'])
    {
	
          
print_r(array_merge($compan,$projec));
    // echo $i."/".$company."/".$project;
    }
}



public function movement_one( $rowno=0 )
{
	 $rowperpage = 10;
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }

    $allcount = $this->User_Model->get_counts();
    $users_record = $this->User_Model->get_authorss($rowno,$rowperpage);
    $configs['base_url'] = base_url()."User/view_carrier";
    $configs['use_page_numbers'] = TRUE;
    $configs['total_rows'] = $allcount;
    $configs['per_page'] = $rowperpage;
    $this->pagination->initialize($configs);
    $data['links'] = $this->pagination->create_links();
    $data['authors'] = $users_record;
    $data['row'] = $rowno;
    echo json_encode($data);
}


public function get_stocktake_json()
{
	    $this->db->order_by('id', 'DESC');
		$query = $this->db->get('stocktakes_view');
		$datas=$query->result_array();
		echo json_encode($datas); 
}
public function get_member_json()
{ 
	    $this->db->order_by('metaId', 'DESC');
		$this->db->limit(10);
		$query = $this->db->get('member_management_view');
		
		$datas=$query->result_array();
		echo json_encode($datas); 
}


public function get_tp_accounts_json()
{
	    $this->db->order_by('tpa_id', 'DESC');
		$query = $this->db->get('trading_partner_accounts_view');
		$datas=$query->result_array();
		echo json_encode($datas); 
}


public function insert_movement()
{
		 $result=$this->User_Model->get_max_movementsid();
	foreach($result as $row)
	{
	$metaid=$row->metaid;
	}
	$metaid=++$metaid;
	$date_time=date("Y-m-d H:i:s");
	$loginid=$this->session->userdata('id');
	$mov_date=$this->input->post('Date');
	$equipment=$this->input->post('equipment');
	$sending_tp=$this->input->post('Sending_Tp');
	$con_note='';
	$sender_name='';
	$receiving_tp=$this->input->post('Receiving_Tp');
	$receiver_name='';
	$reference=$this->input->post('Reference');
	$sent='';
	$receive='';
	$carrier='';
	$quantity=$this->input->post('Quantity');
	$trace_quantity='';
	$untrace_quantity='';
	$redeem_xn='';
	$unredeem_on='';
	$redeem_xf='';
	$unredeem_off='';
	$transfer=$this->input->post('Transfer');
	$transaction=$this->input->post('Transaction');
	$effective_date=$this->input->post('Effective_date');
	$docket_number=$this->input->post('Docket_Number');
	$Carrier=$this->input->post('Carrier');
	$rai_corr=$this->input->post('Rai_Corr');
	$rai_corr_date='';
	$type=$this->input->post('Type');
	$orig_movemevt=$this->input->post('Orig_Movement');
	$orig_bill='';
	$export=$this->input->post('Export');
	$batch=$this->input->post('Batch');
	$bill=$this->input->post('Bill');
	$supplier_reference='';
	$days='';
	$equipment_days='';
	$dockets='';
	$rent='';
	$fee_code='';
	$fee_unit_price='';
	$fees='';
	$amount='';
	$notes=$this->input->post('Notes');
	$data = array('metaid'=>$metaid,
	'movements_date'=>$mov_date,
	'equipment'=>$equipment,
	'sending_tp'=>$sending_tp,
	'sender_name'=>$sender_name,
	'receiving_tp'=>$receiving_tp,
	'receiver_name'=>$receiver_name,
	'carrier'=>$Carrier,
	'reference'=>$reference,
	'sent'=>$sent,
	'receive'=>$receive,
	'quantity'=>$quantity,
	'trace_quantity'=>$trace_quantity,
	'untrace_quantity'=>$untrace_quantity,
	'redeem_xn'=>$redeem_xn,
	'unredeem_on'=>$unredeem_on,
	'redeem_xf'=>$redeem_xf,
	'unredeem_off'=>$unredeem_off,
	'transfer' =>$transfer,
	'transaction'=>$transaction,
	'effective_date'=>$effective_date,
	'con_note'=>$con_note,
	'docket_number'=>$docket_number,
	'rai_corr'=>$rai_corr,
	'rai_corr_date'=>$rai_corr_date,
	'type'=>$type,
	'orig_movemevt'=>$orig_movemevt,
	'orig_bill'=>$orig_bill,
	'export'=>$export,
	'batch'=>$batch,
	'bill'=>$bill,
	'supplier_reference'=>$supplier_reference,
	'days'=>$days,
	'equipment_days'=>$equipment_days,
	'rent'=>$rent,
	'fee_code'=>$fee_code,
	'fee_unit_price'=>$fee_unit_price,
	'fees'=>$fees,
	'amount'=>$amount,
	'dockets'=>$dockets,
	'Notes'=>$notes,
    'login_id'=>$loginid);
	$res= $this->User_Model->insert_movements($data);
		
	
}



public function insert_stocktakes()
{
	error_reporting(0);
		$date_time=date("Y-m-d H:i:s");
		$loginid=$this->session->userdata('id');
	    $stockdate=$this->input->post('Date');
	    @$trading_partner=$this->input->post('trading_partner');
	   // $type=$this->input->post('type');
	    $equipment=$this->input->post('equipment');
	    $book_stock=$this->input->post('book_stock');
	    $physical_stock=$this->input->post('physical_stock');
	    $shrinkage=$this->input->post('shrinkage');
	    $reported_variance=$this->input->post('reported_variance');
	    $receiving_tp=$this->input->post('receiving_tp');
	    $note=$this->input->post('notes');
	    $result=$this->User_Model->get_max_tp_stocktake();
	     foreach($result as $row)
	     {
	     $metaid=$row->metaid;
	     }
	     $metaid=++$metaid;
	    $insert_data =array('metaid'=>$metaid,
	    	               'date' => $stockdate,
	                       'trading_partner'=>$trading_partner,
	                       'tp_type'=>$type,
	                       'equipment'=>$equipment,
	                       'book_stock'=>$book_stock,
	                       'physical_stock'=>$physical_stock,
	                       'shrinkage'=>$shrinkage,
	                       'reported_variance'=>$reported_variance,
	                       'receiving_tp'=>$receiving_tp,
	                       'notes'=>$note,
	                       'login_id'=>$loginid,
	                       'date_time'=>$date_time);
	   $res= $this->User_Model->insert_stocktake($insert_data);
echo "1";
}


public function insert_tp_accounts()
{
	
}



public function update_stoketake()
{
	$date_time=date("Y-m-d H:i:s");
		$loginid=$this->session->userdata('id');
	    $stockdate=$this->input->post('Date');
	    $trading_partner=$this->input->post('trading_partner');
	   // $type=$this->input->post('type');
	    $equipment=$this->input->post('equipment');
	    $book_stock=$this->input->post('book_stock');
	    $physical_stock=$this->input->post('physical_stock');
	    $shrinkage=$this->input->post('shrinkage');
	    $reported_variance=$this->input->post('reported_variance');
	    $receiving_tp=$this->input->post('receiving_tp');
	    $note=$this->input->post('notes');
	$metaid=$this->input->post('id');
	    $insert_data =array('metaid'=>$metaid,
	    	               'date' => $stockdate,
	                       'trading_partner'=>$trading_partner,
	                       'tp_type'=>$type,
	                       'equipment'=>$equipment,
	                       'book_stock'=>$book_stock,
	                       'physical_stock'=>$physical_stock,
	                       'shrinkage'=>$shrinkage,
	                       'reported_variance'=>$reported_variance,
	                       'receiving_tp'=>$receiving_tp,
	                       'notes'=>$note,
	                       'login_id'=>$loginid,
	                       'date_time'=>$date_time);
	   $res= $this->User_Model->insert_stocktake($insert_data);
	
}

public function movement_two()
{
	  $login_id=$this->session->userdata('id');
		if($login_id==null){redirect('User/');}
		else
		{	
		$this->load->view('headerfile/edit_movement');
		}
	
}


public function test()
{
	echo $this->User_Model->xyz();
}


public function update_senderss()
{
    $metaid=$this->input->post('id');
	$date_time=date("Y-m-d H:i:s");
	$loginid=$this->session->userdata('id');
	$sender_receicer=$this->input->post('sender_receiver_name');
	$trading_partner_id=$this->input->post('trading_partner_name');
	$phone_number=$this->input->post('phone_number');
	$mobile_number=$this->input->post('mobile_number');
	$email_id=$this->input->post('email');
	$active=$this->input->post('active');
	$default=$this->input->post('defaults');
    $data = array( 'metaid'=>$metaid,
    	           'sender_receiver_name' =>$sender_receicer,
                   'trading_partner_name' =>$trading_partner_id,
                    'phone_number'=>$phone_number,
                   'mobile_number'=>$mobile_number,
                   'email'=>$email_id,
                   'active'=>$active,
                   'defaults'=>$default,
                   'login_id'=>$loginid,
                   'date_time'=>$date_time);
   $res= $this->User_Model->insert_sender_receiver($data);	
}






}




