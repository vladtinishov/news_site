<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('news_model');
	}
	public function index()
	{
		$data['news_data'] = $this->news_model->getTodayNews();
		$this->load->helper('url');
		$this->load->view('templates/header.php');
		$this->load->view('welcome_message', $data);
		$this->load->view('templates/footer.php');
	}
}
