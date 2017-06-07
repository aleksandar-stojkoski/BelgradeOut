<?php

class IndexController extends CI_Controller{
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('index');
        $this->load->view('templates/footer');
    }
}