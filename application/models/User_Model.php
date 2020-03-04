<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class User_Model extends CI_Model
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
	public function Login($username,$password)
	{
	$this->db->select('*');
	$this->db->from('login');
	$this->db->where('username',$username);
	$this->db->where('password',$password);
	$this->db->where('show_hide',1);
	$query=$this->db->get();
    return $query->result();
	}
//	public function get_menu()
//	{ 
	//$query=$this->db->query("SELECT * FROM left_menu where menuParentId='0'");
//	return $query->result();
//	}
	public function get_menu($login_id){
	    	$query=$this->db->query("SELECT * FROM left_menu WHERE menuId in(SELECT menuParentId from left_menu where menuId 
	    	in(select DISTINCT * from ((select menuId from user_right,role,assign_role_view where login_menuId=(select role.roleId 
	    	from assign_role_view,role where assign_role_view.roleId=role.roleId and assign_role_view.empId='$login_id') and login_type='1' and 
	    	user_right.date_time=(select max(date_time) from user_right where login_menuId=(select role.roleId from assign_role_view,role
	    	where assign_role_view.roleId=role.roleId and assign_role_view.empId='$login_id') and login_type='1')) 
	    	UNION (SELECT menuId FROM assign_role_view,`user_right`,role WHERE login_menuId='$login_id' and login_type='1'
	    	and assign_role_view.empId=user_right.login_menuId and assign_role_view.roleId=role.roleId 
	    	and user_right.date_time=(select max(date_time) from user_right where login_menuId='$login_id' and login_type='1')) )t))ORDER BY menuId ASC");
	    	
        	return $query->result();
	}
	
	//public function get_sub_menu($menuId)
	//{
	//$query=$this->db->query("SELECT * FROM left_menu where menuParentId!='0' and menuParentId='$menuId'");
	//return $query->result();
	//}
	
	public function sub_menu($login_id,$menu_id)
	{
	$query=$this->db->query("SELECT * FROM left_menu WHERE menuParentId ='$menu_id' and
	menuId in(select DISTINCT * from ((select menuId from user_right,role,assign_role_view where 
	login_menuId=(select role.roleId from assign_role_view,role where assign_role_view.roleId=role.roleId and assign_role_view.empId='$login_id')
	and login_type='1' and user_right.date_time=(select max(date_time) from user_right where 
	login_menuId=(select role.roleId from assign_role_view,role where assign_role_view.roleId=role.roleId and assign_role_view.empId='$login_id') 
	and login_type='1')) UNION (SELECT menuId FROM assign_role_view,user_right,role WHERE login_menuId='$login_id' and login_type='1' and 
	assign_role_view.empId=user_right.login_menuId and assign_role_view.roleId=role.roleId and user_right.date_time=(select max(date_time) 
    from user_right where login_menuId='$login_id' and login_type='1')) )t)");
	return $query->result();
	}
	
	public function get_max_franchiseId()
	{
		$query=$this->db->query("SELECT max(franchiseId) as franchiseId FROM franchise_view");
		return $query->result();
	}
	public function get_login(){
	    $res=$this->db->get('login');
	    return $res->result();
	}
	
	public function insert_franchise($data)
	{
	$result=$this->db->insert('franchise', $data);
	return $result;
	}
	
	public function get_franchise()
	{
	$this->db->select('*');
	$this->db->from('franchise_view	');
	$query=$this->db->get();
    return $query->result();
	}
	
	public function get_state()
	{
	$this->db->select('*');
	$this->db->from('states');
	$query=$this->db->get();
    return $query->result();
	}
	
	public function get_state_detail($id)
	{
	$this->db->select('*');
	$this->db->from('states');
	$this->db->where('id',$id);
	$query=$this->db->get();
    return $query->result();
	}
	
	public function get_max_ipId()
	{
	$query=$this->db->query("SELECT max(ipId) as ipId FROM ip_view");
	return $query->result();
	}
	
	public function insert_ip($data)
	{
	$result=$this->db->insert('ip', $data);
	return $result;
	}
	
	public function get_ip()
	{
	$this->db->select('*');
	$this->db->from('ip_view');
	$query=$this->db->get();
    return $query->result();
	}
	
	public function get_franchise_detail($id)
	{
	$this->db->select('*');
	$this->db->from('franchise_view');
	$this->db->where('state',$id);
	$query=$this->db->get();
    return $query->result();
	}
	
	public function check_sponsorId($id)
	{
	$this->db->select('sponsorId,first_name,memberId,member_code');
	$this->db->from('member_management_view');
	$this->db->where('member_code',$id);
	$query=$this->db->get();
    return $query->result();
	}
	
	public function get_user_role_id(){
	    $result=$this->db->query("SELECT MAX(roleId) as value from role");
	    return $result->result();
	    
	}


    public function get_count() {
        return $this->db->count_all('carrier_view');
    }
public function get_counts() {
        return $this->db->count_all('movements_view');
    }
    public function get_authors($rowno,$rowperpage) {
    	
        $this->db->limit($rowperpage, $rowno);
        $query = $this->db->get('carrier_view');
        return $query->result();
    }
     public function get_authorss($rowno,$rowperpage) {
    	
        $this->db->limit($rowperpage, $rowno);
        $this->db->order_by('movements_id', 'DESC');
        $query = $this->db->get('movements_view');
        return $query->result();
    }
    public function get_bill() {
        return $this->db->count_all('bills_view');
    }
    public function get_bills($rowno,$rowperpage) {
    	
        $this->db->limit($rowperpage, $rowno);
        $this->db->order_by('bills_id', 'DESC');
        $query = $this->db->get('bills_view');
        return $query->result();
    }

	public function insert_role($data){
	    $res=$this->db->insert('role',$data);
	    return $res;
	}
	public function check_rdId($id)
	{
	$this->db->select('rdId,first_name,memberId,member_code');
	$this->db->from('member_management_view');
	$this->db->where('member_code',$id);
	$query=$this->db->get();
    return $query->result();
	}
	public function get_max_memberId()
	{
	$query=$this->db->query("SELECT max(memberId) as memberId FROM member_management_view");
	return $query->result();
	}
	public function get_max_tp_accountsId()
	{
	$query=$this->db->query("SELECT max(metaid) as metaid FROM trading_partner_accounts_view");
	return $query->result();
	}
	public function get_max_tp_trading_partnerId()
	{
	$query=$this->db->query("SELECT max(metaid) as metaid FROM member_management_view");
	return $query->result();
	}
	public function insert_member($data)
	{
	$result=$this->db->insert('member_management',$data);
	return $result;
	}
	
	public function insert_bank_detail($data2)
	{
	$result=$this->db->insert('member_bank_detail',$data2);
	return $result;
	}
	
	public function insert_login($login)
	{
	$result=$this->db->insert('login',$login);
	return $result;
	}
	
	public function get_member()
	{
	$this->db->select('*');
	$this->db->from('member_management_view');
	$this->db->group_by('tp_name');
	$query=$this->db->get();
    return $query->result();
	}
	public function get_memberssss($id)
	{
	$this->db->select('*');
	$this->db->from('member_management_view');
	$this->db->where('memberId',$id);
	$query=$this->db->get();
    return $query->result();
	}
	public function get_member_site()
	{
	$this->db->select('*');
	$this->db->from('member_management_view');
	$this->db->where('tp_type',3);
	$this->db->group_by('tp_name');
	$query=$this->db->get();
    return $query->result();
	}
		public function get_member_rd_party()
	{
	$this->db->select('*');
	$this->db->from('member_management_view');
	$this->db->where('tp_type',1);
	$this->db->group_by('tp_name');
	$query=$this->db->get();
    return $query->result();
	}

	
	public function get_accounts_details($login_id)
	{
	$this->db->select('*');
	$this->db->from('trading_partner_accounts_view');
	if($login_id!=1)
	{
	$this->db->where('login_id',$login_id);
    }
	$query=$this->db->get();
    return $query->result();
	}




	public function get_member_apporove()
	{
	$this->db->select('*');
	$this->db->from('member_management_view');
	$query=$this->db->get();
    return $query->result();
	}
	
	public function get_sponsor($id)
	{
	$this->db->select('member_code,first_name');
	$this->db->from('member_management_view');
	$this->db->where('sponsorId',$id);
	$query=$this->db->get();
    return $query->result();
	}
	
	public function get_rd($id)
	{
	$this->db->select('member_code,first_name');
	$this->db->from('member_management_view');
	$this->db->where('rdId',$id);
	$query=$this->db->get();
    return $query->result();
	}
	
	public function get_franchise_detail2($id)
	{
	$this->db->select('*');
	$this->db->from('franchise_view');
	$this->db->where('franchiseId',$id);
	$query=$this->db->get();
    return $query->result();
	}
	//--------------------------shafiq-----------------
	public function sum_debit_credit($establishment)
	{
	$query=$this->db->query("select sum(debit_amount) as debit_amount, sum(credit_amount) as credit_amount from wallet WHERE Login_id in(select login_id from settlement where login_id in(SELECT login_id FROM wallet WHERE login_id='$establishment') and settelment_status='success')");	
	return $query->row_array();
	} 
	public function sum_of_sms_charge_amount($establishment_id)
	{
		$query=$this->db->query("select sum(sms_transaction_amount) as sms_charge from sms_transaction where sms_transaction_login_id='$establishment_id'");
		return $query->row_array();
	}
	
		public function sum_of_email_charge_amount($establishment_id)
	{
		$query=$this->db->query("select sum(email_transaction_amount) as email_charge from email_transaction where email_transaction_login_id='$establishment_id'");
		return $query->row_array();
	}
	public function credit_fetch_details($list)
	{
		$sql = "select * from login where Login_id in($cr_list)"; 
		$query=$this->db->query($sql);
		return $query->result();
	}
	public function debate_fetch_details()
	{
		 $sql = "select * from login"; 
		$query= $this->db->query($sql);
		return $query->result();
		 
	}
	public function user_list()
	{
	    $sql = "select * from login"; 
		$query= $this->db->query($sql);
		return $query->result();	
	}
	public function get_member_detail($id)
	{
	$this->db->select('*');
	$this->db->from('member_management_view');
	$this->db->where('memberId',$id);
	$query=$this->db->get();
    return $query->result();
	}
	
	public function get_total_member($login_id)
	{
	//$query=$this->db->query("SELECT count(memberId) as total_member FROM member_management_view where login_id='$login_id'");
	$this->db->select('count(memberId) as total_member');
	$this->db->from('member_management_view');
	if($login_id!=1)
	{
	$this->db->where('login_id',$login_id);
    }
	$query=$this->db->get();
	return $query->row_array();
	}
	
	public function get_latest_member($login_id)
	{
	$this->db->select('*');
	$this->db->from('member_management_view');
	if($login_id!=1)
	{
	$this->db->where('login_id',$login_id);
    }
	$query=$this->db->get();
    return $query->result();
	}
	public function UserDonotHavingRole($id)
	{
	$query=$this->db->query("SELECT * from login where login_id not in(SELECT empId FROM assign_role where roleId='$id')");
	return $query->result();
	//SELECT member_code,first_name FROM member_management_view where member_code='admin'
	}
	public function get_member_details($username)
	{
	    $this->db->select('member_code,first_name');
	    $this->db->from('member_management_view');
	    $this->db->where('member_code',$username);
	    $query=$this->db->get();
    	return $query->result();
	}
	
	public function get_user_role()
	{
		$this->db->select('*');
		$this->db->from('role_view');
        $query=$this->db->get();
		return $query->result();
	}
	
	public function UserHavingRole($id)
	{
	$query=$this->db->query("SELECT * FROM login where login_id in(SELECT empId FROM assign_role where roleId='$id')");
	return $query->result();
	}
	
	public function get_member_detail2($id)
	{
	$this->db->select('*');
	$this->db->from('member_management_view');
	$this->db->where('memberId',$id);
	$query=$this->db->get();
    return $query->row_array();
	}
	
	public function insert_assign_role($data)
	{
	$result=$this->db->insert('assign_role',$data);
	return $result;
	}
	
	public function UserDonotHavingRight($id)
	{
	// $query=$this->db->query("select menuId,menuName,menuLink from left_menu where menuParentId!='0' and menuId not in(select DISTINCT * from 
// ((select login_menuId from user_right,role,assign_role where login_menuId=(select role.roleId from assign_role,role where assign_role.roleId=role.roleId and assign_role.empId='$id') and login_type=0 and assign_role.empId=user_right.login_menuId)
// UNION 
// (SELECT menuId FROM assign_role,`user_right`,role WHERE login_menuId='$id' and login_type=1 and assign_role.empId=user_right.login_menuId and assign_role.roleId=role.roleId) 
 // )t)");
	// return $query->result();
	$query=$this->db->query("select menuId,menuName,menuLink from left_menu where menuParentId!='0' and menuId not in(select DISTINCT * from 
	((select login_menuId from user_right,role,assign_role where login_menuId=(select role.roleId from assign_role,role where assign_role.roleId=role.roleId and assign_role.empId='$id') and login_type='0' and assign_role.empId=user_right.login_menuId and user_right.date_time=(select max(date_time) from user_right where login_menuId='$id' and login_type='0'))
	UNION 
	(SELECT menuId FROM assign_role,user_right,role WHERE login_menuId='1' and login_type='1' and assign_role.empId=user_right.login_menuId and assign_role.roleId=role.roleId and user_right.date_time=(select max(date_time) from user_right where login_menuId='$id' and login_type='1')) 
	)t)");
	return $query->result();
	}
	
	public function UserHavingRight($id)
	{
	// $query=$this->db->query("select menuId,menuName,menuLink from left_menu where menuParentId!='0' and menuId in(select DISTINCT * from 
// ((select login_menuId from user_right,role,assign_role where login_menuId=(select role.roleId from assign_role,role where assign_role.roleId=role.roleId and assign_role.empId='$id') and login_type=0 and assign_role.empId=user_right.login_menuId)
// UNION 
// (SELECT menuId FROM assign_role,`user_right`,role WHERE login_menuId='$id' and login_type=1 and assign_role.empId=user_right.login_menuId and assign_role.roleId=role.roleId) 
 // )t)");
	// return $query->result();
	
	$query=$this->db->query("select menuId,menuName,menuLink from left_menu where menuParentId!='0' and menuId in(select DISTINCT * from ((select login_menuId from user_right,role,assign_role where login_menuId=(select role.roleId from assign_role,role where assign_role.roleId=role.roleId and assign_role.empId='$id') and login_type='0' and assign_role.empId=user_right.login_menuId and user_right.date_time=(select max(date_time) from user_right where login_menuId='$id' and login_type='0'))
	UNION 
	(SELECT menuId FROM assign_role,user_right,role WHERE login_menuId='$id' and login_type='1' and assign_role.empId=user_right.login_menuId and assign_role.roleId=role.roleId and user_right.date_time=(select max(date_time) from user_right where login_menuId='$id' and login_type='1')) 
	)t)");
	return $query->result();
	
	}
	
	public function UserDonotHavingRight2($id)
	{
	// $query=$this->db->query("select menuId,menuName,menuLink from left_menu where menuParentId!='0' and menuId not in(select DISTINCT * from 
// ((select login_menuId from user_right,role,assign_role where login_menuId=(select role.roleId from assign_role,role where assign_role.roleId=role.roleId and assign_role.roleId='$id') and login_type=1 and assign_role.empId=user_right.login_menuId)
// UNION 
// (SELECT menuId FROM assign_role,`user_right`,role WHERE login_menuId='$id' and login_type=0 and assign_role.empId=user_right.login_menuId and assign_role.roleId=role.roleId) 
 // )t)");
	// return $query->result();
	$query=$this->db->query("select menuId,menuName,menuLink from left_menu where menuParentId!='0' and menuId not in(select DISTINCT * from  ((select login_menuId from user_right,role,assign_role where login_menuId=(select role.roleId from assign_role,role where assign_role.roleId=role.roleId and assign_role.roleId='$id') and login_type='1' and assign_role.empId=user_right.login_menuId and user_right.date_time=(select max(date_time) from user_right where login_menuId='$id' and login_type='1'))
	UNION 
	(SELECT menuId FROM assign_role,user_right,role WHERE login_menuId='$id' and login_type='0' and assign_role.roleId=user_right.login_menuId and assign_role.roleId=role.roleId and user_right.date_time=(select max(date_time) from user_right where login_menuId='$id' and login_type='0')) 
	)t)");
	return $query->result();
	}
	
	public function UserHavingRight2($id)
	{
	// $query=$this->db->query("select menuId,menuName,menuLink from left_menu where menuParentId!='0' and menuId in(select DISTINCT * from 
// ((select login_menuId from user_right,role,assign_role where login_menuId=(select role.roleId from assign_role,role where assign_role.roleId=role.roleId and assign_role.roleId='$id') and login_type=1 and assign_role.empId=user_right.login_menuId)
// UNION 
// (SELECT menuId FROM assign_role,`user_right`,role WHERE login_menuId='$id' and login_type=0 and assign_role.empId=user_right.login_menuId and assign_role.roleId=role.roleId) 
 // )t)");
	// return $query->result();
	$query=$this->db->query("select menuId,menuName,menuLink from left_menu where menuParentId!='0' and menuId in(select DISTINCT * from 
	((select login_menuId from user_right,role,assign_role where login_menuId=(select role.roleId from assign_role,role where assign_role.roleId=role.roleId and assign_role.roleId='$id') and login_type='1' and assign_role.empId=user_right.login_menuId and user_right.date_time=(select max(date_time) from user_right where login_menuId='$id' and login_type='1'))
	UNION 
	(SELECT menuId FROM assign_role,user_right,role WHERE login_menuId='$id' and login_type='0' and assign_role.roleId=user_right.login_menuId and assign_role.roleId=role.roleId and user_right.date_time=(select max(date_time) from user_right where login_menuId='$id' and login_type='0')) 
	)t)");
	return $query->result();
	}
	
	public function insert_user_right1($data)
	{
	$result=$this->db->insert('user_right',$data);
	return $result;
	}
	function insert_trading_partner($data)
	{
	$result=$this->db->insert('trading_partner',$data);
	return $result;
	}


	public function insert_tpaccounts($data)
	{
	$result=$this->db->insert('trading_partner_accounts',$data);
	return $result;
	}
	
	
	
	public function fetch_trading_partner()
	{
		$tp_type=1;
		$query=$this->db->query("SELECT DISTINCT  * FROM `member_management_view` WHERE tp_type='1' GROUP by tp_name ORDER BY `tp_name`");
	    return $query->result();
	}
		public function fetch_trading_partner_location()
	    {
		$tp_type=3;
		$query=$this->db->query("SELECT * FROM `member_management_view` WHERE tp_type='$tp_type'");
	    return $query->result();
	    }
		public function fetch_trading_partner_stocktake()
	    {
		$query=$this->db->query("SELECT * FROM `member_management_view`");
	    return $query->result();
	    } 
	   public function fetch_trading_partner_batch()
	   {
	   $query=$this->db->query("SELECT * FROM `member_management_view`");
	   return $query->result();

	    }
	
		public function fetch_tp_send_recieve()
	{
		
		$tp_type='3rd Party';
		$query=$this->db->query("SELECT * FROM `member_management_view` GROUP by tp_name ORDER BY `tp_name`");
	return $query->result();

	}
	public function fetch_trading_partner_subbbb()
	{ $tp_type='3rd Party';
		$query=$this->db->query("SELECT * FROM `member_management_view`");
	    return $query->result();

	}
	public function insert_stocktake($data)
	{
		$result=$this->db->insert('stocktakes',$data);
		return $result;

	}
	
	public function get_max_tp_stocktake()
	{
	$query=$this->db->query("SELECT max(metaid) as metaid FROM stocktakes_view");
	return $query->result();
	}
	public function get_max_tp_bill()
	{
	$query=$this->db->query("SELECT max(metaid) as metaid FROM bills_view");
	return $query->result();
	}
	
	
	
	
	public function get_max_tp_movements()
	{
	$query=$this->db->query("SELECT max(metaid) as metaid FROM movements_view");
	return $query->result();
	}
