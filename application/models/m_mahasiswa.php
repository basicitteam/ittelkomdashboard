<?php
Class M_mahasiswa extends CI_Model{
	
	public function insert($data){
	return $this->db->insert('mahasiswa',$data);
	}

	public function get($limit = 100, $offset = 0){
		$this->db->join('prodi','prodi.id_prodi = mahasiswa.id_prodi');
		$query = $this->db->get('mahasiswa',$limit,$offset);
		return $query->result_array();
	}

	public function get_num_rows(){
		$this->db->join('prodi','prodi.id_prodi = mahasiswa.id_prodi');
		$query = $this->db->get('mahasiswa');
		return $query->num_rows();
	}

	public function get_mahasiswa($nim){
		$this->db->join('prodi','prodi.id_prodi = mahasiswa.id_prodi');
		$this->db->join('fakultas','fakultas.id_fakultas = prodi.id_fakultas');
		$query = $this->db->get_where('mahasiswa',array('nim' => $nim));
		return $query->row_array();
	}

	public function update($nim,$data){
		$this->db->where('nim', $nim);
		return $this->db->update('mahasiswa', $data); 
	}
}