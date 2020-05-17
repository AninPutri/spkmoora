<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_member extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		
	}

	public function index()
	{ 	
		$this->load->view('partials/headermember');
		$this->load->view('home_member');
		$this->load->view('partials/footer');

	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('Login');
	}
}


?>
