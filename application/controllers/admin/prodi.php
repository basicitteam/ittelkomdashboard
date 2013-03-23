<?php
Class prodi extends CI_Controller{
	
	public function index(){
		$data['fakultas'] = $this->M_fakultas->get();
		$data['prodi'] = $this->M_prodi->get();
		$data['no'] = 1;
		$header['nav']= 'prodi';
		$this->load->view('templates/header',$header);
	   	$this->load->view('admin/prodi/prodi',$data);
	   	$this->load->view('templates/footer');
	}

	public function add(){
		$data = array(
			'id_fakultas' => $this->input->post('id_fakultas'),
			'prodi' => $this->input->post('prodi')
			);
		$this->M_prodi->insert($data);
		$this->session->set_flashdata('msg','<p class="alert alert-success">Prodi '.$this->input->post('prodi').' berhasil ditambahkan.</p>');
		redirect('admin/prodi');
	}
}