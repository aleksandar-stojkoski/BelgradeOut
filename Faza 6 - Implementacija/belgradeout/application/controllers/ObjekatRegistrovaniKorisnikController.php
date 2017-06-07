<?php

class ObjekatRegistrovaniKorisnikController extends CI_Controller{
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('objekat_registrovani_korisnik');
        $this->load->view('templates/footer');
    }
}