<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_account extends CI_Controller {

	public function __construct()
 	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('User_model');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function index($id){
		$data['user'] = $this->User_model->getUser($id);
		$this->load->view('v_navbar', $data);
		$this->load->view('account/v_account', $data);
		$this->load->view('v_info');
	}
}	