public function get_max_tp_equipment()
	{
	$query=$this->db->query("SELECT max(metaid) as metaid FROM equipment_view");
	return $query->result();
	}
	public function fetch_stocktakes()
	{
	$query=$this->db->query("SELECT * FROM stocktakes_view");
	return $query->result();
	}
	public function get_latest_login($login_id)
	{
	$this->db->select('*');
	$this->db->from('login');
	if($login_id!=1)
	{
	$this->db->where('login_id',$login_id);
    }
	$query=$this->db->get();
    return $query->result();
	}
	public function get_created_name($memberId)
	{
		$sql="select username from login where login_id=$memberId";
		$query=$this->db->query($sql);
         $data=$query->row_array();
		return $data['username'];
	}
	
	
	public function insert_carrier($data)
	{
    $result=$this->db->insert('carrier',$data);
    return $result;
	}
	public function get_max_carrierid()
	{
	$query=$this->db->query("SELECT max(metaid) as metaid FROM carrier_view");
	return $query->result();	
	}
	function fetch_carriers($login_id)
	{
		$this->db->select('*');
	$this->db->from(' carrier_view');
	$this->db->order_by('carrier asc'); 
	//if($login_id!=1)
	//{
	//$this->db->where('login_id',$login_id);
  //  }
	$query=$this->db->get();
    return $query->result();
	}
	public function get_equipments()
	{
	// 	$this->db->select('*');
	// $this->db->from(' equipment_view');
	
	// $query=$this->db->get();
		$query = $this->db->query("select *,(CASE 
        WHEN  active = '1' THEN 'Active'  ELSE 'Inactive' end
        ) as active from equipment_view order by equipment_id desc");
    return $query->result();
	}
	public function insert_equipment($data)
	{
		$result=$this->db->insert('equipment',$data);
		 return $result;
		

	}
	public function updates_equipment($data,$id)
	{
		
		 $this->db->where('metaid', $id);
		 $result = $this->db->update('equipment', $data);
		 return $result;
		

	}
	public function get_max_equipmentid()
	{
	$query=$this->db->query("SELECT max(metaid) as metaid FROM equipment_view");
	return $query->result();	
	}
		public function fetch_equipment()
    	{
		$query=$this->db->query("SELECT * FROM equipment_view");
	    return $query->result();
	    }
	    public function fetch_transaction()
	    {
	    $this->db->select('*');
		$this->db->from('transaction');
        $query=$this->db->get();
		return $query->result();
	    }
	    public function movement_type()
	    {
	    $this->db->select('*');
		$this->db->from('movement_type');
        $query=$this->db->get();
		return $query->result();

	    }
	public function get_max_movementsid()
	{
	$query=$this->db->query("SELECT max(metaid) as metaid FROM movements_view");
	return $query->result();	
	}

