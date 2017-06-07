<?php

class IndexRegistrovaniKorisnikController extends CI_Controller{
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('index_registrovani_korisnik');
        $this->load->view('templates/footer');
    }
}