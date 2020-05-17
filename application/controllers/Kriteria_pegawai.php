<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria_pegawai extends CI_Controller {

		public function __construct(){
			parent:: __construct();
			$this->load->helper('url','form');
			$this->load->library('form_validation');
			$this->load->model('kriteria_model');
			$this->load->model('alternatif_model');
			$this->load->model('nilai_model');

			if (empty($this->session->userdata('username','nama'))) {
				
				redirect('login');
			}
		}

		public function index()
		{ 		
			$object['kriteria_object']=$this->kriteria_model->getDataKriteria();
			$this->load->view('partials/headermember');
			$this->load->view('kriteria_view_pegawai',$object);
			$this->load->view('partials/footer');
		}

		

		

	

}

?>
