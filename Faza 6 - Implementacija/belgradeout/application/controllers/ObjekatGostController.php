<?php

class ObjekatGostController extends CI_Controller{
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('objekat_gost');
        $this->load->view('templates/footer');
    }
}