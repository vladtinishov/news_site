<?php

class News_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    public function getAllNews(){
        $query = $this->db->query('SELECT 
                                    news_id, 
                                    news_title, 
                                    news_img, 
                                    news_date, 
                                    SUBSTRING(news_text, 1, 50) as news_text
                                    FROM news
                                    ');
        return $query->result();
    }
    public function getTodayNews(){
        return $query->result();
    }
}
