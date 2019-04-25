<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    public function __construct() {
        $this->load->database();
        $this->load->helper('url');
    }
    
    public function login($table,$where){
        $this->db->where($where);
        return $this->db->get($table);
    }

    public function User($username){
        $this->db->where('username',$usernmae);
        $result = $this->db->get('user');
        return $result->row_array();
    }
}