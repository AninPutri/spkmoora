<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class nilai_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function insertNilaiBaru($data)
	{
		
		$this->db->insert('nilai',$data);
	}

	// public function getNilaiAlter()
	// {
	// 	$this->db->order_by("id_alternatif","asc");
	// 	$query = $this->db->get('nilai');
	// 	return $query->result();
	// }

	public function getDataNilai()
	{

		$this->db->SELECT("nilai.nilai, alternatif.nama_alternatif, kriteria.nama_kriteria, nilai.id_alternatif, nilai.id_kriteria,nilai.id_nilai");
		$this->db->FROM("nilai");
		$this->db->JOIN("alternatif","nilai.id_alternatif = alternatif.id_alternatif");
		$this->db->JOIN("kriteria", "nilai.id_kriteria = kriteria.id_kriteria");
		return $this->db->get()->result();
		
	}

	public function getDataNilaiDetail($id)
	{

		$this->db->SELECT("nilai.nilai, alternatif.nama_alternatif, kriteria.nama_kriteria, nilai.id_alternatif, nilai.id_kriteria,nilai.id_nilai,user.nama");
		$this->db->FROM("nilai");
		$this->db->where('nilai.id_alternatif',$id);
		$this->db->JOIN("alternatif","nilai.id_alternatif = alternatif.id_alternatif");
		$this->db->JOIN("kriteria", "nilai.id_kriteria = kriteria.id_kriteria");
		$this->db->JOIN("user", "nilai.id_user = user.id");
		return $this->db->get()->result();
		
	}
	public function kriteriaByalternatif($alternatif){
		$this->db->SELECT("nilai.nilai, alternatif.nama_alternatif, kriteria.nama_kriteria");
		$this->db->FROM("nilai");
		$this->db->JOIN("alternatif","nilai.id_alternatif = alternatif.id_alternatif");
		$this->db->JOIN("kriteria", "nilai.id_kriteria = kriteria.id_kriteria");
		$this->db->where("nilai.id_alternatif",$alternatif);
		return $this->db->get()->result();
	}

	public function getNilaiByKriteria($id)
	{
		$this->db->where('id_kriteria',$id);
		$query = $this->db->get('nilai');
		return $query->result();
	}

	public function getNilai($id_nilai)
	{
	
		$this->db->where('id_nilai',$id_nilai);
		$query = $this->db->get('nilai');
		return $query->result();
	}

	public function UpdateById($id_nilai){
		$data = array(
			'nilai' =>$this->input->post('nilai')
		);

		$this->db->where('id_nilai', $id_nilai);
		$this->db->update('nilai', $data);
		if($this->db->affected_rows()==1)
			{
				return true;
			}
			else
			{
				return false;
			}
	}

	public function delete($id_nilai){
		$this->db->where('id_nilai', $id_nilai);
		$this->db->delete('nilai');
	}

	public function deleteByAlternatif($alternatif){
		$this->db->where('id_alternatif', $alternatif);
		$this->db->delete('nilai');
	}
	// public function getTabelSample()
	// {
	// 	$dbhost = 'localhost';
	// 	$dbuser = 'root';
	// 	$dbpass = '';
	// 	$dbname = 'spkmooratest';
	// 	//-- koneksi ke database server dengan extension mysqli
	// 	$db = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
	// 	//-- hentikan program dan tampilkan pesan kesalahan jika koneksi gagal
	// 	if ($db->connect_error) {
	// 	   die('Connect Error ('.$db->connect_errno.')'.$db->connect_error);
	// 	}

	// 	//-- query untuk mendapatkan semua data sample penilaian di tabel moo_nilai
	// 	$sql = 'SELECT * FROM nilai ORDER BY id_alternatif,id_kriteria';
	// 	$result = $db->query($sql);
	// 	//-- menyiapkan variable penampung berupa array
	// 	$sample=array();
	// 	//-- melakukan iterasi pengisian array untuk tiap record data yang didapat
	// 	foreach ($result as $row) {
	// 	   //-- jika array $sample[$row['id_alternatif']] belum ada maka buat baru
	// 	   //-- $row['id_alternatif'] adalah id kandidat/alternatif
	// 	   if (!isset($sample[$row['id_alternatif']])) {
	// 	      $sample[$row['id_alternatif']] = array();
	// 	   }
	// 	   $sample[$row['id_alternatif']][$row['id_kriteria']] = $row['nilai'];
	// 	}

	// 	return $sample;
	// }

}
?>