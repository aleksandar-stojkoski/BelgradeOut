<?php

class DogadjajAutorController extends CI_Controller{
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('dogadjaj_autor');
        $this->load->view('templates/footer');
    }
}