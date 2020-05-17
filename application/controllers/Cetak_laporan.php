<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Cetak_laporan extends CI_Controller{

	public function __construct(){ 
		parent:: __construct();
		$this->load->model('cetak_laporan');
		$this->load->helper('file');
	
	}

	public function index(){
		
		$data['']=$this->cetak_laporan->view_row();
		$this->load->view('cetak_laporan', $data);
	}

	public function cetakPdf(){
		$data['']=$this->cetak_laporan->view_row();
		$this->load->view('cetak_laporan', $data);
		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
	}

}