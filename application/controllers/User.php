<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class User extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('users_model');
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');
	}
	
	public function index(){
		$this->load->helper('url');
		$this->load->view('home');
	}
	public function about(){
		$this->load->view('about');
	}
	public function mvision(){
		$this->load->view('mvision');
	}
	public function employees(){
		$this->load->view('employees');
	}
	public function quality(){
		$this->load->view('quality');
	}
	public function resources(){
		$this->load->view('resources');
	}
	public function news(){
		$this->load->view('news');
	}
	public function newstitle(){
		$this->load->view('newstitle');
	}
	public function contact(){
		$this->load->view('contactus');
	}
	public function adminlogin(){
		$this->load->view('administrator-panel-login');
	}
	public function dashboard(){
		$this->load->view('administrator-dashboard');
	}
	public function careers(){
		$this->load->view('careers');
	}
	public function chiefofficer(){
		$this->load->view('chiefofficer');
	}
	public function administrativeassistant(){
		$this->load->view('administrativeassistant');
	}
	public function technicalconsultant(){
		$this->load->view('technicalconsultant');
	}
	public function trainingspecialist(){
		$this->load->view('trainingspecialist');
	}
	
	public function gallery(){
		$this->load->view('gallery');
	}
	public function newsadmin(){
		$this->load->view('newsadmin');
	}
	public function announcementsadmin(){
		$data['announcement'] = $this->users_model->getannouncement();
		$this->load->view('announcementsadmin', $data);
	}
	public function eventadmin(){
		$this->load->view('eventsadmin');
	}
	public function adminresources(){
		
		$this->load->view('adminresources');
	}
	public function announcement(){
		$data['announcement'] = $this->users_model->getannouncement();
		$this->load->view('announcement', $data);
	}
	public function admininquiries(){
		$this->load->view('admininquiries');
	}
	public function adminapplications(){
		$this->load->view('adminapplications');
	}
	public function adminusers(){
		$this->load->view('adminusers');
	}
	public function admincatresources(){
		$this->load->view('admincatresources');
	}
	public function addnews(){
		$this->load->view('addnews');
	}
	public function addannouncement(){
		$this->load->view('addannouncement');
	}

	public function submitannouncement(){
		$config['allowed_types'] = 'jpg|png';
		$config['upload_path'] = './uploads/';
		$config['encrypt_name'] = true;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('announcement_image')) {
			$announcement_image = $this->upload->data('file_name');
			$ann = array(
				'announcement_title' => $this->input->post('announcement_title'),
				'announcement_content' => $this->input->post('announcement_content'),
				'announcement_image' => $announcement_image
			);
			$this->users_model->insertannouncement($ann);
			redirect(base_url() . 'User/announcementsadmin');
		}



	}
	public function addevent(){
		$this->load->view('addevent');
	}
	public function addcategory(){
		$this->load->view('addcategory');
	}
	public function addresources(){
		$this->load->view('addresources');
	}
	public function adduser(){
		$this->load->view('adduser');
	}
	public function edituser(){
		$this->load->view('edituser');
	}
	public function admingallery(){
		$this->load->view('admingallery');
	}
	public function adminalbum(){
		$this->load->view('adminalbum');
	}
	public function addalbum(){
		$this->load->view('addalbum');
	}
	public function events(){
		$this->load->view('events');
	}
	public function careerform(){
		$this->load->view('careerform');
	}
	public function login(){
        $this->load->model('Users_model');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run()){
            if($this->users_model->check_login($username,$password)){
				redirect("./User/dashboard/","refresh");
				$this->session->set_flashdata('uname',$username);
            } else {
				echo "<script>alert('Invalid Username or Password');</script>";
                $this->adminlogin();
            }
        } else {
            $this->adminlogin();
        }
    }
	public function applicationform(){
        $this->load->model('Users_model');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
		$pnum = $this->input->post('pnum');
		$category = $this->input->post('category');
		$message = $this->input->post('message');
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('pnum', 'Phone Number', 'required');
		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('message', 'Message', 'required');
		$app['Name'] = $name;
		$app['Email'] = $email;
		$app['PhoneNum'] = $pnum;
		$app['Category'] = $category;
		$app['status'] = 'Not Addressed';
		$app['Message'] = $message;
		$appnum = sprintf("%'.09d\n", mt_rand(1,999999999999));
		if($this->Users_model->checkappnum($appnum) == true){
			$appnum = sprintf("%'.09d\n", mt_rand(1,999999999999));
		}
		$app['appnum'] = $appnum;
		if($this->form_validation->run()){
			$this->users_model->insertcareer($app);
			$config1 = array('upload_path' => './uploads/', 
                        'allowed_types' => 'pdf',
                        'max_size' => 9999 ); 
			$this->load->library('upload'); 
			$this->upload->initialize($config1);
			if (!$this->upload->do_upload('resume')) {
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			} else {
				$this->load->model('users_model');
				$name = $this->input->post('name');
				$filename = $name.'.pdf';
				$filepass = array('resume_name' => $filename);
				$this->users_model->insertcareer2($name, $filepass); 
				redirect("./User/careerform/","refresh"); 
			}
		} else {
			$this->careerform();
		}
		
    }
}