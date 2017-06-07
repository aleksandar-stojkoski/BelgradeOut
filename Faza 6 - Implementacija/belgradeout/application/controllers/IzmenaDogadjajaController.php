<?php

class IzmenaDogadjajaController extends CI_Controller{
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('izmena_dogadjaja');
        $this->load->view('templates/footer');
    }
}