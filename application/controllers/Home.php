<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		
	}

	public function index()
	{ 	
		$this->load->view('partials/header');
		$this->load->view('home');
		$this->load->view('partials/footer');

	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('Login');
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
?>
