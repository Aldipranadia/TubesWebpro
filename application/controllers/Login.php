<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_login');
	}
 
	public function index(){		
		$data['judul'] = "Halaman login";
		$this->load->view('v_login',$data);
	}
	
	public function proses_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array('username ='=> $username, 'password ='=> $password);
		$query = $this->db->query('SELECT * FROM akun WHERE username = "'.$username.'" and password = "'.$password.'"');
		$cek = $query->num_rows();

		if ($cek > 0) {
			$data_session = array(
				'username' => $username,
				'status' => true,
			);
			$this->session->set_userdata($data_session);
			redirect('c_account/index/1');
		}
		else{
			redirect('login');
		}
	}
}