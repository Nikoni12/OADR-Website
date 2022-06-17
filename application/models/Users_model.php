<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Users_model extends CI_Model {
 
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
 
	public function check_login($username, $password){
        $this->db->where('UserName', $username);
        $this->db->where('Password', $password);
        $query = $this->db->get('admin');
        if($query->num_rows() > 0){
            return true;
        } else {
            return false;
        }
    }
    public function checkappnum($appnum){
        $this->db->select('appnum');
        $this->db->from('careers');
        $this->db->where('appnum', $appnum);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return true;
        } else {
            return false;
        }
    }
    public function insertcareer($app){
		$this->db->insert('careers', $app);
		return $this->db->insert_id(); 
	}
    public function insertcareer2($name, $data){
		$this->db->where('Name',$name);
        $this->db->update('careers',$data);
	}

    public function getannouncement(){
        $this->db->select('*');
        $this->db->from('announcements');
        $query = $this->db->get();
        return $query->result();
	}

    public function insertannouncement($ann){
		$this->db->insert('announcements', $ann);
        return $this->db->insert_id(); 
	}

    public function checkticket($ticket){
        $this->db->select('ticket');
        $this->db->from('inquiries');
        $this->db->where('ticket', $ticket);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return true;
        } else {
            return false;
        }
    }
    public function insertinquiry($inq){
		$this->db->insert('inquiries', $inq);
		return $this->db->insert_id(); 
	}
    public function view_users(){
        $result = $this->db->get('admin');
        return $result;
    }
    public function insertuser($add){
		$this->db->insert('admin', $add);
		return $this->db->insert_id(); 
	}
    public function updateuser($uname,$data){
        $this->db->where('UserName',$uname);
        $this->db->update('users',$data);
    }

}