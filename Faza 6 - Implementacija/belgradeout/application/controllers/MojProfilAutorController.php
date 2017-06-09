<?php
// izrada koda: Milica Tanasković 0360/2014

class MojProfilAutorController extends CI_Controller{
    
    
    public function __construct() {
        parent::__construct();
        $this->load->library(array('session'));
    }
    
    public function index(){
        
      //  $data['username'] = $this->session->userdata('username');
        $id =  $this->session->userdata('id');
        $this->load->model('MojProfilAutorModel');
        $rez=$this->MojProfilAutorModel->dohvatiPodatke($id);
        
        
        $this->load->view('templates/header');
        $this->load->view('moj_profil_autor',$rez);
        $this->load->view('templates/footer');
    }
    
    
    /*
    
    function DohvatiPodatke(){
        
        $id =  $this->session->userdata('id');
        $this->load->model('MojProfilAutorModel');
        $rez=$this->MojProfilAutorModel->dohvatiPodatke($id);
       
    }  */
}