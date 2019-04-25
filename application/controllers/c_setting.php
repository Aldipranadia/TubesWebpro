<?php

class c_setting extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('User_model');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function index($id){
		$data['user'] = $this->User_model->getUser($id);
		$this->load->view('v_navbar', $data);
		$this->load->view('setting/v_profile', $data);
		$this->load->view('v_info');
	}
	public function ubah($id){
		$data['user'] = $this->User_model->getUser($id);
		$table = 'user';

		$name = $this->input->post('name', true);
		$location = $this->input->post('location', true);
		$bio = $this->input->post('bio', true);
		$web = $this->input->post('web', true);
		$interest = $this->input->post('interest', true);
		$email = $this->input->post('e-mail', true);
			
		$data = array(
			"username" => $id,
			"name" => $name,
			"location" => $location,
			"bio" => $bio,
			"web" => $web,
			"interest" => $interest,
			"e-mail" => $email,
		); 

		$update = $this->User_model->ubahUser($table,$username,$data);

		if($update){
			$this->session->set_flashdata('alert', 'sukses_update');
		  }else{
			echo "<script>alert('Gagal mengupdate Data');</script>";
		  }	
	}
}	