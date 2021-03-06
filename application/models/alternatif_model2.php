<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class alternatif_model2 extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	
	public function insertAlternatifBaru()
	{
		$object = array(
			'alternatif' =>$this->input->post('alternatif')
			);
		$this->db->insert('alternatif',$object);
	}
	public function getDataAlternatif()
	{
		$this->db->order_by("id_alternatif","asc");
		$query = $this->db->get('alternatif');
		return $query->result();
	}
	public function getAlternatif($id_alternatif)
	{
		$this->db->where('id_alternatif',$id_alternatif);
		$query = $this->db->get('alternatif');
		return $query->result();
	}
	public function UpdateById($id_alternatif){
		$data = array(
			'alternatif' =>$this->input->post('alternatif')
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

	public function getTabelAlternatif()
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

		$sql = 'SELECT * FROM alternatif';
		$result = $db->query($sql);
		//-- menyiapkan variable penampung berupa array
		$alternatif = array();
		//-- melakukan iterasi pengisian array untuk tiap record data yang didapat
		foreach ($result as $row) {
		   $alternatif[$row['id_alternatif']]=array($row['alternatif'],
                                               		$row['pondasi'],
                                   					$row['sloof'],
                                   					$row['kolom'],
                                    				$row['plesteran'],
                                    				$row['rangka_atap']
		                                    );
		}

		return $alternatif;
	}
}
?>
