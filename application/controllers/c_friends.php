<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_friends extends CI_Controller {

	public function __construct()
 	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('User_model');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function index()
	{
		$this->load->view('v_navbar');
		$this->load->view('friends/v_friends');
		$this->load->view('v_info');
	}
	public function friends($id){
		$data['user'] = $this->User_model->getUser($id);
		$this->load->view('v_navbar', $data);		
		$this->load->view('v_navbar');
		$this->load->view('friends/v_friends');
		$this->load->view('v_info');
	}
	public function interest(){
		$this->load->view('v_navbar');
		$this->load->view('friends/v_interest');
		$this->load->view('v_info');
	}
	public function social(){
		$this->load->view('v_navbar');
		$this->load->view('friends/v_social');
		$this->load->view('v_info');
	}
}	