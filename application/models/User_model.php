<?php

class User_model extends CI_model{

    public function getUser($id){
        $this->db->where('id', $id);
        $data = $this->db->get('user');
        return $data->result_array();
    }

    public function ubahUser($table, $username, $data){
       
    }
    
}