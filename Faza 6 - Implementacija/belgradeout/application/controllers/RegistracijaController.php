<?php

class RegistracijaController extends CI_Controller{
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('registracija');
        $this->load->view('templates/footer');
    }
}