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
		$data['album'] = $this->users_model->getalbum();
		$this->load->view('gallery',$data);
	}
	public function newsadmin(){
		$data['news'] = $this->users_model->getnews();
		$this->load->view('newsadmin', $data);
	}
	public function announcementsadmin(){
		$data['announcement'] = $this->users_model->getannouncement();
		$this->load->view('announcementsadmin', $data);
	}
	public function eventadmin(){
		$data['event'] = $this->users_model->getevent();
		$this->load->view('eventsadmin',$data);
	}
	public function adminresources(){
		$data['res'] = $this->users_model->resources();
		$this->load->view('adminresources',$data);
	}
	public function announcement(){
		$data['announcement'] = $this->users_model->getannouncement();
		$this->load->view('announcement', $data);
	}
	public function admininquiries(){
		$data['inq'] = $this->users_model->inquiries();
		$this->load->view('admininquiries', $data);
	}
	public function adminapplications(){
		$data['app'] = $this->users_model->applications();
		$this->load->view('adminapplications', $data);
	}
	public function adminusers(){
		$data['users'] = $this->users_model->view_users();
		$this->load->view('adminusers', $data);
	}
	public function admincatresources(){
		$data['cat'] = $this->users_model->resourcescat();
		$this->load->view('admincatresources', $data);
	}
	public function addnews(){
		$this->load->view('addnews');
	}
	public function submitnews(){
		$config['allowed_types'] = 'jpg|png';
		$config['upload_path'] = './uploads/';
		$config['encrypt_name'] = true;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('news_image')) {
			$news_image = $this->upload->data('file_name');
			$new = array(
				'news_title' => $this->input->post('news_title'),
				'news_content' => $this->input->post('news_content'),
				'news_image' => $news_image,
				'date_added' => $this->input->post('date_added')
			);
			$this->users_model->insertnews($new);
		}
		redirect(base_url() . 'User/newsadmin');

	}

	public function deletenews(){
		$id = $_POST['delete_id'];
		$this->users_model->delete_news($id);
		redirect(base_url() . 'User/newsadmin');
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
				'announcement_image' => $announcement_image,
				'date_added' => $this->input->post('date_added'),
			);
			$this->users_model->insertannouncement($ann);
		}
		redirect(base_url() . 'User/announcementsadmin');

	}

	public function editannouncement(){
		$id = $_POST['edit_id'];
		$data["announcement"] = $this->users_model->get_announcement_edit($id);
		$this->load->view('editannouncement',$data);
	}

	public function editnews(){
		$id = $_POST['edit_id'];
		$data["news"] = $this->users_model->get_news_edit($id);
		$this->load->view('editnews',$data);
	}

	public function editevents(){
		$id = $_POST['edit_id'];
		$data["event"] = $this->users_model->get_event_edit($id);
		$this->load->view('editevents',$data);
	}

	public function editalbum(){
		$id = $_POST['edit_id'];
		$data["album"] = $this->users_model->get_album_edit($id);
		$this->load->view('editalbum',$data);
	}

	public function updateannouncement(){
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
			redirect(base_url() . 'User/announcementsadmin');
	}

	}

	public function updatenews(){
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
			redirect(base_url() . 'User/newsadmin'); 
	}

	}

	public function updateevent(){
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
			redirect(base_url() . 'User/eventadmin');
	}

	}
	public function deleteannouncement(){
		$id = $_POST['delete_id'];
		$this->users_model->delete_announcement($id);
		redirect(base_url() . 'User/announcementsadmin');
	}
	public function addevent(){
		$this->load->view('addevent');
	}
	public function submitevent(){
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
			redirect(base_url() . 'User/eventadmin');
		}

	}

	public function deleteevent(){
		$id = $_POST['delete_id'];
		$this->users_model->delete_event($id);
		redirect(base_url() . 'User/eventadmin');
	}

	public function addcategory(){
		$this->load->view('addcategory');
	}
	public function addresources(){
		$data['cat'] = $this->users_model->resources2();
		$this->load->view('addresources',$data);
	}
	public function adduser(){
		$this->load->view('adduser');
	}
	public function edituser(){
		$this->load->view('edituser');
	}
	public function deleteuser(){
		$id = $this->uri->segment(3);
		$this->load->model('Users_model');
		$this->users_model->deleteuser(intval($id));
		redirect(base_url().'User/adminusers'); 
	}
	public function admingallery(){
		$data['album'] = $this->users_model->getalbum();
		$this->load->view('admingallery', $data);
	}
	public function adminalbum(){
		$this->load->view('adminalbum');
	}
	public function addalbum(){
		$this->load->view('addalbum');
	}
	public function submitalbum(){
		$config['allowed_types'] = 'jpg|png';
		$config['upload_path'] = './uploads/';
		$config['encrypt_name'] = true;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('album_image')) {
			$album_image = $this->upload->data('file_name');
			$alb = array(
				'album_title' => $this->input->post('album_title'),
				'album_image' => $album_image,
				'date_added' => $this->input->post('date_added')
			);
			$this->users_model->insertalbum($alb);
		}
		redirect(base_url() . 'User/admingallery');

	}

	public function updatealbum(){
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
		redirect(base_url() . 'User/admingallery');
	}

	public function deletealbum(){
		$id = $_POST['delete_id'];
		$this->users_model->delete_album($id);
		redirect(base_url() . 'User/admingallery');
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
	public function applicationform(){
        $this->load->model('Users_model');
        $name = $this->input->post('name');
        $emaill = $this->input->post('email');
		$pnum = $this->input->post('pnum');
		$category = $this->input->post('category');
		$mess = $this->input->post('message');
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('pnum', 'Phone Number', 'required');
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
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
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
        $this->form_validation->set_rules('fullname', 'Full Name', 'required');
        $this->form_validation->set_rules('emailaddress', 'Email Address', 'required');
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
				redirect("./User/contact/","refresh"); ; 
			}
		} else {
			$this->contact();
		}
    }
	public function add_user(){
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
        $this->form_validation->set_rules('adminUsername', 'Admin Username', 'required');
		$this->form_validation->set_rules('adminnumber', 'Admin Phone Number', 'required');
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
			redirect("./User/adminusers/","refresh"); 
		} else {
			$this->adduser();
		}
    }
	public function editaccount(){
        $this->load->model('Users_model');
        $nameadmin = $this->input->post('nameadmin');
        $usernameadmin = $this->input->post('usernameadmin');
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nameadmin', 'Admin Name', 'required');
        $this->form_validation->set_rules('usernameadmin', 'Admin Username', 'required');
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
	public function deleteinquiry(){
		$ticket = $this->uri->segment(3);
		$this->load->model('Users_model');
		$this->users_model->deleteaninquiry(intval($ticket));
		redirect(base_url().'User/admininquiries'); 
	}
	public function viewinquiry(){
		$this->load->model('Users_model');
		$ticket = $this->uri->segment(3);
		$data['inquiries'] = $this->users_model->fetchrowinquiry(intval($ticket));
		$this->load->view('viewinquiry',$data);
	}
	public function addressstatus(){
		$this->load->model('Users_model');
		$ticket = $this->uri->segment(3);
		$data = array(
			'status'=>'Addressed',
		 );
		 $data = array_filter($data);
		 $this->Users_model->updatestatus(intval($ticket),$data);
		 redirect(base_url().'User/admininquiries'); 
	}
	public function notaddressstatus(){
		$this->load->model('Users_model');
		$ticket = $this->uri->segment(3);
		$data = array(
			'status'=>'Not Addressed',
		 );
		 $data = array_filter($data);
		 $this->Users_model->updatestatus(intval($ticket),$data);
		 redirect(base_url().'User/admininquiries'); 
	}
	public function deleteapplication(){
		$appnum = $this->uri->segment(3);
		$this->load->model('Users_model');
		$this->users_model->deleteapplication(intval($appnum));
		redirect(base_url().'User/adminapplications'); 
	}
	public function viewapplication(){
		$this->load->model('Users_model');
		$appnum = $this->uri->segment(3);
		$data['applications'] = $this->users_model->fetchapplication(intval($appnum));
		$this->load->view('viewapplication',$data);
	}
	public function acceptapp(){
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
			redirect(base_url().'User/adminapplications');
		}
		
	}
	public function rejectapp(){
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
			redirect(base_url().'User/adminapplications');
		}
		  
	}
	public function addcat(){
        $this->load->model('Users_model');
        $catname = $this->input->post('catname');
		$config['allowed_types'] = 'jpg|png';
		$config['upload_path'] = './assets/img/';
		$config['encrypt_name'] = true;
		$this->load->helper(array('form','url'));
        $this->load->library('form_validation');
		$this->load->library('upload', $config);
		if($this->form_validation->run()){
			if ($this->upload->do_upload('album_image')) {
				$album_image = $this->upload->data('file_name');
				$alb = array(
					'categoryname' => $catname,
					'image' => $album_image
				);
				$this->users_model->insert_cat($id,$alb);
				redirect("./User/admincatresources/","refresh"); 
			}
		} else {
			$this->addcategory();
		}
		
    }
	public function editcat(){
		$this->load->model('Users_model');
		$cat = $this->uri->segment(3);
		$data['cat'] = $this->users_model->fetchcat(intval($cat));
		$this->load->view('editcategory',$data);
	}
	public function updatecat(){
		$this->load->model('Users_model');
		$rid = $this->input->post('rID');
		$this->form_validation->set_rules('catname', 'Category Name', 'required');
		$data = array(
			'categoryname' => $this->input->post('catname')
		 );
		 $data = array_filter($data);
		 $this->Users_model->updatecat($rid,$data);
		 redirect(base_url().'User/admincatresources'); 
	}
	public function deletecat(){
		$cat = $this->uri->segment(3);
		$this->load->model('Users_model');
		$this->users_model->deletecategory(intval($cat));
		redirect(base_url().'User/admincatresources'); 
	}
	public function addresourcefile(){
        $this->load->model('Users_model');
        $catname = $this->input->post('catname');
		$config['allowed_types'] = 'pdf';
		$config['upload_path'] = './resources/';
		$config['encrypt_name'] = true;
		$this->load->helper(array('form','url'));
        $this->load->library('form_validation');
		$this->load->library('upload', $config);
		if($this->form_validation->run()){
			if ($this->upload->do_upload('album_image')) {
				$album_image = $this->upload->data('file_name');
				$alb = array(
					'categoryname' => $catname,
					'image' => $album_image
				);
				$this->users_model->insert_cat($id,$alb);
				redirect("./User/admincatresources/","refresh"); 
			}
		} else {
			$this->addcategory();
		}
		
    }
	public function sendreply(){
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
				redirect("./User/admininquiries/","refresh"); ; 
			}
			
		} else {
			$this->adduser();
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
	
}