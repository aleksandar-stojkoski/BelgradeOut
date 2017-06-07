<?php

class ZahtevModeratorController extends CI_Controller{
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('zahtev_moderator');
        $this->load->view('templates/footer');
    }
}