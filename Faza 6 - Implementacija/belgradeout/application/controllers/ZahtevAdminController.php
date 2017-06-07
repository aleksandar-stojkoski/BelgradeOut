<?php

class ZahtevAdminController extends CI_Controller{
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('zahtev_admin');
        $this->load->view('templates/footer');
    }
}