<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Users_model extends CI_Model {
 
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
 
	public function getAllUsers(){
		$query = $this->db->get('users');
		return $query->result(); 
	}
 
	public function insert($user){
		$this->db->insert('users', $user);
		return $this->db->insert_id(); 
	}
	public function insert_data2($fname, $data){
        $this->db->where('fname',$fname);
        $this->db->update('users',$data);
    }
	public function getUser($id){
		$query = $this->db->get_where('users',array('id'=>$id));
		return $query->row_array();
	}
 
	public function activate($data, $id){
		$this->db->where('users.id', $id);
		return $this->db->update('users', $data);
	}
	public function check_login($username, $password){
        $this->db->where('uname', $username);
        $this->db->where('pass', $password);
        $query = $this->db->get('users');
        if($query->num_rows() > 0){
            return true;
        } else {
            return false;
        }
    }
	public function check_admin($username, $password){
        $this->db->where('name', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('admin');
        if($query->num_rows() > 0){
            return true;
        } else {
            return false;
        }
    }
	public function CountAll(){
        return $this->db->get('users')->num_rows();
    }
	function fetch_all(){
		$query = $this->db->get("product");
		return $query->result();
	}
	 public function fetch_data($limit,$offset){
        $this->db->limit($limit);
        $this->db->offset($offset);
        $result = $this->db->get('users')->result();
        return $result;
    }
	
	 public function fetch_data2($limit,$offset){
        $this->db->limit($limit);
        $this->db->offset($offset);
        $result = $this->db->get('product')->result();
        return $result;
    }
	public function select_id($id){
        $this->db->select('id');
        $this->db->from('users');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return true;
        } else {
            return false;
        }
    }
	public function update_model_data($uid,$data){
        $this->db->where('id',$uid);
        $this->db->update('users',$data);
    }
	public function delete_model_data($id){
        $this->db->delete('users',array('id' => $id));
    }
	
	 public function CountAll2(){
        return $this->db->get('product')->num_rows();
    }
	public function select_uname($username){
       $query = $this->db->query("select * from users where uname = '$username'");
        return $query->result();
	}
	public function retrieve_pass($password){
        $this->db->select('pass');
        $this->db->from('users');
        $this->db->where('pass', $password);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return true;
        } else {
            return false;
        }
    }
	public function update_pass($curPass,$password){
        $data = array(
            'pass' => $password
        );
        $this->db->where('pass',$curPass);
        $this->db->update('users',$data);
    }
}