public function insert_movements($data)
{
	$result=$this->db->insert('movements',$data);
		return $result;

}



public function lmd_date($login_id)
{
$sql="SELECT date(max(movements_date)) as lmd FROM `movements_view` where login_id=$login_id";
$query=$this->db->query($sql);
$data=$query->row_array();
if($data['lmd']==null)
{
      

	$originalDate = date('Y-m-d');
return $newDate = date("d/m/Y", strtotime($originalDate));
}
else{
	
		$originalDate = $data['lmd'];
return $newDate = date("d/m/Y", strtotime($originalDate));
}
}
public function get_movement()
	{
		$this->db->select('*');
	$this->db->from('movements_view');
	//if($login_id!=1)
	//{
	//$this->db->where('login_id',$login_id);
   // }
	$query=$this->db->get();
    return $query->result();
	}
	
	public function get_movementsss()
	{
	$query=$this->db->query("SELECT * FROM movements_view");

    return $query->result();
 
	}
	public function insert_bills($data)
{
	$result=$this->db->insert('bills',$data);
   return $result;

}
public function get_max_billsid()
	{
	$query=$this->db->query("SELECT max(metaid) as metaid FROM bills_view");
	return $query->result();	
	}
	public function get_max_sender_receiverid()
	{
		$query=$this->db->query("SELECT max(metaid) as metaid FROM sender_receiver_view");
	return $query->result();
	}
public function insert_sender_receiver($data)
{
$result=$this->db->insert('sender_receiver',$data);
return $result;

}
public function fetch_sender_receiver()
{
	$this->db->select('*');
	$this->db->from('sender_receiver_view');
    $query=$this->db->get();
    return $query->result();	
}

