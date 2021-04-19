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
                                    ORDER BY news_id DESC
                                    ');
        return $query->result();
    }
    public function getTodayNews(){
        $query = $this->db->query('SELECT 
                                    news_id, 
                                    news_title, 
                                    news_img, 
                                    news_date, 
                                    SUBSTRING(news_text, 1, 50) as news_text
                                    FROM news WHERE news_date="'.date('Y-m-d').'"');
        return $query->result();
    }
    public function getNews($news_id){
        $query = $this->db->query('SELECT * FROM news WHERE news_id='.$news_id);
        return $query->result();
    }
    public function setNews($news_title, $news_text, $news_image){
        $date = date('Y-m-d');

        $this->db->query("INSERT INTO 
                            news(
                                news_title, news_text, news_img, news_date
                                )
                            VALUES(
                                '$news_title',
                                '$news_text',
                                '$news_image',
                                '$date'
                                )
                                ");

    }
    public function getSearchedNews($news_title){
        $query = $this->db->query("SELECT * FROM news 
                                    WHERE news_title LIKE '%$news_title%'");
        return json_encode($query->result());
    }
}
