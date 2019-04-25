<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_answer extends CI_Controller {
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
        $this->load->view('v_answer', $data);
		$this->load->view('info');
    }
    public function tambahAns()
	{
		$this->m_question->insertAnswer();
        redirect('c_account/index/1');
	}
}	