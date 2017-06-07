<?php

class DogadjajGostRegistrovaniKorisnikController extends CI_Controller{
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('dogadjaj_gost_registrovani_korisnik');
        $this->load->view('templates/footer');
    }
}