<?php

class PrijavaZaModeratoraController extends CI_Controller{
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('prijava_za_moderatora');
        $this->load->view('templates/footer');
    }
}