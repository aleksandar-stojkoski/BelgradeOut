<?php

class RegistracijaAutorController extends CI_Controller{
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('registracija_autor');
        $this->load->view('templates/footer');
    }
}