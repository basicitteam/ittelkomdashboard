<?php
Class fakultas extends CI_Controller{
	
	public function index(){
		$fakultas = $this->M_fakultas->get();
		$data['fakultas'] = $fakultas;
		$data['no'] = 1;
		$header['nav']= 'fakultas';
		$this->load->view('templates/header',$header);
	   	$this->load->view('admin/fakultas/fakultas',$data);
	   	$this->load->view('templates/footer');
	}

	public function add(){
		$this->form_validation->set_rules('fakultas', 'Fakultas', 'required');
		$this->form_validation->set_error_delimiters('<p class="alert alert-danger>">', '</p>');

		if ($this->form_validation->run() != FALSE)
		{
			$data = array(
			'fakultas' => $this->input->post('fakultas')
			);
			$this->M_fakultas->insert($data);
			$this->session->set_flashdata('msg','<p class="alert alert-success">Fakultas '.$this->input->post('fakultas').' berhasil ditambahkan.</p>');
		}
		else{
			$this->session->set_flashdata('msg',validation_errors());
		}
		redirect('admin/fakultas');
	}

	public function edit(){
		echo 'ok';
	}

	public function delete($id){
		$this->db->where('id_fakultas',$id);
		$this->db->delete('fakultas');
		$this->session->set_flashdata('msg','<p class="alert alert-warning">Data berhasil dihapus</p>');
		redirect('admin/fakultas');
	}
}