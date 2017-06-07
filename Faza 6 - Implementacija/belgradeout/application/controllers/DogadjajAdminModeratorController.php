<?php

class DogadjajAdminModeratorController extends CI_Controller{
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('dogadjaj_admin_moderator');
        $this->load->view('templates/footer');
    }
}