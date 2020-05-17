<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class user_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	
	public function insertUserBaru()
	{
		$object = array(
			'username' => $this->input->post('username'), 
			'nama' => $this->input->post('nama'),
			'password' => md5($this->input->post('username')),
			'id_user_level' => $this->input->post('level')
				);
			$this->db->insert('user', $object);
	}

	public function getDataUser()
	{
		$this->db->select("id,username,nama,id_user_level");
			$this->db->where('username !=', 'admin');
			$query = $this->db->get('user');
			return $query->result();
	}

	public function getUser($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('user');
		return $query->result();
	}

	public function UpdateById($id){
		$data = array(
			'username' => $this->input->post('username'), 
			'nama' => $this->input->post('nama'),
			'password' => md5($this->input->post('username')),
			'id_user_level' => $this->input->post('level')
				);
			$this->db->where('id',$id);
			$this->db->update('user',$data);
	}
	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('user');
	}

	public function user_level()
        {
            $query = $this->db->get('user_level');
            return $query->result();
		}
		
		public function get_user()
        {
            $query = $this->db->get('user');
            return $query->result();
        }

}
?>
