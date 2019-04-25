<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_question extends CI_Controller {

	public function __construct()
 	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_question');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function index()
	{
		$id_ask = "1";
		$data['ask'] = $this->m_question->getQuestion($id_ask);
		$this->load->view('navbar');
		$this->load->view('v_question', $data);
		$this->load->view('info');
	}
	public function hapus($id_ask){
		$id_ask = "1";
		$new['ask'] = $this->m_question->deleteQuestion($id_ask);
		redirect('c_question','refresh');
	}
}	