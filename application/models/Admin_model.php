<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function admin_logins($username,$password){
		$query=$this->db->query("Select * from admin where user_name='$username' and password='$password'");
		return $query->result();
	}
	public function get_total_user(){
		$query=$this->db->query("SELECT COUNT(meta_id) as user FROM users");
		return $query->result();
	}
	public function get_last_user(){
		$query=$this->db->query('SELECT MAX(user_name) as value FROM users ORDER BY meta_id DESC');
		return $query->result();
	}
	public function get_today_user(){
		$query=$this->db->query("SELECT COUNT(meta_id) as user FROM users WHERE DATE(`date`) = CURDATE()");
		return $query->result();
	}
	public function menu(){
		$res=$this->db->query("SELECT * FROM `left_menu`where menuParentId=0");
		return $res->result();
	}
	public function sub_menu($id){
		$res=$this->db->query("SELECT * FROM `left_menu` WHERE menuParentId!=0 and menuParentId='$id'");
		return $res->result();
	}
	public function get_maxnews_id(){
		$res=$this->db->query("SELECT MAX(news_id) as newsid FROM web_news");
		return $res->result();
	}
	public function get_maxproduct_id(){
		$res=$this->db->query("SELECT MAX(product_id) as productid FROM web_product");
		return $res->result();
	}
	public function insert_news($data){
		$query=$this->db->insert('web_news', $data);
		return $query;
	}
	public function insert_product($data){
		$query=$this->db->insert('web_product',$data);
		return $query;
	}
	public function insert_category($data){
		$query=$this->db->insert('web_category',$data);
		return $query;
	}
	public function select_catg(){
		$res=$this->db->get('web_category');
		return $res->result();
	}
	public function get_users(){
		$res=$this->db->query('SELECT * FROM `users` ORDER by meta_id DESC LIMIT 6');
		return $res->result();
	}
	public function total_product(){
		$res=$this->db->query("SELECT COUNT(meta_id) as product FROM web_product");
		return $res->result();
	}
	public function last_product(){
		$res=$this->db->query("SELECT MAX(product_name) as product FROM web_product WHERE DATE(`date`) = CURDATE()");
		return $res->result();
	}
	public function get_maxcategory_id(){
		$res=$this->db->query("SELECT MAX(category_id) as categoryid FROM web_category");
		return $res->result();
	}
	public function select_product(){
		$res=$this->db->get("web_product");
		return $res->result();
	}
	public function get_categoryname($id){
		$res=$this->db->query("SELECT * FROM `web_category` WHERE category_id='$id'");
		return $res->result();
	}
	public function get_category(){
		$res=$this->db->get("web_category");
		return $res->result();
	}
}
?>