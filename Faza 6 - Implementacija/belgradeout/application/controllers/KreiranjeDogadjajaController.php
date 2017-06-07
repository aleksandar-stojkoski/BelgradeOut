<?php

class KreiranjeDogadjajaController extends CI_Controller{
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('kreiranje_dogadjaja');
        $this->load->view('templates/footer');
    }
}