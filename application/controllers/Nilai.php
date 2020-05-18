<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

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
			$object['alternatif']=$this->alternatif_model->getDataAlternatifByUser();
			$object['nilai_object']=$this->nilai_model->get_alternatif_from_nilai();
			$this->load->view('partials/header');
			$this->load->view('nilai_vieww',$object);
			$this->load->view('partials/footer');

			// var_dump($object);
		}
		public function printPdf(){
		
			$this->load->library('pdf');
			$data = array(
				'alternatif' => $this->alternatif_model->getDataAlternatifPrint(),
				'countKriteria' => count($this->kriteria_model->getDataKriteria()),
			);
			$this->pdf->setPaper('A4', 'potrait');
			$this->pdf->filename = "laporanAlternatif.pdf";
			$this->pdf->load_view('alternatifPdf', $data);
		}
		public function printPdfByid($id){
			$this->load->library('pdf');
			$data = array(
				'alternatif' => $this->alternatif_model->getDataAlternatifPrint($id),
				'countKriteria' => count($this->kriteria_model->getDataKriteria()),
			);
			$this->pdf->setPaper('A4', 'potrait');
			$this->pdf->filename = "laporanAlternatif.pdf";
			$this->pdf->load_view('alternatifPdf', $data);
		}
		public function detail($id){
			$object['nilai_object']=$this->nilai_model->getDataNilaiDetail($id);
			$this->load->view('partials/header');
			$this->load->view('detailNilai',$object);
			$this->load->view('partials/footer');
		}

		public function create()
		{
			$this->load->helper('url','form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('type','Type','required|is_unique[nilai.id_alternatif]');
			$this->form_validation->set_rules('kriteria1','kriteria1','trim|required');
			$this->form_validation->set_rules('kriteria2','kriteria2','trim|required');
			$this->form_validation->set_rules('kriteria3','kriteria3','trim|required');
			$this->form_validation->set_rules('kriteria4','kriteria4','trim|required');
			$this->form_validation->set_rules('kriteria5','kriteria5','trim|required');
			$this->form_validation->set_rules('kriteria6','kriteria6','trim|required');
			$this->form_validation->set_rules('kriteria7','kriteria7','trim|required');
			$this->form_validation->set_rules('kriteria8','kriteria8','trim|required');
			$this->load->model('nilai_model');
			

			if($this->form_validation->run()==FALSE)
			{
				
				$data = array('sekolah' => $this->alternatif_model->getDataAlternatif());
				$this->load->view('partials/header');
				$this->load->view('tambah_nilai_view',$data);
				$this->load->view('partials/footer');
				//echo '<script type="text/javascript">alert("Nilai Personel Sudah Ada!!")</script>';
			}
			else
			{
				for ($i=1; $i <= 8; $i++) { 
					$val = 'kriteria'.$i;
					$object = array(
						'id_alternatif' =>$this->input->post('type'),
						'id_kriteria' =>$i,
						'nilai' =>$this->input->post($val),
						'id_user' => $this->session->userdata('id'),
					);
					// var_dump($object);
					$this->nilai_model->insertNilaiBaru($object);	
				}
				helper_log("add", "menambahkan nilai pada personel id-".$this->input->post('type'));
				$this->load->view('partials/header');
				echo '<script type="text/javascript">alert("Data Berhasil di ditambahkan!!")</script>';
				redirect('Nilai', 'refresh');
			}		
		}

		public function update($id_nilai)
		{
			$this->load->helper('url','form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nilai','nilai','trim|required');
			
			$this->load->model('nilai_model');
			$data['nilai']=$this->nilai_model->getNilai($id_nilai);
			$aletrnatif=$this->nilai_model->getNilai($id_nilai);
			foreach($aletrnatif as $key){
				$id_aletrnatif = $key->id_alternatif;
			}

			//echo var_dump($id_aletrnatif);

			if ($this->form_validation->run()==FALSE) 
			{
				$this->load->view('partials/header');
				$this->load->view('edit_nilai_view',$data);
				$this->load->view('partials/footer');
				
			}
			else
			{
			
				$this->nilai_model->UpdateById($id_nilai);
				helper_log("edit", "mengubah data nilai personel id-".$id_aletrnatif);
				$this->load->view('partials/header');
				echo '<script type="text/javascript">alert("Data Berhasil di ubah!!")</script>';
					redirect('Nilai/detail/'.$id_aletrnatif, 'refresh');
				
			}

		}

		public function delete($id_nilai)
		{
			$this->load->view('partials/header');
			helper_log("delete", "menghapus data nilai");
			$this->nilai_model->delete($id_nilai);
			echo '<script type="text/javascript">alert("Data Berhasil di hapus!!")</script>';
					redirect('Nilai', 'refresh');
			
		}
		public function delete_alternatif($id_aletrnatif)
		{
			$this->load->view('partials/header');
			helper_log("delete", "menghapus data nilai dari personel id-".$id_aletrnatif);
			$this->nilai_model->deleteByAlternatif($id_aletrnatif);
			echo '<script type="text/javascript">alert("Data Berhasil di hapus!!")</script>';
					redirect('Nilai', 'refresh');
			
		}
		

	

}

?>
