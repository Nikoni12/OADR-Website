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
		$this->load->view('home',$data);
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
			$data['app'] = $this->users_model->applications();
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
					'news_content' => $this->input->post('news_content'),
					'news_image' => $news_image
				);
				$this->users_model->insertnews($new);
				$this->session->set_userdata('added','added');
				redirect("./User/newsadmin/","refresh"); 
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
			if ($this->upload->do_upload('news_image')) {
				$news_image = $this->upload->data('file_name');
				$new = array(
					'news_title' => $this->input->post('news_title'),
					'news_content' => $this->input->post('news_content'),
					'news_image' => $news_image
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
					'event_end' => $this->input->post('event_end'),
					'date_added' => $this->input->post('date_added')
				);
				$this->users_model->insertevent($eve);
				$this->session->set_userdata('added','added');
				redirect("./User/eventadmin/","refresh"); 
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
			if ($this->upload->do_upload('album_image')) {
				$album_image = $this->upload->data('file_name');
				$alb = array(
					'album_title' => $this->input->post('album_title'),
					'album_image' => $album_image
				);
				$this->users_model->update_album($id,$alb);
				
			}
			$this->session->set_userdata('updated','updated');
			redirect("./User/admingallery/","refresh"); 
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
        $password = md5($this->input->post('password'));
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run()){
            if($this->users_model->check_login($username,$password)){
				$this->session->set_userdata('username',$username);
				redirect("./User/dashboard/","refresh");
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
        $emaill = $this->input->post('email');
		$pnum = $this->input->post('pnum');
		$category = $this->input->post('category');
		$mess = $this->input->post('message');
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required|alpha');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('pnum', 'Phone Number', 'required|numeric');
		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('message', 'Message', 'required');
		$app['Name'] = $name;
		$app['Email'] = $emaill;
		$app['PhoneNum'] = $pnum;
		$app['Category'] = $category;
		$app['status'] = 'Not Addressed';
		$app['Message'] = $mess;
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
			$config1['encrypt_name'] = true;
			$this->load->library('upload'); 
			$this->upload->initialize($config1);
			if (!$this->upload->do_upload('resume')) {
				$this->session->set_userdata('invalid','invalid');
				redirect("./User/careerform/","refresh");
			} else {
				$this->load->model('users_model');
				$name = $this->input->post('name');
				$file = $this->upload->data();
				$filename = $file['file_name'];
				$filepass = array('resume_name' => $filename);
				$this->users_model->insertcareer2($name, $filepass);
				$message = file_get_contents('careersemail.html'); 
				$message = str_replace('%name%', $name, $message); 
				$message = str_replace('%email%', $emaill, $message); 
				$message = str_replace('%phone%', $pnum, $message); 
				$message = str_replace('%cat%', $category, $message); 
				$message = str_replace('%mess%', $mess, $message); 
				$message = str_replace('%appnum%', $appnum, $message);  
				require_once('vendor/autoload.php');
				require_once('class-db.php');
				$mail = new PHPMailer();
				$mail->isSMTP();
				$mail->Host = 'smtp.gmail.com';
				$mail->Port = 465;
				$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
				$mail->SMTPAuth = true;
				$mail->AuthType = 'XOAUTH2';
								$email = 'cobratest27@gmail.com'; // the email used to register google app
				$clientId = '139785739245-92557ppd1hbf9h25jek90rp2fju0futs.apps.googleusercontent.com';
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
				$mail->Subject = 'OADR Application Form';
				$mail->Body = $message;
				if (!$mail->send()) {
					echo 'Mailer Error: ' . $mail->ErrorInfo;
				} else {
					$this->session->set_userdata('sent','sent');
					redirect("./User/careerform/","refresh"); 
				}
				
			}
		} else {
			$this->careerform();
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
        $this->form_validation->set_rules('fullname', 'Full Name', 'required|alpha');
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
							$email = 'cobratest27@gmail.com'; // the email used to register google app
			$clientId = '139785739245-92557ppd1hbf9h25jek90rp2fju0futs.apps.googleusercontent.com';
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
	public function viewapplication(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->model('Users_model');
			$appnum = $this->uri->segment(3);
			$data['applications'] = $this->users_model->fetchapplication(intval($appnum));
			$this->load->view('viewapplication',$data);
		}
	}
	public function acceptapp(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->model('Users_model');
			$appnum = $this->uri->segment(3);
			$data = array(
				'status'=>'Accepted',
			);
			$data = array_filter($data);
			$this->Users_model->updateapplication(intval($appnum),$data);
			$result=$this->Users_model->fetchemail(intval($appnum))->row();
			$emaill=$result->Email;
			$message = file_get_contents('accepted.html');
			require_once('vendor/autoload.php');
			require_once('class-db.php');
			$mail = new PHPMailer();
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->Port = 465;
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
			$mail->SMTPAuth = true;
			$mail->AuthType = 'XOAUTH2';
			$email = 'cobratest27@gmail.com'; // the email used to register google app
			$clientId = '139785739245-92557ppd1hbf9h25jek90rp2fju0futs.apps.googleusercontent.com';
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
			$mail->Subject = 'OADR Application Status';
			$mail->Body = $message;
			if (!$mail->send()) {
				echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
				$this->session->set_userdata('accepted','accepted');
				redirect("./User/adminapplications/","refresh"); 
			}
		}	
	}
	public function rejectapp(){
		if(!$this->session->userdata('username')){ 
			$this->load->view('administrator-panel-login');
		} else {
			$this->load->model('Users_model');
			$appnum = $this->uri->segment(3);
			$data = array(
				'status'=>'Rejected',
			);
			$data = array_filter($data);
			$this->Users_model->updateapplication(intval($appnum),$data);
			$result=$this->Users_model->fetchemail(intval($appnum))->row();
			$emaill=$result->Email;
			$message = file_get_contents('rejected.html');
			require_once('vendor/autoload.php');
			require_once('class-db.php');
			$mail = new PHPMailer();
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->Port = 465;
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
			$mail->SMTPAuth = true;
			$mail->AuthType = 'XOAUTH2';
			$email = 'cobratest27@gmail.com'; // the email used to register google app
			$clientId = '139785739245-92557ppd1hbf9h25jek90rp2fju0futs.apps.googleusercontent.com';
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
			$mail->Subject = 'OADR Application Status';
			$mail->Body = $message;
			if (!$mail->send()) {
				echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
				$this->session->set_userdata('rejected','rejected');
				redirect("./User/adminapplications/","refresh"); 
			}
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
								$email = 'cobratest27@gmail.com'; // the email used to register google app
				$clientId = '139785739245-92557ppd1hbf9h25jek90rp2fju0futs.apps.googleusercontent.com';
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
			}
		}
		}
		
	}
	public function logout()
    {
		$this->session->unset_userdata('username');
        $this->session->set_userdata('logout','logout');
		redirect("./User/adminlogin/","refresh"); 
    }
}

