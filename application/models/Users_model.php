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
        $this->db->order_by('date_added', 'desc');
        $query = $this->db->get();
        return $query->result();
	}

    public function get_announcement_edit($id){
        $this->db->select('*');
        $this->db->from('announcements');
        $this->db->where('ID',$id);
        $this->db->order_by('date_added', 'desc');
        $query = $this->db->get();
        return $query->result();
	}

    public function insertannouncement($ann){
		$this->db->insert('announcements', $ann);
        return $this->db->insert_id(); 
	}

    public function update_announcement($id,$ann){
        $this->db->where('id', $id);
        $this->db->update('announcements', $ann);
    }

    public function delete_announcement($id){
        $this->db->where('ID',$id);
        $this -> db -> delete('announcements');
	}

    public function getnews(){
        $this->db->select('*');
        $this->db->from('news');
        $this->db->order_by('date_added', 'desc');
        $query = $this->db->get();
        return $query->result();
	}

    public function get_news_edit($id){
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('ID',$id);
        $query = $this->db->get();
        return $query->result();
	}

    public function getnewsbytitle($newstitle){
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('news_title',$newstitle);
        $this->db->order_by('date_added', 'desc');
        $query = $this->db->get();
        return $query->result();
	}

    public function insertnews($new){
		$this->db->insert('news', $new);
        return $this->db->insert_id(); 
	}

    public function update_news($id,$new){
        $this->db->where('id', $id);
        $this->db->update('news', $new);
    }

    public function delete_news($id){
        $this->db->where('ID',$id);
        $this -> db -> delete('news');
	}

    public function insertalbum($data){
		$this->db->insert('gallery', $data);
        return $this->db->insert_id(); 
	}

    public function getalbum(){
        $this->db->select('*');
        $this->db->from('gallery');
        $query = $this->db->get();
        return $query->result();
	}

    public function get_album_edit($id){
        $this->db->select('*');
        $this->db->from('gallery');
        $this->db->where('ID',$id);
        $query = $this->db->get();
        return $query->result();
	}

    public function update_album($id,$alb){
        $this->db->where('id', $id);
        $this->db->update('gallery', $alb);
	}

    public function delete_album($id){
        $this->db->where('ID',$id);
        $this -> db -> delete('gallery');
	}


    public function insertevent($eve){
		$this->db->insert('events', $eve);
        return $this->db->insert_id(); 
	}

    public function getevent(){
        $this->db->select('*');
        $this->db->from('events');
        $this->db->order_by('event_start', 'desc');
        $query = $this->db->get();
        return $query->result();
	}

    public function get_event_edit($id){
        $this->db->select('*');
        $this->db->from('events');
        $this->db->where('ID',$id);
        $query = $this->db->get();
        return $query->result();
	}


    public function update_event($id,$eve){
        $this->db->where('id', $id);
        $this->db->update('events', $eve);
    }

    public function delete_event($id){
        $this->db->where('ID',$id);
        $this -> db -> delete('events');
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

    public function inquiries(){
        $result = $this->db->get('inquiries');
        return $result;
    }
    public function applications(){
        $result = $this->db->get('careers');
        return $result;
    }
    function deleteaninquiry($ticket){  
        $this->db->delete('inquiries',array('ticket' => $ticket));  
    }  
    function fetchrowinquiry($ticket){ 
        $this->db->select('*');
        $this->db->from('inquiries');
        $this->db->where('ticket', $ticket );
        $query = $this->db->get(); 
        return $query;
    }  
    public function updatestatus($ticket,$data){
        $this->db->where('ticket',$ticket);
        $this->db->update('inquiries',$data);
    }
    function deleteapplication($appnum){  
        $this->db->delete('careers',array('appnum' => $appnum));  
    } 
    function fetchapplication($appnum){ 
        $this->db->select('*');
        $this->db->from('careers');
        $this->db->where('appnum', $appnum );
        $query = $this->db->get(); 
        return $query;
    }  
    public function updateapplication($appnum,$data){
        $this->db->where('appnum',$appnum);
        $this->db->update('careers',$data);
    }
    public function resourcescat(){
        $result = $this->db->get('resources_category');
        return $result;
    }
    public function insert_cat($cat){
		$this->db->insert('resources_category', $cat);
		return $this->db->insert_id(); 
	}
    public function updatecat($cat,$data){
        $this->db->where('ID',$cat);
        $this->db->update('resources_category',$data);
    }
    function deletecategory($cat){  
        $this->db->delete('resources_category',array('ID' => $cat));  
    } 
    function fetchcat($cat){ 
        $this->db->select('*');
        $this->db->from('resources_category');
        $this->db->where('ID', $cat );
        $query = $this->db->get(); 
        return $query;
    } 
    public function resources(){
        $result = $this->db->get('resources');
        return $result;
    }
    public function resources2(){
        $result = $this->db->get('resources_category');
        return $result;
    }
    function fetchcategory($category){ 
        $this->db->select('*');
        $this->db->from('resources');
        $this->db->where('cat_id', $category );
        $query = $this->db->get(); 
        return $query;
    }  
    public function fetchuser(){
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('role', $category );
        $query = $this->db->get(); 
        return $query;
    }
    function deleteuser($id){  
        $this->db->delete('admin',array('ID' => $id));  
    } 
    public function fetchemail($appnum){
        $this->db->select('Email');
        $this->db->from('careers');
        $this->db->where('appnum',$appnum);
        return $this->db->get();
    }
    public function fetchalbum(){
        $this->db->select('album_title');
        $this->db->from('gallery');
        $this->db->group_by('album_title');
        return $this->db->get();
    }
    function fetchgall($album){ 
        $this->db->select('*');
        $this->db->from('gallery');
        $this->db->where('album_title', urldecode($album) );
        $query = $this->db->get(); 
        return $query;
    }  
    public function insert_res($data = array()){
		$this->db->insert_batch('resources', $data);
		return $this->db->insert_id(); 
	}
    public function fetchid($cat){
        $this->db->select('ID');
        $this->db->from('resources_category');
        $this->db->where('categoryname',$cat);
        return $this->db->get();
    }

    public function getuser_by_username($username){
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username',$username);
        $query = $this->db->get();
        return $query->result();
    }
	
    public function getid_by_username($username){
        $this->db->select('ID');
        $this->db->from('admin');
        $this->db->where('username',$username);
        $query = $this->db->get();
        return $query->result();
    }

    public function update_username($newuserinfo){
        $this->db->update('admin', $newuserinfo, array('ID' => $newuserinfo['ID']));
    }

    public function update_userpass($newuserinfo){
        $this->db->update('admin', $newuserinfo, array('ID' => $newuserinfo['ID']));
    }
    public function fetchaccount($username){
        $this->db->select('Password');
        $this->db->from('admin');
        $this->db->where('UserName',$username);
        return $this->db->get();
    }

    public function search_news($searchdata){
        $this->db->select('*');
        $this->db->from('news');
        $this->db->like('news_title',$searchdata);
        $query = $this->db->get();
        return $query->result();
    }

    public function search_announcements($searchdata){
        $this->db->select('*');
        $this->db->from('announcements');
        $this->db->like('announcement_title',$searchdata);
        $query = $this->db->get();
        return $query->result();
    }

    public function search_events($searchdata){
        $this->db->select('*');
        $this->db->from('events');
        $this->db->like('event_title',$searchdata);
        $query = $this->db->get();
        return $query->result();
    }
    public function fetchrole($username){
        $this->db->select('role');
        $this->db->from('admin');
        $this->db->where('UserName',$username);
        return $this->db->get();
    }

    public function getgadplan(){
        $this->db->select('*');
        $this->db->from('planbudget');
        $query = $this->db->get();
        return $query->result();
    }

    public function insertgadplan($data){
		$this->db->insert('planbudget', $data);
        return $this->db->insert_id(); 
	}

    public function get_gadplan_edit($id){
        $this->db->select('*');
        $this->db->from('planbudget');
        $this->db->where('ID',$id);
        $query = $this->db->get();
        return $query->result();
	}

    public function update_gadplan($id,$plan){
        $this->db->where('id', $id);
        $this->db->update('planbudget', $plan);
	}

    public function getgadreport(){
        $this->db->select('*');
        $this->db->from('accomplishmentreport');
        $query = $this->db->get();
        return $query->result();
    }

    public function insertgadreport($data){
		$this->db->insert('accomplishmentreport', $data);
        return $this->db->insert_id(); 
	}

    public function get_gadreport_edit($id){
        $this->db->select('*');
        $this->db->from('accomplishmentreport');
        $this->db->where('ID',$id);
        $query = $this->db->get();
        return $query->result();
	}

    public function update_gadreport($id,$report){
        $this->db->where('id', $id);
        $this->db->update('accomplishmentreport', $report);
	}
}