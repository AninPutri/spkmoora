<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

		public function __construct(){
		parent:: __construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('user_model');
		
		if (empty($this->session->userdata('username','nama'))) {
				
				redirect('login');
			}
		}

		public function index()
		{ 		
			$object['user_object']=$this->user_model->get_user();
			$object['user_level']= $this->user_model->user_level();
			$this->load->view('partials/header');
			$this->load->view('user_view',$object);
			$this->load->view('partials/footer');
		}

		public function create()
		{
			$this->load->helper('url','form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username','username','trim|required');
			$this->load->model('user_model');
		
			if($this->form_validation->run()==FALSE)
			{
				$object['user_level']= $this->user_model->user_level();
				$this->load->view('partials/header');
				$this->load->view('tambah_user_view',$object);
				$this->load->view('partials/footer');
			}
			else
			{
				helper_log("add", "menambahkan user");
				$this->user_model->insertUserBaru();
				$this->load->view('partials/header');
				echo '<script type="text/javascript">alert("Data Berhasil di ditambahkan!!")</script>';
					redirect('User', 'refresh');
			}		
		}

		public function update($id)
		{
			$this->load->helper('url','form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username', 'username', 'trim|required');
			
			$this->load->model('user_model');
			$data['user']=$this->user_model->getUser($id);
			$data['user_level']= $this->user_model->user_level();

			// var_dump($data);

			if ($this->form_validation->run()==FALSE) 
			{
				$this->load->view('partials/header');
				$this->load->view('edit_user_view',$data);
				$this->load->view('partials/footer');
				
			}
			else
			{
			
				helper_log("edit", "mengubah data user");
				$this->user_model->UpdateById($id);
				$this->load->view('partials/header');
				echo '<script type="text/javascript">alert("Data Berhasil di ubah!!")</script>';
					redirect('User', 'refresh');
				
			}

		}

		public function delete($id)
		{
			$this->load->view('partials/header');
			helper_log("delete", "menghapus data user");
			$this->user_model->delete($id);
			echo '<script type="text/javascript">alert("Data Berhasil di hapus!!")</script>';
					redirect('User', 'refresh');
			
		}

		

	

}

/* End of file Home.php */
/* Location: ./application/controllers/Seleksi_baru.php */
?>
