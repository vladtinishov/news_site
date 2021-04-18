<?php

class Writer extends CI_Controller{
    public function autorize(){
        $password = $this->input->post('password');
        $login = $this->input->post('login');

        if($password == 'root' && $login == 'root'){
            echo 'succes';
        } 
        else{
            echo 'wrong';
        }
    }

    public function index(){
        $this->load->view('templates/header');
        $this->load->view('writer_index');
        $this->load->view('templates/footer');
    }
}