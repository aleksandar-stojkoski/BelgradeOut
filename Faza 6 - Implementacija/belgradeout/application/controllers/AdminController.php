<?php

class AdminController extends CI_Controller{
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('admin');
        $this->load->view('templates/footer');
    }
}