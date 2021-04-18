<?php

class Writer extends CI_Controller{
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
}