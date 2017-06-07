<?php

class MojProfilAutorController extends CI_Controller{
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('moj_profil_autor');
        $this->load->view('templates/footer');
    }
}