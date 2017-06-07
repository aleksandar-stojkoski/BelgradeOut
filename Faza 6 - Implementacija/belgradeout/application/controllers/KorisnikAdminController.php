<?php

class KorisnikAdminController extends CI_Controller{
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('korisnik_admin');
        $this->load->view('templates/footer');
    }
}