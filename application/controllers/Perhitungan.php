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
		}

		public function index()
		{ 		
			
			$this->load->view('partials/header');
			// $this->load->view('perhitungan_view');
			$this->load->view('partials/footer');
		}

		private function pre($arr)
		{
			echo "<pre>";
			print_r($arr);
			echo "</pre>";
			die;
		}
		public function perhitunganMetode(){
			
			$kriteria = array();
			$alternatif = array();
			$nilai = array();

			$data_kriteria = $this->kriteria_model->getDataKriteria();
			
			foreach ($data_kriteria as $key) {
				$kriteria[$key->id_kriteria] = array($key->nama_kriteria,$key->tipe,$key->bobot);
			}

			$data_alternatif = $this->alternatif_model->getDataAlternatif();


			foreach ($data_alternatif as $key) {
				
				$tmpNilai = $this->nilai_model->kriteriaByalternatif($key->id_alternatif);
				$tmpAlter = array();
				array_push($tmpAlter, $key->nama_alternatif);
				foreach ($tmpNilai as $kez) {
					array_push($tmpAlter, $kez->nama_kriteria);
				}
				$alternatif[$key->id_alternatif] = $tmpAlter;
			}

			$data_nilai = $this->nilai_model->getDataNilai();

			foreach ($data_nilai as $key) {
				$nilai[$key->id_alternatif][$key->id_kriteria] = $key->nilai;
			}
						
			$normal = $this->normalisasi($kriteria,$nilai, $alternatif);

			$optimasi = $this->optimasi($alternatif,$kriteria,$normal);

			$perangkingan = $this->perangkingan($optimasi,$alternatif);

			$data = array(
				'normalisasi' => $normal,
				'optimasi' => $optimasi,
				'alternatif' => $alternatif,
				'perangkingan' => $perangkingan, 
				
			);
			// var_dump($data_alternatif);
			return $data;
			

		}

		public function Perhitungan()
		{ 	
			if($this->session->userdata('status') == 'admin'){
				$this->load->view('partials/header');	
			}else{
				$this->load->view('partials/headermember');
			}
			
			$this->load->view('perhitungan_view',$this->perhitunganMetode());
			$this->load->view('partials/footer');
			// var_dump($alternatif);
			// var_dump($optimasi);

			// echo $perangkingan;
		}
		public function printPdf(){
		
			$this->load->library('pdf');
		
			$this->pdf->setPaper('A4', 'potrait');
			$this->pdf->filename = "laporan.pdf";
			$this->pdf->load_view('pdf_view', $this->perhitunganMetode());
		}

		private function normalisasi($kriteria, $sample, $alternatif)
		{
			$normal = $sample;

			foreach($kriteria as $id_kriteria => $a){
			   	$pembagi=0;

			   	foreach($alternatif as $id_alternatif => $a){
			      $pembagi+=pow($sample[$id_alternatif][$id_kriteria],2);
			   	}
			   
			   	foreach($alternatif as $id_alternatif => $a){
			      $normal[$id_alternatif][$id_kriteria]/=sqrt($pembagi);
				}
			}
			return $normal;
		}

		private function optimasi($alternatif, $kriteria, $normal){

			$optimasi = array();

			foreach($alternatif as $id_alternatif=>$a){
			   $optimasi[$id_alternatif]=0;
			   foreach($kriteria as $id_kriteria=>$k){
			      // $optimasi[$id_alternatif]+=$normal[$id_alternatif][$id_kriteria]*$k[2];
			   	$optimasi[$id_alternatif]+=$normal[$id_alternatif][$id_kriteria]*($k[1]=='Benefit'?1:0)*$k[2];
			   }
			}
			return $optimasi;
		}

		private function perangkingan($optimasi, $alternatif){
			//--mengurutkan data secara descending dengan tetap mempertahankan key/index array-nya
			arsort($optimasi);
			//-- mendapatkan key/index item array yang pertama
			$index=key($optimasi);
			//-- menampilkan hasil akhir:
			return "Hasilnya adalah alternatif <b>{$alternatif[$index][0]}</b> dengan nilai optimasi <b>{$optimasi[$index]}</b> yang terpilih";
		}

}


?>
