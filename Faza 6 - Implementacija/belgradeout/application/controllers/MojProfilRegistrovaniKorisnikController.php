<?php

class MojProfilRegistrovaniKorisnik extends CI_Controller{
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('moj_profil_registrovani_korisnik');
        $this->load->view('templates/footer');
    }
}