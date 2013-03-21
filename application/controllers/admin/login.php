<?php
Class Login extends CI_Controller{

	public function index(){
	$this->load->view('admin/login');
	}

	public function validasi(){
		if($this->input->post('username') == 'admin' && $this->input->post('password') == 'admin'){
			$newdata = array(
                   'username'  => $this->input->post('username'),
                   'role'  => 'admin',
                   'logged_in' => TRUE
               );

			$this->session->set_userdata($newdata);
			redirect('admin/home');
		}
		else{
			$this->session->set_flashdata('msg','<p class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>Username/Password salah!</p>');
			redirect('admin/login');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		$this->session->set_flashdata('msg','<p class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>Berhasil Logout</p>');
		redirect('admin/login');
	}
}