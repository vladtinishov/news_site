<?php 

class News extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('news_model');
    }
    function getAllNews(){
        $data['news_data'] = $this->news_model->getAllNews();
        $this->load->view('templates/header');
        $this->load->view('all_news', $data);
        $this->load->view('templates/footer.php');
    }
}