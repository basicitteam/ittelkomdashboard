<?php
Class home extends CI_Controller{
    public function __construct()
   {
        parent::__construct();
        if($this->session->userdata('role') != 'admin' || $this->session->userdata('logged_in') == false){
        	$this->session->set_flashdata('msg','<p class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>Anda Belum Login Admin!</p>');
			redirect('admin/login');
        }
   }

   public function index(){
   	$this->load->view('templates/header');
   	$this->load->view('admin/home');
   	$this->load->view('templates/footer');
   }
}