public function get_movement_report($metaid)
{
	$query=$this->db->query("SELECT * FROM movements_view where metaid=$metaid");
	
	$data = $query->row_array();
	return $data;
	
}
public function equipment($metaid)
{
	$query=$this->db->query("SELECT * FROM equipment_view where equipment='$metaid'");
	$data = $query->row_array();
	return $data;
	
}
public function get_trading_partner($id)
{
$query=$this->db->query("SELECT * FROM member_management_view where memberId=$id");
	$data = $query->row_array();
	return $data;	
}

public function get_trading_partners($id)
{ 
$query=$this->db->query("SELECT * FROM member_management_view where tp_type='$id'");
	$data = $query->row_array();
	return $data;	
}

public function get_trading_partner_accountssss($id)
{
	$sql="SELECT * FROM member_management_view where memberId=$id";
	$query=$this->db->query($sql);
	$data = $query->row_array();
	return $data;
}

public function get_trading_partner_accounts($id)
{
	$query=$this->db->query("SELECT * FROM trading_partner_accounts_view where tpa_third_party='$id'");
	$data = $query->row_array();
	return $data;
}
public function get_trading_partner_accountsaaaa($id)
{
	$query=$this->db->query("SELECT * FROM trading_partner_accounts_view where tpa_third_party='$id'");
	$data = $query->row_array();
	return $data;
}


public function  get_equipment_id($equipment_id)
{
	$query=$this->db->query("SELECT * FROM equipment_view where metaid=$equipment_id");
	$data = $query->row_array();
	return $data;	
}
public function  get_equipment_metaid($equipment_meta_id='')
{
	$condition="where metaid=$equipment_meta_id";
	if($equipment_meta_id!='')
	{
	$query=$this->db->query("SELECT * FROM equipment_view $condition");
	}
	else 
	{
		$query=$this->db->query("SELECT * FROM equipment_view");
	}
	
	 return $query->result();
}
//---------------------------------------
//---------------------------------------
public function fetch_trading_partner_type()
{
    $this->db->select('*');
	$this->db->from('tp_type');
	$this->db->where('show_hide','0');
    $query=$this->db->get();
    return $query->result();	
}
public function get_movementreport($first_date = '', $second_date = '',$value1='',$value2='',$order_by='',$third_parties='',$tp_location='',$type='',$equipment='')
{	
 $this->db->select('*');
 $this->db->from('movements_view');
 if($first_date!='')
 {
$this->db->where('date_time >=', $first_date);
$this->db->where('date_time <=', $second_date);
 }
 if($value2!='')
 {
$z=array($value1,$value2);
$this->db->where_in('transaction',$z);
	 
 }
 if($third_parties!='')
 {
	$this->db->where('sending_tp',$third_parties); 
	$this->db->or_where('receiving_tp',$third_parties);
 }
 if($tp_location!='')
 {
 $this->db->where('sending_tp',$tp_location); 
 $this->db->or_where('receiving_tp',$tp_location); 
 }
  if($equipment='combine')
 {
	 $this->db->group_by('equipment');
 }
 else{
	$this->db->where('equipment',$equipment);  
 }
 if($type!='')
 {
list($x1,$x2,$x3,$x4) = explode('|', $type);
$xyz=array($x1,$x2,$x3,$x4);
 $this->db->where_in('type',$xyz); 
 }
 if($order_by!='')
 {
$this->db->order_by($order_by, "asc"); 
 }

 
 $query=$this->db->get();
 return $query->result();	
}

public function finencial_reportss()
{

}



public function trading_partner_report()
{
$this->db->select('*');
$this->db->from('member_management_view');
$query=$this->db->get();
 return $query->result();	
}
public function tp_accounts_details($trading_id)
{
	$query=$this->db->query("SELECT * FROM trading_partner_accounts_view where tpa_third_party=$trading_id");
	$data = $query->row_array();
	return $data;
}
public function get_equipmentreport()
{
$this->db->select('*');
$this->db->from('equipment_view');
$query=$this->db->get();
 return $query->result();	
}
public function get_location($trading_id)
{
$query=$this->db->query("SELECT location_id FROM  member_management_view where memberId=$trading_id");
	$data = $query->row_array();
	
	return $data['location_id'];	
}
	public function fetch_trading_partner_internal()
	{	
	$tp_type='Location';
	$query=$this->db->query("SELECT * FROM `member_management_view` WHERE tp_type='$tp_type'");
	return $query->result();
	}
	public function fetch_trading_partner_primary()
	{
			$query=$this->db->query("SELECT * FROM `member_management_view`");
	return $query->result();	
	}
public function trading_partner_special()
{
		$query=$this->db->query("SELECT * FROM `member_management_view`");
	return $query->result();	
}
public function fetch_trading_partner_supply()
	{
		
		$tp_type='4';
		$query=$this->db->query("SELECT * FROM `supplier_type`");
	   return $query->result();

	}
	public function fetch_trading_partner_sender()
	{
	   $query=$this->db->query("SELECT *  FROM `member_management_view` where tp_type =1 or tp_type=3 or tp_type=4 GROUP by `tp_name`");
	   return $query->result();
	}
	public function fetch_trading_partner_senderee()
	{
	   $query=$this->db->query("SELECT tp_name  FROM `member_management_view` where tp_type =1 or tp_type=3 or tp_type=4 GROUP by `tp_name` limit 111");
	   return $query->result();
	}
	public function fetch_trading_partner_sendere()
	{
	   $query=$this->db->query("SELECT tp_name  FROM `member_management_view` where tp_type =1 or tp_type=3 or tp_type=4 GROUP by `tp_name` limit 111");
	   return $query->result();
	}
	public function fetch_trading_partner_senderdd()
	{
	   $query=$this->db->query("SELECT DISTINCT  DATE(date_time) as date_time  FROM `member_management_view` GROUP by `date_time`");
	   return $query->result();

	}
	public function fetch_trading_partner_supplys($mem)
	{
		$tp_type='Supplier';
		$query=$this->db->query("SELECT * FROM `member_management_view` WHERE tp_type='$tp_type' and memberId='$mem'");
	   $data = $query->row_array();	
	   return $data;
	}
	public function get_tp_accounts($mem)
	{
	$query=$this->db->query("SELECT * FROM `trading_partner_accounts_view` WHERE  trading_partner_id='$mem'");
    $data = $query->row_array();	
	return $data;
	}
	public function insert_profile($data)
{
	$result=$this->db->insert('profile',$data);
   return $result;

}

public function get_max_profileid()
	{
	$query=$this->db->query("SELECT max(metaid) as metaid FROM profile_view");
	return $query->result();	
	}
	public function get_profile()
	{
	
		$query=$this->db->query("SELECT * FROM `profile_view`");
	   return $query->result();	
	}
	
