<?php
Class M_fakultas extends CI_Model{
	public function insert($data){
	return $this->db->insert('fakultas',$data);
	}

	public function get($limit = 100, $offset = 0){
		$query = $this->db->get('fakultas',$limit,$offset);
		return $query->result_array();
	}
}