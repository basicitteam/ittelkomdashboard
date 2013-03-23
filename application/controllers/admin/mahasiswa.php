<?php
Class mahasiswa extends CI_Controller{
	public function __construct(){
	parent::__construct();
		if($this->session->userdata('role') != 'admin' || $this->session->userdata('logged_in') == false){
			$this->session->set_flashdata('msg','<p class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>Anda Belum Login Admin!</p>');
			redirect('admin/login');
		}
	}

	public function index($offset = 0){
		$config['base_url'] = site_url('admin/mahasiswa/index/');
		$config['total_rows'] = $this->M_mahasiswa->get_num_rows();
		$config['per_page'] = 20; 
		$config['uri_segment'] = 4;

		$this->pagination->initialize($config); 
		$data['mahasiswa'] = $this->M_mahasiswa->get($config['per_page'],$offset);
		$data['no'] = $offset + 1;
		$header['nav']= 'mahasiswa';
		$this->load->view('templates/header',$header);
	   	$this->load->view('admin/mahasiswa/mahasiswa',$data);
	   	$this->load->view('templates/footer');
	}

	public function add(){
		$data['prodi'] = $this->M_prodi->get();
		$header['nav']= 'mahasiswa';
		$this->load->view('templates/header',$header);
	   	$this->load->view('admin/mahasiswa/add',$data);
	   	$this->load->view('templates/footer');
	}

	public function add_proses(){
		$this->form_validation->set_rules('id_prodi', 'Prodi', 'required');
		$this->form_validation->set_rules('nim', 'NIM', 'required|is_unique[mahasiswa.nim]');
		$this->form_validation->set_rules('nama_mahasiswa', 'Nama', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('angkatan', 'Angkatan', 'required|exact_length[4]|numeric');
		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

		if ($this->form_validation->run()){
			$data = array(
			'id_prodi' => $this->input->post('id_prodi'),
			'nim' => $this->input->post('nim'),
			'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'angkatan' => $this->input->post('angkatan')
			);
			$this->M_mahasiswa->insert($data);
			$this->session->set_flashdata('msg','<p class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>Mahasiswa nim '.$this->input->post('nim').'! berhasil di tambahkan</p>');
			redirect('admin/mahasiswa');
		}
		else{
			$data['prodi'] = $this->M_prodi->get();
			$header['nav']= 'mahasiswa';
			$this->load->view('templates/header',$header);
		   	$this->load->view('admin/mahasiswa/add',$data);
		   	$this->load->view('templates/footer');
		}
	}

	public function view($nim){
		echo '<pre>';
		print_r($this->M_mahasiswa->get_mahasiswa($nim));
		echo '</pre>';
	}

	public function edit($nim){
		$data['mahasiswa'] = $this->M_mahasiswa->get_mahasiswa($nim);
		$data['prodi'] = $this->M_prodi->get();
		$header['nav']= 'mahasiswa';
		$this->load->view('templates/header',$header);
	   	$this->load->view('admin/mahasiswa/edit',$data);
	   	$this->load->view('templates/footer');
	}

	public function update(){
		$this->form_validation->set_rules('nama_mahasiswa', 'Nama', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('angkatan', 'Angkatan', 'required');
		$this->form_validation->set_error_delimiters('<p class="alert alert-danger">', '</p>');

		if ($this->form_validation->run()){
			$data = array(
			'id_prodi' => $this->input->post('id_prodi'),
			'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'angkatan' => $this->input->post('angkatan')
			);
			$this->M_mahasiswa->update($this->input->post('nim'),$data);
			$this->session->set_flashdata('msg','<p class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>Mahasiswa nim '.$this->input->post('nim').'! berhasil di update</p>');
			redirect('admin/mahasiswa');
		}
		else{
			$this->session->set_flashdata('msg',validation_errors());
			redirect('admin/mahasiswa/edit/'.$this->input->post('nim'));
		}
	}

	public function delete($nim){
		$this->db->where('nim',$nim);
		$this->db->delete('mahasiswa');
		$this->session->set_flashdata('msg','<p class="alert alert-warning">Mahasiswa Nim : '.$nim.' berhasil di hapus!</p>');
		redirect('admin/mahasiswa/');
	}
}