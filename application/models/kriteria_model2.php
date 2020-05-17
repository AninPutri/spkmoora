<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class kriteria_model2 extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	
	public function insertKriteriaBaru()
	{
		$object = array(
			'kriteria' =>$this->input->post('kriteria'),
			'type' =>$this->input->post('type'),
			'bobot' =>$this->input->post('bobot'));
		$this->db->insert('kriteria',$object);
	}
	public function getDataKriteria()
	{
		$this->db->order_by("id_kriteria","asc");
		$query=$this->db->get('kriteria');
		return $query->result();
	}
	public function getKriteria($id_kriteria)
	{
		$this->db->where('id_kriteria',$id_kriteria);
		$query = $this->db->get('kriteria');
		return $query->result();
	}
	public function UpdateById($id_kriteria){
		$data = array(
			'kriteria' =>$this->input->post('kriteria'),
			'type' =>$this->input->post('type'),
			'bobot' =>$this->input->post('bobot'));
		$this->db->where('id_kriteria', $id_kriteria);
		$this->db->update('kriteria', $data);
		if($this->db->affected_rows()==1)
			{
				return true;
			}
			else
			{
				return false;
			}
	}
	public function delete($id_kriteria){
		$this->db->where('id_kriteria', $id_kriteria);
		$this->db->delete('kriteria');
	}

	public function getTabelKriteria()
	{
		$dbhost = 'localhost';
		$dbuser = 'root';
		$dbpass = '';
		$dbname = 'spkmoora';
		//-- koneksi ke database server dengan extension mysqli
		$db = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
		//-- hentikan program dan tampilkan pesan kesalahan jika koneksi gagal
		if ($db->connect_error) {
		   die('Connect Error ('.$db->connect_errno.')'.$db->connect_error);
		}

		//-- query untuk mendapatkan semua data kriteria di tabel moo_kriteria
		$sql = 'SELECT * FROM kriteria';
		$result = $db->query($sql);
		//-- menyiapkan variable penampung berupa array
		$kriteria=array();
		//-- melakukan iterasi pengisian array untuk tiap record data yang didapat
		foreach ($result as $row) {
		   $kriteria[$row['id_kriteria']]=array($row['kriteria'],$row['type'],$row['bobot']);
		}

		return $kriteria;
	}
}
?>
