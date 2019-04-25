<?php

    class m_question extends CI_model{

        public function getQuestion($id_ask){
            $this->db->where('id_ask', $id_ask);
            $data =$this->db->get('ask');
            return $data->result_array();
        }

        public function deleteQuestion($id){
		$this->db->where('id_ask', $id_ask);
		$this->db->delete('ask');
        }
        public function insertAnswer(){
            $ans = [
                "answer" => $this->input->post('ans'),
            ];
            $this->db->insert('ask',$ans);
        }
    }