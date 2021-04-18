<?php

class News_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    public function getAllNews(){
        $query = $this->db->get('news');
        return $query->result();
    }
}