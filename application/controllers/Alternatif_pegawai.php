<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alternatif_pegawai extends CI_Controller {

		public function __construct(){
		parent:: __construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('alternatif_model');
		
		}

		public function index()
		{ 		
			$object['alternatif_object']=$this->alternatif_model->getDataAlternatif();
			$this->load->view('partials/headermember');
			$this->load->view('alternatif_view_pegawai',$object);
			$this->load->view('partials/footer');
		}

		

		

	

}

?>
