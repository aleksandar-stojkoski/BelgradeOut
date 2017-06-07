<?php

class RegistracijaKorisnikController extends CI_Controller{
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('registracija_korisnik');
        $this->load->view('templates/footer');
    }
}