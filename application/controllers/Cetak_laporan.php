<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Cetak_laporan extends CI_Controller{

	public function __construct(){ 
		parent:: __construct();
		$this->load->model('kriteria_model');
		$this->load->model('alternatif_model');
		$this->load->helper('file','url');
	
	}

	// 
	public function cetak_kriteria(){
		
		$object['kriteria_object']=$this->kriteria_model->getDataKriteria();

		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan_kriteria.pdf";
		$this->pdf->load_view('pdf_view_kriteria', $object);
	}
	public function cetak_alternatif(){
		$object['alternatif_object']=$this->alternatif_model->getDataAlternatifByUser();

		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan_kriteria.pdf";
		$this->pdf->load_view('pdf_view_alternatif', $object);
	}



}