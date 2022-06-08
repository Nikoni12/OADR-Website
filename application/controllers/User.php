<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class User extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('users_model');
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');
 
        //get all users
        $this->data['users'] = $this->users_model->getAllUsers();
	}
	public function index(){
		$this->load->view('register', $this->data);
	}
 
	public function register(){
		$this->form_validation->set_rules('first_name', 'First Name', 'required|alpha');
        $this->form_validation->set_rules('middle_name', 'Middle Name', 'required|alpha');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required|alpha');
        $this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric|min_length[6]|is_unique[users.uname]' );
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required|min_length[8]|matches[password]');
        $this->form_validation->set_rules('bday', 'Birthday', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('phone', 'Contact Number', 'required|numeric');

        $this->load->library('email');
        if ($this->form_validation->run() == FALSE) { 
         	$this->load->view('register', $this->data);
		}
		else{
			$fname = $this->input->post('first_name');
			$mname = $this->input->post('middle_name');
			$lname = $this->input->post('last_name');
			$uname = $this->input->post('username');
			$birthday = $this->input->post('bday');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$phone = $this->input->post('phone');
			$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$code = substr(str_shuffle($set), 0, 12);
			$user['fname'] = $fname;
			$user['mname'] = $mname;
			$user['lname'] = $lname;
			$user['uname'] = $uname;
			$user['pass'] = $password;
			$user['birthday'] = $birthday;
			$user['email'] = $email;
			$user['contact_num'] = $phone;
			$user['code'] = $code;
			$user['active'] = false;
			$id = $this->users_model->insert($user);
			$config2 = array('upload_path' => './uploads/', 
                        'allowed_types' => 'gif|jpg|png',
                        'max_size' => 9999, 
                        'max_width' => 5000,
                        'max_height' => 5000);  
			$this->load->library('upload'); 
			$this->upload->initialize($config2);
			if (!$this->upload->do_upload('profile_pic')) {
			$error = array('error' => $this->upload->display_errors());
			echo "Error!!!!";
			} else {
           $this->load->model('users_model');
            $name = $this->input->post('first_name');
           $image = $this->upload->data();
           $imageName = $image['file_name'];
           $imagePass = array('profile_pic' => $imageName);  
           $this->users_model->insert_data2($name, $imagePass);
			}
			$config = array(
		  		'protocol' => 'smtp',
		  		'smtp_host' => 'ssl://smtp.gmail.com',
		  		'smtp_port' => 465,
				'smtp_timeout' => '60',
		  		'smtp_user' => 'teamincognitofeu@gmail.com',
		  		'smtp_pass' => 'jjsaincognit011',
		  		'mailtype' => 'html',
				'charset' => 'utf-8',
				'newline' => "\r\n",
		  		'wordwrap' => TRUE
			);
 
			$message = 	"
						<html>
                        <head>
							<title>Verification Code</title>
                        </head>
                        <body>
						<div>
                            <h2>Hello! Thank you for Registering.</h2>
                            <p>Your Account Information:</p>
							<p> <b>Full Name: </b>".$fname." ".$mname." ".$lname."</p>
							<p><b>Username: </b>".$uname."</p> 
                            <p><b>Email: </b>".$email."</p>
                            <p><b>Password: </b>********** </p>
							<p><b>Birthday: </b>".$birthday." </p>
							<p><b>Contact Number: </b>".$contact_num."</p>
                            <p class='t3'>Please click the link below to activate your account.</p>
                            <h4><a href='".base_url()."user/activate/".$id."/".$code."'>Activate My Account</a></h4>
						</div>
                        </body>
                        </html>
						";
			$this->email->initialize($config);
			$this->email->set_mailtype("html");
		    $this->email->from('teamincognitofeu@gmail.com', 'INCOGNITO');
		    $this->email->to($email);
		    $this->email->subject('Signup Verification Email');
		    $this->email->message($message);
			$this->email->set_newline("\r\n");
		    if($this->email->send()){
		    	$this->session->set_flashdata('message','Activation code sent to email');
		    }
		    else{
		    	$this->session->set_flashdata('message', $this->email->print_debugger());
		    }
        	redirect('register');
		}
	}
	public function activate(){
		$id =  $this->uri->segment(3);
		$code = $this->uri->segment(4);
		$user = $this->users_model->getUser($id);
		if($user['code'] == $code){
			$data['active'] = true;
			$query = $this->users_model->activate($data, $id);
 
			if($query){
				$this->session->set_flashdata('message', "User activated successfully. Please Login to your Account <br> <a href = 'http://localhost/CODE_IGN/User/login'><button class = 'btn btn-primary btn-lg btn-block login-button'>LOGIN</button>");
			}
			else{
				$this->session->set_flashdata('message', 'Something went wrong in activating account');
			}
		}
		else{
			$this->session->set_flashdata('message', 'Cannot activate account. Code didnt match');
		}
 
		redirect('register');
 
	}
	public function login(){
		$this->load->view('login');
	}
	public function login_validation(){
        $this->load->model('Users_model');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run()){
            if($this->users_model->check_login($username,$password)){
                $this->shopCart();
				$this->session->set_flashdata('uname',$username);
            } else {
				echo "<script>alert('Invalid Username or Password');</script>";
                $this->load->view("login");
            }
        } else {
            $this->load->view("login");
        }
    }
	public function shopCart($offset=0){
		$this->load->model("Users_model");
		//$data["product"] = $this->Users_model->fetch_all();
        $this->load->library('pagination');
        $config['base_url']=base_url().'User/shopCart';
        $config['total_rows']=$this->Users_model->CountAll2();
        $config['per_page']=3;
		$config['first_link'] = 'FIRST';
        $config['first_tag_open'] = '<li class="page-link">';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'LAST';
        $config['last_tag_open'] = '<li class="page-link">';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = 'NEXT&gt';
        $config['next_tag_open'] = '<li class="page-link">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&ltPREV';
        $config['prev_tag_open'] = '<li class="page-link">';
        $config['prev_tag_close'] = '</li>'; 
        $config['cur_tag_open'] = '<li class="page-link" style="visibility: hidden;">';
        $config['cur_tag_close'] = '</li>';       
        $config['num_tag_open'] = '<li class="page-link">';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $data['product'] = $this->Users_model->fetch_data2($config['per_page'],$offset);
		$this->load->view('homepage',$data);
	}
	public function add(){
		$this->load->library("cart");
		$data = array(
			"id"  => $_POST["product_id"],
			"name"  => $_POST["product_name"],
			"qty"  => $_POST["quantity"],
			"price"  => $_POST["product_price"]
		);
		$this->cart->insert($data);
		echo $this->view();
	}
	public function load(){
		echo $this->view();
	}
	public function remove(){
		$this->load->library("cart");
		$row_id = $_POST["row_id"];
		$data = array(
			'rowid'  => $row_id,
			'qty'  => 0
		);
		$this->cart->update($data);
		echo $this->view();
	}
	public function clear(){
		$this->load->library("cart");
		$this->cart->destroy();
		echo $this->view();
	}
	public function view(){
		$this->load->library("cart");
		$output = '';
		$output .= '
		<h3 style="font-size: 30px; background: white;-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;font-family:Courier New;margin-left:200px;margin-top:100px;-webkit-text-stroke-width: 2px; -webkit-text-stroke-color: white;">Shopping Cart</h3><br />
		<div class="table-responsive" >
			<div align="right" >
				<button type="button" id="clear_cart" class="btn btn-warning" style="font-family:Courier New;background:#A40E57;" >Clear Cart</button>
			</div> <br />
			<table class="table table-bordered" style="background: -webkit-linear-gradient(#E5147A, #37018A);border-style: solid;
			 border-width: 1px;border-color: #543884; box-shadow: 0px 0px 20px #E805F4;color:white;font-family:Courier New;">
				<tr>
					<th width="40%">Name</th>
					<th width="15%">Quantity</th>
					<th width="15%">Price</th>
					<th width="15%">Total</th>
					<th width="15%">Action</th>
				</tr>
			';
			$count = 0;
			foreach($this->cart->contents() as $items){
			$count++;
			$output .= '
				<tr> 
					<td>'.$items["name"].'</td>
					<td>'.$items["qty"].'</td>
					<td>'.$items["price"].'</td>
					<td>'.$items["subtotal"].'</td>
					<td><button type="button" name="remove" class="btn btn-danger btn-xs remove_inventory" id="'.$items["rowid"].'">Remove</button></td>
				</tr>
			';
			}
			$output .= '
				<tr>
					<td colspan="4" align="right">Total</td>
					<td>'.$this->cart->total().'</td>
				</tr>
			</table>
		</div>
		';
		if($count == 0){
			$output = '<h3 align="center" style="font-size: 30px; background: white;-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;font-family:Courier New;margin-left:200px;margin-top:100px;-webkit-text-stroke-width: 2px; -webkit-text-stroke-color: white;">Cart is Empty</h3>';
		}
		return $output;
	}
	public function logout(){
		unset($_SESSION['uname']);
		$this->load->view('login');
		echo "<script>alert('Thank You!');</script>";
	}
	 public function view_records($offset=0){
        $this->load->model('Users_model');
        $this->load->library('pagination');
        $config['base_url']=base_url().'User/view_records';
        $config['total_rows']=$this->Users_model->CountAll();
        $config['per_page']=4;
        
        $config['first_link'] = 'FIRST';
        $config['first_tag_open'] = '<li class="page-link">';
        $config['first_tag_close'] = '</li>';
        
        $config['last_link'] = 'LAST';
        $config['last_tag_open'] = '<li class="page-link">';
        $config['last_tag_close'] = '</li>';
        
        $config['next_link'] = 'NEXT&gt';
        $config['next_tag_open'] = '<li class="page-link">';
        $config['next_tag_close'] = '</li>';
        
        $config['prev_link'] = '&ltPREV';
        $config['prev_tag_open'] = '<li class="page-link">';
        $config['prev_tag_close'] = '</li>';
        
        $config['cur_tag_open'] = '<li class="page-link" style="background-color:black;color:white;">';
        $config['cur_tag_close'] = '</li>';
        
        $config['num_tag_open'] = '<li class="page-link">';
        $config['num_tag_close'] = '</li>';
        
        
        $this->pagination->initialize($config);
        
        $data['list'] = $this->Users_model->fetch_data($config['per_page'],$offset);
        $this->load->view('View_records',$data);
    }
	public function adminLogin(){
		$this->load->view('admin_login');
	}
	function login_admin(){
        $this->load->model('Users_model');
        $adminName = $this->input->post('adminName');
        $adminPass = $this->input->post('adminPass');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('adminName', 'Username', 'required');
        $this->form_validation->set_rules('adminPass', 'Password', 'required');
        $this->load->helper(array('form','url'));
        if($this->form_validation->run()){
            if($this->users_model->check_admin($adminName,$adminPass)){
              $this->view_records();
            } else {
				echo "<script>alert('Invalid Username or Password');</script>";
                $this->load->view("admin_login");
            }
        } else {
            $this->load->view("admin_login");
        }
    }
	public function update_data(){
        $this->load->model('Users_model');
		$this->load->library('form_validation');
        $this->form_validation->set_rules('uid', 'ID', 'required|numeric');
        $this->form_validation->set_rules('fname', 'First Name', 'alpha_numeric');
        $this->form_validation->set_rules('lname', 'Last Name', 'alpha_numeric');
        $this->form_validation->set_rules('uname', 'Username', 'alpha_numeric');
        $this->form_validation->set_rules('pass', 'Password', 'alpha_numeric');
        $this->form_validation->set_rules('bDay', 'Birthday', 'alpha_numeric');
        $this->form_validation->set_rules('phone2', 'ContactNumber', 'alpha_numeric');
		$uid = $this->input->post('uid');
        $data = array(
           'fname'=>$this->input->post('fname'),
           'lname'=>$this->input->post('lname'),
           'uname'=>$this->input->post('uname'),
           'pass'=>$this->input->post('pass'),
           'birthday'=>$this->input->post('bDay'),
           'contact_num'=>$this->input->post('phone2')
        );
        $data = array_filter($data);
		if($this->form_validation->run()){
			if ( $this->Users_model->select_id($uid)) {
				$this->Users_model->update_model_data($uid,$data);
				$this->view_records();
				echo "<script>alert('Account Updated!!!');</script>";
			} else {
				$this->updateUser();
			} 
		} else {
			$this->updateUser();
		}
		
    }
	public function updateUser(){
         $this->load->view('updateUserView');
    }
	public function deleteUser(){
         $this->load->view('deleteUserView');
    }
	public function delete_data(){
        $this->load->model('Users_model');
        $id = $this->input->post('id');
		$this->load->library('form_validation');
        $this->form_validation->set_rules('id', 'ID', 'required|numeric');
		if($this->form_validation->run()){
			if ($this->Users_model->select_id($id)) {
				$this->Users_model->delete_model_data($id);
				$this->view_records();
				echo "<script>alert('Account Deleted!!!');</script>";
			} else {
				echo "<script>alert('Invalid Input!!!');</script>";
			}
		} else {
			$this->deleteUser();
		}	
    }
	public function profile(){
		$this->load->model('Users_model');
		$userName = $this->session->flashdata('uname');
		 $result['data'] = $this->Users_model->select_uname($userName);
         $this->load->view('profile', $result);
    }
	public function check_password(){
		$userName = $this->session->flashdata('uname');
        $this->load->model('Users_model');
        $curPass = $this->input->post('curPass');
        $newPass = $this->input->post('newPass');
        $rnewPass = $this->input->post('rnewPass');
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('curPass', 'Password','callback_curPassOldPass','required|min_length[8]');
        $this->form_validation->set_rules('newPass', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('rnewPass', 'Password Confirmation', 'required|min_length[8]|matches[newPass]');
         if($this->form_validation->run()){
             $this->Users_model->update_pass($curPass,$newPass);
				echo "<script>alert('Password Changed!');</script>";
			 $result['data'] = $this->Users_model->select_uname($userName);
             $this->load->view('profile', $result);
             } else {
				$result['data'] = $this->Users_model->select_uname($userName);
				$this->load->view('profile', $result);
			}  
    }
    public function curPassOldPass($str){
		$this->load->model('Users_model');
         if($this->Users_model->retrieve_pass($str) == false){
             $this->form_validation->set_message('curPassOldPass','Current password is not the same with the old password');
             return false;
        } else {
            return true;
        }
    }
}