<?php

class ModeratorController extends CI_Controller{
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('moderator');
        $this->load->view('templates/footer');
    }
}