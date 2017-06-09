<?php

class IndexController extends CI_Controller{

	public function __construct() {
        parent::__construct();
        $this->load->library(array('session'));
    }

    public function index() {
        $this->load->view('templates/header');
        $this->load->view('index');
        $this->load->view('templates/footer');
    }
}