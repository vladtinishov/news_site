<?php

class Writer extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('news_model');
    }
    public function autorize(){
        $password = $this->input->post('password');
        $login = $this->input->post('login');

        if($password == 'root' && $login == 'root'){
            $this->load->view('templates/header');
            $this->load->view('writer_index');
            $this->load->view('templates/footer');
        } 
        else{
            $data['error'] = 'Введены неверные данные';
            $this->load->view('templates/header');
            $this->load->view('writer_form', $data);
            $this->load->view('templates/footer');
        }
    }

    public function index(){
        $this->load->view('templates/header');
        $this->load->view('writer_form');
        $this->load->view('templates/footer');
    }

    public function setNews(){
        $title = $this->input->post('title');
        $text = $this->input->post('text');
        $uploadfile = 'assets/images/' . basename($_FILES['image']['name']);
        echo '<pre>';
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
            $image_name = $_FILES['image']['name'];
        } else {
            exit('error');
        }

        $this->news_model->setNews($title, $text, $image_name);
    }
}