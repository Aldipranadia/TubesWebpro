<?php

class M_signup extends CI_model
{
    public function __construct() {
        $this->load->database();
    }
    
    public function insert_akun() {
        $user = [
			"email" => $this->input->post('email', true),
			"fullname" => $this->input->post('fullname'),
			"username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true),
            "day" => $this->input->post('day', true),
            "month" => $this->input->post('month', true),
            "year" => $this->input->post('year', true),
			"gender" => $this->input->post('gender', true),
			"language" => $this->input->post('language', true),
		];

        $this->db->insert('akun',$user);
    }
}
