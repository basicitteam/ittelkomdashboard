<?php
Class M_prodi extends CI_Model{
	
	public function insert($data){
	return $this->db->insert('prodi',$data);
	}

	public function get($limit = 100, $offset = 0){
		$this->db->join('fakultas','fakultas.id_fakultas = prodi.id_fakultas');
		$query = $this->db->get('prodi',$limit,$offset);
		return $query->result_array();
	}
}