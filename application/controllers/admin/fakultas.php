<?php
Class fakultas extends CI_Controller{
	public function index(){
		$header['nav']= 'fakultas';
		$this->load->view('templates/header',$header);
	   	$this->load->view('admin/fakultas/fakultas');
	   	$this->load->view('templates/footer');
	}

	public function add(){
		echo '<pre>';
		print_r($_POST);
		echo '</pre>';
	}
}