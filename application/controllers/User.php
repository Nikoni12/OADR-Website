<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google;

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
		$data['event'] = $this->users_model->getevent();
		$data['news'] = $this->users_model->getnews(); 
		$data['cert'] = $this->users_model->getcertification();
		$this->load->view('home',$data);
	}
	public function about(){
		$this->load->view('about');
	}
	public function mvision(){
		$this->load->view('mvision');
	}
	public function employees(){
		$data['emp'] = $this->users_model->getemployees();
		$data['cert'] = $this->users_model->getcertification();
		$this->load->view('employees',$data);
	}
	public function director(){
		$this->load->view('director');
	}
	public function orgstructure(){
		$this->load->view('orgstructure');
	}
	public function quality(){
		$this->load->view('quality');
	}
	public function resources(){
		$this->load->model('Users_model');
		$data['res'] = $this->users_model->resourcescat();
		$category = $this->uri->segment(3);
		if ($category == ""){ $category = 1;}
		$data['ress'] = $this->users_model->fetchcategory(intval($category));
		$this->load->view('resources',$data);
	}
	public function news(){
		$data['news'] = $this->users_model->getnews();
		$this->load->view('news',$data);
	}
	public function newstitle(){
		$newstitle = $_GET['newstitle'];
		$data['titleofnews'] = $this->users_model->getnewsbytitle($newstitle);
		$data['news'] = $this->users_model->getnews();
		$this->load->view('newstitle',$data);
	}
	public function jobtitle(){
		$jobtitle = $_GET['jobtitle'];
		$data['titleofjob'] = $this->users_model->getjobbytitle($jobtitle);
		$data['job'] = $this->users_model->getjobtitle();
		$this->load->view('jobtitle',$data);
	}
	public function contact(){
		$this->load->view('contactus');
	}
	public function adminlogin(){
		$this->load->view('administrator-panel-login');
	}
	public function dashboard(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->view('administrator-dashboard');
		}
	}
	public function careers(){
		$data['job'] = $this->users_model->getjobtitle();
		$this->load->view('careers',$data);
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
		$this->load->model('Users_model');
		$data['album'] = $this->users_model->fetchalbum();
		$data['pics'] = $this->users_model->getalbum();
		$this->load->view('gallery',$data);
	}
	public function newsadmin(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$data['news'] = $this->users_model->getnews();
			$this->load->view('newsadmin', $data);
		}
	}
	public function announcementsadmin(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$data['announcement'] = $this->users_model->getannouncement();
			$this->load->view('announcementsadmin', $data);
		}
		
	}
	public function eventadmin(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$data['event'] = $this->users_model->getevent();
			$this->load->view('eventsadmin',$data);
		}
		
	}
	public function adminresources(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$data['res'] = $this->users_model->resources();
			$this->load->view('adminresources',$data);
		}
		
	}
	public function announcement(){
		$data['announcement'] = $this->users_model->getannouncement();
		$this->load->view('announcement', $data);
	}
	public function admininquiries(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$data['inq'] = $this->users_model->inquiries();
			$this->load->view('admininquiries', $data);
		}
		
	}
	public function adminapplications(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$data['job'] = $this->users_model->job();
			$this->load->view('adminapplications', $data);
		}
		
	}
	public function adminusers(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$data['users'] = $this->users_model->view_users();
			$this->load->view('adminusers', $data);
		}
		
	}
	public function admincatresources(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$data['cat'] = $this->users_model->resourcescat();
			$this->load->view('admincatresources', $data);
		}
		
	}
	public function addnews(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->view('addnews');
		}
		
	}
	public function submitnews(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$config['allowed_types'] = 'jpg|png';
			$config['upload_path'] = './uploads/';
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('news_image')) {
				$news_image = $this->upload->data('file_name');
				$new = array(
					'news_title' => $this->input->post('news_title'),
					'news_link' => $this->input->post('news_link'),
					'news_content' => $this->input->post('news_content'),
					'news_image' => $news_image
				);
				$this->users_model->insertnews($new);
				$this->session->set_userdata('added','added');
				redirect("./User/newsadmin/","refresh"); 
			} else {
				$this->session->set_userdata('invalid','invalid');
				redirect("./User/addannouncement/","refresh");
			}
			
		}
	}
	public function addannouncement(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->view('addannouncement');
		}
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
			$this->session->set_userdata('added','added');
				redirect("./User/announcementsadmin/","refresh"); 
		} else {
			$this->session->set_userdata('invalid','invalid');
			redirect("./User/addannouncement/","refresh");
		}
	}
	public function editannouncement(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$id = $_POST['edit_id'];
			$data["announcement"] = $this->users_model->get_announcement_edit($id);
			$this->load->view('editannouncement',$data);
		}
	}
	public function editnews(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$id = $_POST['edit_id'];
			$data["news"] = $this->users_model->get_news_edit($id);
			$this->load->view('editnews',$data);
		}
	}
	public function editevents(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$id = $_POST['edit_id'];
			$data["event"] = $this->users_model->get_event_edit($id);
			$this->load->view('editevents',$data);
		}
	}
	public function editalbum(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$id = $_POST['edit_id'];
			$data["album"] = $this->users_model->get_album_edit($id);
			$this->load->view('editalbum',$data);
		}
	}
	public function updateannouncement(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$id = $_POST['edit_id'];
			$config['allowed_types'] = 'jpg|png';
			$config['upload_path'] = './uploads/';
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			if (!empty($_FILES['announcement_image']['name'])){
				if ($this->upload->do_upload('announcement_image')) {
					$announcement_image = $this->upload->data('file_name');
					$ann = array(
						'announcement_title' => $this->input->post('announcement_title'),
						'announcement_content' => $this->input->post('announcement_content'),
						'announcement_image' => $announcement_image
					);
					$this->users_model->update_announcement($id,$ann);
					$this->session->set_userdata('updated','updated');
					redirect("./User/announcementsadmin/","refresh"); 
				}
				else{
					$this->session->set_userdata('invalid','invalid');
					$id = $_POST['edit_id'];
					$data["announcement"] = $this->users_model->get_announcement_edit($id);
					$this->load->view('editannouncement',$data);
				}
			} else {
				$ann = array(
					'announcement_title' => $this->input->post('announcement_title'),
					'announcement_content' => $this->input->post('announcement_content')
				);
				$this->users_model->update_announcement($id,$ann);
				$this->session->set_userdata('updated','updated');
				redirect("./User/announcementsadmin/","refresh"); 
			}
		}
	}
	public function updatenews(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$id = $_POST['edit_id'];
			$config['allowed_types'] = 'jpg|png';
			$config['upload_path'] = './uploads/';
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			if (!empty($_FILES['news_image']['name'])){
				if ($this->upload->do_upload('news_image')) {
					$news_image = $this->upload->data('file_name');
					$new = array(
						'news_title' => $this->input->post('news_title'),
						'news_content' => $this->input->post('news_content'),
						'news_link' => $this->input->post('news_link'),
						'news_image' => $news_image
					);
					$this->users_model->update_news($id,$new);
					$this->session->set_userdata('updated','updated');
					redirect(base_url() . 'User/newsadmin'); 
				}
				else{
					$this->session->set_userdata('invalid','invalid');
					$id = $_POST['edit_id'];
					$data["news"] = $this->users_model->get_news_edit($id);
					$this->load->view('editnews',$data);
				}
			} else {
				$new = array(
					'news_title' => $this->input->post('news_title'),
					'news_content' => $this->input->post('news_content'),
					'news_link' => $this->input->post('news_link')
				);
				$this->users_model->update_news($id,$new);
				$this->session->set_userdata('updated','updated');
				redirect(base_url() . 'User/newsadmin'); 
			}
		}
	}
	public function updateevent(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$id = $_POST['edit_id'];
			$config['allowed_types'] = 'jpg|png';
			$config['upload_path'] = './uploads/';
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			if (!empty($_FILES['event_image']['name']) ){
				if ($this->upload->do_upload('event_image')) {
					$event_image = $this->upload->data('file_name');
					$eve = array(
						'event_title' => $this->input->post('event_title'),
						'event_content' => $this->input->post('event_content'),
						'event_image' => $event_image,
						'event_start' => $this->input->post('event_start'),
						'event_end' => $this->input->post('event_end')
					);
					$this->users_model->update_event($id,$eve);
					$this->session->set_userdata('updated','updated');
					redirect("./User/eventadmin/","refresh"); 
				}
				else{
					$this->session->set_userdata('invalid','invalid');
					$id = $_POST['edit_id'];
					$data["event"] = $this->users_model->get_event_edit($id);
					$this->load->view('editevents',$data);
				}
			} else {
				$eve = array(
					'event_title' => $this->input->post('event_title'),
					'event_content' => $this->input->post('event_content'),
					'event_start' => $this->input->post('event_start'),
					'event_end' => $this->input->post('event_end')
				);
				$this->users_model->update_event($id,$eve);
				$this->session->set_userdata('updated','updated');
				redirect("./User/eventadmin/","refresh"); 
			}
			
		}
	}
	public function addevent(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->view('addevent');
		}
	}
	public function submitevent(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$config['allowed_types'] = 'jpg|png';
			$config['upload_path'] = './uploads/';
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('event_image')) {
				$event_image = $this->upload->data('file_name');
				$eve = array(
					'event_title' => $this->input->post('event_title'),
					'event_content' => $this->input->post('event_content'),
					'event_image' => $event_image,
					'event_start' => $this->input->post('event_start'),
					'event_end' => $this->input->post('event_end')
				);
				$this->users_model->insertevent($eve);
				$this->session->set_userdata('added','added');
				redirect("./User/eventadmin/","refresh"); 
			} else {
				$this->session->set_userdata('invalid','invalid');
				redirect("./User/addevent/","refresh");
			}
		}
	}
	public function addcategory(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->view('addcategory');
		}
	}
	public function adduser(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->view('adduser');
		}
	}
	public function edituser(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$username = $this->session->userdata('username');
			$data['userdata'] = $this->users_model->getuser_by_username($username);
			$this->load->view('edituser', $data);
		}
	}
	public function updateusername(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$username = $this->session->userdata('username');
		$userid = $this->users_model->getid_by_username($username);
		$newuserinfo = array(
			'ID' => $this->input->post('ID'),
			'AdminName' => $this->input->post('nameadmin'),
			'Username' => $this->input->post('usernameadmin')
		);
		$this->users_model->update_username($newuserinfo);
			$this->session->unset_userdata('username');
			$this->session->set_userdata('account','account');
		redirect("./User/adminlogin/","refresh"); 
		}
	}
	public function updateuserpass(){
			$username = $this->session->userdata('username');
			$userid = $this->users_model->getid_by_username($username);
			$currentpassword = $this->input->post('currentpassword');
			$oldpassword = md5($this->input->post('oldpassword'));
			$newpassword = md5($this->input->post('newpassword'));
			$confirmpassword = md5($this->input->post('confirmpassword'));
			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules('oldpassword', 'Admin Password', 'required');
			$this->form_validation->set_rules('newpassword', 'Admin Password', 'required');
			$this->form_validation->set_rules('confirmpassword', 'Admin Confirm Password', 'required|matches[newpassword]');
			$result=$this->users_model->fetchaccount($username)->row();
			$curpass = $result->Password;
			if($this->form_validation->run()){
				if ($curpass == $oldpassword){
					$newuserinfo = array(
						'ID' => $this->input->post('ID'),
						'Password' => md5($this->input->post('newpassword')),
					);
					$this->users_model->update_userpass($newuserinfo);
					$this->session->unset_userdata('username');
					$this->session->set_userdata('password','password');
					redirect("./User/adminlogin/","refresh"); 
				} else {
					$this->session->set_userdata('oldpass','oldpass');
					redirect("./User/edituser/","refresh"); 
				}
			} else {
				$this->session->set_userdata('invalid','invalid');
				redirect("./User/edituser/","refresh");
			}
	}
	public function admingallery(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$data['album'] = $this->users_model->getalbum();
			$this->load->view('admingallery', $data);
		}
	}
	public function adminalbum(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->view('adminalbum');
		}
		
	}
	public function addalbum(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->view('addalbum');
		}
		
	}
	public function submitalbum(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$config['allowed_types'] = 'jpg|png';
			$config['upload_path'] = './uploads/';
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('album_image')) {
				$album_image = $this->upload->data('file_name');
				$alb = array(
					'album_title' => $this->input->post('album_title'),
					'album_image' => $album_image
				);
				$this->users_model->insertalbum($alb);
				$this->session->set_userdata('added','added');
			redirect("./User/admingallery/","refresh"); 
			} else {
				$this->session->set_userdata('invalid','invalid');
				redirect("./User/addalbum/","refresh");
			}
		}
	}
	public function updatealbum(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$id = $_POST['edit_id'];
			$config['allowed_types'] = 'jpg|png';
			$config['upload_path'] = './uploads/';
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			if (!empty($_FILES['album_image']['name']) ){
				if ($this->upload->do_upload('album_image')) {
					$album_image = $this->upload->data('file_name');
					$alb = array(
						'album_title' => $this->input->post('album_title'),
						'album_image' => $album_image
					);
					$this->users_model->update_album($id,$alb);
					$this->session->set_userdata('updated','updated');
					redirect("./User/admingallery/","refresh"); 
				}
				else{
					$this->session->set_userdata('invalid','invalid');
					$id = $_POST['edit_id'];
					$data["album"] = $this->users_model->get_album_edit($id);
					$this->load->view('editalbum',$data);
				}
			} else {
				$alb = array(
					'album_title' => $this->input->post('album_title'),
				);
				$this->users_model->update_album($id,$alb);
				$this->session->set_userdata('updated','updated');
				redirect("./User/admingallery/","refresh"); 
			}
		}	
	}
	public function events(){
		$data['event'] = $this->users_model->getevent();
		$this->load->view('events',$data);
	}
	public function careerform(){
		$this->load->view('careerform');
	}
	public function login(){
        $this->load->model('Users_model');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password') ?? '');
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation'); 
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run()){
            if($this->users_model->check_login($username,$password)){
				$result=$this->users_model->fetchrole($username)->row();
				$role=$result->role;
				$this->session->set_userdata('role',$role);
				$this->session->set_userdata('username',$username);
				redirect("./User/dashboard/","refresh");
            } else {
				$this->session->set_userdata('invalid','invalid');
                $this->adminlogin();
            }
        } else {
            $this->adminlogin();
        }
    }
	
	public function inquiryform(){
        $this->load->model('Users_model');
        $fullname = $this->input->post('fullname');
        $emailaddress = $this->input->post('emailaddress');
		$subject = $this->input->post('subject');
		$mess = $this->input->post('message');
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('fullname', 'Full Name', 'required');
        $this->form_validation->set_rules('emailaddress', 'Email Address', 'required|valid_email');
		$this->form_validation->set_rules('subject', 'Subject', 'required');
		$this->form_validation->set_rules('message', 'Message', 'required');
		$inq['Name'] = $fullname;
		$inq['Email'] = $emailaddress;
		$inq['Subject'] = $subject;
		$inq['message'] = $mess;
		$inq['status'] = 'Not Addressed';
		$ticket = sprintf("%'.09d\n", mt_rand(1,999999999999));
		if($this->Users_model->checkticket($ticket) == true){
			$ticket = sprintf("%'.09d\n", mt_rand(1,999999999999));
		}
		$inq['ticket'] = $ticket;
		if($this->form_validation->run()){
			$this->users_model->insertinquiry($inq);
			$message = file_get_contents('contactemail.html'); 
			$message = str_replace('%name%', $fullname, $message); 
			$message = str_replace('%email%', $emailaddress, $message); 
			$message = str_replace('%subject%', $subject, $message);  
			$message = str_replace('%mess%', $mess, $message); 
			$message = str_replace('%ticket%', $ticket, $message);  
			require_once('vendor/autoload.php');
			require_once('class-db.php');
			$mail = new PHPMailer();
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->Port = 465;
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
			$mail->SMTPAuth = true;
			$mail->AuthType = 'XOAUTH2';
			$email = 'group5test2022@gmail.com'; // the email used to register google app
			$clientId = '805520363839-hdfrnorn6o2hh22hikpdn54v65bnrtfk.apps.googleusercontent.com';
			$clientSecret = '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';
			$db = new DB();
			$refreshToken = $db->get_refersh_token();
			$provider = new Google(
				[
				'clientId' => $clientId,
				'clientSecret' => $clientSecret,
				]
				);
				//Pass the OAuth provider instance to PHPMailer
				$mail->setOAuth(
				new OAuth(
				[
				'provider' => $provider,
				'clientId' => $clientId,
				'clientSecret' => $clientSecret,
				'refreshToken' => $refreshToken,
				'userName' => $email,
				]
				)
				);
			
			$mail->setFrom($email, 'Test');
			$mail->addAddress($emailaddress, 'TestTest');
			$mail->isHTML(true);
			$mail->Subject = 'OADR Inquiry Form';
			$mail->Body = $message;
			if (!$mail->send()) {
				echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
				$this->session->set_userdata('sent','sent');
				redirect("./User/contact/","refresh"); ; 
			}
		} else {
			$this->contact();
		}
    }
	public function add_user(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->model('Users_model');
			$adminName = $this->input->post('adminName');
			$adminUsername = $this->input->post('adminUsername');
			$adminPassword = $this->input->post('adminPassword');
			$adminconfirmpass = $this->input->post('adminconfirmpass');
			$adminrole = $this->input->post('adminrole');
			$adminnumber = $this->input->post('adminnumber');
			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules('adminName', 'Admin Name', 'required');
			$this->form_validation->set_rules('adminUsername', 'Admin Username', 'required|is_unique[admin.UserName]');
			$this->form_validation->set_rules('adminnumber', 'Admin Phone Number', 'required|numeric');
			$this->form_validation->set_rules('adminPassword', 'Admin Password', 'required');
			$this->form_validation->set_rules('adminconfirmpass', 'Admin Confirm Password', 'required|matches[adminPassword]');
			$this->form_validation->set_rules('adminrole', 'Admin Role', 'required');
			$add['AdminName'] = $adminName;
			$add['UserName'] = $adminUsername;
			$add['MobileNumber'] = $adminnumber;
			$add['Password'] = md5($adminPassword);
			$add['role'] = $adminrole;
			if($this->form_validation->run()){
				$this->users_model->insertuser($add);
				$this->session->set_userdata('added','added');
				redirect("./User/adminusers/","refresh"); 
				
			} else {
				$this->adduser();
			}
		}
    }
	public function editaccount(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->model('Users_model');
			$nameadmin = $this->input->post('nameadmin');
			$usernameadmin = $this->input->post('usernameadmin');
			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nameadmin', 'Admin Name', 'required');
			$this->form_validation->set_rules('usernameadmin', 'Admin Username', 'required|is_unique[admin.UserName]');
			if($this->form_validation->run()){
				if($this->users_model->check_login($username,$password)){
					redirect("./User/dashboard/","refresh");
					$this->session->set_flashdata('username',$username);
				} else {
					echo "<script>alert('Invalid Username or Password');</script>";
					$this->adminlogin();
				}
			} else {
				$this->adminlogin();
			}
		}
    }
	public function viewinquiry(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->model('Users_model');
			$ticket = $this->uri->segment(3);
			$data['inquiries'] = $this->users_model->fetchrowinquiry(intval($ticket));
			$this->load->view('viewinquiry',$data);
		}
	}
	public function addressstatus(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->model('Users_model');
			$ticket = $this->uri->segment(3);
			$data = array(
				'status'=>'Addressed',
			);
			$data = array_filter($data);
			$this->Users_model->updatestatus(intval($ticket),$data);
			$this->session->set_userdata('addressed','addressed');
			redirect("./User/admininquiries/","refresh");
		}
	}
	public function notaddressstatus(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->model('Users_model');
			$ticket = $this->uri->segment(3);
			$data = array(
				'status'=>'Not Addressed',
			);
			$data = array_filter($data);
			$this->Users_model->updatestatus(intval($ticket),$data);
			$this->session->set_userdata('notaddressed','notaddressed');
			redirect("./User/admininquiries/","refresh"); 
		}
	}
	public function addcat(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->model('Users_model');
			$catname = $this->input->post('catname');
			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules('catname', 'Category', 'required');
			if($this->form_validation->run()){
					$alb = array(
						'categoryname' => $catname,
					);
					$this->users_model->insert_cat($alb);
					$this->session->set_userdata('added','added');
					redirect("./User/admincatresources/","refresh"); 
			} else {
				$this->addcategory();
			}
		}
    }
	public function editcat(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->model('Users_model');
			$cat = $this->uri->segment(3);
			$data['cat'] = $this->users_model->fetchcat(intval($cat));
			$this->load->view('editcategory',$data);
		}
	}
	public function addresourcefile(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->model('Users_model');
			$catname = $this->input->post('catname');
			$this->form_validation->set_rules('reply', 'Reply', 'required');
			if($this->form_validation->run()){
					$alb = array(
						'categoryname' => $catname,
					);
					$this->users_model->insert_cat($id,$alb);
					redirect("./User/admincatresources/","refresh"); 
			} else {
				$this->addcategory();
			}
		}
    }
	public function sendreply(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$reply = $this->input->post('reply');
			$emaill = $this->input->post('email');
			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules('reply', 'Reply', 'required');
			if($this->form_validation->run()){
				$message = file_get_contents('reply.html'); 
				$message = str_replace('%reply%', $reply, $message); 
				
				require_once('vendor/autoload.php');
				require_once('class-db.php');
				$mail = new PHPMailer();
				$mail->isSMTP();
				$mail->Host = 'smtp.gmail.com';
				$mail->Port = 465;
				$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
				$mail->SMTPAuth = true;
				$mail->AuthType = 'XOAUTH2';
				$email = 'group5test2022@gmail.com'; // the email used to register google app
			$clientId = '805520363839-hdfrnorn6o2hh22hikpdn54v65bnrtfk.apps.googleusercontent.com';
			$clientSecret = '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';
				$db = new DB();
				$refreshToken = $db->get_refersh_token();
				$provider = new Google(
					[
					'clientId' => $clientId,
					'clientSecret' => $clientSecret,
					]
					);
					//Pass the OAuth provider instance to PHPMailer
					$mail->setOAuth(
					new OAuth(
					[
					'provider' => $provider,
					'clientId' => $clientId,
					'clientSecret' => $clientSecret,
					'refreshToken' => $refreshToken,
					'userName' => $email,
					]
					)
					);
				
				$mail->setFrom($email, 'Test');
				$mail->addAddress($emaill, 'TestTest');
				$mail->isHTML(true);
				$mail->Subject = 'OADR Inquiry Form';
				$mail->Body = $message;
				if (!$mail->send()) {
					echo 'Mailer Error: ' . $mail->ErrorInfo;
				} else {
					$this->session->set_userdata('sent','sent');
					redirect("./User/admininquiries/","refresh"); ; 
				}
				
			} else {
				$this->adduser();
			}
		}
	}
	public function deleteAllinquiry()
    {
        $ids = $this->input->post('ids');
        $this->db->where_in('ID', explode(",", $ids));
        $this->db->delete('inquiries');
        redirect("./User/admininquiries/","refresh"); ; 
    }
	public function deleteAllemp()
    {
        $ids = $this->input->post('ids');
        $this->db->where_in('ID', explode(",", $ids));
        $this->db->delete('employees');
        redirect("./User/employeesadmin/","refresh"); ; 
    }
	public function deleteAllcert()
    {
        $ids = $this->input->post('ids');
        $this->db->where_in('ID', explode(",", $ids));
        $this->db->delete('certifications');
        redirect("./User/employeesadmin/","refresh"); ; 
    }
	public function deleteAlljob()
    {
        $ids = $this->input->post('ids');
        $this->db->where_in('ID', explode(",", $ids));
        $this->db->delete('job');
        redirect("./User/admininquiries/","refresh"); ; 
    }
	public function deleteAllapplications()
    {
        $ids = $this->input->post('ids');
        $this->db->where_in('ID', explode(",", $ids));
        $this->db->delete('careers');
 
        redirect("./User/adminapplications/","refresh"); ; 
    }
	public function deleteAllNews()
    {
        $ids = $this->input->post('ids');
        $this->db->where_in('ID', explode(",", $ids));
        $this->db->delete('news');
        redirect("./User/newsadmin/","refresh"); ; 
    }
	public function deleteAllAnnouncement()
    {
        $ids = $this->input->post('ids');
        $this->db->where_in('ID', explode(",", $ids));
        $this->db->delete('announcements');
 
        redirect("./User/announcementsadmin/","refresh"); ; 
    }
	public function deleteAllEvent()
    {
        $ids = $this->input->post('ids');
        $this->db->where_in('ID', explode(",", $ids));
        $this->db->delete('events');
 
        redirect("./User/eventadmin/","refresh"); ; 
    }
	public function deleteAllGallery()
    {
        $ids = $this->input->post('ids');
        $this->db->where_in('ID', explode(",", $ids));
        $this->db->delete('gallery');
 
        redirect("./User/admingallery/","refresh"); ; 
    }
	public function deleteAllCat()
    {
        $ids = $this->input->post('ids');
        $this->db->where_in('ID', explode(",", $ids));
        $this->db->delete('resources_category');
 
        redirect("./User/admincatresources/","refresh"); ; 
    }
	public function deleteAllResources()
    {
        $ids = $this->input->post('ids');
        $this->db->where_in('ID', explode(",", $ids));
        $this->db->delete('resources');
 
        redirect("./User/adminresources/","refresh"); ; 
    }
	public function deleteAllUser()
    {
        $ids = $this->input->post('ids');
        $this->db->where_in('ID', explode(",", $ids));
        $this->db->delete('admin');
 
        redirect("./User/adminusers/","refresh"); ; 
    }
	public function deleteAllPlan()
    {
        $ids = $this->input->post('ids');
        $this->db->where_in('ID', explode(",", $ids));
        $this->db->delete('planbudget');
 
        redirect("./User/gadplan/","refresh"); ; 
    }
	public function deleteAllReport()
    {
        $ids = $this->input->post('ids');
        $this->db->where_in('ID', explode(",", $ids));
        $this->db->delete('accomplishmentreport');
 
        redirect("./User/gadreport/","refresh"); ; 
    }
	public function deleteallpub()
    {
        $ids = $this->input->post('ids');
        $this->db->where_in('ID', explode(",", $ids));
        $this->db->delete('publications');
 
        redirect("./User/gadplan/","refresh"); ; 
    }
	public function deleteAllavm()
    {
        $ids = $this->input->post('ids');
        $this->db->where_in('ID', explode(",", $ids));
        $this->db->delete('avm');
        redirect("./User/gadavm/","refresh"); ; 
    }
	public function deleteAllinfographics()
    {
        $ids = $this->input->post('ids');
        $this->db->where_in('ID', explode(",", $ids));
        $this->db->delete('infographics');
        redirect("./User/gadavm/","refresh"); ; 
    }
	public function deleteAllact()
    {
        $ids = $this->input->post('ids');
        $this->db->where_in('ID', explode(",", $ids));
        $this->db->delete('activities');
        redirect("./User/gadavm/","refresh"); ; 
    }
	public function deleteAllpcw()
    {
        $ids = $this->input->post('ids');
        $this->db->where_in('ID', explode(",", $ids));
        $this->db->delete('pcw');
        redirect("./User/gadavm/","refresh"); ; 
    }
	public function deleteAlltraining()
    {
        $ids = $this->input->post('ids');
        $this->db->where_in('ID', explode(",", $ids));
        $this->db->delete('training');
        redirect("./User/admintraining/","refresh"); ; 
    }
	public function addresources(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$data['cat'] = $this->users_model->resources2();
		$this->load->view('addresources',$data);
		}
		
	}
	public function updatecat(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->model('Users_model');
			$rid = $this->input->post('rID');
			$catname = $this->input->post('catname');
			$data = array(
				'categoryname' => $this->input->post('catname')
			);
			$data = array_filter($data);
			$this->form_validation->set_rules('catname', 'Category Name', 'required');
			if($this->form_validation->run()){
				if(!empty($_FILES['files']['name']) && count(array_filter($_FILES['files']['name'])) > 0){ 
					$filesCount = count($_FILES['files']['name']); 
					for($i = 0; $i < $filesCount; $i++){ 
						$_FILES['file']['name'] = $_FILES['files']['name'][$i]; 
						$_FILES['file']['type'] = $_FILES['files']['type'][$i]; 
						$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i]; 
						$_FILES['file']['error'] = $_FILES['files']['error'][$i]; 
						$_FILES['file']['size'] = $_FILES['files']['size'][$i]; 
						$config['upload_path'] = './resources/';
						$config['allowed_types'] = 'pdf'; 
						$this->load->library('upload', $config); 
						$this->upload->initialize($config);
						if($this->upload->do_upload('file')){ 
							$fileData = $this->upload->data(); 
							$filename = $fileData['file_name']."pdf";
							$uploadData[$i]['ResourcesCat'] =  $catname;
							$uploadData[$i]['ResourcesName'] = $filename; 
							$uploadData[$i]['cat_id'] = $rid; 
						}else{  
							$errorUploadType .= $_FILES['file']['name'].' | ';  
						} 
					}
					$errorUploadType = !empty($errorUploadType)?'<br/>File Type Error: '.trim($errorUploadType, ' | '):'';
					if(!empty($uploadData)){ 
						/* Insert files data into the database */
						$insert = $this->users_model->insert_res($uploadData); 
						$this->Users_model->updatecat($rid,$data);
						$this->session->set_userdata('updated','updated');
						redirect("./User/admincatresources/","refresh"); 
						/* Upload status message */
					}
				} else {
					$this->Users_model->updatecat($rid,$data);
					$this->session->set_userdata('updated','updated');
					redirect("./User/admincatresources/","refresh"); 
				}
			}
		}
		
	}

	public function search(){
		$searchdata = $this->input->post('searchdata');
		$data['searchdata'] = $searchdata;
		$data['news'] = $this->users_model->search_news($searchdata);
		$data['announcements'] = $this->users_model->search_announcements($searchdata);
		$data['events'] = $this->users_model->search_events($searchdata);
		$this->load->view('searchresult',$data);
	
	}
	public function logout()
    {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role');
        $this->session->set_userdata('logout','logout');
		redirect("./User/adminlogin/","refresh"); 
    }
	public function gender(){
		$this->load->model('Users_model');
		$data['plan'] = $this->users_model->getgadplan();
		$data['report'] = $this->users_model->getgadreport();
		$data['pub'] = $this->users_model->getgadpub();
		$data['avm'] = $this->users_model->getgadavm();
		$data['info'] = $this->users_model->getgadinfo();
		$data['pcw'] = $this->users_model->getgadpcw();
		$data['act'] = $this->users_model->getgadact();
		$this->load->view('gender', $data);
	}

	public function gadplan(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$data['plan'] = $this->users_model->getgadplan();
			$this->load->view('gadplan', $data);
		}
	}

	public function addgadplan(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->view('addgadplan');
		}
	}

	public function submitgadplan(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$config['allowed_types'] = 'pdf';
			$config['upload_path'] = './uploads/';
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('plan_file')) {
				$plan_file = $this->upload->data('file_name');
				$plan = array(
					'plan_title' => $this->input->post('plan_title'),
					'plan_file' => $plan_file
				);
				$this->users_model->insertgadplan($plan);
				$this->session->set_userdata('added','added');
			redirect("./User/gadplan/","refresh"); 
			} else {
				$this->session->set_userdata('invalid','invalid');
				redirect("./User/addgadplan/","refresh");
			}
		}
	}

	public function editgadplan(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$id = $_POST['edit_id'];
			$data["plan"] = $this->users_model->get_gadplan_edit($id);
			$this->load->view('editgadplan',$data);
		}
	}

	public function updategadplan(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$id = $_POST['edit_id'];
			$config['allowed_types'] = 'pdf';
			$config['upload_path'] = './uploads/';
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			if (!empty($_FILES['plan_file']['name']) ){
				if ($this->upload->do_upload('plan_file')) {
					$plan_file = $this->upload->data('file_name');
					$plan = array(
						'plan_title' => $this->input->post('plan_title'),
						'plan_file' => $plan_file
					);
					$this->users_model->update_gadplan($id,$plan);
					$this->session->set_userdata('updated','updated');
					redirect("./User/gadplan/","refresh"); 
				}
				else{
					$this->session->set_userdata('invalid','invalid');
					$id = $_POST['edit_id'];
					$data["plan"] = $this->users_model->get_gadplan_edit($id);
					$this->load->view('editgadplan',$data);
				}
			} else {
				$plan = array(
					'plan_title' => $this->input->post('plan_title'),
				);
				$this->users_model->update_gadplan($id,$plan);
				$this->session->set_userdata('updated','updated');
				redirect("./User/gadplan/","refresh"); 
			}
		}	
	}

	public function gadreport(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$data['report'] = $this->users_model->getgadreport();
			$this->load->view('gadreport', $data);
		}
	}

	public function addgadreport(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->view('addgadreport');
		}
	}

	public function submitgadreport(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$config['allowed_types'] = 'pdf';
			$config['upload_path'] = './uploads/';
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('report_file')) {
				$report_file = $this->upload->data('file_name');
				$plan = array(
					'report_title' => $this->input->post('report_title'),
					'report_file' => $report_file
				);
				$this->users_model->insertgadreport($plan);
				$this->session->set_userdata('added','added');
			redirect("./User/gadreport/","refresh"); 
			} else {
				$this->session->set_userdata('invalid','invalid');
				redirect("./User/addgadreport/","refresh");
			}
		}
	}

	public function editgadreport(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$id = $_POST['edit_id'];
			$data["report"] = $this->users_model->get_gadreport_edit($id);
			$this->load->view('editgadreport',$data);
		}
	}

	public function updategadreport(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$id = $_POST['edit_id'];
			$config['allowed_types'] = 'pdf';
			$config['upload_path'] = './uploads/';
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			if (!empty($_FILES['report_file']['name']) ){
				if ($this->upload->do_upload('report_file')) {
					$report_file = $this->upload->data('file_name');
					$report = array(
						'report_title' => $this->input->post	('report_title'),
						'report_file' => $report_file
					);
					$this->users_model->update_gadreport($id,$report);
					$this->session->set_userdata('updated','updated');
					redirect("./User/gadreport/","refresh"); 
				}
				else{
					$this->session->set_userdata('invalid','invalid');
					$id = $_POST['edit_id'];
					$data["report"] = $this->users_model->get_gadreport_edit($id);
					$this->load->view('editgadreport',$data);
				}
			} else {
				$report = array(
					'report_title' => $this->input->post('report_title'),
				);
				$this->users_model->update_gadreport($id,$report);
				$this->session->set_userdata('updated','updated');
				redirect("./User/gadreport/","refresh"); 
			}
		}	
	}
	public function gadpublications(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$data['pub'] = $this->users_model->publications();
			$this->load->view('gadpublications', $data);
		}
	}
	public function addgadpublication(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->view('addgadpublication');
		}
	}
	public function submitgadpublication(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$config['allowed_types'] = 'pdf';
			$config['upload_path'] = './uploads/';
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('pub_file')) {
				$pub_file = $this->upload->data('file_name');
				$plan = array(
					'pub_title' => $this->input->post('pub_title'),
					'pub_file' => $pub_file
				);
				$this->users_model->insertgadpublication($plan);
				$this->session->set_userdata('added','added');
			redirect("./User/gadpublications/","refresh"); 
			} else {
				$this->session->set_userdata('invalid','invalid');
				redirect("./User/gadpublications/","refresh");
			}
		}
	}
	public function editgadpublication(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$id = $_POST['edit_id'];
			$data["pub"] = $this->users_model->get_gadpublication_edit($id);
			$this->load->view('editgadpublication',$data);
		}
	}
	public function updategadpublication(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$id = $_POST['edit_id'];
			$config['allowed_types'] = 'pdf';
			$config['upload_path'] = './uploads/';
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			if (!empty($_FILES['report_file']['name']) ){
				if ($this->upload->do_upload('pub_file')) {
					$pub_file = $this->upload->data('file_name');
					$report = array(
						'pub_title' => $this->input->post('pub_title'),
						'pub_file' => $pub_file
					);
					$this->users_model->update_gadpublication($id,$report);
					$this->session->set_userdata('updated','updated');
					redirect("./User/gadpublications/","refresh"); 
				}
				else{
					$this->session->set_userdata('invalid','invalid');
					$id = $_POST['edit_id'];
					$data["report"] = $this->users_model->get_gadpublication_edit($id);
					$this->load->view('gadpublications',$data);
				}
			} else {
				$report = array(
					'pub_title' => $this->input->post('pub_title'),
				);
				$this->users_model->update_gadpublication($id,$report);
				$this->session->set_userdata('updated','updated');
				redirect("./User/gadpublications/","refresh"); 
			}
		}	
	}
	public function gadavm(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$data['avm'] = $this->users_model->avm();
			$this->load->view('gadavm', $data);
		}
	}
	public function addgadavm(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->view('addgadavm');
		}
	}
	public function submitgadavm(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$plan = array(
				'vid_title' => $this->input->post('vid_title'),
				'vid_link' =>  $this->input->post('vid_link'),
			);
			$this->users_model->insertgadavm($plan);
			$this->session->set_userdata('added','added');
			redirect("./User/gadavm/","refresh"); 
		}
	}
	public function editgadavm(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$id = $_POST['edit_id'];
			$data["avm"] = $this->users_model->get_gadavm_edit($id);
			$this->load->view('editgadavm',$data);
		}
	}
	public function updategadavm(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$id = $_POST['edit_id'];
			$report = array(
				'vid_title' => $this->input->post('vid_title'),
				'vid_link' => $this->input->post('vid_link'),
			);
			$this->users_model->update_gadavm($id,$report);
			$this->session->set_userdata('updated','updated');
			redirect("./User/gadavm/","refresh"); 
		}	
	}
	public function gadinfographics(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$data['info'] = $this->users_model->infographics();
			$this->load->view('gadinfographics', $data);
		}
	}
	public function addgadinfographics(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->view('addgadinfographics');
		}
	}
	public function submitgadinfographics(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$config['allowed_types'] = 'jpg|png';
			$config['upload_path'] = './uploads/';
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('img_file')) {
				$img_file = $this->upload->data('file_name');
				$plan = array(
					'img_title' => $this->input->post('img_title'),
					'img_file' => $img_file
				);
				$this->users_model->insertgadinfographics($plan);
				$this->session->set_userdata('added','added');
			redirect("./User/gadinfographics/","refresh"); 
			} else {
				$this->session->set_userdata('invalid','invalid');
				redirect("./User/gadinfographics/","refresh");
			}
		}
	}
	public function editgadinfographics(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$id = $_POST['edit_id'];
			$data["info"] = $this->users_model->get_gadinfographics_edit($id);
			$this->load->view('editgadinfographics',$data);
		}
	}
	public function updategadinfographics(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$id = $_POST['edit_id'];
			$config['allowed_types'] = 'jpg|png';
			$config['upload_path'] = './uploads/';
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			if (!empty($_FILES['img_file']['name']) ){
				if ($this->upload->do_upload('pub_file')) {
					$img_file = $this->upload->data('file_name');
					$report = array(
						'img_title' => $this->input->post('img_title'),
						'img_file' => $img_file
					);
					$this->users_model->update_gadinfographics($id,$report);
					$this->session->set_userdata('updated','updated');
					redirect("./User/gadinfographics/","refresh"); 
				}
				else{
					$this->session->set_userdata('invalid','invalid');
					$id = $_POST['edit_id'];
					$data["report"] = $this->users_model->get_gadinfographics_edit($id);
					$this->load->view('gadinfographics',$data);
				}
			} else {
				$report = array(
					'img_title' => $this->input->post('img_title'),
				);
				$this->users_model->update_gadinfographics($id,$report);
				$this->session->set_userdata('updated','updated');
				redirect("./User/gadinfographics/","refresh"); 
			}
		}	
	}
	public function gadpcw(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$data['pcw'] = $this->users_model->pcw();
			$this->load->view('gadpcw', $data);
		}
	}
	public function addgadpcw(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->view('addgadpcw');
		}
	}
	public function submitgadpcw(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$config['allowed_types'] = 'pdf';
			$config['upload_path'] = './uploads/';
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('pcw_file')) {
				$pcw_file = $this->upload->data('file_name');
				$plan = array(
					'pcw_title' => $this->input->post('pcw_title'),
					'pcw_file' => $pcw_file
				);
				$this->users_model->insertgadpcw($plan);
				$this->session->set_userdata('added','added');
			redirect("./User/gadpcw/","refresh"); 
			} else {
				$this->session->set_userdata('invalid','invalid');
				redirect("./User/gadpcw/","refresh");
			}
		}
	}
	public function editgadpcw(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$id = $_POST['edit_id'];
			$data["pcw"] = $this->users_model->get_gadpcw_edit($id);
			$this->load->view('editgadpcw',$data);
		}
	}
	public function updategadpcw(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$id = $_POST['edit_id'];
			$config['allowed_types'] = 'pdf';
			$config['upload_path'] = './uploads/';
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			if (!empty($_FILES['pcw_file']['name']) ){
				if ($this->upload->do_upload('pub_file')) {
					$pcw_file = $this->upload->data('file_name');
					$report = array(
						'pcw_title' => $this->input->post('pcw_title'),
						'pcw_file' => $pub_file
					);
					$this->users_model->update_gadpcw($id,$report);
					$this->session->set_userdata('updated','updated');
					redirect("./User/gadpcw/","refresh"); 
				}
				else{
					$this->session->set_userdata('invalid','invalid');
					$id = $_POST['edit_id'];
					$data["report"] = $this->users_model->get_gadpcw_edit($id);
					$this->load->view('gadpcw',$data);
				}
			} else {
				$report = array(
					'pcw_title' => $this->input->post('pcw_title'),
				);
				$this->users_model->update_gadpcw($id,$report);
				$this->session->set_userdata('updated','updated');
				redirect("./User/gadpcw/","refresh"); 
			}
		}	
	}
	public function gadactivities(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$data['act'] = $this->users_model->act();
			$this->load->view('gadactivities', $data);
		}
	}
	public function addgadact(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->view('addgadact');
		}
	}
	public function submitgadact(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$config['allowed_types'] = 'jpg|png';
			$config['upload_path'] = './uploads/';
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('img_file')) {
				$img_file = $this->upload->data('file_name');
				$plan = array(
					'act_title' => $this->input->post('act_title'),
					'act_overview' => $this->input->post('act_overview'),
					'act_file' => $img_file
				);
				$this->users_model->insertgadact($plan);
				$this->session->set_userdata('added','added');
			redirect("./User/gadactivities/","refresh");  
			} else {
				$this->session->set_userdata('invalid','invalid');
				redirect("./User/gadactivities/","refresh");
			}
		}
	}
	public function admintraining(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$data['tpd'] = $this->users_model->gettraining();
			$this->load->view('admintraining',$data);
		}
		
	}
	public function addtraining(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->view('addtraining');
		}
	}
	public function submittraining(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$tpd = array(
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'start_date' => $this->input->post('start_date'),
				'end_date' => $this->input->post('end_date')
			);
			$this->users_model->inserttraining($tpd);
			$this->session->set_userdata('added','added');
			redirect("./User/admintraining/","refresh"); 
		}
	}
	public function edittraining(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$id = $_POST['edit_id'];
			$data["tpd"] = $this->users_model->get_training_edit($id);
			$this->load->view('edittraining',$data);
		}
	}
	public function updatetraining(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$id = $_POST['edit_id'];
			$eve = array(
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'start_date' => $this->input->post('start_date'),
				'end_date' => $this->input->post('end_date')
			);
			$this->users_model->update_training($id,$eve);
			$this->session->set_userdata('updated','updated');
			redirect("./User/admintraining/","refresh"); 
		}
	}

	public function tpd(){
		$data['training'] = $this->users_model->gettpd(); 
		$this->load->view('tpd', $data);
	}
	public function editgadact(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$id = $_POST['edit_id'];
			$data["act"] = $this->users_model->get_gadact_edit($id);
			$this->load->view('editgadact',$data);
		}
	}
	public function updategadact(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$id = $_POST['edit_id'];
			$config['allowed_types'] = 'jpg|png';
			$config['upload_path'] = './uploads/';
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			if (!empty($_FILES['act_file']['name']) ){
				if ($this->upload->do_upload('act_file')) {
					$img_file = $this->upload->data('file_name');
					$report = array(
						'act_title' => $this->input->post('act_title'),
						'act_overview' => $this->input->post('act_overview'),
						'act_file' => $img_file
					);
					$this->users_model->update_gadact($id,$report);
					$this->session->set_userdata('updated','updated');
					redirect("./User/gadactivities/","refresh"); 
				}
				else{
					$this->session->set_userdata('invalid','invalid');
					$id = $_POST['edit_id'];
					$data["act"] = $this->users_model->get_gadact_edit($id);
					$this->load->view('gadactivities',$data);
				}
			} else {
				$report = array(
					'act_title' => $this->input->post('act_title'),
					'act_overview' => $this->input->post('act_overview'),
				);
				$this->users_model->update_gadact($id,$report);
				$this->session->set_userdata('updated','updated');
				redirect("./User/gadactivities/","refresh"); 
			}
		}	
	}
	public function addjob(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->view('addjob');
		}
	}
	public function addjobop(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->model('Users_model');
			$postitle = $this->input->post('position_title');
			$plantilla = $this->input->post('plantilla');
			$paygrade = $this->input->post('paygrade');
			$salary = $this->input->post('salary');
			$education = $this->input->post('education');
			$training = $this->input->post('training');
			$experience = $this->input->post('experience');
			$eligibility = $this->input->post('eligibility');
			$competency = $this->input->post('competency');
			$place = $this->input->post('place');
			$add['position_title'] = $postitle;
			$add['plantilla'] = $plantilla;
			$add['paygrade'] = $paygrade;
			$add['salary'] = $salary;
			$add['education'] = $education;
			$add['training'] = $training;
			$add['experience'] = $experience;
			$add['eligibility'] = $eligibility;
			$add['competency'] = $competency;
			$add['place'] = $place;
			$this->users_model->insertjob($add);
			$this->session->set_userdata('added','added');
			redirect("./User/adminapplications/","refresh"); 
		}
    }
	public function editjob(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$id = $_POST['edit_id'];
			$data["job"] = $this->users_model->get_job_edit($id);
			$this->load->view('editjob',$data);
		}
	}
	public function updatejob(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		}
		else {
			$id = $_POST['edit_id'];
			$eve = array(
				'position_title' => $this->input->post('position_title'),
				'plantilla' => $this->input->post('plantilla'),
				'paygrade' => $this->input->post('paygrade'),
				'salary' => $this->input->post('salary'),
				'education' => $this->input->post('education'),
				'training' => $this->input->post('training'),
				'experience' => $this->input->post('experience'),
				'eligibility' => $this->input->post('eligibility'),
				'competency' => $this->input->post('competency'),
				'place' => $this->input->post('place')
			);
			$this->users_model->update_job($id,$eve);
			$this->session->set_userdata('updated','updated');
			redirect("./User/adminapplications/","refresh"); 
		}
	}
	public function employeesadmin(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$data['emp'] = $this->users_model->getemp();
			$this->load->view('adminemployees',$data);
		}
	}
	public function addemployee(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->view('addemployee');
		}
	}
	public function submitemp(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$config['allowed_types'] = 'jpg|png';
			$config['upload_path'] = './uploads/';
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('image')) {
				$image = $this->upload->data('file_name');
				$new = array(
					'name' => $this->input->post('name'),
					'place' => $this->input->post('place'),
					'email' => $this->input->post('email'),
					'position' => $this->input->post('position'),
					'image' => $image
				);
				$this->users_model->insertemp($new);
				$this->session->set_userdata('added','added');
				redirect("./User/employeesadmin/","refresh"); 
			} else {
				$this->session->set_userdata('invalid','invalid');
				redirect("./User/employeesadmin/","refresh");
			}
			
		}
	}
	public function editemployee(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$id = $_POST['edit_id'];
			$data["emp"] = $this->users_model->get_emp_edit($id);
			$this->load->view('editemployee',$data);
		}
	}
	public function updateemployee(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$id = $_POST['edit_id'];
			$config['allowed_types'] = 'jpg|png';
			$config['upload_path'] = './uploads/';
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			if (!empty($_FILES['image']['name'])){
				if ($this->upload->do_upload('image')) {
					$image = $this->upload->data('file_name');
					$ann = array(
						'name' => $this->input->post('name'),
						'place' => $this->input->post('place'),
						'email' => $this->input->post('email'),
						'position' => $this->input->post('position'),
						'image' => $image
					);
					$this->users_model->update_employee($id,$ann);
					$this->session->set_userdata('updated','updated');
					redirect("./User/employeesadmin/","refresh"); 
				}
				else{
					$this->session->set_userdata('invalid','invalid');
					$id = $_POST['edit_id'];
					$data["emp"] = $this->users_model->get_emp_edit($id);
					$this->load->view('editemployee',$data);
				}
			} else {
				$ann = array(
					'name' => $this->input->post('name'),
					'place' => $this->input->post('place'),
					'email' => $this->input->post('email'),
					'position' => $this->input->post('position'),
				);
				$this->users_model->update_employee($id,$ann);
				$this->session->set_userdata('updated','updated');
				redirect("./User/employeesadmin/","refresh"); 
			}
		}
	}
	public function admincert(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$data['cert'] = $this->users_model->getcert();
			$this->load->view('admincert',$data);
		}
	}
	public function addcert(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->view('addcert');
		}
	}
	public function submitcert(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$config['allowed_types'] = 'jpg|png';
			$config['upload_path'] = './uploads/';
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('image')) {
				$image = $this->upload->data('file_name');
				$new = array(
					'name' => $this->input->post('name'),
					'image' => $image
				);
				$this->users_model->insertncert($new);
				$this->session->set_userdata('added','added');
				redirect("./User/admincert/","refresh"); 
			} else {
				$this->session->set_userdata('invalid','invalid');
				redirect("./User/admincert/","refresh");
			}
			
		}
	}
	public function editcert(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$id = $_POST['edit_id'];
			$data["cert"] = $this->users_model->get_cert_edit($id);
			$this->load->view('editcert',$data);
		}
	}
	public function updatecert(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$id = $_POST['edit_id'];
			$config['allowed_types'] = 'jpg|png';
			$config['upload_path'] = './uploads/';
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			if (!empty($_FILES['image']['name'])){
				if ($this->upload->do_upload('image')) {
					$image = $this->upload->data('file_name');
					$ann = array(
						'name' => $this->input->post('name'),
						'image' => $image
					);
					$this->users_model->update_cert($id,$ann);
					$this->session->set_userdata('updated','updated');
					redirect("./User/admincert/","refresh"); 
				}
				else{
					$this->session->set_userdata('invalid','invalid');
					$id = $_POST['edit_id'];
					$data["cert"] = $this->users_model->get_cert_edit($id);
					$this->load->view('editcert',$data);
				}
			} else {
				$ann = array(
					'name' => $this->input->post('name'),
				);
				$this->users_model->update_cert($id,$ann);
				$this->session->set_userdata('updated','updated');
				redirect("./User/admincert/","refresh"); 
			}
		}
	}
}

