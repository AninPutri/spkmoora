<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Controller{
 
	public function __construct(){
		parent::__construct();
		//load Login_model.php	
		$this->load->model('Login_model');
		//check the username is already set up or not
		if ($this->session->userdata('username','nama')) {
			//if username is already set up, then check the level of username is admin or member
			if($this->session->userdata('level') == 'admin'){
				redirect('Home');
			}elseif($this->session->userdata('level') == 'pegawai'){
				redirect('Home_member');
			}
		}
	}
 
	public function index(){
		$data = array('error' => '');
		$this->load->view('login', $data);
	}
 
	//function for processing login form
	public function login_process(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
					//calling chech_user() function in Login_model.php
		$result = $this->Login_model->check_user($username, $password); 
 
		if($result->num_rows() > 0){
			foreach ($result->result() as $row) {
				$id = $row->id;
				$username= $row->username;
				$nama= $row->nama;
				$id_user_level = $row->id_user_level;
			}
 
			$newdata = array(
			        'id'  => $id,
			        'username' => $username,
			        'nama' => $nama,
			        'id_user_level' => $id_user_level,
			        'status' => 'Logged'
			);

			var_dump($newdata);
			
			//set up session data
			$this->session->set_userdata($newdata);
			helper_log("Login", "Login");
			if($this->session->userdata('id_user_level')=='1') {
				redirect('Home');
			}elseif ($this->session->userdata('id_user_level')=='2') {
				redirect('Home_member');
			}
			
		}else{
			$this->load->view('login_salah');
		}
	}
 
	public function register(){
		$data = array('error' => ''
					);
		$this->load->view('Login', $data);
	}
}