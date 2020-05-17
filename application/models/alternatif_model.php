<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class alternatif_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	
	public function insertAlternatifBaru($id)
	{
		$object = array(
			'id_alternatif' => $id,
			'nama_alternatif' =>$this->input->post('nama_alternatif'),
			'id_user' => $this->session->userdata('id'),
			);
		$this->db->insert('alternatif',$object);
	}
	public function GetLastData(){
		$this->db->order_by("id_alternatif","DESC");
		$query = $this->db->get('alternatif');
		return $query->row();
	}
	public function getDataAlternatif()
	{
		$this->db->select('alternatif.id_alternatif,nama_alternatif,user.nama');
		$this->db->join('user','user.id = alternatif.id_user');
		$this->db->order_by("id_alternatif","asc");
		$query = $this->db->get('alternatif');
		return $query->result();
	}
	public function getDataAlternatifByUser()
	{
		$this->db->select('alternatif.id_alternatif,nama_alternatif,user.nama');
		$this->db->join('user','user.id = alternatif.id_user');
		$this->db->order_by("id_alternatif","asc");
		$this->db->where('alternatif.id_user',$this->session->userdata('id'));
		$query = $this->db->get('alternatif');
		return $query->result();
	}
	public function getDataAlternatifPrint($id = null){
		$this->db->select('alternatif.id_alternatif,alternatif.nama_alternatif,nilai.nilai,kriteria.nama_kriteria');
		$this->db->join('nilai','nilai.id_alternatif = alternatif.id_alternatif');
		$this->db->join('kriteria','kriteria.id_kriteria = nilai.id_kriteria');
		if($id !== null){
			$this->db->where('alternatif.id_alternatif',$id);
		}
		$this->db->order_by("id_alternatif","asc");
		return $this->db->get('alternatif')->result();
	}
	public function getAlternatif($id_alternatif)
	{
		$this->db->where('id_alternatif',$id_alternatif);
		$query = $this->db->get('alternatif');
		return $query->result();
	}
	public function UpdateById($id_alternatif){
		$data = array(
			'nama_alternatif' =>$this->input->post('nama_alternatif')
			);
		$this->db->where('id_alternatif', $id_alternatif);
		$this->db->update('alternatif', $data);
		if($this->db->affected_rows()==1)
			{
				return true;
			}
			else
			{
				return false;
			}
	}
	public function delete($id_alternatif){
		$this->db->where('id_alternatif', $id_alternatif);
		$this->db->delete('alternatif');
	}

	// public function getTabelAlternatif()
	// {
	// 	$dbhost = 'localhost';
	// 	$dbuser = 'root';
	// 	$dbpass = '';
	// 	$dbname = 'spkmoora';
	// 	//-- koneksi ke database server dengan extension mysqli
	// 	$db = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
	// 	//-- hentikan program dan tampilkan pesan kesalahan jika koneksi gagal
	// 	if ($db->connect_error) {
	// 	   die('Connect Error ('.$db->connect_errno.')'.$db->connect_error);
	// 	}

	// 	$sql = 'SELECT * FROM alternatif';
	// 	$result = $db->query($sql);
	// 	//-- menyiapkan variable penampung berupa array
	// 	$alternatif = array();
	// 	//-- melakukan iterasi pengisian array untuk tiap record data yang didapat
	// 	foreach ($result as $row) {
	// 	   $alternatif[$row['id_alternatif']]=array($row['nama_alternatif']
	// 	                                    );
	// 	}

	// 	return $alternatif;
	// }
}
?>
