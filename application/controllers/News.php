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
    function getNews($news_id){
        $data['news_data'] = $this->news_model->getNews($news_id);
        $this->load->view('templates/header');
        $this->load->view('single', $data);
        $this->load->view('templates/footer.php');
    }
    function getSearchedNews(){
        $_POST = json_decode(file_get_contents('php://input'), true);
        $news_title = $_POST['title'];
        $res = $this->news_model->getSearchedNews($news_title);
        echo json_encode($res);
    }
}