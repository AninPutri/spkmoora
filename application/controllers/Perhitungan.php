<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perhitungan extends CI_Controller {

		public function __construct(){
		parent:: __construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('kriteria_model');
		$this->load->model('alternatif_model');
		$this->load->model('nilai_model');	
		$this->load->model('perhitungan_model');		
		}

		public function index()
		{ 		
			
			$object['kriteria']=$this->perhitungan_model->get_kriteria();
			$object['alternatif']=$this->perhitungan_model->penilaian_alternatif();
			$object['penlaian']=$this->perhitungan_model->get_penilaian();
			//$object['pembagi'] = $this->perhitungan_model->nilai_pembagi();
			
			
			$this->load->view('view_perhitungan',$object);
			
			
		}

		private function pre($arr)
		{
			echo "<pre>";
			print_r($arr);
			echo "</pre>";
			die;
		}
		

		
		public function printPdf(){
		
			$object['kriteria']=$this->perhitungan_model->get_kriteria();
			$object['alternatif']=$this->perhitungan_model->penilaian_alternatif();
			$object['penlaian']=$this->perhitungan_model->get_penilaian();

			$this->load->library('pdf');
			$this->pdf->setPaper('A4', 'potrait');
			$this->pdf->filename = "laporan.pdf";
			$this->pdf->load_view('pdf_view', $object);
		}

	

}


?>
