<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {

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
			$this->load->view('partials/header');
			$this->load->view('kriteria_view',$object);
			$this->load->view('partials/footer');
		}

		public function create()
		{
			$this->load->helper('url','form');
			$this->load->library('form_validation');

			$this->form_validation->set_rules('nama_kriteria','nama_kriteria','trim|required');
			$this->form_validation->set_rules('tipe','tipe','trim|required');
			$this->form_validation->set_rules('bobot','bobot','trim|required');

			$this->load->model('kriteria_model');
		
			if($this->form_validation->run()==FALSE)
			{

				$this->load->view('partials/header');
				$this->load->view('tambah_kriteria_view');
				$this->load->view('partials/footer');
			}
			else
			{
				
				$this->kriteria_model->insertKriteriaBaru();
				
				
				$this->load->view('partials/header');
				echo '<script type="text/javascript">alert("Data Berhasil di ditambahkan!!")</script>';
					redirect('Kriteria', 'refresh');
			}		
		}

		public function update($kriteria)
		{
			$this->load->helper('url','form');
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('nama_kriteria','nama_kriteria','trim|required');
			$this->form_validation->set_rules('tipe','tipe','trim|required');
			$this->form_validation->set_rules('bobot','bobot','trim|required');
			
			$this->load->model('kriteria_model');
			$data['kriteria']=$this->kriteria_model->getKriteria($kriteria);

			// var_dump($data);

			if ($this->form_validation->run()==FALSE) 
			{
				$this->load->view('partials/header');
				$this->load->view('edit_kriteria_view',$data);
				$this->load->view('partials/footer');
				
			}
			else
			{
			
				$this->kriteria_model->UpdateById($kriteria);
				$this->load->view('partials/header');
				echo '<script type="text/javascript">alert("Data Berhasil di ubah!!")</script>';
					redirect('Kriteria', 'refresh');
				
			}

		}

		public function delete($kriteria)
		{
			$this->load->view('partials/header');
			$this->kriteria_model->delete($kriteria);

			$data_nilai = $this->nilai_model->getNilaiByKriteria($kriteria);

			foreach ($data_nilai as $key) {
				$this->nilai_model->delete($key->id_nilai);
			}

			echo '<script type="text/javascript">alert("Data Berhasil di hapus!!")</script>';
					redirect('Kriteria', 'refresh');
			
		}

		

	

}

/* End of file Home.php */
/* Location: ./application/controllers/Seleksi_baru.php */
?>
