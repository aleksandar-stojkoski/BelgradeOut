<?php

class KreiranjeListeOmiljenihController extends CI_Controller{
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('kreiranje_liste_omiljenih');
        $this->load->view('templates/footer');
    }
}