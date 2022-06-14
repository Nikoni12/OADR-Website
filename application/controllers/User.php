<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class User extends CI_Controller {
	
	public function index(){
		$this->load->helper('url');
		$this->load->view('home');
	}
	public function about(){
		$this->load->view('about');
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
	
}