public function get_Country()
{
	$query=$this->db->query("SELECT * FROM `countries`");
	return $query->result();	
}
public function get_states($country_id)
{
	$query=$this->db->query("SELECT * FROM `states` where country_id='$country_id'");
	return $query->result();	
}	
public function get_citys($state_id)
{
	$query=$this->db->query("SELECT * FROM `cities` where state_id='$state_id'");
	return $query->result();
}	
	
	public function get_sender_reciever()
	{
		$query=$this->db->query("SELECT * FROM `sender_receiver_view` limit 20");
	return $query->result();
	}
	
	public function get_carrier()
	{
			$query=$this->db->query("SELECT * FROM `carrier`");
	return $query->result();
	}
	public function get_carriers()
	{
			$query=$this->db->query("SELECT * FROM `carrier` where show_hide=0");
	return $query->result();
	}
	public function equipment_date()
	{
		$query=$this->db->query("SELECT * FROM `equipment_view`");
	return $query->result();	
	}
	public function get_rent_unit_price($id)
	{
    $query=$this->db->query("SELECT * FROM `equipment_view` where metaid='$id'");
	$data = $query->row_array();
	return $data['equipment_rent_unit_price'];	
	}
	public function get_opening_balance($id)
	{
    $query=$this->db->query("SELECT * FROM `bills_view` where equipment='$id'");
	$data = $query->row_array();
	if($data=='')
	{
		return 0;
	}
	return $data['closing_balance'];	
	}
	
	public function get_trading_partner_type($id)
	{
    $query=$this->db->query("SELECT tp_type FROM `member_management_view` where memberId='$id'");
	$data = $query->row_array();
	return $data['tp_type'];	
	}
	public function get_stock_book_details($tp_id,$book_stock)
	{
	$y="SELECT sum(physical_stock) as physical_stock FROM `stocktakes_view` WHERE equipment='$book_stock' and trading_partner='$tp_id'";
	$query=$this->db->query($y);
	$data = $query->row_array();
	$physical_stock=$data['physical_stock'];
	$z="SELECT sum(sent) as sent, sum(receive) as receive FROM `movements_view` WHERE equipment='$book_stock'";
	$query=$this->db->query($z);
	$dataa = $query->row_array();
	
    $sent=$dataa['sent'];
    $receive=$dataa['receive'];	
	$total=$physical_stock+$receive-$sent;
	return $total;
	}
	public function get_sender_reciever_details($id)
	{
	$query=$this->db->query("SELECT sender_receiver_name,metaid,trading_partner_name FROM sender_receiver_view");
	return $query->result();
	
	}
	public function fee_code()
	{
	$query=$this->db->query("SELECT * from feecode");
	return $query->result();	
	}
	public function update_equipment($metaid)
	{
		$query=$this->db->query("SELECT * from equipment_view where metaid='$metaid'");
		return $query->row_array();
	}
		public function update_carrier($metaid)
	{
		$query=$this->db->query("SELECT * from carrier_view where metaid='$metaid'");
		return $query->row_array();
	}
	public function delete_carrier($id)
	{
		
$query=$this->db->query("INSERT INTO carrier (`metaid`,`carrier`,`active`,`login_id`,`show_hide`,`date_time`)
SELECT `metaid`,`carrier`,`active`,`login_id`,1,`date_time`
FROM   carrier_view
WHERE  `metaid` = '$id'");
	
	if($query)
		{
			$this->session->set_flashdata('message','<div class="alert alert-success"><strong>Success !! </strong>Carrier Deleted successfully</div>');
			redirect('User/view_carrier');
		}
		else
		{
			$this->session->set_flashdata('message','|| Error ||');
			redirect('User/view_carrier');
		}

	}
	
	public function delete_tp_accounts($id)
	{
$query=$this->db->query("INSERT INTO trading_partner_accounts (`metaid`, `tpa_account_number`, `tpa_tn_delay_rule`, `tpa_allow_tf`, `tpa_tf_delay_type`, `tpa_tf_delay_days`, `tpa_tf_delay_rule`, `tpa_redeem_exchange`, `tpa_redeem_same`, `tpa_complete`, `tpa_override_export_status`, `tpa_export_on`, `tpa_export_off`, `tpa_docket_format`, `tpa_con_note_required`, `tpa_con_note_characters`, `tpa_con_note_numeric`, `tpa_con_note_decription`, `tpa_reference_required`, `tpa_reference_characters`, `tpa_reference_numeric`, `tpa_reference_description`, `tpa_reminder`, `login_id`,show_hide ,`tpa_notes`)
SELECT `metaid`, `tpa_account_number`, `tpa_tn_delay_rule`, `tpa_allow_tf`, `tpa_tf_delay_type`, `tpa_tf_delay_days`, `tpa_tf_delay_rule`, `tpa_redeem_exchange`, `tpa_redeem_same`, `tpa_complete`, `tpa_override_export_status`, `tpa_export_on`, `tpa_export_off`, `tpa_docket_format`, `tpa_con_note_required`, `tpa_con_note_characters`, `tpa_con_note_numeric`, `tpa_con_note_decription`, `tpa_reference_required`, `tpa_reference_characters`, `tpa_reference_numeric`, `tpa_reference_description`, `tpa_reminder`, `login_id`,1, `tpa_notes`
FROM   trading_partner_accounts_view
WHERE  `metaid` = '$id'");
	
	if($query)
		{
			$this->session->set_flashdata('message','<div class="alert alert-success"><strong>Success !! </strong>Accounts Deleted successfully</div>');
			redirect('User/view_accounts');
		}
		else
		{
			$this->session->set_flashdata('message','|| Error ||');
			redirect('User/view_accounts');
		}
		
	}
	public function update_accounts($metaid)
	{
		$query=$this->db->query("SELECT * from trading_partner_accounts_view where metaid='$metaid'");
		return $query->row_array();
		
	}
	
	public function update_sender_receiver($metaid)
	{
	$query=$this->db->query("SELECT * from sender_receiver_view where metaid='$metaid'");
   return $query->row_array();	
	}
	public function update_trading_partner($metaid)
	{
  $query=$this->db->query("SELECT * from member_management_view where memberId='$metaid'");
   return $query->row_array();	
	}
	
	
	public function delete_sender_receiver($id)
	{
$query=$this->db->query("INSERT INTO sender_receiver (`metaid`,`sender_receiver_name`,`trading_partner_name`,`defaults`,`phone_number`,`mobile_number`,`email`,`active`,`note`,`login_id`,`show_hide`,`date_time`)
SELECT `metaid`,`sender_receiver_name`,`trading_partner_name`,`defaults`,`phone_number`,`mobile_number`,`email`,`active`,`note`,`login_id`,1,`date_time`
FROM   sender_receiver_view
WHERE  `metaid` = '$id'");
	
	if($query)
		{
			$this->session->set_flashdata('message','<div class="alert alert-success"><strong>Success !! </strong>Sender/Receiver Deleted successfully</div>');
			redirect('User/view_sender_receiver');
		}
		else
		{
			$this->session->set_flashdata('message','|| Error ||');
			redirect('User/view_sender_receiver');
		}
		
	}
	
	
	public function update_stocktake($metaid)
	{
			$query=$this->db->query("SELECT * from stocktakes_view where metaid='$metaid'");
            return $query->row_array();	
	}
	public function delete_stocktake($id)
	{
$query=$this->db->query("INSERT INTO stocktakes (`metaid`,`date`,`trading_partner`,`equipment`,`book_stock`,`physical_stock`,`shrinkage`,`reported_variance`,`receiving_tp`,`notes`,`login_id`,`show_hide`,`date_time`)
SELECT `metaid`,`date`,`trading_partner`,`equipment`,`book_stock`,`physical_stock`,`shrinkage`,`reported_variance`,`receiving_tp`,`notes`,`login_id`,1,`date_time`
FROM   stocktakes_view
WHERE  `metaid` = '$id'");
	
	if($query)
		{
			$this->session->set_flashdata('message','<div class="alert alert-success"><strong>Success !! </strong>Stocktake Deleted successfully</div>');
			redirect('User/view_stocktakes');
		}
		else
		{
			$this->session->set_flashdata('message','|| Error ||');
			redirect('User/view_stocktakes');
		}
	}
	public function update_movement($metaid)
	{
		$query=$this->db->query("SELECT * from movements_view where metaid='$metaid'");
       return $query->row_array();
		
	}
	
	public function delete_movemented($id)
	{
$sql="INSERT INTO movements(`metaid`,`movements_date`,`equipment`,`sending_tp`,`sender_name`,`receiving_tp`,`receiver_name`,`carrier`,`reference`,`sent`,`receive`,`quantity`,`trace_quantity`,`untrace_quantity`,`redeem_xn`,`unredeem_on`,`redeem_xf`,`unredeem_off`,`transfer`,`transaction`,`effective_date`,`docket_number`,`rai_corr`,`rai_corr_date`,`type`,`orig_movemevt`,`orig_bill`,`export`,`batch`,`bill`,`supplier_reference`,`days`,`equipment_days`,`rent`,`fee_code`,`fee_unit_price`,`fees`,`amount`,`notes`,`login_id`,`date_time`,`show_hide`)
SELECT `metaid`,`movements_date`,`equipment`,`sending_tp`,`sender_name`,`receiving_tp`,`receiver_name`,`carrier`,`reference`,`sent`,`receive`,`quantity`,`trace_quantity`,`untrace_quantity`,`redeem_xn`,`unredeem_on`,`redeem_xf`,`unredeem_off`,`transfer`,`transaction`,`effective_date`,`docket_number`,`rai_corr`,`rai_corr_date`,`type`,`orig_movemevt`,`orig_bill`,`export`,`batch`,`bill`,`supplier_reference`,`days`,`equipment_days`,`rent`,`fee_code`,`fee_unit_price`,`fees`,`amount`,`notes`,`login_id`,`date_time`,'1'
FROM   movements_view
WHERE  `metaid` = '$id'";
		$query=$this->db->query($sql);
	
	if($query)
		{
			$this->session->set_flashdata('message','<div class="alert alert-success"><strong>Success !! </strong>Movement Deleted successfully</div>');
			redirect('User/view_movement');
		}
		else
		{
			$this->session->set_flashdata('message','|| Error ||');
			redirect('User/view_movement');
		}
		
	}
	function delete_trading_partner($id)
	{
/* 	$sql="INSERT INTO movements(`metaid`,`movements_date`,`equipment`,`sending_tp`,`sender_name`,`receiving_tp`,`receiver_name`,`carrier`,`reference`,`sent`,`receive`,`quantity`,`trace_quantity`,`untrace_quantity`,`redeem_xn`,`unredeem_on`,`redeem_xf`,`unredeem_off`,`transfer`,`transaction`,`effective_date`,`docket_number`,`rai_corr`,`rai_corr_date`,`type`,`orig_movemevt`,`orig_bill`,`export`,`batch`,`bill`,`supplier_reference`,`days`,`equipment_days`,`rent`,`fee_code`,`fee_unit_price`,`fees`,`amount`,`notes`,`login_id`,`date_time`,`show_hide`)
SELECT `metaid`,`movements_date`,`equipment`,`sending_tp`,`sender_name`,`receiving_tp`,`receiver_name`,`carrier`,`reference`,`sent`,`receive`,`quantity`,`trace_quantity`,`untrace_quantity`,`redeem_xn`,`unredeem_on`,`redeem_xf`,`unredeem_off`,`transfer`,`transaction`,`effective_date`,`docket_number`,`rai_corr`,`rai_corr_date`,`type`,`orig_movemevt`,`orig_bill`,`export`,`batch`,`bill`,`supplier_reference`,`days`,`equipment_days`,`rent`,`fee_code`,`fee_unit_price`,`fees`,`amount`,`notes`,`login_id`,`date_time`,'1'
FROM   movements_view
WHERE  `metaid` = '$id'";
		$query=$this->db->query($sql);
		*/
	$data=array('show_hide'=>1);
     $this->db->where('memberId',$id);
     $res=$this->db->update('member_management',$data);
	 $res;
	
	if($res)
		{
			$this->session->set_flashdata('message','<div class="alert alert-success"><strong>Success !! </strong>Deleted successfully</div>');
			redirect('User/view_member');
		}
		else
		{
			$this->session->set_flashdata('message','|| Error ||');
			redirect('User/view_member');
		}
			
	}
	
	

		
	
	

	
	
	
	
	
	
	public function get_monthly_data()
	{
	   $query=$this->db->query("SELECT max(movements_date) as movements_date from movements_view");
       return $query->row_array();
		
	}
	
	//=================================trading_partner_report=========================================
	
	public function  get_equipment_metaid_fr_tp()
    {
		$query=$this->db->query("SELECT * FROM equipment_view");
	      return $query->result();
    }
	
public function get_movementreport_fr_tp($equipment_meta_id,$first_periods='',$second_periods='')
{	
  $this->db->select('*');
 $this->db->from('movements_view');
 $this->db->where('equipment', $equipment_meta_id);
 if($first_periods!='')
 {
$this->db->where('movements_date <=', $first_periods);
$this->db->where('movements_date >=', $second_periods);
 }
 
 $query=$this->db->get();
 return $query->result();
}
public function trading_partner_names($id)
{
	$sql="select tp_name from member_management_view where memberId='$id'";
	$query=$this->db->query($sql);
	$data=$query->row_array();
	return $data['tp_name'];
	
}	
	
public function trading_partner_account_number($id)
{
$sql="select tpa_account_number from trading_partner_accounts_view where tpa_third_party='$id'";
$query=$this->db->query($sql);
$data=$query->row_array();
return $data['tpa_account_number'];	
}

public function sender_receiver_name($id)
{
$sql="select sender_receiver_name,phone_number,mobile_number from  sender_receiver_view where trading_partner_name='$id'";
$query=$this->db->query($sql);
$data=$query->row_array();
return $data;	
}
public function member_management_view($memberId)
{
$sql="select tp_name from  member_management_view where memberId='$memberId'";
$query=$this->db->query($sql);
$data=$query->row_array();
return $data['tp_name'];
}
public function get_max_supplier_view()
	{
		$query=$this->db->query("SELECT max(metaid) as metaid FROM supplier_view");
		return $query->result();
	}
public function get_supplier_type()
{
$sql="SELECT * FROM `supplier_type`";
$query=$this->db->query($sql);
return $query->result();	
}
public function insert_supplier_types($data)
{
	$result=$this->db->insert('supplier', $data);
	return $result;
}
public function insert_suppliers($data)
{
	$result=$this->db->insert('supplier_details', $data);
	return $result;	
}
public function inser_user_rights_filelds($field_id,$form_id,$member_login_id,$login_id)
{
	
	$data=array('field_id'=>$field_id,'form_id'=>$form_id,'login_id'=>$login_id,'member_login_id'=>$member_login_id);	
	$result=$this->db->insert('user_field_rights', $data);
	

	return $result;
}
public function get_supplier_viewss()
{
$sql="SELECT * FROM `supplier_view`";
$query=$this->db->query($sql);
return $query->result();	
}

public function tntf_delay_type()
{
$sql="SELECT * FROM `tntf_delay_type`";
$query=$this->db->query($sql);
return $query->result();
}
public function get_docket_format()
{
$sql="SELECT * FROM `docket_format`";
$query=$this->db->query($sql);
return $query->result();	
}
public function equipment_name($id)
{
$sql="select * from  equipment_view where metaid='$id'";
$query=$this->db->query($sql);
$data=$query->row_array();
return $data['equipment'];
}

	
public function transaction_name($id)
{
$sql="select * from  transaction where transaction_id='$id'";
$query=$this->db->query($sql);
$data=$query->row_array();
return $data['transaction'];	
}	
	
	public function select_tptype($id)
	{
	$query = $this->db->query("select tp_type from tp_type where type_id=($id)");
	$data=$query->row_array();
   echo $data['tp_type'];
	}
	public function get_bills_view()
	{
	 $sql="SELECT * FROM `bills_view`";
     $query=$this->db->query($sql);
     return $query->result();	
	}
	
	public function op_col_bal()
	{
		
	}
	public function get_movement_form()
	{
	$sql="SELECT * FROM movement_form";
    $query=$this->db->query($sql);
   $data=$query->row_array();
   echo $data['movement_form_input_box'];	
	}
	public function get_form_list()
	{
	$sql="SELECT * FROM `form_name`";
     $query=$this->db->query($sql);
     return $query->result();	
	}
	
	public function get_form_fields($form_id)
	{
	$sql="SELECT * FROM `form_fields` where form_id=$form_id";
     $query=$this->db->query($sql);
     return $query->result();	
	}
	public function lebelname($id)
	{
	$sql="SELECT form_label FROM  form_fields where field_id=$id";
    $query=$this->db->query($sql);
   $data=$query->row_array();
  return $data['form_label'];
	}
	public function get_form_fieldsddd($form_id,$member_login_id)
	{
	$sql="SELECT * FROM `user_field_rights` where field_rights_id=(select max(field_rights_id) from user_field_rights WHERE member_login_id=$member_login_id and form_id=$form_id)";
	// echo $sql;exit;
	 $query=$this->db->query($sql);
     $data=$query->row_array();
    return $data['field_id'];	
	}
	public function get_form_fieldss($field_id)
	{
	$sql="SELECT * FROM `form_fields` where field_id in($field_id)";
     $query=$this->db->query($sql);
     return $query->result();	
	}
	public function find_fields_order($id)
	{
		$sql="SELECT fields_order FROM `form_fields` WHERE field_id in($id)";
		$query=$this->db->query($sql);
        return $query->result();
	}
	public function get_login_id($id)
	{
		echo $sql="select login_id from login where memberId='$id'";
		$query=$this->db->query($sql);
$data=$query->row_array();
return $data['login_id'];	
	}
		public function find_name($metaid)
	{
	 $query=$this->db->query("SELECT tp_name from member_management_view where memberId='$metaid'");
    $data=$query->row_array();
     return $data['tp_name'];   
	}
	public function supplier_name($id)
	{
$sql="SELECT supplier_name FROM `supplier_type` where type_id=$id";
$query=$this->db->query($sql);
$data=$query->row_array();
     return $data['supplier_name']; 
	}
	
	public function find_supplier_details($id)
	{
	$sql="SELECT * FROM `supplier_details` where metaid=$id";
$query=$this->db->query($sql);
$data=$query->row_array();
return $data;
	}
	
	public function trading_partner_profile()
	{
			$sql="SELECT * FROM `profile_view`";
              $query=$this->db->query($sql);
            return $query->result();	
	}
	public function get_movement_status($type_id)
	{
		 $this->db->select('*');
		 $this->db->from('movement_type');
		 $this->db->where('type_id', $type_id);
         $query = $this->db->get();
		 $row = $query->row_array();
         return $row['type'];
	}
	
	public function get_docket_number($id)
	{
	     $this->db->select('*');
		 $this->db->from('supplier_details');
		 $this->db->where('metaid',$id);
         $query = $this->db->get();
		 $row = $query->row_array();
         return $row;	
	}
	
	public function trading_partner_creaion_details($metaid)
	{
		$sql="SELECT * FROM `movements_view` where metaid=$metaid";
        $query=$this->db->query($sql);
    
            return $query->result();	
	}
		public function trading_partner_creaion_detailsss($metaid)
	{
		$sql="SELECT * FROM `movements_view` where metaid=$metaid and rai_corr=1";
        $query=$this->db->query($sql);
    
            return $query->result();	
	}
	function get_username($id)
	{
	$sql="select username from login where login_id='$id'";
	$query=$this->db->query($sql);
     $data=$query->row_array();
     return $data['username'];
	}
	
	
	public function get_accounts_detailsddd($metaid)
	{
		$sql="SELECT * FROM `trading_partner_accounts_view` where metaid=$metaid";
        $query=$this->db->query($sql);
            return $query->result();
		
	} 
	
	public function get_sender_receiver_details($metaid)
	{
		$sql="SELECT * FROM `sender_receiver_view` where metaid=$metaid";
        $query=$this->db->query($sql);
        return $query->result();
	}
	
	public function get_book_stock()
	{
	   $sql="SELECT * FROM `sender_receiver_view` where metaid=$metaid";
        $query=$this->db->query($sql);
        return $query->result();	
	}
	
	public function get_bill_details($id)
	{
	    $sql="SELECT * FROM `bills_view` where metaid=$id";
        $query=$this->db->query($sql);
        return $query->result();		
	}
	
      	public function get_stocktake_sentdetails($senderid,$equipmentid)
	    {
	    $sql="SELECT * FROM `movements_view` where equipment=$equipmentid and sending_tp=$senderid";
        $query=$this->db->query($sql);
        return $query->result();	
	    }
		public function get_stocktake_sentdetailsw($senderid,$equipmentid)
	    {
	    $sql="SELECT * FROM `movements_view` where equipment=$equipmentid and sending_tp=$senderid";
        $query=$this->db->query($sql);
        return $query->result();	
	    }
	   public function get_stocktake_details($equipmentid)
	   {
	   $sql="SELECT * FROM `stocktakes_view` where equipment=$equipmentid";
        $query=$this->db->query($sql);
        return $query->result();	
	   }
	
	public function get_bill_transationon()
	{
		$sql="SELECT * FROM `movements_view` where transaction=3";
        $query=$this->db->query($sql);
        return $query->result();
	}
	
	public function get_bill_transationoff()
	{
		$sql="SELECT * FROM `movements_view` where transaction=4";
        $query=$this->db->query($sql);
        return $query->result();
	}
	
	public function fetch_manual_docket()
	{
		$sql="SELECT * FROM `upload_mannual_docket`";
        $query=$this->db->query($sql);
        return $query->result();	
	}
	
	
	
	//================================================pdftotext=========================
	
	
function setFilename($filename) {
		// Reset
		$this->decodedtext = '';
		return $this->filename = $filename;
	}

	function output($echo = false) {
		if($echo) echo $this->decodedtext;
		else return $this->decodedtext;
	}

	function setUnicode($input) {
		// 4 for unicode. But 2 should work in most cases just fine
		if($input == true) $this->multibyte = 4;
		else $this->multibyte = 2;
	}

	function decodePDF() {
		// Read the data from pdf file
		$infile = @file_get_contents($this->filename, FILE_BINARY);
		if (empty($infile))
			return "";

		// Get all text data.
		$transformations = array();
		$texts = array();

		// Get the list of all objects.
		preg_match_all("#obj[\n|\r](.*)endobj[\n|\r]#ismU", $infile . "endobj\r", $objects);
		$objects = @$objects[1];

		// Select objects with streams.
		for ($i = 0; $i < count($objects); $i++) {
			$currentObject = $objects[$i];

			// Prevent time-out
			@set_time_limit ();
			if($this->showprogress) {
//				echo ". ";
				flush(); ob_flush();
			}

			// Check if an object includes data stream.
			if (preg_match("#stream[\n|\r](.*)endstream[\n|\r]#ismU", $currentObject . "endstream\r", $stream )) {
				$stream = ltrim($stream[1]);
				// Check object parameters and look for text data.
				$options = $this->getObjectOptions($currentObject);

				if (!(empty($options["Length1"]) && empty($options["Type"]) && empty($options["Subtype"])) )
//				if ( $options["Image"] && $options["Subtype"] )
//				if (!(empty($options["Length1"]) &&  empty($options["Subtype"])) )
					continue;

				// Hack, length doesnt always seem to be correct
				unset($options["Length"]);

				// So, we have text data. Decode it.
				$data = $this->getDecodedStream($stream, $options);

				if (strlen($data)) {
	                if (preg_match_all("#BT[\n|\r](.*)ET[\n|\r]#ismU", $data . "ET\r", $textContainers)) {
						$textContainers = @$textContainers[1];
						$this->getDirtyTexts($texts, $textContainers);
					} else
						$this->getCharTransformations($transformations, $data);
				}
			}
		}

		// Analyze text blocks taking into account character transformations and return results.
		return $this->decodedtext = $this->getTextUsingTransformations($texts, $transformations);
	}


	function decodeAsciiHex($input) {
		$output = "";

		$isOdd = true;
		$isComment = false;

		for($i = 0, $codeHigh = -1; $i < strlen($input) && $input[$i] != '>'; $i++) {
			$c = $input[$i];

			if($isComment) {
				if ($c == '\r' || $c == '\n')
					$isComment = false;
				continue;
			}

			switch($c) {
				case '\0': case '\t': case '\r': case '\f': case '\n': case ' ': break;
				case '%':
					$isComment = true;
				break;

				default:
					$code = hexdec($c);
					if($code === 0 && $c != '0')
						return "";

					if($isOdd)
						$codeHigh = $code;
					else
						$output .= chr($codeHigh * 16 + $code);

					$isOdd = !$isOdd;
				break;
			}
		}

		if($input[$i] != '>')
			return "";

		if($isOdd)
			$output .= chr($codeHigh * 16);

		return $output;
	}

	function decodeAscii85($input) {
		$output = "";

		$isComment = false;
		$ords = array();

		for($i = 0, $state = 0; $i < strlen($input) && $input[$i] != '~'; $i++) {
			$c = $input[$i];

			if($isComment) {
				if ($c == '\r' || $c == '\n')
					$isComment = false;
				continue;
			}

			if ($c == '\0' || $c == '\t' || $c == '\r' || $c == '\f' || $c == '\n' || $c == ' ')
				continue;
			if ($c == '%') {
				$isComment = true;
				continue;
			}
			if ($c == 'z' && $state === 0) {
				$output .= str_repeat(chr(0), 4);
				continue;
			}
			if ($c < '!' || $c > 'u')
				return "";

			$code = ord($input[$i]) & 0xff;
			$ords[$state++] = $code - ord('!');

			if ($state == 5) {
				$state = 0;
				for ($sum = 0, $j = 0; $j < 5; $j++)
					$sum = $sum * 85 + $ords[$j];
				for ($j = 3; $j >= 0; $j--)
					$output .= chr($sum >> ($j * 8));
			}
		}
		if ($state === 1)
			return "";
		elseif ($state > 1) {
			for ($i = 0, $sum = 0; $i < $state; $i++)
				$sum += ($ords[$i] + ($i == $state - 1)) * pow(85, 4 - $i);
			for ($i = 0; $i < $state - 1; $i++) {
				try {
					if(false == ($o = chr($sum >> ((3 - $i) * 8)))) {
						throw new Exception('Error');
					}
					$output .= $o;
				} catch (Exception $e) { /*Dont do anything*/ }
			}
		}

		return $output;
	}

	function decodeFlate($data) {
		return @gzuncompress($data);
	}

	function getObjectOptions($object) {
		$options = array();

		if (preg_match("#<<(.*)>>#ismU", $object, $options)) {
			$options = explode("/", $options[1]);
			@array_shift($options);

			$o = array();
			for ($j = 0; $j < @count($options); $j++) {
				$options[$j] = preg_replace("#\s+#", " ", trim($options[$j]));
				if (strpos($options[$j], " ") !== false) {
					$parts = explode(" ", $options[$j]);
					$o[$parts[0]] = $parts[1];
				} else
					$o[$options[$j]] = true;
			}
			$options = $o;
			unset($o);
		}

		return $options;
	}

	function getDecodedStream($stream, $options) {
		$data = "";
		if (empty($options["Filter"]))
			$data = $stream;
		else {
			$length = !empty($options["Length"]) ? $options["Length"] : strlen($stream);
			$_stream = substr($stream, 0, $length);

			foreach ($options as $key => $value) {
				if ($key == "ASCIIHexDecode")
					$_stream = $this->decodeAsciiHex($_stream);
				elseif ($key == "ASCII85Decode")
					$_stream = $this->decodeAscii85($_stream);
				elseif ($key == "FlateDecode")
					$_stream = $this->decodeFlate($_stream);
				elseif ($key == "Crypt") { // TO DO
				}
			}
			$data = $_stream;
		}
		return $data;
	}

	function getDirtyTexts(&$texts, $textContainers) {
		for ($j = 0; $j < count($textContainers); $j++) {
			if (preg_match_all("#\[(.*)\]\s*TJ[\n|\r]#ismU", $textContainers[$j], $parts))
				$texts = array_merge($texts, array(@implode('', $parts[1])));
			elseif (preg_match_all("#T[d|w|m|f]\s*(\(.*\))\s*Tj[\n|\r]#ismU", $textContainers[$j], $parts))
				$texts = array_merge($texts, array(@implode('', $parts[1])));
			elseif (preg_match_all("#T[d|w|m|f]\s*(\[.*\])\s*Tj[\n|\r]#ismU", $textContainers[$j], $parts))
				$texts = array_merge($texts, array(@implode('', $parts[1])));
		}

	}

	function getCharTransformations(&$transformations, $stream) {
		preg_match_all("#([0-9]+)\s+beginbfchar(.*)endbfchar#ismU", $stream, $chars, PREG_SET_ORDER);
		preg_match_all("#([0-9]+)\s+beginbfrange(.*)endbfrange#ismU", $stream, $ranges, PREG_SET_ORDER);

		for ($j = 0; $j < count($chars); $j++) {
			$count = $chars[$j][1];
			$current = explode("\n", trim($chars[$j][2]));
			for ($k = 0; $k < $count && $k < count($current); $k++) {
				if (preg_match("#<([0-9a-f]{2,4})>\s+<([0-9a-f]{4,512})>#is", trim($current[$k]), $map))
					$transformations[str_pad($map[1], 4, "0")] = $map[2];
			}
		}
		for ($j = 0; $j < count($ranges); $j++) {
			$count = $ranges[$j][1];
			$current = explode("\n", trim($ranges[$j][2]));
			for ($k = 0; $k < $count && $k < count($current); $k++) {
				if (preg_match("#<([0-9a-f]{4})>\s+<([0-9a-f]{4})>\s+<([0-9a-f]{4})>#is", trim($current[$k]), $map)) {
					$from = hexdec($map[1]);
					$to = hexdec($map[2]);
					$_from = hexdec($map[3]);

					for ($m = $from, $n = 0; $m <= $to; $m++, $n++)
						$transformations[sprintf("%04X", $m)] = sprintf("%04X", $_from + $n);
				} elseif (preg_match("#<([0-9a-f]{4})>\s+<([0-9a-f]{4})>\s+\[(.*)\]#ismU", trim($current[$k]), $map)) {
					$from = hexdec($map[1]);
					$to = hexdec($map[2]);
					$parts = preg_split("#\s+#", trim($map[3]));

					for ($m = $from, $n = 0; $m <= $to && $n < count($parts); $m++, $n++)
						$transformations[sprintf("%04X", $m)] = sprintf("%04X", hexdec($parts[$n]));
				}
			}
		}
	}
	function getTextUsingTransformations($texts, $transformations) {
		$document = "";
		for ($i = 0; $i < count($texts); $i++) {
			$isHex = false;
			$isPlain = false;
			$hex = "";
			$plain = "";
			for ($j = 0; $j < strlen($texts[$i]); $j++) {
				$c = $texts[$i][$j];
				switch($c) {
					case "<":
						$hex = "";
						$isHex = true;
                        $isPlain = false;
					break;
					case ">":
						$hexs = str_split($hex, $this->multibyte); // 2 or 4 (UTF8 or ISO)
						for ($k = 0; $k < count($hexs); $k++) {

							$chex = str_pad($hexs[$k], 4, "0"); // Add tailing zero
							if (isset($transformations[$chex]))
								$chex = $transformations[$chex];
							$document .= html_entity_decode("&#x".$chex.";");
						}
						$isHex = false;
					break;
					case "(":
						$plain = "";
						$isPlain = true;
                        $isHex = false;
					break;
					case ")":
						$document .= $plain;
						$isPlain = false;
					break;
					case "\\":
						$c2 = $texts[$i][$j + 1];
						if (in_array($c2, array("\\", "(", ")"))) $plain .= $c2;
						elseif ($c2 == "n") $plain .= '\n';
						elseif ($c2 == "r") $plain .= '\r';
						elseif ($c2 == "t") $plain .= '\t';
						elseif ($c2 == "b") $plain .= '\b';
						elseif ($c2 == "f") $plain .= '\f';
						elseif ($c2 >= '0' && $c2 <= '9') {
							$oct = preg_replace("#[^0-9]#", "", substr($texts[$i], $j + 1, 3));
							$j += strlen($oct) - 1;
							$plain .= html_entity_decode("&#".octdec($oct).";", $this->convertquotes);
						}
						$j++;
					break;

					default:
						if ($isHex)
							$hex .= $c;
						elseif ($isPlain)
							$plain .= $c;
					break;
				}
			}
			$document .= "\n";
		}

		return $document;
	}
	
	public function get_third_party($id)
	{
		$this->db->select('*');
	$this->db->from('member_management_view');
	$this->db->where('memberId',$id);
	$query=$this->db->get();
   
     $data=$query->row_array();
     return $data['tp_name'];
	}
	
	
	public function get_member_sitess($site_id)
	{
	$this->db->select('*');
	$this->db->from('member_management_view');
	$this->db->where('tp_type',$site_id);
	$this->db->group_by('tp_name');
	$query=$this->db->get();
    return $query->result();
	}
	
	public function get_movements_details($id)
	{
		
	$sql="select * from movements_view where metaid='$id'";
	$query=$this->db->query($sql);
     $data=$query->row_array();
	 return $data; 
	}
	
	public function get_movements_detailss($id)
	{
		$sql="select * from movements_view where metaid=$id";
	     $query=$this->db->query($sql);
        return $query->result();
	}
	
	
	
	
	
	
	
	
	
	public function sxss()
	{
			 $query = "
 UPDATE equipment 
 SET equipment = 1111, 
 equipment_supplier_tp = 222, 
 equipment_report_name = 3
 WHERE id = 52
 ";
		$query=$this->db->query($query);

	}
	

	
	
	
	
	
	
	

}
?>