<?php

class IndexAutorController extends CI_Controller{
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('index_autor');
        $this->load->view('templates/footer');
    }
}