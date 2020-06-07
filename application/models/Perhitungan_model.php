<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Perhitungan_model extends CI_Model {

        public function get_penilaian()
        {
            $query = $this->db->get('nilai');
            return $query->result();
        }
        public function get_kriteria()
	{
		$this->db->order_by("id_kriteria","asc");
		$query=$this->db->get('kriteria');
		return $query->result();
	}
	public function get_alternatif()
	{
		$this->db->order_by("id_alternatif","asc");
		$query=$this->db->get('alternatif');
		return $query->result();
	}


	public function data_nilai($id_alternatif,$id_kriteria)
	{
		$query = $this->db->query("SELECT * FROM nilai WHERE id_alternatif='$id_alternatif' AND id_kriteria='$id_kriteria';");
		return $query->row_array();
    }
    
    public function data_penilaian($id_alternatif,$id_kriteria)
	{
		$query = $this->db->query("SELECT * FROM nilai WHERE id_alternatif='$id_alternatif' AND id_kriteria='$id_kriteria';");
		return $query->result();
	}
	
	public function penilaian_alternatif()
	{
		$query = $this->db->query("SELECT DISTINCT alternatif.nama_alternatif, alternatif.id_alternatif FROM alternatif JOIN nilai ON alternatif.id_alternatif=nilai.id_alternatif;");
		return $query->result();		
    }
    
    //normalisasi
    public function nilai_pembagi($id_kriteria)
	{
		$query = $this->db->query("SELECT SQRT(SUM(POWER(nilai,2)))as pembagi from nilai WHERE id_kriteria='$id_kriteria';");
		return $query->row_array();
	}
    //optimasi
    public function get_bobot($id_kriteria)
	{
		$query = $this->db->query("SELECT*FROM kriteria WHERE id_kriteria='$id_kriteria';");
		return $query->row_array();
	}

	public function pembobotan($id_kriteria)
	{
		$query = $this->db->query("SELECT ((nilai/pembagi)*kriteria.bobot) as pembobotan, kriteria.bobot, kriteria.tipe 
		from nilai join( select SQRT(SUM(POWER(nilai,2)))as pembagi from nilai WHERE id_kriteria='$id_kriteria') as b 
		JOIN Kriteria ON kriteria.id_kriteria=nilai.id_kriteria 
		WHERE kriteria.id_kriteria='$id_kriteria' GROUP BY nilai.id_alternatif");
		return $query->row_array();
	}

	public function hasil($id_alternatif)
	{
		$query = $this->db->query("SELECT * FROM alternatif WHERE id_alternatif='$id_alternatif';");
		return $query->row_array();		
	}
	
    }
    
    /* End of file Kategori_model.php */
    