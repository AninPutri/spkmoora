<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_member extends CI_Controller {

		public function __construct(){
		parent:: __construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('nilai_model');
		$this->load->model('alternatif_model');
		$this->load->model('kriteria_model');
		
		}

		public function index()
		{ 		
			$object['nilai_object']=$this->alternatif_model->getDataAlternatif();
			$this->load->view('partials/headermember');
			$this->load->view('nilai_view_pegawai',$object);
			$this->load->view('partials/footer');

			// var_dump($object);
		}
		public function detail($id){
			$object['nilai_object']=$this->nilai_model->getDataNilaiDetail($id);
			$this->load->view('partials/headermember');
			$this->load->view('detailNilai_pegawai',$object);
			$this->load->view('partials/footer');
		}

}

?>
