<?php
Class mahasiswa extends CI_Controller{
	public function __construct(){
	parent::__construct();
		if($this->session->userdata('role') != 'admin' || $this->session->userdata('logged_in') == false){
			$this->session->set_flashdata('msg','<p class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>Anda Belum Login Admin!</p>');
			redirect('admin/login');
		}
	}

	public function index(){
		$header['nav']= 'mahasiswa';
		$this->load->view('templates/header',$header);
	   	$this->load->view('admin/mahasiswa/mahasiswa');
	   	$this->load->view('templates/footer');
	}

	public function add(){
		$header['nav']= 'mahasiswa';
		$this->load->view('templates/header',$header);
	   	$this->load->view('admin/mahasiswa/add');
	   	$this->load->view('templates/footer');
	}
}